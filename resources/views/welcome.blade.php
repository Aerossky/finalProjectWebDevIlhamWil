@extends('layouts.app-homepage')

@section('title', 'Dashboardpage')
@section('head')
    <link rel="canonical" href="{{route('index')}}">
    <meta name="keyword"
          content="fotografi,fotografi surabaya,antarkita,antarkita photography,company photo,graduation photo,wedding photo,photo surabaya">
    <meta name="og:image" content="{{asset('logoantarkita.png')}}">
    <meta name="description"
          content="Abadikan momen paling berkesan anda bersama AntarKita Photography. AntarKita menyediakan berbagai macam jasa fotografi dengan budget yang beragam."/>
@endsection
@section('container')

    <section class="pt-24 px-8 lg:px-16">
        <div class="mx-auto max-w-7xl">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div
                    class="px-4 sm:px-6 sm:text-center md:mx-auto md:max-w-2xl lg:col-span-6 lg:flex lg:items-center lg:text-left">
                    <div>
                        <h1 class="mt-4 text-4xl font-extrabold tracking-tight text-slate-900 sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
                            <span class="md:block">Momen</span>
                            <span class="md:block">Diabadikan</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-700 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">Abadikan
                            momen paling berkesan anda bersama AntarKita Photography</p>
                        <div class="mt-5 w-full sm:mx-auto sm:max-w-lg lg:ml-0">
                            <div class="flex flex-wrap items-start lg:justify-start justify-start md:justify-center">
                                <div class="flex justify-center px-1">
                                    <a href="{{route('contact_us')}}"
                                       class="inline-flex items-center rounded-md border border-transparent bg-slate-900 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-700 focus:ring-offset-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-3 h-5 w-5"
                                             fill="currentColor" viewBox="0 0 448 512">
                                            <path
                                                d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                                        </svg>
                                        Kontak Kami
                                    </a>
                                </div>

                                <div class="flex justify-center px-1">
                                    <button type="button"
                                            class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <a href="{{route('portfolio')}}"> Lihat Portofolio </a>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-16 sm:mt-24 lg:col-span-6 lg:mt-0">
                    <div class="sm:mx-auto sm:w-full sm:max-w-md sm:overflow-hidden">
                        <img src="{{asset('images/prewed/prewed_grid1.png')}}" class="h-full w-full"
                             alt="Kolase foto grid AntarKita Photography 1">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-32 px-8 lg:px-16">
        <div class="mx-auto max-w-7xl">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="mt-16 sm:mt-24 lg:col-span-6 lg:mt-0 hidden lg:block">
                    <div class="sm:mx-auto sm:w-full sm:max-w-md sm:overflow-hidden">
                        <img src="{{asset('images/prewed/prewed_grid2.png')}}" class="h-full w-full"
                             alt="Kolase foto grid AntarKita Photography 2">
                    </div>
                </div>
                <div
                    class="px-4 sm:px-6 sm:text-center md:mx-auto md:max-w-2xl lg:col-span-6 lg:flex lg:items-center lg:text-left">
                    <div>
                        <h1 class="mt-4 text-4xl font-extrabold tracking-tight text-slate-900 sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
                            <span class="md:block">Tentang</span>
                            <span class="md:block">AntarKita</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-700 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">AntarKita
                            adalah jasa fotografi untuk Surabaya dan sekitarnya yang didirikan Oleh Ilham Risqi, kami
                            bergerak di bidang fotografi
                            perusahaan, wedding, dll. "Momen Diabadikan" adalah motto kami, dimana kami akan
                            mengabadikan momen berharga anda dengan kualitas yang memuaskan</p>
                    </div>
                </div>
                <div class="mt-16 sm:mt-24 lg:col-span-6 lg:mt-0 lg:hidden block">
                    <div class="sm:mx-auto sm:w-full sm:max-w-md sm:overflow-hidden">
                        <img src="{{asset('images/prewed/prewed_grid2.png')}}" class="h-full w-full" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-32 px-8 lg:px-16">
        <div class="mx-auto max-w-7xl md:grid space-y-4 md:space-y-0 md:grid-cols-6">
            <div class="col-span-2">
                <h1 class="mt-4 text-4xl font-extrabold tracking-tight text-slate-900 sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
                    <span class="md:block">Layanan</span>
                    <span class="md:block">Kami</span>
                </h1>
            </div>
            <div class="col-span-4 flex items-center">
                <p>AntarKita menyediakan berbagai macam jasa fotografi dengan budget yang beragam. Silakan lihat
                    penawaran
                    kami dibawah. Kami melayani daerah Surabaya dan sekitarnya. Apabila anda tertarik dengan jasa kami,
                    anda dapat mengontak AntarKita (Ilham) melalui
                    tombol WhatsApp kami.</p>
            </div>
        </div>

        <div class="mt-10 max-w-7xl gap-16 mx-auto grid grid-cols-1 md:grid-cols-2">
            <div class="flex gap-4">
                <div>
                    <div class="py-2 px-4 border-2 rounded-md text-slate-900 border-slate-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-8 w-8"
                             viewBox="0 0 512 512">
                            <path
                                d="M392.2 169.2c-8.344-2.75-17.41 1.688-20.25 10.06c-2.812 8.344 1.688 17.44 10.06 20.25C440.6 219.3 480 274.1 480 336c0 79.41-64.59 144-144 144S192 415.4 192 336c0-65.93 43.88-122.2 107.1-138.9c2.803 4.588 5.934 8.887 8.258 13.87c28.56 61.16 11.38 132.9-41.81 174.3c-6.969 5.438-8.219 15.5-2.781 22.47c5.406 6.938 15.47 8.188 22.47 2.781c65-50.69 86.03-138.3 51.13-213.1c-21.14-45.34-59.3-77.31-103.3-92.18l35.75-47.67c2.625-3.5 3.688-7.969 2.969-12.28c-.75-4.344-3.25-8.188-6.906-10.62l-48-32C214.3 .9375 211.2 0 208 0h-64C140.8 0 137.8 .9375 135.1 2.688l-48 32C83.53 37.09 81.03 40.84 80.25 45.13C79.47 49.38 80.47 53.78 82.97 57.28l34.82 48.79C112.7 107.9 107.5 109.9 102.5 112.3c-42.59 19.88-74.94 55.16-91 99.31c-16.09 44.19-14 91.97 5.875 134.6c29.16 62.56 91.59 101.7 159.4 101.7c6.531 0 13.12-.375 19.72-1.094c.8555-.0977 1.641-.4256 2.445-.6482C231.2 486.3 280.6 512 336 512c97.03 0 176-78.98 176-176C512 260.3 463.8 193.3 392.2 169.2zM148.2 93.53L118.6 52.16L148.8 32h54.31l29.91 19.94L198.9 97.41C182.9 95.35 166.5 95.44 150.1 97.95C149.6 96.43 149.1 94.9 148.2 93.53zM46.38 332.7C30.13 297.8 28.41 258.7 41.56 222.5C54.72 186.4 81.16 157.5 116 141.3c56.26-26.26 120.6-12.47 162.3 29.02C207.9 194.6 160 259.1 160 335.1c0 28.6 7.006 55.55 19.17 79.45C122.8 416.6 70.54 384.6 46.38 332.7z"/>
                        </svg>
                    </div>
                </div>
                <div class="space-y-4">
                    <h1 class="text-2xl font-bold">Wedding<br>Photography</h1>
                    <p class="text-justify">Pernikahan adalah momen yang sangat membahagiakan bagi anda. AntarKita akan
                        mengabadikan foto
                        pernikahan anda dengan kualitas tinggi, sehingga anda akan bisa melihat kembali momen indah
                        pernikahan anda</p>
                </div>
            </div>

            <div class="flex gap-4">
                <div>
                    <div class="py-2 px-4 border-2 rounded-md text-slate-900 border-slate-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                             class="h-8 w-8">
                            <path
                                d="M510.4 435.4l-107.7-399.9C396.9 14.07 377.5 0 356.4 0c-4.111 0-8.296 .5313-12.46 1.641l-61.82 16.48c-1.281 .3438-2.375 .9922-3.592 1.445C269.7 7.758 255.8 0 240 0h-64c-12.35 0-23.49 4.797-32 12.46C135.5 4.797 124.3 0 112 0h-64C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h64c12.35 0 23.49-4.797 32-12.46C152.5 507.2 163.7 512 176 512h64c26.51 0 48-21.49 48-48V224.7l67.8 251.9C361.6 497.9 380.9 512 402.1 512c4.111 0 8.293-.5313 12.46-1.641l61.82-16.48C502 487 517.2 460.8 510.4 435.4zM32 48C32 39.18 39.18 32 48 32h64C120.8 32 128 39.18 128 48l.0011 48L32 96V48zM32 128l96 .0014v255.1L32 384V128zM112 480h-64C39.18 480 32 472.8 32 464V416l96 0L128 464C128 472.8 120.8 480 112 480zM256 464c0 8.824-7.178 16-16 16h-64C167.2 480 160 472.8 160 464l.0011-47.1L256 416V464zM256 384l-95.1 .0002V128L256 128V384zM256 96L160 96L160 48C160 39.18 167.2 32 176 32h64C248.8 32 256 39.18 256 48V96zM288 101.6V50.29c.834-.3906 1.322-.9727 2.322-1.242l61.82-16.48C353.5 32.19 354.1 32 356.4 32c7.225 0 13.57 4.828 15.43 11.74l12.4 46.07l-92.71 24.73L288 101.6zM366 391.4l-66.26-246.1l92.71-24.73l66.26 246.1L366 391.4zM477.9 455.5c-1.23 2.133-4.133 5.934-9.729 7.43l-61.82 16.48C404.1 479.8 403.5 480 402.1 480c-7.227 0-13.57-4.828-15.43-11.74l-12.4-46.07l92.71-24.73l12.44 46.22C480.9 449.1 479.1 453.4 477.9 455.5z"/>
                        </svg>
                    </div>
                </div>
                <div class="space-y-4">
                    <h1 class="text-2xl font-bold">Yearbook<br>Photography</h1>
                    <p class="text-justify">Anda baru saja melewati perjalanan panjang bersama teman-teman anda, dan
                        ingin menyimpan foto kenangan bersama. Layanan yearbook photography dari AntarKita akan
                        mengabadikan momen spesial bersama teman anda.</p>
                </div>
            </div>

            <div class="flex gap-4">
                <div>
                    <div class="py-2 px-4 border-2 rounded-md text-slate-900 border-slate-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="currentColor"
                             class="h-8 w-8">
                            <path
                                d="M617.8 136.7l-286.3-102.7C324 31.33 315.9 31.36 308.5 33.98L22.22 136.7C8.719 141.5 0 153.8 0 167.1s8.719 26.47 22.22 31.31L48 208.6v113.1l-31.59 138.8c-1.094 4.75 .0469 9.719 3.078 13.53S27.13 480 32.01 480h63.98c4.859 0 9.461-2.219 12.49-6c3.047-3.781 4.188-8.75 3.125-13.5L80 319.6V220l228.5 81.99c3.703 1.313 7.578 1.938 11.47 1.938c3.906 0 7.812-.6563 11.56-1.969l286.2-102.7C631.3 194.5 640 182.2 640 167.1S631.3 141.5 617.8 136.7zM52.08 447.1l12.09-52.75l11.84 52.75H52.08zM319.3 271.9L129.5 203.8l195.2-60.5c8.438-2.625 13.2-11.55 10.57-20.02c-2.609-8.407-11.49-13.23-20.01-10.55L79.4 185.8L32 168l288.7-103.9L608 168L319.3 271.9zM482.3 288.1c-8.766 1.156-14.94 9.188-13.78 17.97l11.36 86.63c1.156 8.907-4.656 17.66-14.8 22.34c-43.91 20.31-93.56 31.72-143.2 32.94H318.5c-50.02-1.219-99.67-12.63-143.6-32.94c-10.14-4.688-15.95-13.44-14.8-22.31L171.5 306.1c1.156-8.782-5.016-16.81-13.78-17.97C148.8 286.9 140.9 293.2 139.8 301.9l-11.36 86.69c-3.016 23.03 9.969 44.85 33.08 55.53C209.4 466.2 263.4 478.7 318.1 480h4.141c54.36-1.344 108.4-13.75 156.2-35.88c23.11-10.69 36.09-32.5 33.08-55.56l-11.36-86.66C499.1 293.2 491.1 286.9 482.3 288.1z"/>
                        </svg>
                    </div>
                </div>
                <div class="space-y-4">
                    <h1 class="text-2xl font-bold">Graduation<br>Photography</h1>
                    <p class="text-justify">Kelulusan adalah momen penting di hidup anda. Bersama AntarKita, anda bisa
                        mengabadikan kelulusan anda, agar dapat dilihat di kemudian hari</p>
                </div>
            </div>

            <div class="flex gap-4">
                <div>
                    <div class="py-2 px-4 border-2 rounded-md text-slate-900 border-slate-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                             class="h-8 w-8">
                            <path
                                d="M448 96h-64V48C384 21.53 362.5 0 336 0h-160C149.5 0 128 21.53 128 48V96H64C28.65 96 0 124.7 0 160v256c0 35.35 28.65 64 64 64h384c35.35 0 64-28.65 64-64V160C512 124.7 483.3 96 448 96zM160 48C160 39.17 167.2 32 176 32h160C344.8 32 352 39.17 352 48V96H160V48zM480 416c0 17.64-14.36 32-32 32H64c-17.64 0-32-14.36-32-32V288h144v64c0 8.844 7.156 16 16 16h128c8.844 0 16-7.156 16-16V288H480V416zM208 336V288h96v48H208zM480 256H32V160c0-17.64 14.36-32 32-32h384c17.64 0 32 14.36 32 32V256z"/>
                        </svg>
                    </div>
                </div>
                <div class="space-y-4">
                    <h1 class="text-2xl font-bold">Company<br>Photography</h1>
                    <p class="text-justify">Bila perusahaan anda memerlukan foto dengan kualitas yang memuaskan,
                        AntarKita adalah pilihan tepat. Kami bisa membuatkan anda company foto yang sesuai dengan
                        bisnis/usaha anda.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-32">
        <h1 class="mt-4 text-center mb-4 text-4xl font-extrabold tracking-tight text-slate-900 sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
            Portofolio Kami
        </h1>
        <div class="relative overflow-hidden w-[100vw]">

            <div class="relative pb-5 flex overflow-hidden gap-5">
                <div class="animate-marquee whitespace-nowrap">
                    <div class="w-[100vw] grid grid-cols-3 gap-5">
                        @foreach($carousel_top as $carousel)
                            <img src="{{asset($carousel)}}" class="rounded" alt="foto cuplikan carousel antarkita photography" aria-hidden="true">
                        @endforeach
                    </div>
                </div>

                <div class="absolute top-0 animate-marquee2 whitespace-nowrap">
                    <div class="w-[100vw] ml-3 grid grid-cols-3 gap-5">
                        @foreach($carousel_top as $carousel)
                            <img src="{{asset($carousel)}}" class="rounded" alt="foto cuplikan carousel antarkita photography" aria-hidden="true">
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="relative flex overflow-hidden gap-5">
                <div class="animate-marquee-reverse whitespace-nowrap">
                    <div class="w-[100vw] grid grid-cols-3 gap-5">
                        @foreach($carousel_bottom as $carousel)
                            <img src="{{asset($carousel)}}" class="rounded" alt="carousel" aria-hidden="true">
                        @endforeach
                    </div>
                </div>

                <div class="absolute top-0 animate-marquee2-reverse whitespace-nowrap">
                    <div class="w-[100vw] ml-3 grid grid-cols-3 gap-5">
                        @foreach($carousel_bottom as $carousel)
                            <img src="{{asset($carousel)}}" class="rounded" alt="carousel" aria-hidden="true">
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="absolute bg-gradient-to-r from-gray-100 h-full w-1/4 top-0 left-0"></div>
            <div class="absolute bg-gradient-to-l from-gray-100 h-full w-1/4 top-0 right-0"></div>

        </div>

        <div class="w-full flex items-center justify-center mt-4">
            <a href="{{route('portfolio')}}"
               class="inline-flex items-center px-32 py-3 border border-gray-300 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Lihat Portofolio
            </a>
        </div>
    </section>

{{--    <div class=" container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-12 grid grid-cols-3 ">--}}
{{--        <div class="w-full h-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-md cols-3">--}}
{{--            <div class="px-6 pt-16 pb-6 md:px-12 md:pb-10 relative bg-white shadow-sm rounded">--}}
{{--                <div class="absolute top-0 right-0 text-8xl mt-2 mr-5 text-gray-200 opacity-75 font-serif">“</div>--}}
{{--                <div class="relative">--}}
{{--                    <blockquote>--}}
{{--                        <p class="font-medium text-lg leading-8 mb-5">--}}
{{--                            I’ve been using pixelcave themes for years. The code is consistently high-quality and pleasant to work with, so I highly recommended them.--}}
{{--                        </p>--}}
{{--                        <footer class="flex items-center space-x-4">--}}
{{--                            <div class="inline-flex overflow-hidden relative justify-center items-center w-16 h-16 bg-gray-100 rounded-full dark:bg-gray-600">--}}
{{--                                <span class="font-medium text-gray-600 dark:text-gray-300">JL</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <a href="javascript:void(0)" class="font-semibold text-gray-600 hover:text-gray-400">--}}
{{--                                    Elsa King--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </footer>--}}
{{--                    </blockquote>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <section class="pt-4">
    <div class="bg-white ">
        <div class="space-y-16 container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">

            <div class="text-center">
                <div class="text-sm uppercase font-bold tracking-wider mb-1 text-gray-700">
                    Real Feedback
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
                    Customer Testimonials
                </h2>
            </div>

            <!-- END Heading -->

            <!-- Feedback -->


                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                        @foreach($reviews as $item)
                        <div class="border rounded-md bg-gray-50 shadow-sm relative" >
                            <div class="absolute top-0 right-0 text-8xl mt-1 mr-2 text-gray-200 opacity-75 font-serif">“</div>
                            <div class="px-4 pt-14 pb-6 sm:px-6 sm:pb-6 relative">
                                <blockquote>
                                    <p class="leading-7 mb-5">
                                        {{$item->review_text}}
                                    </p>
                                    <footer class="flex items-center space-x-4">
                                        <div class="overflow-hidden relative w-10 h-10 bg-gray-100 rounded-full dark:bg-gray-600">
                                            <svg class="absolute -left-1 w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="font-semibold text-gray-600 hover:text-gray-400">
                                                {{$item->review_name}}
                                            </a>
                                        </div>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        @endforeach
                    </div>






            </div>
        </div>
    </div>
    </section>









@endsection
