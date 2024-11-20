<template>
    <!-- DESKTOP -->
    <div class="container py-5" id="desktop">
        <div class="row d-flex justify-content-center align-items-center mx-auto" style="
                background-color: #ffff;
                padding-top: 70px;
                padding-bottom: 70px;
                border-radius: 10px;
            ">
            <!-- MENU -->
            <div class="col-5" style="margin-right: -40px">
                <div style="
                        background-color: #1f2058;
                        border-radius: 40px;
                        padding: 70px;
                    ">
                    <div class="text-center">
                        <img src="/public/logo-metodista.svg" />
                        <h4 class="text-white mt-4" style="font-size: 20px">
                            FORMULÁRIO DE CANDIDATURAS DE DOCENTES
                        </h4>
                    </div>

                    <div class="d-flex flex-column">
                        <a href="#" @click="changeNav('candidatura')" :class="['buttons-nav', {'navbackground': nav === 'candidatura'} ]">
                            <i class="fa fa-user-plus icon-buttons-nav me-2"></i>
                            Nova Candidatura
                        </a>
                        <a href="#" @click="changeNav('actualizar')" :class="['buttons-nav', {'navbackground': nav === 'actualizar'} ]">
                            <i class="fa fa-refresh icon-buttons-nav me-2"></i>
                            Actualizar Candidatura
                        </a>
                        <a href="#" @click="changeNav('recibo')" :class="['buttons-nav', {'navbackground': nav === 'recibo'} ]">
                            <i class="fa fa-print icon-buttons-nav me-2"></i>
                            Recibo de Candidatura
                        </a>
                    </div>
                </div>
            </div>

            <!-- NOVA CANDIDATURA -->
            <div class="col-7"  v-if="nav == 'candidatura'">
                <h1 class="text-center" style="
                        color: #323485;
                        font-size: 30px;
                        margin-bottom: -20px;
                    ">
                    Nova Candidatura
                </h1>

                <form class="form" style="padding: 0px 50px">
                    <!-- Progress Bar -->
                    <div class="progressbar">
                        <div class="progress" id="progress"></div>

                        <div class="progress-step progress-step-active" data-title="Dados Pessoais"></div>
                        <div class="progress-step" data-title="Formação Acadêmica"></div>
                        <div class="progress-step" data-title="Experiência Profissional"></div>
                        <div class="progress-step" data-title="Anexar Documentos"></div>
                    </div>

                    <br />

                    <!-- Step 1 -->
                    <div class="form-step form-step-active">
                        <div class="row">
                            <!-- Nome Completo -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="nomeCompleto">Nome Completo</label>
                                    <input type="text" id="nomeCompleto" placeholder="Introduza seu nome" />
                                </div>
                            </div>

                            <!-- Estado Civil -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="estadoCivil">Estado Civil</label>
                                    <select id="estadoCivil">
                                        <option value="" selected disabled>
                                            Escolher
                                        </option>
                                        <option value="solteiro">
                                            Solteiro(a)
                                        </option>
                                        
                                    </select>
                                </div>
                            </div>

                            <!-- Tipo de Documentação -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="tipoDoc">Tipo de Documentação</label>
                                    <select id="tipoDoc">
                                        <option value="" selected disabled>
                                            Escolher
                                        </option>
                                        <option value="bi">BI</option>
                                        <option value="passaporte">
                                            Passaporte
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <!-- Nº do BI/Passaporte -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="numeroDoc">Nº do BI/Passaporte</label>
                                    <input type="text" id="numeroDoc" placeholder="Inserir Nº do BI/Passaporte" />
                                </div>
                            </div>

                            <!-- Nome Completo (Outro) -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="campo2">Data de Nascimento</label>
                                    <input type="date" id="campo2" placeholder="Introduza seu nome" />
                                </div>
                            </div>

                            <!-- Tipo de Documentação -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="tipoDoc">Gênero</label>
                                    <select id="tipoDoc">
                                        <option value="" selected disabled>
                                            Escolher
                                        </option>
                                        <option value="bi">Masculino</option>
                                        <option value="passaporte">
                                            Femenino
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <!-- Nome Completo (Outro) -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="campo2">Data de Validade</label>
                                    <input type="date" id="campo2" placeholder="Introduza seu nome" />
                                </div>
                            </div>

                            <!-- Tipo de Documentação -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="tipoDoc">País de Nacionalidade</label>
                                    <select id="tipoDoc">
                                        <option value="" selected disabled>
                                            Escolher
                                        </option>
                                        <option value="bi">Angola</option>
                                        <option value="passaporte">
                                            Brasil
                                        </option>
                                        <option value="passaporte">
                                            Moçambique
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <!-- Nº do BI/Passaporte -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="numeroDoc">Nº de Telefone</label>
                                    <input type="text" id="numeroDoc" placeholder="(+244) 92xx.xxx.xxx" />
                                </div>
                            </div>

                            <!-- Nº do BI/Passaporte -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="numeroDoc">Telefone Alternativo</label>
                                    <input type="text" id="numeroDoc" placeholder="(+244) 92xx.xxx.xxx" />
                                </div>
                            </div>

                            <!-- Nº do BI/Passaporte -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="numeroDoc">E-mail</label>
                                    <input type="email" id="numeroDoc" placeholder="seunome@xyz.com" />
                                </div>
                            </div>

                            <!-- Nº do BI/Passaporte -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="numeroDoc">Endereço Residencial</label>
                                    <input type="email" id="numeroDoc" placeholder="Casa S/N" />
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <a href="#" class="btn btn-next" style="
                                    background-color: #1f2058;
                                    color: white;
                                    text-align: center;
                                    width: 30%;
                                ">Avançar
                                <i class="fas fa-arrow-alt-circle-right" style="margin-left: 10px"></i></a>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="form-step">
                        <!-- Content -->
                        <div v-for="(session, index) in sessions_formacao" :key="session.id" class="classes">
                            <div class="row">
                                <div class="d-flex justify-content-between" style="
                                        border-radius: 8px;
                                        border: 1px solid #dcdcdc;
                                        padding: 10px;
                                    ">
                                    <!-- Botão no canto esquerdo -->
                                    <a class="btn btn-primary" style="
                                            background-color: #c2c2c2 !important;
                                            border: none !important;
                                        " data-bs-toggle="collapse" :href="'#collapseExampleu' + index" role="button"
                                        aria-expanded="true" aria-controls="collapseExample">
                                        <i class="fa fa-navicon"></i>
                                    </a>

                                    <!-- Botão acrescentar -->
                                    <a v-if="index == 0" @click="acrescentar(index)" class="btn btn-primary" style="
                                            background-color: #1f2058 !important;
                                            border: none !important;
                                        ">
                                        <i class="fas fa-plus"></i>
                                    </a>

                                    <!-- Botão remover -->
                                    <a v-if="index != 0" @click="remover()" class="btn btn-primary" style="
                                            background-color: #B00306 !important;
                                            border: none !important;
                                        ">
                                        <i class="fa fa-close"></i>
                                    </a>
                                </div>
                            </div>

                            <br />
                            <div class="collapse show" :id="'collapseExampleu' + index">
                                <div class="row">
                                    <!-- Estado Civil -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="estadoCivil">Curso</label>
                                            <select id="estadoCivil">
                                                <option value="" selected disabled>
                                                    Escolher
                                                </option>
                                                <option v-for="session in sessions" :key="session.id" value="solteiro">
                                                    {{ session }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Estado Civil -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="estadoCivil">Nível Academico</label>
                                            <select id="estadoCivil">
                                                <option value="" selected disabled>
                                                    Escolher
                                                </option>
                                                <option value="solteiro">
                                                    Mestre
                                                </option>
                                                <option value="casado">
                                                    Licenciado
                                                </option>
                                                <option value="divorciado">
                                                    Ensino Médio
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Nº do BI/Passaporte -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="numeroDoc">Instituição</label>
                                            <input type="text" id="numeroDoc" placeholder="Nhung Technologies" />
                                        </div>
                                    </div>

                                    <!-- Nome Completo (Outro) -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="campo2">Ano de Conclusão</label>
                                            <input type="date" id="campo2" placeholder="Introduza seu nome" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Btn -->
                        <div class="row d-flex justify-content-between mt-4">
                            <a href="#" class="btn btn-prev" style="
                                    background-color: #898989;
                                    color: white;
                                    text-align: center;
                                    width: 30%;
                                ">Anterior</a>
                            <a href="#" class="btn btn-next" style="
                                    background-color: #1f2058;
                                    color: white;
                                    text-align: center;
                                    width: 30%;
                                ">Próximo
                                <i class="fas fa-arrow-alt-circle-right" style="margin-left: 10px"></i></a>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="form-step">
                        <!-- Content -->
                        <div v-for="(session, index) in sessions_experiencia" :key="session.id" class="classes">
                            <div class="row">
                                <div class="d-flex justify-content-between" style="
                                        border-radius: 8px;
                                        border: 1px solid #dcdcdc;
                                        padding: 10px;
                                    ">
                                    <!-- Botão no canto esquerdo -->
                                    <a class="btn btn-primary" style="
                                            background-color: #c2c2c2 !important;
                                            border: none !important;
                                        " data-bs-toggle="collapse" :href="'#collapseExampleu' + index" role="button"
                                        aria-expanded="true" aria-controls="collapseExample">
                                        <i class="fa fa-navicon"></i>
                                    </a>

                                    <!-- Botão acrescentar -->
                                    <a v-if="index == 0" @click="acrescentarExperiencia(index)" class="btn btn-primary"
                                        style="
                                            background-color: #1f2058 !important;
                                            border: none !important;
                                        ">
                                        <i class="fas fa-plus"></i>
                                    </a>

                                    <!-- Botão remover -->
                                    <a v-if="index != 0" @click="removerExperiencia()" class="btn btn-primary" style="
                                            background-color: #B00306 !important;
                                            border: none !important;
                                        ">
                                        <i class="fa fa-close"></i>
                                    </a>
                                </div>
                            </div>

                            <br />
                            <div class="collapse show" :id="'collapseExampleu' + index">
                                <div class="row">

                                    <!-- Instituição -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="instituicao">Instituição</label>
                                            <input type="text" id="instituicao" placeholder="Instituição" />
                                        </div>
                                    </div>

                                    <!-- Área -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="area">Área</label>
                                            <input type="text" id="area" placeholder="Área" />
                                        </div>
                                    </div>

                                    <!-- Função -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="funcao">Função</label>
                                            <input type="text" id="funcao" placeholder="Função" />
                                        </div>
                                    </div>

                                    <!-- Ano de Início -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="anodeinicio">Ano de Início</label>
                                            <select id="anodeinicio">
                                                <option value="" selected disabled>
                                                    Escolher
                                                </option>
                                                <option value="2018">
                                                    <p>2018</p>
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Ano de Fim -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="anodeinicio">Ano de Fim</label>
                                            <select id="anodeinicio">
                                                <option value="" selected disabled>
                                                    Escolher
                                                </option>
                                                <option value="2018">
                                                    <p>2018</p>
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Btn -->
                        <div class="row d-flex justify-content-between mt-4">
                            <a href="#" class="btn btn-prev" style="
                                    background-color: #898989;
                                    color: white;
                                    text-align: center;
                                    width: 30%;
                                ">Anterior</a>
                            <a href="#" class="btn btn-next" style="
                                    background-color: #1f2058;
                                    color: white;
                                    text-align: center;
                                    width: 30%;
                                ">Próximo
                                <i class="fas fa-arrow-alt-circle-right" style="margin-left: 10px"></i></a>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="form-step">
                        <div class="row">
                            <!-- BI/Passaporte -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="bi_passaporte">BI/Passaporte</label>
                                    <input type="file" id="bi_passaporte" />
                                </div>
                            </div>

                            <!-- Certificado INAREES -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="certificado_inaress">Certificado INAREES</label>
                                    <input type="file" id="certificado_inaress" />
                                </div>
                            </div>

                            <!-- Diplomas -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="diplomas">Diplomas</label>
                                    <input type="file" id="diplomas" />
                                </div>
                            </div>

                            <!-- Currículum -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="curriculum">Diplomas</label>
                                    <input type="file" id="curriculum" />
                                </div>
                            </div>

                            <!-- Agregação Pedagógica -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="agregacao_pedagogica">Agregação Pedagógica</label>
                                    <input type="file" id="agregacao_pedagogica" />
                                </div>
                            </div>

                        </div>
                         <!-- Btn -->
                         <div class="row d-flex justify-content-between mt-4">
                            <a href="#" class="btn btn-prev" style="
                                    background-color: #898989;
                                    color: white;
                                    text-align: center;
                                    width: 30%;
                                ">Anterior</a>
                            <a href="#" class="btn btn-next" style="
                                    background-color: #1f2058;
                                    color: white;
                                    text-align: center;
                                    width: 30%;
                                ">Finalizar
                                <i class="fas fa-arrow-alt-circle-right" style="margin-left: 10px"></i></a>
                        </div>
                    </div>

                </form>
            </div>


            <!-- RECIBO DE CANDIDATURA -->
            <div class="col-7"  v-if="nav == 'recibo'">
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

    <!-- MOBILE -->
    <div class="container py-5" id="mobile">
        <div class="row d-flex justify-content-center align-items-center mx-auto" style="
                background-color: #ffff;
                padding: 30px 15px;
                border-radius: 10px;
            ">
            <div class="col-12" style="background-color: #1f2058; border-radius: 40px">
                <div>
                    <div class="text-center" style="margin: 30px 10px 60px 10px">
                        <img style="width: 80px" @click="goHome('home')" src="/public/logo-metodista.svg" />
                        <h4 class="text-white mt-4" style="font-size: 20px">
                            FORMULÁRIO DE CANDIDATURAS DE DOCENTES
                        </h4>
                    </div>

                    <div class="d-flex flex-column text-center" style="margin: 0px 10px">
                        <a href="#" @click="goHome('nova_candidatura')" class="buttons-nav" style="margin-left: -25px">
                            <i class="fa fa-user-plus icon-buttons-nav me-2"></i>
                            Nova Candidatura
                        </a>
                        <a href="#" @click="goHome('actualizar_candidatura')" class="buttons-nav">
                            <i class="fa fa-refresh icon-buttons-nav me-2"></i>
                            Actualizar Candidatura
                        </a>
                        <a href="#" @click="goHome('recibo_candidatura')" class="buttons-nav">
                            <i class="fa fa-print icon-buttons-nav me-2"></i>
                            Recibo de Candidatura
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { reactive, onMounted, ref } from "vue";
import { useRoute, useRouter } from "vue-router";

const router = useRouter();

const nav = ref('candidatura');

const sessions_formacao = reactive([1]);
const sessions_experiencia = reactive([1]);

function goHome(route) {
    if (route == "home") {
        router.push({ path: "/" });
    } else if (route == "nova_candidatura") {
        router.push({ path: "/nova-candidatura" });
    } else if (route == "actualizar_candidatura") {
        router.push({ path: "/actualizar-candidatura" });
    } else if (route == "recibo_candidatura") {
        router.push({ path: "/recibo-candidatura" });
    }
}

function acrescentar(value) {
    let val = 1;
    const valor = val + value;

    sessions_formacao.push(valor);

}
function remover() {

    sessions_formacao.pop();

}

function changeNav(value){
    nav.value = value;
}

function acrescentarExperiencia(value) {
    let val = 1;
    const valor = val + value;

    sessions_experiencia.push(valor);

}
function removerExperiencia() {

    sessions_experiencia.pop();

}

onMounted(() => {
    
})

</script>

<style>
@media screen and (max-width: 1000px) {
    #desktop {
        display: none;
    }

    #mobile {
        display: block;
    }
}

@media screen and (min-width: 1000px) {
    #desktop {
        display: block;
    }

    #mobile {
        display: none;
    }

    .text-white {
        font-size: 15px !important;
        margin-bottom: 70px;
    }

    .buttons-nav {
        text-decoration: none;
        color: white;
        margin-bottom: 20px;
        padding: 10px;
        border-radius: 5px;
    }

    .buttons-nav:hover {
        background-color: rgba(217, 217, 217, 0.1);
        border-radius: 5px;
    }

    .icon-buttons-nav {
        color: #1f2058;
        padding: 13px;
        background-color: #c2c2c2;
        border-radius: 50%;
    }

    .navbackground{
        background-color: rgba(217, 217, 217, 0.1);
    }
}

@media screen and (max-width: 430px) {
    .text-white {
        font-size: 15px !important;
    }

    .buttons-nav {
        text-decoration: none;
        color: white;
        margin-bottom: 40px;
    }

    .buttons-nav:hover {
        background-color: rgba(217, 217, 217, 0.1);
        padding: 10px;
        border-radius: 5px;
    }

   

    .icon-buttons-nav {
        color: #1f2058;
        padding: 13px;
        background-color: #c2c2c2;
        border-radius: 50%;
    }
}

@media screen and (max-width: 999px) {
    .text-white {
        font-size: 15px !important;
    }

    .buttons-nav {
        text-decoration: none;
        color: white;
        margin-bottom: 40px;
        
    }

    .buttons-nav:hover {
        background-color: rgba(217, 217, 217, 0.1);
        padding: 10px;
        border-radius: 5px;
    }

    .icon-buttons-nav {
        color: #1f2058;
        padding: 13px;
        background-color: #c2c2c2;
        border-radius: 50%;
    }
}
</style>
