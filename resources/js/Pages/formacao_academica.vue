<template>
    <div>

        <!-- {{ auxiliar }}

        <p> </p>

        <table>
        <tr>
            <th>id</th>
            <th>Numero</th>
            <th>Created</th>
        </tr>
        <tr v-for="item in auxiliar">
            <td>{{ item.id }}</td>
            <td>{{ item.numero }}</td>
            <td>{{ item.created_at }}</td>
        </tr>
        </table>
        -->


       Curso:
        <v-autocomplete  prepend-icon="mdi-account-multiple" :items="estado_civil"
                item-value="id" item-title="descricao_curso"
                label="Selecione o Colaborador">
        </v-autocomplete>

        <a href="docente" style="display: inline-block; padding: 10px 20px; background-color: #3498db; color: white; text-decoration: none; border-radius: 5px; font-size: 16px;">
            Voltar
        </a>
        <a href="#" style="display: inline-block; padding: 10px 20px; background-color: #3498db; color: white; text-decoration: none; border-radius: 5px; font-size: 16px;">
            Continuar
        </a>

    </div>
</template>

<script setup>
const props = defineProps({
    auxiliar: Array,
})
</script>


