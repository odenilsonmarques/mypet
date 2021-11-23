@extends('layouts.template')
@section('title','pets')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="carteira text-center">
                    <img src="{{('assets/img/patarosa2.png')}}" alt="">
                    <h2>Carteira de Vacinação</h2>
                </div><br>
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
                <div class="table-responsive">  
                    <table class="table table-bordered">
                        <thead>
                            <tr class="primeiraLinha">
                                <th>PET</th>
                                <th>NOME</th>
                                <th>RAÇA</th>
                                <th>SEXO</th>
                                <th>PESO</th>
                                <th>IDADE</th>
                                <th>TIPO ÐE VACINA</th>
                                <th>DATA DA VACINA</th>
                                <th>NÚMERO DA DOSE</th>
                            </tr>
                        </thead>
                        @foreach ($pets as $pet)
                            <tr class="segundaLinha">
                                <td>{{$pet->pet->type_pet}}</td>
                                <td>{{$pet->pet->name}}</td> 
                                <td>{{$pet->pet->breed}}</td>
                                <td>{{$pet->pet->sex}}</td>
                                <td>{{$pet->pet->weight}}</td>
                                <td>{{$pet->pet->age}}</td>
                                <td>{{$pet->type_vaccine}}</td>
                                <td>{{\Carbon\Carbon::parse($pet->date_vaccine)->format('d/m/Y')}}</td>
                                <td>{{$pet->number_dosage}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection