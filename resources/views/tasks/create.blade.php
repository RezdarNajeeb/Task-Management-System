<x-layout>
  <x-slot:pageTitle>Create Task</x-slot:pageTitle>

  <x-page-heading>Create New Task</x-page-heading>

  <x-forms.form action="/" method="POST" class="bg-gray-800 p-6 rounded-lg shadow-md">
    <x-forms.input label="Title" name="title" />

    <x-forms.textarea label="Description" name="description" />

    <x-forms.input label="Due Date" name="due-date" type="date" />

    <x-forms.select label="Priority" name="priority">
      <x-forms.select-option value="Low" currentValue="{{ old('priority') }}" />
      <x-forms.select-option value="Medium" currentValue="{{ old('priority') }}" />
      <x-forms.select-option value="High" currentValue="{{ old('priority') }}" />
    </x-forms.select>

    <x-forms.select label="Status" name="status">
      <x-forms.select-option value="To Do" currentValue="{{ old('status') }}" />
      <x-forms.select-option value="In Progress" currentValue="{{ old('status') }}" />
      <x-forms.select-option value="Complete" currentValue="{{ old('status') }}" />
    </x-forms.select>

    <x-forms.button>Create Task</x-forms.button>
  </x-forms.form>
</x-layout>
