<x-layout>
  <x-slot:pageTitle>Dashboard</x-slot:pageTitle>

  <x-page-heading>Your Tasks</x-page-heading>

  @php
    $tasks = [
        [
            'id' => 1,
            'title' => 'Xoshordn',
            'description' => 'Acma 7amam w xomashom',
            'due_date' => '23-Aug-24',
            'priority' => 'High',
            'status' => 'Pending',
        ],
        [
            'id' => 3,
            'title' => 'neighbor',
            'description' =>
                'four rhyme tight dirty refused pain oil increase common income traffic deep land notice pair of sight her cream easy into these birds jack',
            'due_date' => '1/28/2024',
            'priority' => 'Medium',
            'status' => 'Complete',
        ],
        [
            'id' => 2,
            'title' => 'spend',
            'description' =>
                'screen push herd wrote massage expect ago current fly begun involved addition go weak copper package declared hollow my border donkey wool whenever vote',
            'due_date' => '24-Aug-24',
            'priority' => 'Low',
            'status' => 'Ongoing',
        ],
    ];
  @endphp

  <div class="container grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    @forelse ($tasks as $task)
      <x-task-card :$task />
    @empty
      <p class="text-gray-400">No tasks available.</p>
    @endforelse
  </div>
</x-layout>
