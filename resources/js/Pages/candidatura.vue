<template>
        <h1>Testando as ações abaixo </h1>

        <a href="docente" style="display: inline-block; padding: 10px 20px; background-color: #3498db; color: white; text-decoration: none; border-radius: 5px; font-size: 16px;">
            Nova candidatura
        </a>

        <a href="#" style="display: inline-block; padding: 10px 20px; background-color: #3498db; color: white; text-decoration: none; border-radius: 5px; font-size: 16px;">
            Actualizar candidactura
        </a>

        <a href="#" style="display: inline-block; padding: 10px 20px; background-color: #3498db; color: white; text-decoration: none; border-radius: 5px; font-size: 16px;">
            Emitir Recibo de Candidactura
        </a>


        <p> </p>
        <div>
           <h2>Testando Dados da Tabela Pessoa </h2>
            <!-- {{ auxiliar }} -->

            <table>
                <tr>
                    <th>id</th>
                    <th>Nome Completo</th>
                    <th>Nome do Pai</th>
                    <th>Nome da Mãe</th>
                    <th>Data de Nascimento</th>
                    <th>Num de identificação</th>
                    <th>Data de Expiração do Doc</th>
                    <th>Data de Nascimento</th>
                    <th>telefone 1</th>
                    <th>telefone 2</th>
                    <th>Email</th>
                    <th>Endereço</th>

                </tr>
                <tr v-for="item in dados_pessoa">
                    <td>{{ item.id }}</td>
                    <td>{{ item.nome_completo }}</td>
                    <td>{{ item.nome_do_pai }}</td>
                    <td>{{ item.nome_da_mae }}</td>
                    <td>{{ item.data_de_nascimento }}</td>
                    <td>{{ item.num_doc_identificacao }}</td>
                    <td>{{ item.data_de_expiracao_documento }}</td>
                    <td>{{ item.data_de_nascimento }}</td>
                    <td>{{ item.telefone1 }}</td>
                    <td>{{ item.telefone2 }}</td>
                    <td>{{ item.email }}</td>
                    <td>{{ item.endereco }}</td>
                </tr>
            </table>
        </div>

</template>
<script setup>
const props = defineProps({
    dados_pessoa: Array,
})
</script>
