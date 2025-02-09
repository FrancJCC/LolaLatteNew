@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Redes Sociales</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Actualizar Link</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.social-link.update', $link->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Icono</label>
                    <br>
                    <button class="btn btn-secondary" role="iconpicker" name="icon" data-icon="{{ $link->icon }}"></button>
                </div>

                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{ $link->name }}">
                </div>

                <div class="form-group">
                    <label>Link</label>
                    <input type="text" name="link" class="form-control" value="{{ $link->link }}">
                </div>

                <div class="form-group">
                    <label>Estados</label>
                    <select name="status" class="form-control" id="">
                        <option @selected($link->status === 1) value="1">Yes</option>
                        <option @selected($link->status === 0) value="0">No</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</section>
@endsection
