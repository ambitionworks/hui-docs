---
title: List component
description: Hui List component
extends: _layouts.documentation
section: content
---

# List
<span class="inline-block px-2 bg-gradient-to-br from-orange-500 to-pink-600 rounded-lg font-semibold">Alpine.js</span>

```html
<x-hui-list class="border rounded-lg p-4 divide-y space-y-2">
    <x-hui-list.item class="pt-2">Item #1</x-hui-list.item>
    <x-hui-list.item class="pt-2">Item #2</x-hui-list.item>
    <x-hui-list.item class="pt-2">Item #3</x-hui-list.item>
</x-hui-list>
```

## Props
| Name | Values | Default | Purpose |
|---|---|---|---|
| default | `string`, `array` | `''` | Set which child components are in the "selected" state. |

## Slots
| Name | Default class | Purpose |
|---|---|---|
| _default_ | `.hui-list` | Contains content |

## Sub-components
| Name | Default class | Purpose |
|---|---|---|
| `<x-hui-list.item>` | `.hui-list__item` | [Refer to documentation](/docs/components/list/item) |
| `<x-hui-list.accordion-item>` | `.hui-list__item--accordion` | [Refer to documentation](/docs/components/list/accordion-item) |
| `<x-hui-list.collapsible-item>` | `.hui-list__item--collapsible` | [Refer to documentation](/docs/components/list/collapsible-item) |


### Notes
* Mixing `<x-hui-list.accordion-item>` and `<x-hui-list.collapsible-item>` sub-components will likely result in inconsistent behavior or errors.
* List item visibility is controlled by the Alpine.js data property `selected`.
    * In the case that the `<x-hui-list>` is wrapping `<x-hui-list.collapsible-item>` items, `selected` is a map where the keys are the sub-component's `key` prop.
    * In the case that the `<x-hui-list>` is wrapping `<x-hui-list.accordion-item>` items, `selected` is a string representing the selected sub-component's `key` prop.