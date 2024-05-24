@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Paginas</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Crear pagina</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.custom-page-builder.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Nombre de la Pagina</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Contenido de la pagina</label>
                    <textarea name="content" class="form-control summernote"></textarea>
                </div>

                <div class="form-group">
                    <label>Estado</label>
                    <select name="status" class="form-control" id="">
                        <option value="1">Activa</option>
                        <option value="0">inactiva</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>
</section>
@endsection
