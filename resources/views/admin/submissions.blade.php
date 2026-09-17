<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Submissions | Repose Healing Center</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 antialiased p-8">
  <div class="max-w-6xl mx-auto space-y-12">
    <header class="flex justify-between items-end border-b pb-4 border-gray-300">
      <div>
        <h1 class="text-3xl font-bold text-gray-900">Form Submissions</h1>
        <p class="text-gray-500 mt-1">Manage contact and admission enquiries.</p>
      </div>
      <a href="{{ route('home') }}" class="text-green-600 hover:underline">Back to Site &rarr;</a>
    </header>

    <section>
      <h2 class="text-2xl font-semibold mb-4 text-green-700">Admissions Enquiries</h2>
      <div class="bg-white rounded-lg shadow overflow-hidden border border-gray-200">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Date</th>
              <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Name</th>
              <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Contact Details</th>
              <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Pref. Date</th>
              <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Pref. Method</th>
              <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Message</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 bg-white">
            @forelse($admissionEnquiries as $enquiry)
              <tr class="hover:bg-gray-50">
                <td class="px-6 py-4 whitespace-nowrap text-gray-500">{{ $enquiry->created_at->format('M d, Y H:i') }}</td>
                <td class="px-6 py-4 font-medium text-gray-900">{{ $enquiry->name }}</td>
                <td class="px-6 py-4">
                  <div class="text-gray-900">{{ $enquiry->phone }}</div>
                  <div class="text-gray-500">{{ $enquiry->email }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $enquiry->preferred_date }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="inline-flex px-2 text-xs font-semibold leading-5 rounded-full {{ $enquiry->contact_method === 'Phone' ? 'bg-blue-100 text-blue-800' : 'bg-purple-100 text-purple-800' }}">
                    {{ $enquiry->contact_method }}
                  </span>
                </td>
                <td class="px-6 py-4 text-gray-600 max-w-xs truncate" title="{{ $enquiry->message }}">{{ $enquiry->message ?: '-' }}</td>
              </tr>
            @empty
              <tr><td colspan="6" class="px-6 py-8 text-center text-gray-500">No admissions enquiries yet.</td></tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </section>

    <section>
      <h2 class="text-2xl font-semibold mb-4 text-green-700">Contact Messages</h2>
      <div class="bg-white rounded-lg shadow overflow-hidden border border-gray-200">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Date</th>
              <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Name / Contact</th>
              <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Subject</th>
              <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Message</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 bg-white">
            @forelse($contactEnquiries as $enquiry)
              <tr class="hover:bg-gray-50">
                <td class="px-6 py-4 whitespace-nowrap text-gray-500">{{ $enquiry->created_at->format('M d, Y H:i') }}</td>
                <td class="px-6 py-4">
                  <div class="font-medium text-gray-900">{{ $enquiry->name }}</div>
                  <div class="text-gray-500">{{ $enquiry->email }}</div>
                  <div class="text-gray-500">{{ $enquiry->phone }}</div>
                </td>
                <td class="px-6 py-4 font-medium">{{ $enquiry->subject }}</td>
                <td class="px-6 py-4 text-gray-600 max-w-md break-words whitespace-pre-wrap">{{ $enquiry->message }}</td>
              </tr>
            @empty
              <tr><td colspan="4" class="px-6 py-8 text-center text-gray-500">No contact messages yet.</td></tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </section>
  </div>
</body>
</html>
