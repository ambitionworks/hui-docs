---
title: Popover
description: Hui Popover component
extends: _layouts.documentation
section: content
---

# Popover
<span class="inline-block px-2 bg-gradient-to-br from-orange-500 to-pink-600 rounded-lg font-semibold">Alpine.js</span>


```html
<!-- Acts like a "tooltip" -->
<x-hui-popover hover position="tc">
    <x-slot name="handle">
        <x-hui-button size="sm" palette="primary"><x-hui-text span b>Action</x-hui-text></x-hui-button>
    </x-slot>
    <div class="w-32 text-center p-1 rounded shadow-lg bg-black text-white text-xs">A "tooltip" popover</div>
</x-hui-popover>

<!-- Acts like a "dropdown" -->
<x-hui-popover position="bc">
    <x-slot name="handle">
        <x-hui-button size="sm">
            <svg class="h-5 w-5 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
            </svg>
            <x-hui-text span>More Actions</x-hui-text>
        </x-hui-button>
    </x-slot>
    <x-hui-list class="bg-white text-sm w-48 border rounded-lg shadow-xl">
        <x-hui-list.item class="py-2 px-hui-4"><x-hui-text span b class="text-xs uppercase text-gray-400">"Header"</x-hui-text></x-hui-list.item>
        <x-hui-divider space=0 />
        <x-hui-list.item class="p-4 hover:bg-gray-50 cursor-pointer">Option #1</x-hui-list.item>
        <x-hui-list.item class="p-4 hover:bg-gray-50 cursor-pointer">Option #2</x-hui-list.item>
        <x-hui-divider space=0 />
        <x-hui-list.item class="p-4 hover:bg-gray-50 cursor-pointer rounded-b-lg"><x-hui-text span b class="text-red-500">Scary option</x-hui-text></x-hui-list.item>
    </x-hui-list>
</x-hui-popover>
```

## Props
| Name | Values | Default | Purpose |
|---|---|---|---|
| handle | `string` | `''` | Content for the "handle" which toggles the modal display |
| position | `'rc', 'lc', 'tl', 'tc', 'tr', 'bl', 'bc','br'` | `'bl'` | Position of the popover content |
| contentClass | `string` | `''` | Classes to be applied to the _default_ slot |
| hover | `bool` | `false` | Whether popover content is triggered on hover |

## Slots
| Name | Default class | Purpose |
|---|---|---|
| _default_ | `.hui-popover__content` | Contains content |
| handle | `.hui-popover__handle` | Content for the "handle" which toggles "selected" state |

### Notes
* `'bl'` anchors the popover element 'bottom-left', `'rc` anchors 'right-center', `'tr'` anchors 'top-right', etc.
* Popover visibility is controlled by the Alpine.js data property `open`.