<!-- component -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TailwindCSS + Alpine.js modals</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  </head>
  <body x-data="{ showModal: false}" :class="{'overflow-y-hidden': showModal}">
    <main class="flex flex-col items-center justify-center w-full h-screen sm:flex-row">
      <button
        class="w-32 p-2 m-2 font-semibold text-white transition-all duration-300 bg-red-600 rounded-full shadow-lg hover:bg-red-700 focus:outline-none focus:ring hover:shadow-none"
        @click="showModal = true"
      >
        Click here
      </button>
    </main>

    <!-- Modal1 -->
    <div
      class="fixed inset-0 z-20 w-full h-full overflow-y-auto duration-300 bg-black bg-opacity-50"
      x-show="showModal"
      x-transition:enter="transition duration-300"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="transition duration-300"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
    >
      <div class="relative mx-2 my-10 opacity-100 sm:w-3/4 md:w-1/2 lg:w-1/3 sm:mx-auto">
        <div
          class="relative z-20 text-gray-900 bg-white rounded-md shadow-lg"
          @click.away="showModal = false"
          x-show="showModal"
          x-transition:enter="transition transform duration-300"
          x-transition:enter-start="scale-0"
          x-transition:enter-end="scale-100"
          x-transition:leave="transition transform duration-300"
          x-transition:leave-start="scale-100"
          x-transition:leave-end="scale-0"
        >
          <header class="flex items-center justify-between p-2">
            <h2 class="font-semibold">Header</h2>
            <button class="p-2 focus:outline-none" @click="showModal = false">
              <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path
                  d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"
                ></path>
              </svg>
            </button>
          </header>
          <main class="p-2 text-center">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam voluptatem, optio dolorem accusantium fuga
              molestias nobis sequi autem ducimus laudantium beatae amet earum, quia reiciendis corporis animi modi
              pariatur impedit!
            </p>
          </main>
          <footer class="flex justify-center p-2">
            <button
              class="w-32 p-2 font-semibold text-white transition-all duration-300 bg-red-600 rounded-full shadow-lg hover:bg-red-700 focus:outline-none focus:ring hover:shadow-none"
              @click="showModal = false"
            >
              Go back
            </button>
          </footer>
        </div>
      </div>
    </div>
    </div>

  </body>
</html>