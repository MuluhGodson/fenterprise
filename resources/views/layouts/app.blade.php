<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.parts.header')
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-yellow-400">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            <header class="bg-yellow-400 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <div>
                <div class="grid grid-cols-6 divide-x">
                    <div class="w-full max-h-screen rounded">
                        <!-- Side bar -->
                        @include('layouts.parts.sidebar')
                    </div>
                    <div class="w-full mt-1 pt-1 bg-yellow-100 md:mt-1 md:pb-1 col-span-5">
                    @include('sweetalert::alert')

                        <!-- Page Content -->
                        <main>
                            {{ $slot }}
                        </main>
                    </div>
                </div>
               
            </div>
        </div>

        @include('layouts.parts.footer')
        @stack('modals')

        @livewireScripts
    </body>
</html>
