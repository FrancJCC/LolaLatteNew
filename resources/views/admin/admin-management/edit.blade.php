@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Gestión administrativa</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Actualizar administrador</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.admin-management.update', $admin->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{ $admin->name }}">
                </div>
                <div class="form-group">
                    <label>Correo</label>
                    <input type="text" name="email" class="form-control" value="{{ $admin->email }}">
                </div>

                <div class="form-group">
                    <label>Rol</label>
                    <select name="role" id="" class="form-control">
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Subir</button>
            </form>
        </div>
    </div>
</section>
@endsection
