@extends('layouts.user')
@section('title', 'Resource')
@section('content')

<div class="py-6 px-4">
    <div class="w-full">
        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
            <h3 class="text-2xl leading-none font-semibold text-gray-900 mb-10">Resource #{{ $resource->id }}</h3>
            <div class="flex w-full flex-col">
                <div class="mt-4 grid items-center gap-3 gap-y-5 sm:grid-cols-4">
                    <div class="flex flex-col sm:col-span-4">
                        <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Resource ID</label>
                        <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="resource" id="" disabled value="#{{ $resource->id }}"/>
                    </div>

                    <div class="flex flex-col sm:col-span-4">
                        <label class="mb-1 ml-3 font-semibold text-gray-500" for="">Resource Name</label>
                        <input type="text" class="rounded-lg border px-2 py-2 shadow-sm outline-none focus:ring" name="resource" id="" disabled value="{{ $resource->resource }}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection