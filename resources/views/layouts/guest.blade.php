<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <a href="{{ route('home') }}">
                                    <x-jet-application-mark class="block h-9 w-auto" />
                                </a>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                                    {{ __('Home') }}
                                </x-jet-nav-link>
                                <x-jet-nav-link href="{{ route('apply') }}" :active="request()->routeIs('apply')">
                                    {{ __('Apply') }}
                                </x-jet-nav-link>
                            </div>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <div class="ml-3 relative">

                                <x-jet-dropdown align="right" width="60">
                                    <x-slot name="trigger">
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                                {{-- {{ Auth::user()->currentTeam->name }} --}}Abdisa

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </x-slot>

                                    <x-slot name="content">
                                        <div class="w-60">
                                            <!-- Team Management -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                {{ __('Manage Team') }}
                                            </div>

                                            <!-- Team Settings -->
                                            <x-jet-dropdown-link href="{{-- {{ route('teams.show', Auth::user()->currentTeam->id) }} --}}">
                                                {{ __('Team Settings') }}
                                            </x-jet-dropdown-link>

                                            {{-- @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                                    {{ __('Create New Team') }}
                                                </x-jet-dropdown-link>
                                            @endcan --}}

                                            <div class="border-t border-gray-100"></div>

                                            <!-- Team Switcher -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                {{ __('Switch Teams') }}
                                            </div>

                                            {{-- @foreach (Auth::user()->allTeams() as $team)
                                                <x-jet-switchable-team :team="$team" />
                                            @endforeach --}}
                                        </div>
                                    </x-slot>
                                </x-jet-dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="open = ! open"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <x-jet-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-jet-responsive-nav-link>
                        <x-jet-responsive-nav-link href="{{ route('apply') }}" :active="request()->routeIs('apply')">
                            {{ __('Apply') }}
                        </x-jet-responsive-nav-link>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="flex items-center px-4">
                            <div>
                                <div class="font-medium text-base text-gray-800"> name </div>
                                <div class="font-medium text-sm text-gray-500"> email </div>
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <!-- Account Management -->
                            <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                {{ __('Profile') }}
                            </x-jet-responsive-nav-link>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>


            <footer class="bg-white dark:bg-gray-800">
                <div class="container px-6 py-8 mx-auto">
                    <div class="items-center lg:flex">
                        <div class="lg:w-1/2">
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
                                Who we are
                            </h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 lg:max-w-md">
                                Hi I am jane , software engineer
                                <a class="font-bold text-blue-600 dark:text-blue-400" href="#">@BakaTeam</a>
                                , Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum
                                in sed non alias, fugiat, commodi nemo ut fugit corrupti dolorem
                                sequi ex veniam consequuntur id, maiores beatae ipsa omnis
                                aliquam?
                            </p>

                            <div class="flex items-center mt-6 -mx-2">
                                <a class="mx-2" href="#" aria-label="Twitter">
                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M492 109.5c-17.4 7.7-36 12.9-55.6 15.3 20-12 35.4-31 42.6-53.6-18.7 11.1-39.4 19.2-61.5 23.5C399.8 75.8 374.6 64 346.8 64c-53.5 0-96.8 43.4-96.8 96.9 0 7.6.8 15 2.5 22.1-80.5-4-151.9-42.6-199.6-101.3-8.3 14.3-13.1 31-13.1 48.7 0 33.6 17.2 63.3 43.2 80.7-16-.4-31-4.8-44-12.1v1.2c0 47 33.4 86.1 77.7 95-8.1 2.2-16.7 3.4-25.5 3.4-6.2 0-12.3-.6-18.2-1.8 12.3 38.5 48.1 66.5 90.5 67.3-33.1 26-74.9 41.5-120.3 41.5-7.8 0-15.5-.5-23.1-1.4C62.8 432 113.7 448 168.3 448 346.6 448 444 300.3 444 172.2c0-4.2-.1-8.4-.3-12.5C462.6 146 479 129 492 109.5z" />
                                    </svg>
                                </a>

                                <a class="mx-2" href="#" aria-label="Facebook">
                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M426.8 64H85.2C73.5 64 64 73.5 64 85.2v341.6c0 11.7 9.5 21.2 21.2 21.2H256V296h-45.9v-56H256v-41.4c0-49.6 34.4-76.6 78.7-76.6 21.2 0 44 1.6 49.3 2.3v51.8h-35.3c-24.1 0-28.7 11.4-28.7 28.2V240h57.4l-7.5 56H320v152h106.8c11.7 0 21.2-9.5 21.2-21.2V85.2c0-11.7-9.5-21.2-21.2-21.2z" />
                                    </svg>
                                </a>

                                <a class="mx-2" href="#" aria-label="Linkden">
                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M417.2 64H96.8C79.3 64 64 76.6 64 93.9V415c0 17.4 15.3 32.9 32.8 32.9h320.3c17.6 0 30.8-15.6 30.8-32.9V93.9C448 76.6 434.7 64 417.2 64zM183 384h-55V213h55v171zm-25.6-197h-.4c-17.6 0-29-13.1-29-29.5 0-16.7 11.7-29.5 29.7-29.5s29 12.7 29.4 29.5c0 16.4-11.4 29.5-29.7 29.5zM384 384h-55v-93.5c0-22.4-8-37.7-27.9-37.7-15.2 0-24.2 10.3-28.2 20.3-1.5 3.6-1.9 8.5-1.9 13.5V384h-55V213h55v23.8c8-11.4 20.5-27.8 49.6-27.8 36.1 0 63.4 23.8 63.4 75.1V384z" />
                                    </svg>
                                </a>

                                <a class="mx-2" href="#" aria-label="Github">
                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9 1.4.3 2.6.4 3.8.4 8.3 0 11.5-6.1 11.5-11.4 0-5.5-.2-19.9-.3-39.1-8.4 1.9-15.9 2.7-22.6 2.7-43.1 0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8 11.2 19.6 26.2 25.1 39.6 25.1 10.5 0 20-3.4 25.6-6 2-14.8 7.8-24.9 14.2-30.7-49.7-5.8-102-25.5-102-113.5 0-25.1 8.7-45.6 23-61.6-2.3-5.8-10-29.2 2.2-60.8 0 0 1.6-.5 5-.5 8.1 0 26.4 3.1 56.6 24.1 17.9-5.1 37-7.6 56.1-7.7 19 .1 38.2 2.6 56.1 7.7 30.2-21 48.5-24.1 56.6-24.1 3.4 0 5 .5 5 .5 12.2 31.6 4.5 55 2.2 60.8 14.3 16.1 23 36.6 23 61.6 0 88.2-52.4 107.6-102.3 113.3 8 7.1 15.2 21.1 15.2 42.5 0 30.7-.3 55.5-.3 63 0 5.4 3.1 11.5 11.4 11.5 1.2 0 2.6-.1 4-.4C415.9 449.2 480 363.1 480 261.7 480 134.9 379.7 32 256 32z" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="mt-8 lg:mt-0 lg:w-1/2">
                            <div class="flex items-center justify-center lg:justify-end">
                                <div class="max-w-lg">

                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-10 border-gray-200 dark:border-gray-700" />

                    <div class="flex flex-col items-center sm:flex-row sm:justify-between">
                        <p class="text-sm text-gray-400">
                            © Copyright 2022. All Rights Reserved.
                        </p>

                        <div class="flex mt-3 -mx-2 sm:mt-0">
                            <a href="#" class="mx-2 text-sm text-gray-400 hover:text-gray-500 dark:hover:text-gray-300"
                                aria-label="Reddit">
                                Teams
                            </a>

                            <a href="#" class="mx-2 text-sm text-gray-400 hover:text-gray-500 dark:hover:text-gray-300"
                                aria-label="Reddit">
                                Privacy
                            </a>

                            <a href="#" class="mx-2 text-sm text-gray-400 hover:text-gray-500 dark:hover:text-gray-300"
                                aria-label="Reddit">
                                Cookies
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        @stack('modals')

        @livewireScripts
    </div>
</body>

</html>
