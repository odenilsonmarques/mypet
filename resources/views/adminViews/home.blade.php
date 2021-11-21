@extends ('layouts.template')
@section('title','home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center" id="imagem">
                <img src="{{('assets/img/pata.png')}}" alt="">
                <p class="textoMeuPet">Meu Pet</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 text-center">
                <a href="{{route('cadPetAdd')}}">
                    <div class="card">
                        <div class="card-body texto">
                            Cadastrar Pet
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 text-center">
                <a href="{{route('allVaccinesAll')}}">
                    <div class="card">
                        <div class="card-body texto">
                            Vacinas
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 text-center">
                <a href="{{route('allPetsAll')}}">
                    <div class="card">
                        <div class="card-body texto">
                            Pets
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-3 text-center texto">
                <a href="{{route('walletPetList')}}">
                    <div class="card ">
                        <div class="card-body texto">
                            Carteira de Vacina
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
