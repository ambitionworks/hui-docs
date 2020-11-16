---
title: Components
description: An overview of Hui's components
extends: _layouts.documentation
section: content
---

# Components

<span class="inline-block px-2 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg font-semibold">Hui</span> components are copied to your `resource/views/components` directory upon installation. While these can be modified if you wish, your modifications **may be overwritten** by a future update. If you wish to customize a <span class="inline-block px-2 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg font-semibold">Hui</span> component, the best way to go about this is laid out on the [Extending](/docs/extending) page.

All <span class="inline-block px-2 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg font-semibold">Hui</span> components are prefixed by `<x-hui-*>`.

All components render attributes. The `class` attribute will be merged with the component's default class. This makes it easy to customize components with Tailwind classes while still retaining a degree of consistency.

Certain components may include sub-components intended to be rendered in either the primary slot (see [List](/docs/components/list) for an example), or a named slot (see [Tabs](/docs/components/tabs) for an example).