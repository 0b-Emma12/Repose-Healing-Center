@extends('layouts.app')

@section('title', 'Programs & Fees | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'ADMISSIONS',
      'title' => 'Programs &',
      'accent' => 'Fees',
      'description' => 'Understanding cost should not be a barrier to reaching out. Review our program options and what is included in your care.'
  ])

  <section class="section-space bg-slate-50 relative">
    <div class="container-site max-w-4xl relative z-10 lg:-mt-24">
      <div class="bg-white p-6 shadow-xl sm:p-12 border border-slate-200">
        
        <div class="mb-12">
            <h2 class="text-3xl font-extrabold uppercase tracking-wide text-slate-900 mb-6">Program Lengths</h2>
            <div class="h-1 w-16 bg-yellow-500 mb-6"></div>
            <ul class="space-y-4 text-lg text-slate-700">
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    <span><span class="font-bold text-slate-900">Short-term:</span> <span class="font-bold text-slate-800">[30 days]</span></span>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    <span><span class="font-bold text-slate-900">Standard:</span> <span class="font-bold text-slate-800">[60 days]</span></span>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    <span><span class="font-bold text-slate-900">Extended:</span> <span class="font-bold text-slate-800">[90 days]</span></span>
                </li>
            </ul>
        </div>

        <div class="mb-12">
            <h2 class="text-3xl font-extrabold uppercase tracking-wide text-slate-900 mb-6">What's Included</h2>
            <div class="h-1 w-16 bg-yellow-500 mb-6"></div>
            <div class="grid sm:grid-cols-2 gap-4">
                <div class="bg-slate-50 p-6 rounded-xl border border-slate-100">
                    <ul class="space-y-3 text-slate-700">
                        <li class="flex items-center gap-3"><div class="w-2 h-2 rounded-full bg-green-500"></div> Accommodation and meals</li>
                        <li class="flex items-center gap-3"><div class="w-2 h-2 rounded-full bg-green-500"></div> Individual and group therapy sessions</li>
                        <li class="flex items-center gap-3"><div class="w-2 h-2 rounded-full bg-green-500"></div> Medical/clinical review</li>
                        <li class="flex items-center gap-3"><div class="w-2 h-2 rounded-full bg-green-500 font-bold text-slate-800"></div> <span class="font-bold text-slate-800">[Anything else genuinely included]</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div>
            <h2 class="text-3xl font-extrabold uppercase tracking-wide text-slate-900 mb-6">Cost and Payment</h2>
            <div class="h-1 w-16 bg-yellow-500 mb-6"></div>
            <div class="prose prose-lg text-slate-600 max-w-none">
                <p>Understanding cost should not be a barrier to reaching out. Contact us for a confidential conversation about program fees.</p>
                <div class="bg-yellow-50 border-l-4 border-yellow-500 p-6 my-6 text-slate-800">
                    <strong><span class="font-bold text-slate-900">[If possible, give at least a starting range or "from UGX X" - this single change removes one of the largest hesitation points for Ugandan families. If sliding-scale fees, payment plans, or partial NHIF-equivalent support are available, state this clearly - it is often the deciding factor for local families.]</span></strong>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="{{ route('get-started') }}" class="inline-flex items-center gap-2 rounded bg-yellow-500 px-8 py-4 text-[15px] font-bold uppercase tracking-widest text-slate-900 transition hover:bg-yellow-400">
                Start a Confidential Enquiry
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
        </div>
      </div>
    </div>
  </section>
@endsection
