<x-home-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-baseline justify-between border-b border-gray-200 pt-2 pb-6">
              <h1 class="text-4xl font-bold tracking-tight text-gray-900">Detail Produk</h1>
              <div class="flex items-center">
              </div>
            </div>
            <div class="container mx-auto p-4">
              <div class="container mx-auto px-4">
                <div class="lg:col-gap-12 xl:col-gap-16 mt-8 grid grid-cols-1 gap-12 lg:mt-12 lg:grid-cols-5 lg:gap-16">
                  <!-- Star Card Baju -->
                    <div id="imageSlider" class="lg:col-span-3 lg:row-end-1">
                      <div class="lg:flex lg:items-start">
                        <div class="lg:order-2 lg:ml-5 relative">
                          <div v-if="images.length" class="relative">
                            <img :src="currentImage" alt="Slider Image" style="max-width: 100%;">
                          </div>
                          <div class="absolute top-1/2 left-0 transform -translate-y-1/2">
                            <button @click="prevImage" class="bg-black text-white p-2 rounded-full">
                              &lt;
                            </button>
                          </div>
                          <div class="absolute top-1/2 right-0 transform -translate-y-1/2">
                            <button @click="nextImage" class="bg-black text-white p-2 rounded-full">
                              &gt;
                            </button>
                          </div>
                          <p v-if="!images.length">No images available.</p>
                        </div>
                      </div>
                    </div>
                  <!-- End Card Baju -->
                  <!--Start Deskripsi Baju-->
                    <div class="lg:col-span-2 lg:row-span-2 lg:row-end-2">
                      <h1 class="sm: text-2xl font-bold text-gray-900 sm:text-3xl">{{$item->nama_produk}}</h1>
                      <div class="mt-5 flex items-center">
                        <div class="flex items-center">
                          <svg class="block h-4 w-4 align-middle text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" class=""></path>
                          </svg>
                          <svg class="block h-4 w-4 align-middle text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" class=""></path>
                          </svg>
                          <svg class="block h-4 w-4 align-middle text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" class=""></path>
                          </svg>
                          <svg class="block h-4 w-4 align-middle text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" class=""></path>
                          </svg>
                          <svg class="block h-4 w-4 align-middle text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" class=""></path>
                          </svg>
                        </div>
                        <p class="ml-2 text-sm font-medium text-gray-500">1,209 Reviews</p>
                      </div>

                      {{-- <h2 class="mt-8 text-base text-gray-900">Color Type</h2>
                      <div class="mt-3 flex select-none flex-wrap items-center gap-1">
                        <label class="">
                          <input type="radio" name="type" value="Powder" class="peer sr-only" checked />
                          <p class="peer-checked:bg-black peer-checked:text-white rounded-lg border border-black px-6 py-2 font-bold">Black</p>
                        </label>
                        <label class="">
                          <input type="radio" name="type" value="Whole Bean" class="peer sr-only" />
                          <p class="peer-checked:bg-black peer-checked:text-white rounded-lg border border-black px-6 py-2 font-bold">Green</p>
                        </label>
                        <label class="">
                          <input type="radio" name="type" value="Groud" class="peer sr-only" />
                          <p class="peer-checked:bg-black peer-checked:text-white rounded-lg border border-black px-6 py-2 font-bold">Blue</p>
                        </label>
                      </div> --}}

                      {{-- <h2 class="mt-8 text-base text-gray-900">Description</h2>
                      <p class="mt-4 text-sm text-gray-500">Selamat datang di koleksi fashion kami! Kami dengan bangga mempersembahkan berbagai pilihan baju trendi yang siap memenuhi kebutuhan gaya Anda. Dari gaya kasual hingga pakaian resmi, kami memiliki berbagai pilihan yang cocok untuk setiap kesempatan.</p> --}}
                      
                      {{-- <div class="mb-4">
                        <h2 class="mt-8 text-base text-gray-900">Size</h2>
                        <div class="flex flex-col mt-3 space-y-2">
                            <label for="size-small" class="flex items-center">
                                <input type="radio" id="size-small" name="size" value="small" class="mr-2">
                                <span class="text-sm">Small</span><span class="text-sm ml-2 font-bold">(S)</span>
                            </label>
                            <label for="size-medium" class="flex items-center">
                                <input type="radio" id="size-medium" name="size" value="medium" class="mr-2">
                                <span class="text-sm">Medium</span><span class="text-sm ml-2 font-bold">(M)</span>
                            </label>
                            <label for="size-large" class="flex items-center">
                                <input type="radio" id="size-large" name="size" value="large" class="mr-2">
                                <span class="text-sm">Large</span><span class="text-sm ml-2 font-bold">(L)</span>
                            </label>
                            <label for="size-extra" class="flex items-center">
                                <input type="radio" id="size-extra" name="size" value="extra" class="mr-2">
                                <span class="text-sm">Xtra-Large</span><span class="text-sm ml-2 font-bold">(XL)</span>
                            </label>
                        </div>
                      </div> --}}

                      <div class="mt-8 flex items-center">
                        <h2 class="mr-3 text-base text-gray-900">Stok: {{$item->stok_produk}}</h2>
                      </div>
                      <div class="mt-8 flex items-center">
                        <h2 class="mr-3 text-base text-gray-900">Category:</h2>
                        <button type="button" class="text-white bg-[#000000] hover:bg-[#1F2937]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-3 py-1 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2">
                           <a href="#">{{$item->kategori->nama_kategori}}</a>
                        </button>
                      </div>

                      <div class="mt-8 flex flex-col items-center justify-between space-y-4 border-t border-b py-4 sm:flex-row sm:space-y-0">
                        <div class="flex items-end">
                          <h1 class="text-3xl font-bold">Rp.{{$item->harga_produk}}</h1><p>/pcs</p>
                        </div>
                        {{-- CART --}}
                       <form action="{{route('add_to_cart', $item->id_produk)}}" method="POST">
                        <button type="submit" class="inline-flex items-center justify-center rounded-md border-2 border-transparent bg-gray-900 bg-none px-8 py-3 text-center text-base font-bold text-white transition-all duration-200 ease-in-out focus:shadow hover:bg-gray-800">
                          <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 mr-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                          </svg>
                          Add to cart
                        </button>
                       </form>
                      </div>

                      <ul class="mt-8 space-y-2">
                        <li class="flex items-center text-left text-sm font-medium text-gray-600">
                          <svg class="mr-2 block h-5 w-5 align-middle text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" class=""></path>
                          </svg>
                          Free shipping worldwide
                        </li>
                        <li class="flex items-center text-left text-sm font-medium text-gray-600">
                          <svg class="mr-2 block h-5 w-5 align-middle text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" class=""></path>
                          </svg>
                          Cancel Anytime
                        </li>
                      </ul>
                    </div>
                  <!--End Deskripsi Baju-->
                  <!--Start review-->
                    <div id="app" class="lg:col-span-5 ">
                      <div class="border-b border-gray-300">
                        <nav class="flex gap-9">
                          {{-- <a href="#" title="" class="border-b-2 border-gray-900 py-4 text-sm font-medium text-gray-900 hover:border-gray-400 hover:text-gray-800"> Description </a> --}}
                          <a href="#" title="" :class="{ 'font-bold border-gray-900': showDescription, 'text-xl': showDescription,  'text-gray-900': showDescription, 'hover:border-gray-400': showDescription, 'hover:text-gray-800': showDescription, 'text-gray-500': !showDescription }" @click="showDescription = true; showReviews = false;">Description
                          </a><span class="mr-3 ml-3">|</span>
                          <a href="#" title="" :class="{ 'font-bold border-gray-900': showReviews, 'text-xl': showReviews, 'text-gray-900': showReviews, 'hover:border-gray-400': showReviews, 'hover:text-gray-800': showReviews, 'text-gray-500': !showReviews }" @click="showDescription = false; showReviews = true;">Reviews
                         {{-- <span class="ml-2 block rounded-full bg-gray-500 px-2 py-px text-xs font-bold text-gray-100">1,209</span> --}}</a>
                        </nav>
                      </div>
                      <div class="flex items-stretch">
                        <div v-if="showDescription" class="w-full mt-3 mr-3">
                          <div class="max-w-s mx-auto bg-white p-8 rounded-lg shadow-lg">
                            <h1 class="text-2xl font-bold mb-4 text-center text-black-600">Product Description</h1>
                            <p>
                              {{$item->desk_produk}}
                            </p>
                          </div>
                        </div>
                      </div>
                      <div v-if="showReviews" class="flex justify-center">
                        <div class="w-full lg:w-1/2 mt-3 lg:mt-0 mr-3">
                          <!-- Submit Review Section -->
                          <div class="bg-white p-8 rounded-lg shadow-lg">
                            <h1 class="text-2xl font-bold mb-4 text-center text-black-600">Rate This Product!</h1>
                            <div class="mb-4">
                              <label for="username" class="block text-sm font-medium text-gray-600">Username:</label>
                              <input type="text" id="username" v-model="username" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                            </div>
                            <div class="mb-4">
                              <label for="review" class="block text-sm font-medium text-gray-600">Review:</label>
                              <textarea id="review" v-model="review" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" rows="4"></textarea>
                            </div>
                            <div class="mb-4">
                              <label for="rating" class="block text-sm font-medium text-gray-600">Rating:</label>
                              <div class="flex items-center">
                                <span v-for="star in 5" :key="star" @click="setRating(star)" :class="{ 'text-yellow-500 cursor-pointer': rating >= star, 'cursor-pointer': rating < star }" style="font-size: 24px;">&#9733;</span>
                              </div>
                            </div>
                            <button @click="addReview" class="bg-black text-white font-semibold px-4 py-2 rounded-md hover:bg-gray-600">Submit</button>
                          </div>
                        </div>
                        <!-- Display Reviews Section -->
                        <div class="w-full lg:w-1/2 mt-3 lg:mt-0 bg-white shadow-md rounded-lg p-6" style="max-height: 460px; overflow-y: auto;">
                          <h2 class="text-2xl text-center underline mr-3 pt-2 font-bold mb-3 text-black-600">Reviews</h2>
                          <ul>
                            <li v-for="(item, index) in reviews" :key="index" class="mb-4 border-b pb-4">
                              <strong class="text-black-600">@{{ item.username }}</strong>
                              <div class="flex items-center mt-2">
                                <div class="text-yellow-500" v-html="printRating(item.rating)"></div>
                              </div>
                              <p class="text-gray-700" style="word-wrap: break-word;">@{{ item.review }}</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  <!--End review-->
                </div>
              </div>
            </div>
          </main>
        </div>
      </div>
    </div>
  </div>

<script>
  new Vue({
    el: '#app',
    data: {
      username: '',
      review: '',
      rating: 0,
      reviews: [],
      showDescription: true,
      showReviews: false
    },
    methods: {
      addReview: function() {
        if (this.username.trim() !== '' && this.review.trim() !== '' && this.rating !== 0) {
          this.reviews.push({ username: this.username, review: this.review, rating: this.rating });
          this.username = '';
          this.review = '';
          this.resetRating();
        } else {
          alert('Harap isi semua kolom dan pilih rating sebelum menambahkan review.');
        }
      },

      setRating: function(rating) {
        if (this.rating === rating) {
          this.resetRating();
        } else {
          this.rating = rating;
        }
      },

      printRating: function(rating) {
        let stars = '';
        for (let i = 1; i <= 5; i++) {
          if (i <= rating) {
            stars += '<span class="text-yellow-500">&#9733</span>'; // Menggunakan warna kuning untuk bintang terisi
          } else {
            stars += '<span class="text-gray-300">&#9733</span>'; // Menggunakan warna abu-abu untuk bintang kosong
          }
        }
        return stars;
      },

      resetRating: function() {
        this.rating = 0;
      },
      
      toggleDescription: function() {
        this.showDescription = true;
        this.showReviews = false;
      },

      toggleReviews: function() {
        this.showDescription = false;
        this.showReviews = true;
      }
    }
  });
</script>
<script>
  new Vue({
    el: '#imageSlider',
    data: {
      images: [
        'https://th.bing.com/th/id/OIG.4r.KGGZlo.U7KzWUy1h3?w=1024&h=1024&rs=1&pid=ImgDetMain',
        'https://th.bing.com/th/id/OIG.5t.MMWNcjNkdOh2mYM0D?pid=ImgGn',
        'https://th.bing.com/th/id/OIG..4BuQQWNzauKuZlbMkdO?pid=ImgGn',
      ],
      currentIndex: 0,
      intervalId: null,
      autoSlideDelay: 3000, // Adjust the delay in milliseconds (3 seconds in this example)
    },
    computed: {
      currentImage() {
        return this.images[this.currentIndex];
      },
    },
    methods: {
      prevImage() {
        this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
      },
      nextImage() {
        this.currentIndex = (this.currentIndex + 1) % this.images.length;
      },
      startAutoSlide() {
        this.intervalId = setInterval(this.nextImage, this.autoSlideDelay);
      },
      stopAutoSlide() {
        clearInterval(this.intervalId);
      },
    },
    mounted() {
      this.startAutoSlide(); // Start auto slide when the component is mounted
    },
    beforeDestroy() {
      this.stopAutoSlide(); // Stop auto slide before the component is destroyed
    },
  });
</script>
</x-home-layout>    
                 