<!-- component -->
<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
            <h1 class="mb-8 text-3xl text-center">Login</h1>

            <form action="{{ route('user.authenticate') }}" method="POST">
                @csrf

                @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                <input type="email" class="block border border-grey-light w-full p-3 rounded mb-4" name="email"
                value="{{ old('email') }}" placeholder="Email" />

                @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
                    placeholder="Password" />

                <div class="flex flex-col items-center py-4">
                    <button type="submit"
                        class="p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight md:block">Login
                    </button>
                </div>
            </form>



            <div class="flex flex-col items-center text-grey-dark mt-6">
                Don't have an account?
                <a class="no-underline border-b border-blue text-blue" href="{{ route('user.register') }}">
                    Register
                </a>
            </div>
        </div>
    </div>
</div>
