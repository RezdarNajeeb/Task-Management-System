<x-layout>
  <x-slot:pageTitle>Dashboard</x-slot:pageTitle>

  <x-page-heading>Your Tasks</x-page-heading>

  <x-forms.divider />

  <!-- Search and Filter Form -->
  <form action="/tasks" method="GET" class="flex flex-wrap items-center mx-auto w-full max-w-2xl gap-2">
    <!-- Search Input -->
    <x-forms.label label="Search" name="search" class="mb-0" />
    <input type="text" name="search" id="search" value="{{ request('search') }}" placeholder="Search tasks"
      class="bg-gray-700 text-white rounded-lg py-2 px-3 w-full" />

    <x-forms.label label="Filter" name="" class="mb-0 mt-2" />
    <div class="flex items-center w-full mx-auto flex-wrap gap-2">
      <!-- Status Filter -->
      <select name="status" class="bg-gray-700 text-white rounded-lg py-2 px-3 flex-grow">
        <option value="" {{ request('status') == '' ? 'selected' : '' }}>All Status</option>
        <option value="To Do" {{ request('status') == 'To Do' ? 'selected' : '' }} class="text-blue-500">To Do</option>
        <option value="In Progress" {{ request('status') == 'In Progress' ? 'selected' : '' }} class="text-yellow-500">In
          Progress</option>
        <option value="Complete" {{ request('status') == 'Complete' ? 'selected' : '' }} class="text-green-500">Complete
        </option>
      </select>

      <!-- Priority Filter -->
      <select name="priority" class="bg-gray-700 text-white rounded-lg py-2 px-3 flex-grow">
        <option value="" {{ request('priority') == '' ? 'selected' : '' }}>All Priorities</option>
        <option value="low" {{ request('priority') == 'low' ? 'selected' : '' }}>Low</option>
        <option value="medium" {{ request('priority') == 'medium' ? 'selected' : '' }}>Medium</option>
        <option value="high" {{ request('priority') == 'high' ? 'selected' : '' }}>High</option>
      </select>

      <!-- Due Date Filter -->
      <input type="date" name="due_date" value="{{ request('due_date') }}"
        class="bg-gray-700 text-white rounded-lg py-[7px] px-3 flex-grow">
    </div>

    <!-- Submit Button -->
    <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600">
      Search
    </button>
  </form>

  <x-forms.divider />

  <!-- Task Cards Grid -->
  <div class="container mt-10 grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    @forelse ($tasks as $task)
      <x-task-card :$task />
    @empty
      <p class="text-gray-400">No tasks available.</p>
    @endforelse
  </div>

  {{-- Pagination Links --}}
  {{-- <div class="mt-2">
    {{ $tasks->links() }}
  </div> --}}
</x-layout>
