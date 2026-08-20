<x-frontend-layout :title="'Instructors | Elite Fitness Studio'" :description="'Meet the certified Zumba and Yoga instructors at Elite Fitness Studio.'">

    <x-page-banner eyebrow="Our Team" title="Meet Your Instructors" subtitle="Certified, experienced, and genuinely invested in helping you move better every class." />

    {{-- INSTRUCTOR GRID --}}
    <section class="py-20">
        <div class="container">
            <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
                @php
                    $instructors = [
                        [
                            'name' => 'Priya Basnet',
                            'role' => 'Lead Zumba Instructor',
                            'bio' => 'Licensed Zumba instructor with 6+ years of experience building high-energy, welcoming classes for every fitness level.',
                            'tags' => ['Zumba Fitness', 'Zumba Toning'],
                            'color' => '8E1C54',
                        ],
                        [
                            'name' => 'Arjun Rai',
                            'role' => 'Senior Yoga Instructor',
                            'bio' => 'Certified 500-hour Yoga teacher specializing in Hatha and Vinyasa, focused on safe alignment and breath-led practice.',
                            'tags' => ['Hatha Yoga', 'Vinyasa Flow'],
                            'color' => '105F60',
                        ],
                        [
                            'name' => 'Sujata Koirala',
                            'role' => 'Restorative Yoga & Wellness',
                            'bio' => 'Guides slow, restorative sessions designed to relieve stress and support recovery for members of all ages.',
                            'tags' => ['Restorative Yoga', 'Breathwork'],
                            'color' => '3E5868',
                        ],
                        [
                            'name' => 'Nabin Thapa',
                            'role' => 'Zumba & Conditioning Coach',
                            'bio' => 'Combines dance fitness with strength conditioning to help members build stamina alongside rhythm and coordination.',
                            'tags' => ['Zumba Beginners', 'Conditioning'],
                            'color' => '9C2B6B',
                        ],
                    ];
                @endphp

                @foreach ($instructors as $person)
                    <div class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-black/5 transition hover:shadow-lg">
                        <div class="overflow-hidden">
                            <img src="https://placehold.co/560x600/{{ $person['color'] }}/FFFFFF?text={{ urlencode($person['name']) }}"
                                 alt="{{ $person['name'] }}"
                                 class="h-64 w-full object-cover transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-6">
                            <h3 class="font-display text-lg font-bold text-brand-ink">{{ $person['name'] }}</h3>
                            <p class="text-xs font-semibold uppercase tracking-wide text-brand-wine">{{ $person['role'] }}</p>
                            <p class="mt-3 text-sm leading-relaxed text-brand-ink/65">{{ $person['bio'] }}</p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                @foreach ($person['tags'] as $tag)
                                    <span class="rounded-full bg-brand-teal-light px-3 py-1 text-[11px] font-semibold text-brand-teal">{{ $tag }}</span>
                                @endforeach
                            </div>
                            <div class="mt-5 flex gap-3 border-t border-black/5 pt-4">
                                <a href="#" class="flex h-8 w-8 items-center justify-center rounded-full bg-brand-ink/5 text-brand-ink/60 hover:bg-brand-wine hover:text-white transition" aria-label="Instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.58.01 4.85.07 1.17.05 1.97.24 2.43.4a4.9 4.9 0 0 1 1.77 1.15 4.9 4.9 0 0 1 1.15 1.77c.16.46.35 1.26.4 2.43.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.24 1.97-.4 2.43a4.9 4.9 0 0 1-1.15 1.77 4.9 4.9 0 0 1-1.77 1.15c-.46.16-1.26.35-2.43.4-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.97-.24-2.43-.4a4.9 4.9 0 0 1-1.77-1.15 4.9 4.9 0 0 1-1.15-1.77c-.16-.46-.35-1.26-.4-2.43C2.21 15.58 2.2 15.2 2.2 12s.01-3.58.07-4.85c.05-1.17.24-1.97.4-2.43a4.9 4.9 0 0 1 1.15-1.77A4.9 4.9 0 0 1 5.59 1.8c.46-.16 1.26-.35 2.43-.4C9.29 1.34 9.67 1.33 12 1.33m0 5.13a5.54 5.54 0 1 0 0 11.08 5.54 5.54 0 0 0 0-11.08m0 9.14a3.6 3.6 0 1 1 0-7.2 3.6 3.6 0 0 1 0 7.2m5.76-9.36a1.3 1.3 0 1 1-2.6 0 1.3 1.3 0 0 1 2.6 0"/></svg>
                                </a>
                                <a href="#" class="flex h-8 w-8 items-center justify-center rounded-full bg-brand-ink/5 text-brand-ink/60 hover:bg-brand-wine hover:text-white transition" aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.78-3.89 1.1 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0 0 22 12"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
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
