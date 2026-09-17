<section class="section-space bg-slate-950 text-white">
  <div class="container-site">
    <div class="mx-auto max-w-2xl text-center">
      <p class="text-sm font-bold uppercase tracking-[0.2em] text-green-500">
        Get in touch
      </p>

      <h2 class="mt-3 text-3xl font-bold tracking-tight sm:text-5xl">
        We're here to <span class="text-yellow-500">hear from you.</span>
      </h2>

      <p class="mt-5 leading-7 text-slate-300">
        Reach out to Repose Healing Center for general enquiries, information and support.
      </p>
    </div>

    <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      @php
        $items = [
          [
            'icon' => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>',
            'title' => 'Visit us',
            'value' => 'Ssese View Road, Plot 2, Manyago, Entebbe, Uganda'
          ],
          [
            'icon' => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>',
            'title' => 'Call us',
            'value' => '+256 789 728 211'
          ],
          [
            'icon' => '<rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>',
            'title' => 'Email us',
            'value' => 'reposehealingcenter@gmail.com'
          ],
          [
            'icon' => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16.5 12"/>',
            'title' => 'Opening hours',
            'value' => 'Monday – Saturday, 8:00 AM – 6:00 PM'
          ]
        ];
      @endphp

      @foreach($items as $item)
        <div class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
          <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500">
            {!! $item['icon'] !!}
          </svg>

          <h3 class="mt-5 font-bold text-white">{{ $item['title'] }}</h3>

          <p class="mt-2 break-words text-sm leading-6 text-slate-400">
            {{ $item['value'] }}
          </p>
        </div>
      @endforeach
    </div>
  </div>
</section>
