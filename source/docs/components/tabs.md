---
title: Tabs
description: Hui Tabs component
extends: _layouts.documentation
section: content
---

# Tabs
<span class="inline-block px-2 bg-gradient-to-br from-orange-500 to-pink-600 rounded-lg font-semibold">Alpine.js</span>


```html
<x-hui-tabs default="first" class="border rounded-lg p-4" handlesClass="flex -mx-4">
    <x-slot name="handles">
        <x-hui-tabs.handle key="first" selectedClass="bg-blue-500 text-white hover:bg-blue-700" class="p-2 mx-2 font-medium rounded-lg hover:bg-gray-200">First tab</x-hui-tabs.handle>
        <x-hui-tabs.handle key="second" selectedClass="bg-blue-500 text-white hover:bg-blue-700" class="p-2 mx-2 font-medium rounded-lg hover:bg-gray-200">Second tab</x-hui-tabs.handle>
    </x-slot>
    <x-divider size="4" />
    <x-hui-tabs.content key="first">First tab content</x-hui-tabs.content>
    <x-hui-tabs.content key="second">Second tab content</x-hui-tabs.content>
</x-hui-tabs>
```

## Props
| Name | Values | Default | Purpose |
|---|---|---|---|
| default | `string` | `''` | Key of the initially selected tab |
| handlesClass | `string` | `''` | Classes to be applied to the wrapper element of the `handles` slot |
| contentClass | `string` | `''` | Classes to be applied to the wrapper element of the `_default_` content slot |

## Slots
| Name | Default class | Purpose |
|---|---|---|
| _default_ | `.hui-tabs__content` | Contains tab content |
| handles | `.hui-tabs__handles` | Content for the "handles" which toggles the "open" state on tab content |

## Sub-components
| Name | Default class | Purpose |
|---|---|---|
| `<x-hui-list.accordion-item>` | `.hui-list__item--accordion` | Refer to documentation |
| `<x-hui-list.collapsible-item>` | `.hui-list__item--collapsible` | Refer to documentation |

### Notes
* `<x-hui-tabs>` component container elements are wrapped with the class `.hui-tabs`.
* Tab visibility is controlled by the Alpine.js data property `selected`, a string representing the selected sub-component's `key` prop.