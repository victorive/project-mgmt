@extends('layouts.user')
@section('title', 'Edit Task')
@section('content')

<div class="py-6 px-4">
    <div class="w-full">
        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
            <h3 class="text-2xl leading-none font-semibold text-gray-900 mb-10">Edit Task #{{ $task->id }}</h3>
            <form class="flex w-full flex-col" action="{{ url('/tasks', $task->id) }}" method="POST">
            @csrf
            @method('PUT')

                <div class="mt-4 grid items-center gap-3 gap-y-5 sm:grid-cols-4">
                    <div class="flex flex-col sm:col-span-4">
                        <label class="mb-1 ml-3 font-semibold text-gray-500">Task</label>
                        <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="task" value="{{ $task->task }}"/>
                        @error('task')
                        <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col sm:col-span-4">
                        <label class="mb-1 ml-3 font-semibold text-gray-500">Project Name</label>
                        <select class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="project_id">
                            @if (count($projects) != 0)

                            @foreach ($projects as $project)
                              <option value="{{ $project->id }}">{{ $project->project }}</option>
                            @endforeach
      
                            @else
                              <option></option>
                              <option>No projects yet, create a project first!</option>
                            @endif
                        </select>

                        @error('project')
                        <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col sm:col-span-4">
                        <label class="mb-1 ml-3 font-semibold text-gray-500">Start date</label>
                        <input type="date" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="start_date" value="{{ $task->start_date }}"/>
                        @error('start_date')
                        <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col sm:col-span-4">
                        <label class="mb-1 ml-3 font-semibold text-gray-500">End date</label>
                        <input type="date" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="end_date" value="{{ $task->end_date }}"/>
                        @error('end_date')
                        <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col justify-between sm:flex-row">
                    <button type="reset" class="group order-1 my-2 flex w-full items-center justify-center rounded-lg bg-gray-200 py-2 text-center font-bold text-gray-600 outline-none transition sm:w-40 focus:ring hover:bg-gray-300">Cancel</button>
                    <button type="submit" class="group my-2 flex w-full items-center justify-center rounded-lg bg-blue-700 py-2 text-center font-bold text-white outline-none transition sm:order-1 sm:w-40 focus:ring">
                        Edit task
                        <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:translate-x-2 ml-4 h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection