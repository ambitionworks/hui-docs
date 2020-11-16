---
title: Page component
description: Hui Page component
extends: _layouts.documentation
section: content
---

# Page

```html
<x-hui-page size="xl" class="sm:px-8">
    <x-slot name="header">
        <x-hui-page.header class="bg-white text-black font-2xl font-extrabold px-4 py-2 h-16 my-16 border-b">
            I'm the page header
        </x-hui-page.header>
    </x-slot>
    <x-slot name="footer">
        <x-hui-page.footer class="bg-indigo-500 text-white px-4 py-2 mt-8">
            I'm the page footer
        </x-hui-page.footer>
    </x-slot>

    I'm the page content.

</x-hui-page>
```

## Props
| Name | Values | Default | Purpose |
|---|---|---|---|
| size | 'sm', 'md', 'lg , 'xl', 'full' | 'full' | Set the [maximum width](https://tailwindcss.com/docs/max-width) using the screen breakpoints |

## Slots
| Name | Default class | Purpose |
|---|---|---|
| _default_ | `.hui-page__content` | Wraps page content |
| header | _n/a_ | Rendered above the page content |
| footer | _n/a_ | Rendered below the page content |

## Sub-components
| Name | Default class | Purpose |
|---|---|---|
| `<x-hui-page.header>` | `.hui-page__header` | `<header>` element |
| `<x-hui-page.footer>` | `.hui-page__footer` | `<footer>` element |