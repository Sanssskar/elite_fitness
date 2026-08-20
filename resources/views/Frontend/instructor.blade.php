<x-frontend-layout :title="'Instructors | Elite Fitness Studio'" :description="'Meet the certified Zumba and Yoga instructors at Elite Fitness Studio.'">

    <x-page-banner eyebrow="Our Team" title="Meet Your Instructors" subtitle="Certified, experienced, and genuinely invested in helping you move better every class."
        image="{{ asset('images/instructor-banner.jpg') }}" />

    {{-- INSTRUCTOR GRID --}}
    <section class="py-20">
        <div class="container">
            @if ($instructors->isNotEmpty())
                <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
                    @php
                        $socialIcons = [
                            'facebook' => '<path d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.78-3.89 1.1 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0 0 22 12"/>',
                            'instagram' => '<path d="M12 2.2c3.2 0 3.58.01 4.85.07 1.17.05 1.97.24 2.43.4a4.9 4.9 0 0 1 1.77 1.15 4.9 4.9 0 0 1 1.15 1.77c.16.46.35 1.26.4 2.43.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.24 1.97-.4 2.43a4.9 4.9 0 0 1-1.15 1.77 4.9 4.9 0 0 1-1.77 1.15c-.46.16-1.26.35-2.43.4-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.97-.24-2.43-.4a4.9 4.9 0 0 1-1.77-1.15 4.9 4.9 0 0 1-1.15-1.77c-.16-.46-.35-1.26-.4-2.43C2.21 15.58 2.2 15.2 2.2 12s.01-3.58.07-4.85c.05-1.17.24-1.97.4-2.43a4.9 4.9 0 0 1 1.15-1.77A4.9 4.9 0 0 1 5.59 1.8c.46-.16 1.26-.35 2.43-.4C9.29 1.34 9.67 1.33 12 1.33m0 5.13a5.54 5.54 0 1 0 0 11.08 5.54 5.54 0 0 0 0-11.08m0 9.14a3.6 3.6 0 1 1 0-7.2 3.6 3.6 0 0 1 0 7.2m5.76-9.36a1.3 1.3 0 1 1-2.6 0 1.3 1.3 0 0 1 2.6 0"/>',
                            'youtube' => '<path d="M23.5 6.19a3.02 3.02 0 0 0-2.12-2.14C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.38.55A3.02 3.02 0 0 0 .5 6.19 31.6 31.6 0 0 0 0 12a31.6 31.6 0 0 0 .5 5.81 3.02 3.02 0 0 0 2.12 2.14c1.88.55 9.38.55 9.38.55s7.5 0 9.38-.55a3.02 3.02 0 0 0 2.12-2.14A31.6 31.6 0 0 0 24 12a31.6 31.6 0 0 0-.5-5.81M9.6 15.5v-7l6.27 3.5Z"/>',
                            'tiktok' => '<path d="M16.6 5.82a4.28 4.28 0 0 1-2.63-3.5h-3.14v13.4a2.6 2.6 0 1 1-1.86-2.49V9.98a5.94 5.94 0 1 0 5 5.87V9.1a7.4 7.4 0 0 0 4.32 1.38V7.34a4.24 4.24 0 0 1-1.69-1.52"/>',
                            'whatsapp' => '<path d="M17.5 14.4c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.48a9.1 9.1 0 0 1-1.68-2.1c-.17-.3-.02-.46.13-.61.14-.14.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.67-1.6-.91-2.2-.24-.57-.49-.5-.67-.5h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.47s1.07 2.87 1.22 3.07c.15.2 2.1 3.2 5.1 4.49.71.3 1.27.49 1.7.63.72.23 1.37.2 1.88.12.57-.09 1.76-.72 2.01-1.41.25-.7.25-1.3.17-1.42-.07-.13-.27-.2-.57-.35M12 2.02a9.98 9.98 0 0 0-8.55 15.1L2 22l4.98-1.4A9.98 9.98 0 1 0 12 2.02"/>',
                            'twitter' => '<path d="M18.9 2H22l-7.6 8.7L23.3 22h-6.9l-5.4-6.7L4.7 22H1.6l8.2-9.3L1 2h7.1l4.9 6.2Zm-1.2 18h1.7L7.1 4h-1.9Z"/>',
                            'linkedin' => '<path d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5M2.4 8.98h5.2V21H2.4Zm7.9 0h5v1.64h.07c.7-1.25 2.4-2.57 4.94-2.57 5.28 0 6.25 3.32 6.25 7.64V21h-5.2v-5.66c0-1.35-.02-3.08-1.9-3.08-1.9 0-2.19 1.46-2.19 2.98V21h-5.2Z"/>',
                            'website' => '<path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20m6.93 6H15.7a15.6 15.6 0 0 0-1.4-4.28A8.03 8.03 0 0 1 18.93 8M12 4.04c.83 1.1 1.5 2.47 1.93 3.96h-3.86c.43-1.5 1.1-2.86 1.93-3.96M4.26 14a8.1 8.1 0 0 1 0-4h3.68a17.3 17.3 0 0 0 0 4Zm.81 2h3.23a15.6 15.6 0 0 0 1.4 4.28A8.03 8.03 0 0 1 5.07 16m3.23-10H5.07a8.03 8.03 0 0 1 4.63-4.28A15.6 15.6 0 0 0 8.3 6M12 19.96c-.83-1.1-1.5-2.47-1.93-3.96h3.86c-.43 1.5-1.1 2.86-1.93 3.96M14.3 14H9.7a13.5 13.5 0 0 1 0-4h4.6a13.5 13.5 0 0 1 0 4m.1 5.98a15.6 15.6 0 0 0 1.4-4.28h3.23a8.03 8.03 0 0 1-4.63 4.28M16.06 14a17.3 17.3 0 0 0 0-4h3.68a8.1 8.1 0 0 1 0 4Z"/>',
                        ];
                    @endphp

                    @foreach ($instructors as $person)
                        <div class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-black/5 transition hover:shadow-lg">
                            <div class="overflow-hidden">
                                <img src="{{ $person->image ? asset('storage/' . $person->image) : 'https://placehold.co/560x600/3E5868/FFFFFF?text=' . urlencode($person->name) }}"
                                     alt="{{ $person->name }}"
                                     class="h-64 w-full object-cover transition duration-500 group-hover:scale-105">
                            </div>
                            <div class="p-6">
                                <h3 class="font-display text-lg font-bold text-brand-ink">{{ $person->name }}</h3>
                                @if ($person->role)
                                    <p class="text-xs font-semibold uppercase tracking-wide text-brand-wine">{{ $person->role }}</p>
                                @endif
                                @if ($person->bio)
                                    <p class="mt-3 text-sm leading-relaxed text-brand-ink/65">{{ $person->bio }}</p>
                                @endif

                                @if (!empty($person->specialties))
                                    <div class="mt-4 flex flex-wrap gap-2">
                                        @foreach ($person->specialties as $tag)
                                            <span class="rounded-full bg-brand-teal-light px-3 py-1 text-[11px] font-semibold text-brand-teal">{{ $tag }}</span>
                                        @endforeach
                                    </div>
                                @endif

                                @if ($person->socials->isNotEmpty())
                                    <div class="mt-5 flex gap-3 border-t border-black/5 pt-4">
                                        @foreach ($person->socials as $social)
                                            <a href="{{ $social->url }}" target="_blank" rel="noopener"
                                               class="flex h-8 w-8 items-center justify-center rounded-full bg-brand-ink/5 text-brand-ink/60 hover:bg-brand-wine hover:text-white transition"
                                               aria-label="{{ ucfirst($social->platform) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 24 24">
                                                    {!! $socialIcons[$social->platform] ?? $socialIcons['website'] !!}
                                                </svg>
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center text-sm text-brand-ink/50">Add instructors in the admin panel and they'll appear here.</p>
            @endif
        </div>
    </section>

    {{-- CTA --}}
    <section class="pb-20">
        <div class="container">
            <div class="relative overflow-hidden rounded-[2rem] bg-brand-teal-dark px-8 py-14 text-center sm:px-16">
                <div class="pointer-events-none absolute -left-10 -top-10 h-52 w-52 rounded-full bg-white/10"></div>
                <div class="pointer-events-none absolute -bottom-14 -right-10 h-60 w-60 rounded-full bg-white/10"></div>
                <h2 class="font-display text-3xl font-bold text-white sm:text-4xl">Train With an Instructor Who Gets You</h2>
                <p class="mx-auto mt-4 max-w-md text-sm text-white/80">
                    Book a class and meet the team in person — every instructor is happy to help you find the right fit.
                </p>
                <a href="{{ route('contact') }}" class="btn-primary mt-8">Book a Class</a>
            </div>
        </div>
    </section>

</x-frontend-layout>
