<section class="section-space bg-slate-50">
  <div class="container-site">
    <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-20">
      <div>
        @include('components.ui.section-title', [
            'eyebrow' => 'OUR APPROACH',
            'title' => 'How Treatment Works at',
            'accent' => 'Repose.',
            'align' => 'left',
        ])
        <p class="mt-6 text-lg leading-8 text-slate-600">
          At Repose Healing Center, treatment addresses the underlying causes of substance use and mental health difficulty through structured therapy, clinical support, and a stable residential or outpatient environment - not a one-size-fits-all program.
        </p>
        
        <div class="mt-10 space-y-8">
          <div class="flex gap-4">
            <div class="mt-1 flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-green-100 text-green-600">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-bold text-slate-900">Individualized Care</h3>
              <p class="mt-2 leading-7 text-slate-600">Every treatment plan is built around the person, not a fixed template. Assessment on admission shapes a plan specific to the client's substance use history, mental health needs, and family situation.</p>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="mt-1 flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-green-100 text-green-600">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-bold text-slate-900">Evidence-Based Methods</h3>
              <p class="mt-2 leading-7 text-slate-600">Our clinical team uses established therapeutic approaches - including <span class="font-bold text-slate-800">[CBT / DBT / motivational interviewing]</span> - combined with ongoing clinical review.</p>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="mt-1 flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-green-100 text-green-600">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-bold text-slate-900">Family-Centered Recovery</h3>
              <p class="mt-2 leading-7 text-slate-600">Recognizing the central role family plays in Ugandan recovery journeys, Repose integrates <span class="font-bold text-slate-800">[family education sessions / family therapy / visitation structure]</span> into the treatment process.</p>
            </div>
          </div>
        </div>

        <div class="mt-10">
          <a href="{{ route('about') }}" class="inline-flex items-center gap-2 font-bold uppercase tracking-wider text-green-700 transition hover:text-green-800">
            Explore Our Treatment Approach
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
        </div>
      </div>

      <div class="relative">
        <div class="absolute -left-4 -top-4 h-full w-full rounded-2xl border-2 border-green-600"></div>
        <img
          src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=800&q=80"
          alt="Individual counseling session"
          class="relative z-10 rounded-2xl object-cover shadow-2xl"
        />
        <div class="absolute -bottom-8 -right-8 z-20 rounded-xl bg-white p-6 shadow-xl">
          <div class="flex items-center gap-4">
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-yellow-500 text-slate-900">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
            </div>
            <div>
              <p class="text-sm font-bold uppercase tracking-widest text-slate-500">Clinical Care</p>
              <p class="font-extrabold text-slate-900">Medically-Informed</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
