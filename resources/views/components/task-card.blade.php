@props(['task'])

<a href="/tasks/{{ $task['id'] }}"
  {{ $attributes(['class' => 'block bg-gray-800 text-gray-100 rounded-lg p-4 shadow-lg hover:bg-gray-700']) }}>
  <div class="flex justify-between items-start mb-4">
    <h3 class="text-lg font-semibold truncate max-w-[80%]">{{ $task['title'] }}</h3>
    <x-status-circle :status="$task['status']" />
  </div>

  <div class="flex justify-between items-end mt-auto">
    <span class="text-xs font-medium text-gray-400">{{ $task['priority'] }} Priority</span>
    <span class="text-xs font-medium text-gray-400">{{ $task['due_date'] }}</span>
  </div>
</a>
