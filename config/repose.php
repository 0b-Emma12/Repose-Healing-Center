<?php

return [
    'conditions' => [
        'alcohol-dependence' => [
            'title' => 'Alcohol Dependence',
            'eyebrow' => 'SUBSTANCE USE',
            'description' => 'Medically-informed withdrawal support and therapy for alcohol dependence.',
            'content' => '
                <h2>Alcohol Dependence</h2>
                <p>Alcohol remains the most common substance-use concern we see, including dependence on commercially produced and locally distilled spirits (e.g., waragi). Treatment includes medically-informed withdrawal support, therapy, and relapse-prevention planning.</p>
            ',
        ],
        'cannabis-use' => [
            'title' => 'Cannabis (Njaga) Use',
            'eyebrow' => 'SUBSTANCE USE',
            'description' => 'Structured treatment for cannabis dependence and related academic or family stress.',
            'content' => '
                <h2>Cannabis (Njaga) Use</h2>
                <p>Structured treatment for cannabis dependence, including for younger clients where cannabis use often co-occurs with academic or family stress.</p>
            ',
        ],
        'khat-miraa' => [
            'title' => 'Khat/Miraa Use',
            'eyebrow' => 'SUBSTANCE USE',
            'description' => 'Support for khat dependence addressing both physical and behavioral patterns.',
            'content' => '
                <h2>Khat/Miraa Use</h2>
                <p>Support for khat dependence, particularly relevant in border and trading communities, addressing both physical dependence patterns and underlying stimulant-use behavior.</p>
            ',
        ],
        'opioid-prescription' => [
            'title' => 'Opioid and Prescription Misuse',
            'eyebrow' => 'SUBSTANCE USE',
            'description' => 'Treatment for opioid dependence and prescription medication misuse.',
            'content' => '
                <h2>Opioid and Prescription Medication Misuse</h2>
                <p>Treatment for opioid dependence and misuse of prescription medications, including medically supervised approaches to withdrawal where appropriate.</p>
            ',
        ],
        'other-substances' => [
            'title' => 'Other Substance Use Disorders',
            'eyebrow' => 'SUBSTANCE USE',
            'description' => 'Treatment for other substances including inhalants and stimulants.',
            'content' => '
                <h2>Other Substance Use Disorders</h2>
                <p>[List any others actually treated — e.g. inhalants, other stimulants]</p>
            ',
        ],
        'depression' => [
            'title' => 'Depression',
            'eyebrow' => 'MENTAL HEALTH',
            'description' => 'Support for individuals experiencing persistent low mood and loss of interest.',
            'content' => '
                <h2>Depression</h2>
                <p>Support for individuals experiencing persistent low mood, loss of interest, and related symptoms, delivered with attention to reducing stigma — a significant barrier to care in many Ugandan communities.</p>
            ',
        ],
        'anxiety' => [
            'title' => 'Anxiety Disorders',
            'eyebrow' => 'MENTAL HEALTH',
            'description' => 'Treatment for generalized anxiety, panic-related difficulties, and related conditions.',
            'content' => '
                <h2>Anxiety Disorders</h2>
                <p>Treatment for generalized anxiety, panic-related difficulties, and related conditions.</p>
            ',
        ],
        'trauma-and-ptsd' => [
            'title' => 'Trauma and PTSD',
            'eyebrow' => 'MENTAL HEALTH',
            'description' => 'Trauma-informed care for individuals affected by traumatic experiences.',
            'content' => '
                <h2>Trauma and PTSD</h2>
                <p>Trauma-informed care for individuals affected by traumatic experiences, including <span class="font-bold text-slate-800">[if applicable: survivors of gender-based violence, conflict-related trauma, or other relevant local contexts — confirm scope of practice]</span>.</p>
            ',
        ],
        'dual-diagnosis' => [
            'title' => 'Dual Diagnosis',
            'eyebrow' => 'MENTAL HEALTH',
            'description' => 'Integrated care for clients experiencing both substance use and a mental health condition.',
            'content' => '
                <h2>Dual Diagnosis</h2>
                <p>Integrated care for clients experiencing both substance use and a co-occurring mental health condition — treated together rather than separately, since one often drives the other.</p>
            ',
        ],
    ],

    'programmes' => [
        'medical-detox' => [
            'title' => 'Medical Detoxification',
            'eyebrow' => 'CLINICAL SERVICES',
            'description' => 'Safe, medically supervised withdrawal management for alcohol and substances.',
            'content' => '
                <h2>Safe and Comfortable Detoxification</h2>
                <p>Detoxing from alcohol or certain drugs can be dangerous and physically uncomfortable if done without medical supervision. Our Medical Detoxification programme provides 24-hour medical monitoring to ensure your safety and minimise withdrawal symptoms.</p>
                <h3>What to Expect</h3>
                <p>Upon admission, our medical team conducts a thorough assessment and creates a customised detox plan. We provide compassionate care, administering appropriate medications to ease discomfort, preparing you for the next phase of therapeutic rehabilitation.</p>
            ',
        ],
        'residential-care' => [
            'title' => 'Residential Care',
            'eyebrow' => 'CARE SETTINGS',
            'description' => 'A structured, 24-hour supportive environment away from everyday triggers.',
            'content' => '
                <h2>Focus Fully on Your Recovery</h2>
                <p>Our Residential Care programme in Entebbe provides a safe, serene environment where you can step away from the pressures of daily life and focus entirely on healing. Residential treatment is ideal for those requiring intensive support and structure.</p>
                <h3>The Residential Experience</h3>
                <p>Residents engage in a structured daily routine that includes individual therapy, group counselling, psycho-education, fitness, and holistic wellness activities. With round-the-clock support, you are never alone on your journey.</p>
            ',
        ],
        'outpatient-care' => [
            'title' => 'Outpatient Programme',
            'eyebrow' => 'CARE SETTINGS',
            'description' => 'Flexible, professional support while maintaining your daily responsibilities.',
            'content' => '
                <h2>Healing While Maintaining Your Routine</h2>
                <p>Not everyone requires residential care. Our Outpatient Programme offers robust clinical support while allowing you to continue working, studying, or caring for your family. This program is ideal for mild to moderate conditions or as a step-down from residential care.</p>
                <h3>Flexible Scheduling</h3>
                <p>We offer flexible therapy sessions and group meetings that can be scheduled around your life commitments, ensuring you get the help you need without disrupting your daily routine.</p>
            ',
        ],
        '12-step' => [
            'title' => '12-Step Programme',
            'eyebrow' => 'ONGOING PROGRAMMES',
            'description' => 'Integration of the proven 12-Step philosophy into your recovery journey.',
            'content' => '
                <h2>A Proven Path to Sobriety</h2>
                <p>We integrate the principles of the 12-Step recovery model into our addiction treatment programs. This globally recognised framework provides a spiritual and practical foundation for long-term sobriety.</p>
                <h3>Community and Accountability</h3>
                <p>Through 12-step facilitation, we help clients understand the steps, connect with local fellowship meetings (AA/NA), and build a supportive community that extends far beyond their time at our centre.</p>
            ',
        ],
        'aftercare' => [
            'title' => 'Aftercare & Relapse Prevention',
            'eyebrow' => 'ONGOING PROGRAMMES',
            'description' => 'Continuous support to ensure long-term wellness after formal treatment ends.',
            'content' => '
                <h2>Support That Continues</h2>
                <p>Recovery does not end when you leave our centre; in many ways, that is when the real work begins. We provide a robust Aftercare Programme designed to support your transition back into everyday life.</p>
                <h3>Relapse Prevention Planning</h3>
                <p>Before discharge, you will work with your counsellor to develop a comprehensive relapse prevention plan. This includes identifying triggers, establishing healthy routines, and scheduling regular check-in sessions to ensure you stay on track.</p>
            ',
        ],
    ],

    'audiences' => [
        'families' => [
            'title' => 'For Families',
            'eyebrow' => 'SUPPORT NETWORK',
            'description' => 'Guidance, education, and therapy for the loved ones of those in recovery.',
            'content' => '
                <h2>Healing the Whole Family</h2>
                <p>Addiction and mental health challenges affect everyone close to the individual. We believe that family involvement is a crucial component of the healing process. When families understand the illness, outcomes improve significantly.</p>
                <h3>Family Support Programmes</h3>
                <p>We offer family counselling sessions, psycho-educational workshops, and dedicated support groups for relatives. We will guide you on how to set healthy boundaries, communicate effectively, and support your loved one without enabling destructive behaviours.</p>
            ',
        ],
        'organisations' => [
            'title' => 'For Organisations',
            'eyebrow' => 'CORPORATE WELLNESS',
            'description' => 'Support arrangements with employers, schools, and institutions to promote mental wellness in the workplace.',
            'content' => '
                <h2>Promoting Workplace Wellbeing</h2>
                <p>Mental health and substance problems come to work whether or not they are invited. They arrive as absence, as errors, as a good employee going quiet, as a manager improvising responses to situations no one trained them for. Organisations that plan for this do better than organisations that are surprised by it, and Repose Healing Center works with employers who want to promote employee mental wellness and prevent mental-health-related problems in the workplace.</p>
                <p>Our work with organisations is built around the Employee Assistance Programme, and every engagement is customised: it begins with a needs assessment of your organisation, not with a package off a shelf. The components include:</p>
                
                <h3>Employee Assistance Programme</h3>
                <p>The full arrangement: needs assessment, confidential individual support for employees, counselling, education, and training, shaped to your workforce.</p>
                
                <h3>Workplace Counselling and Employee Support</h3>
                <p>The individual strand: how a struggling employee gets confidential help, whether they come forward themselves or are referred.</p>
                
                <h3>Awareness, Psycho-education and Stress-management Training</h3>
                <p>Clinician-led sessions that teach staff to recognise difficulty in themselves and colleagues and what to do about it, and practical training for teams under pressure.</p>
                
                <h3>Confidentiality and Trust</h3>
                <p>What do we get told about an employee who uses the service? The short answer: their care is confidential, and the arrangement is designed so that using it is safe for them. An EAP that employees don\'t trust is an EAP nobody uses, and we would rather set the boundary out plainly than let it be discovered awkwardly.</p>
            ',
        ],
        'professionals' => [
            'title' => 'Referrals for Professionals',
            'eyebrow' => 'MEDICAL PARTNERS',
            'description' => 'Information for doctors, clinics, and therapists referring patients to our care.',
            'content' => '
                <h2>Partnering for Better Patient Care</h2>
                <p>We welcome referrals from GPs, psychiatrists, psychologists, and other healthcare professionals. Our team is committed to collaborative care, ensuring seamless communication and continuity of treatment for your patients.</p>
                <h3>The Referral Process</h3>
                <p>To refer a patient to Repose Healing Center, please contact our clinical admissions team. We provide comprehensive psychiatric assessments and will keep you informed of your patient\'s progress and discharge plan, respecting all confidentiality guidelines.</p>
            ',
        ]
    ]
];
