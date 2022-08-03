@extends('layouts/app')
@section('title') Détails de la formation @endsection

@section('content')

<!-- component -->
<section class="p-5 text-indigo-200 bg-gray-900 body-font">
    <div class="flex flex-col px-5">
        <h1 class="mb-4 text-3xl font-medium text-black title-font sm:text-4xl">Before they sold out readymade gluten
        </h1>
        <div class="flex items-center justify-start mt-4 mb-4">
            <a href="#" class="px-2 py-1 mr-4 font-bold text-white bg-green-400 rounded-lg hover:bg-gray-500">Django</a>
            <a href="#" class="px-2 py-1 mr-4 font-bold text-white bg-green-400 rounded-lg hover:bg-gray-500">Python</a>
            <a href="#" class="px-2 py-1 font-bold text-white bg-green-400 rounded-lg hover:bg-gray-500">web
                development</a>
        </div>
    </div>
    <div class="flex flex-col px-5 mx-auto md:flex-row jobcard">
        <div class="w-full lg:max-w-lg lg:w-full md:w-1/2 sm:block">
            <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600" />
        </div>

        <div
            class="flex flex-col items-center mb-16 lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:items-start md:text-left md:mb-0">
            <figure class="visible">
                <div class="px-2 sm:px-6">
                    <h4 class="mb-4 text-xl font-medium text-black title-font">Before they sold out readymade gluten
                    </h4>
                    <p class="pb-6 text-base text-indigo-200">From local banks to local government, we partner with
                        organizations on their journey to digital transformation. Our customers include 15 million
                        professionals in 175 countries and 800 of the fortune 1000.</p>
                    <p class="pb-8 text-base text-indigo-200">We can't believe how far we have come in the last 6
                        months. I really did not think this awesome career move would come so quickly. Thanks to
                        each of you put into SI and the partner relationships.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center pb-12">
                            <div class="w-12 h-12">
                                <img src="https://tuk-cdn.s3.amazonaws.com/assets/components/testimonials/t_1.png" alt
                                    class="object-cover w-full h-full overflow-hidden rounded-full" />
                            </div>
                            <p class="ml-3 font-bold text-indigo-200">
                                Jane Doe <br />
                                <span class="text-base font-light text-indigo-200">Apple Inc</span>
                            </p>
                        </div>

                    </div>
                </div>
            </figure>

        </div>
    </div>
</section>
@endsection