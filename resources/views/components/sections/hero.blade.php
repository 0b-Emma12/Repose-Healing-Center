<section
    class="relative h-[85vh] min-h-[600px] w-full overflow-hidden bg-slate-900"
    x-data="{
        activeSlide: 0,
        slides: [
            'https://images.unsplash.com/photo-1527137342181-19aab11a8ee8?auto=format&fit=crop&w=2000&q=80',
            'https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&w=2000&q=80',
            'https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&w=2000&q=80',
            'https://images.unsplash.com/photo-1520694478166-daaaaec95b69?auto=format&fit=crop&w=2000&q=80'
        ],
        timer: null,
        next() {
            this.activeSlide = (this.activeSlide + 1) % this.slides.length;
        },
        prev() {
            this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length;
        },
        start() {
            this.timer = setInterval(() => this.next(), 6000);
        },
        stop() {
            clearInterval(this.timer);
        }
    }"
    x-init="start()"
    @mouseenter="stop()"
    @mouseleave="start()"
>
    <!-- Background Images -->
    <template x-for="(image, index) in slides" :key="index">
        <img
            :src="image"
            alt="Hero background"
            class="absolute inset-0 h-full w-full object-cover transition-opacity duration-1000"
            :class="activeSlide === index ? 'opacity-40' : 'opacity-0'"
        />
    </template>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900/80 to-transparent"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>

    <!-- Content -->
    <div class="container-site relative flex h-full flex-col justify-center pb-12 pt-20">
        <div class="max-w-2xl">
            <span class="inline-block bg-green-600 px-4 py-1.5 text-sm font-bold uppercase tracking-[0.2em] text-white">
                Restoring Lives
            </span>

            <h1 class="mt-6 text-5xl font-extrabold uppercase leading-[1.1] tracking-tight text-white md:text-6xl lg:text-7xl">
                Advocacy.<br />
                Prevention.<br />
                <span class="text-yellow-500">Care.</span>
            </h1>



            <div class="mt-10 flex flex-wrap items-center gap-4">
                <a href="{{ route('get-started') }}" class="focus-ring inline-flex items-center gap-2 rounded bg-yellow-500 px-8 py-4 text-[15px] font-bold uppercase tracking-widest text-slate-900 transition hover:bg-yellow-400 hover:-translate-y-1">
                    Get Support
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
                <a href="{{ route('contact') }}" class="focus-ring inline-flex items-center gap-2 rounded border-2 border-white bg-transparent px-8 py-4 text-[15px] font-bold uppercase tracking-widest text-white transition hover:bg-white hover:text-slate-900 hover:-translate-y-1">
                    Contact Us
                </a>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <div class="absolute bottom-12 right-6 z-10 flex items-center gap-6 sm:right-12">
        <div class="flex items-center gap-3">
            <template x-for="(image, index) in slides" :key="index">
                <button
                    @click="activeSlide = index"
                    class="h-2 rounded-full transition-all"
                    :class="activeSlide === index ? 'w-8 bg-green-500' : 'w-2 bg-white/30 hover:bg-white/50'"
                    :aria-label="'Go to slide ' + (index + 1)"
                ></button>
            </template>
        </div>

        <div class="flex gap-2">
            <button @click="prev()" class="flex h-12 w-12 items-center justify-center rounded-full border border-white/20 bg-white/5 text-white backdrop-blur-md transition hover:bg-white/20" aria-label="Previous slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
            </button>
            <button @click="next()" class="flex h-12 w-12 items-center justify-center rounded-full border border-white/20 bg-white/5 text-white backdrop-blur-md transition hover:bg-white/20" aria-label="Next slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </button>
        </div>
    </div>

    @include('components.ui.separator', ['color' => 'text-slate-900'])
</section>
