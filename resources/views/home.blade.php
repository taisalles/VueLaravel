
@extends('layouts.app')

@section('content')
      
            <div class="container">
                <div class="card-content">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <div id="app">
                <vue-livros-list livros="{{$livro}}"> </vue-livros-list>
            </div>   
             <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
                    
                </div>
            </div>

            
       
@endsection

