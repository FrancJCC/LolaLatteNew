@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Owner</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Crear Owner</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.chefs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Imagen</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Elija el archivo</label>
                            <input type="file" name="image" id="image-upload" />
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label for="">Titulo</label>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <br>
                    <h5>Links sociales</h5>
                    <div class="form-group">
                        <label for="">Facebook <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="fb">
                    </div>
                    <div class="form-group">
                        <label for="">Linkedin <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="in">
                    </div>
                    <div class="form-group">
                        <label for="">X <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="x">
                    </div>
                    <div class="form-group">
                        <label for="">Web <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="web">
                    </div>

                    <div class="form-group">
                        <label>Mostar en Pag</label>
                        <select name="show_at_home" class="form-control" id="">
                            <option value="0">No</option>
                            <option value="1">Si</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Estado</label>
                        <select name="status" class="form-control" id="">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">crear</button>
                </form>
            </div>
        </div>
    </section>
@endsection
