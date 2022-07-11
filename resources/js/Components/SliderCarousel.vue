<template>
    <div class="flex flex-col lg:flex-row space-x-0 md:space-x-6 mb-12">
        <div class="w-full lg:w-4/5">
            <div class="relative z-auto">
                <div class="z-20 absolute bottom-10 px-5 lg:bottom-28 lg:left-20 max-w-lg">
                    <div class="flex flex-col space-y-6">
                        <h1 class="text-2xl lg:text-4xl text-white">The Title of the Game the title of the game </h1>
                        <p class="text-sm md:text-base">Guide your team of explorers into the treacherous depths of an ancient machine.</p>
                        <div class="flex">
                            <Link href="#"
                                class="py-2 px-3 text-sm mb-5 bg-gray-300 hover:bg-gray-400 text-gray-900 md:py-3 md:px-6 lg:mb-0 lg:text-base rounded-md"
                            >
                                Go to Website <FontAwesomeIcon icon="fa-solid fa-arrow-up-right-from-square" class="ml-2" />
                            </Link>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full bg-gradient-to-t from-black opacity-1 absolute rounded-lg z-10"></div>
                <img src="https://images.igdb.com/igdb/image/upload/t_screenshot_big/nf6v8ax7nhzvr98qpoop.jpg"
                    alt="ss"
                    class="hidden md:block w-full rounded-lg"
                >
                <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co2ei8.jpg"
                    alt="ss"
                    class="md:hidden w-full rounded-lg"
                >
            </div>
        </div>
        <div class="hidden text-neutral-900 w-full lg:w-1/5 lg:flex flex-col justify-between dark:text-white">
            <SliderCarouselSideItem></SliderCarouselSideItem>
            <SliderCarouselSideItem></SliderCarouselSideItem>
            <SliderCarouselSideItem></SliderCarouselSideItem>
            <SliderCarouselSideItem></SliderCarouselSideItem>
            <SliderCarouselSideItem></SliderCarouselSideItem>
            <SliderCarouselSideItem></SliderCarouselSideItem>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faArrowUpRightFromSquare } from '@fortawesome/free-solid-svg-icons'
import SliderCarouselSideItem from '@/Components/SliderCarouselSideItem.vue'

library.add(faArrowUpRightFromSquare)

export default {
    components: {
        Link,
        FontAwesomeIcon,
        SliderCarouselSideItem
    }
}

</script>