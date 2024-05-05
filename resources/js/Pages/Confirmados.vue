<template>
    <v-layout class="h-screen"
        style="overflow-x: none; max-height: 100dvh; max-width: 100dvw; background-color: #F4F3F1;">
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
                        Lista de convidados</h1>
                </v-container>
                <div class="w-100 d-flex flex-column align-center">
                    <p>Total de convidados: {{ convidados }}</p>
                    <v-table class="mx-3 my-2" fixed-header height="400" theme="dark">
                        <thead>
                            <tr>
                                <th>
                                    Convidados
                                </th>
                                <th>
                                    Acompanhantes
                                </th>
                                <th>
                                    Participar da comemoração
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(convidado, index) in $page.props.confirmados" :key="index">
                                <td>
                                    {{ convidado.nome }}
                                </td>
                                <td class="text-center">
                                    {{ convidado.quantidade }}
                                </td>
                                <td class="text-center">
                                    {{ convidado.restaurante }}
                                </td>
                            </tr>
                        </tbody>
                    </v-table>


                </div>


            </div>
        </div>
    </v-layout>
</template>

<script>

export default {
    data: () => ({
        convidados: null,
    }),
    mounted() {
        let qtd = 0;
        this.$page.props.confirmados.forEach(element => {
            qtd += parseFloat(element.quantidade); // Correção aqui
            console.log(qtd);
        });

        this.convidados = this.$page.props.confirmados.length + qtd
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