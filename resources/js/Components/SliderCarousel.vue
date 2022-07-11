<template>
    <div class="flex space-x-0 md:space-x-6 mb-12">
        <div class="w-4/5">
            <div class="relative z-auto">
                <div class="z-20 absolute bottom-28 left-20 max-w-lg">
                    <div class="flex flex-col space-y-6">
                        <h1 class="text-4xl text-white">The Title of the Game the title of the game </h1>
                        <p>Guide your team of explorers into the treacherous depths of an ancient machine.</p>
                        <div class="flex">
                            <Link href="#"
                                class="bg-gray-300 hover:bg-gray-400 text-gray-900 py-3 px-6 rounded-md"
                            >
                                Go to Website <FontAwesomeIcon icon="fa-solid fa-arrow-up-right-from-square" class="ml-2" />
                            </Link>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full bg-gradient-to-t from-black opacity-50 absolute rounded-lg z-10"></div>
                <img src="https://images.igdb.com/igdb/image/upload/t_screenshot_big/nf6v8ax7nhzvr98qpoop.jpg"
                    alt="ss"
                    class="w-full rounded-lg"
                >
            </div>
        </div>
        <div class="w-1/5 flex flex-col justify-between">
            <div class="flex flex-row items-center h-full space-x-3 py-4 px-5 hover:bg-neutral-800 rounded-lg">
                <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co2tgh.png"
                    alt=""
                    class="w-12 rounded-md"
                >
                <div class="leading-5">
                    Title of the game or whatever
                </div>
            </div>
            <div class="flex flex-row items-center h-full space-x-3 py-4 px-5 hover:bg-neutral-800 rounded-lg">
                <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co2tgh.png"
                    alt=""
                    class="w-12 rounded-md"
                >
                <div class="leading-5">
                    Title of the game or whatever
                </div>
            </div>
            <div class="flex flex-row items-center h-full space-x-3 py-4 px-5 hover:bg-neutral-800 rounded-lg">
                <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co2tgh.png"
                    alt=""
                    class="w-12 rounded-md"
                >
                <div class="leading-5">
                    Title of the game or whatever
                </div>
            </div>
            <div class="flex flex-row items-center h-full space-x-3 py-4 px-5 hover:bg-neutral-800 rounded-lg">
                <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co2tgh.png"
                    alt=""
                    class="w-12 rounded-md"
                >
                <div class="leading-5">
                    Title of the game or whatever
                </div>
            </div>
            <div class="flex flex-row items-center h-full space-x-3 py-4 px-5 hover:bg-neutral-800 rounded-lg">
                <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co2tgh.png"
                    alt=""
                    class="w-12 rounded-md"
                >
                <div class="leading-5">
                    Title of the game or whatever
                </div>
            </div>
            <div class="flex flex-row items-center h-full space-x-3 py-4 px-5 hover:bg-neutral-800 rounded-lg">
                <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co2tgh.png"
                    alt=""
                    class="w-12 rounded-md"
                >
                <div class="leading-5">
                    Title of the game or whatever
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faArrowUpRightFromSquare } from '@fortawesome/free-solid-svg-icons'

library.add(faArrowUpRightFromSquare)

export default {
    components: {
        Link,
        FontAwesomeIcon
    }
}

</script>