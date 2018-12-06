@extends('layouts.app')

@section('content')
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

            <div class="container">
                <div id="app">
                 <form action="{{action('LivroController@update',$id)}}" method="post">
                         {{ csrf_field() }}
                         <input name="_method" type="hidden" value="PATCH">
                         <vue-livros-edit book="{{$livro}}"></vue-livros-edit>
                    <button type="submit" class="btn btn-default"> 
                        <i class="small material-icons right"> check </i>
                     </button> </td>
            </form>

                </div> 


            <script type="text/javascript" src="js/materialize.min.js"></script>        
            </div>
           

            
       
@endsection 

