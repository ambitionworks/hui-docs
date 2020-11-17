---
title: Accordion List Item
description: Hui Accordion List Item component
extends: _layouts.documentation
section: content
---

# Accordion List Item

```html
<x-hui-list :default="first">
    <x-hui-list.accordion-item key="first" handle="Item #1 Handle">Item #1 Content</x-hui-list.accordion-item>
    <x-hui-list.accordion-item key="second" handle="Item #2 Handle">Item #2 Content</x-hui-list.accordion-item>
    <x-hui-list.accordion-item key="third" handle="Item #3 Handle">Item #3 Content</x-hui-list.accordion-item>
</x-hui-list>
```

## Props
| Name | Values | Default | Purpose |
|---|---|---|---|
| key | `string` | Randomly generated | Used for "selected" state behavior. Must be supplied if using the `default` property on `<x-hui-list>`. |
| handle | `string` | `''` | Content for the "handle" which toggles "selected" state  |
| handleClass | `string` | `''` | Appended to the "handle" element |
| containerClass | `string` | `''` | Appended to the container element |

## Slots
| Name | Default class | Purpose |
|---|---|---|
| _default_ | `.hui-list__item-content` | Contains content |
| handle | `.hui-list__item-handle` | Content for the "handle" which toggles "selected" state |

### Notes
* `<x-hui-list.accordion-item>` component container elements are wrapped with the class `.hui-list__item--accordion`.
* Classes passed in via attributes on `<x-hui-list.accordion-item>` are appended to the default slot class (`.hui-list__item-content`).
* Other attributes are applied to the component container element.