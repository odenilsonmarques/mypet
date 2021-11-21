@extends('layouts.template')
@section('title','pets')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @if(session('mensagemDeCadastro'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        <strong>{{session('mensagemDeCadastro')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('mensagemDeEdicao'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        <strong>{{session('mensagemDeEdicao')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <!--está mensagem só será exibida caso tente deletar um pet atrelado há uma vacina, caso contrario apenas irá exibir a mensagem javascript-->
                @if(session('messageError'))
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <strong>{{session('messageError')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <div class="col-sm-12 botoes">
                <button type="button" class="btn btn-danger">
                    <a href="{{route('pageHome')}}"><strong>Cancelar</strong></a>
                </button>
                <button type="button" class="btn btn-primary">
                    <a href="{{route('cadVaccineAdd')}}"><strong>Cadastrar Vacina</strong></a>
                </button>
                <button type="button" class="btn btn-success">
                    <a href="{{route('cadPetAdd')}}"><strong>Cadastrar Pet</strong></a>
                </button>
            </div><br><br>
            <div class="col-sm-12 text-center">
                <h2>Pets</h2><br>
            </div>

            <div class="col-sm-12">
                <div class="table-responsive">  
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>PET</th>
                                <th>NOME</th>
                                <th>RAÇA</th>
                                <th>SEXO</th>
                                <th>PESO</th>
                                <th>IDADE</th>
                                <th>DESCRIÇÃO</th>
                                <th>AÇÃO</th>
                            </tr>
                        </thead>
                        @foreach ($allPets as $allPet)
                            <tr>
                                <td>{{$allPet->type_pet}}</td>
                                <td>{{$allPet->name}}</td> 
                                <td>{{$allPet->breed}}</td>
                                <td>{{$allPet->sex}}</td>
                                <td>{{$allPet->weight}}</td>
                                <td>{{$allPet->age}}</td>
                                <td>{{$allPet->description}}</td>
                                <td>
                                    <a href="{{route('editPetEdit',[$allPet->id])}}" class="btn btn-primary btn-sm">Editar</a>
                                    <a href="{{route('delPetDelete',[$allPet->id])}}" onclick="return confirm('CONFIRMAR EXCLUSÃO ?')" class="btn btn-danger btn-sm">Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection