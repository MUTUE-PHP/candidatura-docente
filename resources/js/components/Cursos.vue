<template>
    <div class="classes">
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
                                        " data-bs-toggle="collapse" href="#collapseExample" role="button"
                    aria-expanded="true" aria-controls="collapseExample">
                    <i class="fa fa-navicon"></i>
                </a>

                <!-- Botão no canto direito -->
                <a class="btn btn-primary" style="
                                            background-color: #1f2058 !important;
                                            border: none !important;
                                        ">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>

        <br />
        <div class="collapse show" id="collapseExample">
            <div class="row">
                <!-- Estado Civil -->
                <div class="col-md-6">
                    <div class="custom-input-group">
                        <label for="estadoCivil">Curso</label>
                        <select id="estadoCivil">
                            <option value="" selected disabled>
                                Escolher
                            </option>
                            <option value="solteiro">
                                Química
                            </option>
                            <option value="casado">
                                Português
                            </option>
                            <option value="divorciado">
                                Desenho
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

</template>

<script setup>
</script>

