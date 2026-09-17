@extends('layouts.app')

@section('title', 'About Us | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'ABOUT REPOSE',
      'title' => 'A Safe Place',
      'accent' => 'To Heal',
      'description' => 'Professional rehabilitation and mental wellness services in Entebbe, Uganda — safe, confidential and evidence-based care.'
  ])

  <section class="section-space bg-white">
    <div class="container-site grid gap-12 lg:grid-cols-2 lg:items-center">
      <div>
        <img
          src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=1200&q=85"
          alt="Professional healthcare environment"
          class="h-[480px] w-full object-cover"
        />
      </div>

      <div>
        @include('components.ui.section-title', [
            'align' => 'left',
            'eyebrow' => 'WHO WE ARE',
            'title' => 'Restoring',
            'accent' => 'Lives',
            'description' => 'Repose Healing Center provides a supportive environment focused on rehabilitation, mental wellness, advocacy, prevention and care.'
        ])

        <div class="mt-8 space-y-5 leading-8 text-slate-600">
          <p>
            Our approach is centered on creating a safe and confidential
            environment where individuals can seek support and work toward
            positive change.
          </p>
          <p>
            We believe that healing is strengthened by compassion,
            professional support, respect and appropriate guidance.
          </p>
          <p class="font-semibold text-slate-800">
            Advocacy. Prevention. Care. Restoring Lives.
          </p>
        </div>

        <div class="mt-10 grid gap-6 sm:grid-cols-2">
          <!-- Daniel Obote -->
          <div class="flex h-full flex-col rounded-2xl border border-slate-200 bg-slate-50 p-6">
            <div class="flex items-center gap-5">
              <img src="{{ asset('images/staff/daniel-obote.jpg') }}" alt="Daniel Obote" class="h-16 w-16 rounded-full object-cover shadow-sm ring-4 ring-white" />
              <div>
                <h3 class="font-bold text-slate-900">Daniel Obote</h3>
                <p class="text-sm text-green-600">Counseling Psychologist & CEO</p>
              </div>
            </div>
            <p class="mt-4 flex-grow text-sm leading-6 text-slate-600">
              Dedicated to helping individuals overcome addiction, trauma, and emotional challenges through a person-centered approach.
            </p>
            <a href="{{ route('team.daniel') }}" class="mt-4 inline-flex items-center gap-1 text-sm font-bold uppercase tracking-wider text-green-600 transition hover:text-green-700">
              Read full profile &rarr;
            </a>
          </div>

          <!-- Dr. Abdulrahim Shirazi -->
          <div class="flex h-full flex-col rounded-2xl border border-slate-200 bg-slate-50 p-6">
            <div class="flex items-center gap-5">
              <img src="{{ asset('images/staff/abdulrahim-shirazi.jpg') }}" alt="Dr. Abdulrahim Shirazi" class="h-16 w-16 rounded-full object-cover shadow-sm ring-4 ring-white" />
              <div>
                <h3 class="font-bold text-slate-900">Dr. A. Shirazi</h3>
                <p class="text-sm text-green-600">Recovery Coach</p>
              </div>
            </div>
            <p class="mt-4 flex-grow text-sm leading-6 text-slate-600">
              A retired Medical Doctor bringing medical expertise and recovery coaching experience to support individuals on their healing journey.
            </p>
            <a href="{{ route('team.abdulrahim') }}" class="mt-4 inline-flex items-center gap-1 text-sm font-bold uppercase tracking-wider text-green-600 transition hover:text-green-700">
              Read full profile &rarr;
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-space bg-slate-50">
    <div class="container-site">
      @include('components.ui.section-title', [
          'eyebrow' => 'OUR APPROACH',
          'title' => 'Care With',
          'accent' => 'Purpose',
          'description' => 'Our work is guided by principles that place dignity, safety and confidentiality at the center of the care experience.',
          'align' => 'center'
      ])

      <div class="mt-14 grid gap-6 md:grid-cols-3">
        @php
          $approaches = [
            [
              'icon' => '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2-1 4-2 8-4 4 2 6 3 8 4a1 1 0 0 1 1 1v7z"/><path d="m9 12 2 2 4-4"/>',
              'title' => 'Confidentiality',
              'text' => 'We value privacy and treat personal information with care and respect.'
            ],
            [
              'icon' => '<path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/><path d="M12 13h2"/><path d="M12 13.5v-2"/>',
              'title' => 'Compassion',
              'text' => 'We promote a respectful and supportive environment for people seeking help.'
            ],
            [
              'icon' => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
              'title' => 'Support',
              'text' => 'We encourage appropriate support and connection throughout the healing journey.'
            ]
          ];
        @endphp

        @foreach($approaches as $item)
          <div class="border border-slate-200 bg-white p-8 transition hover:-translate-y-1 hover:shadow-xl">
            <div class="mb-6 flex h-14 w-14 items-center justify-center bg-green-600 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                {!! $item['icon'] !!}
              </svg>
            </div>
            <h3 class="text-xl font-bold text-slate-900">{{ $item['title'] }}</h3>
            <p class="mt-4 leading-7 text-slate-600">{{ $item['text'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
