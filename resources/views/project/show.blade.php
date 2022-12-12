@extends('layouts.user')
@section('title', 'Project')
@section('content')

<div class="py-6 px-4">
    <div class="w-full">
        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
            <h3 class="text-2xl leading-none font-semibold text-gray-900 mb-10">Project #{{ $project->id }}</h3>
            <div class="flex w-full flex-col">
                <div class="mt-4 grid items-center gap-3 gap-y-5 sm:grid-cols-4">
                    <div class="flex flex-col sm:col-span-4">
                        <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Project ID</label>
                        <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="resource" id="" disabled value="#{{ $project->id }}"/>
                    </div>

                    <div class="flex flex-col sm:col-span-4">
                        <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Project</label>
                        <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="resource" id="" disabled value="{{ $project->project }}"/>
                    </div>

                    <div class="flex flex-col sm:col-span-4">
                        <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Description</label>
                        <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="resource" id="" disabled value="{{ $project->description }}"/>
                    </div>

                    <div class="flex flex-col sm:col-span-2">
                        <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Start date</label>
                        <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="resource" id="" disabled value="{{ $project->start_date }}"/>
                    </div>

                    <div class="flex flex-col sm:col-span-2">
                        <label class="mb-1 ml-3 font-semibold text-gray-500" for="">End date</label>
                        <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="resource" id="" disabled value="{{ $project->end_date }}"/>
                    </div>

                    <div class="flex flex-col sm:col-span-4">
                        <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Subtask</label>
                        <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="resource" id="" disabled value="{{ $project->subtask }}"/>
                    </div>

                    <div class="flex flex-col sm:col-span-1">
                        <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Stage 1</label>
                        <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="resource" id="" disabled value="{{ $project->stage_one }}"/>
                    </div>

                    <div class="flex flex-col sm:col-span-1">
                        <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Stage 2</label>
                        <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="resource" id="" disabled value="{{ $project->stage_two }}"/>
                    </div>

                    <div class="flex flex-col sm:col-span-1">
                        <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Stage 3</label>
                        <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="resource" id="" disabled value="{{ $project->stage_three }}"/>
                    </div>

                    <div class="flex flex-col sm:col-span-1">
                        <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Stage 4</label>
                        <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="resource" id="" disabled value="{{ $project->stage_four }}"/>
                    </div>

                    <div class="flex flex-col sm:col-span-4">
                        <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Client</label>
                        <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="resource" id="" disabled value="{{ $project->client->client }}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection