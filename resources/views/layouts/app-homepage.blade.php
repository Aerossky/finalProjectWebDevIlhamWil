<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('site.webmanifest')}}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RQEXKKP4L5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-RQEXKKP4L5');
    </script>


    <title>@yield('title', 'Website') - {{config('app.name', 'Laravel')}}</title>

    @yield('head')

    {{-- scripts --}}
    <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "ProfessionalService",
          "name": "AntarKita Photography",
          "image": "https://antarkitaphotography.com/logoantarkita.png",
          "@id": "https://antarkitaphotography.com/logoantarkita.png",
          "url": "https://antarkitaphotography.com",
          "telephone": "+6282226401130",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "PJCM+73Q, Made, Sambikerep",
            "addressLocality": "Surabaya",
            "postalCode": "60219",
            "addressCountry": "ID"
          } ,
          "sameAs": [
            "https://www.instagram.com/antarkita.photography/",
            "https://antarkitaphotography.com/"
          ]
        }
    </script>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-zinc-50">
    {{-- Navbar inclusion --}}
    <x-navbar/>

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        @yield('container')
    </main>

    <div class="pt-40">
        <x-contactusfooter/>
    </div>
    <x-footer/>
</div>
</body>
</html>
