<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <br>
    <br>
    <br>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800 dark:text-gray-200">
                            <h1 class="introduction">
                                Sveicināti {{ Auth::user()->name }}!
                            </h1>
                </div>
                <br>
                <br>
            </div>

            <div class="container">
                <a href="sludinajumi">
                    <button class="btn">
                        Visi Sludinajumi
                    </button>
                </a>
                <br>
                <br>
                <a href="mani-sludinajumi">
                    <button class="btn">
                        Mani Sludinajumi
                    </button>
                </a>
                <br>
                <br>
                <a href="sludinajumi/izveidot">
                    <button class="btn">
                        Izveidot Sludinajumu
                    </button>
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
