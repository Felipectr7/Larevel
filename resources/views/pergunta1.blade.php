@extends('layout')

@section('content')

<div class="card border">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
                <p class="texto">
                    <h4><strong>Pergunta 1:</strong></h4>
                </p>
            </div>
        </div>
        <form action="{{ route('dadosPagina1') }}" method="POST">
            @csrf
            <div class="form-group py-4">
                <label for="pergunta"><h3><strong>Qual é a música mais famosa da dupla Maiara e Maraisa?</strong></h3></label>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="perguntaA" value="A">
                    <label class="form-check-label" for="perguntaA">
                        <h5>10%</h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="perguntaB" value="B">
                    <label class="form-check-label" for="perguntaB">
                        <h5>Medo Bobo</h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="perguntaC" value="C">
                    <label class="form-check-label" for="perguntaC">
                        <h5>A Culpa é Nossa</h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="perguntaD" value="D">
                    <label class="form-check-label" for="perguntaD">
                        <h5>Felizes Para Sempre</h5>
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Próxima</button>
            <button onclick="window.location.href='/'" type="button" class="btn btn-danger btn-sm">Desistir</button>
        </form>
    </div>
</div>

@endsection
