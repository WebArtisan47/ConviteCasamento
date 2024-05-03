<template>
    <v-layout  style="height: 100vh; background-color: #f4f3f1;">
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
                        NOSSO DIA</h1>
                    <img src="/public/Calendario.png" class="Calen" style="" alt="">
                </v-container>
                <div class="w-100">
                    <v-container>
                        <p class="text-justify px-10 aviso">Vocês devem chegar 15
                            minutos antes
                            da cerimônia, ou seja, às 13H45</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.81802896099!2d-51.075951925276634!3d0.021897399977899024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8d61e1bd9f5eff91%3A0x41ffaf14e07c26f5!2sCart%C3%B3rio%20Cristiane%20Passos%20-%202%C2%BA%20Of%C3%ADcio%20de%20Notas%20e%20Anexos%20de%20Macap%C3%A1!5e0!3m2!1spt-BR!2sbr!4v1714748342878!5m2!1spt-BR!2sbr" class="w-75" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    .date{
        top: 20% !important;
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
        font-size: 20px !important;
        margin:10px 0 0 24px !important;
        font-weight: 900;

    }

    .Calen {
        width: 300px !important;
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
        font-size: 19px !important;
        word-wrap: break-word !important;
        margin-left: 0px !important;
        width: 75% !important;
    }

    .px-10{
        padding-left: 4px !important;
        padding-right: 4px !important;
    }
}
.date{
    top: 5%;
}
.container {
    width: 75%;
}

.Calen {
    width: 350px;
}

.title {
    font-size: 40px;
    margin-left: 20px;
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
    font-size: 25px;
    word-wrap: break-word;
    margin-left: 0px;
    width: 50%;
}
</style>