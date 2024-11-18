<template>
    <div>
        Testando Mix de laravel e Vue usando Inertia
        <!-- {{ auxiliar }} -->

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
    </div>
</template>
<script setup>
const props = defineProps({
    auxiliar: Array,
})
</script>
