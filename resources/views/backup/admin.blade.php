<x-admin-layout>
    <main class="w-full flex-grow p-6">         
        <h1 class="text-3xl text-black pb-6">Dashboard</h1>
        <div class="grid grid-cols-4 sm:grid-cols-4 xl:grid-cols-4 gap-6">
        </div>
        <div class="flex items-center justify-between border-t mt-3 border-gray-200 bg-white px-4 py-3 sm:px-6">
            <div class="w-full mt-6 mb-6">
                <div class="px-0">
                    <div class="grid mb-2 grid-cols-3 gap-5">
                        <!-- Kolom 1 -->
                        <div class="col-span-1 ml-1">
                            <p class="text-xl pb-3"><i class="fas fa-list mr-3"></i> Data Produk</p>
                        </div>
                        <!-- Kolom 2 -->
                        <div class="col-span-1 flex items-center justify-center">
                            <!-- PENCARIAN -->
                            <form action="{{ route('admin.index') }}" method="GET" class="flex items-center">   
                                <select id="id_kategori" name="id_kategori" class="w-full mr-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Pilih kategori</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{$item->id_kategori}}" {{(isset($_GET['id_kategori']) && $_GET['id_kategori']==$item->id_kategori)?'selected':''}}>{{$item->nama_kategori}}</option>
                                    @endforeach
                                </select>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    </div>
                                    <input type="text" name="s" value="{{(isset($_GET['s']))?$_GET['s']:''}}" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
                                </div>
                                <button type="submit" class="p-2.5 ms-2 ml-3 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </button>
                            </form>
                            <!-- END PENCARIAN -->
                        </div>
                        <!-- Kolom 3 -->
                        <div class="col-span-1 flex items-center justify-center">
                            <a href="{{ route('backpage.create') }}" class="ml-60">
                                <button type="button" class="py-2 px-2 flex justify-center items-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
                                    +Tambah Data
                                </button>
                            </a>
                        </div>
                    </div>     
                    <div class="bg-white overflow-auto">
                        <table class="border-collapse  min-w-full bg-white" >
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/7 border text-left py-3 px-4 uppercase font-semibold text-sm">GAMBAR PRODUK</th>
                                    <th class="w-1/7 border text-left py-3 px-4 uppercase font-semibold text-sm">NAMA PRODUK</th>
                                    <th class="w-1/7 border text-left py-3 px-4 uppercase font-semibold text-sm">DESKRIPSI</th>
                                    <th class="w-1/7 border text-left py-3 px-4 uppercase font-semibold text-sm">HARGA</th>
                                    <th class="w-1/7 border text-left py-3 px-4 uppercase font-semibold text-sm">STOK</th>
                                    <th class="w-1/7 border text-left py-3 px-4 uppercase font-semibold text-sm">KATEGORI</th>
                                    <th class="w-1/7 border text-left py-3 px-4 uppercase font-semibold text-sm">AKSI</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700" id="tableBody">
                                {{-- @foreach($tableBody as $key=>$td)
                                    <tr>
                                        <td class="w-1/7 border border-dark-700 text-left py-3 px-4"><img class="h-20 w-30" src="{{asset($td->gambar_produk)}}" alt=""></td>
                                        <td class="w-1/7 border border-dark-700 text-left py-3 px-4">{{$td->nama_produk}}</td>
                                        <td class="w-1/7 border border-dark-700 text-left py-3 px-4">{{Str::limit($td->desk_produk,30)}}</td>
                                        <td class="w-1/7 border border-dark-700 text-left py-3 px-4">{{$td->harga_produk}}</td>
                                        <td class="w-1/7 border border-dark-700 text-left py-3 px-4">{{$td->stok_produk}}</td>
                                        <td class="w-1/7 border border-dark-700 text-left py-3 px-4">{{$td->kategori->nama_kategori}}</td>
                                        <td class="w-1/7 border border-dark-700 text-left py-3 px-4">
                                            <div class="flex items-center">
                                                <a href="{{ route('backpage.edit', $td->id_produk) }}">
                                                    <button type="button" class="py-2 px-4 flex justify-center items-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-gray-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>
                                                        Edit
                                                    </button>
                                                </a>
                                                <button type="button" class="ml-2 py-2 px-4 flex justify-center items-center bg-red-600 hover:bg-red-700 focus:ring-red-500 focus:ring-offset-red-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg" onclick="handleDelete({{ $td->id_produk }})">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach --}}


                            </tbody>
                        </table>
                        <div class="pt-3">
                            {{-- {{$produk->links()}} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
          
            const getAllProducts = () => {
                axios.get('/api/produk')
                    .then(response => {
                        var tableBody = document.getElementById('tableBody');
                        response.data.forEach(e => {
                        tableBody.innerHTML += '<tr>'+
                            '<td><img class="h-20 w-30" src="'+ e.gambar_produk +'" alt=""></td>'+
                            '<td>'+e.nama_produk+'</td>'+
                            '<td>'+e.desk_produk+'</td>'+
                            '<td>'+e.harga_produk+'</td>'+
                            '<td>'+e.stok_produk+'</td>'+
                            '<td>'+e.id_kategori+'</td>'+
                            '<td>'+
                        '<div class="flex items-center">'+
                            '<a href="/admin/edit/'+ e.id_produk +'">'+
                                '<button type="button" class="py-2 px-4 flex justify-center items-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-gray-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">'+
                                    '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">'+
                                        '<path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />'+
                                    '</svg>'+
                                    'Edit'+
                                '</button>'+
                            '</a>'+
                            '<button type="button" class="ml-2 py-2 px-4 flex justify-center items-center bg-red-600 hover:bg-red-700 focus:ring-red-500 focus:ring-offset-red-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg" onclick="handleDelete('+ e.id_produk +')">'+
                                '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">'+
                                    '<path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />'+
                                '</svg>'+
                                'Delete'+
                            '</button>'+
                        '</div>'+
                    '</td>'+
                            '</tr>';
                            
                        });    
                    })
                    .catch(error => {
                        console.error('Error fetching products:', error);
                    });
            };
            getAllProducts();
        });

        const handleDelete = (productId) => {
        if (confirm("Are you sure you want to delete this product?")) {
            axios.delete(`/api/produk/${productId}`)
                .then(response => {
                    console.log(response.data);
                    location.reload();
                })
                .catch(error => {
                    console.error('Error deleting product:', error);
                });
        }
    };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</x-admin-layout>
