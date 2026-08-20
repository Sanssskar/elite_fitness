@props(['eyebrow' => null, 'title', 'subtitle' => null])

<section class="relative overflow-hidden bg-brand-teal-dark py-20 sm:py-24">
    <div class="pointer-events-none absolute -right-24 -top-24 h-72 w-72 rounded-full bg-brand-wine/20 blur-3xl"></div>
    <div class="pointer-events-none absolute -left-16 bottom-0 h-56 w-56 rounded-full bg-brand-teal/30 blur-3xl"></div>

    <div class="container relative text-center">
        @if ($eyebrow)
            <span class="mb-3 inline-block text-xs font-semibold uppercase tracking-[0.25em] text-white/70">{{ $eyebrow }}</span>
        @endif
        <h1 class="font-display text-4xl font-bold text-white sm:text-5xl">{{ $title }}</h1>
        @if ($subtitle)
            <p class="mx-auto mt-4 max-w-xl text-sm text-white/70 sm:text-base">{{ $subtitle }}</p>
        @endif

        <div class="mt-6 flex items-center justify-center gap-2 text-xs font-medium text-white/60">
            <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
            <span>/</span>
            <span class="text-white">{{ $title }}</span>
        </div>
    </div>
</section>
