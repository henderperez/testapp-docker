@extends ('layout')

@section('titulo', 'Listado de items')

@section('contenido')

    <div class="row mt-3">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Card Bootstrap
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Registro 1</li>
                        <li class="list-group-item">Registro 2</li>
                        <li class="list-group-item">Registro 3</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Example button Bootstrap</button>
                </div>
            </div>
        </div>
    </div>

    

@endsection