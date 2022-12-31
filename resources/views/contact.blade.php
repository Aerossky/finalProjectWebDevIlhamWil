@extends('layouts.app-homepage')

@section('title', 'Kontak Kami')
@section('head')
    <link rel="canonical" href="{{route('contact_us')}}">
    <meta name="keyword"
          content="fotografi,fotografi surabaya,portofolio fotografi,antarkita,antarkita photography,portofolio fotografi surabaya,fotografer surabaya">
    <meta name="og:image" content="{{asset('logoantarkita.png')}}">
    <meta name="description"
          content="Ingin membooking AntarKita Photography? Silakan buka halaman ini"/>
@endsection

@section('container')
    <div class="mx-auto max-w-7xl py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="relative bg-white shadow-xl">
            <h2 class="sr-only">Contact us</h2>
            <div class="grid grid-cols-1 lg:grid-cols-3">
                <!-- Contact information -->
                <div class="relative overflow-hidden bg-slate-900 py-10 px-6 sm:px-10 xl:p-12">
                    <div class="pointer-events-none absolute inset-0 sm:hidden" aria-hidden="true">
                        <svg class="absolute inset-0 h-full w-full" width="343" height="388" viewBox="0 0 343 388"
                             fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z"
                                  fill="url(#linear1)" fill-opacity=".1"/>
                            <defs>
                                <linearGradient id="linear1" x1="254.553" y1="107.554" x2="961.66" y2="814.66"
                                                gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#fff"></stop>
                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="pointer-events-none absolute top-0 right-0 bottom-0 hidden w-1/2 sm:block lg:hidden"
                         aria-hidden="true">
                        <svg class="absolute inset-0 h-full w-full" width="359" height="339" viewBox="0 0 359 339"
                             fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z"
                                  fill="url(#linear2)" fill-opacity=".1"/>
                            <defs>
                                <linearGradient id="linear2" x1="192.553" y1="28.553" x2="899.66" y2="735.66"
                                                gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#fff"></stop>
                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="pointer-events-none absolute top-0 right-0 bottom-0 hidden w-1/2 lg:block"
                         aria-hidden="true">
                        <svg class="absolute inset-0 h-full w-full" width="160" height="678" viewBox="0 0 160 678"
                             fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z"
                                  fill="url(#linear3)" fill-opacity=".1"/>
                            <defs>
                                <linearGradient id="linear3" x1="192.553" y1="325.553" x2="899.66" y2="1032.66"
                                                gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#fff"></stop>
                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <h1 class="text-lg font-medium text-white">Contact information</h1>
                    <p class="mt-6 max-w-3xl text-base text-indigo-50">Apakah anda ingin membooking jasa fotografi
                        daerah surabaya dan sekitarnya, atau ada pertanyaan? Dengan senang hati AntarKita Photography
                        akan membantu anda!</p>
                    <dl class="mt-8 space-y-6">
                        <dt><span class="sr-only">Phone number</span></dt>
                        <dd class="flex items-center text-base text-indigo-50">
                            <!-- Heroicon name: outline/phone -->
                            <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                 viewBox="-83.77245 -140.29175 726.0279 841.7505">
                                <path
                                    d="M407.185 336.283c-6.948-3.478-41.108-20.284-47.477-22.606-6.368-2.318-11-3.476-15.632 3.478-4.632 6.954-17.948 22.606-22.001 27.244-4.052 4.636-8.106 5.218-15.054 1.738-6.948-3.477-29.336-10.813-55.874-34.486-20.655-18.424-34.6-41.176-38.652-48.132-4.054-6.956-.434-10.716 3.045-14.18 3.127-3.114 6.95-8.116 10.423-12.174 3.474-4.056 4.632-6.956 6.948-11.59 2.316-4.639 1.158-8.695-.58-12.172-1.736-3.478-15.632-37.679-21.422-51.592-5.64-13.547-11.368-11.712-15.633-11.927-4.048-.201-8.685-.244-13.316-.244-4.632 0-12.16 1.739-18.53 8.693-6.367 6.956-24.317 23.767-24.317 57.964 0 34.202 24.896 67.239 28.371 71.876 3.475 4.639 48.993 74.818 118.695 104.914 16.576 7.16 29.518 11.434 39.609 14.636 16.644 5.289 31.79 4.542 43.763 2.753 13.349-1.993 41.108-16.807 46.898-33.036 5.79-16.233 5.79-30.144 4.052-33.041-1.736-2.899-6.368-4.638-13.316-8.116m-126.776 173.1h-.093c-41.473-.016-82.15-11.159-117.636-32.216l-8.44-5.01-87.475 22.947 23.348-85.288-5.494-8.745c-23.136-36.798-35.356-79.328-35.338-123 .051-127.431 103.734-231.106 231.22-231.106 61.734.022 119.763 24.094 163.402 67.782 43.636 43.685 67.653 101.754 67.629 163.51-.052 127.442-103.733 231.126-231.123 231.126M477.113 81.55C424.613 28.989 354.795.03 280.407 0 127.136 0 2.392 124.736 2.33 278.053c-.02 49.011 12.784 96.847 37.118 139.019L0 561.167l147.41-38.668c40.617 22.153 86.346 33.83 132.886 33.845h.114c153.255 0 278.01-124.748 278.072-278.068.028-74.301-28.869-144.165-81.369-196.725"
                                    fill="#FFF" fill-rule="evenodd"/>
                            </svg>
                            <a href="https://wa.me/6282226401130" class="ml-3"><span class="sr-only">Kontak whatsapp antarkita photography adalah</span>+6282226401130</a>
                        </dd>

                    </dl>
                    <ul role="list" class="mt-8 flex space-x-12">
                        <li>

                            <span class="sr-only">Instagram</span>
                            <dd class="flex items-center text-base text-indigo-50">
                                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                     viewBox="-100.7682 -167.947 873.3244 1007.682">
                                    <g fill="#fff">
                                        <path
                                            d="M335.895 0c-91.224 0-102.663.387-138.49 2.021-35.752 1.631-60.169 7.31-81.535 15.612-22.088 8.584-40.82 20.07-59.493 38.743-18.674 18.673-30.16 37.407-38.743 59.495C9.33 137.236 3.653 161.653 2.02 197.405.386 233.232 0 244.671 0 335.895c0 91.222.386 102.661 2.02 138.488 1.633 35.752 7.31 60.169 15.614 81.534 8.584 22.088 20.07 40.82 38.743 59.495 18.674 18.673 37.405 30.159 59.493 38.743 21.366 8.302 45.783 13.98 81.535 15.612 35.827 1.634 47.266 2.021 138.49 2.021 91.222 0 102.661-.387 138.488-2.021 35.752-1.631 60.169-7.31 81.534-15.612 22.088-8.584 40.82-20.07 59.495-38.743 18.673-18.675 30.159-37.407 38.743-59.495 8.302-21.365 13.981-45.782 15.612-81.534 1.634-35.827 2.021-47.266 2.021-138.488 0-91.224-.387-102.663-2.021-138.49-1.631-35.752-7.31-60.169-15.612-81.534-8.584-22.088-20.07-40.822-38.743-59.495-18.675-18.673-37.407-30.159-59.495-38.743-21.365-8.302-45.782-13.981-81.534-15.612C438.556.387 427.117 0 335.895 0zm0 60.521c89.686 0 100.31.343 135.729 1.959 32.75 1.493 50.535 6.965 62.37 11.565 15.68 6.094 26.869 13.372 38.622 25.126 11.755 11.754 19.033 22.944 25.127 38.622 4.6 11.836 10.072 29.622 11.565 62.371 1.616 35.419 1.959 46.043 1.959 135.73 0 89.687-.343 100.311-1.959 135.73-1.493 32.75-6.965 50.535-11.565 62.37-6.094 15.68-13.372 26.869-25.127 38.622-11.753 11.755-22.943 19.033-38.621 25.127-11.836 4.6-29.622 10.072-62.371 11.565-35.413 1.616-46.036 1.959-135.73 1.959-89.694 0-100.315-.343-135.73-1.96-32.75-1.492-50.535-6.964-62.37-11.564-15.68-6.094-26.869-13.372-38.622-25.127-11.754-11.753-19.033-22.943-25.127-38.621-4.6-11.836-10.071-29.622-11.565-62.371-1.616-35.419-1.959-46.043-1.959-135.73 0-89.687.343-100.311 1.959-135.73 1.494-32.75 6.965-50.535 11.565-62.37 6.094-15.68 13.373-26.869 25.126-38.622 11.754-11.755 22.944-19.033 38.622-25.127 11.836-4.6 29.622-10.072 62.371-11.565 35.419-1.616 46.043-1.959 135.73-1.959"/>
                                        <path
                                            d="M335.895 447.859c-61.838 0-111.966-50.128-111.966-111.964 0-61.838 50.128-111.966 111.966-111.966 61.836 0 111.964 50.128 111.964 111.966 0 61.836-50.128 111.964-111.964 111.964zm0-284.451c-95.263 0-172.487 77.224-172.487 172.487 0 95.261 77.224 172.485 172.487 172.485 95.261 0 172.485-77.224 172.485-172.485 0-95.263-77.224-172.487-172.485-172.487m219.608-6.815c0 22.262-18.047 40.307-40.308 40.307-22.26 0-40.307-18.045-40.307-40.307 0-22.261 18.047-40.308 40.307-40.308 22.261 0 40.308 18.047 40.308 40.308"/>
                                    </g>
                                </svg>
                                <a class="ml-3" href="https://www.instagram.com/antarkita.photography/"><span class="sr-only">Instagram antarkita photography adalah</span>@antarkita.photography</a>
                            </dd>

                        </li>

                    </ul>
                </div>

                <!-- Contact form -->
                <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
                    <h3 class="text-lg font-medium text-gray-900">Kirim pesan anda ke AntarKita Photography</h3>
                    <form action="https://wa.me/6282226401130" method="get" target="_blank"
                          class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                        <div class="sm:col-span-2">
                            <div class="flex justify-between">
                                <label for="message" class="block text-sm font-medium text-gray-900">Message</label>
                                <span id="message-max" class="text-sm text-gray-500">Max. 500 characters</span>
                            </div>

                            <div class="mt-1">
                                <textarea id="message" name="text" rows="4"
                                          class="block w-full rounded-md border border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                          aria-describedby="message-max"></textarea>
                            </div>
                        </div>
                        <div class="sm:col-span-2 sm:flex sm:justify-end">
                            <button type="submit"
                                    class="mt-2 inline-flex w-full items-center justify-center rounded-md border border-transparent bg-slate-900 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:ring-offset-2 sm:w-auto">
                                Kirim
                            </button>
                        </div>
                    </form>


                    <h3 class="text-lg font-medium text-gray-900">Kirim Kritik & Saran anda ke AntarKita Photography</h3>
                    <form action="{{route('reviews.store')}}" method="post" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">

                        @csrf
                        <div class="sm:col-span-2">
                            <div class="col-span-12 sm:col-span-6 py-2">
                                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">Nama</label>
                                <input type="text" name="review_name"  class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required="">
                            </div>
                            <div class="flex justify-between">
                                <label for="message" class="block text-sm font-medium text-gray-900">Message</label>
                                <span id="message-max" class="text-sm text-gray-500">Max. 500 characters</span>
                            </div>

                            <div class="mt-1">
                                <textarea id="" name="review_text" rows="4"
                                          class="block w-full rounded-md border border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                          aria-describedby="message-max"></textarea>
                            </div>
                        </div>
                        <div class="sm:col-span-2 sm:flex sm:justify-end">
                            <button type="submit"
                                    class="mt-2 inline-flex w-full items-center justify-center rounded-md border border-transparent bg-slate-900 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:ring-offset-2 sm:w-auto">
                                Kirim
                            </button>
                        </div>
                    </form>


                </div>



            </div>
        </div>
    </div>




{{--    Booking--}}
    <div class="mx-auto max-w-7xl py-10 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="relative bg-white shadow-xl">
            <h2 class="sr-only">Contact us</h2>
            <div class="grid grid-cols-1 lg:grid-cols-3">
                <!-- Contact information -->
                <div class="relative overflow-hidden bg-slate-900 py-10 px-6 sm:px-10 xl:p-12">
                    <div class="pointer-events-none absolute inset-0 sm:hidden" aria-hidden="true">
                        <svg class="absolute inset-0 h-full w-full" width="343" height="388" viewBox="0 0 343 388"
                             fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z"
                                  fill="url(#linear1)" fill-opacity=".1"/>
                            <defs>
                                <linearGradient id="linear1" x1="254.553" y1="107.554" x2="961.66" y2="814.66"
                                                gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#fff"></stop>
                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="pointer-events-none absolute top-0 right-0 bottom-0 hidden w-1/2 sm:block lg:hidden"
                         aria-hidden="true">
                        <svg class="absolute inset-0 h-full w-full" width="359" height="339" viewBox="0 0 359 339"
                             fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z"
                                  fill="url(#linear2)" fill-opacity=".1"/>
                            <defs>
                                <linearGradient id="linear2" x1="192.553" y1="28.553" x2="899.66" y2="735.66"
                                                gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#fff"></stop>
                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="pointer-events-none absolute top-0 right-0 bottom-0 hidden w-1/2 lg:block"
                         aria-hidden="true">
                        <svg class="absolute inset-0 h-full w-full" width="160" height="678" viewBox="0 0 160 678"
                             fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z"
                                  fill="url(#linear3)" fill-opacity=".1"/>
                            <defs>
                                <linearGradient id="linear3" x1="192.553" y1="325.553" x2="899.66" y2="1032.66"
                                                gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#fff"></stop>
                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <h1 class="text-lg font-medium text-white">Contact information</h1>
                    <p class="mt-6 max-w-3xl text-base text-indigo-50">Apakah anda ingin membooking jasa fotografi
                        daerah surabaya dan sekitarnya, atau ada pertanyaan? Dengan senang hati AntarKita Photography
                        akan membantu anda!</p>
                    <dl class="mt-8 space-y-6">
                        <dt><span class="sr-only">Phone number</span></dt>
                        <dd class="flex items-center text-base text-indigo-50">
                            <!-- Heroicon name: outline/phone -->
                            <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                 viewBox="-83.77245 -140.29175 726.0279 841.7505">
                                <path
                                    d="M407.185 336.283c-6.948-3.478-41.108-20.284-47.477-22.606-6.368-2.318-11-3.476-15.632 3.478-4.632 6.954-17.948 22.606-22.001 27.244-4.052 4.636-8.106 5.218-15.054 1.738-6.948-3.477-29.336-10.813-55.874-34.486-20.655-18.424-34.6-41.176-38.652-48.132-4.054-6.956-.434-10.716 3.045-14.18 3.127-3.114 6.95-8.116 10.423-12.174 3.474-4.056 4.632-6.956 6.948-11.59 2.316-4.639 1.158-8.695-.58-12.172-1.736-3.478-15.632-37.679-21.422-51.592-5.64-13.547-11.368-11.712-15.633-11.927-4.048-.201-8.685-.244-13.316-.244-4.632 0-12.16 1.739-18.53 8.693-6.367 6.956-24.317 23.767-24.317 57.964 0 34.202 24.896 67.239 28.371 71.876 3.475 4.639 48.993 74.818 118.695 104.914 16.576 7.16 29.518 11.434 39.609 14.636 16.644 5.289 31.79 4.542 43.763 2.753 13.349-1.993 41.108-16.807 46.898-33.036 5.79-16.233 5.79-30.144 4.052-33.041-1.736-2.899-6.368-4.638-13.316-8.116m-126.776 173.1h-.093c-41.473-.016-82.15-11.159-117.636-32.216l-8.44-5.01-87.475 22.947 23.348-85.288-5.494-8.745c-23.136-36.798-35.356-79.328-35.338-123 .051-127.431 103.734-231.106 231.22-231.106 61.734.022 119.763 24.094 163.402 67.782 43.636 43.685 67.653 101.754 67.629 163.51-.052 127.442-103.733 231.126-231.123 231.126M477.113 81.55C424.613 28.989 354.795.03 280.407 0 127.136 0 2.392 124.736 2.33 278.053c-.02 49.011 12.784 96.847 37.118 139.019L0 561.167l147.41-38.668c40.617 22.153 86.346 33.83 132.886 33.845h.114c153.255 0 278.01-124.748 278.072-278.068.028-74.301-28.869-144.165-81.369-196.725"
                                    fill="#FFF" fill-rule="evenodd"/>
                            </svg>
                            <a href="https://wa.me/6282226401130" class="ml-3"><span class="sr-only">Kontak whatsapp antarkita photography adalah</span>+6282226401130</a>
                        </dd>

                    </dl>
                    <ul role="list" class="mt-8 flex space-x-12">
                        <li>

                            <span class="sr-only">Instagram</span>
                            <dd class="flex items-center text-base text-indigo-50">
                                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                     viewBox="-100.7682 -167.947 873.3244 1007.682">
                                    <g fill="#fff">
                                        <path
                                            d="M335.895 0c-91.224 0-102.663.387-138.49 2.021-35.752 1.631-60.169 7.31-81.535 15.612-22.088 8.584-40.82 20.07-59.493 38.743-18.674 18.673-30.16 37.407-38.743 59.495C9.33 137.236 3.653 161.653 2.02 197.405.386 233.232 0 244.671 0 335.895c0 91.222.386 102.661 2.02 138.488 1.633 35.752 7.31 60.169 15.614 81.534 8.584 22.088 20.07 40.82 38.743 59.495 18.674 18.673 37.405 30.159 59.493 38.743 21.366 8.302 45.783 13.98 81.535 15.612 35.827 1.634 47.266 2.021 138.49 2.021 91.222 0 102.661-.387 138.488-2.021 35.752-1.631 60.169-7.31 81.534-15.612 22.088-8.584 40.82-20.07 59.495-38.743 18.673-18.675 30.159-37.407 38.743-59.495 8.302-21.365 13.981-45.782 15.612-81.534 1.634-35.827 2.021-47.266 2.021-138.488 0-91.224-.387-102.663-2.021-138.49-1.631-35.752-7.31-60.169-15.612-81.534-8.584-22.088-20.07-40.822-38.743-59.495-18.675-18.673-37.407-30.159-59.495-38.743-21.365-8.302-45.782-13.981-81.534-15.612C438.556.387 427.117 0 335.895 0zm0 60.521c89.686 0 100.31.343 135.729 1.959 32.75 1.493 50.535 6.965 62.37 11.565 15.68 6.094 26.869 13.372 38.622 25.126 11.755 11.754 19.033 22.944 25.127 38.622 4.6 11.836 10.072 29.622 11.565 62.371 1.616 35.419 1.959 46.043 1.959 135.73 0 89.687-.343 100.311-1.959 135.73-1.493 32.75-6.965 50.535-11.565 62.37-6.094 15.68-13.372 26.869-25.127 38.622-11.753 11.755-22.943 19.033-38.621 25.127-11.836 4.6-29.622 10.072-62.371 11.565-35.413 1.616-46.036 1.959-135.73 1.959-89.694 0-100.315-.343-135.73-1.96-32.75-1.492-50.535-6.964-62.37-11.564-15.68-6.094-26.869-13.372-38.622-25.127-11.754-11.753-19.033-22.943-25.127-38.621-4.6-11.836-10.071-29.622-11.565-62.371-1.616-35.419-1.959-46.043-1.959-135.73 0-89.687.343-100.311 1.959-135.73 1.494-32.75 6.965-50.535 11.565-62.37 6.094-15.68 13.373-26.869 25.126-38.622 11.754-11.755 22.944-19.033 38.622-25.127 11.836-4.6 29.622-10.072 62.371-11.565 35.419-1.616 46.043-1.959 135.73-1.959"/>
                                        <path
                                            d="M335.895 447.859c-61.838 0-111.966-50.128-111.966-111.964 0-61.838 50.128-111.966 111.966-111.966 61.836 0 111.964 50.128 111.964 111.966 0 61.836-50.128 111.964-111.964 111.964zm0-284.451c-95.263 0-172.487 77.224-172.487 172.487 0 95.261 77.224 172.485 172.487 172.485 95.261 0 172.485-77.224 172.485-172.485 0-95.263-77.224-172.487-172.485-172.487m219.608-6.815c0 22.262-18.047 40.307-40.308 40.307-22.26 0-40.307-18.045-40.307-40.307 0-22.261 18.047-40.308 40.307-40.308 22.261 0 40.308 18.047 40.308 40.308"/>
                                    </g>
                                </svg>
                                <a class="ml-3" href="https://www.instagram.com/antarkita.photography/"><span class="sr-only">Instagram antarkita photography adalah</span>@antarkita.photography</a>
                            </dd>

                        </li>

                    </ul>
                </div>

                <!-- Contact form -->
                <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
                    <h3 class="text-lg font-bold text-gray-900">Reservasi</h3>
                    <form action="{{route('bookings.store')}}" method="post" enctype="multipart/form-data"
                          class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                        @csrf

                        <div class="sm:col-span-2">
                            <div class="col-span-12 sm:col-span-6 py-2">
                                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">Nama</label>
                                <input type="text" name="booking_name"  class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required="">
                            </div>
                            <div class="col-span-12 sm:col-span-6 py-2">
                                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="text" name="booking_email"  class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required="">
                            </div>
                            <div class="col-span-12 sm:col-span-6 py-2">
                                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomer Telpon</label>
                                <input type="text" name="booking_phone"  class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required="">
                            </div>
                            <div class="col-span-12 sm:col-span-6 py-2">
                                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                                <input type="text" name="booking_address"  class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required="">
                            </div>
                            <div class="col-span-12 sm:col-span-6 py-2">
                                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                                <input type="date" placeholder="dd-mm-yyyy" value=""
                                       min="1997-01-01" max="2030-12-31" name="booking_date"  class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required="">
                            </div>
                            <div class="col-span-12 sm:col-span-6 py-2 ">
                                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Domisili</label>
                                <select name="domisili_id" id="" class="bg-white border border-white-300 text-white-400 text-sm rounded-lg focus:ring-black-200 focus:border-white-300 block w-full p-2.5 dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400 dark:text-black dark:focus:ring-black-700 dark:focus:border-black-500">
                                    @foreach($domisilis as $do)
                                        <option value="{{$do->id}}">{{$do->domisili_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-span-12 sm:col-span-6 py-2">
                                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                                <select name="category_gallery_id" id="" class="bg-white border border-white-300 text-white-400 text-sm rounded-lg focus:ring-black-200 focus:border-white-300 block w-full p-2.5 dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400 dark:text-black dark:focus:ring-black-700 dark:focus:border-black-500">
                                    @foreach($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="sm:col-span-2 sm:flex sm:justify-end py-2">
                            <button type="submit"
                                    class="mt-2 inline-flex w-full items-center justify-center rounded-md border border-transparent bg-slate-900 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:ring-offset-2 sm:w-auto">
                                Kirim
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
