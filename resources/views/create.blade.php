
@extends('layouts.app')

@section('content')

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

        <div class="container">
            
            <div id="app">
                <form action="/livro" method="post">
                    {{ csrf_field() }}
                    <vue-livros-create></vue-livros-create>
                    <button type="submit" class="btn btn-default"> 
                        <i class="small material-icons right"> check </i>
                    </button> </td>
                </form>
             </div>

            <div class="right-align">
                <a href="/livro"> retornar </a>
            </div>

             
         <script type="text/javascript" src="js/materialize.min.js"></script>        
           
        </div>
      
       
@endsection 
