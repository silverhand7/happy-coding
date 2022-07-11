<template>
    <div class="w-full mb-5">
        <div class="game-card-image relative">
            <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co2ei8.jpg" class="w-full rounded-md">
        </div>
        <p class="mt-3 truncate ... xl:text-base">
            Fortnite Game With multiple line values
        </p>
        <div class="mt-2 flex justify-between text-sm items-center">
            <span class="text-gray-400 truncate ... ">Category A</span>
            <span class="py-0.5 px-2 bg-green-500 text-gray-700 rounded-md">75%</span>
        </div>
    </div>
</template>


<style>
    .game-card-image:after {
        -webkit-transition: opacity 125ms ease-in-out;
        transition: opacity 125ms ease-in-out;
        content: '';
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: #fff;
        opacity: 0;
        pointer-events: none;
        z-index: 1;
        border-radius: 0.375rem;
    }

    .game-card-image:hover:after {
        opacity: 0.1;
    }
</style>