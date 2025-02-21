@extends('layouts.app')
@section('content')
<div class="flex justify-center items-center px-7">
<div class="bg-white p-6 rounded-lg shadow-md ">
<h1 class="text-2xl font-bold mb-4  ">Task Details</h1>
<div class="mb-1">
<strong >Task Name:</strong> {{ $task->task_name }}
</div>
<div class="mb-1">
<strong>Location:</strong> {{ $task->task_location }}
</div>
<div class="mb-1">
<strong>Time Complexity:</strong> {{ $task->time_complexity }}
</div>
<div class="mb-1">
<strong>Materials Required:</strong> {{ $task->materials_required }}
</div>
<div class="mb-1">
<strong>Deadline:</strong> {{ $task->deadline }}
</div>
<div class = "mb-1 {{$task->priority === 3 ? 'text-red-600' : ($task->priority === 2 ? 'text-yellow-600' : 'text-green-600') }}">
<strong>Priority:</strong> {{ $task->priority }}
</div>
<div class="mb-1">
<strong>Category:</strong> {{ $task->category }}
</div>
<div style="margin-top:20px;">
<a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary bg-[#000435] text-white px-4 py-2 rounded hover:bg-blue-600">Edit Task</a>
<a href="{{ route('tasks.index') }}" class="btn btn-secondary bg-[#000435] text-white px-4 py-2 rounded hover:bg-blue-600">Back to List</a>

</div>
</div>
</div>
@endsection