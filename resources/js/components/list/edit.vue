<template>
    <div v-bind="livro">
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Título</label>
            <div class="col-10">
             <input class="form-control" type="text" value="" v-model="livro.titulo" name="titulo"> 
            </div>
        </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Autor</label>
            <div class="col-10">
             <input class="form-control" type="text" value="" placeholder="Autor" v-model="livro.autor" name="autor"> 
            </div>
        </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Resumo</label>
            <div class="col-10">
             <input class="form-control" type="text" value="" placeholder="Resumo" v-model="livro.resumo" name="resumo"> 
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
