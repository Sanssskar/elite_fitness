<x-frontend-layout :title="'Contact Us | Elite Fitness Studio'" :description="'Get in touch with Elite Fitness Studio to book a Zumba or Yoga class, ask about membership, or plan your visit.'">

    <x-page-banner eyebrow="Get In Touch" title="We'd Love to Hear From You"
        subtitle="Questions about classes, pricing, or your first visit? Reach out — we usually reply within a day."
        image="{{ asset('images/contact-banner.jpg') }}" />

    <section class="py-20">
        <div class="container">

            {{-- FORM + MAP --}}
            <div class="grid gap-10 lg:grid-cols-2">
                {{-- Form (submits to the contacts table) --}}
                <div class="rounded-2xl bg-white p-8 shadow-sm ring-1 ring-black/5">
                    <h3 class="font-display text-xl font-bold text-brand-ink">Send Us a Message</h3>
                    <p class="mt-2 text-sm text-brand-ink/60">We'll get back to you as soon as we can.</p>

                    @if (session('success'))
                        <div class="mt-5 rounded-xl bg-brand-teal-light px-4 py-3 text-sm font-medium text-brand-teal">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.submit') }}" class="mt-6 space-y-5">
                        @csrf
                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label class="mb-1.5 block text-xs font-semibold text-brand-ink/70">Full Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Your name"
                                    class="w-full rounded-xl border border-black/10 px-4 py-3 text-sm text-brand-ink placeholder:text-brand-ink/35 focus:border-brand-teal focus:outline-none focus:ring-2 focus:ring-brand-teal/20">
                                @error('name')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="mb-1.5 block text-xs font-semibold text-brand-ink/70">Phone</label>
                                <input type="text" name="phone" value="{{ old('phone') }}"
                                    placeholder="Your phone number"
                                    class="w-full rounded-xl border border-black/10 px-4 py-3 text-sm text-brand-ink placeholder:text-brand-ink/35 focus:border-brand-teal focus:outline-none focus:ring-2 focus:ring-brand-teal/20">
                                @error('phone')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label class="mb-1.5 block text-xs font-semibold text-brand-ink/70">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                placeholder="you@example.com"
                                class="w-full rounded-xl border border-black/10 px-4 py-3 text-sm text-brand-ink placeholder:text-brand-ink/35 focus:border-brand-teal focus:outline-none focus:ring-2 focus:ring-brand-teal/20">
                            @error('email')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="mb-1.5 block text-xs font-semibold text-brand-ink/70">Interested In</label>
                            <select name="interested_in"
                                class="w-full rounded-xl border border-black/10 px-4 py-3 text-sm text-brand-ink focus:border-brand-teal focus:outline-none focus:ring-2 focus:ring-brand-teal/20">
                                <option value="" disabled {{ old('interested_in') ? '' : 'selected' }}>Select an
                                    option</option>
                                @foreach (['Zumba Classes', 'Yoga Classes', 'Membership Pricing', 'General Inquiry'] as $option)
                                    <option value="{{ $option }}"
                                        {{ old('interested_in') === $option ? 'selected' : '' }}>{{ $option }}
                                    </option>
                                @endforeach
                            </select>
                            @error('interested_in')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="mb-1.5 block text-xs font-semibold text-brand-ink/70">Message</label>
                            <textarea name="message" rows="4" placeholder="Tell us a bit about what you're looking for"
                                class="w-full rounded-xl border border-black/10 px-4 py-3 text-sm text-brand-ink placeholder:text-brand-ink/35 focus:border-brand-teal focus:outline-none focus:ring-2 focus:ring-brand-teal/20">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn-primary w-full">Send Message</button>
                    </form>
                </div>

                {{-- Map (responsive — fills the card, no fixed pixel size) --}}
                <div class="h-full min-h-[420px] overflow-hidden rounded-2xl shadow-sm ring-1 ring-black/5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d222.56279015630642!2d87.28227637556975!3d26.807980805490452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef41e0470c810f%3A0xa786999eae87f16d!2sBartang%20Khim!5e0!3m2!1sen!2sus!4v1787225914567!5m2!1sen!2sus"
                        class="h-full w-full min-h-[420px]" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
            </div>

            {{-- CONTACT INFO CARDS --}}
            <div class="mt-14 grid gap-6 sm:grid-cols-3">
                @php
                    // No settings table exists for this yet — still static. Say the word and I'll add one.
$infoCards = [
    ['title' => 'Visit the Studio', 'lines' => ['123 Wellness Avenue', 'Dharan, Koshi, Nepal']],
    ['title' => 'Call or Email', 'lines' => ['+977 000-000000', 'hello@elitefitnessstudio.com']],
    ['title' => 'Studio Hours', 'lines' => ['Mon – Sat: 6:00 AM – 8:00 PM', 'Sunday: Closed']],
                    ];
                @endphp
                @foreach ($infoCards as $card)
                    <div class="rounded-2xl bg-white p-7 shadow-sm ring-1 ring-black/5">
                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-wine/10 text-brand-wine">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 21c-4.97-3.29-8-6.6-8-10.2A5.8 5.8 0 0 1 12 6a5.8 5.8 0 0 1 8 4.8c0 3.6-3.03 6.91-8 10.2z" />
                            </svg>
                        </div>
                        <h3 class="mt-4 font-display text-base font-bold text-brand-ink">{{ $card['title'] }}</h3>
                        @foreach ($card['lines'] as $line)
                            <p class="mt-1 text-sm text-brand-ink/65">{{ $line }}</p>
                        @endforeach
                    </div>
                @endforeach
            </div>

        </div>
    </section>

</x-frontend-layout>
