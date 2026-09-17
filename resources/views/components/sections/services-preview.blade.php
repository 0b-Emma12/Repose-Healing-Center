<section class="section-space bg-white">
  <div class="container-site">
    @include('components.ui.section-title', [
        'eyebrow' => 'SERVICES & SUPPORT',
        'title' => 'Care Designed',
        'accent' => 'Around You',
        'description' => 'Our services are presented around the needs of individuals seeking rehabilitation, mental wellness and supportive care.',
        'align' => 'center'
    ])

    <div class="mt-14 grid gap-7 md:grid-cols-3">
      <!-- Card 1 -->
      <article class="group border border-slate-200 bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
        <div class="mb-7 flex h-16 w-16 items-center justify-center bg-green-50 text-green-600 transition group-hover:bg-green-600 group-hover:text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/><path d="M12 13h2"/><path d="M12 13.5v-2"/></svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900">Rehabilitation Support</h3>
        <p class="mt-4 leading-7 text-slate-600">Support focused on rehabilitation and helping individuals work toward healthier and more stable lives.</p>
        <a href="{{ route('services') }}" class="mt-7 inline-flex items-center gap-2 text-sm font-bold uppercase tracking-wide text-green-600">
          Learn more
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
      </article>

      <!-- Card 2 -->
      <article class="group border border-slate-200 bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
        <div class="mb-7 flex h-16 w-16 items-center justify-center bg-green-50 text-green-600 transition group-hover:bg-green-600 group-hover:text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2-1 4-2 8-4 4 2 6 3 8 4a1 1 0 0 1 1 1v7z"/><path d="m9 12 2 2 4-4"/></svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900">Mental Wellness</h3>
        <p class="mt-4 leading-7 text-slate-600">A safe environment where individuals can seek appropriate support for their mental and emotional wellbeing.</p>
        <a href="{{ route('services') }}" class="mt-7 inline-flex items-center gap-2 text-sm font-bold uppercase tracking-wide text-green-600">
          Learn more
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
      </article>

      <!-- Card 3 -->
      <article class="group border border-slate-200 bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
        <div class="mb-7 flex h-16 w-16 items-center justify-center bg-green-50 text-green-600 transition group-hover:bg-green-600 group-hover:text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><line x1="4.93" x2="9.17" y1="4.93" y2="9.17"/><line x1="14.83" x2="19.07" y1="14.83" y2="19.07"/><line x1="14.83" x2="19.07" y1="9.17" y2="4.93"/><line x1="14.83" x2="18.36" y1="9.17" y2="5.64"/><line x1="4.93" x2="9.17" y1="19.07" y2="14.83"/></svg>
        </div>
        <h3 class="text-xl font-bold text-slate-900">Support & Advocacy</h3>
        <p class="mt-4 leading-7 text-slate-600">Compassionate support and advocacy that promotes dignity, safety and access to appropriate care.</p>
        <a href="{{ route('services') }}" class="mt-7 inline-flex items-center gap-2 text-sm font-bold uppercase tracking-wide text-green-600">
          Learn more
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
      </article>
    </div>
  </div>
</section>
