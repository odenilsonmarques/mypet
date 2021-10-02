@extends ('layouts.template')
@section('title','home')

@section('content')
    <div class="row">
        <div class="col-sm-4 text-center">
            <h2><a href="{{route('realizarCadastroPet')}}">Cadastrar Pet</a></h2>
            
        </div>
        <div class="col-sm-4 text-center">
            <h2><a href="{{route('realizarCadastroVaccine')}}">Cadastrar vacina</a></h2>
        </div>
        <div class="col-sm-4 text-center">
            <h2>A implementar</h2>
        </div>
    </div>
@endsection