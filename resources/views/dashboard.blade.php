<x-layout>
  <x-slot:pageTitle>Dashboard</x-slot:pageTitle>

  <div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-semibold">Your Tasks</h1>
    <a href="" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create
      Task</a>
  </div>

  @php
    $tasks = [
        [
            'title' => 'Xoshordn',
            'description' => 'Acma 7amam w xomashom',
            'due_date' => '23-Aug-24',
            'priority' => 'High',
            'status' => 'Pending',
        ],
        [
            'title' => 'neighbor',
            'description' =>
                'four rhyme tight dirty refused pain oil increase common income traffic deep land notice pair of sight her cream easy into these birds jack',
            'due_date' => '1/28/2024',
            'priority' => 'Medium',
            'status' => 'Complete',
        ],
        [
            'title' => 'spend',
            'description' =>
                'screen push herd wrote massage expect ago current fly begun involved addition go weak copper package declared hollow my border donkey wool whenever vote',
            'due_date' => '24-Aug-24',
            'priority' => 'Low',
            'status' => 'Ongoing',
        ],
    ];
  @endphp

  @if (@empty($tasks))
    <p class="text-gray-400">You have no tasks yet.</p>
  @else
    <table class="min-w-full bg-gray-800 shadow-md rounded-lg">
      <thead>
        <tr>
          <th class="py-2 px-4 border-b border-gray-700">Title</th>
          <th class="py-2 px-4 border-b border-gray-700">Description</th>
          <th class="py-2 px-4 border-b border-gray-700">Due Date</th>
          <th class="py-2 px-4 border-b border-gray-700">Priority</th>
          <th class="py-2 px-4 border-b border-gray-700">Status</th>
          <th class="py-2 px-4 border-b border-gray-700">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tasks as $task)
          <tr>
            <td class="py-2 px-4 border-b border-gray-700">{{ $task['title'] }}</td>
            <td class="py-2 px-4 border-b border-gray-700">{{ $task['description'] }}</td>
            <td class="py-2 px-4 border-b border-gray-700">{{ $task['due_date'] }}</td>
            <td class="py-2 px-4 border-b border-gray-700">{{ $task['priority'] }}</td>
            <td class="py-2 px-4 border-b border-gray-700">{{ $task['status'] }}</td>
            <td class="py-2 px-4 border-b border-gray-700 flex space-x-2">
              <a href="" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
              <form action="" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
</x-layout>
