<x-layout>
  <x-slot:pageTitle>Edit Task</x-slot:pageTitle>

  <x-page-heading>Edit Task</x-page-heading>

  <x-forms.form action="/tasks/{{ $task->id }}" method="PATCH" class="bg-gray-800 p-6 rounded-lg shadow-md">
    <x-forms.input label="Title" name="title" currentValue="{{ $task->title }}" />

    <x-forms.textarea label="Description" name="description" currentValue="{{ $task->description }}" />

    <x-forms.input label="Due Date" name="due_date" type="date" currentValue="{{ $task->due_date }}" />

    <x-forms.select label="Priority" name="priority">
      <x-forms.select-option value="Low" currentValue="{{ $task->priority }}" />
      <x-forms.select-option value="Medium" currentValue="{{ $task->priority }}" />
      <x-forms.select-option value="High" currentValue="{{ $task->priority }}" />
    </x-forms.select>

    <x-forms.select label="Status" name="status">
      <x-forms.select-option value="To Do" currentValue="{{ $task->status }}" />
      <x-forms.select-option value="In Progress" currentValue="{{ $task->status }}" />
      <x-forms.select-option value="Complete" currentValue="{{ $task->status }}" />
    </x-forms.select>

    <x-forms.button>Update Task</x-forms.button>
  </x-forms.form>
</x-layout>
