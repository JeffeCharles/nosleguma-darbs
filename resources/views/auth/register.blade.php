<x-guest-layout>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <h1 class="title">
        Reģistrācija
    </h1>

    <h1></h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="loginContainer">
            <x-input-label for="name" :value="__('Name')" class="loginLable" />
            <br>
            <x-text-input id="name" class="loginText" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <br>

        <!-- Email Address -->
            <x-input-label for="email" :value="__('Email')" class="loginLable"/>
            <br>
            <x-text-input id="email" class="loginText" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <br>

        <!-- Number -->
            <x-input-label for="number" :value="__('Number')" class="loginLable"/>
            <br>
            <x-text-input id="number" class="loginText" type="text" name="number" :value="old('number')" required autofocus autocomplete="number" />
            <x-input-error :messages="$errors->get('number')" class="mt-2" />
            <br>

        <!-- Password -->
            <x-input-label for="password" :value="__('Password')" class="loginLable" />
            <br>
            <x-text-input id="password" class="loginText"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <br>

        <!-- Confirm Password -->
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="loginLable"/>
            <br>
            <x-text-input id="password_confirmation" class="loginText"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            
        </div>

        <br>

        <div class="btnContainer">

            <a>
                <button class="loginButton">
                    Reģistrēties
                </button>
            </a>
        </form>
    </div>

            <br>
            <br>
            
        <div class="btnContainer">
            <a href="{{ route('login') }}">
                <button class="loginBtn">
                    Esi Reģistrējies?
                </button>
            </a>
        </div>

</x-guest-layout>
