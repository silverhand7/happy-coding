<template>
    <div class="mb-12">
        <h2 class="text-xl mb-5">
            {{ title }} <span class="ml-3"><FontAwesomeIcon icon="fa-solid fa-angle-right" /></span>
        </h2>
        <div class="columns-3 md:columns-6">
            <div class="">
                <GameCard />
            </div>
            <div class="">
                <GameCard />
            </div>
            <div class="">
                <GameCard />
            </div>
            <div class="">
                <GameCard />
            </div>
            <div class="">
                <GameCard />
            </div>
            <div class="">
                <GameCard />
            </div>
        </div>
    </div>
</template>

<script>
import GameCard from '@/Components/GameCard.vue'
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faAngleRight } from '@fortawesome/free-solid-svg-icons'
library.add(faAngleRight)

export default {
    props: {
        title: String
    },
    components: {
        GameCard,
        FontAwesomeIcon
    }
}
</script>