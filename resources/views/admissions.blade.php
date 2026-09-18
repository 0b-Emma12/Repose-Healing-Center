@extends('layouts.app')

@section('title', 'Admissions | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'ADMISSIONS',
      'title' => 'Begin Your',
      'accent' => 'Journey',
      'description' => 'Taking the first step toward healing takes courage. Our admissions process is simple, confidential and compassionate - we are here to guide you every step of the way.'
  ])

  {{-- Admission Steps --}}
  <section class="section-space bg-white">
    <div class="container-site">
      @include('components.ui.section-title', [
          'eyebrow' => 'HOW IT WORKS',
          'title' => 'Our Admissions',
          'accent' => 'Process',
          'description' => 'Getting started is straightforward. Here is what to expect when you reach out to us.',
          'align' => 'center',
      ])

      <div class="mt-16 grid gap-10 md:grid-cols-2 lg:grid-cols-4">
        @php
          $steps = [
            ['num' => '01', 'title' => 'Reach Out', 'desc' => 'Contact us by phone, WhatsApp or by completing the enquiry form below. All contact is treated with complete confidentiality.', 'icon' => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>'],
            ['num' => '02', 'title' => 'Initial Assessment', 'desc' => 'Our team will conduct a confidential assessment to understand your needs and determine the most appropriate level of care for you.', 'icon' => '<path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/>'],
            ['num' => '03', 'title' => 'Treatment Planning', 'desc' => 'We develop a personalised care plan tailored to your specific goals, challenges and circumstances - built around you.', 'icon' => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/>'],
            ['num' => '04', 'title' => 'Begin Treatment', 'desc' => 'You are welcomed into our care. Our multidisciplinary team supports you through every stage of your healing journey.', 'icon' => '<path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>'],
          ];
        @endphp
        @foreach($steps as $step)
          <div class="flex flex-col items-center text-center">
            <div class="flex h-16 w-16 items-center justify-center bg-green-600 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">{!! $step['icon'] !!}</svg>
            </div>
            <div class="mt-2 text-xs font-black tracking-[0.2em] text-slate-400">{{ $step['num'] }}</div>
            <h3 class="mt-4 text-xl font-bold text-slate-900">{{ $step['title'] }}</h3>
            <div class="mt-3 h-0.5 w-10" style="background-color: #FFD500;"></div>
            <p class="mt-4 leading-7 text-slate-600">{{ $step['desc'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- Who We Help --}}
  <section class="section-space overflow-hidden bg-slate-900 text-white">
    <div class="container-site">
      <div class="grid items-start gap-16 lg:grid-cols-2">
        <div>
          @include('components.ui.section-title', [
              'eyebrow' => 'WHO WE HELP',
              'title' => 'We Support',
              'accent' => 'You.',
              'align' => 'left',
          ])
          <p class="mt-6 text-lg leading-8 text-slate-300">
            Repose Healing Center provides professional care for individuals facing a range of challenges. We welcome people of all backgrounds who are ready to take a step toward healing.
          </p>
          <ul class="mt-8 space-y-4 text-slate-300">
            @php
              $conditions = ['Alcohol and substance use disorders', 'Drug addiction and dependency', 'Trauma and post-traumatic stress (PTSD)', 'Depression and anxiety disorders', 'Co-occurring mental health and addiction challenges', 'Emotional and behavioural difficulties', 'Family members and loved ones of those in recovery'];
            @endphp
            @foreach($conditions as $item)
              <li class="flex items-start gap-3">
                <div class="mt-1 rounded-full bg-green-500/20 p-1 text-green-400">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                </div>
                {{ $item }}
              </li>
            @endforeach
          </ul>
        </div>

        <div class="space-y-5">
          @php
            $programmes = [
              ['title' => 'Inpatient / Residential Care', 'desc' => 'For individuals who require a structured, 24-hour supportive environment to focus fully on recovery away from everyday triggers.'],
              ['title' => 'Outpatient Programme', 'desc' => 'For those who need professional support while maintaining daily responsibilities - flexible sessions designed around your life.'],
              ['title' => 'Individual Counselling', 'desc' => 'One-to-one sessions with a qualified counsellor focusing on trauma, addiction, emotional challenges or personal growth.'],
              ['title' => 'Family Support', 'desc' => 'We involve and support families as an essential part of the healing journey, providing guidance and education.'],
            ];
          @endphp
          @foreach($programmes as $prog)
            <div class="border border-white/10 bg-white/5 p-6 backdrop-blur-sm">
              <h3 class="text-lg font-bold text-white">{{ $prog['title'] }}</h3>
              <div class="mt-2 h-0.5 w-8" style="background-color: #FFD500;"></div>
              <p class="mt-4 leading-7 text-slate-400">{{ $prog['desc'] }}</p>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  {{-- What to Expect --}}
  <section class="section-space bg-slate-50">
    <div class="container-site max-w-5xl">
      @include('components.ui.section-title', [
          'eyebrow' => 'WHAT TO EXPECT',
          'title' => 'Your Experience at',
          'accent' => 'Repose.',
          'align' => 'center',
      ])
      <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @php
          $expectations = [
            ['title' => 'Safe & Confidential', 'desc' => 'Everything shared within our centre stays within our centre. Your privacy is protected at all times under our strict confidentiality policy.'],
            ['title' => 'Person-Centred Care', 'desc' => 'Treatment is tailored to your unique story, strengths and goals. You are treated with dignity, compassion and respect throughout.'],
            ['title' => 'Evidence-Based Treatment', 'desc' => 'Our programmes draw on proven approaches including CBT, trauma-informed care and motivational interviewing.'],
            ['title' => 'Qualified Clinical Team', 'desc' => 'Supported by experienced counselling psychologists, medical professionals and trained recovery coaches.'],
            ['title' => 'Family Involvement', 'desc' => 'With your consent, we involve your family in the recovery process to strengthen your support network.'],
            ['title' => 'Aftercare Planning', 'desc' => 'Recovery continues after discharge. We prepare personalised aftercare plans to support your long-term wellbeing.'],
          ];
        @endphp
        @foreach($expectations as $item)
          <div class="border border-slate-200 bg-white p-6 transition hover:-translate-y-1 hover:shadow-md">
            <div class="mb-4 h-0.5 w-8" style="background-color: #FFD500;"></div>
            <h3 class="font-bold text-slate-900">{{ $item['title'] }}</h3>
            <p class="mt-3 text-sm leading-7 text-slate-600">{{ $item['desc'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- Enquiry Form --}}
  <section class="section-space bg-white" id="enquiry">
    <div class="container-site grid gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:gap-20">
      <div>
        @include('components.ui.section-title', [
            'align' => 'left',
            'eyebrow' => 'GET STARTED',
            'title' => 'Request an',
            'accent' => 'Assessment',
            'description' => 'Complete the form and our admissions team will contact you within 24 hours. All enquiries are strictly confidential.'
        ])

        <div class="mt-8 rounded bg-yellow-50 p-6 border-l-4 border-yellow-500">
          <h3 class="font-bold text-slate-900">Not sure what you need?</h3>
          <p class="text-sm text-slate-700 mt-1 mb-4">Try our short, interactive assessment to help us prepare for your first conversation.</p>
          <a href="{{ route('get-started') }}" class="inline-block text-sm font-bold text-green-700 hover:text-green-800 underline uppercase tracking-wider">Start Interactive Enquiry &rarr;</a>
        </div>

        <div class="mt-10 space-y-4">
          @php
            $info = [
              ['icon' => '<rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>', 'title' => 'Strictly Confidential', 'body' => 'Your enquiry is handled with complete discretion and respect for your privacy.'],
              ['icon' => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>', 'title' => 'Call Us', 'body' => '+256 789 728 211 / +256 703 802 019'],
              ['icon' => '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>', 'title' => 'WhatsApp', 'body' => 'Chat with us at +256 789 728 211'],
              ['icon' => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16.5 12"/>', 'title' => 'Working Hours', 'body' => 'Mon - Sat, 8:00 AM - 6:00 PM'],
            ];
          @endphp
          @foreach($info as $item)
            <div class="flex gap-4 border border-slate-200 bg-slate-50 p-5">
              <div class="mt-1 flex h-10 w-10 shrink-0 items-center justify-center bg-green-100 text-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">{!! $item['icon'] !!}</svg>
              </div>
              <div>
                <h3 class="font-bold text-slate-900">{{ $item['title'] }}</h3>
                <p class="mt-1 text-sm leading-6 text-slate-600">{{ $item['body'] }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      <div class="border border-slate-200 bg-white p-6 shadow-xl sm:p-9">
        @include('components.forms.admission-form')
      </div>
    </div>
  </section>

  @include('components.sections.cta-section')
@endsection
