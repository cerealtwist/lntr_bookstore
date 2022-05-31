@extends('layouts.master')

@section('content')
<form id="pictureForm" action="/admin/updateImage/{{$product->id}}" method="POST" enctype="multipart/form-data"></form>
<div>
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-xl font-bold leading-6 text-gray-900">Edit Produk</h3>
        <p class="mt-1 text-md text-gray-600">Informasi yang terisi pada detail produk akan tertampil<br>secara publik.</p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="/admin/update/{{$product->id}}" method="POST">

        {{ csrf_field() }}

        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-product-name">
                  Nama Produk (Buku)
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                <p class="text-red-500 text-xs italic">Tolong isi field.</p>
              </div>
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                  Kategori
                </label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option>Novel</option>
                    <option>Religi</option>
                    <option>Pendidikan</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-price">
                  Price
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-price" type="number" placeholder="Masukkan Harga">
                <p class="text-gray-600 text-xs italic">Masukkan harga sepanjang mungkin sampe gak masuk akal</p>
              </div>
            </div>

            <div>
              <label for="about" class="block text-sm font-medium text-gray-700"> Description </label>
              <div class="mt-1">
                <textarea id="about" name="about" rows="3" class="appearance-none py-3 px-4 mb-3 leading-tight bg-gray-200 shadow-sm focus:outline-none focus:bg-white focus:border-gray-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded" placeholder="Masukkan Deskripsi Tentang Buku Disini"></textarea>
              </div>
              <p class="text-gray-600 text-xs italic">Deskripsi tentang buku.</p>
            </div>
          

            <div>
              <label class="block text-sm font-medium text-gray-700"> Photo </label>
              <div class="mt-1 flex items-center">
                <span class="inline-block h-12 w-12 overflow-hidden bg-gray-100">
                  <img src="{{Storage::url('product_images/'.$product['image'])}}">
                </span>
                <input type="file" name="image" form="pictureForm" value="{{$product->image}}" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" ></input>
              </div>
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection