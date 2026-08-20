<x-frontend-layout :title="'Elite Fitness Studio | Zumba & Yoga in Dharan'" :description="'Elite Fitness Studio offers Zumba and Yoga classes for every level. Book your first class free and start moving with us today.'">

    {{-- HERO CAROUSEL --}}
    <section class="relative overflow-hidden bg-brand-teal-dark" id="heroCarousel">
        @php
            $slides = [
                [
                    'image' => 'https://placehold.co/1600x800/105F60/FFFFFF?text=Yoga+%26+Zumba+Studio',
                    'eyebrow' => 'Zumba · Yoga · Community',
                    'title' => 'Move With Strength. Breathe With Ease.',
                    'text' => 'Elite Fitness Studio brings high-energy Zumba and mindful Yoga together under one roof — build strength, flexibility, and a healthier rhythm for everyday life.',
                ],
                [
                    'image' => 'https://placehold.co/1600x800/8E1C54/FFFFFF?text=High-Energy+Zumba',
                    'eyebrow' => 'Dance · Cardio · Fun',
                    'title' => 'High-Energy Zumba Classes',
                    'text' => 'Latin and global rhythms, easy-to-follow choreography, and a room full of people who\'ll cheer you on from day one.',
                ],
                [
                    'image' => 'https://placehold.co/1600x800/3E5868/FFFFFF?text=Find+Your+Calm',
                    'eyebrow' => 'Balance · Breath · Focus',
                    'title' => 'Find Your Calm With Yoga',
                    'text' => 'From grounding Hatha to flowing Vinyasa and deeply restorative sessions — build flexibility and calm at your own pace.',
                ],
                [
                    'image' => 'https://placehold.co/1600x800/9C2B6B/FFFFFF?text=First+Class+Free',
                    'eyebrow' => 'New Here?',
                    'title' => 'Your First Class Is On Us',
                    'text' => 'No commitment, no pressure — just come see what Elite Fitness Studio feels like. We\'ll save you a spot.',
                ],
            ];
        @endphp

        <div class="relative h-[560px] sm:h-[620px] lg:h-[680px]">
            @foreach ($slides as $i => $slide)
                <div class="hero-slide absolute inset-0 transition-opacity duration-700 {{ $i === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }}" data-slide="{{ $i }}">
                    <img src="{{ $slide['image'] }}" alt="{{ $slide['title'] }}" class="h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-black/10"></div>
                    <div class="container relative flex h-full items-center">
                        <div class="max-w-xl">
                            <span class="mb-3 inline-block text-xs font-semibold uppercase tracking-[0.25em] text-white/80">{{ $slide['eyebrow'] }}</span>
                            <h1 class="font-display text-4xl font-bold leading-tight text-white sm:text-5xl lg:text-[3.2rem]">{{ $slide['title'] }}</h1>
                            <p class="mt-5 max-w-md text-sm leading-relaxed text-white/80 sm:text-base">{{ $slide['text'] }}</p>
                            {{-- Static buttons — same two CTAs on every slide, not editable per slide from the admin --}}
                            <div class="mt-8 flex flex-wrap items-center gap-4">
                                <a href="{{ route('contact') }}" class="btn-primary">Book a Free Class</a>
                                <a href="{{ route('services') }}" class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-white/70 px-7 py-3 text-sm font-semibold tracking-wide text-white transition hover:bg-white hover:text-brand-ink">View Schedule</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- Arrows --}}
            <button type="button" id="heroPrev" aria-label="Previous slide"
                    class="absolute left-4 top-1/2 z-20 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-white/15 text-white backdrop-blur transition hover:bg-white/30 sm:left-8">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button type="button" id="heroNext" aria-label="Next slide"
                    class="absolute right-4 top-1/2 z-20 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-white/15 text-white backdrop-blur transition hover:bg-white/30 sm:right-8">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </button>

            {{-- Dots --}}
            <div class="absolute bottom-6 left-1/2 z-20 flex -translate-x-1/2 gap-2">
                @foreach ($slides as $i => $slide)
                    <button type="button" class="hero-dot h-2.5 rounded-full bg-white/50 transition-all {{ $i === 0 ? 'w-8 bg-white' : 'w-2.5' }}" data-dot="{{ $i }}" aria-label="Go to slide {{ $i + 1 }}"></button>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        (function () {
            const root = document.getElementById('heroCarousel');
            if (!root) return;

            const slides = root.querySelectorAll('.hero-slide');
            const dots = root.querySelectorAll('.hero-dot');
            const prevBtn = document.getElementById('heroPrev');
            const nextBtn = document.getElementById('heroNext');
            let current = 0;
            let timer;

            function goTo(index) {
                slides[current].classList.remove('opacity-100', 'z-10');
                slides[current].classList.add('opacity-0', 'z-0');
                dots[current].classList.remove('w-8', 'bg-white');
                dots[current].classList.add('w-2.5', 'bg-white/50');

                current = (index + slides.length) % slides.length;

                slides[current].classList.remove('opacity-0', 'z-0');
                slides[current].classList.add('opacity-100', 'z-10');
                dots[current].classList.remove('w-2.5', 'bg-white/50');
                dots[current].classList.add('w-8', 'bg-white');
            }

            function next() { goTo(current + 1); }
            function prev() { goTo(current - 1); }

            function startAutoplay() {
                timer = setInterval(next, 6000);
            }
            function resetAutoplay() {
                clearInterval(timer);
                startAutoplay();
            }

            nextBtn.addEventListener('click', function () { next(); resetAutoplay(); });
            prevBtn.addEventListener('click', function () { prev(); resetAutoplay(); });
            dots.forEach(function (dot) {
                dot.addEventListener('click', function () {
                    goTo(parseInt(dot.dataset.dot, 10));
                    resetAutoplay();
                });
            });

            startAutoplay();
        })();
    </script>

    {{-- SERVICES PREVIEW --}}
    <section class="py-20">
        <div class="container">
            <div class="mx-auto max-w-xl text-center">
                <span class="section-eyebrow">What We Offer</span>
                <h2 class="font-display text-3xl font-bold text-brand-ink sm:text-4xl">Two Practices, One Goal &mdash; A Stronger You</h2>
            </div>

            <div class="mt-14 grid gap-8 md:grid-cols-2">
                {{-- Zumba card --}}
                <div class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-black/5 transition hover:shadow-lg">
                    <div class="overflow-hidden">
                        <img src="https://placehold.co/700x420/8E1C54/FFFFFF?text=Zumba+Class"
                             alt="Zumba class at Elite Fitness Studio"
                             class="h-56 w-full object-cover transition duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-8">
                        <h3 class="font-display text-xl font-bold text-brand-ink">Zumba</h3>
                        <p class="mt-3 text-sm leading-relaxed text-brand-ink/70">
                            High-energy dance workouts set to Latin and global rhythms. Burn calories, build coordination,
                            and leave every session smiling.
                        </p>
                        <a href="{{ route('services') }}" class="mt-5 inline-flex items-center gap-1 text-sm font-semibold text-brand-wine">
                            Explore Zumba
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Yoga card --}}
                <div class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-black/5 transition hover:shadow-lg">
                    <div class="overflow-hidden">
                        <img src="https://placehold.co/700x420/105F60/FFFFFF?text=Yoga+Class"
                             alt="Yoga class at Elite Fitness Studio"
                             class="h-56 w-full object-cover transition duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-8">
                        <h3 class="font-display text-xl font-bold text-brand-ink">Yoga</h3>
                        <p class="mt-3 text-sm leading-relaxed text-brand-ink/70">
                            From grounding Hatha to flowing Vinyasa and deeply restorative sessions — build flexibility,
                            balance, and calm at your own pace.
                        </p>
                        <a href="{{ route('services') }}" class="mt-5 inline-flex items-center gap-1 text-sm font-semibold text-brand-wine">
                            Explore Yoga
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- WHY CHOOSE US --}}
    <section class="bg-brand-teal-light py-20">
        <div class="container">
            <div class="mx-auto max-w-xl text-center">
                <span class="section-eyebrow">Why Elite</span>
                <h2 class="font-display text-3xl font-bold text-brand-ink sm:text-4xl">Built Around You</h2>
            </div>

            <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                @php
                    $features = [
                        ['title' => 'Expert Instructors', 'text' => 'Certified trainers who tailor every class to your level.'],
                        ['title' => 'Small Class Sizes', 'text' => 'Personal attention in every Zumba and Yoga session.'],
                        ['title' => 'Flexible Schedule', 'text' => 'Morning, evening, and weekend slots that fit your life.'],
                        ['title' => 'Welcoming Space', 'text' => 'A calm, judgement-free studio built for every body.'],
                    ];
                @endphp
                @foreach ($features as $feature)
                    <div class="rounded-2xl bg-white p-7 shadow-sm ring-1 ring-black/5">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-wine/10 text-brand-wine">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <h3 class="mt-4 font-display text-base font-bold text-brand-ink">{{ $feature['title'] }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-brand-ink/65">{{ $feature['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- INSTRUCTOR TEASER --}}
    <section class="py-20">
        <div class="container grid items-center gap-12 lg:grid-cols-2">
            <img src="https://placehold.co/640x520/3E5868/FFFFFF?text=Meet+Our+Instructors"
                 alt="Elite Fitness Studio instructors"
                 class="rounded-2xl object-cover shadow-sm">
            <div>
                <span class="section-eyebrow">Meet The Team</span>
                <h2 class="font-display text-3xl font-bold text-brand-ink sm:text-4xl">Guided by Certified, Caring Instructors</h2>
                <p class="mt-5 text-sm leading-relaxed text-brand-ink/70">
                    Every class at Elite is led by a certified instructor who genuinely cares about your progress —
                    whether you're stepping onto the mat for the first time or training for your next milestone.
                </p>
                <a href="{{ route('instructor') }}" class="btn-primary mt-8">Meet Our Instructors</a>
            </div>
        </div>
    </section>

    {{-- TESTIMONIALS --}}
    <section class="bg-brand-cream py-20">
        <div class="container">
            <div class="mx-auto max-w-xl text-center">
                <span class="section-eyebrow">Member Stories</span>
                <h2 class="font-display text-3xl font-bold text-brand-ink sm:text-4xl">Loved By Our Community</h2>
            </div>

            <div class="mt-14 grid gap-8 md:grid-cols-3">
                @php
                    $testimonials = [
                        ['name' => 'Anjali R.', 'role' => 'Zumba Member', 'text' => 'The energy in every Zumba class is unmatched. I look forward to it all week and I\'ve never felt fitter.'],
                        ['name' => 'Bikash T.', 'role' => 'Yoga Member', 'text' => 'The instructors take real time to correct your form. My flexibility and sleep have both improved so much.'],
                        ['name' => 'Sarina M.', 'role' => 'Member since 2023', 'text' => 'A welcoming studio that never feels intimidating. It genuinely feels like a second home now.'],
                    ];
                @endphp
                @foreach ($testimonials as $t)
                    <div class="rounded-2xl bg-white p-8 shadow-sm ring-1 ring-black/5">
                        <div class="flex gap-1 text-brand-wine">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            @endfor
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-brand-ink/75">&ldquo;{{ $t['text'] }}&rdquo;</p>
                        <div class="mt-6 flex items-center gap-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-brand-teal-light font-display text-sm font-bold text-brand-teal">
                                {{ substr($t['name'], 0, 1) }}
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-brand-ink">{{ $t['name'] }}</p>
                                <p class="text-xs text-brand-ink/55">{{ $t['role'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20">
        <div class="container">
            <div class="relative overflow-hidden rounded-[2rem] bg-brand-wine px-8 py-14 text-center sm:px-16">
                <div class="pointer-events-none absolute -left-10 -top-10 h-52 w-52 rounded-full bg-white/10"></div>
                <div class="pointer-events-none absolute -bottom-14 -right-10 h-60 w-60 rounded-full bg-white/10"></div>
                <h2 class="font-display text-3xl font-bold text-white sm:text-4xl">Your First Class Is On Us</h2>
                <p class="mx-auto mt-4 max-w-md text-sm text-white/80">
                    Come see why members stay. Reserve your complimentary Zumba or Yoga session today.
                </p>
                <a href="{{ route('contact') }}" class="btn-primary mt-8 !bg-white !text-brand-wine hover:!bg-brand-teal hover:!text-white">Book Your Free Class</a>
            </div>
        </div>
    </section>

</x-frontend-layout>
