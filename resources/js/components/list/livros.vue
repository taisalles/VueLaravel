<template>
    <div>
    	<input v-model='filter' placeholder='pesquisar título...'> </input>

		<table class="table">
		<thead>
		  <tr>
		    <th>Titulo</th>
		    <th>Autor</th>
		    <th>Resumo</th>
            <th> Ação </th>
		  </tr>
		</thead>
		<tbody>
		  <tr v-for="livro in filterBooks">
		    <td>{{livro.titulo}}</td>
		    <td>{{livro.autor}}</td>
		    <td>{{livro.resumo}}</td>
            <td> <button v-on:click="edita(livro.id)" class="btn btn-default"> Editar </button> </td>
            <td> <button v-on:click="deleta(livro.id)" class="btn btn-default"> Deletar </button> </td>
		  </tr>
		</tbody>
		</table>
        <td> <button v-on:click="adiciona(livro)" class="btn btn-primary"> Adicionar </button> </td>
        <td> <a class="btn-floating btn-large waves-effect waves-light red" v-on:click="adiciona(livro)"><i class="material-icons">add</i></a> </td>
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
