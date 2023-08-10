<header class="bg-white shadow" style="background-color: #F7FAFA">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-4 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="{{ route('home') }}" class="">
                <img class="h-20 w-auto" src="{{ asset('asset/logo.png') }}" alt="">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            @php
                $routes = ['home', 'pricing', 'why-us', 'carrer-hub', 'contact-us'];
            @endphp
            @foreach ($routes as $route)
                <div class="px-1 py-1">
                    <a href="{{ route($route) }}"
                        class="text-lg leading-6  {{ request()->routeIs($route) ? 'font-bold  text-teal-900' : ' text-black' }}">{{ ucwords(str_replace('-', ' ', $route)) }}</a>
                    @if (request()->routeIs($route))
                        <div class="w-auto h-1 bg-teal-900 mt-4"></div>
                    @endif

                </div>
            @endforeach
            {{-- Text Size : text-sm text-md text-lg  --}}
            <div
                class="w-32 px-5 py-1 rounded-3xl border border-teal-900 justify-center items-center inline-flex">
                <a href="{{ route('login') }}" class="text-teal-900 text-lg font-bold">LOGIN</a>
            </div>

        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->

</header>
