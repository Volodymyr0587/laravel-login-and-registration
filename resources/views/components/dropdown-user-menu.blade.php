<!-- Dropdown -->
<div x-data="{ open: false }" class="relative">

    <button x-on:click="open = true" class="flex space-x-1">
        {{ $slot }}
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            data-slot="icon" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>
    </button>

    <!-- Dropdown Body -->

        <div x-show.transition="open" x-on:click.away="open = false"
            class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl">
            <a href="#"
                class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">Settings</a>
            <div class="py-2">
                <hr>
                <hr>
            </div>

            <form action="{{ route('user.logout') }}" method="POST"
                class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
        <!-- // Dropdown Body -->
</div>
