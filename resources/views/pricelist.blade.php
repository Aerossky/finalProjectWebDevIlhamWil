@extends('layouts.app-homepage')

@section('title', 'Tentang Kami')
@section('head')
    <link rel="canonical" href="{{route('about_us')}}">
    <meta name="keyword"
          content="fotografi,fotografi surabaya,portofolio fotografi,antarkita,antarkita photography,portofolio fotografi surabaya,fotografer surabaya">
    <meta name="og:image" content="{{asset('logoantarkita.png')}}">
    <meta name="description"
          content="Apakah anda memerlukan fotografi dengan kualitas yang memuaskan? AntarKita adalah solusinya! AntarKita menyediakan berbagai macam jasa fotografi dengan budget yang beragam."/>
@endsection

@section('container')


    <div class="mx-auto max-w-7xl py-16 px-4 sm:py-24 sm:px-6 lg:px-8">

        <div class="grid grid-cols-4 gap-4">

            @foreach($ctgry as $item)
            <div class="w-full h-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-md">
                <div class="flex justify-center px-4 pt-4">
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-40 h-40 mb-5 rounded-full shadow-lg" src="{{ asset('storage/'.$item->category_gallery_file) }}" alt="Bonnie image"/>
                        <h5 class="mb-1 text-xl font-medium text-gray-900">{{$item->category_name}}</h5>
                        <h5 class="mb-1 text-xl font-medium text-gray-900">
                            @if (isset($item->Pricelist->harga))
                                {{ $item->Pricelist->harga }}
                            @else
                                Harga tidak tersedia
                            @endif</h5>
                        <div class="flex mt-4 space-x-3 md:mt-6 text-center">
                            <a href="{{route('contact_us')}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200">Booking Now</a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
</div>
    </div>





















        </div>

    </div>


