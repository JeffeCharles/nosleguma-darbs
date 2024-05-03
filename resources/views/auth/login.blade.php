<x-guest-layout>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="title">
        Ierakstīšanas
    </h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="loginContainer">
            <!-- Email Address -->
            <x-input-label for="email" :value="__('Email')" class="loginLable" />
            <br>
            <x-text-input id="email" class="loginText" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <br>
            <br>


        <!-- Password -->
            <x-input-label for="password" :value="__('Password')" class="loginLable" />
            <br>

            <x-text-input id="password" class="loginText"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <br>
            <br>


        <!-- Remember Me -->
            <label for="remember_me">
                <input id="remember_me" type="checkbox" name="remember">
                <span >Atceries Mani</span>
            </label>
        </div>
        
        <br>


        <div class="btnContainer">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            
            <br>
            <br>

            <a>
                <button class="loginButton">
                    Ierakstīies
                </button>
            </a>
        </form>
    </div>


            <br>
            <br>
    <div class="btnContainer">
            <a href="{{ route('register') }}">
                <button class="loginBtn">
                    Neesi Reģistrēties?
                </button>
            </a>

            <a href="{{ route('sludinajums.index') }}">
                <button class="loginBtn">
                    Nevēlies Reģistrēties?
                </button>
            </a>
    </div>
</x-guest-layout>
