<x-layout>
  <x-slot:pageTitle>Create Task</x-slot:pageTitle>

  <h1 class="text-2xl font-semibold mb-6">Create New Task</h1>

  <form action="" method="POST" class="bg-gray-800 p-6 rounded-lg shadow-md">
    @csrf
    <div class="mb-4">
      <label for="title" class="block text-gray-400 font-medium mb-2">Title</label>
      <input type="text" class="form-input w-full bg-gray-900 text-gray-100 border-gray-700 rounded-lg p-2"
        id="title" name="title" required>
    </div>

    <div class="mb-4">
      <label for="description" class="block text-gray-400 font-medium mb-2">Description</label>
      <textarea class="form-textarea w-full bg-gray-900 text-gray-100 border-gray-700 rounded-lg p-2" id="description"
        name="description" rows="3"></textarea>
    </div>

    <div class="mb-4">
      <label for="due_date" class="block text-gray-400 font-medium mb-2">Due Date</label>
      <input type="date" class="form-input w-full bg-gray-900 text-gray-100 border-gray-700 rounded-lg p-2"
        id="due_date" name="due_date" required>
    </div>

    <div class="mb-4">
      <label for="priority" class="block text-gray-400 font-medium mb-2">Priority</label>
      <select class="form-select w-full bg-gray-900 text-gray-100 border-gray-700 rounded-lg p-2" id="priority"
        name="priority" required>
        <option value="Low">Low</option>
        <option value="Medium">Medium</option>
        <option value="High">High</option>
      </select>
    </div>

    <div class="mb-4">
      <label for="status" class="block text-gray-400 font-medium mb-2">Status</label>
      <select class="form-select w-full bg-gray-900 text-gray-100 border-gray-700 rounded-lg p-2" id="status"
        name="status" required>
        <option value="To Do">To Do</option>
        <option value="In Progress">In Progress</option>
        <option value="Completed">Completed</option>
      </select>
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create Task</button>
  </form>
</x-layout>
