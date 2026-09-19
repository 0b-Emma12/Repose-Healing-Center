@extends('layouts.app')

@section('title', 'Contact Us | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'CONTACT US',
      'title' => 'Get In',
      'accent' => 'Touch',
      'description' => 'Reach out to Repose Healing Center for general enquiries, information and support.'
  ])

  <section class="section-space bg-white">
    <div class="container-site">
      <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">
        <div class="space-y-6">
          @php
            $info = [
              [
                'icon' => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>',
                'title' => 'Address',
                'value' => 'Nkumba Bufulu, Entebbe, Uganda'
              ],
              [
                'icon' => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>',
                'title' => 'Phone',
                'value' => '+256 789 728 211 / +256 703 802 019'
              ],
              [
                'icon' => '<rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>',
                'title' => 'Email',
                'value' => 'info@reposehealingcenter.com'
              ],
              [
                'icon' => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16.5 12"/>',
                'title' => 'Working Hours',
                'value' => 'Monday - Saturday, 8:00 AM - 6:00 PM'
              ]
            ];
          @endphp

          @foreach($info as $item)
            <div class="flex items-start gap-5 rounded-2xl border border-slate-200 bg-slate-50 p-6">
              <div class="mt-1 flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-green-100 text-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  {!! $item['icon'] !!}
                </svg>
              </div>
              <div>
                <h3 class="font-bold text-slate-900">{{ $item['title'] }}</h3>
                <p class="mt-1 leading-6 text-slate-600">{{ $item['value'] }}</p>
              </div>
            </div>
          @endforeach
        </div>

        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-xl sm:p-10">
          <h2 class="mb-8 text-2xl font-bold tracking-tight text-slate-900">Send us a message</h2>
          @include('components.forms.contact-form')
        </div>
      </div>
    </div>
  </section>

  <!-- Map Section -->
  <section class="h-[500px] w-full bg-slate-200">
    <iframe
      src="https://maps.google.com/maps?q=Nkumba+Bufulu,+Entebbe,+Uganda&output=embed&z=16"
      width="100%"
      height="100%"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
      title="Repose Healing Center Location"
    ></iframe>
  </section>

  @include('components.sections.cta-section')
@endsection


