---
title: Slide-out
description: Hui Slide-out component
extends: _layouts.documentation
section: content
---

# Slide-out
<span class="inline-block px-2 bg-gradient-to-br from-orange-500 to-pink-600 rounded-lg font-semibold">Alpine.js</span>


```html
<x-hui-slide-out position="left" class="max-w-screen-sm w-full min-h-screen z-40 p-8 font-bold text-lg text-white bg-yellow-400 ease-linear duration-200">
    <x-slot name="handle">
        <x-hui-button size="sm" palette="warning" class="rounded-full px-2">
            <svg class="h-6 w-6 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
            </svg> Trigger
        </x-hui-button>
    </x-slot>
    <x-hui-col>
        <x-hui-row class="justify-end">
            <x-hui-button @click="open = false" class="bg-transparent border-0 hover:text-yellow-100">
                <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </x-hui-button>
        </x-hui-row>
        <x-hui-row>I am content</x-hui-row>
    </x-hui-col>
</x-hui-slide-out>
```

## Props
| Name | Values | Default | Purpose |
|---|---|---|---|
| position | `'top', 'right', 'bottom', 'left'` | `'right'` | Position of the slide-out |

## Slots
| Name | Default class | Purpose |
|---|---|---|
| _default_ | `.hui-slide-out__content` | Contains content |
| handle | `.hui-slide-out__handle` | Content for the "handle" which toggles the "open" state |

### Notes
* `<x-hui-slide-out>` component container elements are wrapped with the class `.hui-slide-out`.
* Slide-out visibility is controlled by the Alpine.js data property `open`.