<template>
    <v-layout style="height: 100vh;  overflow: hidden; background-color: #F4F3F1;">
        <div class="d-flex w-100">
            <img src="/public/folhaMarron.png" class="folha1" alt="">
            <div style=" width: 100%; position: relative;">
                <img src="/public/CirculoFlor.png" class="Circulo" alt="">
                <p class="g1">G</p>
                <p class="g2">G</p>
            </div>
            <div class="w-100 h-100" style="position: absolute; top: 20%;">
                <v-container class="container">
                    <h1 class="title" style="">
                        MARCAR PRESENÇA</h1>
                </v-container>
                <div class="w-100">
                    <v-container>
                        <v-main class="overflow-y-auto" style="height: 400px;">
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                            <v-text-field label="Label" variant="underlined"></v-text-field>
                        </v-main>
                       
                    </v-container>

                    <img src="/public/folhaGMarron.png" class="folha3" alt="">
                    <img src="/public/folhaMarron.png" class="folha2" alt="">

                </div>


            </div>
        </div>
    </v-layout>
</template>

<script>

export default {
    data: () => {

    }
}

</script>

<style scoped>
@media only screen and (max-width: 431px) {
    .folha1 {
        width: 30% !important;
        height: 30% !important;
        position: relative;
        left: -35px !important;
        top: -30px !important;
    }

    .folha2 {
        width: 40% !important;
        height: 50% !important;
        position: absolute;
        right: -14% !important;
        bottom: 12% !important;
        transform: rotate(-10deg) !important;
    }

    .folha3 {
        width: 70% !important;
        height: 67% !important;
        position: absolute;
        right: -30% !important;
        bottom: 7% !important;
        transform: rotate(10deg) !important;
    }

    .title {
        font-size: 55px !important;
        text-transform: uppercase;
        margin: 10px 0 0 24px !important;
        font-weight: 900;
    }

    .Calen {
        width: 400px !important;
    }

    .container {
        margin: 0 !important;
    }

    .Circulo {
        position: absolute;
        right: 5px;
        top: 30px;
        width: 70% !important;
    }

    .g1 {
        font-family: 'Questrial', sans-serif;
        font-size: 60px !important;
        position: absolute;
        top: 65px !important;
        right: 58px !important;
    }

    .g2 {
        font-family: 'Questrial', sans-serif;
        font-size: 65px !important;
        position: absolute;
        top: 40px !important;
        right: 97px !important;
    }

    .aviso {
        font-size: 17px !important;
        word-wrap: break-word !important;
        margin-left: 0px !important;
        width: 75% !important;
    }

    .px-10 {
        padding-left: 4px !important;
        padding-right: 4px !important;
    }
}

.container {
    width: 75%;
}

.Calen {
    width: 650px;
}

.title {
    font-size: 60px;
    margin-left: 40px;
    font-family: 'Roboto', sans-serif;
    color: #2B4C46;
}

.g1 {
    font-family: 'Questrial', sans-serif;
    font-size: 100px;
    position: absolute;
    top: 120px;
    right: 128px;
}

.g2 {
    font-family: 'Questrial', sans-serif;
    font-size: 100px;
    position: absolute;
    top: 60px;
    right: 190px;
}

.Circulo {
    position: absolute;
    right: 5px;
    top: 30px;
    width: 40%;
}

.folha1 {
    width: 30%;
    height: 40%;
    position: relative;
    left: -105px;
    top: -30px;
}

.folha2 {
    width: 30%;
    height: 40%;
    position: absolute;
    right: -5%;
    bottom: 12%;
}

.folha3 {
    width: 50%;
    height: 60%;
    position: absolute;
    right: -20%;
    bottom: 7%;
    transform: rotate(32deg);
}

.aviso {
    font-size: 30px;
    word-wrap: break-word;
    margin-left: 40px;
    width: 50%;
}
</style>