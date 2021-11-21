@extends('layouts.template')
@section('title','pets')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @if(session('messageCad'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        <strong>{{session('messageCad')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session('messageEdit'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        <strong>{{session('messageEdit')}}</strong>
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
                <h2>Vacinas</h2><br>
            </div>
            <div class="col-sm-12">
                <div class="table-responsive">  
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>VACINA</th>
                                <th>DATA</th>
                                <th>DOSE</th>
                                <th>AÇÃO</th>
                            </tr>
                        </thead>
                        @foreach ($allVaccines as $allVaccine)
                            <tr>
                                <td>{{$allVaccine->type_vaccine}}</td>
                                <td>{{\Carbon\Carbon::parse($allVaccine->date_vaccine)->format('d/m/Y')}}</td> 
                                <td>{{$allVaccine->number_dosage}}</td>
                                <td>
                                    <a href="{{route('editVaccineEdit',[$allVaccine->id])}}" class="btn btn-primary btn-sm">Editar</a>
                                    <a href="{{route('delVaccineDelete',[$allVaccine->id])}}" onclick="return confirm('CONFIRMAR EXCLUSÃO ?')" class="btn btn-danger btn-sm" >Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>    
        </div>
    </div>
@endsection