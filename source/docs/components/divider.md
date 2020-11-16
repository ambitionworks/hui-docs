---
title: Divider component
description: Hui Divider component
extends: _layouts.documentation
section: content
---

# Divider

```html
<x-hui-divider />
<x-hui-divider>
    I separate content with a label
</x-hui-divider>
```

## Props
| Name | Values | Default | Purpose |
|---|---|---|---|
| space | `int` | 4 | Set the [margin](https://tailwindcss.com/docs/margin#app) above/below the divider |
| align | 'left', 'center', 'right', 'justify' | 'center' | Set the [text alignment](https://tailwindcss.com/docs/text-align#app) of the divider label |
| dividerClass | `string` | '' | Applied to the divider label |

## Slots
| Name | Default class | Purpose |
|---|---|---|
| _default_ | `.hui-divider__content` | **Optionally** displays a label for the divider |

### Notes

Divider elements are wrapped in a `.hui-divider` class.