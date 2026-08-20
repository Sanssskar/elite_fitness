<x-frontend-layout :title="'About Us | Elite Fitness Studio'" :description="'Learn about Elite Fitness Studio\'s story, mission, and the values that shape every Zumba and Yoga class we teach.'">

    <x-page-banner eyebrow="About Elite" title="Our Story, Our Studio" subtitle="A space built on movement, community, and honest care for every member who walks through our doors."
        image="{{ asset('images/about-banner.jpg') }}" />

    {{-- OUR STORY --}}
    <section class="py-20">
        <div class="container grid items-center gap-14 lg:grid-cols-2">
            <div class="relative">
                <img src="{{ asset('images/yoga.jpg') }}"
                     alt="Elite Fitness Studio interior"
                     class="w-full rounded-2xl object-cover shadow-sm">

                {{-- floating marketing tags --}}
                <div class="absolute -bottom-5 animate-bounce -translate-x-5 left-0 flex items-center gap-2 rounded-full bg-white px-4 py-2 shadow-lg ring-1 ring-black/5">
                    <span class="flex h-7 w-7 items-center justify-center rounded-full bg-brand-wine/10 text-brand-wine">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21c-4.97-3.29-8-6.6-8-10.2A5.8 5.8 0 0 1 12 6a5.8 5.8 0 0 1 8 4.8c0 3.6-3.03 6.91-8 10.2z"/></svg>
                    </span>
                    <span class="text-xs font-semibold text-brand-ink">500+ Happy Members</span>
                </div>

                <div class="absolute -top-5 right-0 translate-x-5 animate-bounce flex items-center gap-2 rounded-full bg-brand-teal-dark px-4 py-2 shadow-lg">
                    <span class="flex h-7 w-7 items-center justify-center rounded-full bg-white/15 text-white">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    </span>
                    <span class="text-xs font-semibold text-white">Certified Instructors</span>
                </div>
            </div>
            <div>
                <span class="section-eyebrow">How We Started</span>
                <h2 class="font-display text-3xl font-bold text-brand-ink sm:text-4xl">Founded on the Belief That Fitness Should Feel Good</h2>
                <p class="mt-6 text-sm leading-relaxed text-brand-ink/70">
                    Elite Fitness Studio began with a simple idea: movement shouldn't be intimidating. We opened our doors
                    to bring two very different practices — the high-energy rhythm of Zumba and the calm discipline of
                    Yoga — together under one welcoming roof.
                </p>
                <p class="mt-4 text-sm leading-relaxed text-brand-ink/70">
                    Today, Elite is home to a growing community of members who show up not just to train, but to
                    reconnect with themselves. Every class is designed by certified instructors who care as much
                    about your form as they do about your confidence.
                </p>

            </div>
        </div>
    </section>

    {{-- MISSION & VALUES --}}
    <section class="bg-brand-teal-light py-20">
        <div class="container">
            <div class="mx-auto max-w-xl text-center">
                <span class="section-eyebrow">What Drives Us</span>
                <h2 class="font-display text-3xl font-bold text-brand-ink sm:text-4xl">Our Mission &amp; Values</h2>
            </div>

            <div class="mt-14 grid gap-8 md:grid-cols-3">
                @php
                    $values = [
                        ['title' => 'Inclusive Movement', 'text' => 'Every class is designed to meet you exactly where you are, no matter your fitness background.'],
                        ['title' => 'Real Expertise', 'text' => 'Certified instructors who continuously train so your sessions stay safe, effective, and current.'],
                        ['title' => 'Genuine Community', 'text' => 'A studio culture built on encouragement, not comparison — we grow stronger together.'],
                    ];
                @endphp
                @foreach ($values as $value)
                    <div class="rounded-2xl bg-white p-8 shadow-sm ring-1 ring-black/5 text-center">
                        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-brand-wine/10 text-brand-wine">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21c-4.97-3.29-8-6.6-8-10.2A5.8 5.8 0 0 1 12 6a5.8 5.8 0 0 1 8 4.8c0 3.6-3.03 6.91-8 10.2z"/></svg>
                        </div>
                        <h3 class="mt-4 font-display text-lg font-bold text-brand-ink">{{ $value['title'] }}</h3>
                        <p class="mt-3 text-sm leading-relaxed text-brand-ink/65">{{ $value['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SERVICES PREVIEW --}}
    <section class="py-20">
        <div class="container">
            <div class="mx-auto max-w-xl text-center">
                <span class="section-eyebrow">What We Offer</span>
                <h2 class="font-display text-3xl font-bold text-brand-ink sm:text-4xl">Explore Our Classes</h2>
                <p class="mt-4 text-sm leading-relaxed text-brand-ink/65">
                    From high-energy Zumba to grounding Yoga, find the practice that fits your goals.
                </p>
            </div>

            <div class="mt-14 grid gap-8 md:grid-cols-2">
                <div class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-black/5 transition hover:shadow-lg">
                    <div class="overflow-hidden">
                        <img src="https://placehold.co/700x420/8E1C54/FFFFFF?text=Zumba"
                             alt="Zumba classes"
                             class="h-56 w-full object-cover transition duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-8">
                        <h3 class="font-display text-xl font-bold text-brand-ink">Zumba</h3>
                        <p class="mt-3 text-sm leading-relaxed text-brand-ink/70">High-energy dance workouts set to music that make every session feel like a party.</p>
                        <a href="{{ route('services') }}" class="mt-5 inline-flex items-center gap-1 text-sm font-semibold text-brand-wine">
                            Explore Zumba
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>
                <div class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-black/5 transition hover:shadow-lg">
                    <div class="overflow-hidden">
                        <img src="https://placehold.co/700x420/3E5868/FFFFFF?text=Yoga"
                             alt="Yoga classes"
                             class="h-56 w-full object-cover transition duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-8">
                        <h3 class="font-display text-xl font-bold text-brand-ink">Yoga</h3>
                        <p class="mt-3 text-sm leading-relaxed text-brand-ink/70">Calm, guided practice that builds flexibility, strength, and a clearer mind.</p>
                        <a href="{{ route('services') }}" class="mt-5 inline-flex items-center gap-1 text-sm font-semibold text-brand-wine">
                            Explore Yoga
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-10 text-center">
                <a href="{{ route('services') }}" class="btn-primary">View All Services</a>
            </div>
        </div>
    </section>

    {{-- INSTRUCTOR TEASER --}}
    <section class="bg-brand-teal-light py-20">
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

    {{-- GALLERY PREVIEW --}}
    <section class="py-20">
        <div class="container">
            <div class="mx-auto max-w-xl text-center">
                <span class="section-eyebrow">Take A Look</span>
                <h2 class="font-display text-3xl font-bold text-brand-ink sm:text-4xl">Life Inside the Studio</h2>
                <p class="mt-4 text-sm leading-relaxed text-brand-ink/65">
                    A glimpse into our classes, our space, and the community that makes Elite what it is.
                </p>
            </div>

            <div class="mt-14 grid grid-cols-2 gap-4 sm:grid-cols-4">
                <img src="https://placehold.co/400x500/8E1C54/FFFFFF?text=Studio"
                     alt="Studio space" class="h-full w-full rounded-2xl object-cover shadow-sm">
                <img src="https://placehold.co/400x500/3E5868/FFFFFF?text=Zumba"
                     alt="Zumba class in session" class="h-full w-full rounded-2xl object-cover shadow-sm">
                <img src="https://placehold.co/400x500/3E5868/FFFFFF?text=Yoga"
                     alt="Yoga class in session" class="h-full w-full rounded-2xl object-cover shadow-sm">
                <img src="https://placehold.co/400x500/8E1C54/FFFFFF?text=Community"
                     alt="Studio community" class="h-full w-full rounded-2xl object-cover shadow-sm">
            </div>

            <div class="mt-10 text-center">
                <a href="{{ route('gallery') }}" class="btn-primary">View Full Gallery</a>
            </div>
        </div>
    </section>

</x-frontend-layout>
