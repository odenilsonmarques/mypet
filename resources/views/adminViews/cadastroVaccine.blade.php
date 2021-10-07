@extends('layouts.template')
@section('title','cadastro de vacina')

@section('content')
    <div class="row">
        <div class="col-sm-12">
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
                                    <option value="antirrábica">antirrábica</option>
                                    <option value="contra a giardíase">contra a giardíase</option>
                                    <option value="contra a gripe canina">contra a gripe canina</option>
                                    <option value="contra a leishmaniose">contra a leishmaniose</option>
                                    <option value="múltipla ou polivalente">múltipla ou polivalente</option>
                                    <option value="Tosse dos canis">Tosse dos canis</option>
                                    <option value="V3 felina">V3 felina</option>
                                    <option value="V4 felina">V4 felina</option>
                                    <option value="V5 felina">V5 felina</option>
                                    <option value="vacina V8">vacina V8</option>
                                    <option value="vacina V10">vacina V10</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="date_vaccine" class="form-label">Data da Vacina</label><br>
                                <input type="date" class="form-control" name="date_vaccine" id="date_vaccine">
                            </div>
                            <div class="col-sm-6">
                                <label for="number_dosage" class="form-label">Número da Dose</label><br>
                                <input type="number" class="form-control" name="number_dosage" id="number_dosage" min="1">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-sm-12">
                                <label class="form-label">Pet</label>
                                <select name="pet_id" class="form-select">
                                    <option value="">Selecione</option>
                                    @foreach($pet as $nomes)
                                        <option value="{{$nomes['pet_id']}}">{{$nomes['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-danger mb-3"><a href="home.php">Cancelar </a></button>
                        <button type="submit" class="btn btn-success mb-3">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection