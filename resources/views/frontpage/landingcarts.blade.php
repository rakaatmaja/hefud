<x-dropdown>
    :align="'left'"  // Align dapat diubah sesuai kebutuhan
    :width="'60'"    // Width dapat diubah sesuai kebutuhan
>
    <x-slot name="trigger">
        <button>Click Me</button>
    </x-slot>
    
    <x-slot name="content">
        <p>Isi konten yang dinamis di sini</p>
    </x-slot>
</x-dropdown>
