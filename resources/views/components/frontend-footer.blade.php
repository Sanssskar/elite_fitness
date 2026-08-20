<footer class="bg-brand-teal-dark text-white">
    <div class="container py-16">
        <div class="grid gap-12 lg:grid-cols-[1.3fr_1fr_1fr_1.2fr]">

            {{-- Brand --}}
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <span class="font-display text-2xl font-bold tracking-wide text-white">ELITE</span>
                    <span class="flex flex-col leading-[0.85] pl-2 border-l border-white/30">
                        <span class="text-[10px] font-semibold tracking-[0.2em]">FITNESS</span>
                        <span class="text-[10px] font-semibold tracking-[0.2em]">STUDIO</span>
                    </span>
                </div>
                <p class="text-sm text-white/70 leading-relaxed max-w-xs">
                    A calm, welcoming studio where Zumba and Yoga come together to help you build strength, flexibility, and a healthier daily rhythm.
                </p>
                <div class="flex gap-3 mt-6">
                    <a href="#" class="flex h-9 w-9 items-center justify-center rounded-full bg-white/10 hover:bg-brand-wine transition" aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.78-3.89 1.1 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0 0 22 12"/></svg>
                    </a>
                    <a href="#" class="flex h-9 w-9 items-center justify-center rounded-full bg-white/10 hover:bg-brand-wine transition" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.58.01 4.85.07 1.17.05 1.97.24 2.43.4a4.9 4.9 0 0 1 1.77 1.15 4.9 4.9 0 0 1 1.15 1.77c.16.46.35 1.26.4 2.43.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.24 1.97-.4 2.43a4.9 4.9 0 0 1-1.15 1.77 4.9 4.9 0 0 1-1.77 1.15c-.46.16-1.26.35-2.43.4-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.97-.24-2.43-.4a4.9 4.9 0 0 1-1.77-1.15 4.9 4.9 0 0 1-1.15-1.77c-.16-.46-.35-1.26-.4-2.43C2.21 15.58 2.2 15.2 2.2 12s.01-3.58.07-4.85c.05-1.17.24-1.97.4-2.43a4.9 4.9 0 0 1 1.15-1.77A4.9 4.9 0 0 1 5.59 1.8c.46-.16 1.26-.35 2.43-.4C9.29 1.34 9.67 1.33 12 1.33m0 5.13a5.54 5.54 0 1 0 0 11.08 5.54 5.54 0 0 0 0-11.08m0 9.14a3.6 3.6 0 1 1 0-7.2 3.6 3.6 0 0 1 0 7.2m5.76-9.36a1.3 1.3 0 1 1-2.6 0 1.3 1.3 0 0 1 2.6 0"/></svg>
                    </a>
                    <a href="#" class="flex h-9 w-9 items-center justify-center rounded-full bg-white/10 hover:bg-brand-wine transition" aria-label="YouTube">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.5 6.19a3.02 3.02 0 0 0-2.12-2.14C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.38.55A3.02 3.02 0 0 0 .5 6.19 31.6 31.6 0 0 0 0 12a31.6 31.6 0 0 0 .5 5.81 3.02 3.02 0 0 0 2.12 2.14c1.88.55 9.38.55 9.38.55s7.5 0 9.38-.55a3.02 3.02 0 0 0 2.12-2.14A31.6 31.6 0 0 0 24 12a31.6 31.6 0 0 0-.5-5.81M9.6 15.5v-7l6.27 3.5Z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Quick links --}}
            <div>
                <h3 class="font-display text-lg font-semibold mb-5">Quick Links</h3>
                <ul class="space-y-3 text-sm text-white/75">
                    <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-white transition">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-white transition">Services</a></li>
                    <li><a href="{{ route('instructor') }}" class="hover:text-white transition">Instructor</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact</a></li>
                </ul>
            </div>

            {{-- Classes --}}
            <div>
                <h3 class="font-display text-lg font-semibold mb-5">Our Classes</h3>
                <ul class="space-y-3 text-sm text-white/75">
                    <li>Zumba Fitness</li>
                    <li>Zumba for Beginners</li>
                    <li>Hatha Yoga</li>
                    <li>Vinyasa Flow</li>
                    <li>Restorative Yoga</li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="font-display text-lg font-semibold mb-5">Visit the Studio</h3>
                <ul class="space-y-3 text-sm text-white/75">
                    <li>123 Wellness Avenue, Dharan, Nepal</li>
                    <li>+977 000-000000</li>
                    <li>hello&#64;elitefitnessstudio.com</li>
                    <li>Mon &ndash; Sat: 6:00 AM &ndash; 8:00 PM</li>
                </ul>
            </div>
        </div>

        <div class="mt-14 flex flex-col-reverse gap-4 border-t border-white/10 pt-6 text-xs text-white/50 sm:flex-row sm:items-center sm:justify-between">
            <p>&copy; {{ date('Y') }} Elite Fitness Studio. All rights reserved.</p>
            <p>Placeholder contact details — update in <span class="text-white/70">frontend-footer.blade.php</span></p>
        </div>
    </div>
</footer>
