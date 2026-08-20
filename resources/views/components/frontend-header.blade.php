@php
    // Only the homepage has a full-viewport hero the header can blend into.
    // Every other page keeps the normal solid header since their banner
    // isn't full-bleed under the fixed header.
    $isHomeHero = request()->routeIs('home');
@endphp

<header id="siteHeader"
        data-transparent-hero="{{ $isHomeHero ? 'true' : 'false' }}"
        class="fixed top-0 inset-x-0 z-50 border-b {{ $isHomeHero ? 'is-transparent bg-transparent border-transparent' : 'bg-white/95 backdrop-blur border-black/5' }}"
        style="transform: translateY(0); transition: transform 900ms cubic-bezier(0.16, 1, 0.3, 1), background-color 400ms ease, border-color 400ms ease; will-change: transform;">
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
                   class="nav-link relative text-sm font-medium tracking-wide transition {{ request()->routeIs($routeName) ? 'nav-link-active text-brand-wine' : 'text-brand-ink/80 hover:text-brand-wine' }}">
                    {{ $label }}
                    @if (request()->routeIs($routeName))
                        <span class="nav-underline absolute -bottom-2 left-0 h-[2px] w-full bg-brand-wine"></span>
                    @endif
                </a>
            @endforeach
        </nav>

        <div class="hidden lg:block">
            <a href="{{ route('contact') }}" class="btn-primary !py-2.5 !px-6 !text-xs">Book a Class</a>
        </div>

        {{-- Mobile menu button --}}
        <button type="button" class="menu-icon lg:hidden inline-flex items-center justify-center rounded-md p-2 text-brand-ink transition" aria-label="Toggle menu" onclick="document.getElementById('mobileNav').classList.toggle('hidden')">
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

<style>
    /* Nav text/icon color swap while the header is blended over the hero.
       Higher specificity than the single Tailwind utility classes above,
       so no !important needed. */
    header.is-transparent .nav-link {
        color: rgba(255, 255, 255, 0.9);
    }
    header.is-transparent .nav-link:hover {
        color: #ffffff;
    }
    header.is-transparent .nav-link-active {
        color: #ffffff;
    }
    header.is-transparent .nav-underline {
        background-color: #ffffff;
    }
    header.is-transparent .menu-icon {
        color: #ffffff;
    }
</style>

<script>
    (function () {
        const header = document.getElementById('siteHeader');
        if (!header) return;

        const hasTransparentHero = header.dataset.transparentHero === 'true';
        if (hasTransparentHero) {
            header.classList.add('is-transparent');
        }

        function setHeaderHeightVar() {
            document.documentElement.style.setProperty('--header-height', header.offsetHeight + 'px');
        }
        setHeaderHeightVar();
        window.addEventListener('resize', setHeaderHeightVar);

        let lastScrollY = window.scrollY;
        let isHidden = false;
        let ticking = false;
        const hideThreshold = 80;   // don't hide until scrolled past the header itself
        const minDelta = 6;         // ignore tiny scroll jitter so the animation never gets interrupted/restarted

        function show() {
            if (isHidden) {
                header.style.transform = 'translateY(0)';
                isHidden = false;
            }
        }

        function hide() {
            if (!isHidden) {
                header.style.transform = 'translateY(-100%)';
                isHidden = true;
            }
        }

        function onScroll() {
            const currentScrollY = window.scrollY;
            const delta = currentScrollY - lastScrollY;

            if (currentScrollY <= hideThreshold) {
                // Always show near the top of the page, blended into the hero if applicable
                show();
                if (hasTransparentHero) {
                    header.classList.add('is-transparent', 'bg-transparent', 'border-transparent');
                    header.classList.remove('bg-white/95', 'backdrop-blur', 'border-black/5');
                }
            } else {
                // Past the hero (or any page without one) — header is solid from here on
                if (hasTransparentHero) {
                    header.classList.remove('is-transparent', 'bg-transparent', 'border-transparent');
                    header.classList.add('bg-white/95', 'backdrop-blur', 'border-black/5');
                }

                if (Math.abs(delta) >= minDelta) {
                    if (delta > 0) {
                        // Scrolling down — slide the header up out of view
                        hide();
                        document.getElementById('mobileNav')?.classList.add('hidden');
                    } else {
                        // Scrolling up — slide the header back into view
                        show();
                    }
                }
            }

            lastScrollY = currentScrollY;
            ticking = false;
        }

        window.addEventListener('scroll', function () {
            if (!ticking) {
                window.requestAnimationFrame(onScroll);
                ticking = true;
            }
        }, { passive: true });
    })();
</script>
