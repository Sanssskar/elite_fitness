<x-frontend-layout :title="'About Us | Elite Fitness Studio'" :description="'Learn about Elite Fitness Studio\'s story, mission, and the values that shape every Zumba and Yoga class we teach.'">

    <x-page-banner eyebrow="About Elite" title="Our Story, Our Studio" subtitle="A space built on movement, community, and honest care for every member who walks through our doors."
        image="{{ asset('images/about-banner.jpg') }}" />

    {{-- OUR STORY --}}
    <section class="py-20">
        <div class="container grid items-center gap-14 lg:grid-cols-2">
            <img src="{{ asset('images/about-banner.jpg') }}"
                 alt="Elite Fitness Studio interior"
                 class="rounded-2xl object-cover shadow-sm">
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
                <div class="mt-8 grid grid-cols-3 gap-6 border-t border-black/10 pt-6">
                    <div>
                        <p class="font-display text-2xl font-bold text-brand-wine">5+</p>
                        <p class="text-xs text-brand-ink/60">Years of Service</p>
                    </div>
                    <div>
                        <p class="font-display text-2xl font-bold text-brand-wine">500+</p>
                        <p class="text-xs text-brand-ink/60">Members Trained</p>
                    </div>
                    <div>
                        <p class="font-display text-2xl font-bold text-brand-wine">4</p>
                        <p class="text-xs text-brand-ink/60">Expert Instructors</p>
                    </div>
                </div>
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

    {{-- CTA --}}
    <section class="py-20">
        <div class="container">
            <div class="relative overflow-hidden rounded-[2rem] bg-brand-teal-dark px-8 py-14 text-center sm:px-16">
                <div class="pointer-events-none absolute -left-10 -top-10 h-52 w-52 rounded-full bg-white/10"></div>
                <div class="pointer-events-none absolute -bottom-14 -right-10 h-60 w-60 rounded-full bg-white/10"></div>
                <h2 class="font-display text-3xl font-bold text-white sm:text-4xl">Come Experience Elite for Yourself</h2>
                <p class="mx-auto mt-4 max-w-md text-sm text-white/80">
                    The best way to understand our studio is to step onto the mat or the dance floor with us.
                </p>
                <a href="{{ route('contact') }}" class="btn-primary mt-8">Plan Your Visit</a>
            </div>
        </div>
    </section>

</x-frontend-layout>
