@extends('layouts/app')
@section('title') Annuaire @endsection
@section('content')
<div class="container">
    <div class="m-1.5" x-data="{ tab : 'tab-a' }">
        <div class="items-center sm:flex">
          <a x-on:click="tab = 'tab-a'">
            <div :class="tab === 'tab-a' ? 'sm:bg-primary' : 'sm:bg-gray-200'" class="sm:rounded-t-sm sm:mr-2 cursor-pointer bg-gray-200 font-bold p-1.5 pb-3 pt-3 text-gray-700 text-xs my-px sm:mb-0 w-full sm:w-max">
              Tab A
            </div>
          </a>
          <div class="relative overflow-hidden duration-300 sm:hidden max-h-0" x-ref="containerA" x-bind:style="tab === 'tab-a' ? 'max-height: ' + $refs.containerA.scrollHeight + 'px' : ''">
            Tab A content
          </div>
      
          <a x-on:click="tab = 'tab-b'">
            <div :class="tab === 'tab-b' ? 'sm:bg-primary' : 'sm:bg-gray-200'" class="sm:rounded-t-sm sm:mr-2 cursor-pointer bg-gray-200 font-bold p-1.5 pb-3 pt-3 text-gray-700 text-xs my-px sm:mb-0 w-full sm:w-max">
              Tab B
            </div>
          </a>
          <div class="relative overflow-hidden duration-300 sm:hidden max-h-0" x-ref="containerB" x-bind:style="tab === 'tab-b' ? 'max-height: ' + $refs.containerB.scrollHeight + 'px' : ''">
            Tab B content
          </div>
        </div>
        <div class="hidden sm:block">
          <div x-show="tab === 'tab-a'">
            Tab A content should not be duplicated here
          </div>
          <div x-show="tab === 'tab-b'">
            Tab B content should not be duplicated here
          </div>
        </div>
      </div>
</div>
@endsection