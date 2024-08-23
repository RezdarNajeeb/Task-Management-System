<x-layout>
  <x-slot:pageTitle>Dashboard</x-slot:pageTitle>

  <x-page-heading>Your Tasks</x-page-heading>

  <div class="container grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    @forelse ($tasks as $task)
      <x-task-card :$task />
    @empty
      <p class="text-gray-400">No tasks available.</p>
    @endforelse
  </div>
</x-layout>
