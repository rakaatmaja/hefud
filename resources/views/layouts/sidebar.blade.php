<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="/" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{route('admin.index')}}" class="active-nav-link flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <button type="button" class="w-full flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example2">
            <i class="fas fa-table mr-3"></i>
              Menu Tes
            <i class="fas fa-caret-down ml-16"></i>
            </button>
            <ul id="dropdown-example2" class="hidden py-2 space-y-2">
                <li>
                    <a href="/tables5" class="flex items-center w-full p-2 text-white transition duration-75 pl-11 group hover:bg-gray-100 nav-item">menu 1</a>
                </li>
                <li>
                    <a href="#" class="flex items-center w-full p-2 text-white transition duration-75 pl-11 group hover:bg-gray-100 nav-item">menu 2</a>
                </li>
            </ul>
        <a href="/forms" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-align-left mr-3"></i>
            Forms
        </a>
        <a href="/tab" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Tabbed Content
        </a>
    </nav>
</aside>