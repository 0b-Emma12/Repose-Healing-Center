<form action="{{ route('admissions.store') }}" method="POST" class="space-y-6">
  @csrf

  @if(session('success'))
    <div class="rounded-xl border border-green-200 bg-green-50 p-6 text-green-900">
      <div class="flex items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-600"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <span class="font-semibold">Enquiry received</span>
      </div>
      <p class="mt-2 text-sm text-green-800">{{ session('success') }}</p>
    </div>
  @endif

  <div class="grid gap-6 md:grid-cols-2">
    <!-- Name -->
    <div class="space-y-2">
      <label for="name" class="block text-sm font-semibold text-slate-900">Full Name</label>
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

  <div class="grid gap-6 md:grid-cols-2">
    <!-- Preferred Date -->
    <div class="space-y-2">
      <label for="preferred_date" class="block text-sm font-semibold text-slate-900">Preferred admission date</label>
      <input
        type="date"
        id="preferred_date"
        name="preferred_date"
        required
        value="{{ old('preferred_date') }}"
        class="focus-ring block w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 transition focus:border-green-600 focus:bg-white"
      />
      @error('preferred_date')<span class="text-sm text-red-600">{{ $message }}</span>@enderror
    </div>

    <!-- Contact Method -->
    <div class="space-y-2">
      <label for="contact_method" class="block text-sm font-semibold text-slate-900">Preferred contact method</label>
      <div class="relative">
        <select
          id="contact_method"
          name="contact_method"
          required
          class="focus-ring block w-full appearance-none rounded-lg border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 transition focus:border-green-600 focus:bg-white"
        >
          <option value="" disabled {{ old('contact_method') ? '' : 'selected' }}>Select an option</option>
          <option value="Phone" {{ old('contact_method') === 'Phone' ? 'selected' : '' }}>Phone</option>
          <option value="Email" {{ old('contact_method') === 'Email' ? 'selected' : '' }}>Email</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-slate-500"><path d="m6 9 6 6 6-6"/></svg>
        </div>
      </div>
      @error('contact_method')<span class="text-sm text-red-600">{{ $message }}</span>@enderror
    </div>
  </div>

  <!-- Message -->
  <div class="space-y-2">
    <label for="message" class="block text-sm font-semibold text-slate-900">Additional Information <span class="font-normal text-slate-500">(Optional)</span></label>
    <textarea
      id="message"
      name="message"
      rows="4"
      class="focus-ring block w-full resize-y rounded-lg border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 transition focus:border-green-600 focus:bg-white"
      placeholder="Any details you'd like us to know..."
    >{{ old('message') }}</textarea>
    @error('message')<span class="text-sm text-red-600">{{ $message }}</span>@enderror
  </div>

  <button
    type="submit"
    class="focus-ring inline-flex w-full items-center justify-center gap-2 rounded-xl bg-green-600 px-8 py-4 font-bold text-white transition hover:bg-green-700 sm:w-auto"
  >
    Submit enquiry
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
  </button>

  <p class="text-sm leading-6 text-slate-500">
    By submitting this form, you agree to our <a href="{{ route('policies.show', 'data-privacy') }}" class="font-semibold text-green-600 hover:underline">Data Privacy Policy</a>. Your information will be kept confidential.
  </p>
</form>
