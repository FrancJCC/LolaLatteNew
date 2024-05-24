@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Paginas</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Actualizar Pagina</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.custom-page-builder.update', $page->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nombre de la Pagina</label>
                    <input type="text" name="name" class="form-control" value="{{ $page->name }}">
                </div>

                <div class="form-group">
                    <label>Contenido De la Pag</label>
                    <textarea name="content" class="form-control summernote">{!! $page->content !!}</textarea>
                </div>

                <div class="form-group">
                    <label>Estado</label>
                    <select name="status" class="form-control" id="">
                        <option value="1" @selected($page->status === 1)>Activa</option>
                        <option value="0" @selected($page->status === 0)>Inactiva</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</section>
@endsection
