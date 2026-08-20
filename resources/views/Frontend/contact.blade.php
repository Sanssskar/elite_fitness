<x-frontend-layout :title="'Contact Us | Elite Fitness Studio'" :description="'Get in touch with Elite Fitness Studio to book a Zumba or Yoga class, ask about membership, or plan your visit.'">

    <x-page-banner eyebrow="Get In Touch" title="We'd Love to Hear From You" subtitle="Questions about classes, pricing, or your first visit? Reach out — we usually reply within a day." />

    {{-- CONTACT INFO CARDS --}}
    <section class="py-20">
        <div class="container">
            <div class="grid gap-6 sm:grid-cols-3">
                @php
                    $infoCards = [
                        ['title' => 'Visit the Studio', 'lines' => ['123 Wellness Avenue', 'Dharan, Koshi, Nepal']],
                        ['title' => 'Call or Email', 'lines' => ['+977 000-000000', 'hello@elitefitnessstudio.com']],
                        ['title' => 'Studio Hours', 'lines' => ['Mon – Sat: 6:00 AM – 8:00 PM', 'Sunday: Closed']],
                    ];
                @endphp
                @foreach ($infoCards as $card)
                    <div class="rounded-2xl bg-white p-7 shadow-sm ring-1 ring-black/5">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-wine/10 text-brand-wine">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21c-4.97-3.29-8-6.6-8-10.2A5.8 5.8 0 0 1 12 6a5.8 5.8 0 0 1 8 4.8c0 3.6-3.03 6.91-8 10.2z"/></svg>
                        </div>
                        <h3 class="mt-4 font-display text-base font-bold text-brand-ink">{{ $card['title'] }}</h3>
                        @foreach ($card['lines'] as $line)
                            <p class="mt-1 text-sm text-brand-ink/65">{{ $line }}</p>
                        @endforeach
                    </div>
                @endforeach
            </div>

            {{-- FORM + MAP --}}
            <div class="mt-14 grid gap-10 lg:grid-cols-2">
                {{-- Form (static, non-functional placeholder) --}}
                <div class="rounded-2xl bg-white p-8 shadow-sm ring-1 ring-black/5">
                    <h3 class="font-display text-xl font-bold text-brand-ink">Send Us a Message</h3>
                    <p class="mt-2 text-sm text-brand-ink/60">This form is a visual placeholder for now — no submission logic is wired up yet.</p>

                    <form class="mt-6 space-y-5" onsubmit="return false;">
                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label class="mb-1.5 block text-xs font-semibold text-brand-ink/70">Full Name</label>
                                <input type="text" placeholder="Your name"
                                       class="w-full rounded-xl border border-black/10 px-4 py-3 text-sm text-brand-ink placeholder:text-brand-ink/35 focus:border-brand-teal focus:outline-none focus:ring-2 focus:ring-brand-teal/20">
                            </div>
                            <div>
                                <label class="mb-1.5 block text-xs font-semibold text-brand-ink/70">Phone</label>
                                <input type="text" placeholder="Your phone number"
                                       class="w-full rounded-xl border border-black/10 px-4 py-3 text-sm text-brand-ink placeholder:text-brand-ink/35 focus:border-brand-teal focus:outline-none focus:ring-2 focus:ring-brand-teal/20">
                            </div>
                        </div>
                        <div>
                            <label class="mb-1.5 block text-xs font-semibold text-brand-ink/70">Email</label>
                            <input type="email" placeholder="you@example.com"
                                   class="w-full rounded-xl border border-black/10 px-4 py-3 text-sm text-brand-ink placeholder:text-brand-ink/35 focus:border-brand-teal focus:outline-none focus:ring-2 focus:ring-brand-teal/20">
                        </div>
                        <div>
                            <label class="mb-1.5 block text-xs font-semibold text-brand-ink/70">Interested In</label>
                            <select class="w-full rounded-xl border border-black/10 px-4 py-3 text-sm text-brand-ink focus:border-brand-teal focus:outline-none focus:ring-2 focus:ring-brand-teal/20">
                                <option>Zumba Classes</option>
                                <option>Yoga Classes</option>
                                <option>Membership Pricing</option>
                                <option>General Inquiry</option>
                            </select>
                        </div>
                        <div>
                            <label class="mb-1.5 block text-xs font-semibold text-brand-ink/70">Message</label>
                            <textarea rows="4" placeholder="Tell us a bit about what you're looking for"
                                      class="w-full rounded-xl border border-black/10 px-4 py-3 text-sm text-brand-ink placeholder:text-brand-ink/35 focus:border-brand-teal focus:outline-none focus:ring-2 focus:ring-brand-teal/20"></textarea>
                        </div>
                        <button type="submit" class="btn-primary w-full">Send Message</button>
                    </form>
                </div>

                {{-- Map placeholder --}}
                <div class="overflow-hidden rounded-2xl shadow-sm ring-1 ring-black/5">
                    <img src="https://placehold.co/800x900/3E5868/FFFFFF?text=Studio+Location+Map"
                         alt="Map to Elite Fitness Studio"
                         class="h-full w-full object-cover">
                </div>
            </div>
        </div>
    </section>

</x-frontend-layout>
