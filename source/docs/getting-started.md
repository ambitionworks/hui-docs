---
title: Getting Started
description: Getting started with Hui
extends: _layouts.documentation
section: content
---

# Getting Started {#getting-started}

The central tenet of <span class="hui">Hui</span> is to provide a minimal foundation to build upon. As such, the footprint is small and easy to customize or remove. The components themselves mostly focus on composition and positioning; any visual styles can be easily disabled or overwritten.

## Installation {#installation}

> **Please note:** Installation should only be performed on a fresh Laravel project, as it may clobber certain files such as `resources/css/app.css` or `webpack.mix.js`.

You can install the package via composer:

```bash
composer require ambitionworks/hui
```

You can then run the install command:

```bash
php artisan hui:install
```

<span class="hui">Hui</span> will add Tailwind to your `package.json` file and move the default configuration files to the root of your project. It will also copy the default components to the `resources/views/components/hui` path.

You should then install dependencies and build the CSS.

```bash
npm install && npm run dev
```

---

### Including assets {#getting-started-adding-content}

Since <span class="hui">Hui</span> uses [Laravel Mix](https://laravel.com/docs/8.x/mix) you should refer to the official documentation for the most up-to-date information on how to include the asset files.

The simplest way is to include the following snippet in the `<head>` tag of your Views or Layouts:

```html
<link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
```

If you're planning on using the interactive components, you should also add Alpine.js script to your `<head>`, as well as the following `<style>` snippet.

```html
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<style>
    [x-cloak] { display: none; }
</style>
```
