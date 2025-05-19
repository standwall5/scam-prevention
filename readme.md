# Project Documentation

## 📄 Adding a New Page

To add a new page to this website, follow these steps:

### 1. Use `nav.html` for Navigation

Every new page must include the site's main navigation. This is done by using a reusable HTML snippet called `nav.html`.

Instead of copying and pasting the nav code manually, we use **W3Schools-style includes** with a JavaScript helper (`include.js`) to insert the nav bar dynamically.

### 2. How to Use the Include

Inside your new HTML file, make sure to:

#### ✅ Add this `<script>` at the end of the `<body>` and this `<div>` at the start of the `<body>`:

```html
<div w3-include-html="nav.html"></div>
```

```html
<script src="include.js"></script>
```
