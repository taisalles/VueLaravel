<template>
     <div>
        <div class="row">
          <div class="col-10">
           <i class="material-icons prefix">import_contacts</i>
           <input id="icon_prefix" type="text" class="validate" value="" placeholder="título" name="titulo">
           <label for="icon_prefix">Título</label>
          </div>

          <div class="col-10">
            <i class="material-icons prefix">person_add</i>
            <input id="icon_prefix" type="text" class="validate" value="" placeholder="autor" name="autor">
           <label for="icon_prefix">Autor</label>
          </div>

         <div class="col-10">
           <i class="material-icons prefix">subject</i>
           <input id="icon_prefix" type="text" class="validate" value="" placeholder="resumo" name="resumo">
           <label for="icon_prefix"> Resumo</label>
         </div>

      </div>
   </div>
      
</template>

<script>
    export default {
    	name: 'VueLivrosCreate',
   }
    	
</script>
