@extends ('layouts.template')
@section('title','home')

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-sm-12 text-center" id="imagem">
                <img src="{{('assets/img/pet1.png')}}" alt="">
                <h3 class="textoMeuPet">Meu Pet</h3>
            </div>
        </div>
    </div><br/>
    <div class="row">
        <div class="col-sm-4 text-center">
            <div class="card bg-secondary">
                <div class="card-body" id="texto">
                    <a href="{{route('realizarCadastroPet')}}">Cadastrar Pet</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center">
            <div class="card bg-secondary">
                <div class="card-body" id="texto">
                    <a href="{{route('realizarCadastroVaccine')}}">Cadastrar Vacina</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 text-center">
            <div class="card bg-secondary">
                <div class="card-body" id="texto">
                    <a href="#">Pet</a>
                </div>
            </div>
        </div>

    </div>
@endsection
