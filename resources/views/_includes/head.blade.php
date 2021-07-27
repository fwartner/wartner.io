<meta name="description" content="A Software-Engineer, Father, Hobby-Cook and Podcast-Host from Lübeck, Germany 🇩🇪">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('android-chrome-192x192.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('site.webmanifest') }}">
<link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="{{ asset('mstile-144x144.png') }}">
<meta name="theme-color" content="#ffffff">
<meta property="og:url" content="https://wartner.io/">
<meta property="og:type" content="website">
<meta property="og:title" content="@yield('page_title') - wartner.io">
<meta property="og:description" content="A Software-Engineer, Father, Hobby-Cook and Podcast-Host from Lübeck, Germany 🇩🇪">
<meta property="og:image" content="https://wartner.io/og/opengraph.png">
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="https://twitter.com/fwartner">
<meta property="twitter:url" content="https://wartner.io/">
<meta name="twitter:title" content="@yield('page_title') - wartner.io">
<meta name="twitter:description" content="A Software-Engineer, Father, Hobby-Cook and Podcast-Host from Lübeck, Germany 🇩🇪">
<meta name="twitter:image" content="https://wartner.io/og/opengraph.png">
{!! \App\Services\SchemaService::buildSchema() !!}
