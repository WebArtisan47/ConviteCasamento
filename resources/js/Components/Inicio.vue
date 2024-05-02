<template>
    <v-layout style="height: 100vh; overflow: hidden;">
        <section class="w-100 h-100" style="background-color: #B4A475;">
            <v-container class="text-center mx-auto h-100 d-flex justify-center align-center">
                <div class="bordaRounded d-flex align-center justify-center mx-auto">
                    <p class="g1">
                        <v-icon class="mb-10 pl-3">mdi-creation</v-icon>
                        <span class="mt-10" style="background-color: #B4A475;">G</span>
                    </p>
                    <v-img class="flores ml-5"
                        src="https://video-public.canva.com/VAEWS_WL7Oo/v/a63162c344.gif"></v-img>
                    <p class="g2" style="">
                        <span class="mb-10" style="background-color: #B4A475;">G</span>
                        <v-icon class="mt-10 pl-6">mdi-creation</v-icon>
                    </p>
                </div>
            </v-container>
        </section>
    </v-layout>
</template>

<script>
export default {
    data: () => ({
    })
}
</script>

<style scoped>
.bordaRounded {
    max-width: 400px;
    max-height: 600px;
    width: 80%;
    height: 100%;
    min-width: 200px;
    min-height: 300px;
    border: 2px solid white;
    border-radius: 500px / 400px;
    /* O primeiro valor é para a curvatura horizontal e o segundo é para a curvatura vertical */
}

.flores {
    width: 75%;
    height: 75%;
}

.g1 {
    font-family: 'Aniyah Personal Use', sans-serif;
    color: white;
    font-size: 50px;
    position: relative;
    left: 0px;
    top: 50px;
    animation: G1 3s infinite ease-in-out;

}

.g2 {
    font-family: 'Aniyah Personal Use', sans-serif;
    color: white;
    font-size: 50px;
    position: relative;
    left: 0px;
    top: -40px;
    animation: G2 3s infinite ease-in-out;
}

@media only screen and (max-width: 431px) {
    .pl-3{
        padding-left: 34px !important; 
    }
    .pl-6{
        padding-left: 6 px !important; 
    }
    .g2 {
    font-family: 'Aniyah Personal Use', sans-serif;
    color: white;
    font-size: 50px;
    position: relative;
    left: -10px;
    top: -40px;
    animation: G2 3s infinite ease-in-out;
}
.ml-5{
    padding-left: 10px !important;
}
}

@keyframes G1 {
    0% {
        top: 50px;
    }

    50% {
        top: 0;
    }

    100% {
        top: 50px;
    }
}

@keyframes G2 {
    0% {
        top: -40px;
    }

    50% {
        top: 0;
    }

    100% {
        top: -40px;
    }
}
</style>