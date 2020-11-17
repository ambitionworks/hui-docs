---
title: Collapsible List Item
description: Hui Collapsible List Item component
extends: _layouts.documentation
section: content
---

# Collapsible List Item

The main difference between `<x-hui-list.collapsible-item>` and `<x-hui-list.accordion-item>` is multiple collapsible items may be in the "selected" state at once.

```html
<x-hui-list :default="['first', 'second']">
    <x-hui-list.collapsible-item key="first" handle="Item #1 Handle">Item #1 Content</x-hui-list.collapsible-item>
    <x-hui-list.collapsible-item key="second" handle="Item #2 Handle">Item #2 Content</x-hui-list.collapsible-item>
    <x-hui-list.collapsible-item key="third" handle="Item #3 Handle">Item #3 Content</x-hui-list.collapsible-item>
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
* `<x-hui-list.collapsible-item>` component container elements are wrapped with the class `.hui-list__item--collapsible`.
* Classes passed in via attributes on `<x-hui-list.collapsible-item>` are appended to the default slot class (`.hui-list__item-content`).
* Other attributes are applied to the component container element.
