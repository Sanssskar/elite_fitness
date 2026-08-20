<x-frontend-layout :title="'Elite Fitness Studio | Zumba & Yoga in Dharan'" :description="'Elite Fitness Studio offers Zumba and Yoga classes for every level. Book your first class free and start moving with us today.'">

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-brand-cream">
        <div class="container grid items-center gap-14 py-16 lg:grid-cols-2 lg:py-24">
            <div>
                <span class="section-eyebrow">Zumba &middot; Yoga &middot; Community</span>
                <h1 class="font-display text-4xl font-bold leading-tight text-brand-ink sm:text-5xl lg:text-[3.4rem]">
                    Move With Strength.
                    <span class="text-brand-gradient">Breathe With Ease.</span>
                </h1>
                <p class="mt-6 max-w-md text-base leading-relaxed text-brand-ink/70">
                    Elite Fitness Studio brings high-energy Zumba and mindful Yoga together under one roof —
                    so you can build strength, flexibility, and a healthier rhythm for everyday life.
                </p>
                <div class="mt-8 flex flex-wrap items-center gap-4">
                    <a href="{{ route('contact') }}" class="btn-primary">Book a Free Class</a>
                    <a href="{{ route('services') }}" class="btn-outline">View Schedule</a>
                </div>

                <div class="mt-10 flex items-center gap-6 border-t border-black/10 pt-6">
                    <div>
                        <p class="font-display text-2xl font-bold text-brand-wine">500+</p>
                        <p class="text-xs text-brand-ink/60">Happy Members</p>
                    </div>
                    <div class="h-8 w-px bg-black/10"></div>
                    <div>
                        <p class="font-display text-2xl font-bold text-brand-wine">12+</p>
                        <p class="text-xs text-brand-ink/60">Weekly Classes</p>
                    </div>
                    <div class="h-8 w-px bg-black/10"></div>
                    <div>
                        <p class="font-display text-2xl font-bold text-brand-wine">5</p>
                        <p class="text-xs text-brand-ink/60">Years Running</p>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -right-6 -top-6 -z-10 h-full w-full rounded-[2rem] bg-brand-teal/15"></div>
                <img src="https://placehold.co/640x760/105F60/FFFFFF?text=Yoga+%26+Zumba+Studio"
                     alt="Elite Fitness Studio class in session"
                     class="h-full w-full rounded-[2rem] object-cover shadow-xl">
                <div class="absolute -bottom-6 -left-6 hidden rounded-2xl bg-white px-6 py-4 shadow-lg sm:block">
                    <p class="font-display text-lg font-bold text-brand-wine">Free First Class</p>
                    <p class="text-xs text-brand-ink/60">No commitment required</p>
                </div>
            </div>
        </div>
    </section>

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
