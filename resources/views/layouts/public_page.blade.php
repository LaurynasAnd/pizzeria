
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="qcQXuqNNBdT2DGKErP0nMdnOTfWR0u0aUUfM4UvJ">
    
    <title>Dodo pizza</title>
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap">
    
    <!-- Styles -->
    <link rel="stylesheet" href="http://localhost/pizzeria/public/css/app.css">
    
    <!-- Livewire Styles -->
    
    <style>
        [wire\:loading], [wire\:loading\.delay] {
            display: none;
        }
        
        [wire\:offline] {
            display: none;
        }
        
        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }
        
        input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {
            animation-duration: 50000s;
            animation-name: livewireautofill;
        }
        
        @keyframes livewireautofill { from {} }
        </style>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    <script src="{{asset('js/app.js')}}" defer></script>
</head>
<body class="font-sans antialiased">
    <div id="popup_element" class="absolute top-0 left-0 bottom-0 right-0 flex justify-center">
    <div class="min-h-screen bg-gray-100">
        <nav wire:id="AWD7T5SQbY4XKe1P5FWH" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;AWD7T5SQbY4XKe1P5FWH&quot;,&quot;name&quot;:&quot;navigation-dropdown&quot;,&quot;locale&quot;:&quot;en&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;refresh-navigation-dropdown&quot;]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;f02741d1&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;07604ebb03b8c3169be54059882bd387463c46716e4f1cdafcf4b37d51dcb881&quot;}}" x-data="{ open: false }" class="bg-white border-b border-gray-100">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="flex-shrink-0 flex items-center">
                            <a href="{{route('product.index')}}">
                                <svg id="inline-svg-7196-1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 391.25 70" width="255px" height="45.61px">
                                    @include('layouts.logo')
                                </svg>
                            </a>
                        </div>
                        <!-- Navigation Links -->
                        
                    </div>
                    
                    <!-- Settings Dropdown -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
                            <div @click="open = ! open">
                                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <div>joker</div>
                                    
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            
                            <div x-show="open"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute z-50 mt-2 w-48 rounded-md shadow-lg origin-top-right right-0"
                            style="display: none;"
                            @click="open = false">
                            <div class="rounded-md shadow-xs py-1 bg-white">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    Manage Account
                                </div>
                                
                                <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" 
                                href="http://localhost/garage/public/user/profile">Profile
                            </a>
                            <div class="border-t border-gray-100"></div>
                            
                            <!-- Team Management -->
                            
                            <!-- Authentication -->
                            <form method="POST" action="http://localhost/garage/public/logout">
                                        <input type="hidden" name="_token" value="qcQXuqNNBdT2DGKErP0nMdnOTfWR0u0aUUfM4UvJ">
                                        <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" 
                                        href="http://localhost/garage/public/logout" 
                                        onclick="event.preventDefault();
                                            this.closest('form').submit();">Logout
                                        </a>
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Responsive Navigation Menu drop-down-->
            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                
                
                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="flex items-center px-4">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=joker&amp;color=7F9CF5&amp;background=EBF4FF" alt="joker" />
                        </div>
                        
                        <div class="ml-3">
                            <div class="font-medium text-base text-gray-800">joker</div>
                            <div class="font-medium text-sm text-gray-500">joker@rofl.lol</div>
                        </div>
                    </div>
                    
                    <div class="mt-3 space-y-1">
                        <!-- Account Management -->
                        <a class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="http://localhost/garage/public/user/profile">
                            Profile
                        </a>
                        
                        
                        
                        <!-- Authentication -->
                        <form method="POST" action="http://localhost/garage/public/logout">
                            <input type="hidden" name="_token" value="qcQXuqNNBdT2DGKErP0nMdnOTfWR0u0aUUfM4UvJ">
                            <a class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="http://localhost/garage/public/logout" onclick="event.preventDefault();
                                this.closest('form').submit();">
                                Logout
                            </a>
                        </form>
                        
                        <!-- Team Management -->
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    @yield('title')
                </h2>
                @yield('create')
            </div>
        </header>
        
        <!-- Page Content -->
        <main>
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between">
                <div class="w-full ">
                    
                    <!-- {{-- messages --}} -->
                    @include('layouts.messages')
                    
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="py-6 px-3 bg-white border-b border-gray-200">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
    </div>
    
        
    </div>
    
    <!-- Livewire Scripts -->
    
    <script src="/livewire/livewire.js?id=113e213167e044b8bb85" data-turbolinks-eval="false"></script>
    {{-- <script data-turbolinks-eval="false">
        if (window.livewire) {
            console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')
        }
        
        window.livewire = new Livewire();
        window.Livewire = window.livewire;
        window.livewire_app_url = '';
        window.livewire_token = 'qcQXuqNNBdT2DGKErP0nMdnOTfWR0u0aUUfM4UvJ';
        
        /* Make Alpine wait until Livewire is finished rendering to do its thing. */
        window.deferLoadingAlpine = function (callback) {
            window.addEventListener('livewire:load', function () {
                callback();
            });
        };
        
        document.addEventListener("DOMContentLoaded", function () {
            window.livewire.start();
        });
    </script> --}}
</body>
</html>
