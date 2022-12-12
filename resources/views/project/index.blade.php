@extends('layouts.user')
@section('title', 'Manage projects')
@section('content')

<div class="py-6 px-4">
    <div class="w-full">

        <h3 class="text-2xl leading-none font-semibold text-gray-900 mb-10">Projects</h3>

        @if (session('success'))
        <p class="text-sm text-green-500">
            {{ session('success') }}
        </p>
        @endif  
<div class="mt-6 overflow-hidden rounded-xl bg-white px-6 shadow lg:px-4">
    <table class="min-w-full border-collapse border-spacing-y-2 border-spacing-x-2">
      <thead class="hidden border-b lg:table-header-group">
        <tr class="">
            <td class="whitespace-normal py-4 text-sm font-semibold text-gray-800 sm:px-3">
                ID
              </td>

          <td class="whitespace-normal py-4 text-sm font-semibold text-gray-800 sm:px-3">
            Project
          </td>

          <td class="whitespace-normal py-4 text-sm font-medium text-gray-800 sm:px-3">Description</td>
          <td class="whitespace-normal py-4 text-sm font-medium text-gray-800 sm:px-3">Client</td>
          <td class="whitespace-normal py-4 text-sm font-medium text-gray-800 sm:px-3">Sub-task</td>
          <td class="whitespace-normal py-4 text-sm font-medium text-gray-800 sm:px-3">Start date</td>

          <td class="whitespace-normal py-4 text-sm font-medium text-gray-800 sm:px-3">End date</td>
          <td class="whitespace-normal py-4 text-sm font-medium text-gray-800 sm:px-3">Stage 1</td>
          <td class="whitespace-normal py-4 text-sm font-medium text-gray-800 sm:px-3">Stage 2</td>
          <td class="whitespace-normal py-4 text-sm font-medium text-gray-800 sm:px-3">Stage 3</td>
          <td class="whitespace-normal py-4 text-sm font-medium text-gray-800 sm:px-3">Stage 4</td>

          <td class="whitespace-normal py-4 text-sm font-medium text-gray-800 sm:px-3">Actions</td>
        </tr>
      </thead>

      <tbody class="bg-white lg:border-gray-300">
        @if(count($projects) != 0)

        @foreach ($projects as $project)
        <tr class="">
            <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-600 sm:px-3 lg:table-cell">{{ $project->id }}</td>
          <td class="whitespace-no-wrap py-4 text-left text-sm text-gray-600 sm:px-3 lg:text-left">
            {{ $project->project }}
            <div class="mt-1 flex flex-col text-xs font-medium lg:hidden">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                Jane Doeson
              </div>
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
                Desktop Computer
              </div>
              <div class="">24 x 10 x 5 cm</div>
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                </svg>
                1 Kg
              </div>
            </div>
          </td>

          <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-600 sm:px-3 lg:table-cell">{{ $project->description }}</td>

          <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-600 sm:px-3 lg:table-cell">{{ $project->client->client }}</td>

          <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-600 sm:px-3 lg:table-cell">{{ $project->subtask }}</td>

          <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-600 sm:px-3 lg:table-cell">
            {{ $project->start_date }}
          </td>
          <td class="whitespace-no-wrap hidden py-4 text-left text-sm text-gray-600 sm:px-3 lg:table-cell lg:text-left">{{ $project->end_date }}</td>
          <td class="whitespace-no-wrap hidden py-4 text-left text-sm text-gray-600 sm:px-3 lg:table-cell lg:text-left">{{ $project->stage_one }}</td>
          <td class="whitespace-no-wrap hidden py-4 text-left text-sm text-gray-600 sm:px-3 lg:table-cell lg:text-left">{{ $project->stage_two }}</td>
          <td class="whitespace-no-wrap hidden py-4 text-left text-sm text-gray-600 sm:px-3 lg:table-cell lg:text-left">{{ $project->stage_three }}</td>
          <td class="whitespace-no-wrap hidden py-4 text-left text-sm text-gray-600 sm:px-3 lg:table-cell lg:text-left">{{ $project->stage_four }}</td>
          

          <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-500 sm:px-3 lg:table-cell">
            <div class="flex item-center justify-center">
              <a href="{{ url('/project', $project->id) }}">
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
              </a>

                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                </div>
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </div>
            </div>
        </td>
        </tr>
        @endforeach

        @else
        <tr class="">
            <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-600 sm:px-3 lg:table-cell">No projects yet!</td>
        </tr>
        @endif
        
      </tbody>
    </table>
  </div>
    </div>
</div>

@endsection