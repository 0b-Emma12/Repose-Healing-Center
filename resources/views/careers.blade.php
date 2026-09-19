@extends('layouts.app')

@section('title', 'Careers | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'CAREERS',
      'title' => 'Grow With',
      'accent' => 'Repose',
      'description' => 'Explore opportunities to contribute to a supportive environment focused on rehabilitation, mental wellness and care.'
  ])

  <section class="section-space bg-white">
    <div class="container-site">
      @include('components.ui.section-title', [
          'eyebrow' => 'WORK WITH US',
          'title' => 'Build A',
          'accent' => 'Purposeful Career',
          'description' => 'We value people who approach their work with professionalism, compassion, integrity and respect.',
          'align' => 'center'
      ])

      <div class="mt-14 grid gap-7 md:grid-cols-3">
        @php
          $items = [
            [
              'icon' => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
              'title' => 'People First',
              'text' => 'Contribute to an environment where dignity and respect are important.'
            ],
            [
              'icon' => '<path d="M2 7h20v14H2z"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>',
              'title' => 'Professionalism',
              'text' => 'Bring responsibility, teamwork and a commitment to quality into your work.'
            ],
            [
              'icon' => '<rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>',
              'title' => 'Enquiries',
              'text' => 'For career enquiries, contact the center through the official contact details.'
            ]
          ];
        @endphp

        @foreach($items as $item)
          <div class="border border-slate-200 bg-slate-50 p-8">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-600">
              {!! $item['icon'] !!}
            </svg>
            <h3 class="mt-6 text-xl font-bold text-slate-900">{{ $item['title'] }}</h3>
            <p class="mt-4 leading-7 text-slate-600">{{ $item['text'] }}</p>
          </div>
        @endforeach
      </div>

      <div class="mx-auto mt-12 max-w-3xl border-l-4 border-green-600 bg-slate-50 p-7">
        <p class="leading-8 text-slate-700">
          To enquire about opportunities, contact Repose Healing Center using <strong>info@reposehealingcenter.com</strong>.
        </p>
      </div>
    </div>
  </section>
@endsection

