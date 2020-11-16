---
title: Badge
description: Hui Badge component
extends: _layouts.documentation
section: content
---

# Badge

```html
<x-hui-badge value="A badge" />
<x-hui-badge class="text-purple-700 bg-purple-100 border-purple-700">
    <x-hui-text size="lg" b>A slightly more complex badge</x-hui-text>
</x-hui-badge>
<x-hui-badge value="A dangerous badge" palette="danger" />
```

## Props
| Name | Values | Default | Purpose |
|---|---|---|---|
| palette | `'*'` | '' | Set the [color palette](/docs/customization#palette) |
| value | `'*'` | '' | Add an extra element above the content to represent a title. |

## Slots
| Name | Default class | Purpose |
|---|---|---|
| _default_ | `.hui-badge` | Contains content |

### Notes

`<x-hui-badge>` will render the `value` prop, but if omitted, a default slot.