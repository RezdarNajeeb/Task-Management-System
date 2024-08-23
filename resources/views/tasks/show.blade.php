<x-layout>
  <x-slot:pageTitle>Task Details</x-slot:pageTitle>

  <x-page-heading>Task Details</x-page-heading>

  <div class="container max-w-4xl mx-auto mt-8">
    <div class="bg-gray-800 text-gray-100 rounded-lg p-4 shadow-lg">
      <div class="flex justify-between items-start mb-4">
        <div>
          <h3 class="text-2xl font-semibold">{{ $task->title }}</h3>
          <p class="text-sm text-gray-400 mt-2">{{ $task->priority }} Priority</p>
        </div>
        @php
          $statusColor = match (strtolower($task->status)) {
              'to do' => 'bg-blue-500',
              'in progress' => 'bg-yellow-500',
              'complete' => 'bg-green-500',
              default => 'bg-gray-500',
          };
        @endphp
        <span
          class="text-gray-100 font-semibold inline-block rounded-full py-1 px-4 {{ $statusColor }}">{{ $task['status'] }}</span>
      </div>

      <p class="text-gray-300 mb-6">{{ $task->description }}</p>

      <div class="flex justify-between items-end">
        <span class="text-xs font-medium text-gray-400">{{ $task->due_date }}</span>
        <div class="flex space-x-2 items-end">
          <a href="/tasks/{{ $task->id }}/edit"
            class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Edit</a>
          <form action="/tasks/{{ $task->id }}" method="POST">
            @csrf
            @method('DELETE')
            <x-forms.button class="bg-red-500 hover:bg-red-600 -mt-0">Delete</x-forms.button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-layout>
