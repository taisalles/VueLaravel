<template>
    <div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Título</label>
            <div class="col-10">
             <input class="form-control" type="text" value="" placeholder="Título" name="titulo"> 
            </div>
        </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Autor</label>
            <div class="col-10">
             <input class="form-control" type="text" value="" placeholder="Autor"  name="autor"> 
            </div>
        </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Resumo</label>
            <div class="col-10">
             <input class="form-control" type="text" value="" placeholder="Resumo" name="resumo"> 
            </div>
        </div>


    </div>
</template>

<script>
    export default {
    	name: 'VueLivrosCreate',
   }
    	
</script>
