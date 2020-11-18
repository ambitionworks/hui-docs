---
title: Extending Hui
description: Extending Hui components
extends: _layouts.documentation
section: content
---

# Extending Hui

In keeping with the principals of being a minimal foundation, <span class="hui">Hui</span> encourages you to extend the base components to ensure your application maintains a consistent look and feel.

## Extending components

Let's say you know you're going to have a _Call to Action Button_ (hereafter "CTAB") in multiple parts of your app. The button should be consistent with your app's brand and should be easy for other developers to implement, so a component is the perfect use case.

The first step would be to create a new component in your `resources/views/components` directory. Let's call the file `cta-button.blade.php`.

The tersest implementation of your CTAB would look like this:
```html
<x-dynamic-component component="hui-button">
    {{ $slot }}
</x-dynamic-component>
```

> This utilizes Laravel's [Dynamic Components](https://laravel.com/docs/master/blade#dynamic-components), which allows us to do some very important things, such as forward properties and attributes.

Rendering your new component in a Blade template with `<x-cta-button>Sign up now</x-cta-button>` will display a button with <span class="hui">Hui's</span> default styling, or an unstyled button if you've disabled the default styles.

### Adding styling

Adding your own style to your CTAB is a simple process, you can just add a `class` in `cta-button.blade.php`:
```html
<x-dynamic-component component="hui-button" class="rounded-lg text-white font-bold bg-gradient-to-br from-red-500 to-purple-500">
    {{ $slot }}
</x-dynamic-component>
```
Assuming you're using Tailwind, you should have a prettier looking CTAB now when you call `<x-cta-button>Sign up now</x-cta-button>`.

### Attributes and props

If you've read the documention for the [Button](/docs/components/button) component, you might know there is a property you can pass in to `<x-hui-button>` called `pop` to give buttons a hover effect. If you go ahead and add that to your CTAB call now (e.g. `<x-cta-button pop>Sign up now</x-cta-button>`) you won't actually see the pop effect you were hoping for.

As mentioned above, forwarding properties and attributes is a very important and powerful feature of Dynamic Components, so let's implement that now. Update `cta-button.blade.php` like so:

```html
<x-dynamic-component component="hui-button" class="rounded-lg text-white font-bold bg-gradient-to-br from-red-500 to-purple-500" {{ $attributes }}>
    {{ $slot }}
</x-dynamic-component>
```

Just like that, `<x-cta-button pop>Sign up now</x-cta-button>` will now pop as expected! But hold on... this might result in some unexpected behavior. Now a developer implementing `<x-cta-button>` could start passing in some additional attributes and properties that you're not really anticipating or expecting! Luckily it's pretty simple to limit what can be passed in here, for example updating `cta-button.blade.php` like so will prevent some of those additional properties and attributes from being passed down to the underlying `<hui-button>` component.

```html
<x-dynamic-component component="hui-button" class="rounded-lg text-white font-bold bg-gradient-to-br from-red-500 to-purple-500" {{ $attributes->except(['class', 'loading', 'disabled']) }}>
    {{ $slot }}
</x-dynamic-component>
```

## What about slots?

So far we've been working with a fairly simple <span class="hui">Hui</span> component - the [Button](/docs/components/button). The simplicity of the Button means there is only a single slot, but a more complex component will have multiple slots. Let's use the [Alert](/docs/components/alert) as our next example. Alerts have a `title` prop, however props can also be rendered with slots, in the event that the content is more complex than a simple string.

Let's imagine now your app will have a couple of predefined alerts that may be triggered under certain circumstances. We'll call one a _Danger Alert_ and set up a custom component for it, similar to what we did with CTAB, with a file named `danger-alert.blade.blade`. Since this is a dangerous alert, we'll add some dangerous styling off the bat.

```html
<x-dynamic-component component="hui-alert" class="border-l-8 border-red-600 bg-red-100 text-red-600" {{ $attributes->except('class') }}>
    {{ $slot }}
</x-dynamic-component>
```

If you want to have a fixed `title` prop for all _Danger Alerts_, it is trivial to implement it in the `<x-dynamic-component>`.

```html
<x-dynamic-component component="hui-alert" class="border-l-8 border-red-600 bg-red-100 text-red-600" {{ $attributes->except('class') }}>
    <x-slot name="title">
        <x-hui-text h3>Something dangerous happened!</x-hui-text>
    </x-slot>
    {{ $slot }}
</x-dynamic-component>
```

But sometimes having a the same title isn't going to cut it. It would be great if you could set a title from your `<x-danger-alert>` component, right? But if you give this a try...

```html
<x-danger-alert>
    <x-slot name="title">
        <x-hui-text h3>Uh oh!</x-hui-text>
    </x-slot>
    Have you tried turning it off then on again?
</x-danger-alert>
```

... you're not going to see your "Uh oh!" title. This is because slotted content is not passed to the underlying component. Luckily <span class="hui">Hui</span> ships with a Blade directive to make this work really easily! Jump back to your `danger-alert.blade.blade` and add the `@huislot` directive, like so:

```html
<x-dynamic-component component="hui-alert" class="border-l-8 border-red-600 bg-red-100 text-red-600" {{ $attributes->except('class') }}>
    @huislot('title')
    {{ $slot }}
</x-dynamic-component>
```

No changes are necessary to your `<x-danger-alert>` call, so the snippet above will now show an Alert with the "Uh oh!" title. ✨

## Supporting PurgeCSS
