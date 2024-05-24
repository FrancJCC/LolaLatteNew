@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Cupones</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Todos Los Cupones</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.coupon.create') }}" class="btn btn-primary">
                        Crear Cupon
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
