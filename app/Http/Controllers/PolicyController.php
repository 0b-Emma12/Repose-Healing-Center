<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolicyController extends Controller
{
    private array $policies = [
        'confidentiality' => [
            'title' => 'Confidentiality',
            'intro' => 'Repose Healing Center is committed to treating personal information and conversations with appropriate care, dignity and confidentiality.',
            'sections' => [
                [
                    'heading' => 'Respect for privacy',
                    'text' => 'Information shared with the center is handled with respect and used only for appropriate care, communication and administrative purposes.',
                ],
                [
                    'heading' => 'Responsible information handling',
                    'text' => 'Access to personal information should be limited to people who need it for legitimate responsibilities. Reasonable measures are used to protect information from inappropriate access or disclosure.',
                ],
                [
                    'heading' => 'Limits to confidentiality',
                    'text' => 'Confidentiality may have limits where disclosure is required by applicable law or where there is a serious safeguarding or safety concern. Where appropriate, the situation will be handled with sensitivity and explained to the affected person.',
                ],
            ],
        ],
        'consent' => [
            'title' => 'Consent',
            'intro' => 'Repose Healing Center values informed participation and aims to ensure that people understand the services and processes relevant to them.',
            'sections' => [
                [
                    'heading' => 'Informed participation',
                    'text' => 'Individuals should receive understandable information about the service or process they are being asked to participate in and should have an opportunity to ask questions.',
                ],
                [
                    'heading' => 'Voluntary decisions',
                    'text' => 'Consent should be given freely and without inappropriate pressure. Where a person is unable to provide consent, applicable procedures and legal requirements should be followed.',
                ],
                [
                    'heading' => 'Questions and clarification',
                    'text' => 'Individuals are encouraged to request clarification whenever they do not understand a service, process or information being provided to them.',
                ],
            ],
        ],
        'patient-rights' => [
            'title' => 'Patient Rights',
            'intro' => 'Repose Healing Center promotes respectful, dignified and non-discriminatory engagement with people seeking its services.',
            'sections' => [
                [
                    'heading' => 'Respect and dignity',
                    'text' => 'People engaging with the center should be treated respectfully and with consideration for their dignity, privacy and individual circumstances.',
                ],
                [
                    'heading' => 'Information',
                    'text' => 'Individuals should be given appropriate information about relevant services and processes and should have an opportunity to ask questions.',
                ],
                [
                    'heading' => 'Participation',
                    'text' => 'Where appropriate, individuals are encouraged to participate in decisions and discussions concerning the services they receive.',
                ],
                [
                    'heading' => 'Raising concerns',
                    'text' => 'Individuals have the opportunity to raise questions, concerns or complaints through the appropriate channels without being treated unfairly for doing so.',
                ],
            ],
        ],
        'safeguarding' => [
            'title' => 'Safeguarding',
            'intro' => 'Repose Healing Center is committed to promoting safety, dignity and appropriate protection for people who interact with the center.',
            'sections' => [
                [
                    'heading' => 'Commitment to safety',
                    'text' => 'Concerns relating to abuse, neglect, exploitation or other safeguarding risks should be taken seriously and raised through appropriate channels.',
                ],
                [
                    'heading' => 'Responding to concerns',
                    'text' => 'Safeguarding concerns should be handled promptly, respectfully and in accordance with applicable procedures and requirements.',
                ],
                [
                    'heading' => 'Confidentiality and protection',
                    'text' => 'Information relating to safeguarding concerns should be handled carefully, while recognizing that information may need to be shared where necessary for protection, safety or legal reasons.',
                ],
            ],
        ],
        'non-discrimination' => [
            'title' => 'Non-discrimination',
            'intro' => 'Repose Healing Center is committed to respectful service and does not support unfair discrimination in its engagement with people seeking assistance.',
            'sections' => [
                [
                    'heading' => 'Equal respect',
                    'text' => 'People should be treated with dignity, professionalism and respect regardless of their background or personal circumstances.',
                ],
                [
                    'heading' => 'Fair access',
                    'text' => 'The center aims to provide information and engagement fairly and respectfully, subject to applicable service requirements and availability.',
                ],
                [
                    'heading' => 'Concerns',
                    'text' => 'Anyone who believes they have experienced unfair treatment is encouraged to raise the concern through the appropriate complaints or contact channel.',
                ],
            ],
        ],
        'data-privacy' => [
            'title' => 'Data Privacy',
            'intro' => 'Repose Healing Center is committed to responsible handling of personal information and to protecting privacy throughout its digital and administrative processes.',
            'sections' => [
                [
                    'heading' => 'Information collected',
                    'text' => 'The center may collect information that people voluntarily provide when making enquiries, requesting services or communicating with the organization.',
                ],
                [
                    'heading' => 'Use of information',
                    'text' => 'Personal information should be used for legitimate purposes such as responding to enquiries, coordinating services, administration and communication.',
                ],
                [
                    'heading' => 'Protection',
                    'text' => 'Reasonable safeguards should be applied to protect personal information against inappropriate access, alteration, loss or disclosure.',
                ],
                [
                    'heading' => 'Your questions',
                    'text' => 'If you have questions about information you have provided or how it is handled, contact Repose Healing Center directly.',
                ],
            ],
        ],
        'complaints' => [
            'title' => 'Complaints',
            'intro' => 'Repose Healing Center welcomes appropriate feedback and provides a channel for people to raise concerns about their experience.',
            'sections' => [
                [
                    'heading' => 'Raising a complaint',
                    'text' => 'A complaint can be raised by contacting the center and explaining the concern clearly. Where appropriate, relevant information should be provided to help the center understand the matter.',
                ],
                [
                    'heading' => 'Review of concerns',
                    'text' => 'Complaints should be considered fairly and respectfully, with appropriate steps taken to understand the issue and respond.',
                ],
                [
                    'heading' => 'Feedback',
                    'text' => 'Feedback can help identify opportunities to improve communication, service delivery and the overall experience of people engaging with the center.',
                ],
            ],
        ],
    ];

    public function show(string $slug)
    {
        if (! array_key_exists($slug, $this->policies)) {
            abort(404);
        }

        $policy = $this->policies[$slug];

        return view('policies.show', compact('policy'));
    }
}
