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
        <div class="col-sm-3 text-center">
            <div class="card bg-secondary">
                <div class="card-body" id="texto">
                    <a href="{{route('cadPetAdd')}}">Cadastrar Pet</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3 text-center">
            <div class="card bg-secondary">
                <div class="card-body" id="texto">
                    <a href="{{route('cadVaccineAdd')}}">Cadastrar Vacina</a>
                </div>
            </div>
        </div>

        <div class="col-sm-3 text-center">
            <div class="card bg-secondary">
                <div class="card-body" id="texto">
                    <a href="{{route('allPetsAll')}}">Pets</a>
                </div>
            </div>
        </div>

        <div class="col-sm-3 text-center">
            <div class="card bg-secondary">
                <div class="card-body" id="texto">
                    <a href="{{route('walletPetList')}}">Carteira de Vacina</a>
                </div>
            </div>
        </div>

    </div>
@endsection
