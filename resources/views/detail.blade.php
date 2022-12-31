@extends('layouts.app-homepage')

@section('title', 'Detail')
@section('head')
    <link rel="canonical" href="{{route('portfolio')}}">
    <meta name="keyword" content ="fotografi,fotografi surabaya,portofolio fotografi,antarkita,antarkita photography,portofolio fotografi surabaya,fotografer surabaya">
    <meta name="og:image" content="{{asset('logoantarkita.png')}}">
    <meta name="description"
          content="Halaman ini menampilkan berbagai hasil foto dari klien AntarKita Photography sebelumnya"/>
@endsection

<div id="mega-menu-full-dropdown" class=" mx-auto max-w-7xl py-16 px-4 sm:py-24 sm:px-6 lg:px-8 mt-1 bg-white border-gray-200 shadow-sm border-y dark:bg-gray-800 dark:border-gray-600">
    <div class="grid py-5  mx-auto max-w-screen-xl text-gray-900 dark:text-white sm:grid-cols-2 md:grid-cols-2 md:px-6">

        <div class="cols-2 h-96 w-auto justify-center  items-center">
                    <img class="object-cover rounded-lg transition-all duration-300 blur-sm hover:blur-none   " src="images/prewed/prewed1_sm.jpg" alt="">
        </div>
        <div class="cols-2 space-y-4 px-12">
            <div class="bg-gray-100 rounded-lg">
                <div class="text-2xl font-semibold p-5">
                    <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Rp 500.000</h5>
                </div>
                <hr>
                <div class="p-5">
                    <h5 class="text-2xl mb-4 font-bold tracking-tight text-gray-900 dark:text-white">Prewweding</h5>
                    <ul class=" ml-12 list-disc tb-3 font-normal text-gray-700 dark:text-gray-400">
                        <li> 2 Photographer</li>
                        <li> Surabaya</li>
                    </ul>
                </div>
                <div class="flex flex-col p-5">
                        <a href="{{ route('contact_us') }}" class=" text-center text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"  >Booking Now</a>
                </div>
            </div>
        </div>



    </div>
</div>
