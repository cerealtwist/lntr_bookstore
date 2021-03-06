@extends('layouts.index1')

@section ('center')
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-10 max-w-screen-xl" style="margin-top:15%;margin-bottom:10%">
      <div class="flex shadow-md my-10">
        <div class="w-3/4 bg-white px-10 py-10">
          <div class="flex justify-between border-b pb-8">
            <h1 class="font-semibold text-2xl">Keranjang</h1>
            <h2 class="font-semibold text-2xl">{{$cartItems->totalQuantity}} Barang</h2>
          </div>
          <div class="flex mt-10 mb-5">
            <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Detail Produk</h3>
            <h3 class="font-semibold text-center text-gray-600 text-sm uppercase w-1/6 text-center">Jumlah</h3>
            <h3 class="font-semibold text-center text-gray-600 text-sm uppercase w-1/5 text-center">Harga</h3>
            <h3 class="font-semibold text-center text-gray-600 text-sm uppercase w-1/6 text-center">Total</h3>
          </div>
          @foreach ($cartItems->items as $item)
          <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
            <div class="flex w-2/5"> <!-- product -->
              <div class="w-20">
                <img class="h-24" src="{{Storage::disk('local')->url('product_images/'.$item['data']['image'])}}" alt="">
              </div>
              <div class="flex flex-col justify-between ml-4 flex-grow">
                <span class="font-medium text-md">{{$item['data']['name']}}</span>
                <span class="font-bold text-blue-500 text-sm">{{$item['data']['type']}}</span>
                <span class="text-gray-500 text-xs">{{$item['data']['description']}}</span>
                {{-- <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remove</a> --}}
              </div>
            </div>
            <div class="flex justify-center w-1/4">
              <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
              </svg>
  
              <input class="mx-4 border text-center w-8" type="text" value="{{$item['quantity']}}">
  
              <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
              </svg>
            </div>
            <span class="text-center w-1/5 font-semibold text-sm">{{$item['data']['price']}}</span>
            <span class="text-center w-1/5 font-semibold text-sm">Rp. {{$item['totalSinglePrice']}}</span>
            <a class="relative text-red-600 hover:text-gray-800" href="{{route('DeleteCartItem', ['id' => $item['data']['id']])}}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>
            </a>
          </div>
          @endforeach
  
          <a href="#" class="flex font-semibold text-blue-500 hover:text-blue-600 text-sm mt-10">
            <svg class="fill-current mr-2 text-blue-500 w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
            Kembali
          </a>
        </div>
  
        <div id="summary" class="w-1/4 px-8 py-10">
          <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
          @foreach ($cartItems->items as $item)
          <div class="flex justify-between mt-10 mb-5">
            <span class="font-semibold text-sm uppercase">{{$item['data']['name']}} | {{$item['quantity']}}</span>
            <span class="font-semibold text-sm text-blue-500">{{$item['totalSinglePrice']}}</span>
          </div>
          @endforeach
          <div class="border-t mt-8">
            <div class="flex font-semibold justify-between py-6 text-sm uppercase">
              <span>Harga Subtotal</span>
              <span>{{$cartItems->totalPrice}}</span>
            </div>
            <button class="bg-blue-500 font-semibold hover:bg-blue-600 py-3 text-sm text-white uppercase w-full rounded-lg">Checkout</button>
          </div>
        </div>
  
      </div>
    </div>
  </body>
  