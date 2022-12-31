@php
    $current = 'block py-2 pr-4 pl-3 font-sans text-lg font-bold text-slate-900 bg-zinc-50 rounded md:hover:bg-transparent md:hover:text-blue-700 md:text-slate-900 md:p-0
      md:dark:hover:text-slate-900 md:dark:hover:bg-transparent
      transition ease-in-out delay-50 duration-200
      ';

    $notcurrent = 'block py-2 pr-4 pl-3 font-sans text-lg text-slate-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-700 md:p-0
      md:dark:hover:text-slate-400 md:dark:hover:bg-transparent
      transition ease-in-out delay-50 duration-200
      ';
@endphp
<nav
    class="bg-zinc-50 px-2 sm:px-4 py-2.5 fixed w-full z-20 top-0 left-0 border-b border-gray-200">

    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="{{route('index')}}" class="flex items-center">
            <img src="{{asset('images/AntarKitaLogoTransparent.png')}}" class="ml-5 h-5 sm:h-8" alt="Flowbite Logo">
            {{-- <span class="self-center text-xl font-semibold whitespace-nowrap">AntarKita</span> --}}
        </a>

        @auth
            <div class="flex md:order-2">
                <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit" class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300">
                    <a class="mr-3 font-sans text-zinc-50 bg-slate-900 hover:bg-slate-700
        focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium
        rounded-lg text-sm px-5 py-2 text-center inline-flex items-center">
                <span
                    class="self-center text-sm font-semibold whitespace-nowrap hidden md:block md:dark:text-zinc-50">Logout</span>
                    </a>
                </button>
                </form>


            </div>
        @endauth
        @guest
        <div class="flex md:order-2">


            <a href="{{ route('login') }}" class="mr-3 font-sans text-zinc-50 bg-slate-900 hover:bg-slate-700
        focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium
        rounded-lg text-sm px-5 py-2 text-center inline-flex items-center">
                <span
                    class="self-center text-sm font-semibold whitespace-nowrap hidden md:block md:dark:text-zinc-50">Log in</span>
            </a>


            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center px-4 py-2 rounded-lg border-2 border-slate-900
        md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-sticky" aria-expanded="false">
                <svg class="w-4 h-4 fill-slate-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M416 224H31.1C14.33 224 0 238.3 0 256s14.33 32 31.1 32h384C433.7 288 448 273.7 448 256S433.7 224 416 224zM416 384H31.1C14.33 384 0 398.3 0 415.1S14.33 448 31.1 448h384C433.7 448 448 433.7 448 416S433.7 384 416 384zM416 64H31.1C14.33 64 0 78.33 0 95.1S14.33 128 31.1 128h384C433.7 128 448 113.7 448 96S433.7 64 416 64z"/>
                </svg>
            </button>
        </div>
        @endguest

        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 mt-4 bg-zinc-50 rounded-lg border border-zinc-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0  md:dark:bg-zinc-50">
                <li>
                    <a href="{{route('index')}}"
                       class="{{ request()->routeIs('index') ? $current : $notcurrent }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{route('portfolio')}}"
                       class="{{ request()->routeIs('portfolio') ? $current : $notcurrent }}">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="{{route('about_us')}}"
                       class="{{ request()->routeIs('about_us') ? $current : $notcurrent }}">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="{{route('contact_us')}}"
                       class="{{ request()->routeIs('contact_us') ? $current : $notcurrent }}">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="{{route('harga')}}"
                       class="{{ request()->routeIs('pricelist') ? $current : $notcurrent }}">
                        Pricelist
                    </a>
                </li>

                @auth()
                    @if(auth()->user()->status == 'admin')
                <li>
                    <a href="{{route('dashboard')}}"
                           class="{{ request()->routeIs('dashboard') ? $current : $notcurrent }}">
                            Admin
                    </a>
                </li>
                    @endif
                @endauth




            </ul>
        </div>
    </div>
</nav>
