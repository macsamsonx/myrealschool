<x-guest-layout>
    <div
        style="height:100%; width: 100%; background: #F8F7F5; padding-top: 100px; padding-bottom: 160px; display: flex; align-items: center; justify-content: center; flex-direction: column;">
        <div style=" width: 35%; background: #ffffff; padding: 40px; padding-bottom: 60px; padding-top: 20px;">
            <div style="text-align: center; margin-top: 50px;">
                <span style="color: black; font-size: 36px; font-family: DM Sans; font-weight: 700; line-height: 27px; word-wrap: break-word">Create My</span>
                <span style="color: #17594A; font-size: 36px; font-family: DM Sans; font-weight: 700; line-height: 27px; word-wrap: break-word">Real</span>
                <span style="color: #8EAC50; font-size: 36px; font-family: DM Sans; font-weight: 700; line-height: 27px; word-wrap: break-word">School</span>
                <span style="color: black; font-size: 36px; font-family: DM Sans; font-weight: 700; line-height: 27px; word-wrap: break-word">account</span>
                <div style="width: 100%; text-align: center; color: #535C5E; font-size: 18px; font-family: Open Sans; font-weight: 400; line-height: 27px; word-wrap: break-word; margin-top: 15px; margin-bottom: 30px;">Lorem ipsum dolor sit amet, consetetur sadipscing</div>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Name -->
                <div style="width: 100%; display: flex; flex-direction: row;">
                    <div style="width: 50%; padding: 10px">
                        <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" style="border: none; outline: none; border-bottom: 1px solid #c2c2c2; appearance: none;"
                            :value="old('firstName')" required autofocus autocomplete="firstName" placeholder="First Name" />
                        <x-input-error :messages="$errors->get('firstName')" class="mt-2" />    
                    </div>
                    <div style="width: 50%; padding: 10px">
                        <x-text-input id="lastName" style="border: none; outline: none; border-bottom: 1px solid #c2c2c2; appearance: none;" class="block mt-1 w-full" type="text" name="lastName" 
                            :value="old('lastName')" required autocomplete="lastName" placeholder="Last Name" />
                        <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
                    </div>
                </div>

                <div style="width: 100%; display: flex; flex-direction: row;">
                    <div style="width: 50%; padding: 10px">
                        <x-text-input id="state" class="block mt-1 w-full" type="text" name="state" style="border: none; outline: none; border-bottom: 1px solid #c2c2c2; appearance: none;"
                            :value="old('state')" required autofocus autocomplete="state" placeholder="State"/>
                        <x-input-error :messages="$errors->get('state')" class="mt-2" />
                    </div>
                    <div style="width: 50%; padding: 10px">
                        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" style="border: none; outline: none; border-bottom: 1px solid #c2c2c2; appearance: none;"
                            :value="old('phone')" required autocomplete="phone" placeholder="Phone"/>
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>
                </div>
                <!-- Email Address -->
                <div style="padding: 10px">
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" style="border: none; outline: none; border-bottom: 1px solid #c2c2c2; appearance: none;"
                        :value="old('email')" required autocomplete="username" placeholder="Email"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div style="width: 100%; display: flex; flex-direction: row;">
                    <div style="width: 50%; padding: 10px">
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required style="border: none; outline: none; border-bottom: 1px solid #c2c2c2; appearance: none;"
                            autocomplete="new-password" placeholder="Password"/>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div style="width: 50%; padding: 10px">
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" style="border: none; outline: none; border-bottom: 1px solid #c2c2c2; appearance: none;"
                            name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"/>
                                                
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>
                <div style="width: 50%; padding: 10px">
                    <div class="block mt-4" style="display: flex; align-items: center;">
                        <input id="accept_terms" type="checkbox" onchange="acceptTermsPolicy(this)" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span style="color: #959595; font-size: 16px; font-family: Open Sans; font-weight: 400; line-height: 27px; word-wrap: break-word">Accept</span>&nbsp; 
                        <a href="#terms"><span style="color: #305a50; font-size: 16px; font-family: Open Sans; font-weight: 400; text-decoration: underline; line-height: 27px; word-wrap: break-word">Terms of Use</span>&nbsp;</a>
                        <span style="color: #959595; font-size: 16px; font-family: Open Sans; font-weight: 400; line-height: 27px; word-wrap: break-word"> and </span>&nbsp;
                        <a href="#policy"><span style="color: #305a50; font-size: 16px; font-family: Open Sans; font-weight: 400; text-decoration: underline; line-height: 27px; word-wrap: break-word">Privacy Policy</span></a>
                    </div>
                </div>

                <div style="display: flex; align-items: center; justify-content: center; padding: 10px">
                    <x-primary-button class="ml-4" id="sign_up" style="background: #476c64; border-radius: 32px; border: 0.50px #17594B solid; padding: 15px 25%; cursor: not-allowed;" disabled>
                        {{ __('Sign Up') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
        <div>
            <div style="padding: 20px;">
                <span style="color: black; font-size: 18px; font-family: DM Sans; font-weight: 400; line-height: 27px; word-wrap: break-word">Already have an account?</span>
                <span style="color: #17594A; font-size: 18px; font-family: DM Sans; font-weight: 700; line-height: 27px; word-wrap: break-word">
                    <a style="text-decoration: none;" href="{{ route('login') }}">{{ __('Sign In') }}</a>
                </span>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function acceptTermsPolicy(event){
            console.log(event);
            var checkBox = document.getElementById("accept_terms");
            var signUp = document.getElementById('sign_up');
            if (checkBox.checked == true){
                signUp.removeAttribute('disabled')
                signUp.setAttribute('style', 'background: #17594B; border-radius: 32px; border: 0.50px #17594B solid; padding: 15px 25%')
            } else {
                signUp.setAttribute('disabled', '')
                signUp.setAttribute('style', 'background: #476c64; border-radius: 32px; border: 0.50px #17594B solid; padding: 15px 25%; cursor: not-allowed;')
            }
        }
    </script>
</x-guest-layout>
