@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Carrusel </h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Crear Carrusel </h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Imagen</label>
                    <div id="image-preview" class="image-preview">
                        <label for="image-upload" id="image-label">Elija Archivo</label>
                        <input type="file" name="image" id="image-upload" />
                      </div>
                </div>

                <div class="form-group">
                    <label>Ofrecer</label>
                    <input type="text" name="offer" class="form-control">
                </div>
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label>Sub Titulo</label>
                    <input type="text" name="sub_title" class="form-control">
                </div>
                <div class="form-group">
                    <label>Breve descripción</label>
                    <textarea name="short_description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Enlace de botón</label>
                    <input type="text" name="button_link" class="form-control">
                </div>
                <div class="form-group">
                    <label>Estados</label>
                    <select name="status" class="form-control" id="">
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>
</section>
@endsection
