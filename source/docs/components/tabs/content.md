---
title: Tab Content
description: Hui Tab Content component
extends: _layouts.documentation
section: content
---

# Tab Content

```html
<x-hui-tabs default="example">
    <x-slot name="handles">
        <x-hui-tabs.handle key="example">Example tab</x-hui-tabs.handle>
    </x-slot>
    <x-hui-tabs.content key="example">First tab content</x-hui-tabs.content>
</<x-hui-tabs>
```

## Props
| Name | Values | Default | Purpose |
|---|---|---|---|
| key | `string` | `''` | Key of the tab handle/content |

## Slots
| Name | Default class | Purpose |
|---|---|---|
| _default_ | `.hui-tabs__content` | Contains content |
