<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>

    </x-slot>

    <div class="p-8 mx-auto">

        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <div class="flex justify-between items-center pb-4 bg-white bg-gray-200">
                <form action="{{ route('product') }}" method="get">
                 <label for="table-search" class="sr-only">Search</label>
                <div class="relative my-5 mx-6 p-4">
                <input type="search" name="search" class=" form-control block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-white-500 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
                    <button type="submit" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Search</button>
                </div>


                </form>
                <div  class="flex justify-between items-center pb-4 bg-gray-200  ">
                    <a href="#"  data-modal-toggle="NewPost" class="mr-3 font-sans text-zinc-50 bg-slate-900 hover:bg-slate-700
                        focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium
                        rounded-lg text-sm px-5 py-2 text-center inline-flex items-center">
                    <span
                        class="self-center text-sm font-semibold whitespace-nowrap hidden md:block md:dark:text-zinc-50">New Post</span>
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
            </div>

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs dark:text-black uppercase bg-gray-50 dark:bg-gray-400 dark:text-black-400">
                                <tr>
                                    <th scope="col" class="p-4">
                                        No
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Gambar
                                    </th>
                                    <th scope="col" class="p-4">
                                        Nama
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Title
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Kategori
                                    </th>

                                    <th scope="col" class="py-3 px-12 text-center">
                                        Edit
                                    </th>
                                    <th scope="col" class="py-3 px-12 text-center">
                                        Delete
                                    </th>

                                </tr>
                    </thead>
                                <tbody>
                                    @php($i = 0)
                                    @foreach($gallery as $gal)

                                        <tr class="bg-white border-b dark:bg-gray-400 dark:border-gray-500 hover:bg-gray-50 dark:hover:bg-gray-300">
                                            <td class="p-4 w-4">
                                                <div class="flex items-center">
                                                    <kbd class="px-2 py-1.5 text-xs font-semibold dark:text-black bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-black dark:border-gray-500">{{$loop->iteration}}</kbd>
                                                </div>
                                            </td>
                                            <td class="flex items-center py-4 px-6 dark:text-black whitespace-nowrap dark:text-white">

                                                <img  src="{{ asset('storage/'.$gal->gallery_file) }}" class="w-48 h-full" alt="{{$gal->gallery_file}}">

                                            </td>
                                            <td class="py-4 px-6 text-gray-900">
                                                {{$gal ->gallery_name }}
                                            </td>
                                            <td class="py-4 px-6 text-gray-900">
                                                {{$gal ->gallery_title }}
                                            </td>
                                            <td class="py-4 px-6 text-gray-900">
                                                <div class="flex items-center">
                                                    @foreach($categories as $cat)
                                                        @if($cat->id == $gal->category_gallery_id)
                                                            {{$cat->category_name}}
                                                        @endif
                                                        @endforeach
                                                </div>
                                            </td>

                                            <td class="py-4 px-6 text-center">
                                                <a  data-modal-toggle="Edit{{$gal->id}}" class=" text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"  >Edit</a>
                                            </td>



                                            <td class="py-4 px-6 text-center">
                                                <form action="{{route('galleries.destroy', $gal -> id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class=" text-white bg-red-800 hover:bg-red-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Delete</button>

                                                </form>
                                            </td>

                                        </tr>
                                     @endforeach
                                </tbody>
                </table>
            <div class="flex p-5 justify-center">
                {{ $gallery->links('vendor.pagination.tailwind') }}
            </div>

        </div>

        </div>






    <!-- New Post -->

        <div id="NewPost"    tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
            <div class="relative w-full max-w-2xl h-full md:h-auto">
                    <!-- Modal content -->
                    <form action="{{route('galleries.store')}}" method="post" class="relative bg-white rounded-lg shadow dark:bg-gray-700" enctype="multipart/form-data">
                        @csrf
                        <!-- Modal header -->
                        <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                New Post
                            </h3>
                            <button type="button" data-modal-toggle="NewPost" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-12 sm:col-span-6">
                                    <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" name="gallery_name" id="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Prewedding Anita & Irfan" required="">

                                </div>

                                <div class="col-span-12 sm:col-span-6">
                                    <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                    <input type="text" name="gallery_title" id="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nice Picture" required="">
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                    <label for="kategori" class="block mb-2 text-sm font-medium text-black dark:text-black">Kategori</label>
                                    <select name="category_gallery_id" id="" class="bg-white border border-white-300 text-white-400 text-sm rounded-lg focus:ring-black-200 focus:border-white-300 block w-full p-2.5 dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400 dark:text-black dark:focus:ring-black-700 dark:focus:border-black-500">
                                        @foreach($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                    <label class="block mb-2 text-sm font-medium text-black dark:text-black" for="image">Upload file</label>
                                    <input name="gallery_file" class="bg-white border border-white-300 text-white-400 text-sm rounded-lg focus:ring-black-200 focus:border-white-300 block w-full p-2.5 dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400 dark:text-black dark:focus:ring-black-700 dark:focus:border-black-500" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                    <div class="mt-1 text-sm text-black dark:text-black-300" id="">Upload Image !</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                            </div>
                    </form>
            </div>
        </div>





{{--        //Edit--}}
        @foreach($gallery as $gal)
        <div id="Edit{{$gal->id}}" data-modal-backdrop="static"   tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
            <div class="relative w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <form action="{{route('galleries.show', $gal->id)}}" method="post" class="relative bg-white rounded-lg shadow dark:bg-gray-700" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- Modal header -->
                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Edit Gallery
                        </h3>
                            <button type="button" data-modal-toggle="Edit{{$gal->id}}" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-12 sm:col-span-6">
                                <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" name="gallery_name" id="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Prewedding Anita & Irfan" required="" value="{{$gal->gallery_name}}">

                            </div>

                            <div class="col-span-12 sm:col-span-6">
                                <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                <input type="text" name="gallery_title" id="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nice Picture" required="" value="{{$gal->gallery_title}}">
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="kategori" class="block mb-2 text-sm font-medium text-black dark:text-black">Kategori</label>
                                <select name="catagory_gallery_id" id="" class="bg-white border border-white-300 text-white-400 text-sm rounded-lg focus:ring-black-200 focus:border-white-300 block w-full p-2.5 dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400 dark:text-black dark:focus:ring-black-700 dark:focus:border-black-500">
                                                                    @foreach($categories as $category)
                                                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                                    @endforeach
                                </select>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label class="block mb-2 text-sm font-medium text-black dark:text-black" for="image">Upload file</label>
                                <input name="gallery_file" type="file" class="bg-white border border-white-300 text-white-400 text-sm rounded-lg focus:ring-black-200 focus:border-white-300 block w-full p-2.5 dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400 dark:text-black dark:focus:ring-black-700 dark:focus:border-black-500" aria-describedby="user_avatar_help">
                                <div class="mt-1 text-sm text-black dark:text-black-300" >
                                    <label for="">Foto Terakhir : </label>
                                    <img src="{{asset('storage/'.$gal->gallery_file)}}" class="py-2 h-24" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>


</x-app-layout>



