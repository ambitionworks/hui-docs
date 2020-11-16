---
title: Col component
description: Hui Col component
extends: _layouts.documentation
section: content
---

# Col[umn]

```html
<x-hui-col size="6">
    This column is half width.
</x-hui-col>
<x-hui-col :size="['12', 'sm' => 6, 'lg' => 4]">
    This column is full width, or...
        ...half width when the screen is larger than the "sm" breakpoint
        ...third width when the screen is larger than the "lg" breakpoint
</x-hui-col>
```

## Props
| Name | Values | Default | Purpose |
|---|---|---|---|
| size | `int`, `array` | 12 | Set the width of the col. This is always expressed out of a maximum size of 12. An array can be passed in with breakpoints as the array keys to make the column width responsive. |

## Slots
| Name | Default class | Purpose |
|---|---|---|
| _default_ | `.hui-col` | Contains content |
