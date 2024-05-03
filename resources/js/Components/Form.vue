<template>
    <v-layout style="height: 100vh;  overflow: hidden; background-color: #F4F3F1;">
        <span :class="toast" style="">
            <v-alert closable :title="title" class="w-100 h-100 text-white bg-white" :type="type">
                <v-alert-text class="text-white">{{ mensagem }}</v-alert-text>
            </v-alert>
        </span>
        <div class="d-flex w-100">
            <img src="/public/folhaMarron.png" class="folha1" alt="">
            <div style=" width: 100%; position: relative;">
                <img src="/public/CirculoFlor.png" class="Circulo" alt="">
                <p class="g1">G</p>
                <p class="g2">G</p>
            </div>
            <div class="w-100 h-100" style="position: absolute; top: 10%;">
                <v-container class="container">
                    <h1 class="title" style="">
                        MARCAR PRESENÇA</h1>
                </v-container>
                <div class="w-100">
                    <v-container>
                        <v-main class="overflow-y-auto px-5" style="height: 70vh;">
                            <div v-if="presenca === false && Npresenca === false" class="text-center">
                                <h1>Irá marcar presença na cerimônia de casamento?</h1>
                                <v-btn class="mx-5 my-5" color="#ba9d77" @click="confetes()" size="large">SIM</v-btn>
                                <v-btn class="mx-5 my-5" color="#7d6b39" @click="Npresenca = true"
                                    size="large">NÃO</v-btn>
                            </div>
                            <div v-if="presenca === true">
                                <v-text-field v-model="nome" style="font-weight: 900;" label="Nome" variant="underlined"></v-text-field>
                                <v-select v-model="qtd" style="font-weight: 900;" label="Quantidade de acompanhantes"
                                    :items="['1', '2']" variant="underlined"></v-select>
                                <p>A fim de comemorar esse grande momento, gostaríamos de convidá-los para almoçar com a gente. <br/> Tê-los em nossa companhia será nosso maior presente.  </p>
                                <br/>
                                <h1>Recepção por Adesão</h1>
                                <a href="/Cardapio Final.pdf" class="d-flex align-baseline my-5 w-25" style="text-decoration: none; color: darkgoldenrod; font-size: 25px;" download><v-icon class="mx-2" size="30">mdi-silverware-fork-knife</v-icon> Download Cardápio</a>
                                <v-select v-model="restaurante" style="font-weight: 900;" label="Confirmar presença no restaurante"
                                    :items="['Sim', 'Não']" variant="underlined"></v-select>
                                <div class="my-5 text-end">
                                    <v-btn class="btn" color="#ba9d77" @click="Confirma"
                                        append-icon="mdi-send">CONFIRMAR</v-btn>
                                </div>

                            </div>
                            <div v-if="Npresenca === true">
                                <h1>Poxa que pena! <br />
                                    <t/>Sentiremos sua falta, você tem um lugar reservado em nossos corações!
                                </h1>
                            </div>
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
import axios from 'axios';
import confetti from 'canvas-confetti';
export default {
    data: () => ({
        Npresenca: false,
        presenca: false,
        nome: null,
        qtd: null,
        restaurante: 'Não',
        toast: 'notError',
        mensagem: null,
        title: null,
        type: null,
    }),
    methods: {
        confetes() {
            this.presenca = true
            let params = {
                particleCount: 500, // Quantidade de confetes
                spread: 90, // O quanto eles se espalham
                startVelocity: 70, // Velocidade inicial
                origin: { x: 0, y: 0.5 }, // Posição inicial na tela
                angle: 45 // Ângulo em que os confetes serão lançados
            };
            confetti(params);

            // Joga confetes da direita para a esquerda
            params.origin.x = 1;
            params.angle = 135;
            confetti(params);
        },
        Confirma() {
            if (this.nome !== null && this.qtd !== null) {
                let data = {
                    nome: this.nome,
                    qtd: this.qtd,
                    restaurante: this.restaurante,

                }
                axios.post('/api/confirmar-presenca', data).then(response => {
                    if (response.status === 200) {
                        this.mensagem = "Presença confirmada. Te esperamos lá!"
                        this.title = "MARCAR PRESENÇA"
                        this.type = "success"
                        this.toast = 'cardtoast';

                    }
                }).catch(error => {
                    this.title = "MARCAR PRESENÇA"
                    this.mensagem = 'Ops tivemos um erro, tente novamente!';
                    this.type = "error"
                    this.toast = 'cardtoast';
                    setTimeout(() => {
                    this.title = "MARCAR PRESENÇA"
                    this.mensagem = null;
                    this.type = null
                    this.toast = 'notError';
                }, 5000)
                })
            } else {
                this.title = "MARCAR PRESENÇA"
                this.mensagem = 'Preencha todos os dados antes de enviar!';
                this.type = "error"
                this.toast = 'cardtoast';
                setTimeout(() => {
                    this.title = "MARCAR PRESENÇA"
                    this.mensagem = null;
                    this.type = null
                    this.toast = 'notError';
                }, 5000)
            }
        }
    }
}

</script>

<style scoped>
.notError {
    display: none;
}

.cardtoast {
    position: fixed;
    z-index: 30;
    width: 350px;
    right: -800px;
    animation: toast 8s ease-in;
}

@keyframes toast {
    10% {
        opacity: 0.5;
        right: 0px;
    }

    11% {
        opacity: 1;
    }

    99% {
        opacity: 0.5;
    }

    100% {
        opacity: 0;
        right: 0;
    }
}

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
        bottom: 1% !important;
        transform: rotate(-10deg) !important;
    }

    .folha3 {
        width: 70% !important;
        height: 67% !important;
        position: absolute;
        right: -30% !important;
        bottom: 1% !important;
        transform: rotate(10deg) !important;
    }

    .title {
        font-size: 20px !important;
        text-transform: uppercase;
        padding: 0 20px;
        margin: 0px 0 0 15px !important;
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
}


.container {
    width: 75%;
}

.Calen {
    width: 550px;
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
    z-index: 2;
}

.folha3 {
    width: 50%;
    height: 60%;
    position: absolute;
    right: -20%;
    bottom: -10%;
    transform: rotate(32deg);
    z-index: 1;
}

.btn {
    position: relative;
    z-index: 6;
}

.aviso {
    font-size: 30px;
    word-wrap: break-word;
    margin-left: 40px;
    width: 50%;
}
</style>