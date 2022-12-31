<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Review') }}
        </h2>

    </x-slot>



    <div class="p-8 mx-auto">

        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <div class="flex justify-between items-center pb-4 bg-white bg-gray-200">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative my-5 mx-6 p-4">

                </div>
                <div  class="flex justify-between items-center pb-4 bg-gray-200  ">


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
                    <th scope="col" class="p-4">
                        Nama
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Text
                    </th>
                    <th scope="col" class="py-3 px-12 text-center">
                        Action
                    </th>

                </tr>
                </thead>
                <tbody>

                @php($i=0)
                @foreach($reviews as $item)
                    <tr class="bg-white border-b dark:bg-gray-400 dark:border-gray-500 hover:bg-gray-50 dark:hover:bg-gray-300">
                        <td class="p-4 w-4">
                            <div class="flex items-center">
                                <kbd class="px-2 py-1.5 text-xs font-semibold dark:text-black bg-gray-100 border border-gray-200 rounded-lg dark:bg-gray-600 dark:text-black dark:border-gray-500">{{$loop->iteration}}</kbd>
                            </div>
                        </td>
                        <td class="py-4 px-6 text-gray-900">
                                {{$item->review_name}}
                        </td>
                        <td class="py-4 px-6 text-gray-900">
                           {{$item->review_text}}
                        </td>
                        <td class="py-4 px-6 text-center">
                            <form action="{{ route('reviews.destroy', $item -> id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=" text-white bg-red-800 hover:bg-red-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Delete</button>

                            </form>
                        </td>

                    </tr>
             @endforeach
                </tbody>
            </table>


        </div>
    </div>

</x-app-layout>
