
# Guarder Drupal Custom Theme Project

A fully custom-built Drupal theme and project for the **Guarder Security Services** website, inspired by the original HTML design and carefully integrated into Drupal CMS.

## 🚀 Project Overview

This project showcases:
- **Custom Drupal Theme** with pixel-perfect integration of original HTML template
- **Bootstrap Integration** for responsive layout and components
- **Inline SVG Support** for icons and images
- **Custom Block Template** for homepage slider (no extra wrappers)
- **Views Customization** for dynamic services section
- **Twig Templating** and **Preprocess Functions** for clean output
- **Fully Responsive Design**

## 🎨 Features

- Custom hero slider using Bootstrap Carousel
- Dynamic services section using Drupal Views and custom templates
- Inline SVG rendering for flexible styling
- Custom menu template with Bootstrap classes
- Clean semantic HTML output by overriding block and region templates
- Performance optimizations: assets loaded via `guarder.libraries.yml`

## 🛠️ Technologies Used

- Drupal 10.x
- Bootstrap 4.x
- Twig Templating Engine
- PHP (Custom module for preprocess functions)
- Lando for local development
- Composer for dependency management

## 🧩 Project Structure

```
web/
├── themes/
│   └── guarder/
│       ├── css/
│       │   ├── bootstrap.css
│       │   ├── style.css
│       │   └── responsive.css
│       ├── js/
│       │   ├── bootstrap.js
│       │   └── custom.js
│       ├── templates/
│       │   ├── block/
│       │   │   └── block--guarder-slider.html.twig
│       │   ├── menu/
│       │   │   └── menu--main.html.twig
│       │   ├── node/
│       │   │   └── page.html.twig
│       │   ├── page/
│       │   │   └── page.html.twig
│       │   └── system/
│       │       └── region--hero.html.twig
│       ├── guarder.info.yml
│       ├── guarder.libraries.yml
│       └── guarder.theme
└── modules/
    └── guard/
        ├── guard.module
        └── templates/
            └── views-style-guard-services.html.twig
```

## 🧩 Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Gursimran07316/guarder-drupal-theme.git
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Start Lando:
   ```bash
   lando start
   ```

4. Import the database and config if available.

5. Clear Drupal cache:
   ```bash
   lando drush cr
   ```

6. Enjoy! 🚀

## 🧩 Development Workflow

- Custom templates stored under `themes/guarder/templates/`
- All CSS and JS files are declared in `guarder.libraries.yml`
- Use `lando drush cr` after template changes
- Commit and push updates regularly to GitHub

## 📖 License

This project is open-source and available under the [MIT License](LICENSE).

## 🙌 Acknowledgements

- Bootstrap Framework
- Drupal Community & Documentation
- Original HTML design inspiration

## ✍️ Author

**Gursimran (Guri)**  
Frontend & Drupal Developer

Connect:
- [LinkedIn](https://linkedin.com/in/gursimran07316)
- [Portfolio](https://gursimrankhela.com/)

---

```

### ✅ Next Step:
Just copy this, create a `README.md` file in your GitHub repo, and paste it.

---

### 🚀 Bonus Offer:
If you want, I can also give you:
✅ Custom GitHub repository **description** and **tags**  
✅ A **preview screenshot** for your repo  
✅ Help you write a **first good commit message**

Would you like that? It will make your GitHub repo look fully professional! 🚀