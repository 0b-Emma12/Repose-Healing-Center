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
    <div class="container-site max-w-5xl" x-data="{ activeMember: null }">
      
      <div class="mb-10 text-center">
        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Meet our experts</h2>
        <p class="mt-4 text-lg text-slate-600">Click on a profile to read more about their experience and approach.</p>
      </div>

      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-2">
        
        <!-- Daniel Obote -->
        <div class="group flex flex-col overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition-all hover:shadow-xl">
          <div class="relative overflow-hidden aspect-[4/3]">
            <img 
              src="{{ asset('images/staff/daniel-obote.jpg') }}" 
              alt="Daniel Obote" 
              class="h-full w-full object-cover object-center transition-transform duration-700 group-hover:scale-105" 
            />
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
          </div>
          <div class="flex flex-col p-6 sm:p-8">
            <h3 class="text-2xl font-bold text-slate-900">Daniel Obote</h3>
            <p class="mt-2 text-xs font-bold uppercase tracking-widest text-green-600">Counseling Psychologist & CEO</p>
            
            <div x-show="activeMember === 'daniel'" x-collapse style="display: none;">
              <div class="mt-6 space-y-4 border-t border-slate-100 pt-6 text-base leading-7 text-slate-600">
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

            <div class="mt-auto border-t border-slate-100 pt-6" :class="activeMember === 'daniel' ? 'mt-6' : 'mt-8'">
              <button 
                @click="activeMember = (activeMember === 'daniel' ? null : 'daniel')" 
                class="inline-flex w-full items-center justify-between text-sm font-bold uppercase tracking-wider text-slate-900 transition hover:text-green-600"
              >
                <span x-text="activeMember === 'daniel' ? 'Hide Biography' : 'Read Biography'"></span>
                <svg x-show="activeMember !== 'daniel'" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                <svg x-show="activeMember === 'daniel'" style="display: none;" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 19 7-7 7 7"/></svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Dr. Abdulrahim Shirazi -->
        <div class="group flex flex-col overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition-all hover:shadow-xl">
          <div class="relative overflow-hidden aspect-[4/3]">
            <img 
              src="{{ asset('images/staff/abdulrahim-shirazi.jpg') }}" 
              alt="Dr. Abdulrahim Shirazi" 
              class="h-full w-full object-cover object-center transition-transform duration-700 group-hover:scale-105" 
            />
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
          </div>
          <div class="flex flex-col p-6 sm:p-8">
            <h3 class="text-2xl font-bold text-slate-900">Dr. Abdulrahim Shirazi</h3>
            <p class="mt-2 text-xs font-bold uppercase tracking-widest text-green-600">Medical Doctor & Recovery Coach</p>
            
            <div x-show="activeMember === 'abdulrahim'" x-collapse style="display: none;">
              <div class="mt-6 space-y-4 border-t border-slate-100 pt-6 text-base leading-7 text-slate-600">
                <p>
                  Dr. Abdulrahim Shirazi is a retired Medical Doctor with a lifelong commitment to healing and service. After retiring from active medical practice in 2016, he trained with SAPTA Kenya as a Recovery Coach.
                </p>
                <p>
                  He now brings both his medical expertise and recovery coaching experience to support individuals on their journey to healing at Repose Healing Center.
                </p>
              </div>
            </div>

            <div class="mt-auto border-t border-slate-100 pt-6" :class="activeMember === 'abdulrahim' ? 'mt-6' : 'mt-8'">
              <button 
                @click="activeMember = (activeMember === 'abdulrahim' ? null : 'abdulrahim')" 
                class="inline-flex w-full items-center justify-between text-sm font-bold uppercase tracking-wider text-slate-900 transition hover:text-green-600"
              >
                <span x-text="activeMember === 'abdulrahim' ? 'Hide Biography' : 'Read Biography'"></span>
                <svg x-show="activeMember !== 'abdulrahim'" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                <svg x-show="activeMember === 'abdulrahim'" style="display: none;" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 19 7-7 7 7"/></svg>
              </button>
            </div>
          </div>
        </div>

      </div>
      
      <div class="mt-16 text-center">
        <a href="{{ route('admissions') }}" class="inline-flex items-center gap-2 rounded-xl bg-green-600 px-7 py-3.5 text-base font-bold text-white transition hover:bg-green-700">
          Request a Consultation
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
      </div>

    </div>
  </section>
@endsection
