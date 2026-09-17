<header class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/95 shadow-sm backdrop-blur" id="site-header">
  <div class="container-site">
    <div class="flex min-h-[76px] items-center justify-between gap-4">
      <a
        href="{{ route('home') }}"
        class="focus-ring flex min-w-0 items-center gap-3 rounded-lg"
        aria-label="Repose Healing Center home"
      >
        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-green-600 text-lg font-bold text-white">
          R
        </div>
        <div class="min-w-0">
          <div class="truncate text-base font-bold tracking-tight text-slate-800 sm:text-lg">
            Repose Healing Center
          </div>
          <div class="hidden text-xs text-green-600 sm:block">
            Advocacy. Prevention. Care.
          </div>
        </div>
      </a>

      @php
        $nav = [
            ['label' => 'Home', 'path' => route('home')],
            ['label' => 'About', 'path' => route('about')],
            ['label' => 'Services', 'path' => route('services')],
            ['label' => 'Admissions', 'path' => route('admissions')],
            ['label' => 'Resources', 'path' => route('resources')],
            ['label' => 'FAQ', 'path' => route('faq')],
            ['label' => 'Careers', 'path' => route('careers')],
            ['label' => 'Contact', 'path' => route('contact')],
        ];
      @endphp

      <nav class="hidden items-center gap-1 lg:flex" aria-label="Main navigation">
        @foreach($nav as $item)
          <a
            href="{{ $item['path'] }}"
            class="focus-ring rounded-lg px-3 py-2 text-sm font-medium transition {{ request()->url() === $item['path'] ? 'bg-green-600 text-white' : 'text-slate-600 hover:bg-slate-50 hover:text-green-600' }}"
          >
            {{ $item['label'] }}
          </a>
        @endforeach
      </nav>

      <div class="hidden items-center gap-3 lg:flex">
        <a
          href="tel:+256789728211"
          class="focus-ring inline-flex items-center gap-2 rounded-xl bg-green-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700"
        >
          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Call us
        </a>
      </div>

      <button
        type="button"
        id="mobile-menu-btn"
        class="focus-ring inline-flex rounded-lg p-2 text-slate-700 hover:bg-slate-100 lg:hidden"
        aria-label="Toggle navigation menu"
        aria-expanded="false"
      >
        <svg id="menu-icon-open" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="block"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
        <svg id="menu-icon-close" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
      </button>
    </div>

    <div id="mobile-menu" class="hidden border-t border-slate-100 py-4 lg:hidden">
      <nav class="flex flex-col gap-1" aria-label="Mobile navigation">
        @foreach($nav as $item)
          <a
            href="{{ $item['path'] }}"
            class="focus-ring rounded-xl px-4 py-3 text-sm font-medium {{ request()->url() === $item['path'] ? 'bg-green-600 text-white' : 'text-slate-700 hover:bg-slate-50' }}"
          >
            {{ $item['label'] }}
          </a>
        @endforeach

        <a
          href="tel:+256789728211"
          class="mt-2 inline-flex items-center justify-center gap-2 rounded-xl bg-green-600 px-4 py-3 font-semibold text-white"
        >
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Call Repose Healing Center
        </a>
      </nav>
    </div>
  </div>
</header>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('menu-icon-open');
    const iconClose = document.getElementById('menu-icon-close');

    btn.addEventListener('click', () => {
      const isExpanded = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', !isExpanded);
      menu.classList.toggle('hidden');
      iconOpen.classList.toggle('hidden');
      iconClose.classList.toggle('hidden');
    });
  });
</script>
