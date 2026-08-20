<x-frontend-layout :title="'Gallery | Elite Fitness Studio'" :description="'Browse photos from Zumba and Yoga classes, events, and the studio space at Elite Fitness Studio.'">

    <x-page-banner eyebrow="Take a Look" title="Studio Gallery" subtitle="A peek into our classes, our space, and the community that makes Elite what it is." />

    {{-- MASONRY GALLERY --}}
    <section class="py-20">
        <div class="container">
            @php
                $photos = [
                    ['src' => 'https://placehold.co/600x800/8E1C54/FFFFFF?text=Zumba+Class', 'alt' => 'Zumba class in session'],
                    ['src' => 'https://placehold.co/600x450/105F60/FFFFFF?text=Yoga+Flow', 'alt' => 'Yoga flow session'],
                    ['src' => 'https://placehold.co/600x700/3E5868/FFFFFF?text=Studio+Space', 'alt' => 'Elite Fitness Studio interior'],
                    ['src' => 'https://placehold.co/600x500/9C2B6B/FFFFFF?text=Group+Warm-Up', 'alt' => 'Group warm-up before class'],
                    ['src' => 'https://placehold.co/600x780/105F60/FFFFFF?text=Restorative+Yoga', 'alt' => 'Restorative Yoga session'],
                    ['src' => 'https://placehold.co/600x480/8E1C54/FFFFFF?text=Zumba+Toning', 'alt' => 'Zumba Toning class'],
                    ['src' => 'https://placehold.co/600x640/3E5868/FFFFFF?text=Instructor+Led+Session', 'alt' => 'Instructor guiding a session'],
                    ['src' => 'https://placehold.co/600x520/9C2B6B/FFFFFF?text=Community+Event', 'alt' => 'Studio community event'],
                    ['src' => 'https://placehold.co/600x760/105F60/FFFFFF?text=Hatha+Yoga', 'alt' => 'Hatha Yoga class'],
                    ['src' => 'https://placehold.co/600x460/8E1C54/FFFFFF?text=Cardio+Dance', 'alt' => 'Cardio dance session'],
                    ['src' => 'https://placehold.co/600x700/3E5868/FFFFFF?text=Reception+Area', 'alt' => 'Studio reception area'],
                    ['src' => 'https://placehold.co/600x560/9C2B6B/FFFFFF?text=Vinyasa+Flow', 'alt' => 'Vinyasa Flow class'],
                ];
            @endphp

            <div class="columns-1 sm:columns-2 lg:columns-3 [column-gap:0px] [column-fill:_balance]">
                @foreach ($photos as $photo)
                    <button type="button"
                            class="gallery-item block w-full overflow-hidden"
                            data-full="{{ $photo['src'] }}" data-alt="{{ $photo['alt'] }}">
                        <img src="{{ $photo['src'] }}" alt="{{ $photo['alt'] }}" loading="lazy" class="block w-full h-auto align-bottom">
                    </button>
                @endforeach
            </div>

            <p class="mt-8 text-center text-xs text-brand-ink/50">Placeholder photos — swap these out for real studio shots any time.</p>
        </div>
    </section>

    {{-- LIGHTBOX --}}
    <div id="lightbox" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/85 p-6">
        <button type="button" id="lightboxClose" aria-label="Close"
                class="absolute right-5 top-5 flex h-10 w-10 items-center justify-center rounded-full bg-white/10 text-white transition hover:bg-white/20">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
        <img id="lightboxImg" src="" alt="" class="max-h-[85vh] max-w-[90vw] rounded-xl object-contain shadow-2xl">
    </div>

    <script>
        (function () {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightboxImg');
            const closeBtn = document.getElementById('lightboxClose');
            const items = document.querySelectorAll('.gallery-item');

            function open(src, alt) {
                lightboxImg.src = src;
                lightboxImg.alt = alt;
                lightbox.classList.remove('hidden');
                lightbox.classList.add('flex');
                document.body.style.overflow = 'hidden';
            }

            function close() {
                lightbox.classList.add('hidden');
                lightbox.classList.remove('flex');
                document.body.style.overflow = '';
            }

            items.forEach(function (item) {
                item.addEventListener('click', function () {
                    open(item.dataset.full, item.dataset.alt);
                });
            });

            closeBtn.addEventListener('click', close);
            lightbox.addEventListener('click', function (e) {
                if (e.target === lightbox) close();
            });
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') close();
            });
        })();
    </script>

</x-frontend-layout>
