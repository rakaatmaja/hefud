
<x-guest-layout>
    <form method="POST" action="{{ route('api.register') }}" id="register-form">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

    

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        document.getElementById('register-form').addEventListener('submit', function (e) {
            e.preventDefault();
    
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
          
    
            axios.post('/api/register', {
                name: name,
                email: email,
                password: password,

            })
            .then(function (response) {
                console.log(response.data);
    
                Swal.fire({
                    icon: 'success',
                    title: 'Register Successful!' ,
                    text: 'You will be redirected to the homepage.',
                }).then(() => {
                  
                    if (response.data.success) {
                        window.location.href = '/';
                    }
                });
            }) .catch(function (error) {
            console.error(error);

            if (error.response && error.response.data && error.response.data.error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Register Failed',
                    text: 'Invalid email or password. Please try again.',
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Register Failed',
                    text: 'An unexpected error occurred. Please try again.',
                });
            }
        });
    
        });
    </script>

     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</x-guest-layout>
