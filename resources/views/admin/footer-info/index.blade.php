@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Información de Pie de Pagína</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Actualizar Información de Pie de Pagína</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.footer-info.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Información Breve</label>
                    <textarea name="short_info" class="form-control">{{ @$footerInfo->short_info }}</textarea>
                </div>
                <div class="form-group">
                    <label>Direcxión</label>
                    <input type="text" name="address" class="form-control" value="{{ @$footerInfo->address }}">
                </div>
                <div class="form-group">
                    <label>Celular</label>
                    <input type="text" name="phone" class="form-control" value="{{ @$footerInfo->phone }}">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="{{ @$footerInfo->email }}">
                </div>

                <div class="form-group">
                    <label>Copyright</label>
                    <input type="text" name="copyright" class="form-control" value="{{ @$footerInfo->copyright }}">
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</section>
@endsection
