<!--Overlay-->
<div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModal"
    :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal }">
    <!--Dialog-->
    <div class="w-11/12 px-6 py-4 mx-auto text-left bg-white rounded shadow-lg md:max-w-md" x-show="showModal"
        @click.away="showModal = false" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90">

        <!--Title-->
        <div class="flex items-center justify-between pb-3">
            <p class="text-2xl font-bold">Simple Modal!</p>
            <div class="z-50 cursor-pointer" @click="showModal = false">
                <svg class="text-black fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                    viewBox="0 0 18 18">
                    <path
                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                    </path>
                </svg>
            </div>
        </div>

        <!-- content -->
        <p>Modal content can go here</p>
        <p>...</p>
        <p>...</p>
        <p>...</p>
        <p>...</p>

        <!--Footer-->
        <div class="flex justify-end pt-2">
            <button
                class="p-3 px-4 mr-2 text-indigo-500 bg-transparent rounded-lg hover:bg-gray-100 hover:text-indigo-400"
                @click="alert('Additional Action');">Action</button>
            <button class="p-3 px-4 text-white bg-indigo-500 rounded-lg modal-close hover:bg-indigo-400"
                @click="showModal = false">Close</button>
        </div>

    </div>
    <!--/Dialog -->
</div><!-- /Overlay -->