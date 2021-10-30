@extends('layouts.template')
@section('title','cadastro do pet')

@section('content')
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
                                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                            </div>
                            <div class="col-sm-6">
                                <label for="pet" class="form-label">Pet</label>
                                <select name="type_pet" id="type_pet" class="form-select">
                                    <option value="">Selecione</option>
                                    <option value="Cachorro" @if (old('type_pet') == "Cachorro") {{'selected'}} @endif>Cachorro</option>
                                    <option value="Gato"  @if (old('type_pet') == "Gato") {{'selected'}} @endif>Gato</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="breed" class="form-label">Raça</label><br>
                                <input type="text" class="form-control" name="breed" id="breed" value="{{old('breed')}}">
                            </div>
                            <div class="col-sm-3">
                                <label for="sex"  class="form-label">Sexo</label><br>
                                <select name="sex" id="sex" class="form-select">
                                    <option value="">Selecione</option>
                                    <option value="Femea" @if (old('sex') == "Femea") {{'selected'}} @endif>Fêmea</option>
                                    <option value="Macho" @if (old('sex') == "Macho") {{'selected'}} @endif>Macho</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label for="age" class="form-label">Idade</label><br>
                                <input type="age" class="form-control" name="age" id="age" value="{{old('age')}}">
                            </div>
                            <div class="col-sm-3">
                                <label for="weight" class="form-label">Peso</label><br>
                                <input type="weight" class="form-control" name="weight" id="weight" value="{{old('weight')}}">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="description" class="form-label">Descrição</label>
                                <textArea class="form-control" name="description" id="description" rows="3">{{old('description')}}</textArea>
                            </div>
                        </div><br>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-danger mb-3"><a href="{{route('pageHome')}}">Cancelar </a></button>
                        <button type="submit" class="btn btn-success mb-3">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection