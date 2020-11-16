---
title: Loading
description: Hui Loading component
extends: _layouts.documentation
section: content
---

# Loading

```html
<x-hui-loading />
```

## Slots
| Name | Default class | Purpose |
|---|---|---|
| _default_ | `.hui-loading` | Contains content |

### Notes
* The default slot is optional. An animated SVG will be displayed if omitted.
* This component is rendered when the `loading` prop of `<x-hui-button />` is `true`.