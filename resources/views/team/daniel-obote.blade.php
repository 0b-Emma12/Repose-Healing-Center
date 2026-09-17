@extends('layouts.app')

@section('title', 'Daniel Obote - Our Team | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'LEADERSHIP',
      'title' => 'Daniel',
      'accent' => 'Obote',
      'description' => 'Counseling Psychologist & CEO of Repose Healing Center.'
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
              src="{{ asset('images/staff/daniel-obote.jpg') }}" 
              alt="Daniel Obote" 
              class="aspect-[4/5] w-full object-cover"
            />
            <div class="bg-white p-6">
              <h3 class="text-xl font-bold text-slate-900">Daniel Obote</h3>
              <p class="mt-1 text-sm font-bold text-green-600">Counseling Psychologist & CEO</p>
            </div>
          </div>
        </div>

        <!-- Biography -->
        <div class="space-y-6 text-lg leading-8 text-slate-600">
          <div class="mb-8">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900">About Daniel</h2>
            <div class="mt-4 h-1 w-12 bg-yellow-500"></div>
          </div>

          <p>
            Daniel Obote is a Counseling Psychologist and the CEO of Repose Healing Center, dedicated to helping individuals overcome addiction, trauma, and emotional challenges. He brings strong experience in trauma-informed counseling, creating a safe space where clients feel understood, respected, and supported throughout the healing process.
          </p>

          <p>
            His approach is person-centered, recognizing that every individual has unique experiences, strengths, and goals. He also uses Cognitive Behavioral Therapy (CBT) to help clients understand unhealthy thought patterns, develop healthier coping skills, and make lasting positive changes.
          </p>

          <p>
            With a compassionate and professional style, Daniel is committed to guiding individuals toward healing, resilience, personal growth, and long-term recovery.
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
