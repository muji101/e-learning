<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos Class Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- splide -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- aos animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- icons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body>

    <div class="bg-gray-700">
        <div class="grid grid-cols-4">
            <div class="col-span-1 w-24 py-2 mx-auto">
                <img src="/images/undraw_working_late_pukg.svg" alt="">
            </div>
            <div class="col-span-2 py-4 text-gray-100">
                <h1 class="font-bold text-xl">Struktur Laravel Jetstream</h1>
                <span class="font-semibold border-b-2 border-white pb-1">Opening</span>
            </div>
            <div class="col-span-1 py-4 mx-auto text-gray-100 font-bold">
                <button onclick="rating()" href="#" class="px-8 py-3 bg-blue-900 rounded-full">Beri Review Kelas</button>
            </div>
        </div>
    </div>
    
    <div class="grid grid-cols-4">
        <div class="col-span-1 bg-gray-800">
            <div class="overflow-x-hidden h-screen">
                <div class="py-4 px-4">
                    <div class="">
                        <h1 class="text-gray-100 font-bold">1. Section 1</h1>
                    </div>
    
                    <div class="pl-4 flex justify-between py-2 text-blue-900">
                        <div class="flex items-center">
                            <span class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="#">Opening</a>
                        </div>
                        <div class="">
                            <p>1 mins </p>
                        </div>
                    </div>
                    <div class="pl-4 flex justify-between py-2 text-blue-900">
                        <div class="flex items-center">
                            <span class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="#">Preparation</a>
                        </div>
                        <div class="">
                            <p>2 mins </p>
                        </div>
                    </div>
                    <div class="pl-4 flex justify-between py-2 text-blue-900">
                        <div class="flex items-center">
                            <span class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="#">Review Website</a>
                        </div>
                        <div class="">
                            <p>2 mins </p>
                        </div>
                    </div>
                </div>
                <div class="py-4 px-4">
                    <div class="">
                        <h1 class="text-gray-100 font-bold">1. Section 1</h1>
                    </div>
    
                    <div class="pl-4 flex justify-between py-2 text-blue-900">
                        <div class="flex items-center">
                            <span class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="#">Opening</a>
                        </div>
                        <div class="">
                            <p>1 mins </p>
                        </div>
                    </div>
                    <div class="pl-4 flex justify-between py-2 text-blue-900">
                        <div class="flex items-center">
                            <span class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="#">Preparation</a>
                        </div>
                        <div class="">
                            <p>2 mins </p>
                        </div>
                    </div>
                    <div class="pl-4 flex justify-between py-2 text-blue-900">
                        <div class="flex items-center">
                            <span class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="#">Review Website</a>
                        </div>
                        <div class="">
                            <p>2 mins </p>
                        </div>
                    </div>
                </div>
                <div class="py-4 px-4">
                    <div class="">
                        <h1 class="text-gray-100 font-bold">1. Section 1</h1>
                    </div>
    
                    <div class="pl-4 flex justify-between py-2 text-blue-900">
                        <div class="flex items-center">
                            <span class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="#">Opening</a>
                        </div>
                        <div class="">
                            <p>1 mins </p>
                        </div>
                    </div>
                    <div class="pl-4 flex justify-between py-2 text-blue-900">
                        <div class="flex items-center">
                            <span class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="#">Preparation</a>
                        </div>
                        <div class="">
                            <p>2 mins </p>
                        </div>
                    </div>
                    <div class="pl-4 flex justify-between py-2 text-blue-900">
                        <div class="flex items-center">
                            <span class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="#">Review Website</a>
                        </div>
                        <div class="">
                            <p>2 mins </p>
                        </div>
                    </div>
                </div>
                <div class="py-4 px-4">
                    <div class="">
                        <h1 class="text-gray-100 font-bold">1. Section 1</h1>
                    </div>
    
                    <div class="pl-4 flex justify-between py-2 text-blue-900">
                        <div class="flex items-center">
                            <span class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="#">Opening</a>
                        </div>
                        <div class="">
                            <p>1 mins </p>
                        </div>
                    </div>
                    <div class="pl-4 flex justify-between py-2 text-blue-900">
                        <div class="flex items-center">
                            <span class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="#">Preparation</a>
                        </div>
                        <div class="">
                            <p>2 mins </p>
                        </div>
                    </div>
                    <div class="pl-4 flex justify-between py-2 text-blue-900">
                        <div class="flex items-center">
                            <span class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="#">Review Website</a>
                        </div>
                        <div class="">
                            <p>2 mins </p>
                        </div>
                    </div>
                </div>
                <div class="py-4 px-4">
                    <div class="">
                        <h1 class="text-gray-100 font-bold">1. Section 1</h1>
                    </div>
    
                    <div class="pl-4 flex justify-between py-2 text-blue-900">
                        <div class="flex items-center">
                            <span class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="#">Opening</a>
                        </div>
                        <div class="">
                            <p>1 mins </p>
                        </div>
                    </div>
                    <div class="pl-4 flex justify-between py-2 text-blue-900">
                        <div class="flex items-center">
                            <span class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="#">Preparation</a>
                        </div>
                        <div class="">
                            <p>2 mins </p>
                        </div>
                    </div>
                    <div class="pl-4 flex justify-between py-2 text-blue-900">
                        <div class="flex items-center">
                            <span class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <a href="#">Review Website</a>
                        </div>
                        <div class="">
                            <p>2 mins </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-3 bg-gray-600">
            <div class="mx-8 py-4">
                <iframe width="1120" height="630" src="https://www.youtube.com/embed/auhRgeDB8-8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="text-right pt-8 px-12 text-gray-100">
                <a href="#" class="py-2 px-6 mx-2 bg-blue-900 rounded-full">
                    <i class="fas fa-arrow-left"></i>
                    Sebelumnya
                </a>
                <a href="#" class="py-2 px-6 mx-2 bg-blue-900 rounded-full">
                    Selanjutnya
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" style="display: none;" id="modal">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <!--
                    Background overlay, show/hide based on modal state.
            
                    Entering: "ease-out duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                    Leaving: "ease-in duration-200"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            
                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            
                <!--
                    Modal panel, show/hide based on modal state.
            
                    Entering: "ease-out duration-300"
                    From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    To: "opacity-100 translate-y-0 sm:scale-100"
                    Leaving: "ease-in duration-200"
                    From: "opacity-100 translate-y-0 sm:scale-100"
                    To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                -->
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="">
                            <!-- <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            Heroicon name: outline/exclamation
                                <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div> -->
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                    Beri Rating
                                </h3>
                                <div class="mt-2">
                                    <div class="text-base text-blue-500">
                                        <p class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center sm:mt-0 sm:ml-4 sm:text-left py-4">
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                    Beri Ulasan
                                </h3>
                                <div class="mt-2">
                                    <div class="text-base text-blue-500">
                                        <textarea name="" id="" class="bg-gray-50" cols="40"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button onclick="sembunyi()" type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-gray-100 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                            Kirim
                        </button>
                        <button onclick="sembunyi()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-gray-100 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>


    
    
    
    <script src="https://unpkg.com/jarallax@1/dist/jarallax.min.js"></script>
    <script src="https://unpkg.com/jarallax@1/dist/jarallax-video.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    <script>
        new Splide( '.splide', {
            type    : 'loop',
            perPage : 1,
            autoplay: true,
        } ).mount();
    </script>

    <script>
        function rating(){
            document.getElementById("modal").style.display = "block";
        }
        function sembunyi(){
            document.getElementById("modal").style.display = "none";
        }
    </script>
</body>
</html>