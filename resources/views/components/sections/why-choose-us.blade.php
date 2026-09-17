<section class="section-space bg-slate-50">
  <div class="container-site">
    <div class="grid gap-12 lg:grid-cols-[1.1fr_0.9fr] lg:gap-20">
      <div class="flex flex-col justify-center">
        @include('components.ui.section-title', [
            'eyebrow' => 'WHY CHOOSE US',
            'title' => 'A Safe Environment',
            'accent' => 'For Recovery',
            'description' => 'Repose Healing Center provides a structured and supportive environment designed to help individuals on their journey to wellness.',
            'align' => 'left'
        ])

        <div class="mt-8 space-y-6">
          @php
            $features = [
              'Confidential engagement' => 'We prioritize privacy and treat all interactions with appropriate care and respect.',
              'Professional rehabilitation' => 'Evidence-based approaches to support individuals seeking rehabilitation and mental wellness.',
              'Focus on dignity' => 'Care designed around individual needs, promoting safety and self-worth.',
              'Accessible support' => 'Clear information and guidance to help people make informed decisions about their care.',
            ];
          @endphp

          @foreach($features as $title => $text)
            <div class="flex gap-4">
              <div class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-green-100 text-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
              </div>
              <div>
                <h3 class="font-bold text-slate-900">{{ $title }}</h3>
                <p class="mt-1 text-sm leading-6 text-slate-600">{{ $text }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      <div class="relative">
        <div class="absolute -left-6 -top-6 h-64 w-64 rounded-full bg-green-100/50 blur-3xl"></div>
        <img
          src="https://images.unsplash.com/photo-1527613426441-4da17471b66d?auto=format&fit=crop&w=1200&q=85"
          alt="Professional care environment"
          class="relative z-10 h-full min-h-[500px] w-full rounded-2xl object-cover shadow-2xl"
        />
      </div>
    </div>
  </div>
</section>
