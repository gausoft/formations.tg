@extends('layouts/app')
@section('title') Centres de formations @endsection
@section('content')
<div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">

    <div class="my-4 overflow-hidden bg-white shadow">
        <div class="px-4 py-5 sm:p-6">
            <p class="text-3xl font-semibold text-gray-800">
                Centres de formations
            </p>
            <p class="mb-5 text-2xl text-gray-600">
                Abonnez-vous pour connaître les centres de formations qui s'inscrivent sur la plateforme.
            </p>
            <form class="flex flex-row items-center" action="/newsletter/" method="post" enctype="multipart/form-data">
                <input type="hidden" name="csrfmiddlewaretoken"
                    value="KEl8U1ilPOjrhP3w8exIdsOYHyjz9I7I4kW7QaQlP4VKuhpldmRaF40dUSKuHTup">
                <div class="flex flex-row items-center">
                    <div class="flex flex-col">
                        <div class="flex flex-row item-center">
                            <span class=""><input type="email" name="user_email" maxlength="254"
                                    class="block w-full px-2 py-2 bg-white border border-solid shadow appearance-none border-grey-light hover:border-grey"
                                    placeholder="email@mail.com" required="" id="id_user_email"></span>
                            <button
                                class="px-4 py-2 font-bold text-white shadow bg-primary"
                                type="submit">
                                Soumettre
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 mb-10 sm:grid-cols-4">
        @for ($i = 0; $i < 20; $i++) 
        <div class="relative flex items-center px-4 py-5 space-x-3 bg-white border border-gray-300 border-solid shadow-sm hover:bg-gray-100 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">

            <a href="/makers/gokhan-sari" class="flex items-center">

                <!-- get image gray sillhoutte -->
                <img class="w-16 h-16 rounded-full" src="https://avatars.dicebear.com/api/gridy/Gokhan Sari.svg" alt="">


                <div class="ml-3">
                    <p class="text-lg font-medium text-gray-900">
                        Gokhan
                        Sari
                    </p>
                    <div>


                    </div>

                </div>
            </a>
    </div>
    @endfor
</div>

</div>
@endsection