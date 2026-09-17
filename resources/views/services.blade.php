@extends('layouts.app')

@section('title', 'Services | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'OUR SERVICES',
      'title' => 'Support For',
      'accent' => 'Healing',
      'description' => 'Explore the support available through Repose Healing Center in a safe, respectful and confidential environment.'
  ])

  @include('components.sections.services-preview')

  <section class="relative overflow-hidden bg-slate-900">
    <img
      src="https://images.unsplash.com/photo-1516307365426-bea591f05011?auto=format&fit=crop&w=2000&q=85"
      alt=""
      class="absolute inset-0 h-full w-full object-cover opacity-30"
    />

    <div class="relative py-24">
      <div class="container-site text-center">
        <h2 class="text-3xl font-black uppercase text-white sm:text-4xl">
          Looking for <span class="text-green-500">Support?</span>
        </h2>

        <p class="mx-auto mt-5 max-w-2xl leading-8 text-slate-200">
          Contact Repose Healing Center to learn more about available
          support and the next steps.
        </p>

        <a
          href="{{ route('admissions') }}"
          class="mt-8 inline-flex items-center gap-2 bg-green-600 px-7 py-4 text-sm font-bold uppercase tracking-wide text-white hover:bg-green-700"
        >
          Get Started
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
      </div>
    </div>
  </section>
@endsection
