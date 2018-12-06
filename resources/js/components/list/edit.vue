<template>
    <div v-bind="livro">
       
          <div class="row">
          <div class="col-10">
           <i class="material-icons prefix">import_contacts</i>
           <input id="icon_prefix" type="text" class="validate" value="" placeholder="título" v-model="livro.titulo" name="titulo">
           <label for="icon_prefix">Título</label>
          </div>

          <div class="col-10">
            <i class="material-icons prefix">person_add</i>
            <input id="icon_prefix" type="text" class="validate" value="" placeholder="autor" v-model="livro.autor" name="autor">
           <label for="icon_prefix">Autor</label>
          </div>

         <div class="col-10">
           <i class="material-icons prefix">subject</i>
           <input id="icon_prefix" type="text" class="validate" value="" placeholder="resumo" v-model="livro.resumo" name="resumo">
           <label for="icon_prefix"> Resumo</label>
         </div>

         <input class="form-control" type="hidden" value="" v-model="livro.id" name="id">
      </div>

    </div>
</template>

<script>
    export default {
    	name: 'VueLivrosEdit',
        props: ['book'],
      data() {
        return {
          livro: JSON.parse(this.book),
        }
      }
   }
    	
</script>
