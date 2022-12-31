@extends('layouts.app-homepage')

@section('title', 'Portofolio Kami')
@section('head')
    <link rel="canonical" href="{{route('portfolio')}}">
    <meta name="keyword" content ="fotografi,fotografi surabaya,portofolio fotografi,antarkita,antarkita photography,portofolio fotografi surabaya,fotografer surabaya">
    <meta name="og:image" content="{{asset('logoantarkita.png')}}">
    <meta name="description"
          content="Halaman ini menampilkan berbagai hasil foto dari klien AntarKita Photography sebelumnya"/>
@endsection

@section('container')

<section class="p-12 h-[50vh] text-center relative bg-no-repeat bg-cover rounded-lg pt-32"
		{{-- style="background-image: url('images/singles/single3_sm.jpg'); height: 500px;"> --}}
		style="background-image: url('{{asset('images/prewed/prewed6_sm.JPG')}}');">
		<div class="absolute inset-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.6)">
			<div class="flex justify-center items-center h-full">
				<div class="text-white">
					<h1 class="font-semibold text-4xl mb-4 mt-10">Portfolio</h1>
					<h2 class="font-normal text-lg mb-6">Berikut adalah portfolio AntarKita Photography</h2>
				</div>
			</div>
		</div>
</section>

<section class="gap-8 space-y-8 columns-2 md:columns-4 lg:columns-4 xl:columns-5 p-8 pt-20 md:pt-28 lg:pt-30 xl:pt-32">

	@foreach ($gallery as $gal)

	<figure class="relative cursor-pointer
		max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg
		">

		<img class="rounded-lg shadow-xl
			hover:shadow-2xl hover:scale-110
			transition ease-in-out delay-150 duration-300
			"
			src="{{asset('storage/'.$gal->gallery_file)}}" alt="Foto dari AntarKita Photography yang berjudul '{{$gal->gallery_title}}'">
		<figcaption class="absolute px-3 py-1
			ml-4 -mt-16 rounded-lg backdrop-blur-sm
			text-lg text-zinc-50 bg-zinc-800/75">

		  <div class="font-sans font-medium">
			<h1>{{$gal->gallery_title}}</h1>
		  </div>
		  {{-- <div> <span class="font-sans font-light">{{$photo['sub']}}</span> </div> --}}
		  </figcaption>
	  </figure>

	@endforeach

</section>
@endsection
