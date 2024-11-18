<template>
    <!--
    <div>
          <h1>Busque evento</h1>

          <form action=" ">
              <input type="text" id="pesquisar" placeholder="Pesquisar">

          </form>
      </div>

      -->
      <div>
          <form action=" " method="POST">


              <v-text-field label="Nome Completo:" v-model="docente.nome_completo"></v-text-field>
              <br>

              <v-text-field label=" Nome do Pai:" v-model="docente.nome_do_pai"></v-text-field>
              <br>

              <v-text-field label=" Nome da Mãe:" v-model="docente.nome_da_mae"></v-text-field>
              <br>

              <v-text-field type = "date" label="Data de Nascimento:" v-model="docente.data_de_nascimento"></v-text-field>
              <br>

              <v-text-field label=" Num documento:" v-model="docente.num_doc_identificacao"></v-text-field>
              <br>

              <v-text-field type="date" label=" Data de Exp do Documento:" v-model="docente.data_de_expiracao_documento"></v-text-field>
              <br>

              <v-text-field label=" Telefone 1:" v-model="docente.telefone1"></v-text-field>
              <br>
              <v-text-field label=" Telefone 2:" v-model="docente.telefone2"></v-text-field>
              <br>
              <v-text-field type="email" label=" Email:" v-model="docente.email"></v-text-field>
              <br>

              <v-text-field label=" Endereço :" v-model="docente.endereco"></v-text-field>
              <br>
             <!--    <select>
                Itera sobre o array dados_nacionalidade e cria as opções
                  <option v-for="nacionalidade in dados_nacionalidade" :key="nacionalidade" :value="nacionalidade">
                      {{ nacionalidade.descricao_nacionalidade }}
                  </option>
              </select>-->

              <v-autocomplete v-model="docente.nacionalidade" prepend-icon="mdi-account-multiple" :items="dados_nacionalidade"
                    item-value="id" item-title="descricao_nacionalidade"
                    label="Nacionalidade">
            </v-autocomplete>


            <v-autocomplete v-model="docente.tipo_documentacao" prepend-icon="mdi-account-multiple" :items="tipo_documentos"
                    item-value="id" item-title="descricao"
                    label="Tipo de Documentação">
            </v-autocomplete>

            <v-autocomplete  v-model="docente.genero " prepend-icon="mdi-account-multiple" :items="genero"
                    item-value="id" item-title="desecricao_genero"
                    label="Genero">
            </v-autocomplete>

            <v-autocomplete  v-model="docente.estado_civil " prepend-icon="mdi-account-multiple" :items="estado_civil"
                    item-value="id" item-title="descricao_estado_civil"
                    label=" Estado Civil">
            </v-autocomplete>

            <a @click="save"  style="display: inline-block; padding: 10px 20px; background-color: #3498db; color: white; text-decoration: none; border-radius: 5px; font-size: 16px;">
            Enviar
            </a>


          </form>
      </div>

  </template>
  <!-- <script setup>
    const props = defineProps({
        dados_nacionalidade: Array,
        tipo_documentos: Array,
        genero: Array,
        estado_civil: Array,

    })
  </script> -->

<script>

    export default {
        props: [ 'dados_nacionalidade', 'tipo_documentos', 'genero', 'estado_civil'],

        data: () => ({
            docente:{

            }

        }),

        computed: {

        },

        watch: {

        },

        created() {

        },

        methods: {

            save() {

                alert(JSON.stringify(this.docente));

                 this.$inertia.post("docente", this.docente, {});


            },


            submit() {
                this.form.post(route("tipo-actividade.store"), {
                    preverseScroll: true,
                    onSuccess: () => {
                    this.isLoading = false;
                    this.dialogNovo = false;
                    this.form.reset();
                    },
                });
            },
        },
    };
</script>
