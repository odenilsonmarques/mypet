@extends('layouts.template')
@section('title','cadastro do pet')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{$error}}<br/>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header"><strong>Dados do Pet</strong></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name" class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{$data->name}}">
                                </div>
                                <div class="col-sm-6">
                                    <label for="pet" class="form-label">Pet</label>
                                    <!--para carregar esse campo preenchido, verifica-se se existe um pet para edicao($data) se existir e for igual ao tipo de pet selecionado é carregado o campo preenchido com valor escolhido-->
                                    <select name="type_pet" id="type_pet" class="form-select">
                                        <option value="">Selecione</option>
                                        @foreach($myPets as $myPet)
                                            <option value="{{$myPet}}" @if( isset($data) && $data -> type_pet == $myPet) selected @endif>{{$myPet}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="breed" class="form-label">Raça</label><br>
                                    <input type="text" class="form-control" name="breed" id="breed" value="{{$data->breed}}">
                                </div>
                                <div class="col-sm-3">
                                    <label for="sex"  class="form-label">Sexo</label><br>
                                    <select name="sex" id="sex" class="form-select">
                                        <!--dessa forma quando o form é submetido esse campo não volta preenchido, tem vantagem em usar ele dessa forma, pois no form de edição isso tem algumas vantagens-->
                                        <option value="">Selecione</option>
                                        @foreach($sexPets as $sexPet)
                                            <option value="{{$sexPet}}" @if(isset($data) && $data->sex == $sexPet) selected @endif>{{$sexPet}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="age" class="form-label">Idade</label><br>
                                    <input type="age" class="form-control" name="age" id="age" value="{{$data->age}}">
                                </div>
                                <div class="col-sm-3">
                                    <label for="weight" class="form-label">Peso</label><br>
                                    <input type="weight" class="form-control" name="weight" id="weight" value="{{$data->weight}}">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="description" class="form-label">Descrição</label>
                                    <textArea class="form-control" name="description" id="description" rows="3">{{$data->description}}</textArea>
                                </div>
                            </div><br>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-danger mb-3"><a href="{{route('pageHome')}}">Cancelar </a></button>
                            <button type="submit" class="btn btn-success mb-3">Alterar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection