@extends('layouts.user')
@section('title', 'Dashboard')
@section('content')

<div class="py-6 px-4">
   <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
      <a href="#">
         <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 hover:shadow-lg hover:scale-105">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 2v6h-6M2.5 22v-6h6M2 11.5a10 10 0 0 1 18.8-4.3M22 12.5a10 10 0 0 1-18.8 4.2"/></svg>
                  <h3 class="text-base font-normal text-gray-500">Maintenance</h3>
               </div>
            </div>
         </div>
      </a>

      <a href="{{ route('projects') }}">
         <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 hover:shadow-lg hover:scale-105">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 21H4a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2h5l2 3h9a2 2 0 0 1 2 2v2M19 15v6M16 18h6"/></svg>
                  <h3 class="text-base font-normal text-gray-500">Projects</h3>
               </div>
            </div>
         </div>
      </a>

      <a href="{{ route('tasks') }}">
         <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 hover:shadow-lg hover:scale-105">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/><path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"/></svg>
                  <h3 class="text-base font-normal text-gray-500">Tasks</h3>
               </div>
            </div>
         </div>
      </a>

      <a href="{{ route('clients') }}">
         <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 hover:shadow-lg hover:scale-105">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                  <h3 class="text-base font-normal text-gray-500">Clients</h3>
               </div>
            </div>
         </div>
      </a>

      <a href="{{ route('resources') }}">
         <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 hover:shadow-lg hover:scale-105">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path><line x1="12" y1="11" x2="12" y2="17"></line><line x1="9" y1="14" x2="15" y2="14"></line></svg>
                  <h3 class="text-base font-normal text-gray-500">Resources</h3>
               </div>
            </div>
         </div>
      </a>

      <a href="#">
         <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 hover:shadow-lg hover:scale-105">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3"/></svg>
                  <h3 class="text-base font-normal text-gray-500">Transactions</h3>
               </div>
            </div>
         </div>
      </a>

      <a href="#">
         <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 hover:shadow-lg hover:scale-105">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 11.08V8l-6-6H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h6"/><path d="M14 3v5h5M18 21v-6M15 18h6"/></svg>
                  <h3 class="text-base font-normal text-gray-500">Project tasks</h3>
               </div>
            </div>
         </div>
      </a>

      <a href="#">
         <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 hover:shadow-lg hover:scale-105">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/><path d="M14 3v5h5M12 18v-6M9 15h6"/></svg>
                  <h3 class="text-base font-normal text-gray-500">Task resources</h3>
               </div>
            </div>
         </div>
      </a>

      <a href="{{ route('reports') }}">
         <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 hover:shadow-lg hover:scale-105">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                  <h3 class="text-base font-normal text-gray-500">Report</h3>
               </div>
            </div>
         </div>
      </a>

   </div>
</div>
@endsection