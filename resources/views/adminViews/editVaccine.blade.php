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
                    <div class="card-header"><strong>Dados da Vacina</strong></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="type_vaccine" class="form-label">Tipo da Vacina</label>
                                <select name="type_vaccine" class="form-select">
                                    <option value="">Selecione</option>
                                    @foreach($listAllVaccines as $listAllVaccine)
                                        <option value="{{$listAllVaccine}}" @if( isset($data) && $data -> type_vaccine == $listAllVaccine) selected @endif>{{$listAllVaccine}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="date_vaccine" class="form-label">Data da Vacina</label><br>
                                <input type="date" class="form-control" name="date_vaccine" id="date_vaccine" value="{{$data->date_vaccine}}">
                            </div>
                            <div class="col-sm-6">
                                <label for="number_dosage" class="form-label">Número da Dose</label><br>
                                <input type="number" class="form-control" name="number_dosage" id="number_dosage" min="1" value="{{$data->number_dosage}}">
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