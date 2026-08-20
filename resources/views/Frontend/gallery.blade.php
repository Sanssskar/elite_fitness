<x-frontend-layout :title="'Gallery | Elite Fitness Studio'" :description="'Browse photos from Zumba and Yoga classes, events, and the studio space at Elite Fitness Studio.'">

    <x-page-banner eyebrow="Take a Look" title="Studio Gallery" subtitle="A peek into our classes, our space, and the community that makes Elite what it is." />

    {{-- MASONRY GALLERY --}}
    <section class="py-20">
        <div class="container">
            @if ($photos->isNotEmpty())
                @if ($categories->count() > 1)
                    <div class="mb-10 flex flex-wrap justify-center gap-2" id="galleryFilters">
                        <button type="button" data-filter="all" class="gallery-filter-btn is-active rounded-full px-5 py-2 text-xs font-semibold uppercase tracking-wide transition">All</button>
                        @foreach ($categories as $category)
                            <button type="button" data-filter="{{ $category }}" class="gallery-filter-btn rounded-full px-5 py-2 text-xs font-semibold uppercase tracking-wide transition">{{ $category }}</button>
                        @endforeach
                    </div>
                @endif

                <div class="columns-1 sm:columns-2 lg:columns-3 [column-gap:0px] [column-fill:_balance]" id="galleryGrid">
                    @foreach ($photos as $photo)
                        <button type="button"
                                class="gallery-item block w-full overflow-hidden"
                                data-category="{{ $photo->category }}"
                                data-full="{{ asset('storage/' . $photo->image) }}" data-alt="{{ $photo->alt_text ?? $photo->title }}">
                            <img src="{{ asset('storage/' . $photo->image) }}" alt="{{ $photo->alt_text ?? $photo->title }}" loading="lazy" class="block w-full h-auto align-bottom">
                        </button>
                    @endforeach
                </div>
            @else
                <p class="text-center text-sm text-brand-ink/50">Add photos in the admin panel and they'll appear here.</p>
            @endif
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

    <style>
        .gallery-filter-btn { background: rgba(0,0,0,.05); color: rgba(20,20,20,.6); }
        .gallery-filter-btn.is-active { background: var(--color-brand-wine, #8E1C54); color: #fff; }
    </style>

    <script>
        (function () {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightboxImg');
            const closeBtn = document.getElementById('lightboxClose');
            const items = document.querySelectorAll('.gallery-item');
            const filterBtns = document.querySelectorAll('.gallery-filter-btn');

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

            filterBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    filterBtns.forEach(function (b) { b.classList.remove('is-active'); });
                    btn.classList.add('is-active');

                    const filter = btn.dataset.filter;
                    items.forEach(function (item) {
                        const show = filter === 'all' || item.dataset.category === filter;
                        item.style.display = show ? '' : 'none';
                    });
                });
            });
        })();
    </script>

</x-frontend-layout>
