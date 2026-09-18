@extends('layouts.app')

@section('title', 'About Us | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'ABOUT REPOSE',
      'title' => 'A Safe Place',
      'accent' => 'To Heal',
      'description' => 'Professional rehabilitation and mental wellness services in Entebbe, Uganda - safe, confidential and evidence-based care.'
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

        <div class="mt-10 rounded-2xl border border-slate-200 bg-slate-50 p-8 text-center sm:p-10">
          <h3 class="text-xl font-bold text-slate-900">Meet Our Team</h3>
          <p class="mx-auto mt-4 max-w-lg text-sm leading-6 text-slate-600">
            Our dedicated professionals are committed to guiding you toward healing, resilience, and recovery.
          </p>
          <a href="{{ route('team') }}" class="mt-6 inline-flex items-center gap-2 rounded-lg bg-green-600 px-6 py-3 font-semibold text-white transition hover:bg-green-700">
            View Staff Profiles
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
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
  <section class="section-space bg-white">
    <div class="container-site">
      @include('components.ui.section-title', [
          'eyebrow' => 'TREATMENT JOURNEY',
          'title' => 'What a Program',
          'accent' => 'Includes',
          'description' => 'A comprehensive, step-by-step approach to rehabilitation and mental wellness.',
          'align' => 'center'
      ])

      <div class="mt-14 max-w-4xl mx-auto space-y-8">
        
        <div class="flex gap-6">
          <div class="flex-none">
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-green-100 text-green-600 font-bold text-lg">1</div>
          </div>
          <div>
            <h3 class="text-xl font-bold text-slate-900">Assessment and Admission</h3>
            <p class="mt-2 text-slate-600 leading-relaxed">Every client begins with a confidential clinical assessment to determine the appropriate level of care, whether residential or outpatient.</p>
          </div>
        </div>

        <div class="flex gap-6">
          <div class="flex-none">
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-green-100 text-green-600 font-bold text-lg">2</div>
          </div>
          <div>
            <h3 class="text-xl font-bold text-slate-900"><span class="font-bold text-slate-800">[Medical / Supervised]</span> Detox</h3>
            <p class="mt-2 text-slate-600 leading-relaxed"><span class="font-bold text-slate-800">[Confirm actual capability: Is detox medically supervised on-site, or is there a referral pathway to a hospital partner for medical detox before admission? Be precise - this is a safety-critical claim.]</span></p>
          </div>
        </div>

        <div class="flex gap-6">
          <div class="flex-none">
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-green-100 text-green-600 font-bold text-lg">3</div>
          </div>
          <div>
            <h3 class="text-xl font-bold text-slate-900">Daily Structure</h3>
            <p class="mt-2 text-slate-600 leading-relaxed">A consistent daily schedule combining individual counseling, group therapy, and structured activity supports stability and engagement during treatment.</p>
          </div>
        </div>

        <div class="flex gap-6">
          <div class="flex-none">
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-green-100 text-green-600 font-bold text-lg">4</div>
          </div>
          <div>
            <h3 class="text-xl font-bold text-slate-900">Individual and Group Therapy</h3>
            <p class="mt-2 text-slate-600 leading-relaxed">One-to-one counseling sessions alongside group therapy, where clients build peer support and accountability alongside recovery skills.</p>
          </div>
        </div>

        <div class="flex gap-6">
          <div class="flex-none">
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-green-100 text-green-600 font-bold text-lg">5</div>
          </div>
          <div>
            <h3 class="text-xl font-bold text-slate-900">Family Involvement</h3>
            <p class="mt-2 text-slate-600 leading-relaxed"><span class="font-bold text-slate-800">[Describe actual family program - education sessions, scheduled visitation, family therapy - whatever genuinely happens.]</span></p>
          </div>
        </div>

        <div class="flex gap-6">
          <div class="flex-none">
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-green-100 text-green-600 font-bold text-lg">6</div>
          </div>
          <div>
            <h3 class="text-xl font-bold text-slate-900">Aftercare Planning</h3>
            <p class="mt-2 text-slate-600 leading-relaxed">Before discharge, each client receives a structured aftercare and relapse-prevention plan to support continuity of care once they return home. <span class="font-bold text-slate-800">[Describe what this actually includes - referral to outpatient counseling, community support groups, check-in calls, etc.]</span></p>
          </div>
        </div>

        <div class="mt-12 text-center pt-8 border-t border-slate-100">
          <a href="{{ route('programs-fees') }}" class="inline-flex items-center gap-2 rounded bg-yellow-500 px-8 py-4 text-[15px] font-bold uppercase tracking-widest text-slate-900 transition hover:bg-yellow-400">
            View Programs & Fees
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
        </div>

      </div>
    </div>
  </section>
@endsection
