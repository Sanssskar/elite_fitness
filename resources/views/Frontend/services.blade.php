<x-frontend-layout :title="'Services | Elite Fitness Studio'" :description="'Explore Zumba and Yoga class offerings at Elite Fitness Studio, plus membership pricing for every commitment level.'">

    <x-page-banner eyebrow="Our Services" title="Find Your Strength & Balance" subtitle="Energize your body, relax your mind, and feel your best."
        image="{{ asset('images/services-banner.jpg') }}" />

    {{-- SERVICES --}}
    @forelse ($services as $service)
        <section class="py-20 {{ $loop->even ? 'bg-brand-teal-light' : '' }}">
            <div class="container grid items-center gap-14 lg:grid-cols-2">
                <div class="{{ $loop->even ? 'order-2 lg:order-2' : 'order-2 lg:order-1' }}">
                    <span class="section-eyebrow">Service {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                    <h2 class="font-display text-3xl font-bold text-brand-ink sm:text-4xl">{{ $service->title }}</h2>
                    @if ($service->description)
                        <p class="mt-5 text-sm leading-relaxed text-brand-ink/70">{!! $service->description !!}</p>
                    @elseif ($service->short_description)
                        <p class="mt-5 text-sm leading-relaxed text-brand-ink/70">{{ $service->short_description }}</p>
                    @endif

                    @if (!empty($service->features))
                        <ul class="mt-6 space-y-3">
                            @foreach ($service->features as $point)
                                <li class="flex items-start gap-3 text-sm text-brand-ink/75">
                                    <svg class="mt-0.5 h-5 w-5 shrink-0 text-brand-wine" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                    {{ $point }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <img src="{{ $service->image ? asset('storage/' . $service->image) : 'https://placehold.co/640x560/8E1C54/FFFFFF?text=' . urlencode($service->title) }}"
                     alt="{{ $service->title }}"
                     class="{{ $loop->even ? 'order-1 lg:order-1' : 'order-1 lg:order-2' }} rounded-2xl object-cover shadow-sm">
            </div>
        </section>
    @empty
        <section class="py-20">
            <div class="container text-center text-sm text-brand-ink/50">
                No services published yet — add them in the admin panel and they'll appear here.
            </div>
        </section>
    @endforelse

    {{-- PRICING --}}
    <section class="py-20">
        <div class="container">
            <div class="mx-auto max-w-xl text-center">
                <span class="section-eyebrow">Membership</span>
                <h2 class="font-display text-3xl font-bold text-brand-ink sm:text-4xl">Simple, Flexible Pricing</h2>
            </div>

            @if ($pricingPlans->isNotEmpty())
                <div class="mt-14 grid gap-8 md:grid-cols-3">
                    @foreach ($pricingPlans as $plan)
                        <div class="relative rounded-2xl p-8 shadow-sm ring-1 {{ $plan->is_featured ? 'bg-brand-wine text-white ring-brand-wine scale-[1.02]' : 'bg-white text-brand-ink ring-black/5' }}">
                            @if ($plan->is_featured)
                                <span class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-brand-teal px-4 py-1 text-[11px] font-semibold uppercase tracking-wide text-white">Most Popular</span>
                            @endif
                            <h3 class="font-display text-lg font-bold">{{ $plan->name }}</h3>
                            <p class="mt-4">
                                <span class="font-display text-3xl font-bold">{{ $plan->currency }} {{ number_format((float) $plan->price, 0) }}</span>
                                @if ($plan->period)
                                    <span class="text-sm {{ $plan->is_featured ? 'text-white/70' : 'text-brand-ink/55' }}">/ {{ $plan->period }}</span>
                                @endif
                            </p>
                            @if (!empty($plan->features))
                                <ul class="mt-6 space-y-3 text-sm {{ $plan->is_featured ? 'text-white/85' : 'text-brand-ink/70' }}">
                                    @foreach ($plan->features as $f)
                                        <li class="flex items-start gap-2">
                                            <svg class="mt-0.5 h-4 w-4 shrink-0 {{ $plan->is_featured ? 'text-white' : 'text-brand-wine' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                            {{ $f }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                            <a href="{{ route('contact') }}" class="mt-8 block rounded-full py-3 text-center text-sm font-semibold transition {{ $plan->is_featured ? 'bg-white text-brand-wine hover:bg-brand-teal hover:text-white' : 'bg-brand-wine/10 text-brand-wine hover:bg-brand-wine hover:text-white' }}">
                                Choose {{ $plan->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="mt-14 text-center text-sm text-brand-ink/50">Add pricing plans in the admin panel and they'll appear here.</p>
            @endif
        </div>
    </section>

</x-frontend-layout>
