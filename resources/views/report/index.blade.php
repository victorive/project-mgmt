@extends('layouts.user')
@section('title', 'Report')
@section('content')

<div class="py-6 px-4">
    <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{ $clients }}</span>
                  <h3 class="text-base font-normal text-gray-500">Clients</h3>
               </div>
            </div>
         </div>
 
       <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
        <div class="flex items-center">
           <div class="flex-shrink-0">
              <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{ $projects }}</span>
              <h3 class="text-base font-normal text-gray-500">Projects</h3>
           </div>
        </div>
     </div>

     <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
        <div class="flex items-center">
           <div class="flex-shrink-0">
              <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{ $tasks }}</span>
              <h3 class="text-base font-normal text-gray-500">Tasks</h3>
           </div>
        </div>
     </div>

     <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
        <div class="flex items-center">
           <div class="flex-shrink-0">
              <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{ $resources }}</span>
              <h3 class="text-base font-normal text-gray-500">Resources</h3>
           </div>
        </div>
     </div>
 
       
     <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
        <div class="flex items-center">
           <div class="flex-shrink-0">
              <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">0</span>
              <h3 class="text-base font-normal text-gray-500">Completed tasks</h3>
           </div>
        </div>
     </div>

     <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
        <div class="flex items-center">
           <div class="flex-shrink-0">
              <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">0</span>
              <h3 class="text-base font-normal text-gray-500">Tasks in progress</h3>
           </div>
        </div>
     </div>

     <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
        <div class="flex items-center">
           <div class="flex-shrink-0">
              <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">0</span>
              <h3 class="text-base font-normal text-gray-500">Tasks awaiting review</h3>
           </div>
        </div>
     </div>

      <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
        <div class="flex items-center">
           <div class="flex-shrink-0">
              <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">0</span>
              <h3 class="text-base font-normal text-gray-500">Pending tasks</h3>
           </div>
        </div>
      </div>
    </div>
 </div>
@endsection