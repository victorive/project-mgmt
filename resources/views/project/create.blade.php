@extends('layouts.user')
@section('title', 'Create a project')
@section('content')

<div class="py-6 px-4">
  <div class="w-full">
      <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
          <h3 class="text-2xl leading-none font-semibold text-gray-900 mb-10">Add a project</h3>
          <form class="flex w-full flex-col" action="{{ url('/add-project') }}" method="POST">
          @csrf
              <div class="mt-4 grid items-center gap-3 gap-y-5 sm:grid-cols-4">
                  <div class="flex flex-col sm:col-span-3">
                      <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Name*</label>
                      <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="project" id="" placeholder="Project Title"/>
                      @error('project')
                      <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                      @enderror
                  </div>

                  <div class="col-span-1 flex flex-col">
                      <label class="mb-1 ml-3 font-semibold text-gray-500" for="">End date*</label>
                      <input type="date" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="end_date" id=""/>
                      @error('deadline')
                      <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                      @enderror
                  </div>

                  <div class="flex flex-col sm:col-span-4">
                    <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Sub Task</label>
                    <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="subtask" id="" placeholder="Project Name"/>
                    @error('subtask')
                    <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="col-span-1 flex flex-col">
                    <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Stage 1</label>
                    <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="stage_one" id=""/>
                    @error('stage_one')
                    <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="col-span-1 flex flex-col">
                    <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Stage 2</label>
                    <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="stage_two" id=""/>
                    @error('stage_two')
                    <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="col-span-1 flex flex-col">
                    <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Stage 3</label>
                    <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="stage_three" id=""/>
                    @error('stage_three')
                    <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="col-span-1 flex flex-col">
                    <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Stage 4</label>
                    <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="stage_four" id=""/>
                    @error('stage_four')
                    <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                    @enderror
                  </div>
  
                  <div class="col-span-3 flex flex-col">
                    <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Description</label>
                    <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="description" id="" placeholder="Project description"/>
                    @error('description')
                    <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="col-span-1 flex flex-col">
                      <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Start date*</label>
                      <input type="date" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="start_date" id=""/>
                      @error('start_date')
                      <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                      @enderror
                  </div>

                  <div class="flex flex-col sm:col-span-4">
                    <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Client</label>
                    <select class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="client_id" id="">
                      @if (count($clients) != 0)

                      @foreach ($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->client }}</option>
                      @endforeach

                      @else
                        <option></option>
                        <option>No clients yet, create a client first!</option>
                      @endif
                    </select>
                    
                    @error('client')
                      <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                    @enderror
                  </div>

              </div>

              <div class="flex flex-col justify-between sm:flex-row">
                  <button type="reset" class="group order-1 my-2 flex w-full items-center justify-center rounded-lg bg-gray-200 py-2 text-center font-bold text-gray-600 outline-none transition sm:w-40 focus:ring hover:bg-gray-300">Cancel</button>
                  <button type="submit" class="group my-2 flex w-full items-center justify-center rounded-lg bg-blue-700 py-2 text-center font-bold text-white outline-none transition sm:order-1 sm:w-40 focus:ring">
                      Add project
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
