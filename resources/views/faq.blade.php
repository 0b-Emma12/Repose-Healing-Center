@extends('layouts.app')

@section('title', 'FAQ | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'FREQUENTLY ASKED QUESTIONS',
      'title' => 'Questions',
      'accent' => 'Answered',
      'description' => 'Find answers to common questions about Repose Healing Center, contact information and accessing support.'
  ])

  <section class="section-space bg-slate-50">
    <div class="container-site max-w-4xl">
      @include('components.ui.section-title', [
          'eyebrow' => 'FAQ',
          'title' => 'How Can We',
          'accent' => 'Help?',
          'description' => 'If your question is not answered here, contact our team directly.',
          'align' => 'center'
      ])

      <div class="mt-14 space-y-4">
        @php
          $faqs = [
            'What conditions does Repose treat?' => 'We provide treatment for substance use disorders (including alcohol, cannabis/njaga, khat/miraa, and opioid dependence) as well as co-occurring mental health conditions such as depression, anxiety, trauma, and PTSD.',
            'Is treatment confidential?' => 'Yes. Repose Healing Center places absolute emphasis on safe, dignified, and strictly confidential care. We do not share your information without explicit consent.',
            'What happens during the assessment/admission process?' => 'Every client begins with a confidential clinical assessment to understand their substance use history, mental health needs, and family situation. This helps us determine the appropriate level of care and build a personalized treatment plan.',
            'Do you offer medical detox, or do you refer to a hospital partner?' => '[Confirm actual capability: Yes, we provide 24-hour medically supervised detoxification on-site / We partner with [Hospital Name] for medical detox prior to admission.]',
            'Can family visit or be involved in treatment?' => 'Yes. We recognize the central role family plays in the recovery journey. We integrate [family education sessions / family therapy / scheduled visitation] into the treatment process.',
            'What does aftercare look like once someone leaves Repose?' => 'Before discharge, each client receives a structured aftercare and relapse-prevention plan. This typically includes [referral to outpatient counseling, community support groups, and check-in calls].',
            'What are the costs, and are payment plans available?' => 'Understanding cost should not be a barrier to reaching out. Please contact us for a confidential conversation about program fees. [Add specific details here if applicable: starting range, sliding scale, payment plans].',
            'How can I contact Repose Healing Center?' => 'You can call +256 789 728 211 or +256 703 802 019, email reposehealingcenter@gmail.com, or use the interactive enquiry form.',
            'Where is Repose Healing Center located?' => 'Repose Healing Center is located on Ssese View Road, Plot 2, Manyago, Entebbe, Uganda.',
            'When is the center open?' => 'The center operates Monday to Saturday, from 8:00 AM to 6:00 PM.'
          ];
        @endphp

        @foreach($faqs as $question => $answer)
          <details class="group border border-slate-200 bg-white">
            <summary class="flex cursor-pointer list-none items-center justify-between gap-5 p-6 font-bold text-slate-900">
              <span>{{ $question }}</span>
              <span class="text-2xl text-green-600 transition group-open:rotate-45">+</span>
            </summary>
            <div class="border-t border-slate-100 px-6 pb-6 pt-4 leading-7 text-slate-600">
              {{ $answer }}
            </div>
          </details>
        @endforeach
      </div>

      <div class="mt-10 flex items-center justify-center gap-3 text-sm text-slate-500">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-600"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
        Still need help? Contact us directly.
      </div>
    </div>
  </section>
@endsection
