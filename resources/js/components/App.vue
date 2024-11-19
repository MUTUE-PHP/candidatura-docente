<template>
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center mx-auto"  style="background-color: #ffff; padding: 40px; border-radius: 10px;">
            <div class="col-5">
                <div style="background-color: #1F2058;  border-radius: 40px; padding: 80px; ">
                    <div class="text-center">
                        <!-- <img src="/logo-metodista.svg"> -->
                    <h4 class="text-white mt-4" style="font-size: 20px;">FORMULÁRIO DE CANDIDATURAS DE DOCENTES</h4>
                    </div>

                    <div class="content" style="margin-top: 70px;">
                        <div class="btn-form">
                            <a href="#" id="register">
                                <i class="icon fa fa-user-plus"></i>
                                <span class="register">Nova Candidatura</span>
                            </a>
                        </div>
                        <div class="btn-form">
                            <a href="#" id="register">
                                <i class="icon fa fa-refresh"></i>
                                <span class="register">Actualizar Candidatura</span>
                            </a>
                        </div>
                        <div class="btn-form">
                            <a href="#" id="register">
                                <i class="icon fa fa-print"></i>
                                <span class="register">Recibo de Candidatura</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
             <h1 class="text-center" style="color: #323485; font-size: 30px;">Nova Candidatura</h1>

             <form action="info.php" class="form" style="padding: 0px 50px;">
                <!-- Progress Bar -->
                <div class="progressbar">

                    <div class="progress" id="progress"></div>

                    <div class="progress-step progress-step-active" data-title="Dados Pessoais"></div>
                    <div class="progress-step" data-title="Formação Acadêmica"></div>
                    <div class="progress-step" data-title="Experiência Profissional"></div>
                    <div class="progress-step" data-title="Anexar Documentos"></div>
                </div>

                <br>

                <!-- Steps -->
                <div class="form-step form-step-active">
                    <div class="row">
                        <!-- Nome Completo -->
                        <div class="col-md-6">
                            <div class="custom-input-group">
                                <label for="nomeCompleto">Nome Completo</label>
                                <input type="text" id="nomeCompleto" placeholder="Introduza seu nome">
                            </div>
                        </div>

                        <!-- Estado Civil -->
                        <div class="col-md-6">
                            <div class="custom-input-group">
                                <label for="estadoCivil">Estado Civil</label>
                                <select id="estadoCivil">
                                    <option value="" selected disabled>Escolher</option>
                                    <option value="solteiro">Solteiro(a)</option>
                                    <option value="casado">Casado(a)</option>
                                    <option value="divorciado">Divorciado(a)</option>
                                </select>
                            </div>
                        </div>

                        <!-- Tipo de Documentação -->
                        <div class="col-md-6">
                            <div class="custom-input-group">
                                <label for="tipoDoc">Tipo de Documentação</label>
                                <select id="tipoDoc">
                                    <option value="" selected disabled>Escolher</option>
                                    <option value="bi">BI</option>
                                    <option value="passaporte">Passaporte</option>
                                </select>
                            </div>
                        </div>

                        <!-- Nº do BI/Passaporte -->
                        <div class="col-md-6">
                            <div class="custom-input-group">
                                <label for="numeroDoc">Nº do BI/Passaporte</label>
                                <input type="text" id="numeroDoc" placeholder="Inserir Nº do BI/Passaporte">
                            </div>
                        </div>

                        <!-- Nome Completo (Outro) -->
                        <div class="col-md-6">
                            <div class="custom-input-group">
                                <label for="campo2">Data de Nascimento</label>
                                <input type="date" id="campo2" placeholder="Introduza seu nome">
                            </div>
                        </div>

                          <!-- Tipo de Documentação -->
                          <div class="col-md-6">
                            <div class="custom-input-group">
                                <label for="tipoDoc">Gênero</label>
                                <select id="tipoDoc">
                                    <option value="" selected disabled>Escolher</option>
                                    <option value="bi">Masculino</option>
                                    <option value="passaporte">Femenino</option>
                                </select>
                            </div>
                        </div>

                        <!-- Nome Completo (Outro) -->
                        <div class="col-md-6">
                            <div class="custom-input-group">
                                <label for="campo2">Data de Validade</label>
                                <input type="date" id="campo2" placeholder="Introduza seu nome">
                            </div>
                        </div>

                         <!-- Tipo de Documentação -->
                         <div class="col-md-6">
                            <div class="custom-input-group">
                                <label for="tipoDoc">País de Nacionalidade</label>
                                <select id="tipoDoc">
                                    <option value="" selected disabled>Escolher</option>
                                    <option value="bi">Angola</option>
                                    <option value="passaporte">Brasil</option>
                                    <option value="passaporte">Moçambique</option>
                                </select>
                            </div>
                        </div>

                        <!-- Nº do BI/Passaporte -->
                        <div class="col-md-6">
                            <div class="custom-input-group">
                                <label for="numeroDoc">Nº de Telefone</label>
                                <input type="text" id="numeroDoc" placeholder="(+244) 92xx.xxx.xxx">
                            </div>
                        </div>

                        <!-- Nº do BI/Passaporte -->
                        <div class="col-md-6">
                            <div class="custom-input-group">
                                <label for="numeroDoc">Telefone Alternativo</label>
                                <input type="text" id="numeroDoc" placeholder="(+244) 92xx.xxx.xxx">
                            </div>
                        </div>

                        <!-- Nº do BI/Passaporte -->
                        <div class="col-md-6">
                            <div class="custom-input-group">
                                <label for="numeroDoc">E-mail</label>
                                <input type="email" id="numeroDoc" placeholder="seunome@xyz.com">
                            </div>
                        </div>

                        <!-- Nº do BI/Passaporte -->
                        <div class="col-md-6">
                            <div class="custom-input-group">
                                <label for="numeroDoc">Endereço Residencial</label>
                                <input type="email" id="numeroDoc" placeholder="Casa S/N">
                            </div>
                        </div>

                    </div>
                    <div class="row d-flex justify-content-center">
                        <a href="#" class="btn btn-next" style="background-color: #1F2058; padding: 10px 40px; color: white; text-align: center; width: 30%;">Avançar <i class="fas fa-arrow-alt-circle-right	" style="margin-left: 10px;"></i></a>
                    </div>
                </div>

                <div class="form-step">
                    <div class="classes">
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <!-- Botão no canto esquerdo -->
                                <a class="btn btn-primary" style="background-color: #c2c2c2 !important; border: none !important;"
                                data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
                                    <i class="fa fa-navicon"></i>
                                </a>

                                <!-- Botão no canto direito -->
                                <a class="btn btn-primary" style="background-color: #1F2058 !important; border: none !important;">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>

                        <br>
                        <div class="collapse show" id="collapseExample">
                        <div class="card card-body">
                            <div class="row mt-4">
                                 <!-- Estado Civil -->
                                 <div class="col-md-6">
                                    <div class="custom-input-group">
                                        <label for="estadoCivil">Curso</label>
                                        <select id="estadoCivil">
                                            <option value="" selected disabled>Escolher</option>
                                            <option value="solteiro">Química</option>

                                        </select>
                                    </div>
                                </div>

                                <!-- Estado Civil -->
                                <div class="col-md-6">
                                    <div class="custom-input-group">
                                        <label for="estadoCivil">Nível Academico</label>
                                        <select id="estadoCivil">
                                            <option value="" selected disabled>Escolher</option>
                                            <option value="solteiro">Mestre</option>
                                            <option value="casado">Licenciado</option>
                                            <option value="divorciado">Ensino Médio</option>
                                        </select>
                                    </div>
                                </div>


                                 <!-- Nº do BI/Passaporte -->
                                 <div class="col-md-6">
                                    <div class="custom-input-group">
                                        <label for="numeroDoc">Instituição</label>
                                        <input type="text" id="numeroDoc" placeholder="Nhung Technologies">
                                    </div>
                                </div>

                               <!-- Nome Completo (Outro) -->
                                <div class="col-md-6">
                                    <div class="custom-input-group">
                                        <label for="campo2">Ano de Conclusão</label>
                                        <input type="date" id="campo2" placeholder="Introduza seu nome">
                                    </div>
                                </div>




                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-between mt-4">
                        <a href="#" class="btn btn-prev" style="background-color: #898989; padding: 10px 40px; color: white; text-align: center; width: 30%;">Anterior</a>
                        <a href="#" class="btn btn-next" style="background-color: #1F2058; padding: 10px 40px; color: white; text-align: center; width: 30%;">Próximo <i class="fas fa-arrow-alt-circle-right	" style="margin-left: 10px;"></i></a>
                    </div>
                </div>

            </form>

            </div>
        </div>
    </div>
</template>

<script setup>
import axios from 'axios';
import { onMounted, reactive } from 'vue';

// const data = reactive([]);

onMounted(()=>{
    axios
  .get("http://localhost:8000/api/dados_pessoais")
  .then((res) => {
          console.log(res.data)
  })
  .catch((error) => {
          console.log(error);
  });
})

</script>
<style>
</style>
