<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Profils') }}
        </h2>
    </x-slot>

    <div>
        <div class="profileContainer">
            <div>
                <div>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
            <br>

            <hr class="profileHR">

            <div>
                <div>
                    @include('profile.partials.update-password-form')
                </div>
            </div>
            <br>

            <hr class="profileHR">

            <div>
                <div>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
            <br>

        </div>
    </div>
</x-app-layout>
