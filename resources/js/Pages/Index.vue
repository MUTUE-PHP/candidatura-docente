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
                        <a href="#" @click="changeNav('candidatura')"
                            :class="['buttons-nav', { 'navbackground': nav === 'candidatura' }]">
                            <i class="fa fa-user-plus icon-buttons-nav me-2"></i>
                            Nova Candidatura
                        </a>
                        <a href="#" @click="changeNav('actualizar')"
                            :class="['buttons-nav', { 'navbackground': nav === 'actualizar' }]">
                            <i class="fa fa-refresh icon-buttons-nav me-2"></i>
                            Actualizar Candidatura
                        </a>
                        <a href="#" @click="changeNav('recibo')"
                            :class="['buttons-nav', { 'navbackground': nav === 'recibo' }]">
                            <i class="fa fa-print icon-buttons-nav me-2"></i>
                            Recibo de Candidatura
                        </a>
                    </div>
                </div>
            </div>

            <!-- NOVA CANDIDATURA -->
            <div class="col-7" v-if="nav == 'candidatura'">
                <h1 class="text-center" style="
                        color: #323485;
                        font-size: 30px;
                        margin-bottom: -20px;
                    ">
                    Nova Candidatura
                </h1>

                <form class="form" style="padding: 0px 50px" @submit.prevent="submitForm">
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
                                    <label for="nome_completo">Nome Completo</label>
                                    <input type="text" id="nome_completo" v-model="form_data_1.nome_completo"
                                        placeholder="Introduza seu nome" />
                                </div>
                            </div>

                            <!-- Estado Civil -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="fk_estado_civil">Estado Civil</label>
                                    <select v-model="form_data_1.fk_estado_civil">
                                        <option value="" selected disabled>
                                            Escolher
                                        </option>
                                        <option v-for="estado_civil in data.estado_civil" :key="estado_civil.id"
                                            :value="estado_civil.id">
                                            {{ estado_civil.descricao_estado_civil }}
                                        </option>

                                    </select>
                                </div>
                            </div>

                            <!-- Tipo de Documentação -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="fk_tipo_documento_identificacao">Tipo de Documentação</label>
                                    <select v-model="form_data_1.fk_tipo_documento_identificacao">
                                        <option value="" selected disabled>
                                            Escolher
                                        </option>
                                        <option v-for="tipo_documento in data.tipo_documentos" :key="tipo_documento.id"
                                            :value="tipo_documento.id">
                                            {{ tipo_documento.descricao_documento }}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <!-- Nº do BI/Passaporte -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="num_doc_identificacao">Nº do BI/Passaporte</label>
                                    <input type="text" id="num_doc_identificacao"
                                        v-model="form_data_1.num_doc_identificacao"
                                        placeholder="Inserir Nº do BI/Passaporte" />
                                </div>
                            </div>

                            <!-- Nome Completo (Outro) -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="data_de_nascimento">Data de Nascimento</label>
                                    <input type="date" id="data_de_nascimento"
                                        v-model="form_data_1.data_de_nascimento" />
                                </div>
                            </div>

                            <!-- Tipo de Documentação -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="fk_genero">Gênero</label>
                                    <select v-model="form_data_1.fk_genero">
                                        <option value="" selected disabled>
                                            Escolher
                                        </option>
                                        <option v-for="genero in data.generos" :key="genero.id" :value="genero.id">
                                            {{ genero.desecricao_genero }}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <!-- Nome Completo (Outro) -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="data_de_expiracao_documento">Data de Validade</label>
                                    <input type="date" id="data_de_expiracao_documento"
                                        v-model="form_data_1.data_de_expiracao_documento" />
                                </div>
                            </div>

                            <!-- Tipo de Documentação -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="fk_nacionalidade ">País de Nacionalidade</label>
                                    <select v-model="form_data_1.fk_nacionalidade">
                                        <option value="" selected disabled>
                                            Escolher
                                        </option>
                                        <option v-for="nacionalidade in data.nacionalidade" :key="nacionalidade.id"
                                            :value="nacionalidade.id">
                                            {{ nacionalidade.descricao_nacionalidade }}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <!-- Nº de tel -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="telefone1">Nº de Telefone</label>
                                    <input type="text" id="telefone1" v-model="form_data_1.telefone1"
                                        placeholder="(+244) 92xx.xxx.xxx" />
                                </div>
                            </div>

                            <!-- Nº de tel alternativo -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="telefone2">Nº de Telefone</label>
                                    <input type="text" id="telefone2" v-model="form_data_1.telefone2"
                                        placeholder="(+244) 92xx.xxx.xxx" />
                                </div>
                            </div>



                            <!-- Nº do BI/Passaporte -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" id="email" v-model="form_data_1.email"
                                        placeholder="seunome@xyz.com" />
                                </div>
                            </div>

                            <!-- Nº do BI/Passaporte -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="endereco">Endereço Residencial</label>
                                    <input type="email" id="endereco" v-model="form_data_1.endereco"
                                        placeholder="Casa S/N" />
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
                        <!-- Formação Academica -->
                        <div class="classes">
                            <!-- Botões -->
                            <div class="row">
                                <div class="d-flex justify-content-between align-items-center" style="
                                    border-radius: 8px;
                                    border: 1px solid #dcdcdc;
                                    padding: 10px;
                                ">
                                    <div class="d-flex justify-content-center  align-items-center">
                                        <!-- Botão no canto esquerdo -->
                                        <a class="btn btn-primary" style="
                                        background-color: #c2c2c2 !important;
                                        border: none !important; padding: 10px 20px;
                                    " data-bs-toggle="collapse" href="#collapseExampleuda" role="button"
                                            aria-expanded="true" aria-controls="collapseExample">
                                            <i class="fa fa-navicon"></i>
                                        </a>

                                        <p class="mt-3" style="margin-left: 8px;">Formação Acadêmica</p>

                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <!-- Botão acrescentar -->
                                        <a @click="acrescentar" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"
                                            data-bs-content="Clique neste botão para adicionar outras formações." class="btn btn-primary" style="
                                        background-color: #1f2058 !important;
                                        border: none !important;
                                    ">
                                            <i class="fas fa-plus"></i>
                                        </a>

                                        <!-- Botão remover -->
                                        <a @click="remover" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"
                                            data-bs-content="Remover Formação." class="btn btn-primary" style="
                                        background-color: #B00306 !important;
                                        border: none !important;
                                        margin-left: 5px;
                                    ">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <br />

                            <!-- Content -->
                            <div class="collapse show" v-for="(session, index) in sessions_formacao" :key="session.id" id="collapseExampleuda">
                                <div class="row">
                                    <!-- Estado Civil -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="fk_curso">Curso</label>
                                            <select v-model="session.fk_curso">
                                                <option value="" selected disabled>
                                                    Escolher
                                                </option>
                                                <option v-for="curso in data.cursos" :key="curso.id" :value="curso.id">
                                                    {{ curso.descricao_curso }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Estado Civil -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="fk_grau_academico">Nível Academico</label>
                                            <select id="fk_grau_academico" v-model="session.fk_grau_academico">
                                                <option value="" selected disabled>
                                                    Escolher
                                                </option>
                                                <option v-for="nivel_academico in data.nivel_academico"
                                                    :key="nivel_academico.id" :value="nivel_academico.id">
                                                    {{ nivel_academico.descricao_nivel_academico }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Nº do BI/Passaporte -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="instituicao_formacao_academica">Instituição</label>
                                            <input type="text" id="instituicao_formacao_academica"
                                                v-model="session.instituicao_formacao_academica"
                                                placeholder="Nhung Technologies" />
                                        </div>
                                    </div>

                                    <!-- Nome Completo (Outro) -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="data_conclusao">Ano de Conclusão</label>
                                            <input type="date" id="data_conclusao" v-model="session.data_conclusao" />
                                        </div>
                                    </div>
                                </div>
                                <hr v-show="sessions_formacao.length > 1"style="width: 20px;"/>
                            </div>
                        </div>

                        <!-- Outras Formações -->
                        <div class="classes">
                            <!-- Btns  -->
                            <div class="row">
                                <div class="d-flex justify-content-between align-items-center" style="
                                    border-radius: 8px;
                                    border: 1px solid #dcdcdc;
                                    padding: 10px;
                                ">
                                    <div class="d-flex justify-content-center  align-items-center">
                                        <!-- Botão no canto esquerdo -->
                                        <a class="btn btn-primary" style="
                                        background-color: #c2c2c2 !important;
                                        border: none !important; padding: 10px 20px;
                                    " data-bs-toggle="collapse" href="#collapseExampleuId" role="button"
                                            aria-expanded="true" aria-controls="collapseExample">
                                            <i class="fa fa-navicon"></i>
                                        </a>

                                        <p class="mt-3" style="margin-left: 8px;">Outras Formações</p>

                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <!-- Botão acrescentar -->
                                        <a @click="addOutrasFormacoes" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"
                                            data-bs-content="Clique neste botão para adicionar outras formações." class="btn btn-primary" style="
                                        background-color: #1f2058 !important;
                                        border: none !important;
                                    ">
                                            <i class="fas fa-plus"></i>
                                        </a>

                                        <!-- Botão remover -->
                                        <a @click="removeOutrasFormacoes" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"
                                            data-bs-content="Remover Formação." class="btn btn-primary" style="
                                        background-color: #B00306 !important;
                                        border: none !important;
                                        margin-left: 5px;
                                    ">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <br />
                            <!-- Content -->
                            <div :class="['collapse' ,{'show':index != 0}]" v-for="(session, index) in outras_formacoes" :key="session.id" id="collapseExampleuId">
                                <div class="row" v-if="index != 0">

                                    <!-- Instituição -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="curso">Curso</label>
                                            <input type="text" id="curso" v-model="session.curso_experiencia" placeholder="Curso" />
                                        </div>
                                    </div>

                                    <!-- Área -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="instituicao">Instituição</label>
                                            <input type="text" id="instituicao" v-model="session.instituicao_experiencia" placeholder="Instituição" />
                                        </div>
                                    </div>

                                    <!-- Função -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="diciplinas">Disciplinas/Actividades</label>
                                            <input type="text" id="diciplinas" v-model="session.disciplina_experiencia" placeholder="Disciplinas/Actividades" />
                                        </div>
                                    </div>

                                    <!-- Ano de Início -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="anodeinicio">Ano de Início</label>
                                            <select id="anodeinicio" v-model="session.ano_inicio_exp">
                                                <option value="" selected disabled>
                                                    Escolher
                                                </option>
                                                <option value="2018">
                                                    2018
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Ano de Fim -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="anodeinicio">Ano de Fim</label>
                                            <select id="anodeinicio" v-model="session.ano_fim_exp">
                                                <option value="" selected disabled>
                                                    Escolher
                                                </option>
                                                <option value="2018">
                                                    2018
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

                    <!-- Step 3 -->
                    <div class="form-step">
                        <!-- Experiência Docente -->
                        <div class="classes">
                            <!-- Btns  -->
                            <div class="row">
                                <div class="d-flex justify-content-between align-items-center" style="
                                        border-radius: 8px;
                                        border: 1px solid #dcdcdc;
                                        padding: 10px;
                                    ">
                                    <div class="d-flex justify-content-center  align-items-center">
                                        <!-- Botão no canto esquerdo -->
                                        <a class="btn btn-primary" style="
                                            background-color: #c2c2c2 !important;
                                            border: none !important; padding: 10px 20px;
                                        " data-bs-toggle="collapse" href="#collapseExampleu" role="button"
                                            aria-expanded="true" aria-controls="collapseExample">
                                            <i class="fa fa-navicon"></i>
                                        </a>

                                        <p class="mt-3" style="margin-left: 8px;">Experiência Docente</p>

                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <!-- Botão acrescentar -->
                                        <a @click="addExpDocente" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"
                                            data-bs-content="Clique neste botão para adicionar outras experiências." class="btn btn-primary" style="
                                            background-color: #1f2058 !important;
                                            border: none !important;
                                        ">
                                            <i class="fas fa-plus"></i>
                                        </a>

                                        <!-- Botão remover -->
                                        <a @click="removeExpDocente" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"
                                            data-bs-content="Remover Experiência." class="btn btn-primary" style="
                                            background-color: #B00306 !important;
                                            border: none !important;
                                            margin-left: 5px;
                                        ">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <br />
                            <!-- Content -->
                            <div class="collapse show" v-for="(item, index) in experiencia_docente" :key="index" id="collapseExampleu">
                                <div class="row">

                                    <!-- Instituição -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="instituicao">Instituição</label>
                                            <input type="text" id="instituicao" v-model="item.instituicao_experiencia" placeholder="Instituição" />
                                        </div>
                                    </div>

                                    <!-- Área -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="area">Área</label>
                                            <input type="text" id="area" v-model="item.area" placeholder="Área" />
                                        </div>
                                    </div>

                                    <!-- Função -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="funcao">Função</label>
                                            <input type="text" id="funcao" v-model="item.funcao" placeholder="Função" />
                                        </div>
                                    </div>

                                    <!-- Ano de Início -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="anodeinicio">Ano de Início</label>
                                            <select id="anodeinicio" v-model="item.ano_inicio_exp">
                                                <option value="" selected disabled>
                                                    Escolher
                                                </option>
                                                <option value="2018">
                                                    2018
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Ano de Fim -->
                                    <div class="col-md-6">
                                        <div class="custom-input-group">
                                            <label for="anodeinicio">Ano de Fim</label>
                                            <select id="anodeinicio"  v-model="item.ano_fim_exp">
                                                <option value="" selected disabled>
                                                    Escolher
                                                </option>
                                                <option value="2018">
                                                    2018
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
                                    <input type="file" @change="handleBilhete" id="bi_passaporte" />
                                </div>
                            </div>

                            <!-- Certificado INAREES -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="certificado_inaress">Certificado INAREES</label>
                                    <input type="file" @change="handleCertificado" id="certificado_inaress" />
                                </div>
                            </div>

                            <!-- Diplomas -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="diplomas">Diplomas</label>
                                    <input type="file" multiple @change="handleDiplomas" id="diplomas" />
                                </div>
                            </div>

                            <!-- Currículum -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="curriculum">Currículum</label>
                                    <input type="file" @change="handleCurriculum" id="curriculum" />
                                </div>
                            </div>

                            <!-- Agregação Pedagógica -->
                            <div class="col-md-6">
                                <div class="custom-input-group">
                                    <label for="agregacao_pedagogica">Agregação Pedagógica</label>
                                    <input type="file" @change="handleAgregacao" id="agregacao_pedagogica" />
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
                            <button type="submit" class="btn" style="
                                    background-color: #1f2058;
                                    color: white;
                                    text-align: center;
                                    width: 30%;
                                ">Finalizar
                                <i class="fas fa-arrow-alt-circle-right" style="margin-left: 10px"></i></button>
                        </div>
                    </div>

                </form>
            </div>


            <!-- RECIBO DE CANDIDATURA -->
            <div class="col-7" v-if="nav == 'recibo'">
                <h1 class="text-center" style="
                        color: #323485;
                        font-size: 30px;
                    ">
                    Recibo de Candidatura
                </h1>

                <!-- Nome Completo -->
                <div class="custom-input-group" style="margin: 80px 50px; text-align: center;">
                    <label for="n_candidatura">Nº da Candidatura</label>
                    <input type="text" style="width: 100%; margin-bottom: 50px;" id="n_candidatura"
                        placeholder="Nº da Candidatura" />
                    <a href="#"
                        style="padding: 10px 80px;background-color: #1f2058; color: white; border-radius: 10px; text-decoration: none;">
                        Imprimir
                        <i style="margin-left: 20px;" class="fa fa-print"></i>
                    </a>
                </div>
            </div>


            <!-- ACTUALIZAR CANDIDATURA STEP 1 -->
            <div class="col-7" v-if="nav == 'actualizar'">
                <h1 class="text-center" style="
                        color: #323485;
                        font-size: 30px;
                    ">
                    Actualizar Candidatura
                </h1>

                <!-- Nome Completo -->
                <div class="custom-input-group" style="margin: 80px 50px; text-align: center;">
                    <label for="num_bilhete">BI/Passaporte</label>
                    <input type="text" v-model="num_bilhete" required style="width: 100%; margin-bottom: 50px;" id="num_bilhete"
                        placeholder="Informe o seu nº do BI/Passaporte" />
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        style="padding: 10px 80px;background-color: #1f2058; color: white; border-radius: 10px; text-decoration: none;">
                        Pesquisar
                        <i style="margin-left: 20px;" class="fa fa-search"></i>
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

    <!-- MODAL CONFIRM CODE -->
    <Modal></Modal>

</template>

<script setup>
import Swal from 'sweetalert2'
import axios from "axios";
axios.defaults.baseURL = 'http://localhost:8000/api';
import { reactive, onMounted, ref } from "vue";
import { useRoute, useRouter } from "vue-router";
import Modal from "../components/Modal.vue";

const router = useRouter();

const nav = ref('candidatura');


const num_bilhete = ref('');

function submitBilhete(){
    axios.post('check-id', {})
}

const documentos = reactive({
    'bilhete': '',
    'certificado_inaress': '',
    'diplomas': '',
    'curriculum': '',
    'agregacao_pedagogica': '',
});

// Form Data 1

const form_data_1 = reactive({
    'nome_completo': '',
    'fk_estado_civil': '',
    'fk_tipo_documento_identificacao': '',
    'num_doc_identificacao': '',
    'data_de_nascimento': '',
    'fk_genero': '',
    'data_de_expiracao_documento': '',
    'fk_nacionalidade': '',
    'telefone1': '',
    'telefone2': '',
    'email': '',
    'endereco': '',
});


// Dados para inserir nos Selects
const data = reactive({
    'nacionalidade': [],
    'tipo_documentos': [],
    'generos': [],
    'estado_civil': [],
    'cursos': [],
    'nivel_academico': [],
});

// Dynamic Fields
const sessions_formacao = reactive([
    {
        'instituicao_formacao_academica': '',
        'fk_curso': '',
        'data_conclusao': '',
        'fk_grau_academico': '',
    },
]);

// Dynamic Fields
const outras_formacoes = reactive([
    {
        'curso_experiencia': '',
        'disciplina_experiencia': '',
        'instituicao_experiencia': '',
        'ano_inicio_exp': '',
        'ano_fim_exp': '',
    },
]);

// Dynamic Fields
const experiencia_docente = reactive([
    {
        'instituicao_experiencia': '',
        'area': '',
        'funcao': '',
        'ano_inicio_exp': '',
        'ano_fim_exp': '',
    },
]);

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

function acrescentar() {
    sessions_formacao.push({
        'instituicao_formacao_academica': '',
        'fk_curso': '',
        'data_conclusao': '',
        'fk_grau_academico': '',
    });
}

function addOutrasFormacoes() {
    outras_formacoes.push(
        {
        'curso_experiencia': '',
        'disciplina_experiencia': '',
        'instituicao_experiencia': '',
        'ano_inicio_exp': '',
        'ano_fim_exp': '',
    }
    );
}

function removeOutrasFormacoes() {
    outras_formacoes.pop();
}


function addExpDocente() {
    experiencia_docente.push(
        {
        'instituicao_experiencia': '',
        'area': '',
        'funcao': '',
        'ano_inicio_exp': '',
        'ano_fim_exp': '',
    }
    );
}

function removeExpDocente() {
    experiencia_docente.pop();
}

function remover() {

    if (sessions_formacao.length != 1) {
        
        sessions_formacao.pop();

    }

}

function changeNav(value) {
    nav.value = value;
}


onMounted(() => {
    axios
        .get("/dados_pessoais")
        .then((res) => {
            data.nacionalidade = res.data.data.nacionalidade;
            data.tipo_documentos = res.data.data.tipo_documentos;
            data.generos = res.data.data.generos;
            data.estado_civil = res.data.data.estado_civil;
            data.cursos = res.data.data.cursos;
            data.nivel_academico = res.data.data.nivel_academico;

        })
        .catch((error) => {
            console.log(error);
        });
})


function handleBilhete(event) {
    documentos.bilhete = event.target.files[0];
}
function handleCertificado(event) {
    documentos.certificado_inaress = event.target.files[0];
}
function handleDiplomas(event) {
    documentos.diplomas = Array.from(event.target.files);
}
function handleCurriculum(event) {
    documentos.curriculum = event.target.files[0];
}
function handleAgregacao(event) {
    documentos.agregacao_pedagogica = event.target.files[0];
}

function submitForm() {

    let form = new FormData();

    form.append('nome_completo', form_data_1.nome_completo);
    form.append('fk_estado_civil', form_data_1.fk_estado_civil);
    form.append('fk_tipo_documento_identificacao', form_data_1.fk_tipo_documento_identificacao);
    form.append('num_doc_identificacao', form_data_1.num_doc_identificacao);
    form.append('data_de_nascimento', form_data_1.data_de_nascimento);
    form.append('fk_genero', form_data_1.fk_genero);
    form.append('data_de_expiracao_documento', form_data_1.data_de_expiracao_documento);
    form.append('fk_nacionalidade', form_data_1.fk_nacionalidade);
    form.append('telefone1', form_data_1.telefone1);
    form.append('telefone2', form_data_1.telefone2);
    form.append('email', form_data_1.email);
    form.append('endereco', form_data_1.endereco);

    // Itera sobre o array e adiciona cada campo ao FormData
    sessions_formacao.forEach((session, index) => {
        for (const [key, value] of Object.entries(session)) {
            form.append(`formacao_academica[${index}][${key}]`, value);
        }
    });

    // Itera sobre o array e adiciona cada campo ao FormData
    outras_formacoes.forEach((session, index) => {
        if (index != 0) {
            for (const [key, value] of Object.entries(session)) {
                form.append(`outras_formacoes[${index}][${key}]`, value);
            }
        }
    });

    // Itera sobre o array e adiciona cada campo ao FormData
    experiencia_docente.forEach((session, index) => {
        for (const [key, value] of Object.entries(session)) {
            form.append(`experiencia_docente[${index}][${key}]`, value);
        }
    });

    // Documentos
    if (documentos.bilhete) {
        form.append('doc_bilhete', documentos.bilhete);
    }
    if (documentos.certificado_inaress) {
        form.append('doc_certifica_inarees', documentos.certificado_inaress);

    }
    if (documentos.curriculum) {
        form.append('doc_curriculum', documentos.curriculum);

    }
    if (documentos.bilhete) {
        form.append('doc_agregacao_pedagogica', documentos.bilhete);

    }
    if (documentos.diplomas) {
        documentos.diplomas.forEach((value, index) => {
            form.append(`doc_diplomas[${index}]`, value)
        })
    }

    const conf = {
        header: {
            'Content-Type': 'multipart/form-data'
        }
    }

    axios
        .post("/docente-store", form, conf)
        .then((res) => {
            // console.log(res.data)
            Swal.fire({
                icon: "success",
                title: "Candidatura feita com sucesso!",
                showConfirmButton: false,
                timer: 1500
            });
             window.location.reload();
        })
        .catch((error) => {
            // console.log(error);
            Swal.fire({
            icon: "error",
            title: "Oops...",
            text: error.message,
            });
            // window.location.reload();

        });
}

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

    .navbackground {
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
