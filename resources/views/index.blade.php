@extends('layout')

@section('content')

<div class="jumbotron">
   <p class="h3 text-center py-4">Quiz - O que você sabe sobre o melhor do sertanejo.</p>
   <img src ="{{asset('storage/imagem/img1.jpg')}}"/>
</div>

<div class="container py-4"> 
    <div class="row">
        <div class="col-md-6">
            <p class="h3 text-center">Clique aqui para iniciar</p>
        </div>
    </div>
</div>

@endsection
