<section class="section-space bg-white" x-data="{ open: 0 }">
  <div class="container-site">
    <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">
      <div>
        <p class="text-sm font-bold uppercase tracking-[0.2em] text-green-600">
          Frequently asked
        </p>

        <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-5xl">
          Questions & <span class="text-yellow-500">answers.</span>
        </h2>

        <p class="mt-5 leading-7 text-slate-600">
          Find answers to common questions about contacting and accessing Repose Healing Center.
        </p>

        <a href="{{ route('faq') }}" class="focus-ring mt-7 inline-flex font-bold text-green-600 hover:text-green-700">
          View all FAQs
        </a>
      </div>

      <div class="divide-y divide-slate-200 rounded-2xl border border-slate-200 bg-white">
        @php
          $faqs = [
            'How can I contact Repose Healing Center?' => 'You can contact the center by phone, email or through the contact page on this website.',
            'Where is Repose Healing Center located?' => 'The center is located on Ssese View Road, Plot 2, Manyago, Entebbe, Uganda.',
            'What are your opening hours?' => 'Repose Healing Center is open Monday to Saturday, from 8:00 AM to 6:00 PM.'
          ];
        @endphp

        @foreach($faqs as $question => $answer)
          <div class="p-5 sm:p-6">
            <button
              type="button"
              @click="open === {{ $loop->index }} ? open = null : open = {{ $loop->index }}"
              class="focus-ring flex w-full items-center justify-between gap-5 rounded-lg text-left"
              :aria-expanded="open === {{ $loop->index }}"
            >
              <span class="font-bold text-slate-900">
                {{ $question }}
              </span>

              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="shrink-0 text-green-600 transition"
                :class="open === {{ $loop->index }} ? 'rotate-180' : ''"
              >
                <path d="m6 9 6 6 6-6"/>
              </svg>
            </button>

            <p
              x-show="open === {{ $loop->index }}"
              x-collapse
              class="mt-4 max-w-2xl leading-7 text-slate-600"
              style="display: {{ $loop->first ? 'block' : 'none' }}"
            >
              {{ $answer }}
            </p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
