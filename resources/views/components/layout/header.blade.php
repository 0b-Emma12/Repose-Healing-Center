<header class="sticky top-0 z-50 w-full shadow-sm" id="site-header" x-data="{ mobileMenuOpen: false }">
  <!-- Top Bar -->
  <div class="hidden border-b border-white/10 bg-slate-900 px-4 py-2 text-xs font-medium text-slate-300 sm:block">
    <div class="container-site mx-auto flex items-center justify-between">
      <div class="flex items-center gap-6">
        <a href="tel:+256789728211" class="flex items-center gap-2 transition hover:text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          +256 789 728 211
        </a>
        <a href="mailto:info@reposehealing.com" class="flex items-center gap-2 transition hover:text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
          info@reposehealing.com
        </a>
      </div>
      <div class="flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        Mon-Fri 8:00 AM - 5:00 PM
      </div>
    </div>
  </div>

  <!-- Main Navbar -->
  <div class="border-b border-slate-200/80 bg-white/95 backdrop-blur">
    <div class="container-site mx-auto">
      <div class="flex min-h-[80px] items-center justify-between gap-4">
      <a href="{{ route('home') }}" class="focus-ring flex min-w-0 items-center gap-3 rounded-lg" aria-label="Repose Healing Center home">
        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-green-600 text-lg font-bold text-white">R</div>
        <div class="min-w-0">
          <div class="truncate text-base font-bold tracking-tight text-slate-800 sm:text-lg">Repose Healing Center</div>
          <div class="hidden text-xs text-green-600 sm:block">Advocacy. Prevention. Care.</div>
        </div>
      </a>

      @php
        $conditions = config('repose.conditions', []);
        $programmes = config('repose.programmes', []);
        $audiences = config('repose.audiences', []);
      @endphp

      <nav class="hidden items-center gap-2 lg:flex" aria-label="Main navigation">
        <a href="{{ route('home') }}" class="focus-ring rounded-lg px-3 py-2 text-[15px] font-bold tracking-wide transition text-slate-700 hover:text-green-600">Home</a>
        <a href="{{ route('about') }}" class="focus-ring rounded-lg px-3 py-2 text-[15px] font-bold tracking-wide transition text-slate-700 hover:text-green-600">About</a>
        
        <!-- Conditions Dropdown -->
        <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
            <button class="focus-ring inline-flex items-center gap-1 rounded-lg px-3 py-2 text-[15px] font-bold tracking-wide transition text-slate-700 hover:text-green-600">
                Conditions
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            </button>
            <div x-show="open" x-transition.opacity.duration.200ms class="absolute top-full left-0 w-64 pt-2" style="display: none;">
                <div class="rounded-lg border border-slate-200 bg-white p-2 shadow-xl">
                    @foreach($conditions as $slug => $data)
                        <a href="{{ route('conditions.show', $slug) }}" class="block rounded-md px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-50 hover:text-green-600">
                            {{ $data['title'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Programmes Dropdown -->
        <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
            <button class="focus-ring inline-flex items-center gap-1 rounded-lg px-3 py-2 text-[15px] font-bold tracking-wide transition text-slate-700 hover:text-green-600">
                Programmes
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            </button>
            <div x-show="open" x-transition.opacity.duration.200ms class="absolute top-full left-0 w-64 pt-2" style="display: none;">
                <div class="rounded-lg border border-slate-200 bg-white p-2 shadow-xl">
                    @foreach($programmes as $slug => $data)
                        <a href="{{ route('programmes.show', $slug) }}" class="block rounded-md px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-50 hover:text-green-600">
                            {{ $data['title'] }}
                        </a>
                    @endforeach
                    <div class="my-2 border-t border-slate-100"></div>
                    <a href="{{ route('programs-fees') }}" class="block rounded-md px-4 py-2 text-sm font-bold text-slate-900 hover:bg-slate-50 hover:text-green-600">Programs & Fees</a>
                    <a href="{{ route('schedule') }}" class="block rounded-md px-4 py-2 text-sm font-bold text-slate-900 hover:bg-slate-50 hover:text-green-600">Weekly Schedule</a>
                </div>
            </div>
        </div>

        <!-- Audiences Dropdown -->
        <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
            <button class="focus-ring inline-flex items-center gap-1 rounded-lg px-3 py-2 text-[15px] font-bold tracking-wide transition text-slate-700 hover:text-green-600">
                Who We Help
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            </button>
            <div x-show="open" x-transition.opacity.duration.200ms class="absolute top-full left-0 w-64 pt-2" style="display: none;">
                <div class="rounded-lg border border-slate-200 bg-white p-2 shadow-xl">
                    @foreach($audiences as $slug => $data)
                        <a href="{{ route('audiences.show', $slug) }}" class="block rounded-md px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-50 hover:text-green-600">
                            {{ $data['title'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <a href="{{ route('admissions') }}" class="focus-ring rounded-lg px-3 py-2 text-[15px] font-bold tracking-wide transition text-slate-700 hover:text-green-600">Admissions</a>
      </nav>

      <div class="hidden items-center gap-3 lg:flex">
        <a href="tel:+256789728211" class="focus-ring inline-flex items-center gap-2 rounded bg-green-600 px-6 py-3 text-sm font-bold uppercase tracking-wider text-white transition hover:bg-green-700">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Call us
        </a>
      </div>

      <button type="button" @click="mobileMenuOpen = !mobileMenuOpen" class="focus-ring inline-flex rounded-lg p-2 text-slate-700 hover:bg-slate-100 lg:hidden" aria-label="Toggle navigation menu">
        <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
        <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none;"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-collapse class="border-t border-slate-100 py-4 lg:hidden" style="display: none;">
      <nav class="flex flex-col gap-1 px-4" aria-label="Mobile navigation">
        <a href="{{ route('home') }}" class="rounded-xl px-4 py-3 text-sm font-bold text-slate-700 hover:bg-slate-50">Home</a>
        <a href="{{ route('about') }}" class="rounded-xl px-4 py-3 text-sm font-bold text-slate-700 hover:bg-slate-50">About</a>
        <a href="{{ route('services') }}" class="rounded-xl px-4 py-3 text-sm font-bold text-slate-700 hover:bg-slate-50">Services Overview</a>
        <a href="{{ route('programs-fees') }}" class="rounded-xl px-4 py-3 text-sm font-bold text-slate-700 hover:bg-slate-50">Programs & Fees</a>
        <a href="{{ route('schedule') }}" class="rounded-xl px-4 py-3 text-sm font-bold text-slate-700 hover:bg-slate-50">Weekly Schedule</a>
        <a href="{{ route('admissions') }}" class="rounded-xl px-4 py-3 text-sm font-bold text-slate-700 hover:bg-slate-50">Admissions</a>
        <a href="{{ route('contact') }}" class="rounded-xl px-4 py-3 text-sm font-bold text-slate-700 hover:bg-slate-50">Contact Us</a>

        <a href="tel:+256789728211" class="mt-4 flex items-center justify-center gap-2 rounded-xl bg-green-600 px-4 py-3 font-semibold text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Call Repose Healing Center
        </a>
      </nav>
    </div>
  </div>
</header>

