<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Apply Today') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200" hidden>
                    <div hidden>
                        <x-jet-application-logo class="block h-12 w-auto" />
                    </div>

                    <div class="mt-8 text-2xl" hidden>
                        Welcome to CPU Business and Information Technology College!
                    </div>
                </div>
                <div class="bg-gray-200 bg-opacity-25">
                    @livewire('application-form')
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
