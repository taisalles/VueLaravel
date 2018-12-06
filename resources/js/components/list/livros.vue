<template>
    <div>
    	<input v-model='filter' placeholder='pesquisar título...'> </input>

		<table class="table">
		<thead>
		  <tr>
		    <th>Titulo</th>
		    <th>Autor</th>
		    <th>Resumo</th>

            <th> Ação <button v-on:click="adiciona(livro)" class="btn" type="submit"> 
            <i class="medium material-icons right">add</i>
            </button> </th>

		  </tr>
		</thead>
		<tbody>
		  <tr v-for="livro in filterBooks">
		    <td>{{livro.titulo}}</td>
		    <td>{{livro.autor}}</td>
		    <td>{{livro.resumo}}</td>

             <td> <button v-on:click="edita(livro.id)" class="btn" type="submit"> 
            <i class="small material-icons right">edit</i>
            </button> 

             <button v-on:click="deleta(livro.id)" class="btn" type="submit"> 
            <i class="small material-icons right">delete</i>
            </button> </td>

		  </tr>
		</tbody>
		</table>
       

    </div>
</template>

<script>
    export default {
    	name: 'VueLivrosList',
    	props: ['livros','destroy'],
    	data() {
    		return {
    			filter:"",
    			books: JSON.parse(this.livros),
    		}
    	},
    	computed: {
    		filterBooks: function() {
    			var self = this
    			return _.orderBy(self.books.filter(function(livro){
    				var searchRegex = new RegExp(self.filter,'i');

    				return( searchRegex.test(livro.titulo))
    			}))
    		}
    	},
        methods: {
            edita: function(id) {
                window.location.href = '/livro/' + id + '/edit';
            },

            adiciona: function() {
                window.location.href = '/livro' + '/create';
            },

            deleta: function(id) {
                alert('ajustar');

            },


        }
    }
</script>
