<template>
    <Inicio :class="inicio" />
    <Data :class="data" />
    <Cv :class="convite"/> 
    <Form :class="Form"/>
    <Fim :class="Fim"/>
    <div style="position: fixed; bottom: 20px; left: 10px;" class="d-flex">
        <v-btn v-if="page > 2"  @click="PagePrevius()" class="mr-5" 
            icon="mdi-arrow-left"></v-btn>
        <v-btn v-if="page > 1 && page < 5"  @click="PageNext()"
            icon="mdi-arrow-right"></v-btn>
    </div>

</template>

<script>
import Inicio from '../Components/Inicio.vue'
import Data from '../Components/Date.vue'
import Cv from '../Components/Cv.vue'
import Form from '../Components/Form.vue'
import Fim from '../Components/Fim.vue'
export default {
    components: {
        Inicio,
        Data,
        Cv,
        Form,
        Fim
    },
    data: () => ({
        inicio: null,
        data: "data",
        convite: "data",
        Form: "data",
        Fim: "data",
        page: 1,

    }),
    mounted() {
        setTimeout(() => {
            this.inicio = "inicio"
            this.data = "dataI"
            console.log(this.inicio)
        }, 5000);
        setTimeout(() => {
            this.page = 2
        }, 10000);
    },
    methods: {
        PageNext(){
            this.page++
            if (this.page === 3 && this.data === "dataI" || this.page === 3 && this.data === "dataS") {
                this.data = "inicio"
                this.convite = "dataI"
            }
            if(this.page === 4 && this.convite === "dataI"){
                this.convite = "inicio"
                this.Form = "dataI"
            }
            if(this.page === 5 && this.Form === "dataI"){
                this.Form = "inicio"
                this.Fim = "dataI"
            }
        },
        PagePrevius(){
            this.page--
            if(this.page === 2 && this.data === "inicio"){
                this.data = "dataS"
                this.convite = "dataM"

            }
            if(this.page === 3 && this.convite === "inicio"){
                this.convite = "dataS"
                this.Form = "dataM"
            }
            if(this.page === 4 && this.Form === "inicio"){
                this.Form = "dataS"
                this.Fim = "dataM"
            }
            
        }
    }
}

</script>

<style scoped>
.data {
    display: none;
}

.dataI {
    width: 100%;
    position: fixed;
    left: calc(100dvw);
    animation: dataE 5s forwards;
}
.dataM{
    width: 100%;
    position: fixed;
    left: 0;
    animation: dataM 5s forwards;
}

.dataS{
    width: 100%;
    position: fixed;
    right: calc(100dvw);
    animation: dataV 5s forwards;
}

.inicio {
    width: 100%;
    position: fixed;
    left: 0;
    animation: inicioS 5s forwards;
}


@keyframes dataE {
    100% {
        left: 0px;
    }
}
@keyframes dataV {
    100% {
        right: 0px;
    }
}
@keyframes dataM {
    100%{
        left: calc(100dvw);
    }
}

@keyframes inicioS {
    100% {
        left: calc(-100dvw);
    }
}
</style>