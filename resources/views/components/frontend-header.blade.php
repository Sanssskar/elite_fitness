<header class="sticky top-0 z-50 bg-white/95 backdrop-blur border-b border-black/5">
    <div class="container flex items-center justify-between py-4">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0">
           <img class="w-50" src="{{ asset('images/logo.png') }}" alt="">
        </a>

        {{-- Desktop nav --}}
        <nav class="hidden lg:flex items-center gap-9">
            @php
                $navLinks = [
                    'home' => 'Home',
                    'about' => 'About',
                    'services' => 'Services',
                    'instructor' => 'Instructor',
                    'gallery' => 'Gallery',
                    'contact' => 'Contact',
                ];
            @endphp
            @foreach ($navLinks as $routeName => $label)
                <a href="{{ route($routeName) }}"
                   class="relative text-sm font-medium tracking-wide transition {{ request()->routeIs($routeName) ? 'text-brand-wine' : 'text-brand-ink/80 hover:text-brand-wine' }}">
                    {{ $label }}
                    @if (request()->routeIs($routeName))
                        <span class="absolute -bottom-2 left-0 h-[2px] w-full bg-brand-wine"></span>
                    @endif
                </a>
            @endforeach
        </nav>

        <div class="hidden lg:block">
            <a href="{{ route('contact') }}" class="btn-primary !py-2.5 !px-6 !text-xs">Book a Class</a>
        </div>

        {{-- Mobile menu button --}}
        <button type="button" class="lg:hidden inline-flex items-center justify-center rounded-md p-2 text-brand-ink" aria-label="Toggle menu" onclick="document.getElementById('mobileNav').classList.toggle('hidden')">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    {{-- Mobile nav --}}
    <div id="mobileNav" class="hidden lg:hidden border-t border-black/5 bg-white">
        <div class="container flex flex-col gap-1 py-4">
            @foreach ($navLinks as $routeName => $label)
                <a href="{{ route($routeName) }}"
                   class="rounded-lg px-3 py-2.5 text-sm font-medium {{ request()->routeIs($routeName) ? 'bg-brand-teal-light text-brand-wine' : 'text-brand-ink/80' }}">
                    {{ $label }}
                </a>
            @endforeach
            <a href="{{ route('contact') }}" class="btn-primary mt-2 w-full">Book a Class</a>
        </div>
    </div>
</header>
