@extends('layouts.app')

@section('title', $data['title'] . ' | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => $data['eyebrow'] ?? 'REPOSE HEALING CENTER',
      'title' => explode(' ', $data['title'])[0] ?? $data['title'],
      'accent' => count(explode(' ', $data['title'])) > 1 ? implode(' ', array_slice(explode(' ', $data['title']), 1)) : '',
      'description' => $data['description'] ?? ''
  ])

  <section class="section-space bg-slate-50">
    <div class="container-site grid gap-12 lg:grid-cols-[1fr_3fr] lg:gap-20">
      {{-- Sidebar --}}
      <aside class="space-y-8">
        <div class="rounded bg-white p-6 shadow-md border border-slate-200">
          <h3 class="font-extrabold uppercase tracking-widest text-slate-900">{{ $sidebarTitle }}</h3>
          <div class="mt-3 mb-6 h-0.5 w-10" style="background-color: #FFD500;"></div>
          <ul class="space-y-3">
            @foreach($sidebarLinks as $link)
              <li>
                <a href="{{ $link['url'] }}" 
                   class="block text-sm font-semibold transition-colors 
                          {{ request()->url() === $link['url'] ? 'text-green-600' : 'text-slate-600 hover:text-green-600' }}">
                  {{ $link['title'] }}
                </a>
              </li>
            @endforeach
          </ul>
        </div>

        {{-- Help widget --}}
        <div class="rounded bg-slate-900 p-6 shadow-md text-white">
          <h3 class="font-extrabold uppercase tracking-widest text-white">Need Help?</h3>
          <div class="mt-3 mb-4 h-0.5 w-10" style="background-color: #FFD500;"></div>
          <p class="text-sm text-slate-300 leading-relaxed mb-6">Our admissions team is available to answer any questions you have, confidentially.</p>
          <a href="{{ route('admissions') }}" class="block w-full rounded bg-yellow-500 py-3 text-center text-sm font-bold uppercase tracking-wider text-slate-900 transition hover:bg-yellow-400">
            Contact Us
          </a>
          <a href="tel:+256789728211" class="mt-4 flex items-center justify-center gap-2 text-sm font-bold text-green-400 hover:text-green-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +256 789 728 211
          </a>
        </div>
      </aside>

      {{-- Main Content --}}
      <article class="prose prose-slate prose-lg max-w-none prose-headings:font-extrabold prose-headings:uppercase prose-headings:tracking-wide prose-h2:text-slate-900 prose-h3:text-green-700 prose-a:text-green-600">
        {!! $data['content'] !!}
      </article>
    </div>
  </section>

  @include('components.sections.cta-section')
@endsection

