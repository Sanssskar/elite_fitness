@props(['eyebrow' => null, 'title', 'subtitle' => null, 'image' => null])

@php
    $bannerImage = $image ?? asset('images/about2.jpg');
@endphp

<section class="relative overflow-hidden bg-brand-teal-dark py-24 sm:py-28">
    {{-- background image --}}
    <img src="{{ $bannerImage }}" alt="" class="absolute inset-0 h-full w-full object-cover">

    {{-- dark overlay for text contrast --}}
    <div class="absolute inset-0 bg-brand-teal-dark/70"></div>
    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-brand-teal-dark/90 via-transparent to-brand-teal-dark/40"></div>

    <div class="container relative text-center">
        @if ($eyebrow)
            <span class="mb-3 inline-block text-xs font-semibold uppercase tracking-[0.25em] text-white/80">{{ $eyebrow }}</span>
        @endif
        <h1 class="font-display text-4xl font-bold text-white drop-shadow-sm sm:text-5xl">{{ $title }}</h1>
        @if ($subtitle)
            <p class="mx-auto mt-4 max-w-xl text-sm text-white/85 sm:text-base">{{ $subtitle }}</p>
        @endif
    </div>
</section>
