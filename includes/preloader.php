<style>
    .blinking-image {
        animation: blink 1s infinite;
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }
    }
    .preloader>img{
            background-color: rgba(255,255,255,.5);
            border-radius: 50%;
            width:20%;
        }
    @media only screen and (max-width: 480px) {
        .preloader>img{
            width:30%;
        }
    }
</style>
<div class="preloader ">
    <img src="assets/gd/preloader/preloader.png" alt="Loading..." class="blinking-image" />
</div>