---
title: Button
description: Hui Button component
extends: _layouts.documentation
section: content
---

# Button

```html
<x-hui-button size="sm" loading disabled>Loading ...</x-hui-button>
<x-hui-button pop palette="primary">Send</x-hui-button>
```

## Props
| Name | Values | Default | Purpose |
|---|---|---|---|
| palette | `'*'` | '' | Set the [color palette](/docs/customization#palette). |
| size | `'*'` | '' | Set the [size scale](/docs/customization#scale). |
| disabled | `bool` | `false` | Disable the button. |
| loading | `bool` | `false` | Show a [Loading](/docs/components/loading) component. |
| pop | `bool` | `false` | Translate the y-position on hover to create a "pop up" effect. |

## Slots
| Name | Default class | Purpose |
|---|---|---|
| _default_ | `.hui-button` | Contains content |
