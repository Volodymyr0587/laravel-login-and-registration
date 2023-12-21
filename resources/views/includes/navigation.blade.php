<!-- Navbar -->
<nav class="relative container mx-auto p-6">
    <!-- Flex container -->
    <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="pt-2">
            <a href="{{ route('home') }}">
                <img src="img/logo.svg" alt="">
            </a>
        </div>
        <!-- Menu Items -->
        <div class="hidden space-x-6 md:flex">
            <a href="#" class="hover:text-darkGrayishBlue">Pricing</a>
            <a href="#" class="hover:text-darkGrayishBlue">Product</a>
            <a href="#" class="hover:text-darkGrayishBlue">About Us</a>
            <a href="#" class="hover:text-darkGrayishBlue">Careers</a>
            <a href="#" class="hover:text-darkGrayishBlue">Community</a>
        </div>
        <!-- Button -->
        @auth
            <div class="hidden p-3 px-4  hover:text-darkGrayishBlue md:block">
                <x-dropdown-user-menu>
                    {{ auth()->user()->name }}
                </x-dropdown-user-menu>
            </div>
        @else
            <div class="hidden p-3 px-4 pt-2 text-white bg-brightRed rounded-full baseline md:block">
                <a href="{{ route('user.register') }}">Get Started</a>
            </div>
        @endauth


        <!-- Hamburger Icon -->
        <button id="menu-btn" class="block hamburger md:hidden focus:outline-none">
            <span class="hamburger-top"></span>
            <span class="hamburger-middle"></span>
            <span class="hamburger-bottom"></span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden">
        <div id="menu"
            class="absolute flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
            <a href="#">Pricing</a>
            <a href="#">Product</a>
            <a href="#">About Us</a>
            <a href="#">Careers</a>
            <a href="#">Community</a>
        </div>
    </div>
</nav>
