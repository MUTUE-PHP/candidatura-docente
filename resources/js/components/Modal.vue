<template>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div v-show="foundCandidato" class="modal-body" style="border-bottom:none !important;">
           <div class="text-center" style="padding: 40px 40px 0px 40px;">
            <!-- <h4>Actualização da Candidatura!</h4> -->
              <input type="text" class="form-control" id="" placeholder="******" style="text-align: center; font-size: 20px">
              <p class="mt-4" style="color: #898989; font-size: 14px;">Foi enviado um código de verificação para o seu e-mail, por-favor insira o código de validação no campo acima.</p>
           </div>
           <div class="mt-4 mb-4 d-flex justify-content-between" style="padding: 0px 40px;">
             <button type="button" style="background-color: #ccc; color: white; border: none; border-radius: 8px; padding: 10px 20px;" data-bs-dismiss="modal">Cancelar</button>
             <button type="button" style="background-color: #1f2058; color: white; border: none; border-radius: 8px; padding: 10px 20px;">Confirmar</button>
           </div>
        </div>
        <div v-show="foundCandidato == false" class="modal-body" style="border-bottom:none !important;">
           <div class="text-center" style="padding: 40px 40px 0px 40px;">
              <i class="fa fa-close" style="color: white; font-size: 80px; background-color: #B00306; border-radius: 50%; padding: 10px 20px;"></i>
              <p class="mt-4" style="color: #898989;">Candidato não encontrado</p>
           </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
const foundCandidato = true;
</script>