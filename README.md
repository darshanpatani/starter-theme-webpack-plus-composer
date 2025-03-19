---
### 📌 **`README.md`**
---

### **`DarshanPatani WordPress Starter Theme`**

This is a **modern WordPress starter theme** built with:

- **Bootstrap 5**
- **Webpack** for asset bundling
- **Composer** for dependency management

## 🚀 Features

✅ Bootstrap 5 Integration  
✅ Webpack for SCSS & JS Compilation  
✅ Composer for PHP Package Management  
✅ Sidebar & Navigation Ready  
✅ Custom WP Bootstrap NavWalker

---

## 📥 1️⃣ Clone the Repository

```sh
git clone https://github.com/darshanpatani/starter-theme-webpack-plus-composer starter-theme-webpack-plus-composer
cd starter-theme-webpack-plus-composer
```

---

## ⚡ 2️⃣ Install Dependencies

### **Install Composer Packages**

```sh
composer install
```

### **Install NPM Packages**

```sh
npm install
```

---

## 🔨 3️⃣ Build Assets with Webpack

| Command         | Description                     |
| --------------- | ------------------------------- |
| `npm run build` | Compile CSS & JS for production |

---

## 🛠️ 4️⃣ Activate Theme in WordPress

1. Move the theme folder to `wp-content/themes/`
2. Go to **Appearance → Themes** in WordPress Admin
3. Activate the **DarshanPatani Starter Theme**

---

## 📂 File Structure

```
starter-theme-webpack-plus-composer/
│── assets/
│   ├── dist/ (You can upload only the **build** folder to the production site if needed.)
│   ├── js/ (JavaScript files)
│   ├── scss/ (SCSS styles)
│── includes/class/ (Custom PHP functions)
│── functions.php (Theme setup)
│── header.php (Header)
│── footer.php (Footer)
│── sidebar.php (Sidebar)
│── page.php (Page template)
│── webpack.config.js (Webpack configuration)
│── composer.json (PHP dependencies)
│── package.json (Node.js dependencies)
│── README.md (This file)
```

---

## 🏗️ 5️⃣ Make production Build

1. **Run Webpack**:
   ```sh
   npm run build
   ```
2. **Make Theme Edits**
3. **Test in Browser**

---

## 🔄 6️⃣ Change Namespace After Clone

By default, the theme uses the namespace:

```php
namespace darshanpatani\Wordpress\Theme\StarterTemplate;
```

### 🔹 **Steps to Update the Namespace**

1. Open the theme folder in a code editor.
2. Replace all instances of `darshanpatani\Wordpress\Theme\StarterTemplate` with your new namespace.
3. Update the `composer.json` file inside the theme directory:
   ```json
   "autoload": {
       "psr-4": {
           "YourNamespace\\Wordpress\\Theme\\StarterTemplate\\": "includes/class/"
       }
   }
   ```
4. **Regenerate Composer Autoload Files**  
   Run the following command:
   ```sh
   composer dump-autoload
   ```

---

## 🎯 Customization

Modify **`assets/scss/main.scss`** to change styles  
Modify **`assets/js/main.js`** to add JavaScript

---

## 📜 License

This project is licensed under the MIT License.

---

## ✨ Credits

Developed by **Darshan Patani**
