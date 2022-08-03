@extends('layouts/app')
@section('title') Profil du formateur @endsection

@section('content')
<div class="mx-auto bg-gray-200">

    <div class="max-w-5xl mx-auto">
        <div class="flex flex-col justify-center my-6 space-y-2">

            <div class="p-6 overflow-hidden bg-white shadow">
                <div class="flex items-center">

                    <div class="flex flex-col content-start self-start justify-start ml-3">
                        <div class="flex flex-col items-center space-y-3 sm:space-x-3 sm:flex-row">
                            <div class="flex flex-row justify-center m-0"></div>
                        </div>

                    </div>
                </div>
                <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
                    <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">

                        <img class="object-cover shadow-lg"
                            src="https://builtwithdjango.com/media/maker_profile_image/dominic_monn.jpeg" alt="Built with Django | Dominic Monn">

                    </div>
                    <div class="sm:col-span-2">
                        <div class="space-y-4">
                            <div class="space-y-1 text-lg font-medium leading-6">
                                <h3 class="text-4xl font-semibold text-black">
                                    Dominic Monn
                                </h3>
                                <ul role="list" class="flex space-x-2">
                                    <li>

                                        <a class="text-gray-200 hover:text-gray-500"
                                            href="https://twitter.com/dqmonn?ref=builtwithdjango.com" target="_blank">
                                            <i class="text-4xl text-gray-200 lab la-twitter"></i>
                                        </a>

                                    </li>
                                    <li>

                                        <a class="text-gray-200 hover:text-gray-500"
                                            href="https://github.com/dmonn?ref=builtwithdjango.com" target="_blank">
                                            <i class="text-4xl text-gray-200 lab la-github"></i>
                                        </a>

                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-6 overflow-hidden bg-white shadow">
            <h3 class="mb-4 text-4xl font-semibold text-black">
                Projects
            </h3>
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 md:grid-cols-2">


                <article class="flex flex-col justify-start bg-white border border-solid shadow">
                    <header class="border-b border-gray-300 border-solid">
                        <a class="" href="/projects/mentorcruise">
                            <img class="object-cover object-left-top w-full h-auto border-0"
                                src="https://builtwithdjango.com/media/website_homepage_screenshot/mentorcruise.gif"
                                alt="Mentorcruise | Screenshot">
                        </a>
                    </header>
                    <div class="flex-auto h-full p-4">
                        <h2 class="mb-2 text-lg font-semibold text-gray-900">
                            <a href="/projects/mentorcruise">Mentorcruise</a>
                        </h2>
                        <p class="text-sm leading-normal text-grey-700">
                            Work with leading tech mentors and gain access to personalized guidance to reach your
                            potential. Ongoing sessions and expert advice, on your terms, all for a flat monthly price.
                        </p>
                    </div>
                </article>


            </div>
        </div>

    </div>

</div>
@endsection