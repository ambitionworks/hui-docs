---
title: Tab Handle
description: Hui Tab Handle component
extends: _layouts.documentation
section: content
---

# Tab Handle

```html
<x-hui-tabs default="example">
    <x-slot name="handles">
        <x-hui-tabs.handle key="example" selectedClass="bg-blue-500 text-white hover:bg-blue-700" class="p-2 mx-2 font-medium rounded-lg hover:bg-gray-200">Example tab</x-hui-tabs.handle>
    </x-slot>
</<x-hui-tabs>
```

## Props
| Name | Values | Default | Purpose |
|---|---|---|---|
| key | `string` | `''` | Key of the tab handle/content |
| selectedClass | `string` | `''` | Classes to be applied to the handle element when the tab is selected |

## Slots
| Name | Default class | Purpose |
|---|---|---|
| _default_ | `.hui-tabs__handle` | Contains content |
