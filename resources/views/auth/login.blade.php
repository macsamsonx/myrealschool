<x-guest-layout>
    <!-- Session Status -->
    <div style="height:100%; width: 100%; background: #F8F7F5; padding-top: 100px; padding-bottom: 160px; display: flex; align-items: center; justify-content: center; flex-direction: column;">
        <div style=" width: 25%; background: #ffffff; padding: 40px; padding-bottom: 60px; padding-top: 20px;">
            <div style="text-align: center; margin-top: 50px;">
                <span style="color: black; font-size: 36px; font-family: DM Sans; font-weight: 700; line-height: 27px; word-wrap: break-word">Sign in to My</span>
                <span style="color: #17594A; font-size: 36px; font-family: DM Sans; font-weight: 700; line-height: 27px; word-wrap: break-word">Real</span>
                <span style="color: #8EAC50; font-size: 36px; font-family: DM Sans; font-weight: 700; line-height: 27px; word-wrap: break-word">School</span>
                <div style="width: 100%; text-align: center; color: #535C5E; font-size: 18px; font-family: Open Sans; font-weight: 400; line-height: 27px; word-wrap: break-word; margin-top: 15px; margin-bottom: 30px;">Lorem ipsum dolor sit amet, consetetur sadipscing</div>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf
        
                <!-- Email Address -->
                <div style="display: flex; flex-direction: row;">
                    <img src="{{ asset('asset/ei_envelope.svg')}}" alt=".." style="border-bottom: 1px solid #c2c2c2; width: 20px ">
                    <x-text-input id="email" class="block mt-1 w-full email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" 
                        style="border: none; outline: none; border-bottom: 1px solid #ccc;" placeholder="Email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <!-- Password -->
                <div class="mt-4" style="display: flex; flex-direction: row;">
                    <img src="{{ asset('asset/tabler_lock.svg')}}" alt=".." style="border-bottom: 1px solid #c2c2c2; width: 20px">
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" 
                        style="border: none; outline: none; border-bottom: 1px solid #ccc; appearance: none;" placeholder="Password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        
                <!-- Remember Me -->
                <div class="block mt-4" style="display: flex; align-items: center;">
                    <label for="remember_me">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 display" style="margin-left:auto; color: #17594A; text-decoration: none;" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                </div>
        
                <div class="flex items-center mt-4" style="display: flex; align-items: center; justify-content: center;">
                    <x-primary-button class="ml-3" style="background: #17594B; border-radius: 32px; border: 0.50px #17594B solid; padding: 15px 45px">
                        {{ __('Sign In') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
        <div>
            <div style="padding: 20px;">
                <span style="color: black; font-size: 18px; font-family: DM Sans; font-weight: 400; line-height: 27px; word-wrap: break-word">Don't have an account? </span>
                <span style="color: #17594A; font-size: 18px; font-family: DM Sans; font-weight: 700; line-height: 27px; word-wrap: break-word">
                    <a style="text-decoration: none;" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                </span>
            </div>
        </div>
    </div>

</x-guest-layout>
