@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Productos</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Crear Producto</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Imagen</label>
                    <div id="image-preview" class="image-preview">
                        <label for="image-upload" id="image-label">Elije el Archivo</label>
                        <input type="file" name="image" id="image-upload" />
                      </div>
                </div>

                <div class="form-group">
                    <label>Nombree</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label>Categoria</label>
                    <select name="category" class="form-control select2" id="" >
                        <option value="">seleccionar</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Precio</label>
                    <input type="text" name="price" class="form-control" value="{{ old('price') }}">
                </div>

                <div class="form-group">
                    <label>Precio de Oferta</label>
                    <input type="text" name="offer_price" class="form-control" value="{{ old('offer_price') }}">
                </div>

                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="text" name="quantity" class="form-control" value="{{ old('quantity') }}">
                </div>

                <div class="form-group">
                    <label>Breve descripción</label>
                    <textarea name="short_description" class="form-control" id="">{{ old('short_description') }}</textarea>
                </div>

                <div class="form-group">
                    <label>descripción larga</label>
                    <textarea name="long_description" class="form-control summernote" id="">{{ old('long_description') }}</textarea>
                </div>

                <div class="form-group">
                    <label>Código</label>
                    <input type="text" name="sku" class="form-control" value="{{ old('sku') }}">
                </div>

                <div class="form-group">
                    <label>Seo Titulo</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ old('seo_title') }}">
                </div>

                <div class="form-group">
                    <label>Seo Descripción</label>
                    <textarea name="seo_description" class="form-control" id="">{{ old('seo_description') }}</textarea>
                </div>

                <div class="form-group">
                    <label>Mostrar en casa</label>
                    <select name="show_at_home" class="form-control" id="">
                        <option value="1">Si</option>
                        <option selected value="0">No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Estado</label>
                    <select name="status" class="form-control" id="">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>
</section>
@endsection
