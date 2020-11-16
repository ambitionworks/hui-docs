---
title: Text component
description: Hui Text component
extends: _layouts.documentation
section: content
---

# Text

```html
<x-hui-text h1>I'm a H1 header</x-hui-text>
<x-hui-text size="sm">I'm a text-small paragraph</x-hui-text>
<x-hui-text span b>I'm a bold span</x-hui-text>
```

## Props
| Name | Values | Default | Purpose |
|---|---|---|---|
| size | 'xs', 'sm', 'base', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl' | 'base' | Set the [font size](https://tailwindcss.com/docs/font-size#app)  |
| b | `bool` | `false` | Renders element with `.font-bold` class
| i | `bool` | `false` | Renders element with `.italic` class
| p | `bool` | `true` | Renders as a `<p>` element
| span | `bool` | `false` | Renders as a `<span>` element
| h1 | `bool` | `false` | Renders as a `<h1>` element
| h2 | `bool` | `false` | Renders as a `<h2>` element
| h3 | `bool` | `false` | Renders as a `<h3>` element
| h4 | `bool` | `false` | Renders as a `<h4>` element
| h5 | `bool` | `false` | Renders as a `<h5>` element
| h6 | `bool` | `false` | Renders as a `<h6>` element

## Slots
| Name | Default class | Purpose |
|---|---|---|
| _default_ | `.hui-text` | Contains content |