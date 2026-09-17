<form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
  @csrf

  @if(session('success'))
    <div class="rounded-xl border border-green-200 bg-green-50 p-6 text-green-900">
      <div class="flex items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-600"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <span class="font-semibold">Message sent</span>
      </div>
      <p class="mt-2 text-sm text-green-800">{{ session('success') }}</p>
    </div>
  @endif

  <div class="grid gap-6 md:grid-cols-2">
    <!-- Name -->
    <div class="space-y-2">
      <label for="name" class="block text-sm font-semibold text-slate-900">Name</label>
      <input
        type="text"
        id="name"
        name="name"
        required
        value="{{ old('name') }}"
        class="focus-ring block w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 transition focus:border-green-600 focus:bg-white"
        placeholder="Jane Doe"
      />
      @error('name')<span class="text-sm text-red-600">{{ $message }}</span>@enderror
    </div>

    <!-- Phone -->
    <div class="space-y-2">
      <label for="phone" class="block text-sm font-semibold text-slate-900">Phone</label>
      <input
        type="tel"
        id="phone"
        name="phone"
        required
        value="{{ old('phone') }}"
        class="focus-ring block w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 transition focus:border-green-600 focus:bg-white"
        placeholder="+256 700 000 000"
      />
      @error('phone')<span class="text-sm text-red-600">{{ $message }}</span>@enderror
    </div>
  </div>

  <div class="grid gap-6 md:grid-cols-2">
    <!-- Email -->
    <div class="space-y-2">
      <label for="email" class="block text-sm font-semibold text-slate-900">Email Address</label>
      <input
        type="email"
        id="email"
        name="email"
        required
        value="{{ old('email') }}"
        class="focus-ring block w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 transition focus:border-green-600 focus:bg-white"
        placeholder="jane@example.com"
      />
      @error('email')<span class="text-sm text-red-600">{{ $message }}</span>@enderror
    </div>

    <!-- Subject -->
    <div class="space-y-2">
      <label for="subject" class="block text-sm font-semibold text-slate-900">Subject</label>
      <input
        type="text"
        id="subject"
        name="subject"
        required
        value="{{ old('subject') }}"
        class="focus-ring block w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 transition focus:border-green-600 focus:bg-white"
        placeholder="How can we help?"
      />
      @error('subject')<span class="text-sm text-red-600">{{ $message }}</span>@enderror
    </div>
  </div>

  <!-- Message -->
  <div class="space-y-2">
    <label for="message" class="block text-sm font-semibold text-slate-900">Message</label>
    <textarea
      id="message"
      name="message"
      rows="5"
      required
      class="focus-ring block w-full resize-y rounded-lg border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 transition focus:border-green-600 focus:bg-white"
      placeholder="Please provide details about your enquiry..."
    >{{ old('message') }}</textarea>
    @error('message')<span class="text-sm text-red-600">{{ $message }}</span>@enderror
  </div>

  <button
    type="submit"
    class="focus-ring inline-flex w-full items-center justify-center gap-2 rounded-xl bg-green-600 px-8 py-4 font-bold text-white transition hover:bg-green-700 sm:w-auto"
  >
    Send message
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
  </button>
</form>
