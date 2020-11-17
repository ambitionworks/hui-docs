---
title: Modal
description: Hui Modal component
extends: _layouts.documentation
section: content
---

# Modal
<span class="inline-block px-2 bg-gradient-to-br from-orange-500 to-pink-600 rounded-lg font-semibold">Alpine.js</span>


```html
<x-hui-modal>
    <x-slot name="handle">
        <x-hui-button palette="danger">Delete</x-hui-button>
    </x-slot>
    <x-hui-card class="bg-white border shadow-lg text-left">
        <x-hui-text h4 class="p-4 pb-0">Are you sure?</x-hui-text>
        <x-hui-text size="xs" class="p-4">Maybe this can be un-done, I don't know, I am just an example.</x-hui-text>
        <x-hui-divider space=0 />
        <x-hui-row class="justify-between space-x-4 p-3">
            <x-hui-button @click="open = false">Nevermind</x-hui-button>
            <x-hui-button palette="danger"><x-hui-text span b>I am sure</x-hui-text></x-hui-button>
        </x-hui-row>
    </x-hui-card>
</x-hui-modal>
```

## Props
| Name | Values | Default | Purpose |
|---|---|---|---|
| handle | `string` | `''` | Content for the "handle" which toggles the modal display |

## Slots
| Name | Default class | Purpose |
|---|---|---|
| _default_ | `.hui-modal__content` | Contains content |
| handle | `.hui-modal__handle` | Content for the "handle" which toggles "selected" state |

### Notes
* `<x-hui-modal>` component container elements are wrapped with the class `.hui-modal`.
* Modal visibility is controlled by the Alpine.js data property `open`.