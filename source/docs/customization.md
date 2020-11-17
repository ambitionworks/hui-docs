---
title: Customizing Hui
description: Customizing Hui styles
extends: _layouts.documentation
section: content
---

# Customization

<span class="hui">Hui</span> deliberately ships with very minimal "base" styling. The goal is not to be an alternative to Bootstrap, but rather to provide building blocks for your application's UI.

## Tailwind

<span class="hui">Hui</span> has a dependency on [Tailwind](https://tailwindcss.com) for out-of-the-box components. While you're not strictly required to use Tailwind to theme your application (see [below](#css-classes)), it was built with Tailwind in mind. As such, you're free to use `class` attributes on any <span class="hui">Hui</span> components. <span class="hui">Hui</span> also supports purging of un-used Tailwind classes out of the box, even where dynamic classes are combined with props. The [Extending](/docs/extending) page describes how your own components can support purging.

### Tailwind plugins

The default styling for <span class="hui">Hui</span> is implemented using [Tailwind plugins](https://tailwindcss.com/docs/plugins). After installation, your `tailwind.config.js` file in the root of your project will include the following lines:

```javascript
plugins: [
    require('./hui/base/headers'),
    require('./hui/components/alert'),
    require('./hui/components/badge'),
    require('./hui/components/button'),
    require('./hui/components/card'),
    require('./hui/components/divider'),
    require('./hui/modifiers/palette'),
    require('./hui/modifiers/size'),
]
```

Plugins in `hui/base` and `hui/components` are the minimal base styles included with <span class="hui">Hui</span>. Feel free to comment them out or examine them and use them as a basis for your own styles.

> **Please note:** These may be overwritten by a future update so it is recommended to create your own plugins.

Plugins in `hui/modifiers` are directly tied to props and classes output by certain components (for example [Buttons](/docs/components/button) or [Alerts](/docs/components/alert)).

#### Palette {#palette}

The `palette` property on supported components will output the class `hui--palette-*`. This allows you to achieve consistent styling across a range of components by implementing component classes in the `hui/modifiers/palette` plugin.

#### Size scale {#scale}

The `size` property on supported components will output the class `hui--size-*`. This can be customized in the `hui/modifiers/size` plugin.

---

## CSS classes {#css-classes}

If you've taken a look at the default Tailwind plugins or the documentation for each component, you'll see that each include [BEM](http://getbem.com/introduction/)-esque classes by default. If you wish to style components by class name, you can do so in whatever method you're comfortable with.
