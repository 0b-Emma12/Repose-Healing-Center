@extends('layouts.app')

@section('title', 'Our Team | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'LEADERSHIP & STAFF',
      'title' => 'Our',
      'accent' => 'Team',
      'description' => 'Meet the dedicated professionals committed to guiding you toward healing, resilience, and recovery.'
  ])

  <section class="section-space bg-slate-50">
    <div class="container-site max-w-4xl" x-data="{ activeMember: null }">
      
      <div class="mb-10 text-center">
        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Meet our experts</h2>
        <p class="mt-4 text-lg text-slate-600">Click on a profile to read more about their experience and approach.</p>
      </div>

      <div class="space-y-6">
        
        <!-- Daniel Obote -->
        <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition hover:shadow-md">
          <button 
            @click="activeMember = (activeMember === 'daniel' ? null : 'daniel')" 
            class="group focus-ring flex w-full items-center gap-4 p-5 text-left sm:gap-6 sm:p-6"
            :aria-expanded="activeMember === 'daniel'"
          >
            <img src="{{ asset('images/staff/daniel-obote.jpg') }}" alt="Daniel Obote" class="h-16 w-16 shrink-0 rounded-full object-cover shadow-sm ring-1 ring-slate-200 sm:h-20 sm:w-20" />
            <div class="flex-grow">
              <h3 class="text-lg font-bold text-slate-900 sm:text-xl">Daniel Obote</h3>
              <p class="mt-0.5 text-sm font-medium text-green-600">Counseling Psychologist & CEO</p>
            </div>
            <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-slate-50 text-slate-400 transition group-hover:bg-slate-100">
              <svg x-show="activeMember !== 'daniel'" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
              <svg x-show="activeMember === 'daniel'" style="display: none;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
            </div>
          </button>
          
          <div x-show="activeMember === 'daniel'" x-collapse style="display: none;">
            <div class="border-t border-slate-100 bg-slate-50 px-6 py-8 sm:px-8">
              <div class="space-y-5 text-base leading-7 text-slate-600 sm:leading-8">
                <p>
                  Daniel Obote is a Counseling Psychologist and the CEO of Repose Healing Center, dedicated to helping individuals overcome addiction, trauma, and emotional challenges. He brings strong experience in trauma-informed counseling, creating a safe space where clients feel understood, respected, and supported throughout the healing process.
                </p>
                <p>
                  His approach is person-centered, recognizing that every individual has unique experiences, strengths, and goals. He also uses Cognitive Behavioral Therapy (CBT) to help clients understand unhealthy thought patterns, develop healthier coping skills, and make lasting positive changes.
                </p>
                <p>
                  With a compassionate and professional style, Daniel is committed to guiding individuals toward healing, resilience, personal growth, and long-term recovery.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Dr. Abdulrahim Shirazi -->
        <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition hover:shadow-md">
          <button 
            @click="activeMember = (activeMember === 'abdulrahim' ? null : 'abdulrahim')" 
            class="group focus-ring flex w-full items-center gap-4 p-5 text-left sm:gap-6 sm:p-6"
            :aria-expanded="activeMember === 'abdulrahim'"
          >
            <img src="{{ asset('images/staff/abdulrahim-shirazi.jpg') }}" alt="Dr. Abdulrahim Shirazi" class="h-16 w-16 shrink-0 rounded-full object-cover shadow-sm ring-1 ring-slate-200 sm:h-20 sm:w-20" />
            <div class="flex-grow">
              <h3 class="text-lg font-bold text-slate-900 sm:text-xl">Dr. Abdulrahim Shirazi</h3>
              <p class="mt-0.5 text-sm font-medium text-green-600">Medical Doctor & Recovery Coach</p>
            </div>
            <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-slate-50 text-slate-400 transition group-hover:bg-slate-100">
              <svg x-show="activeMember !== 'abdulrahim'" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
              <svg x-show="activeMember === 'abdulrahim'" style="display: none;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
            </div>
          </button>
          
          <div x-show="activeMember === 'abdulrahim'" x-collapse style="display: none;">
            <div class="border-t border-slate-100 bg-slate-50 px-6 py-8 sm:px-8">
              <div class="space-y-5 text-base leading-7 text-slate-600 sm:leading-8">
                <p>
                  Dr. Abdulrahim Shirazi is a retired Medical Doctor with a lifelong commitment to healing and service. After retiring from active medical practice in 2016, he trained with SAPTA Kenya as a Recovery Coach.
                </p>
                <p>
                  He now brings both his medical expertise and recovery coaching experience to support individuals on their journey to healing at Repose Healing Center.
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
      
      <div class="mt-12 text-center">
        <a href="{{ route('admissions') }}" class="inline-flex items-center gap-2 rounded-xl bg-green-600 px-7 py-3.5 text-base font-bold text-white transition hover:bg-green-700">
          Request a Consultation
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
      </div>

    </div>
  </section>
@endsection
