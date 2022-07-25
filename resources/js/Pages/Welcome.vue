<template>
    <div>
        <SearchBar></SearchBar>

        <SliderCarousel></SliderCarousel>

        <GameCardList title="Popular Games"></GameCardList>
        <GameCardList title="Most Recent Games"></GameCardList>
        <GameCardList title="Online Games"></GameCardList>
    </div>
</template>

<script>
import MainApp from '@/Layouts/MainApp.vue'
import GameCardList from '@/Components/GameCardList.vue'
import SliderCarousel from '@/Components/SliderCarousel.vue'
import SearchBar from '@/Components/SearchBar.vue'

export default {
    layout: MainApp,
    props: {
        //data: Object
    },
    components: {
        GameCardList,
        SliderCarousel,
        SearchBar
    }
}
</script>