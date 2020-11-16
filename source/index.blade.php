@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24 {{-- bg-gradient-to-br from-blue-500 to-purple-600 --}} bg-gray-900 border border-gray-800 rounded-xl shadow-2xl p-8">
        <div>
            <h1 class="text-white text-5xl font-extrabold">{{ $page->siteName }}</h1>

            <p class="text-lg">A minimal collection of Laravel Blade components to assist in building <strong>composable</strong> and <strong>consistent</strong> server-rendered UI.</p>
            <div class="flex flex-col sm:flex-row mt-10 space-y-8 sm:space-y-0">
                <a href="/docs/getting-started" title="{{ $page->siteName }} getting started" class="bg-blue-600 hover:bg-blue-700 font-normal text-center text-white hover:text-white rounded-lg shadow sm:mr-4 py-2 px-6">Read the Docs</a>

                <a href="https://github.com/ambitionworks/hui" title="Jigsaw by Tighten" class="bg-gray-50 hover:bg-gray-200 text-gray-600 font-normal text-center hover:text-black rounded-lg shadow py-2 px-6">
                    <svg class="h-4 w-4 inline" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                    GitHub
                </a>
            </div>
        </div>

    </div>

    <hr class="block border-gray-900 my-8 border lg:hidden">

    <div class="md:flex -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/3">

            <h3 id="intro-laravel" class="text-2xl text-blue-300 mb-0">Server-rendered <br>Laravel Blade components</h3>

            <p>A collection of commonly-used components to help you build your app's UI. <span class="inline-block px-2 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg font-semibold">Hui</span> components are concise and composable without feeling restrictive.</p>
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/3">

            <h3 id="intro-markdown" class="text-2xl text-blue-300 mb-0">Tailwind for total <br>control over look and feel</h3>

            <p><span class="inline-block px-2 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg font-semibold">Hui</span> ships with minimal styling so it does not get in your way. You have all the power of Tailwind for layout, presentation and responsiveness.</p>
        </div>

        <div class="mx-3 px-2 md:w-1/3">

            <h3 id="intro-mix" class="text-2xl text-blue-300 mb-0">Build your own design system and component library</h3>

            <p><span class="inline-block px-2 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg font-semibold">Hui</span> is purposefully minimal and encourages you to build components for your app on top.</p>
        </div>
    </div>
</section>
@endsection
