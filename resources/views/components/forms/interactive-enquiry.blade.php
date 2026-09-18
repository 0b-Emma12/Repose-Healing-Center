<div x-data="enquiryForm()" class="w-full">
    <!-- Intro Step -->
    <div x-show="step === -1" x-transition.opacity>
        <div class="mb-4 font-black tracking-widest text-[#FFD500] uppercase text-xs">Confidential enquiry</div>
        <h2 class="text-3xl font-extrabold text-slate-900 mb-4 uppercase tracking-wide">Let's find the right first step</h2>
        <div class="h-0.5 w-12 bg-[#FFD500] mb-6"></div>
        <p class="text-slate-600 mb-6 leading-relaxed">A few short questions help our admissions team understand your situation before you speak with anyone - no commitment, no cost, and nothing shared beyond our team.</p>
        <ul class="space-y-3 text-slate-600 mb-8">
            <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-green-500 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                Takes about 2 minutes
            </li>
            <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-green-500 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                Nothing here replaces emergency care
            </li>
            <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-green-500 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                You'll choose how we contact you: call, WhatsApp, or email
            </li>
        </ul>
        <button @click="next()" class="inline-flex items-center justify-center gap-2 rounded bg-green-600 px-8 py-3 text-sm font-bold uppercase tracking-wider text-white transition hover:bg-green-700 w-full sm:w-auto">
            Begin Enquiry
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </button>
    </div>

    <!-- Questions -->
    <template x-for="(q, index) in questions" :key="index">
        <div x-show="step === index" x-transition.opacity style="display: none;">
            
            <div class="flex items-center justify-between mb-6">
                <div class="flex-1 h-1.5 bg-slate-100 rounded-full overflow-hidden mr-4">
                    <div class="h-full bg-green-500 transition-all duration-300" :style="`width: ${progressPct}%`"></div>
                </div>
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest" x-text="`Step ${index + 1} of ${totalSteps}`"></span>
            </div>

            <button @click="back()" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-400 hover:text-slate-700 mb-6 transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                Back
            </button>

            <h2 class="text-2xl font-extrabold text-slate-900 mb-2 uppercase tracking-wide" x-text="q.title"></h2>
            <p x-show="q.sub" class="text-slate-500 mb-8" x-text="q.sub"></p>

            <!-- Single Choice -->
            <div x-show="q.type === 'single'" class="space-y-3">
                <template x-for="opt in q.options" :key="opt">
                    <button 
                        @click="selectOption(opt)" 
                        :class="answers[q.key] === opt ? 'border-green-600 bg-green-50 ring-1 ring-green-600' : 'border-slate-200 bg-white hover:border-green-400'"
                        class="w-full text-left flex items-center gap-4 p-4 rounded-xl border-2 transition-all duration-200">
                        <div 
                            :class="answers[q.key] === opt ? 'border-green-600' : 'border-slate-300'"
                            class="w-5 h-5 rounded-full border-2 flex items-center justify-center shrink-0">
                            <div x-show="answers[q.key] === opt" class="w-2.5 h-2.5 rounded-full bg-green-600"></div>
                        </div>
                        <span class="font-semibold text-slate-700" x-text="opt"></span>
                    </button>
                </template>
            </div>

            <!-- Text Input -->
            <div x-show="q.type === 'text'" class="space-y-4">
                <input type="text" x-model="answers[q.key]" :placeholder="q.placeholder" @keydown.enter.prevent="next()"
                    class="block w-full rounded-xl border border-slate-300 bg-white px-5 py-4 text-slate-900 transition focus:border-green-600 focus:ring-1 focus:ring-green-600 outline-none" />
            </div>

            <!-- Contact Input -->
            <div x-show="q.type === 'contact'" class="space-y-5">
                <div>
                    <label class="block text-sm font-semibold text-slate-900 mb-2">Full Name</label>
                    <input type="text" x-model="answers.name" placeholder="Your name" class="block w-full rounded-xl border border-slate-300 bg-white px-5 py-3 text-slate-900 transition focus:border-green-600 focus:ring-1 focus:ring-green-600 outline-none" />
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-900 mb-2">Phone Number</label>
                    <input type="tel" x-model="answers.phone" placeholder="e.g. 0789 728 211" class="block w-full rounded-xl border border-slate-300 bg-white px-5 py-3 text-slate-900 transition focus:border-green-600 focus:ring-1 focus:ring-green-600 outline-none" />
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-900 mb-2">Email <span class="font-normal text-slate-400">(Optional)</span></label>
                    <input type="email" x-model="answers.email" placeholder="you@example.com" class="block w-full rounded-xl border border-slate-300 bg-white px-5 py-3 text-slate-900 transition focus:border-green-600 focus:ring-1 focus:ring-green-600 outline-none" />
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-900 mb-2">Anything else you'd like us to know? <span class="font-normal text-slate-400">(Optional)</span></label>
                    <textarea x-model="answers.notes" rows="3" placeholder="Optional details..." class="block w-full rounded-xl border border-slate-300 bg-white px-5 py-3 text-slate-900 transition focus:border-green-600 focus:ring-1 focus:ring-green-600 outline-none resize-y"></textarea>
                </div>
            </div>

            <div class="mt-8 pt-6 border-t border-slate-100 flex justify-end">
                <button 
                    @click="next()" 
                    :disabled="!canProceed"
                    :class="!canProceed ? 'opacity-50 cursor-not-allowed bg-slate-300' : 'bg-green-600 hover:bg-green-700'"
                    class="inline-flex items-center justify-center gap-2 rounded px-8 py-3 text-sm font-bold uppercase tracking-wider text-white transition w-full sm:w-auto">
                    Continue
                </button>
            </div>
        </div>
    </template>

    <!-- Review / Submission Step -->
    <div x-show="step === totalSteps" x-transition.opacity style="display: none;">
        <button @click="back()" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-400 hover:text-slate-700 mb-6 transition">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
            Back
        </button>

        <h2 class="text-2xl font-extrabold text-slate-900 mb-2 uppercase tracking-wide">You're ready to reach out</h2>
        <p class="text-slate-500 mb-8">Here's a summary of what you shared. Pick whichever way is easiest for you - our admissions team will follow up.</p>

        <div class="bg-slate-50 rounded-xl border border-slate-200 p-6 mb-8 space-y-3 text-sm">
            <div class="flex justify-between border-b border-slate-200 pb-3"><span class="text-slate-500">This is for</span><span class="font-semibold text-slate-900 text-right" x-text="answers.who || '-'"></span></div>
            <div class="flex justify-between border-b border-slate-200 pb-3"><span class="text-slate-500">Main concern</span><span class="font-semibold text-slate-900 text-right" x-text="answers.concern || '-'"></span></div>
            <div class="flex justify-between border-b border-slate-200 pb-3"><span class="text-slate-500">Urgency</span><span class="font-semibold text-slate-900 text-right" x-text="answers.urgency || '-'"></span></div>
            <div class="flex justify-between border-b border-slate-200 pb-3"><span class="text-slate-500">Type of care</span><span class="font-semibold text-slate-900 text-right" x-text="answers.care_type || '-'"></span></div>
            <div class="flex justify-between border-b border-slate-200 pb-3"><span class="text-slate-500">Age range</span><span class="font-semibold text-slate-900 text-right" x-text="answers.age_range || '-'"></span></div>
            <div class="flex justify-between border-b border-slate-200 pb-3"><span class="text-slate-500">Location</span><span class="font-semibold text-slate-900 text-right" x-text="answers.location || '-'"></span></div>
            <div class="flex justify-between border-b border-slate-200 pb-3"><span class="text-slate-500">Preferred contact</span><span class="font-semibold text-slate-900 text-right" x-text="answers.contact_method || '-'"></span></div>
            <div class="flex justify-between border-b border-slate-200 pb-3"><span class="text-slate-500">Name</span><span class="font-semibold text-slate-900 text-right" x-text="answers.name || '-'"></span></div>
            <div class="flex justify-between border-b border-slate-200 pb-3"><span class="text-slate-500">Phone</span><span class="font-semibold text-slate-900 text-right" x-text="answers.phone || '-'"></span></div>
            <div class="flex justify-between"><span class="text-slate-500">Email</span><span class="font-semibold text-slate-900 text-right" x-text="answers.email || '-'"></span></div>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <a :href="waUrl" target="_blank" rel="noopener" class="flex flex-col items-center justify-center gap-2 p-6 rounded-xl bg-green-600 text-white hover:bg-green-700 transition text-center shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.1-1.7-.8-2-.9-.3-.1-.5-.1-.6.1-.2.3-.7.9-.9 1-.2.2-.3.2-.6.1-.3-.1-1.2-.4-2.3-1.4-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6.1-.1.3-.3.4-.5.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5C10.6 9 10.1 7.8 9.9 7.3c-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.2.3-.9.9-.9 2.2s1 2.6 1.1 2.7c.1.2 2 3 4.7 4.2.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.5-.1 1.7-.7 1.9-1.3.2-.6.2-1.2.2-1.3-.1-.1-.3-.2-.6-.3z"/><path d="M12 2a10 10 0 00-8.6 15L2 22l5.1-1.3A10 10 0 1012 2zm0 18.2a8.2 8.2 0 01-4.2-1.1l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1112 20.2z"/></svg>
                <span class="font-bold">Send on WhatsApp</span>
                <span class="text-xs text-green-200">Fastest way to reach us</span>
            </a>
            <a href="tel:+256789728211" class="flex flex-col items-center justify-center gap-2 p-6 rounded-xl bg-white border-2 border-slate-200 text-slate-800 hover:border-green-600 transition text-center shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-600"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <span class="font-bold">Call us now</span>
                <span class="text-xs text-slate-500">+256 789 728 211</span>
            </a>
            <a :href="mailUrl" class="flex flex-col items-center justify-center gap-2 p-6 rounded-xl bg-white border-2 border-slate-200 text-slate-800 hover:border-green-600 transition text-center shadow-sm sm:col-span-2 lg:col-span-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-600"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                <span class="font-bold">Email us</span>
                <span class="text-xs text-slate-500">reposehealingcenter@gmail.com</span>
            </a>
        </div>

        <div class="mt-6 text-center text-sm text-slate-500">
            Everything you've shared stays private and goes only to Repose's admissions team.
        </div>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('enquiryForm', () => ({
            step: -1,
            answers: {
                who: '', concern: '', urgency: '', care_type: '',
                age_range: '', location: '', contact_method: '',
                name: '', phone: '', email: '', notes: ''
            },
            questions: [
                { key: 'who', title: 'Who is this enquiry for?', sub: 'This helps us prepare the right first conversation.', type: 'single', options: ['Myself', 'A family member', 'A friend', 'Someone else in my care'] },
                { key: 'concern', title: 'What\'s the main concern?', sub: 'There\'s no wrong answer here - this just guides who calls you back.', type: 'single', options: ['Alcohol use', 'Drug use', 'Mental health & emotional wellbeing', 'Both substance use and mental health', 'Not sure yet'] },
                { key: 'urgency', title: 'How urgent does this feel?', sub: '', type: 'single', options: ['We need help this week', 'Within the next month', 'Just exploring options for now'] },
                { key: 'care_type', title: 'What kind of care are you considering?', sub: '', type: 'single', options: ['Residential / live-in care', 'Outpatient / visiting sessions', 'Not sure - I\'d like guidance'] },
                { key: 'age_range', title: 'What\'s the age range of the person needing care?', sub: '', type: 'single', options: ['Under 18', '18-25', '26-40', '41-60', '60 and above'] },
                { key: 'location', title: 'Where are you located?', sub: 'District or town is enough - e.g. Kampala, Wakiso, Entebbe.', type: 'text', placeholder: 'e.g. Entebbe, Wakiso District' },
                { key: 'contact_method', title: 'How would you prefer we reach you?', sub: '', type: 'single', options: ['Phone call', 'WhatsApp message', 'Email'] },
                { key: 'details', title: 'Almost done - how can we reach you?', sub: 'Your details stay confidential and go only to our admissions team.', type: 'contact' }
            ],
            get totalSteps() { return this.questions.length; },
            get currentQuestion() { return this.questions[this.step]; },
            get progressPct() { return Math.round(((this.step + 1) / (this.totalSteps + 1)) * 100); },
            get canProceed() {
                if (this.step < 0) return true;
                if (this.step >= this.totalSteps) return false;
                let q = this.currentQuestion;
                if (q.type === 'single') return !!this.answers[q.key];
                if (q.type === 'text') return !!this.answers[q.key].trim();
                if (q.type === 'contact') return !!this.answers.name.trim() && !!this.answers.phone.trim();
                return false;
            },
            next() { if (this.canProceed) this.step++; },
            back() { if (this.step > -1) this.step--; },
            selectOption(opt) {
                this.answers[this.currentQuestion.key] = opt;
                setTimeout(() => this.next(), 200); // auto advance on single choice
            },
            buildMessage() {
                return `New enquiry from the Repose website:\nThis is for: ${this.answers.who}\nMain concern: ${this.answers.concern}\nUrgency: ${this.answers.urgency}\nType of care: ${this.answers.care_type}\nAge range: ${this.answers.age_range}\nLocation: ${this.answers.location}\nPreferred contact: ${this.answers.contact_method}\nName: ${this.answers.name}\nPhone: ${this.answers.phone}\nEmail: ${this.answers.email || '-'}\nNotes: ${this.answers.notes || '-'}`;
            },
            get waUrl() {
                return 'https://wa.me/256789728211?text=' + encodeURIComponent(this.buildMessage());
            },
            get mailUrl() {
                return 'mailto:reposehealingcenter@gmail.com?subject=' + encodeURIComponent('New enquiry from website - ' + this.answers.name) + '&body=' + encodeURIComponent(this.buildMessage());
            }
        }));
    });
</script>
