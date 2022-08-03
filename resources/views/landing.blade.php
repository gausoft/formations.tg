<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Formations.tg | Le portail des formations pro au Togo</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Alpine -->
	<script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
	<script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>
    <style>
      [x-cloak] {
        display: none !important;
      }
    </style>
</head>

<body class="relative antialiased tracking-tight text-gray-500 bg-white font-inter">
    <div class="absolute inset-0 -translate-x-1/2 -translate-y-1/2 bg-top bg-no-repeat bg-illustration-01" style="background-image: url('img/illustration-section-01.svg')"></div>
    <div class="absolute inset-0 -translate-x-1/2 -translate-y-1/2 bg-center bg-no-repeat bg-illustration-02" style="background-image: url('img/illustration-section-02.svg')"></div>
    <div class="container relative">
        <div class="flex items-center justify-between py-6 animated fadeInUp">
            <a href="#">
                <img class="block w-8 h-8" src="img/logo.svg" alt="" />
            </a>
            <a href="#">
                <svg class="w-6 h-6 fill-current md:hidden" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </a>
            <div class="flex items-center mb-4 md:block">
                <a class="mr-8 font-semibold text-black hover:text-primary" href="#" onclick="toggleModal('modal-example-small')">Se connecter</a>
                <a class="mr-8 font-semibold text-black hover:text-primary" href="#">Parcourir</a>
                <button class="inline-block px-6 py-2 font-semibold text-center text-white transition duration-150 ease-in-out rounded-sm bg-primary hover:bg-primary"
                    @click="open = true">Publier</button>
            </div>
        </div>
        <h1
            class="px-8 mt-4 mb-4 text-5xl font-extrabold leading-tight text-center text-black animated animation-delay-250 fadeInUp xl:text-6xl">
            Portail des <span class="text-primary">formations</span>
        </h1>
        <p class="max-w-xl mx-auto mb-8 text-xl text-center animated animation-delay-500 fadeInUp xl:max-w-2xl">
            #professionnelles, #thematiques, #marketplace #recherche, #formations, #presentiels, #online, #gratuit,
            #payants
        </p>

        <div class="w-full px-3 mx-auto mt-5 md:w-1/2">
            <form class="relative mb-5" action="/search" method="get">
                <svg width="20" height="20" fill="currentColor"
                    class="absolute text-gray-400 transform -translate-y-1/2 left-3 top-1/2">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                    </path>
                </svg>
                <input required="" value="" name="q" autocomplete="off" spellcheck="false" type="text"
                    placeholder="Rerchercher une formation (Ex. Programmation)"
                    class="z-0 w-full py-2 pl-10 text-sm rounded focus:shadow focus:outline-none h-11">
                <div class="absolute top-1.5 right-2">
                    <select id="currency" name="currency"
                        class="h-full px-2 py-2 text-gray-500 bg-transparent border-transparent rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option disabled selected>Thématiques</option>
                        <option>Toutes</option>
                        <option>Informatique</option>
                        <option>Finances</option>
                        <option>Trading</option>
                        <option>Artisanat</option>
                        <option>Autres</option>
                    </select>
                </div>
            </form>
        </div>

        <div class="mb-16 animated fadeIn animation-delay-1000">
            <!-- Modal -->
            <div
            class="fixed inset-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto outline-none focus:outline-none"
            id="modal-example-small"
            >
            <div class="relative w-auto max-w-sm mx-auto my-6">
                <!--content-->
                <div
                class="relative flex flex-col w-full bg-white border-0 rounded-lg shadow-lg outline-none focus:outline-none"
                >
                <!--header-->
                <div
                    class="flex items-start justify-between p-5 border-b border-gray-200 border-solid rounded-t "
                >
                    <h3 class="text-3xl font-bold">Modal Title</h3>
                    <button
                    class="float-right p-1 ml-auto text-3xl font-bold leading-none text-gray-300 bg-transparent border-0 outline-none focus:outline-none"
                    onclick="toggleModal('modal-example-small')"
                    >
                    <span
                        class="block w-6 h-6 text-2xl bg-transparent outline-none focus:outline-none"
                    >
                        <i class="fas fa-times"></i>
                    </span>
                    </button>
                </div>
                <!--body-->
                <div class="relative flex-auto p-6">
                    <p class="my-4 text-lg leading-relaxed text-gray-500">
                    I always felt like I could do anything. That’s the main thing
                    people are controlled by! Thoughts- their perception of
                    themselves! They're slowed down by their perception of themselves.
                    If you're taught you can’t do anything, you won’t do anything. I
                    was taught I could do everything.
                    </p>
                </div>
                <!--footer-->
                <div
                    class="flex items-center justify-end p-6 border-t border-gray-200 border-solid rounded-b"
                >
                    <button
                    class="px-6 py-2 mb-1 mr-1 text-sm font-bold uppercase transition-all duration-150 ease-linear outline-none text-primary background-transparent focus:outline-none"
                    type="button"
                    onclick="toggleModal('modal-example-small')"
                    >
                    Close
                    </button>
                    <button
                    class="px-4 py-2 mb-1 mr-1 text-xs font-bold text-white uppercase transition-all duration-150 ease-linear rounded shadow outline-none bg-primary active:bg-purple-600 hover:shadow-md focus:outline-none"
                    type="button"
                    onclick="toggleModal('modal-example-small')"
                    >
                    Save Changes
                    </button>
                </div>
                </div>
            </div>
            </div>
            <div
            class="fixed inset-0 z-40 hidden bg-black opacity-25"
            id="modal-example-small-backdrop"
            ></div>
        </div>

        <div class="mb-16">
            <h2 class="mb-4 text-3xl font-extrabold text-center text-black sm:text-4xl md:text-5xl">Thématiques (20)
            </h2>
            <div class="grid grid-cols-1 gap-6 pb-6 mb-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @for ($i = 0; $i < 12; $i++)
                    <a href="#">
                        <div
                            class="relative flex items-center justify-center h-64 overflow-hidden font-medium text-white rounded-md location w-100">
                            <div
                                class="absolute inset-0 z-10 transition duration-300 ease-in-out transform scale-100 location__image">
                                <img src="https://res.cloudinary.com/typeeighty/image/upload/c_scale\,f_auto\,q_auto\,w_480/v1597890837/clinic-near-me/ang-mo-kio.jpg"
                                    width="384" height="256" alt="Ang Mo Kio" loading="lazy" decoding="async"
                                    srcset="https://res.cloudinary.com/typeeighty/image/upload/c_scale\,f_auto\,q_auto\,w_800/v1597890837/clinic-near-me/ang-mo-kio.jpg 2x, https://res.cloudinary.com/typeeighty/image/upload/f_auto\,q_auto/v1597890837/clinic-near-me/ang-mo-kio.jpg 3x"
                                    class="object-cover w-full h-full"></div> <span class="z-20 uppercase">
                                Ang Mo Kio (17)
                            </span>
                        </div>
                    </a>
                @endfor
            </div>
        </div>
        <div class="flex flex-col items-center px-4 py-8 mb-16 bg-right-bottom bg-no-repeat bg-cover bg-primary animated fadeIn sm:flex-row sm:py-16 sm:px-12"
            style="background-image: url('img/cta-illustration.svg')">
            <h2
                class="max-w-xs mx-auto mb-10 font-bold text-center text-white sm:text-xl sm:mr-10 sm:max-w-full sm:text-left sm:w-1/3 sm:mx-0 sm:mb-0 md:w-1/2 lg:w-7/12">
                Restez informer des nouvelles formations
            </h2>
            <div class="flex flex-grow w-full sm:w-2/3 md:w-1/2 lg:w-5/12">
                <form class="flex items-center w-full p-4 bg-white rounded-sm space-between" action="#">
                    <input class="flex-grow text-gray-900 placeholder-gray-500 bg-white appearance-none " type="text"
                        placeholder="Entrer votre email" />
                    <svg class="fill-current text-primary" width="16" height="12" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5H1c-.6 0-1 .4-1 1s.4 1 1 1h8v5l7-6-7-6v5z" fill="#0F6F54"></path>
                    </svg>
                </form>
            </div>
        </div>
        <div class="flex flex-col items-center sm:flex-row sm:justify-between">
            <a class="text-primary" href="#">
                <img src="img/logo.svg" alt="" class="mx-auto mb-4" />
            </a>
            <div class="flex flex-row justify-center mb-4 -ml-4 -mr-4">
                <a href="#" class="p-4 text-primary hover:text-black">
                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>Facebook</title>
                        <path
                            d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z">
                        </path>
                    </svg>
                </a>
                <a href="#" class="p-4 text-primary hover:text-black">
                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>Twitter</title>
                        <path
                            d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z">
                        </path>
                    </svg>
                </a>
                <a href="#" class="p-4 text-primary hover:text-black">
                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>Instagram</title>
                        <g>
                            <circle cx="12.145" cy="3.892" r="1"></circle>
                            <path
                                d="M8 12c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2z">
                            </path>
                            <path
                                d="M12 16H4c-2.056 0-4-1.944-4-4V4c0-2.056 1.944-4 4-4h8c2.056 0 4 1.944 4 4v8c0 2.056-1.944 4-4 4zM4 2c-.935 0-2 1.065-2 2v8c0 .953 1.047 2 2 2h8c.935 0 2-1.065 2-2V4c0-.935-1.065-2-2-2H4z">
                            </path>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
        <div class="flex flex-col justify-between mb-8 text-center sm:flex-row">
            <p class="order-last mb-4 text-sm text-black sm:order-first">
                &copy; Copyright Tous droits reservés
                <a href="https://cruip.com/" class="text-primary">Formations.tg</a>. Coded by
                <a href="https://twitter/gausoft_" class="text-primary">gausoft</a>
            </p>
            <ul class="flex flex-row justify-center mb-6 -ml-4 -mr-4 text-sm">
                <li>
                    <a href="#" class="px-4 font-semibold text-black hover:text-primary">Annuaire</a>
                </li>
                <li>
                    <a href="#" class="px-4 font-semibold text-black hover:text-primary">Contact</a>
                </li>
                <li>
                    <a href="#" class="px-4 font-semibold text-black hover:text-primary">A propos</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- modal div -->
    <div class="mt-6" x-data="{ open: false }">

      <!-- Button (blue), duh! -->
      <button class="px-4 py-2 text-white bg-blue-500 rounded select-none no-outline focus:shadow-outline" @click="open = true">Open Modal</button>

      <!-- Dialog (full screen) -->
      <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full" style="background-color: rgba(0,0,0,.5);" x-show="open" x-cloak  x-transition.opacity>

        <!-- A basic modal dialog with title, body and one button to close -->
        <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0" @click.away="open = false">
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg font-medium leading-6 text-gray-900">
              Modal Title
            </h3>

            <div class="mt-2">
              <p class="text-sm leading-5 text-gray-500">
                Adipisci quasi doloribus. Veniam veritatis dignissimos. Quis maiores ea. Et nulla sunt.
              </p>
          </div>
        </div>

          <!-- One big close button.  --->
          <div class="mt-5 sm:mt-6">
            <span class="flex w-full rounded-md shadow-sm">
              <button @click="open = false" class="inline-flex justify-center w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                Close this modal!
              </button>
            </span>
          </div>

        </div>
      </div>
    </div>

    
    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document
            .getElementById(modalID + "-backdrop")
            .classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>
</body>

</html>
