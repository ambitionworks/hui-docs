---
title: Row component
description: Hui Row component
extends: _layouts.documentation
section: content
---

# Row

```html
<x-hui-row size="md">
    <x-hui-col size="6">Left</x-hui-col>
    <x-hui-col size="6">Right</x-hui-col>
</x-hui-row>
```

## Props
| Name | Values | Default | Purpose |
|---|---|---|---|
| size | 'sm', 'md', 'lg , 'xl', 'full' | 'full' | Set the [maximum width](https://tailwindcss.com/docs/max-width) using the screen breakpoints |
| gap | `int` | '' | Set the [space between](https://tailwindcss.com/docs/space#app) row content. |

## Slots
| Name | Default class | Purpose |
|---|---|---|
| _default_ | `.hui-row` | Contains content |
