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

            Nome Completo:
            <input type="text" placeholder="Nome Completo">
            <br>
            Nome do Pai:
            <input type="text" placeholder="Nome do Pai">
            <br>
            Nome da Mãe:
            <input type="text" placeholder="Nome da Mãe">
            <br>
            Data de Nascimento:
            <input type="date" placeholder="Data de Nascimento">
            <br>
            Num documento:
            <input type="text" placeholder="Numero do Documento">
            <br>
            Data de Exp do Documento:
            <input type="text" placeholder="Data de Expiração">
            <br>
            Telefone 1:
            <input type="text" placeholder="Telefone 1">
            <br>
            Telefone 2:
            <input type="text" placeholder="Telefone 2">
            <br>
            Email:
            <input type="email" placeholder="Emails">
            <br>
            Endereço:
            <input type="text" placeholder="Endereço">
            <br>

            Nacionalidade:
            <select>
                <!-- Itera sobre o array dados_nacionalidade e cria as opções -->
                <option v-for="nacionalidade in dados_nacionalidade" :key="nacionalidade" :value="nacionalidade">
                    {{ nacionalidade.descricao_nacionalidade }}
                </option>
            </select>

        </form>
    </div>

</template>
<script setup>
const props = defineProps({
    dados_nacionalidade: Array,
    dados_estado_civil:Array,
})
</script>
