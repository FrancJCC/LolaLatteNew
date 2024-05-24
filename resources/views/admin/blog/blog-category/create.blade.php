@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Blog Categoria</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Crear Blog Categoria</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.blog-category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group">
                        <label for="">nombre</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                
                    <div class="form-group">
                        <label>Status</label>
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
