@extends('layouts.index')

@section('center')

<section style="margin-top: 5%;margin-bottom: 5%">
    <div class="max-w-screen-xl px-4 py-8 mx-auto">
      <div>
        <span class="inline-block w-12 h-1 bg-blue-700"></span>
  
        <h2 class="mt-1 text-2xl font-extrabold tracking-wide lg:text-3xl">
          Featured Books
        </h2>
      </div>

      <div class="grid grid-cols-2 mt-8 lg:grid-cols-4 gap-x-4 gap-y-8" style="margin-top: 5%;">
        @foreach ($products as $product)
        <a class="block">
          <div class="flex justify-center">
            <strong class="relative h-6 px-4 text-sm leading-6 text-white uppercase bg-gray-800"> Featured </strong>
          </div>
  
          <img
            alt="Book Product"
            src="{{Storage::disk('local')->url('product_images/'.$product->image)}}"
            class="object-cover w-full -mt-3 h-96"
          />
  
          <h5 class="mt-4 text-lg text-black/90">
            {{$product->name}}
          </h5>
  
          <div class="flex items-center justify-between mt-4 font-bold">
            <p class="text-lg">
              {{$product->price}}
            </p>
  
            <p class="text-md tracking-wide uppercase">
              {{$product->type}}
            </p>
          </div>
          <button type="button" onclick="window.location='{{route('AddToCartProduct',['id'=>$product->id])}}'" class="flex items-center justify-center w-full px-2 py-2 mt-4 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" viewBox="0 0 20 20" fill="currentColor">
                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
            </svg>
            <span class="mx-1"">ADD TO CART</span>
          </button>
        </a>
        @endforeach
      </div>
    </div>
</section>

{{-- <div class="mx-auto container py-12 px-4 md:px-6 2xl:px-0 flex justify-center items-center">
  <div class="flex flex-col lg:flex-row justify-center items-center lg:space-x-8 space-y-6 lg:space-y-0">
      <div class="relative">
          <img class="hidden lg:block" src="https://i.ibb.co/XXKZ7Pt/Group-1785.png" alt="table-chair" />
          <div class="absolute bottom-4 sm:bottom-10 inset-x-4 sm:inset-x-10 p-6 bg-white dark:bg-gray-800 dark:text-white flex flex-col justify-start items-start">
              <div>
                  <p class="text-2xl font-semibold leading-6 text-gray-800 dark:text-white">Browse Philosophy</p>
              </div>
              <div class="mt-2">
                  <p class="text-base leading-6 sm:leading-4 text-gray-600 dark:text-white">Jelajahi katalog buku Filosofi terbaik pilihan kami.</p>
              </div>
              <div class="mt-6">
                  <div class="flex justify-between items-center space-x-2">
                      <a class="text-base font-medium leading-none focus:outline-none focus:underline hover:underline text-gray-800 dark:text-white" href="javascript:void(0)">Explore</a>
                      <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/cta-IV-svg1.svg" alt="arrow" />
                      <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/cta-IV-svg1dark.svg" alt="arrow" />
                  </div>
              </div>
          </div>
      </div>

      <div class="relative">
          <img class="hidden lg:block" src="https://i.ibb.co/0qHj658/Group-1786.png" alt="chair-wood-fire" />
          <div class="absolute bottom-4 sm:bottom-10 inset-x-4 sm:inset-x-10 p-6 bg-white dark:bg-gray-800 dark:text-white flex flex-col justify-start items-start">
              <div>
                  <p class="text-2xl font-semibold leading-6 text-gray-800 dark:text-white">Browse Novel</p>
              </div>
              <div class="mt-2">
                  <p class="text-base leading-6 sm:leading-4 text-gray-600 dark:text-white">Jelajahi buku-buku novel terbaik pilihan kami.</p>
              </div>
              <div class="mt-6">
                  <div class="flex justify-between items-center space-x-2">
                      <a class="text-base font-medium leading-none focus:outline-none focus:underline hover:underline text-gray-800 dark:text-white" href="javascript:void(0)">Explore</a>
                      <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/cta-IV-svg1.svg" alt="arrow" />
                      <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/cta-IV-svg1dark.svg" alt="arrow" />
                  </div>
              </div>
          </div>
      </div>
  </div>
</div> --}}


<div class="container px-5 py-24 mx-auto" style="margin-bottom: 10%">
    <div class="flex flex-col text-center w-full mb-20">
      <h2 class="text-xs text-blue-500 tracking-widest font-medium title-font mb-1">ROOF PARTY POLAROID</h2>
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Master Cleanse Reliac Heirloom</h1>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/3">
        <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
          <div class="flex items-center mb-3">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-blue-500 text-white flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <h2 class="text-gray-900 text-lg title-font font-medium">Shooting Stars</h2>
          </div>
          <div class="flex-grow">
            <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
            <a class="mt-3 text-blue-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
          <div class="flex items-center mb-3">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-blue-500 text-white flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <h2 class="text-gray-900 text-lg title-font font-medium">The Catalyzer</h2>
          </div>
          <div class="flex-grow">
            <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
            <a class="mt-3 text-blue-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
          <div class="flex items-center mb-3">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-blue-500 text-white flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <circle cx="6" cy="6" r="3"></circle>
                <circle cx="6" cy="18" r="3"></circle>
                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
              </svg>
            </div>
            <h2 class="text-gray-900 text-lg title-font font-medium">Neptune</h2>
          </div>
          <div class="flex-grow">
            <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
            <a class="mt-3 text-blue-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  

@endsection