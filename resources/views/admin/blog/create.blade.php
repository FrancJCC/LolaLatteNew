@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Blog</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Crear Blog</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Imagen</label>
                    <div id="image-preview" class="image-preview">
                        <label for="image-upload" id="image-label">Elija el archivo</label>
                        <input type="file" name="image" id="image-upload" />
                      </div>
                </div>

                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                </div>

                <div class="form-group">
                    <label>Categoria</label>
                    <select name="category" class="form-control select2" id="" >
                        <option value="">Seleccionar</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea name="description" class="form-control summernote" id="">{{ old('description') }}</textarea>
                </div>

                <div class="form-group">
                    <label>titulo</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ old('seo_title') }}">
                </div>

                <div class="form-group">
                    <label>Seo Descripcion</label>
                    <textarea name="seo_description" class="form-control" id="">{{ old('seo_description') }}</textarea>
                </div>


                <div class="form-group">
                    <label>Estado</label>
                    <select name="status" class="form-control" id="">
                        <option value="1">Activo</option>
                        <option value="0">inactivo</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">crear</button>
            </form>
        </div>
    </div>
</section>
@endsection
