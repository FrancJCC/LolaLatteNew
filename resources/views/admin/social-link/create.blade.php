@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Redes Sociales</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Crear link </h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.social-link.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="">Icono</label>
                    <br>
                    <button class="btn btn-secondary" role="iconpicker" name="icon" data-icon=""></button>
                </div>

                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Link</label>
                    <input type="text" name="link" class="form-control">
                </div>

                <div class="form-group">
                    <label>Estados </label>
                    <select name="status" class="form-control" id="">
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</section>
@endsection
