@extends('layouts.app')

@section('title', 'Weekly Schedule | Repose Healing Center')

@section('content')
  @include('components.ui.page-hero', [
      'eyebrow' => 'DAILY ROUTINE',
      'title' => 'Weekly',
      'accent' => 'Schedule',
      'description' => 'A consistent daily schedule combining individual counseling, group therapy, and structured activity supports stability and engagement during treatment.'
  ])

  <section class="section-space bg-slate-50 relative">
    <div class="container-site max-w-4xl relative z-10 lg:-mt-24">
      <div class="bg-white p-6 shadow-xl sm:p-12 border border-slate-200">
        <h2 class="text-2xl font-extrabold uppercase tracking-wide text-slate-900 mb-8 text-center">A Typical Day at Repose</h2>
        
        <div class="overflow-x-auto">
          <table class="w-full text-left border-collapse">
            <thead>
              <tr class="bg-slate-100 border-b-2 border-green-600">
                <th class="py-4 px-6 font-bold text-slate-900 uppercase tracking-widest text-sm w-1/3">Time</th>
                <th class="py-4 px-6 font-bold text-slate-900 uppercase tracking-widest text-sm">Activity</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-4 px-6 font-semibold text-slate-700">7:00 AM</td>
                <td class="py-4 px-6 text-slate-600">Morning routine / wake</td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-4 px-6 font-semibold text-slate-700">8:00 AM</td>
                <td class="py-4 px-6 text-slate-600">Breakfast</td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-4 px-6 font-semibold text-slate-700">9:00 AM</td>
                <td class="py-4 px-6 text-slate-600">Individual or group counseling</td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-4 px-6 font-semibold text-slate-700">11:00 AM</td>
                <td class="py-4 px-6 text-slate-600"><span class="font-bold text-slate-800">[Activity - fitness, structured chores, skills session]</span></td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-4 px-6 font-semibold text-slate-700">1:00 PM</td>
                <td class="py-4 px-6 text-slate-600">Lunch</td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-4 px-6 font-semibold text-slate-700">2:30 PM</td>
                <td class="py-4 px-6 text-slate-600">Group therapy / psychoeducation session</td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-4 px-6 font-semibold text-slate-700">4:00 PM</td>
                <td class="py-4 px-6 text-slate-600">Free time / rest</td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-4 px-6 font-semibold text-slate-700">6:00 PM</td>
                <td class="py-4 px-6 text-slate-600">Dinner</td>
              </tr>
              <tr class="hover:bg-slate-50 transition-colors">
                <td class="py-4 px-6 font-semibold text-slate-700">7:30 PM</td>
                <td class="py-4 px-6 text-slate-600">Evening reflection / <span class="font-bold text-slate-800">[faith-based session if applicable]</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <p class="mt-8 text-sm text-slate-500 text-center italic">
          *Note: This is an example structure. The schedule may vary slightly based on individual treatment plans and the day of the week.
        </p>

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
