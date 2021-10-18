@extends('layouts.template')
@section('title','cadastro de vacina')

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
                                    <option value="antirrábica" @if (old('type_vaccine') == "antirrábica") {{'selected'}} @endif>antirrábica</option>
                                    <option value="contra a giardíase" @if (old('type_vaccine') == "contra a giardíase") {{'selected'}} @endif>contra a giardíase</option>
                                    <option value="contra a gripe canina"  @if (old('type_vaccine') == "contra a gripe canina") {{'selected'}} @endif>contra a gripe canina</option>
                                    <option value="contra a leishmaniose" @if (old('type_vaccine') == "contra a leishmaniose") {{'selected'}} @endif>contra a leishmaniose</option>
                                    <option value="múltipla ou polivalente" @if (old('type_vaccine') == "múltipla ou polivalente") {{'selected'}} @endif>múltipla ou polivalente</option>
                                    <option value="Tosse dos canis" @if (old('type_vaccine') == "Tosse dos canis") {{'selected'}} @endif>Tosse dos canis</option>
                                    <option value="V3 felina" @if (old('type_vaccine') == "V3 felina") {{'selected'}} @endif>V3 felina</option>
                                    <option value="V4 felina" @if (old('type_vaccine') == "V4 felina") {{'selected'}} @endif>V4 felina</option>
                                    <option value="V5 felina" @if (old('type_vaccine') == "V5 felina") {{'selected'}} @endif>V5 felina</option>
                                    <option value="vacina V8" @if (old('type_vaccine') == "vacina V8") {{'selected'}} @endif>vacina V8</option>
                                    <option value="vacina V10" @if (old('type_vaccine') == "vacina V10") {{'selected'}} @endif>vacina V10</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="date_vaccine" class="form-label">Data da Vacina</label><br>
                                <input type="date" class="form-control" name="date_vaccine" id="date_vaccine" value="{{old('date_vaccine')}}">
                            </div>
                            <div class="col-sm-6">
                                <label for="number_dosage" class="form-label">Número da Dose</label><br>
                                <input type="number" class="form-control" name="number_dosage" id="number_dosage" min="1" value="{{old('number_dosage')}}">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-sm-12">
                                <label class="form-label">Pet</label>
                                <!--o valor pet_id refere-se ao valor da coluna id da tabela que será recuperado e salvo na tabela vaccines-->
                                <select name="pet_id" class="form-select">
                                    <option value="">Selecione</option>
                                    @foreach($pet as $nomes)
                                        <option value="{{$nomes['id']}}">{{$nomes['name']}}</option>
                                    @endforeach
                                </select>
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