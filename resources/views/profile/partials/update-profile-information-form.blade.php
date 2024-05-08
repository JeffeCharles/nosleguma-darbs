<section>
    <br>
    <br>
    <header>
        <h2 class="profileH2">
            Atjaunināt Sava Konta Datus
        </h2>

        <p class="profileP">
            Atjaunot savu konta informāciju kā jūsu vārdu un epastu
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" class="profileLable"/>
            <br>
            <x-text-input id="name" name="name" type="text" class="profileText" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <br>

        <div>
            <x-input-label for="email" :value="__('Email')" class="profileLable" />
            <br>
            <x-text-input id="email" name="email" type="email" class="profileText" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <br>

        <div class="flex items-center gap-4">
            <x-primary-button class="profileBtn">Atjaunot</x-primary-button>

            @if (session('status') === 'Profils Atjaunots')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
