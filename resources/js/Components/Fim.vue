<template>
    <v-layout class="h-100" style="  overflow: hidden; background-color: #F4F3F1;">
        <div class="d-flex w-100">
            <img src="/public/folhaMarron.png" class="folha1" alt="">
            <div style=" width: 100%; position: relative;">
                <img src="/public/CirculoFlor.png" class="Circulo" alt="">
                <p class="g1">G</p>
                <p class="g2">G</p>
            </div>
            <div class="w-100 h-100 date" style="position: absolute;">
                <v-container class="container">
                    <h1 class="title" style="">
                        E por último...</h1>
                </v-container>
                <div class="w-100 d-flex flex-column align-center">

                    <p class="w-75 text-justify px-10 aviso">Registrem muitos momentos desse dia especial!
                        Estaremos ansiosos por muitas fotos!</p>
                    <div class="w-75 ">
                        <p class="w-100 text-center px-10 aviso1">"Para que todos vejam, e saibam, e considerem, e
                            juntamente entendam que a mão do Senhor fez isso”<br /></p>
                        <p class="text-center w-100">Isaías 41:20</p>
                    </div>

                    <div class="congradulations">
                        <p class="w-100 px-10">Com carinho, Família Felipe de Oliveira</p>
                    </div>


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
    .congradulations {
        font-size: 20px;
        position: absolute;
        word-wrap: none !important;
        font-weight: 900;
        bottom: 180px !important;
        text-align: end;
        right: 70px !important;
        margin-left: 0;
        width: 75% !important;
    }

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
        font-size: 30px !important;
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
        top: 10px !important; 
        width: 70% !important;
        z-index: 6;
    }

    .g1 {
        font-family: 'Questrial', sans-serif;
        font-size: 60px !important;
        position: absolute;
        top: 38px !important;
        right: 51px !important;
        z-index: 6;
    }

    .g2 {
        font-family: 'Questrial', sans-serif;
        font-size: 65px !important;
        position: absolute;
        top: 13px !important;
        right: 84px !important;
        z-index: 6;
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

    .date {
        top: 20% !important;
    }
}

.date {
    top: 10%;
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
    top: 80px;
    right: 78px;
}

.g2 {
    font-family: 'Questrial', sans-serif;
    font-size: 100px;
    position: absolute;
    top: 40px;
    right: 138px;
}

.Circulo {
    position: absolute;
    right: 5px;
    top: 30px;
    width: 25%;
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
    bottom: -3%;
    transform: rotate(-32deg);
}

.folha3 {
    width: 50%;
    height: 60%;
    position: absolute;
    right: -20%;
    bottom: -10%;
    transform: rotate(32deg);
}

.aviso {
    font-size: 30px;
    word-wrap: break-word;
    margin-left: 40px;
    width: 50%;
    font-weight: 700;
}

.aviso1 {
    font-size: 20px;
    word-wrap: break-word;
    font-weight: 500;
    width: 50%;
}

.congradulations {
    font-size: 20px;
    word-wrap: break-word;
    position: absolute;
    font-weight: 900;
    bottom: 100px;
    text-align: end;
    right: 180px;
    margin-left: 40px;
    width: 50%;
}
</style>