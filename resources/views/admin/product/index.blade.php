@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Productos</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Todos los Productos</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.product.create') }}" class="btn btn-primary">
                        Crear Nuevo
                    </a>
                </div>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
4