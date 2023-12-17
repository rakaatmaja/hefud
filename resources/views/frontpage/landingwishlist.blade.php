<x-home-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="flex items-baseline justify-between border-b border-gray-200 pt-2 pb-6">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900">Page Wishlist</h1>
                            <div class="flex items-center">
                            </div>
                        </div>
                        
                    </main>
                </div>
            </div>
        </div>
        {{-- modal form untuk cek availibility --}}
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalLg" tabindex="-1 aria-labelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
                <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    {{-- @include('frontpage.calendar') --}}
                </div>
            </div>
        </div>
    </div>
</x-home-layout>                     