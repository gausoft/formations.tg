@extends('layouts/app')
@section('title') Toutes les formations @endsection

@section('content')
<div class="animate__animated animate__fadeIn bg-gray-50">
    <div class="relative py-20 bg-brand-50 sm:py-24">
        <div class="absolute inset-0 flex flex-col">
            <div class="relative flex-1 pb-32"><svg class="absolute hidden lg:block left-1/6 bottom-1/5" width="156"
                    height="180" fill="none" viewBox="0 0 156 180">
                    <defs>
                        <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-brand-200" fill="currentColor"></rect>
                        </pattern>
                    </defs>
                    <rect width="156" height="180" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)"></rect>
                </svg></div>
            <div class="flex-1 w-full bg-gray-50"></div>
        </div>
        <div class="relative px-4 mx-auto max-w-screen-xxl sm:px-6 lg:px-8">
            <div class="relative max-w-sm mx-auto text-center sm:max-w-xl">
                <h1
                    class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                    Contact</h1>
                <p class="mt-3 text-base text-gray-500 sm:text-lg md:mt-5">Vous avez une question, un besoin ou vous
                    souhaitez juste dire bonjour? Contactez nous</p>
            </div>
            <div class="relative pt-20">
                <div class="relative max-w-4xl px-6 py-5 mx-auto bg-white rounded-lg shadow-lg lg:px-8 sm:py-6">
                    <form>
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="sm:col-span-1">
                                <div><label for="name" class="block text-sm font-medium leading-5 text-gray-700">Nom
                                        complet</label>
                                    <div class="relative mt-1 rounded-md shadow-sm"><input type="text" id="name"
                                            name="name" value=""
                                            class="block w-full border border-gray-300 form-input sm:text-sm sm:leading-5"
                                            placeholder="John Doe"></div>
                                </div>
                            </div>
                            <div class="sm:col-span-1">
                                <div><label for="email"
                                        class="block text-sm font-medium leading-5 text-gray-700">Adresse e-mail</label>
                                    <div class="relative mt-1 rounded-md shadow-sm"><input type="email" id="email"
                                            required="" name="email" value=""
                                            class="block w-full border border-gray-300 form-input sm:text-sm sm:leading-5"
                                            placeholder="example@gmail.com"></div>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div><label for="sujet"
                                        class="block text-sm font-medium leading-5 text-gray-700">Sujet</label>
                                    <div class="relative mt-1 rounded-md shadow-sm"><input type="text" id="sujet"
                                            required="" name="subject" value=""
                                            class="block w-full border border-gray-300 form-input sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div>
                                    <div class="flex items-center justify-between"><label for="message"
                                            class="block text-sm font-medium leading-5 text-gray-700">Votre
                                            message</label><span class="text-sm leading-5 text-gray-500">Max. 500
                                            caractères</span></div>
                                    <div class="relative mt-1 rounded-md shadow-sm"><textarea id="message" rows="4"
                                            name="message" required=""
                                            class="block w-full border border-gray-300 form-textarea sm:text-sm sm:leading-5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <div class="flex justify-end"><span class="inline-flex ml-3 rounded-md shadow-sm"><button
                                        type="submit"
                                        class="justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 border border-transparent rounded-lg bg-brand-600 active:bg-purple-600 hover:bg-brand-700 focus:outline-none focus:shadow-outline-purpleitems-center "><span>Envoyer</span></button></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-white h-84">
        <div id="map" class="w-full h-84" style="position: relative; overflow: hidden;">
            <div
                style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                <div class="gm-style"
                    style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                    <div><button draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts"
                            type="button"
                            style="background: none transparent; display: block; border: none; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; z-index: 1000002; left: -100000px; top: -100000px;"></button>
                    </div>
                    <div tabindex="0" aria-label="Map" aria-roledescription="map" role="group"
                        style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                        <div
                            style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                            <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                    <div
                                        style="position: absolute; z-index: 983; transform: matrix(1, 0, 0, 1, -12, -57);">
                                        <div
                                            style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                            <div style="width: 256px; height: 256px;"></div>
                                        </div>
                                        <div
                                            style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                            <div style="width: 256px; height: 256px;"></div>
                                        </div>
                                        <div
                                            style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                            <div style="width: 256px; height: 256px;"></div>
                                        </div>
                                        <div
                                            style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                            <div style="width: 256px; height: 256px;"></div>
                                        </div>
                                        <div
                                            style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                            <div style="width: 256px; height: 256px;"></div>
                                        </div>
                                        <div
                                            style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                            <div style="width: 256px; height: 256px;"></div>
                                        </div>
                                        <div
                                            style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;">
                                            <div style="width: 256px; height: 256px;"></div>
                                        </div>
                                        <div
                                            style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;">
                                            <div style="width: 256px; height: 256px;"></div>
                                        </div>
                                        <div
                                            style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;">
                                            <div style="width: 256px; height: 256px;"></div>
                                        </div>
                                        <div
                                            style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
                                            <div style="width: 256px; height: 256px;"></div>
                                        </div>
                                        <div
                                            style="position: absolute; left: -768px; top: 0px; width: 256px; height: 256px;">
                                            <div style="width: 256px; height: 256px;"></div>
                                        </div>
                                        <div
                                            style="position: absolute; left: -768px; top: -256px; width: 256px; height: 256px;">
                                            <div style="width: 256px; height: 256px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                            <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                            <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                    <div
                                        style="position: absolute; z-index: 983; transform: matrix(1, 0, 0, 1, -12, -57);">
                                        <div
                                            style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;">
                                        </div>
                                        <div
                                            style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;">
                                        </div>
                                        <div
                                            style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;">
                                        </div>
                                        <div
                                            style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;">
                                        </div>
                                        <div
                                            style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;">
                                        </div>
                                        <div
                                            style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;">
                                        </div>
                                        <div
                                            style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;">
                                        </div>
                                        <div
                                            style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: -256px;">
                                        </div>
                                        <div
                                            style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: -256px;">
                                        </div>
                                        <div
                                            style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;">
                                        </div>
                                        <div
                                            style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -768px; top: 0px;">
                                        </div>
                                        <div
                                            style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -768px; top: -256px;">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    style="width: 27px; height: 43px; overflow: hidden; position: absolute; left: -14px; top: -43px; z-index: 0;">
                                    <img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png"
                                        draggable="false"
                                        style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                </div>
                            </div>
                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                <div style="position: absolute; z-index: 983; transform: matrix(1, 0, 0, 1, -12, -57);">
                                    <div
                                        style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                        <img draggable="false" alt="" role="presentation"
                                            src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i39599!3i46194!4i256!2m3!1e0!2sm!3i583307598!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyD1GAOdaHfo83h1sfrjI9ORRZXvT4_kC0w&amp;token=116749"
                                            style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                    </div>
                                    <div
                                        style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                        <img draggable="false" alt="" role="presentation"
                                            src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i39600!3i46194!4i256!2m3!1e0!2sm!3i583308042!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyD1GAOdaHfo83h1sfrjI9ORRZXvT4_kC0w&amp;token=118436"
                                            style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                    </div>
                                    <div
                                        style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                        <img draggable="false" alt="" role="presentation"
                                            src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i39600!3i46193!4i256!2m3!1e0!2sm!3i583308042!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyD1GAOdaHfo83h1sfrjI9ORRZXvT4_kC0w&amp;token=108031"
                                            style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                    </div>
                                    <div
                                        style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                        <img draggable="false" alt="" role="presentation"
                                            src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i39599!3i46193!4i256!2m3!1e0!2sm!3i583307971!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyD1GAOdaHfo83h1sfrjI9ORRZXvT4_kC0w&amp;token=65603"
                                            style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                    </div>
                                    <div
                                        style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                        <img draggable="false" alt="" role="presentation"
                                            src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i39601!3i46193!4i256!2m3!1e0!2sm!3i583308042!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyD1GAOdaHfo83h1sfrjI9ORRZXvT4_kC0w&amp;token=8467"
                                            style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                    </div>
                                    <div
                                        style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                        <img draggable="false" alt="" role="presentation"
                                            src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i39598!3i46194!4i256!2m3!1e0!2sm!3i583307575!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyD1GAOdaHfo83h1sfrjI9ORRZXvT4_kC0w&amp;token=91585"
                                            style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                    </div>
                                    <div
                                        style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                        <img draggable="false" alt="" role="presentation"
                                            src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i39601!3i46194!4i256!2m3!1e0!2sm!3i583308042!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyD1GAOdaHfo83h1sfrjI9ORRZXvT4_kC0w&amp;token=18872"
                                            style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                    </div>
                                    <div
                                        style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                        <img draggable="false" alt="" role="presentation"
                                            src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i39598!3i46193!4i256!2m3!1e0!2sm!3i583307971!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyD1GAOdaHfo83h1sfrjI9ORRZXvT4_kC0w&amp;token=34096"
                                            style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                    </div>
                                    <div
                                        style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                        <img draggable="false" alt="" role="presentation"
                                            src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i39602!3i46193!4i256!2m3!1e0!2sm!3i583308042!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyD1GAOdaHfo83h1sfrjI9ORRZXvT4_kC0w&amp;token=39974"
                                            style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                    </div>
                                    <div
                                        style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                        <img draggable="false" alt="" role="presentation"
                                            src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i39602!3i46194!4i256!2m3!1e0!2sm!3i583308042!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyD1GAOdaHfo83h1sfrjI9ORRZXvT4_kC0w&amp;token=50379"
                                            style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                    </div>
                                    <div
                                        style="position: absolute; left: -768px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                        <img draggable="false" alt="" role="presentation"
                                            src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i39597!3i46194!4i256!2m3!1e0!2sm!3i583307575!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyD1GAOdaHfo83h1sfrjI9ORRZXvT4_kC0w&amp;token=60078"
                                            style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                    </div>
                                    <div
                                        style="position: absolute; left: -768px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                        <img draggable="false" alt="" role="presentation"
                                            src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i39597!3i46193!4i256!2m3!1e0!2sm!3i583307898!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0&amp;key=AIzaSyD1GAOdaHfo83h1sfrjI9ORRZXvT4_kC0w&amp;token=74134"
                                            style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                            <div
                                style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                    <div tabindex="-1"
                                        style="width: 27px; height: 43px; overflow: hidden; position: absolute; left: -14px; top: -43px; z-index: 0;">
                                        <img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png"
                                            draggable="false" usemap="#gmimap0"
                                            style="width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"><map
                                            name="gmimap0" id="gmimap0"><area log="miw"
                                                coords="13.5,0,4,3.75,0,13.5,13.5,43,27,13.5,23,3.75" shape="poly"
                                                tabindex="-1" title=""
                                                style="cursor: pointer; touch-action: none;"></map>
                                    </div>
                                </div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                            </div>
                        </div>
                        <div class="gm-style-moc"
                            style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                            <p class="gm-style-mot"></p>
                        </div>
                    </div><iframe aria-hidden="true" frameborder="0" tabindex="-1"
                        style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                    <div
                        style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);">
                    </div>
                    <div>
                        <div class="gmnoprint" role="menubar"
                            style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;">
                            <div class="gm-style-mtc" style="float: left; position: relative;"><button draggable="false"
                                    aria-label="Show street map" title="Show street map" type="button"
                                    role="menuitemradio" aria-checked="true"
                                    style="background: none padding-box rgb(255, 255, 255); display: table-cell; border: 0px; margin: 0px; padding: 0px 23px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; direction: ltr; overflow: hidden; text-align: center; height: 40px; vertical-align: middle; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; font-size: 18px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 36px; font-weight: 500;"
                                    id="40B32904-DBCB-4B10-AFC8-D0420035A0DF" aria-expanded="false">Map</button>
                                <ul role="menu" aria-labelledby="40B32904-DBCB-4B10-AFC8-D0420035A0DF"
                                    style="background-color: white; list-style: none; padding: 2px; margin: 0px; z-index: -1; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 40px; text-align: left; display: none;">
                                    <li tabindex="-1" role="menuitemcheckbox" aria-label="Show street map with terrain"
                                        draggable="false" title="Show street map with terrain" aria-checked="false"
                                        style="color: black; font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 7px 8px 7px 7px; direction: ltr; text-align: left; white-space: nowrap;">
                                        <span><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22/%3E%3Cpath%20d%3D%22M19%203H5c-1.11%200-2%20.9-2%202v14c0%201.1.89%202%202%202h14c1.11%200%202-.9%202-2V5c0-1.1-.89-2-2-2zm-9%2014l-5-5%201.41-1.41L10%2014.17l7.59-7.59L19%208l-9%209z%22/%3E%3C/svg%3E"
                                                alt=""
                                                style="height: 1em; width: 1em; transform: translateY(0.15em); display: none;"><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M19%205v14H5V5h14m0-2H5c-1.1%200-2%20.9-2%202v14c0%201.1.9%202%202%202h14c1.1%200%202-.9%202-2V5c0-1.1-.9-2-2-2z%22/%3E%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22/%3E%3C/svg%3E"
                                                alt=""
                                                style="height: 1em; width: 1em; transform: translateY(0.15em);"></span><label
                                            style="cursor: inherit;">Terrain</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="gm-style-mtc" style="float: left; position: relative;"><button draggable="false"
                                    aria-label="Show satellite imagery" title="Show satellite imagery" type="button"
                                    role="menuitemradio" aria-checked="false"
                                    style="background: none padding-box rgb(255, 255, 255); display: table-cell; border: 0px; margin: 0px; padding: 0px 23px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; direction: ltr; overflow: hidden; text-align: center; height: 40px; vertical-align: middle; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; font-size: 18px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 65px;"
                                    id="E317EC47-C18F-424D-BD4B-53DC02AC5C28" aria-expanded="false">Satellite</button>
                                <ul role="menu" aria-labelledby="E317EC47-C18F-424D-BD4B-53DC02AC5C28"
                                    style="background-color: white; list-style: none; padding: 2px; margin: 0px; z-index: -1; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 40px; text-align: left; display: none;">
                                    <li tabindex="-1" role="menuitemcheckbox"
                                        aria-label="Show imagery with street names" draggable="false"
                                        title="Show imagery with street names" aria-checked="true"
                                        style="color: black; font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 7px 8px 7px 7px; direction: ltr; text-align: left; white-space: nowrap;">
                                        <span><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22/%3E%3Cpath%20d%3D%22M19%203H5c-1.11%200-2%20.9-2%202v14c0%201.1.89%202%202%202h14c1.11%200%202-.9%202-2V5c0-1.1-.89-2-2-2zm-9%2014l-5-5%201.41-1.41L10%2014.17l7.59-7.59L19%208l-9%209z%22/%3E%3C/svg%3E"
                                                alt=""
                                                style="height: 1em; width: 1em; transform: translateY(0.15em);"><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M19%205v14H5V5h14m0-2H5c-1.1%200-2%20.9-2%202v14c0%201.1.9%202%202%202h14c1.1%200%202-.9%202-2V5c0-1.1-.9-2-2-2z%22/%3E%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22/%3E%3C/svg%3E"
                                                alt=""
                                                style="height: 1em; width: 1em; transform: translateY(0.15em); display: none;"></span><label
                                            style="cursor: inherit;">Labels</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div><button draggable="false" aria-label="Toggle fullscreen view" title="Toggle fullscreen view"
                            type="button" class="gm-control-active gm-fullscreen-control"
                            style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img
                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                                alt="" style="height: 18px; width: 18px;"><img
                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                                alt="" style="height: 18px; width: 18px;"><img
                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                                alt="" style="height: 18px; width: 18px;"></button></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div>
                        <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false"
                            data-control-width="40" data-control-height="153"
                            style="margin: 10px; user-select: none; position: absolute; bottom: 167px; right: 40px;">
                            <div class="gmnoprint" data-control-width="40" data-control-height="40"
                                style="display: none; position: absolute;">
                                <div
                                    style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px;">
                                    <button draggable="false" aria-label="Rotate map clockwise"
                                        title="Rotate map clockwise" type="button" class="gm-control-active"
                                        style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                            style="width: 20px; height: 20px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                            style="width: 20px; height: 20px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                            style="width: 20px; height: 20px;"></button>
                                    <div
                                        style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;">
                                    </div><button draggable="false" aria-label="Rotate map counterclockwise"
                                        title="Rotate map counterclockwise" type="button" class="gm-control-active"
                                        style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px; transform: scaleX(-1);"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                            style="width: 20px; height: 20px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                            style="width: 20px; height: 20px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                            style="width: 20px; height: 20px;"></button>
                                    <div
                                        style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;">
                                    </div><button draggable="false" aria-label="Tilt map" title="Tilt map" type="button"
                                        class="gm-tilt gm-control-active"
                                        style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; top: 0px; left: 0px; overflow: hidden; width: 40px; height: 40px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"
                                            style="width: 18px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"
                                            style="width: 18px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"
                                            style="width: 18px;"></button>
                                </div>
                            </div>
                            <div class="gm-svpc" dir="ltr" title="Drag Pegman onto the map to open Street View"
                                data-control-width="40" data-control-height="40"
                                style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: none; position: absolute; left: 0px; top: 0px;">
                                <div style="position: absolute; left: 50%; top: 50%;"></div>
                                <div style="position: absolute; left: 50%; top: 50%;"><img
                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2023%2038%22%3E%3Cpath%20d%3D%22M16.6%2038.1h-5.5l-.2-2.9-.2%202.9h-5.5L5%2025.3l-.8%202a1.53%201.53%200%2001-1.9.9l-1.2-.4a1.58%201.58%200%2001-1-1.9v-.1c.3-.9%203.1-11.2%203.1-11.2a2.66%202.66%200%20012.3-2l.6-.5a6.93%206.93%200%20014.7-12%206.8%206.8%200%20014.9%202%207%207%200%20012%204.9%206.65%206.65%200%2001-2.2%205l.7.5a2.78%202.78%200%20012.4%202s2.9%2011.2%202.9%2011.3a1.53%201.53%200%2001-.9%201.9l-1.3.4a1.63%201.63%200%2001-1.9-.9l-.7-1.8-.1%2012.7zm-3.6-2h1.7L14.9%2020.3l1.9-.3%202.4%206.3.3-.1c-.2-.8-.8-3.2-2.8-10.9a.63.63%200%2000-.6-.5h-.6l-1.1-.9h-1.9l-.3-2a4.83%204.83%200%20003.5-4.7A4.78%204.78%200%200011%202.3H10.8a4.9%204.9%200%2000-1.4%209.6l-.3%202h-1.9l-1%20.9h-.6a.74.74%200%2000-.6.5c-2%207.5-2.7%2010-3%2010.9l.3.1L4.8%2020l1.9.3.2%2015.8h1.6l.6-8.4a1.52%201.52%200%20011.5-1.4%201.5%201.5%200%20011.5%201.4l.9%208.4zm-10.9-9.6zm17.5-.1z%22%20style%3D%22isolation%3Aisolate%22%20fill%3D%22%23333%22%20opacity%3D%22.7%22/%3E%3Cpath%20d%3D%22M5.9%2013.6l1.1-.9h7.8l1.2.9%22%20fill%3D%22%23ce592c%22/%3E%3Cellipse%20cx%3D%2210.9%22%20cy%3D%2213.1%22%20rx%3D%222.7%22%20ry%3D%22.3%22%20style%3D%22isolation%3Aisolate%22%20fill%3D%22%23ce592c%22%20opacity%3D%22.5%22/%3E%3Cpath%20d%3D%22M20.6%2026.1l-2.9-11.3a1.71%201.71%200%2000-1.6-1.2H5.699999999999999a1.69%201.69%200%2000-1.5%201.3l-3.1%2011.3a.61.61%200%2000.3.7l1.1.4a.61.61%200%2000.7-.3l2.7-6.7.2%2016.8h3.6l.6-9.3a.47.47%200%2001.44-.5h.06c.4%200%20.4.2.5.5l.6%209.3h3.6L15.7%2020.3l2.5%206.6a.52.52%200%2000.66.31l1.2-.4a.57.57%200%2000.5-.7z%22%20fill%3D%22%23fdbf2d%22/%3E%3Cpath%20d%3D%22M7%2013.6l3.9%206.7%203.9-6.7%22%20style%3D%22isolation%3Aisolate%22%20fill%3D%22%23cf572e%22%20opacity%3D%22.6%22/%3E%3Ccircle%20cx%3D%2210.9%22%20cy%3D%227%22%20r%3D%225.9%22%20fill%3D%22%23fdbf2d%22/%3E%3C/svg%3E"
                                        aria-label="Street View Pegman Control"
                                        style="height: 30px; width: 30px; position: absolute; transform: translate(-50%, -50%); pointer-events: none;"><img
                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2038%22%3E%3Cpath%20d%3D%22M22%2026.6l-2.9-11.3a2.78%202.78%200%2000-2.4-2l-.7-.5a6.82%206.82%200%20002.2-5%206.9%206.9%200%2000-13.8%200%207%207%200%20002.2%205.1l-.6.5a2.55%202.55%200%2000-2.3%202s-3%2011.1-3%2011.2v.1a1.58%201.58%200%20001%201.9l1.2.4a1.63%201.63%200%20001.9-.9l.8-2%20.2%2012.8h11.3l.2-12.6.7%201.8a1.54%201.54%200%20001.5%201%201.09%201.09%200%2000.5-.1l1.3-.4a1.85%201.85%200%2000.7-2zm-1.2.9l-1.2.4a.61.61%200%2001-.7-.3l-2.5-6.6-.2%2016.8h-9.4L6.6%2021l-2.7%206.7a.52.52%200%2001-.66.31l-1.1-.4a.52.52%200%2001-.31-.66l3.1-11.3a1.69%201.69%200%20011.5-1.3h.2l1-.9h2.3a5.9%205.9%200%20113.2%200h2.3l1.1.9h.2a1.71%201.71%200%20011.6%201.2l2.9%2011.3a.84.84%200%2001-.4.7z%22%20fill%3D%22%23333%22%20fill-opacity%3D%22.2%22/%3E%26quot%3B%3C/svg%3E"
                                        aria-label="Pegman is on top of the Map"
                                        style="display: none; height: 30px; width: 30px; position: absolute; transform: translate(-50%, -50%); pointer-events: none;"><img
                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2050%22%3E%3Cpath%20d%3D%22M34-30.4l-2.9-11.3a2.78%202.78%200%2000-2.4-2l-.7-.5a6.82%206.82%200%20002.2-5%206.9%206.9%200%2000-13.8%200%207%207%200%20002.2%205.1l-.6.5a2.55%202.55%200%2000-2.3%202s-3%2011.1-3%2011.2v.1a1.58%201.58%200%20001%201.9l1.2.4a1.63%201.63%200%20001.9-.9l.8-2%20.2%2012.8h11.3l.2-12.6.7%201.8a1.54%201.54%200%20001.5%201%201.09%201.09%200%2000.5-.1l1.3-.4a1.85%201.85%200%2000.7-2zm-1.2.9l-1.2.4a.61.61%200%2001-.7-.3L28.4-36l-.2%2016.8h-9.4L18.6-36l-2.7%206.7a.52.52%200%2001-.66.31l-1.1-.4a.52.52%200%2001-.31-.66l3.1-11.3a1.69%201.69%200%20011.5-1.3h.2l1-.9h2.3a5.9%205.9%200%20113.2%200h2.3l1.1.9h.2a1.71%201.71%200%20011.6%201.2l2.9%2011.3a.84.84%200%2001-.4.7zM34%2029.6l-2.9-11.3a2.78%202.78%200%2000-2.4-2l-.7-.5a6.82%206.82%200%20002.2-5%206.9%206.9%200%2000-13.8%200%207%207%200%20002.2%205.1l-.6.5a2.55%202.55%200%2000-2.3%202s-3%2011.1-3%2011.2v.1a1.58%201.58%200%20001%201.9l1.2.4a1.63%201.63%200%20001.9-.9l.8-2%20.2%2012.8h11.3l.2-12.6.7%201.8a1.54%201.54%200%20001.5%201%201.09%201.09%200%2000.5-.1l1.3-.4a1.85%201.85%200%2000.7-2zm-1.2.9l-1.2.4a.61.61%200%2001-.7-.3L28.4%2024l-.2%2016.8h-9.4L18.6%2024l-2.7%206.7a.52.52%200%2001-.66.31l-1.1-.4a.52.52%200%2001-.31-.66l3.1-11.3a1.69%201.69%200%20011.5-1.3h.2l1-.9h2.3a5.9%205.9%200%20113.2%200h2.3l1.1.9h.2a1.71%201.71%200%20011.6%201.2l2.9%2011.3a.84.84%200%2001-.4.7z%22%20fill%3D%22%23333%22%20fill-opacity%3D%22.2%22/%3E%3Cpath%20d%3D%22M15.4%2038.8h-4a1.64%201.64%200%2001-1.4-1.1l-3.1-8a.9.9%200%2001-.5.1l-1.4.1a1.62%201.62%200%2001-1.6-1.4L2.3%2015.4l1.6-1.3a6.87%206.87%200%2001-3-4.6A7.14%207.14%200%20012%204a7.6%207.6%200%20014.7-3.1A7.14%207.14%200%200112.2%202a7.28%207.28%200%20012.3%209.6l2.1-.1.1%201c0%20.2.1.5.1.8a2.41%202.41%200%20011%201s1.9%203.2%202.8%204.9c.7%201.2%202.1%204.2%202.8%205.9a2.1%202.1%200%2001-.8%202.6l-.6.4a1.63%201.63%200%2001-1.5.2l-.6-.3a8.93%208.93%200%2000.5%201.3%207.91%207.91%200%20001.8%202.6l.6.3v4.6l-4.5-.1a7.32%207.32%200%2001-2.5-1.5l-.4%203.6zm-10-19.2l3.5%209.8%202.9%207.5h1.6V35l-1.9-9.4%203.1%205.4a8.24%208.24%200%20003.8%203.8h2.1v-1.4a14%2014%200%2001-2.2-3.1%2044.55%2044.55%200%2001-2.2-8l-1.3-6.3%203.2%205.6c.6%201.1%202.1%203.6%202.8%204.9l.6-.4c-.8-1.6-2.1-4.6-2.8-5.8-.9-1.7-2.8-4.9-2.8-4.9a.54.54%200%2000-.4-.3l-.7-.1-.1-.7a4.33%204.33%200%2000-.1-.5l-5.3.3%202.2-1.9a4.3%204.3%200%2000.9-1%205.17%205.17%200%2000.8-4%205.67%205.67%200%2000-2.2-3.4%205.09%205.09%200%2000-4-.8%205.67%205.67%200%2000-3.4%202.2%205.17%205.17%200%2000-.8%204%205.67%205.67%200%20002.2%203.4%203.13%203.13%200%20001%20.5l1.6.6-3.2%202.6%201%2011.5h.4l-.3-8.2z%22%20fill%3D%22%23333%22/%3E%3Cpath%20d%3D%22M3.35%2015.9l1.1%2012.5a.39.39%200%2000.36.42h.14l1.4-.1a.66.66%200%2000.5-.4l-.2-3.8-3.3-8.6z%22%20fill%3D%22%23fdbf2d%22/%3E%3Cpath%20d%3D%22M5.2%2028.8l1.1-.1a.66.66%200%2000.5-.4l-.2-3.8-1.2-3.1z%22%20fill%3D%22%23ce592b%22%20fill-opacity%3D%22.25%22/%3E%3Cpath%20d%3D%22M21.4%2035.7l-3.8-1.2-2.7-7.8L12%2015.5l3.4-2.9c.2%202.4%202.2%2014.1%203.7%2017.1%200%200%201.3%202.6%202.3%203.1v2.9m-8.4-8.1l-2-.3%202.5%2010.1.9.4v-2.9%22%20fill%3D%22%23e5892b%22/%3E%3Cpath%20d%3D%22M17.8%2025.4c-.4-1.5-.7-3.1-1.1-4.8-.1-.4-.1-.7-.2-1.1l-1.1-2-1.7-1.6s.9%205%202.4%207.1a19.12%2019.12%200%20001.7%202.4z%22%20style%3D%22isolation%3Aisolate%22%20fill%3D%22%23cf572e%22%20opacity%3D%22.6%22/%3E%3Cpath%20d%3D%22M14.4%2037.8h-3a.43.43%200%2001-.4-.4l-3-7.8-1.7-4.8-3-9%208.9-.4s2.9%2011.3%204.3%2014.4c1.9%204.1%203.1%204.7%205%205.8h-3.2s-4.1-1.2-5.9-7.7a.59.59%200%2000-.6-.4.62.62%200%2000-.3.7s.5%202.4.9%203.6a34.87%2034.87%200%20002%206z%22%20fill%3D%22%23fdbf2d%22/%3E%3Cpath%20d%3D%22M15.4%2012.7l-3.3%202.9-8.9.4%203.3-2.7%22%20fill%3D%22%23ce592b%22/%3E%3Cpath%20d%3D%22M9.1%2021.1l1.4-6.2-5.9.5%22%20style%3D%22isolation%3Aisolate%22%20fill%3D%22%23cf572e%22%20opacity%3D%22.6%22/%3E%3Cpath%20d%3D%22M12%2013.5a4.75%204.75%200%2001-2.6%201.1c-1.5.3-2.9.2-2.9%200s1.1-.6%202.7-1%22%20fill%3D%22%23bb3d19%22/%3E%3Ccircle%20cx%3D%227.92%22%20cy%3D%228.19%22%20r%3D%226.3%22%20fill%3D%22%23fdbf2d%22/%3E%3Cpath%20d%3D%22M4.7%2013.6a6.21%206.21%200%20008.4-1.9v-.1a8.89%208.89%200%2001-8.4%202z%22%20fill%3D%22%23ce592b%22%20fill-opacity%3D%22.25%22/%3E%3Cpath%20d%3D%22M21.2%2027.2l.6-.4a1.09%201.09%200%2000.4-1.3c-.7-1.5-2.1-4.6-2.8-5.8-.9-1.7-2.8-4.9-2.8-4.9a1.6%201.6%200%2000-2.17-.65l-.23.15a1.68%201.68%200%2000-.4%202.1s2.3%203.9%203.1%205.3c.6%201%202.1%203.7%202.9%205.1a.94.94%200%20001.24.49l.16-.09z%22%20fill%3D%22%23fdbf2d%22/%3E%3Cpath%20d%3D%22M19.4%2019.8c-.9-1.7-2.8-4.9-2.8-4.9a1.6%201.6%200%2000-2.17-.65l-.23.15-.3.3c1.1%201.5%202.9%203.8%203.9%205.4%201.1%201.8%202.9%205%203.8%206.7l.1-.1a1.09%201.09%200%2000.4-1.3%2057.67%2057.67%200%2000-2.7-5.6z%22%20fill%3D%22%23ce592b%22%20fill-opacity%3D%22.25%22/%3E%3C/svg%3E"
                                        aria-label="Street View Pegman Control"
                                        style="display: none; height: 40px; width: 40px; position: absolute; transform: translate(-60%, -45%); pointer-events: none;">
                                </div>
                            </div>
                            <div class="gmnoprint" data-control-width="40" data-control-height="81"
                                style="position: absolute; left: 0px; top: 72px;">
                                <div draggable="false"
                                    style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                                    <button draggable="false" aria-label="Zoom in" title="Zoom in" type="button"
                                        class="gm-control-active"
                                        style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"
                                            alt="" style="height: 18px; width: 18px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"
                                            alt="" style="height: 18px; width: 18px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"
                                            alt="" style="height: 18px; width: 18px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23d1d1d1%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"
                                            alt="" style="height: 18px; width: 18px;"></button>
                                    <div
                                        style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;">
                                    </div><button draggable="false" aria-label="Zoom out" title="Zoom out" type="button"
                                        class="gm-control-active"
                                        style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"
                                            alt="" style="height: 18px; width: 18px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"
                                            alt="" style="height: 18px; width: 18px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"
                                            alt="" style="height: 18px; width: 18px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23d1d1d1%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"
                                            alt="" style="height: 18px; width: 18px;"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div style="margin: 0px 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a
                                target="_blank" rel="noopener"
                                title="Open this area in Google Maps (opens a new window)"
                                aria-label="Open this area in Google Maps (opens a new window)"
                                href="https://maps.google.com/maps?ll=46.82596,-71.23522&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3"
                                style="display: inline;">
                                <div style="width: 66px; height: 26px;"><img alt="Google"
                                        src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png"
                                        draggable="false"
                                        style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                </div>
                            </a></div>
                    </div>
                    <div></div>
                    <div>
                        <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 286px; bottom: 0px;">
                            <div draggable="false" class="gm-style-cc"
                                style="user-select: none; height: 14px; line-height: 14px;">
                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                    <div style="width: 1px;"></div>
                                    <div
                                        style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                    </div>
                                </div>
                                <div
                                    style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                    <button draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts"
                                        type="button"
                                        style="background: none; display: inline-block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit;">Keyboard
                                        shortcuts</button>
                                </div>
                            </div>
                        </div>
                        <div class="gmnoprint"
                            style="z-index: 1000001; position: absolute; right: 165px; bottom: 0px; width: 120px;">
                            <div draggable="false" class="gm-style-cc"
                                style="user-select: none; height: 14px; line-height: 14px;">
                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                    <div style="width: 1px;"></div>
                                    <div
                                        style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                    </div>
                                </div>
                                <div
                                    style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                    <button draggable="false" aria-label="Map Data" title="Map Data" type="button"
                                        style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit;">Map
                                        Data</button><span>Map data ©2021 Google</span>
                                </div>
                            </div>
                        </div>
                        <div class="gmnoprint gm-style-cc" draggable="false"
                            style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;">
                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                <div style="width: 1px;"></div>
                                <div
                                    style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                </div>
                            </div>
                            <div
                                style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                <a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank"
                                    rel="noopener"
                                    style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Terms of
                                    Use</a>
                            </div>
                        </div>
                        <div draggable="false" class="gm-style-cc"
                            style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                <div style="width: 1px;"></div>
                                <div
                                    style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                </div>
                            </div>
                            <div
                                style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                <a target="_blank" rel="noopener"
                                    title="Report errors in the road map or imagery to Google" dir="ltr"
                                    href="https://www.google.com/maps/@46.82596,-71.23522,17z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"
                                    style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none; position: relative;">Report
                                    a map error</a>
                            </div>
                        </div>
                        <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                            <div
                                style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                Map data ©2021 Google</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="mt-12 sm:mt-16 md:mt-0">
            <h2 class="text-2xl font-extrabold leading-8 text-gray-900 sm:text-3xl sm:leading-9">Support Technique
            </h2>
            <div class="mt-3">
                <p class="text-lg leading-7 text-gray-500">Si vous rencontrez des difficultés sur le site ou alors
                    si vous constatez des irrégularités, s'il vous plait, n'hésitez pas à nous contacter aussitôt.
                    Merci.</p>
            </div>
            <div class="mt-9">
                <div class="flex">
                    <div class="flex-shrink-0"><svg class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg></div>
                    <div class="ml-3 text-base leading-6 text-gray-500">
                        <p class="mt-1">Lundi - Dimanche</p>
                    </div>
                </div>
                <div class="flex mt-6">
                    <div class="flex-shrink-0"><svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg></div>
                    <div class="ml-3 text-base leading-6 text-gray-500">
                        <p>contact@godfirstfemmesdefoi.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection