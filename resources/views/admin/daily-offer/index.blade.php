@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Ofertas</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <div id="accordion">
                    <div class="accordion">
                        <div class="accordion-header collapsed bg-primary text-light p-3 " role="button"
                            data-toggle="collapse" data-target="#panel-body-1" aria-expanded="false">
                            <h4>Nombre de la Oferta..</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-1" data-parent="#accordion" style="">
                            <form action="{{ route('admin.daily-offer-title-update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="">Top Titulo</label>
                                    <input type="text" class="form-control" name="daily_offer_top_title"
                                        value="{{ @$titles['daily_offer_top_title'] }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Titulo</label>
                                    <input type="text" class="form-control" name="daily_offer_main_title"
                                        value="{{ @$titles['daily_offer_main_title'] }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Sub Titulo</label>
                                    <input type="text" class="form-control" name="daily_offer_sub_title"
                                        value="{{ @$titles['daily_offer_sub_title'] }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="section">

        <div class="card card-primary">
            <div class="card-header">
                <h4>Todas las Ofertas</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.daily-offer.create') }}" class="btn btn-primary">
                        Crear Oferta
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
