@extends('layouts/app')
@section('title') Publier une formation @endsection

@section('content')
<div class="flex flex-col px-4 py-8 mt-10 bg-white shadow sm:px-6 md:px-8 lg:px-10">
    <div class="p-6 mt-8">
        <form action="#" class="container">
            <div class="flex gap-4 mb-2">
                <div class="relative">
                    <input type="text" id="create-account-first-name"
                        class="flex-1 w-full px-4 py-2 text-base text-gray-700 placeholder-gray-400 bg-white border border-transparent border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        name="First name" placeholder="First name" />
                </div>
                <div class="relative ">
                    <input type="text" id="create-account-last-name"
                        class="flex-1 w-full px-4 py-2 text-base text-gray-700 placeholder-gray-400 bg-white border border-transparent border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        name="Last name" placeholder="Last name" />
                </div>
            </div>
            <div class="flex flex-col mb-2">
                <div class="relative ">
                    <textarea rows="4" class="flex-1 w-full px-4 py-2 text-base text-gray-700 placeholder-gray-400 bg-white border border-transparent border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" name="pseudo" placeholder="Description"></textarea>
                </div>
            </div>
            <div class="flex gap-4 mb-2">
                <div class="relative ">
                    <input type="text" id="create-account-first-name"
                        class="flex-1 w-full px-4 py-2 text-base text-gray-700 placeholder-gray-400 bg-white border border-transparent border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        name="First name" placeholder="First name" />
                </div>
                <div class="relative ">
                    <input type="text" id="create-account-last-name"
                        class="flex-1 w-full px-4 py-2 text-base text-gray-700 placeholder-gray-400 bg-white border border-transparent border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        name="Last name" placeholder="Last name" />
                </div>
            </div>
            <div class="flex flex-col mb-2">
                <div class="relative ">
                    <input type="text" id="create-account-email"
                        class="flex-1 w-full px-4 py-2 text-base text-gray-700 placeholder-gray-400 bg-white border border-transparent border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        placeholder="Email" />
                </div>
            </div>
            <div class="flex w-full my-4">
                <button type="submit" class="w-full px-4 py-2 font-semibold text-center text-white transition duration-200 ease-in bg-purple-600 shadow-md bg-primary hover:bg-purple-700 focus:ring-purple-500 focus:ring-offset-purple-200 focus:outline-none focus:ring-2 focus:ring-offset-2 ">
                    Soumettre
                </button>
            </div>
        </form>
    </div>
</div>
@endsection