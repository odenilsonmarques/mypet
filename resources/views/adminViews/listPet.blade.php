@extends('layouts.template')
@section('title','pets')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">  
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>NOME <span class="glyphicon glyphicon-user"></span></th>
                            <th>PET <span class="glyphicon glyphicon-user"></span></th>
                            <th>RAÇA <span class="glyphicon glyphicon-phone"></span></th>
                            <th>SEXO <span class="glyphicon glyphicon-envelope"></span></th>
                            <th>AÇÃO</th>
                        </tr>
                    </thead>
                    @foreach ($pets as $pet)
                        <tr>
                            <td>{{$pet->date_vaccine}}</td>
                            <!-- <td>{{$pet->type_pet}}</td>
                            <td>{{$pet->breed}}</td>
                            <td>{{$pet->sex}}</td> -->
                            <td>{{$pet->pet->name}}</td> 
                            <td>
                                <a href="#" class="btn-primary btn-sm">Editar</a>
                                <!-- <a href="#" onclick="return confirm('DESEJA CONFIRMAR A EXCLUSÃO ?')" class="btn-danger btn-sm">Excluir</a> -->
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection