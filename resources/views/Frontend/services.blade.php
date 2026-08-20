<x-frontend-layout :title="'Services | Elite Fitness Studio'" :description="'Explore Zumba and Yoga class offerings at Elite Fitness Studio, plus membership pricing for every commitment level.'">

    <x-page-banner eyebrow="Our Services" title="Zumba &amp; Yoga, Done Right" subtitle="Two practices designed to build strength, flexibility, and confidence — at a pace that suits you." />

    {{-- ZUMBA --}}
    <section class="py-20">
        <div class="container grid items-center gap-14 lg:grid-cols-2">
            <div class="order-2 lg:order-1">
                <span class="section-eyebrow">Service 01</span>
                <h2 class="font-display text-3xl font-bold text-brand-ink sm:text-4xl">Zumba</h2>
                <p class="mt-5 text-sm leading-relaxed text-brand-ink/70">
                    A high-energy dance fitness program set to Latin and international rhythms. Zumba blends
                    cardio and choreography into a workout that never feels like a workout.
                </p>
                <ul class="mt-6 space-y-3">
                    @foreach (['Full-body cardio in a 45–60 minute session', 'Easy-to-follow choreography for every level', 'Burns 400–600 calories per class', 'Small group energy that keeps you motivated'] as $point)
                        <li class="flex items-start gap-3 text-sm text-brand-ink/75">
                            <svg class="mt-0.5 h-5 w-5 shrink-0 text-brand-wine" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            {{ $point }}
                        </li>
                    @endforeach
                </ul>
                <div class="mt-7 flex flex-wrap gap-2">
                    @foreach (['Zumba Fitness', 'Zumba Beginners', 'Zumba Toning'] as $tag)
                        <span class="rounded-full bg-brand-wine/10 px-4 py-1.5 text-xs font-semibold text-brand-wine">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>
            <img src="https://placehold.co/640x560/8E1C54/FFFFFF?text=Zumba+Fitness"
                 alt="Zumba class detail"
                 class="order-1 rounded-2xl object-cover shadow-sm lg:order-2">
        </div>
    </section>

    {{-- YOGA --}}
    <section class="bg-brand-teal-light py-20">
        <div class="container grid items-center gap-14 lg:grid-cols-2">
            <img src="https://placehold.co/640x560/105F60/FFFFFF?text=Yoga+Practice"
                 alt="Yoga class detail"
                 class="rounded-2xl object-cover shadow-sm">
            <div>
                <span class="section-eyebrow">Service 02</span>
                <h2 class="font-display text-3xl font-bold text-brand-ink sm:text-4xl">Yoga</h2>
                <p class="mt-5 text-sm leading-relaxed text-brand-ink/70">
                    From grounding Hatha to flowing Vinyasa and deeply Restorative sessions, our Yoga classes
                    build flexibility, balance, and calm — on and off the mat.
                </p>
                <ul class="mt-6 space-y-3">
                    @foreach (['Guided breathwork and alignment cues throughout', 'Classes for beginners through advanced practitioners', 'Improves flexibility, posture, and stress relief', 'Quiet, supportive studio environment'] as $point)
                        <li class="flex items-start gap-3 text-sm text-brand-ink/75">
                            <svg class="mt-0.5 h-5 w-5 shrink-0 text-brand-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            {{ $point }}
                        </li>
                    @endforeach
                </ul>
                <div class="mt-7 flex flex-wrap gap-2">
                    @foreach (['Hatha Yoga', 'Vinyasa Flow', 'Restorative Yoga'] as $tag)
                        <span class="rounded-full bg-brand-teal/10 px-4 py-1.5 text-xs font-semibold text-brand-teal">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- PRICING --}}
    <section class="py-20">
        <div class="container">
            <div class="mx-auto max-w-xl text-center">
                <span class="section-eyebrow">Membership</span>
                <h2 class="font-display text-3xl font-bold text-brand-ink sm:text-4xl">Simple, Flexible Pricing</h2>
            </div>

            <div class="mt-14 grid gap-8 md:grid-cols-3">
                @php
                    $plans = [
                        ['name' => 'Drop-In', 'price' => 'Rs 500', 'period' => '/ class', 'featured' => false,
                            'features' => ['Single Zumba or Yoga class', 'No commitment', 'Access to studio amenities']],
                        ['name' => 'Monthly', 'price' => 'Rs 4,500', 'period' => '/ month', 'featured' => true,
                            'features' => ['Unlimited Zumba & Yoga classes', 'Priority booking', 'Free 1 guest pass / month', 'Studio events access']],
                        ['name' => 'Annual', 'price' => 'Rs 42,000', 'period' => '/ year', 'featured' => false,
                            'features' => ['Everything in Monthly', '2 months free', 'Complimentary progress check-in']],
                    ];
                @endphp
                @foreach ($plans as $plan)
                    <div class="relative rounded-2xl p-8 shadow-sm ring-1 {{ $plan['featured'] ? 'bg-brand-wine text-white ring-brand-wine scale-[1.02]' : 'bg-white text-brand-ink ring-black/5' }}">
                        @if ($plan['featured'])
                            <span class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-brand-teal px-4 py-1 text-[11px] font-semibold uppercase tracking-wide text-white">Most Popular</span>
                        @endif
                        <h3 class="font-display text-lg font-bold">{{ $plan['name'] }}</h3>
                        <p class="mt-4">
                            <span class="font-display text-3xl font-bold">{{ $plan['price'] }}</span>
                            <span class="text-sm {{ $plan['featured'] ? 'text-white/70' : 'text-brand-ink/55' }}">{{ $plan['period'] }}</span>
                        </p>
                        <ul class="mt-6 space-y-3 text-sm {{ $plan['featured'] ? 'text-white/85' : 'text-brand-ink/70' }}">
                            @foreach ($plan['features'] as $f)
                                <li class="flex items-start gap-2">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 {{ $plan['featured'] ? 'text-white' : 'text-brand-wine' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                    {{ $f }}
                                </li>
                            @endforeach
                        </ul>
                        <a href="{{ route('contact') }}" class="mt-8 block rounded-full py-3 text-center text-sm font-semibold transition {{ $plan['featured'] ? 'bg-white text-brand-wine hover:bg-brand-teal hover:text-white' : 'bg-brand-wine/10 text-brand-wine hover:bg-brand-wine hover:text-white' }}">
                            Choose {{ $plan['name'] }}
                        </a>
                    </div>
                @endforeach
            </div>
            <p class="mt-6 text-center text-xs text-brand-ink/50">Placeholder pricing — update with your real rates any time.</p>
        </div>
    </section>

</x-frontend-layout>
