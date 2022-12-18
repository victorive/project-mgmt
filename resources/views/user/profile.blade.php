@extends('layouts.user')
@section('title', 'Profile')
@section('content')

<div class="m-10 max-w-sm mx-auto">
    <div class="rounded-lg border bg-white px-4 pt-8 pb-10 shadow-lg">
      <div class="relative mx-auto w-36 rounded-full">
        <img class="mx-auto h-auto w-full rounded-full" src="{{ asset('images/noimage.jpeg') }}" alt="" />
      </div>
      <h1 class="my-1 text-center text-xl font-bold leading-8 text-gray-900">{{ auth()->user()->fullname }}</h1>
      <ul class="mt-3 divide-y rounded bg-gray-100 py-2 px-3 text-gray-600 shadow-sm hover:text-gray-700 hover:shadow">
        <li class="flex items-center py-3 text-sm">
          <span>Email</span>
          <span class="ml-auto">{{ auth()->user()->email }}</span>
        </li>
        <li class="flex items-center py-3 text-sm">
          <span>Joined On</span>
          <span class="ml-auto">{{ auth()->user()->created_at->format('d-M-Y') }}</span>
        </li>
      </ul>
    </div>
</div>
@endsection