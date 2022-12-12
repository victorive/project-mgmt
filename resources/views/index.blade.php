@extends('layouts.app')
@section('title', 'Home')
@section('content')

<div class="w-screen">
    <div class="relative mx-auto flex flex-col px-4 sm:max-w-xl md:max-w-screen-xl md:flex-row">
      <div class="my-auto mx-auto mt-10 w-full max-w-xl md:mt-56 lg:max-w-screen-xl">
        <div class="mb-16 lg:mb-0 lg:max-w-lg">
          <div class="mb-6 max-w-xl">
            <h2 class="mb-6 max-w-lg text-3xl font-bold tracking-tight text-slate-700 sm:text-5xl sm:leading-snug">
              Let's help you manage your<br />
              <span class="inline-block font-bold text-blue-600">projects...</span>
            </h2>

            <p class="text-base text-gray-700 md:text-lg">An all-in-one software that helps you keep all project's tasks in check.</p>
          </div>

          <div class="flex items-center">
            <a href="{{ route('register')  }}" class="mr-6 inline-flex h-12 items-center justify-center rounded bg-blue-700 px-6 font-medium tracking-wide text-white shadow-md outline-none transition duration-200 hover:bg-blue-600 focus:ring"> Get started </a>
            <a href="{{ route('register') }}" aria-label="" class="inline-flex items-center font-semibold text-blue-600 transition-colors duration-200 hover:text-blue-400">Learn more</a>
          </div>
        </div>
      </div>

      <div class="flex h-full w-full space-x-3 overflow-hidden md:justify-end lg:px-2">
        <img class="h-full w-full object-contain" src="/images/illustration.svg" alt=""/>
    </div>
</div>
@endsection