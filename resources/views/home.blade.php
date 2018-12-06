
@extends('layouts.app')

@section('content')
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
            <div class="container">
                <div id="app">
                 <vue-livros-list livros="{{$livro}}"> </vue-livros-list>
                </div> 


            <script type="text/javascript" src="js/materialize.min.js"></script>        
            </div>
           

            
       
@endsection 
