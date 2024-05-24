@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Area de entrega</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Crear Area De entrega</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.delivery-area.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Nombre de Area</label>
                    <input type="text" name="area_name" class="form-control">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tiempo mínimo de entrega </label>
                            <input type="text" name="min_delivery_time" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tiempo maximo de entrega</label>
                            <input type="text" name="max_delivery_time" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Gastos de envio</label>
                            <input type="text" name="delivery_fee" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Estado</label>
                            <select name="status" class="form-control" id="">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>
</section>
@endsection
