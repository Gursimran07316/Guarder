<?php

declare(strict_types=1);

namespace Drupal\Tests\menu_link_content\Functional;

use Drupal\Tests\content_translation\Functional\ContentTranslationUITestBase;
use Drupal\menu_link_content\Entity\MenuLinkContent;

/**
 * Tests the menu link content translation UI.
 *
 * @group Menu
 */
class MenuLinkContentTranslationUITest extends ContentTranslationUITestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultCacheContexts = ['languages:language_interface', 'session', 'theme', 'url.path', 'url.query_args', 'user.permissions', 'user.roles:authenticated'];

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'language',
    'content_translation',
    'menu_link_content',
    'menu_ui',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    $this->entityTypeId = 'menu_link_content';
    $this->bundle = 'menu_link_content';
    parent::setUp();
    $this->doSetup();
  }

  /**
   * {@inheritdoc}
   */
  protected function getTranslatorPermissions(): array {
    return array_merge(parent::getTranslatorPermissions(), ['administer menu']);
  }

  /**
   * {@inheritdoc}
   */
  protected function getAdministratorPermissions(): array {
    return array_merge(parent::getAdministratorPermissions(), ['administer themes', 'view the administration theme']);
  }

  /**
   * {@inheritdoc}
   */
  protected function createEntity($values, $langcode, $bundle_name = NULL) {
    $values['menu_name'] = 'tools';
    $values['link']['uri'] = 'internal:/admin/structure/menu';
    $values['title'] = 'Test title';

    return parent::createEntity($values, $langcode, $bundle_name);
  }

  /**
   * Ensure that a translate link can be found on the menu edit form.
   */
  public function testTranslationLinkOnMenuEditForm(): void {
    $this->drupalGet('admin/structure/menu/manage/tools');
    $this->assertSession()->linkNotExists('Translate');

    $menu_link_content = MenuLinkContent::create([
      'menu_name' => 'tools',
      'link' => ['uri' => 'internal:/admin/structure/menu'],
      'title' => 'Link test',
    ]);
    $menu_link_content->save();
    $this->drupalGet('admin/structure/menu/manage/tools');
    $this->assertSession()->linkExists('Translate');
  }

  /**
   * Tests that translation page inherits admin status of edit page.
   */
  public function testTranslationLinkTheme(): void {
    $this->drupalLogin($this->administrator);
    $entityId = $this->createEntity([], 'en');

    // Set up the default admin theme to test.
    $this->container->get('theme_installer')->install(['claro']);
    $edit = [];
    $edit['admin_theme'] = 'claro';
    $this->drupalGet('admin/appearance');
    $this->submitForm($edit, 'Save configuration');
    // Check that edit uses the admin theme.
    $this->drupalGet('admin/structure/menu/item/' . $entityId . '/edit');
    $this->assertSession()->responseContains('core/themes/claro/css/base/elements.css');
    // Check that translation uses admin theme as well.
    $this->drupalGet('admin/structure/menu/item/' . $entityId . '/edit/translations');
    $this->assertSession()->responseContains('core/themes/claro/css/base/elements.css');
  }

  /**
   * {@inheritdoc}
   */
  protected function doTestTranslationEdit(): void {
    $storage = $this->container->get('entity_type.manager')
      ->getStorage($this->entityTypeId);
    $storage->resetCache([$this->entityId]);
    $entity = $storage->load($this->entityId);
    $languages = $this->container->get('language_manager')->getLanguages();

    foreach ($this->langcodes as $langcode) {
      // We only want to test the title for non-english translations.
      if ($langcode != 'en') {
        $options = ['language' => $languages[$langcode]];
        $url = $entity->toUrl('edit-form', $options);
        $this->drupalGet($url);
        $this->assertSession()->pageTextContains("{$entity->getTranslation($langcode)->label()} [{$languages[$langcode]->getName()} translation]");
      }
    }
  }

}
