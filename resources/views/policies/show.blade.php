@extends('layouts.app')

@section('title', $policy['title'] . ' | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'REPOSE HEALING CENTER',
      'title' => $policy['title'],
      'description' => $policy['intro'],
      'image' => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=2000&q=85'
  ])

  <section class="section-space bg-slate-50">
    <div class="container-site max-w-5xl">

      <div class="mb-10 border-l-4 border-green-600 bg-white p-7 shadow-sm">
        <div class="flex gap-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-1 shrink-0 text-green-600"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2-1 4-2 8-4 4 2 6 3 8 4a1 1 0 0 1 1 1v7z"/><path d="m9 12 2 2 4-4"/></svg>

          <div>
            <p class="text-xs font-bold uppercase tracking-[0.2em] text-green-600">
              Our Commitment
            </p>
            <p class="mt-3 leading-8 text-slate-600">
              {{ $policy['intro'] }}
            </p>
          </div>
        </div>
      </div>

      <div class="space-y-5">
        @foreach($policy['sections'] as $index => $section)
          <article class="border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md sm:p-9">
            <div class="flex gap-5">
              <div class="flex h-9 w-9 shrink-0 items-center justify-center bg-green-100 text-sm font-black text-green-700">
                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
              </div>
              <div class="min-w-0">
                <h2 class="text-xl font-bold text-slate-900">{{ $section['heading'] }}</h2>
                <div class="mt-4 h-1 w-12 bg-green-600"></div>
                <p class="mt-5 leading-8 text-slate-600">{{ $section['text'] }}</p>
              </div>
            </div>
          </article>
        @endforeach
      </div>

      <div class="mt-12 border border-slate-200 bg-slate-900 p-8">
        <p class="text-sm leading-7 text-slate-300">
          If you have questions about any of these policies or your rights, please contact Repose Healing Center directly.
        </p>
        <a href="{{ route('contact') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-bold uppercase tracking-wide text-green-400 transition hover:text-green-300">
          Contact Repose Healing Center
        </a>
      </div>

      <div class="mt-10">
        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-wide text-slate-500 transition hover:text-green-600">
          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
          Back to Home
        </a>
      </div>

    </div>
  </section>
@endsection
