@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Control deslizante de banner</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Crear Carrusel</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.banner-slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Image</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" id="image-upload" />
                          </div>
                    </div>

                    <div class="form-group">
                        <label for="">Titulo</label>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <div class="form-group">
                        <label for="">Sub titulo</label>
                        <input type="text" class="form-control" name="sub_title">
                    </div>

                    <div class="form-group">
                        <label for="">Url</label>
                        <input type="text" class="form-control" name="url">
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" id="">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </section>
@endsection
