@extends('layouts.app')

@section('title', 'Dr. Abdulrahim Shirazi - Our Team | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'LEADERSHIP',
      'title' => 'Dr. Abdulrahim',
      'accent' => 'Shirazi',
      'description' => 'Retired Medical Doctor & Recovery Coach.'
  ])

  <section class="section-space bg-slate-50">
    <div class="container-site max-w-5xl">
      <div class="mb-10">
        <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-wider text-slate-500 transition hover:text-green-600">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
          Back to About
        </a>
      </div>

      <div class="grid gap-12 lg:grid-cols-[1fr_1.8fr] lg:items-start lg:gap-16">
        <!-- Photo & Quick Info -->
        <div>
          <div class="overflow-hidden rounded-2xl bg-white shadow-xl ring-1 ring-slate-900/5">
            <img 
              src="{{ asset('images/staff/abdulrahim-shirazi.jpg') }}" 
              alt="Dr. Abdulrahim Shirazi" 
              class="aspect-[4/5] w-full object-cover"
            />
            <div class="bg-white p-6">
              <h3 class="text-xl font-bold text-slate-900">Dr. A. Shirazi</h3>
              <p class="mt-1 text-sm font-bold text-green-600">Medical Doctor & Recovery Coach</p>
            </div>
          </div>
        </div>

        <!-- Biography -->
        <div class="space-y-6 text-lg leading-8 text-slate-600">
          <div class="mb-8">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900">About Dr. Shirazi</h2>
            <div class="mt-4 h-1 w-12 bg-yellow-500"></div>
          </div>

          <p>
            Dr. Abdulrahim Shirazi is a retired Medical Doctor with a lifelong commitment to healing and service. After retiring from active medical practice in 2016, he trained with SAPTA Kenya as a Recovery Coach.
          </p>

          <p>
            He now brings both his medical expertise and recovery coaching experience to support individuals on their journey to healing at Repose Healing Center.
          </p>

          <div class="mt-12 pt-8 border-t border-slate-200">
            <h3 class="text-lg font-bold text-slate-900 mb-6">Ready to start your journey?</h3>
            <a href="{{ route('admissions') }}" class="inline-flex items-center gap-2 rounded-xl bg-green-600 px-7 py-3.5 text-base font-bold text-white transition hover:bg-green-700">
              Request a Consultation
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
