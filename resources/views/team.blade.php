@extends('layouts.app')

@section('title', 'Our Team | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'LEADERSHIP & STAFF',
      'title' => 'Our',
      'accent' => 'Team',
      'description' => 'Meet the dedicated professionals committed to guiding you toward healing, resilience, and recovery.',
      'separatorColor' => 'text-slate-50'
  ])

  @include('components.sections.team-grid')  

  <section class="py-16 bg-slate-50 border-t border-slate-200">
    <div class="container-site text-center">
      <a href="{{ route('admissions') }}" class="inline-flex items-center gap-2 rounded-xl bg-green-600 px-8 py-4 text-[15px] font-bold uppercase tracking-widest text-white transition hover:bg-green-700">
        Request a Consultation
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </a>
    </div>
  </section>
@endsection
