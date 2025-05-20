## 📄 Adding a New Page

### Use `template.html` for creating new pages

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Tab Icon/Favicon -->
    <link
      rel="shortcut icon"
      href="res/images/logoModuleFinal.png"
      type="image/x-icon"
    />

    <!-- Background Styling -->
    <link rel="stylesheet" href="blob.css" />
    <link rel="stylesheet" href="style.css" />

    <!-- Custom CSS link here -->
    <title>Document</title>
  </head>

  <body>
    <!-- Dynamically load the navigation bar -->
    <div w3-include-html="navbar.html"></div>

    <!-- Animation of background-->
    <div class="blob-cont">
      <div class="yellow blob"></div>
      <div class="red blob"></div>
      <div class="green blob"></div>
    </div>

    <div class="container">
      <!-- Insert content here -->
    </div>

    <!-- Script for the nav dynamic loading -->
    <script src="include.js"></script>
    <script>
      includeHTML();
    </script>
  </body>
</html>
```
