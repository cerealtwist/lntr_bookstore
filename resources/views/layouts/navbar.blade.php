<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<!-- bagian navbar -->
    <nav class="bg-white shadow scrollbar-hide" style="position: fixed;top:0;width:100%;padding:5px;overflow:hidden;z-index:18">
        <div class="container px-6 py-3 mx-auto">
            <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <a class="text-2xl font-extrabold text-blue-500 transition-colors duration-200 lg:text-3xl hover:text-gray-700" href="{{route('homePage')}}">Laterna</a>

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

                <!-- Mobile Menu-->
                <div class="items-center md:flex">
                    <div class="flex flex-col mt-2 md:flex-row md:mt-0 md:mx-1">
                        <a class="my-1 text-sm font-medium leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:mx-4 md:my-0" href="#">Home</a>
                        <a class="my-1 text-sm font-medium leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:mx-4 md:my-0" href="#">Shop</a>
                        <a class="my-1 text-sm font-medium leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:mx-4 md:my-0" href="#">Contact</a>
                        @if (Auth::check())
                        <a class="mx-4 relative text-gray-700 hover:text-gray-600" href="{{route('cartproducts')}}">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="absolute top-0 left-0 rounded-full bg-blue-500 text-white p-1 text-xs"></span>
                        </a>
                        <a class="my-1 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-blue-600 hover:no-underline md:mx-4 md:my-0">|</a>
                        <!-- Dropdown Profile -->
                        <li class="list-none mx-4">
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-sm text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-600 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">{{ Auth::user()->name }}<svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                                <ul class="py-1" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Profile</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Log Out</a>
                                </li>
                                </ul>
                                {{-- <div class="py-1">
                                <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
                                </div> --}}
                            </div>
                        </li>
                        @else
                        <a class="my-1 items-center h-6 px-4 m-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500 rounded-md focus:shadow-outline hover:bg-blue-600 md:mx-4 md:my-0" href="/login">Login</a>
                        @endif
                    </div>

                    <!-- Search input di mobile -->
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

            <!-- Bagian kategory navbar (bawah) -->

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

    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>