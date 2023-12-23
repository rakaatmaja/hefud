<x-admin-layout>
    <main class="w-full flex-grow p-6">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
                <p class="text-xl pb-6 flex items-center">
                    <i class="fas fa-list mr-3"></i> Edit Produk
                </p>
                <div class="leading-loose">
                    <form enctype="multipart/form-data" action="{{ route('api.update', $produk->id_produk) }}" method="POST" class="p-10 bg-white rounded shadow-xl">
                        @csrf

                      
                        @method('PUT')
            
                        <div class="grid grid-cols-2 grid-rows-1 gap-9">
                            <div>
                            
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="nama_produk">Nama Produk</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nama_produk" name="nama_produk" type="text" required="" placeholder="" aria-label="Name" value="{{ old('nama_produk') ?? $produk->nama_produk }}">
                                    @error('nama_produk')
                                        <div class="text-xs text-red-800">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="desk_produk">Deskripsi</label>
                                    <textarea class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="desk_produk" name="desk_produk" type="textarea" required="" placeholder="" aria-label="Name">{{ old('desk_produk') ?? $produk->desk_produk }}</textarea>
                                </div>
                                
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="stok_produk">Stok</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="stok_produk" name="stok_produk" type="text" required="" placeholder="" aria-label="Name" value="{{ old('stok_produk') ?? $produk->stok_produk }}">
                                    @error('stok_produk')
                                    <div class="text-xs text-red-800">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="harga_produk">Harga</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="harga_produk" name="harga_produk" type="text" required="" placeholder="" aria-label="Name" value="{{ old('harga_produk') ?? $produk->harga_produk }}">
                                    @error('harga_produk')
                                    <div class="text-xs text-red-800">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="id_kategori">Kategori</label>
                                    <select id="kategori" name="id_kategori" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded">
                                        <option value="" disabled selected>-Pilih Kategori Produk-</option>
                                        @foreach ($kategori as $item) 
                                        <option value="{{$item->id_kategori}}"{{((isset($produk)&&$produk->id_kategori==$item->id_kategori) || old('id_kategori')==$item->id_kategori)?'selected':''}}>{{$item->nama_kategori}}</option>
                                        @endforeach
                                    </select>
                                    @error('id_kategori')
                                    <div class="text-xs text-red-800">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="gambar_produk">Gambar</label>
                                    <input name="gambar_produk" id="gambar_produk" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" type="file">
                                    @if(isset($produk) && $produk->gambar_produk)
                                    <img class="mt-3" src="{{asset($produk->gambar_produk)}}" alt="Gambar Produk" width="100">
                                @endif
                                    @error('gambar_produk')
                                    <div class="text-xs text-red-800">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 flex justify-end">
                            <button class="px-4 py-1 text-white font-light tracking-wider bg-blue-700 rounded" type="submit" name="submit">+simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.getElementById('productForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const updateProduct = (id) => {
                const formData = new FormData(document.getElementById('productForm'));
                axios.get(`/api/produk/edit/${id}`, formData)
                    .then(response => {
                        console.log(response.data);

                        Swal.fire({
                            icon: 'success',
                            title: 'Edit data Successful!',
                            text: 'You will be redirected to the homepage.',
                        }).then(() => {
                            if (response.data) {
                                window.location.href = '/';
                            }
                        });
                    })
                    .catch(function (error) {
                        console.error(error.response.data);
                        Swal.fire({
                            icon: 'error',
                            title: 'Edit data Failed',
                            text: 'Please try again.',
                        });
                    });
            };

            const productId = document.querySelector('input[name="id_produk"]');

            if (productId && productId.value) {
                updateProduct(productId.value);
            } else {
             
            }
        });
    </script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    </x-admin-layout>