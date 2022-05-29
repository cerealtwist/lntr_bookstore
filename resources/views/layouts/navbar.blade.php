<!-- Require css -->
    <nav class="bg-white shadow scrollbar-hide" style="position: fixed;top:0;width:100%;padding:5px;overflow:hidden;z-index:18">
        <div class="container px-6 py-3 mx-auto">
            <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <a class="text-2xl font-extrabold text-blue-700 transition-colors duration-200 lg:text-3xl hover:text-gray-700" href="#">Lentera</a>

                        <!-- Search input di sebelah logo -->
                        <div class="hidden mx-10 md:block">
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                                        <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>

                                <input type="text" class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300" placeholder="Cari buku...">
                            </div>
                        </div>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="flex md:hidden">
                        <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div class="items-center md:flex">
                    <div class="flex flex-col mt-2 md:flex-row md:mt-0 md:mx-1">
                        <a class="my-1 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:mx-4 md:my-0" href="#">Home</a>
                        <a class="my-1 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:mx-4 md:my-0" href="#">Shop</a>
                        <a class="my-1 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:mx-4 md:my-0" href="#">Contact</a>
                    </div>

                    <div class="flex items-center py-2 -mx-1 md:mx-4">
                        <a class="relative text-gray-700 hover:text-gray-600" href="{{route('cartproducts')}}">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="absolute top-0 left-0 rounded-full bg-blue-500 text-white p-1 text-xs"></span>
                        </a>
                    </div>

                    <!-- Search input on mobile screen -->
                    <div class="mt-3 md:hidden">
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                                    <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>

                            <input type="text" class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300" placeholder="Search">
                        </div>
                    </div>
                </div>
            </div>

            <div class="scrollbar-hide py-3 mt-3 -mx-3 overflow-y-auto whitespace-nowrap" style="text-align:center">
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:my-0" href="#">Novel</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:my-0" href="#">Komik</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:my-0" href="#">Cerpen</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:my-0" href="#">Dongeng</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:my-0" href="#">Puisi</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:my-0" href="#">Sejarah</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:my-0" href="#">Filosofi</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:my-0" href="#">Religi</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:my-0" href="#">Pendidikan</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:my-0" href="#">Ensiklopedia</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:my-0" href="#">Sains</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:my-0" href="#">Antologi</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:my-0" href="#">Fotografi</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:my-0" href="#">Bahasa</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:my-0" href="#">Majalah</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:my-0" href="#">Seni</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:my-0" href="#">Politik</a>
            </div>
        </div>
    </nav>