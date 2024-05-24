@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Producto</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Actualizar Producto</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Imagen</label>
                    <div id="image-preview" class="image-preview">
                        <label for="image-upload" id="image-label">Elija el archivo</label>
                        <input type="file" name="image" id="image-upload" />
                      </div>
                </div>

                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                </div>

                <div class="form-group">
                    <label>Categoria</label>
                    <select name="category" class="form-control select2" id="" >
                        <option value="">seleccionar</option>
                        @foreach ($categories as $category)
                            <option @selected($product->category_id === $category->id) value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Precio</label>
                    <input type="text" name="price" class="form-control" value="{{ $product->price }}">
                </div>

                <div class="form-group">
                    <label>Precio en Oferta</label>
                    <input type="text" name="offer_price" class="form-control" value="{{ $product->offer_price }}">
                </div>

                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="text" name="quantity" class="form-control" value="{{ $product->quantity }}">
                </div>

                <div class="form-group">
                    <label>Breve descripción</label>
                    <textarea name="short_description" class="form-control" id="">{!! $product->short_description !!}</textarea>
                </div>

                <div class="form-group">
                    <label>Descripción Larga</label>
                    <textarea name="long_description" class="form-control summernote" id="">{!! $product->long_description !!}</textarea>
                </div>

                <div class="form-group">
                    <label>Código</label>
                    <input type="text" name="sku" class="form-control" value="{{ $product->sku }}">
                </div>

                <div class="form-group">
                    <label>Seo Titulo</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $product->seo_title }}">
                </div>

                <div class="form-group">
                    <label>Seo Descripción</label>
                    <textarea name="seo_description" class="form-control" id="">{!! $product->seo_description !!}</textarea>
                </div>

                <div class="form-group">
                    <label>Mostrar en Casa</label>
                    <select name="show_at_home" class="form-control" id="">
                        <option @selected($product->show_at_home === 1) value="1">Yes</option>
                        <option @selected($product->show_at_home === 0) value="0">No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Estado</label>
                    <select name="status" class="form-control" id="">
                        <option @selected($product->status === 1) value="1">Active</option>
                        <option @selected($product->status === 0) value="0">Inactive</option>
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
                'background-image': 'url({{ asset($product->thumb_image) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })
        })
    </script>
@endpush
