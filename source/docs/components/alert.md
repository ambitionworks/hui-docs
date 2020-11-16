---
title: Alert
description: Hui Alert component
extends: _layouts.documentation
section: content
---

# Alert

```html
<x-hui-alert class="bg-green-100 border-l-4 border-green-500 text-green-500 p-4">
    Bibendum maecenas vitae a sagittis tortor tristique, ultricies eros duis tellus et venenatis, ligula tempus nascetur adipiscing pulvinar.
</x-hui-alert>
<x-hui-alert palette="primary">
    Bibendum maecenas vitae a sagittis tortor tristique, ultricies eros duis tellus et venenatis, ligula tempus nascetur adipiscing pulvinar.
</x-hui-alert>
```

## Props
| Name | Values | Default | Purpose |
|---|---|---|---|
| palette | `'*'` | '' | Set the [color palette](/docs/customization) |
| title | `'*'` | '' | Add an extra element above the content to represent a title. |

## Slots
| Name | Default class | Purpose |
|---|---|---|
| _default_ | `.hui-alert` | Contains content |

### Notes

Title element is wrapped in a `.hui-alert__title` class.
