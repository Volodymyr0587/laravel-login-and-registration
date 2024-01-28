<!-- component -->
<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
            <h1 class="mb-8 text-3xl text-center">Settings</h1>

            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4"
                name="name" value="{{ $user->name }}" placeholder="Name" />

                @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                <input type="email" class="block border border-grey-light w-full p-3 rounded mb-4" name="email"
                value="{{ $user->email }}" placeholder="Email" />

                @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
                    placeholder="Password" />

                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="password_confirmation" placeholder="Confirm Password" />

                <div class="flex flex-col items-center py-4">
                    <button type="submit"
                        class="p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight md:block">Update
                        Account</button>
                </div>
            </form>

            <div class="text-center text-sm text-grey-dark mt-4">
                By signing up, you agree to the
                <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                    Terms of Service
                </a> and
                <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                    Privacy Policy
                </a>
            </div>
        </div>
    </div>
</div>
