@php
  $statusColor = match (strtolower($task->status)) {
      'to do' => 'bg-blue-500',
      'in progress' => 'bg-yellow-500',
      'complete' => 'bg-green-500',
      default => 'bg-gray-500',
  };
@endphp

<x-layout>
  <x-slot:pageTitle>Task Details</x-slot:pageTitle>

  <x-page-heading>Task Details</x-page-heading>

  <div class="container max-w-4xl mx-auto mt-8">
    <div class="bg-gray-800 text-gray-100 rounded-lg p-4 shadow-lg">
      <div class="flex justify-between items-start mb-4">
        <p class="text-gray-100 font-semibold inline-block rounded-full py-1 px-4">{{ $task->priority }} Priority</p>

        <span class="text-gray-100 font-semibold inline-block rounded-full py-1 px-4 {{ $statusColor }}">
          {{ $task->status }}
        </span>
      </div>

      <x-forms.divider class="my-1" />

      <h3 class="text-2xl font-semibold max-w-[75%] break-words">{{ $task->title }}</h3>

      <p class="text-gray-300 mt-4">{{ $task->description }}</p>

      <x-forms.divider class="my-4" />

      <div class="flex justify-between items-end">
        <span class="text-xs font-medium text-gray-400">Due Date: {{ $task->due_date }}</span>
        <div class="flex space-x-2 items-end">
          <a href="/tasks/{{ $task->id }}/edit"
            class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Edit</a>
          <form action="/tasks/{{ $task->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</x-layout>
