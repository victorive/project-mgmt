@extends('layouts.app')
@section('title', 'Register')
@section('content')

<div class="flex min-h-screen w-full items-center justify-center text-gray-600 bg-gray-50">
    <div class="relative">
        <div class="relative flex flex-col sm:w-[30rem] rounded-lg border-gray-400 bg-white shadow-lg px-4">
            <div class="flex-auto p-6">
                <div class="mb-10 flex flex-shrink-0 flex-grow-0 items-center justify-center overflow-hidden">
                    <a href="{{ url('/') }}" class="flex cursor-pointer items-center gap-2 text-indigo-500 no-underline hover:text-indigo-500">
                        <span class="flex-shrink-0 text-3xl font-black lowercase tracking-tight opacity-100">pm.</span>
                    </a>
                </div>

                <h4 class="mb-2 font-bold text-gray-700 xl:text-xl">Register</h4>

                <form class="mb-4" action="{{ url('/register') }}" method="POST">
                @csrf

                    <div class="mb-4">
                        <label for="email" class="mb-2 inline-block text-xs font-medium uppercase text-gray-700">Email</label>
                        <input type="email" class="block w-full cursor-text appearance-none rounded-md border border-gray-400 bg--100 py-2 px-3 text-sm outline-none focus:border-indigo-500 focus:bg-white focus:text-gray-600 focus:shadow" id="email" name="email" placeholder="Email address" autofocus="" />
                        @error('email')
                        <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="fullname" class="mb-2 inline-block text-xs font-medium uppercase text-gray-700">Full name</label>
                        <input type="text" class="block w-full cursor-text appearance-none rounded-md border border-gray-400 bg--100 py-2 px-3 text-sm outline-none focus:border-indigo-500 focus:bg-white focus:text-gray-600 focus:shadow" id="fullname" name="fullname" placeholder="Full name" autofocus="" />
                        @error('fullname')
                        <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="mb-2 inline-block text-xs font-medium uppercase text-gray-700">Password</label>
                        <input type="password" class="block w-full cursor-text appearance-none rounded-md border border-gray-400 bg--100 py-2 px-3 text-sm outline-none focus:border-indigo-500 focus:bg-white focus:text-gray-600 focus:shadow" id="password" name="password" placeholder="Password" autofocus="" />
                        @error('password')
                        <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="mb-2 inline-block text-xs font-medium uppercase text-gray-700">Password Confirmation</label>
                        <input type="password" class="block w-full cursor-text appearance-none rounded-md border border-gray-400 bg--100 py-2 px-3 text-sm outline-none focus:border-indigo-500 focus:bg-white focus:text-gray-600 focus:shadow" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" autofocus="" />
                        @error('password_confirmation')
                        <span class="block text-xs font-medium text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <button class="grid w-full cursor-pointer select-none rounded-md border border-indigo-500 bg-indigo-500 py-2 px-5 text-center align-middle text-sm text-white shadow hover:border-indigo-600 hover:bg-indigo-600 hover:text-white focus:border-indigo-600 focus:bg-indigo-600 focus:text-white focus:shadow-none" type="submit">Register</button>
                    </div>
                </form>

                <p class="mb-4 text-center">
                    Already have an account?
                    <a href="{{ route('login') }}" class="cursor-pointer text-indigo-500 no-underline hover:text-indigo-500"> Login </a>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
