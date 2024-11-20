<template>
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center mx-auto" style="
                background-color: #ffff;
                padding-top: 70px;
                padding-bottom: 70px;
                border-radius: 10px;
            ">
            <div class="text-center mb-4">
                <img @click="goHome('home')" src="/public/logo-metodista.svg" />
            </div>
            <!-- RECIBO DE CANDIDATURA -->
            <div class="col-12">
                <h1 class="text-center" style="
                        color: #323485;
                        font-size: 30px;
                    ">
                    Recibo de Candidatura
                </h1>

                <!-- Nome Completo -->
                <div class="custom-input-group" style="margin: 80px 50px; text-align: center;">
                    <label for="n_candidatura">Nº da Candidatura</label>
                    <input type="text" style="width: 100%; margin-bottom: 50px;" id="n_candidatura" placeholder="Nº da Candidatura" />
                    <a href="#" style="padding: 10px 80px;background-color: #1f2058; color: white; border-radius: 10px; text-decoration: none;">
                        Imprimir 
                        <i style="margin-left: 20px;" class="fa fa-print"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</template>

<script setup>
import { useRouter } from 'vue-router';

const router = useRouter();

function goHome(route) {
    if (route == "home") {
        router.push({ path: "/" });
    }
}
</script>