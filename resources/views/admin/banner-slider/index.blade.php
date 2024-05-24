@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Control deslizante de banner</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Carruseles</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.banner-slider.create') }}" class="btn btn-primary">
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
