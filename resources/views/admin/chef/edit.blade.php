@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Owner</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Editar Owner</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.chefs.update', $chef->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Imagen</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Elija el archivo</label>
                            <input type="file" name="image" id="image-upload" />
                            <input type="hidden" name="old_image" value="{{ $chef->image }}"/>

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="name" value="{{ $chef->name }}">
                    </div>

                    <div class="form-group">
                        <label for="">titulo</label>
                        <input type="text" class="form-control" name="title" value="{{ $chef->title }}">
                    </div>

                    <br>
                    <h5>Links sociales</h5>
                    <div class="form-group">
                        <label for="">Facebook <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="fb" value="{{ $chef->fb }}">
                    </div>
                    <div class="form-group">
                        <label for="">Linkedin <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="in" value="{{ $chef->in }}">
                    </div>
                    <div class="form-group">
                        <label for="">X <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="x" value="{{ $chef->x }}">
                    </div>
                    <div class="form-group">
                        <label for="">Web <code>(Leave empty for hide)</code></label>
                        <input type="text" class="form-control" name="web" value="{{ $chef->web }}">
                    </div>

                    <div class="form-group">
                        <label>Mostar en Pag?</label>
                        <select name="show_at_home" class="form-control" id="">
                            <option @selected($chef->show_at_home === 0) value="0">No</option>
                            <option @selected($chef->show_at_home === 1) value="1">Si</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Estado</label>
                        <select name="status" class="form-control" id="">
                            <option @selected($chef->status === 1) value="1">Activo</option>
                            <option @selected($chef->status === 0) value="0">Inactivo</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.image-preview').css({
                'background-image': 'url({{ asset($chef->image) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })
        })
    </script>
@endpush
