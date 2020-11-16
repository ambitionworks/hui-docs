<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:site_name" content="{{ $page->siteName }}"/>
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:image" content="/assets/img/logo.png"/>
        <meta property="og:type" content="website"/>

        <meta name="twitter:image:alt" content="{{ $page->siteName }}">
        <meta name="twitter:card" content="summary_large_image">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <meta name="generator" content="tighten_jigsaw_doc">
        @endif

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
        @endif
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-gradient-to-b from-gray-900 to-black text-gray-100 leading-normal font-sans">
        <header class="flex items-center shadow-2xl bg-gray-900 h-24 mb-8 py-4" role="banner">
            <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        {{-- <img class="h-8 md:h-10 mr-3" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" /> --}}

                        <h1 class="text-lg md:text-4xl text-white font-extrabold my-0 bg-gradient-to-br from-blue-500 to-purple-600 px-8 py-1 rounded-lg sm:rounded-b-lg sm:rounded-t-none transform hover:-translate-y-1 sm:pt-6">
                            <svg class="inline sm:block" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"><g><path d="M52.764,60.391c-3.025-0.42-5.801-2.002-7.616-4.34c-0.678-0.873-1.934-1.031-2.807-0.354   c-0.873,0.677-1.031,1.934-0.354,2.806c2.449,3.155,6.175,5.287,10.225,5.85c0.093,0.013,0.186,0.019,0.278,0.019   c0.982,0,1.839-0.724,1.979-1.725C54.622,61.553,53.858,60.543,52.764,60.391z"/><path d="M43.364,52.583c-0.23-0.784-0.364-1.595-0.399-2.409c-0.047-1.103-0.957-1.971-2.083-1.913   c-1.104,0.047-1.96,0.98-1.913,2.083c0.048,1.137,0.236,2.269,0.556,3.363c0.256,0.872,1.053,1.438,1.918,1.438   c0.186,0,0.375-0.026,0.563-0.081C43.067,54.754,43.674,53.643,43.364,52.583z"/><path d="M93,21.874H56.779c-0.846-2.617-3.304-4.517-6.2-4.517c-2.896,0-5.354,1.899-6.2,4.517H8.159c-1.104,0-2,0.896-2,2   s0.896,2,2,2h37.164l1.895,1.626c0.418,0.359,0.881,0.624,1.362,0.829v4.084h-2.04c-3.053,0-5.537,2.484-5.537,5.537v0.4h-25.65   l-2.216-5.053c-0.677-1.544-2.204-2.542-3.89-2.542c-1.222,0-2.385,0.526-3.191,1.445c-0.779,0.887-1.152,2.056-1.035,3.226   l0.241,11.438c-0.175,1.175,0.146,2.363,0.9,3.294c0.811,1.001,2.014,1.575,3.301,1.575h0.23c1.226,0,2.392-0.529,3.199-1.453   l1.957-2.24l18.185,2.346c0.262,8.124,5.403,15.066,12.671,18.224v5.516h-9.824c-1.104,0-2,0.896-2,2s0.896,2,2,2h39.506   c4.28,0,7.762-3.481,7.762-7.761c0-1.104-0.896-2-2-2s-2,0.896-2,2c0,2.074-1.688,3.761-3.762,3.761h-4.063v-3.872   c5.117-0.915,9.008-5.26,9.008-10.477v-2.755c0-1.32-0.142-2.632-0.422-3.896c-1.066-4.848-4.168-9.166-8.511-11.846   c-3.106-1.917-6.706-2.93-10.41-2.93h-0.833v-0.4c0-3.053-2.484-5.537-5.537-5.537h-2.04v-4.084   c0.481-0.205,0.944-0.47,1.361-0.829l1.896-1.626H93c1.104,0,2-0.896,2-2S94.104,21.874,93,21.874z M49.706,74.126v-4.22   c1.532,0.337,3.119,0.533,4.755,0.533h12.864v3.688H49.706z M69.326,66.438H54.461c-9.615,0-17.437-7.494-17.437-16.706v-1.106   c0-1.006-0.747-1.855-1.744-1.983l-20.978-2.706c-0.085-0.011-0.171-0.017-0.256-0.017c-0.573,0-1.124,0.247-1.506,0.684   l-2.659,3.044c-0.047,0.054-0.115,0.084-0.187,0.084h-0.23c-0.078,0-0.143-0.031-0.192-0.092c-0.049-0.061-0.066-0.13-0.05-0.207   c0.032-0.151,0.047-0.305,0.043-0.458L9.019,35.25c-0.001-0.073-0.007-0.145-0.016-0.216c-0.01-0.074,0.01-0.139,0.059-0.195   c0.115-0.129,0.343-0.094,0.412,0.064l2.741,6.25c0.319,0.727,1.038,1.197,1.832,1.197h44.296v6.716   c0,6.401,5.208,11.609,11.609,11.609h6.31C75.798,63.924,72.869,66.438,69.326,66.438z M76.005,53.987   c0.193,0.872,0.287,1.776,0.31,2.688h-6.363c-4.196,0-7.609-3.414-7.609-7.609v-6.653c2.479,0.208,4.862,0.978,6.957,2.271   C72.726,46.798,75.17,50.188,76.005,53.987z M56.156,37.95v0.4H45.003v-0.4c0-0.847,0.689-1.537,1.537-1.537h8.08   C55.467,36.413,56.156,37.103,56.156,37.95z M50.58,21.357c1.107,0,2.039,0.724,2.375,1.719l-1.619,1.389   c-0.438,0.375-1.075,0.376-1.513,0l-1.618-1.389C48.54,22.081,49.472,21.357,50.58,21.357z"/></g></svg>
                            {{ $page->siteName }}
                        </h1>
                    </a>
                </div>

                <div class="flex flex-1 justify-end items-center text-right md:pl-10">
                    @if ($page->docsearchApiKey && $page->docsearchIndexName)
                        @include('_nav.search-input')
                    @endif
                </div>
            </div>

            @yield('nav-toggle')
        </header>

        <main role="main" class="w-full flex-auto">
            @yield('body')
        </main>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')

        <footer class="bg-black text-center text-xs font-medium mt-12 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center">
                <li class="md:mr-2">
                    &copy; <a href="https://ambition.works" title="Ambition Works website" class="text-blue-200 hover:text-blue-400">Ambition Works</a> {{ date('Y') }}.
                </li>

                <li>
                    Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten" class="text-blue-200 hover:text-blue-400">Jigsaw</a>
                    and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework" class="text-blue-200 hover:text-blue-400">Tailwind CSS</a>. Helicopter by Maxim Kulikov from the Noun Project.
                </li>
            </ul>
        </footer>
    </body>
</html>
