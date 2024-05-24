@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Vista Previa del Pedido</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Panel</a></div>
            <div class="breadcrumb-item">Invoice</div>
        </div>
    </div>

    <div class="section-body">
        <div class="invoice">
            <div class="invoice-print">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="invoice-title">
                            <h2>Factura</h2>
                            <div class="invoice-number">Order #{{ $order->invoice_id }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <strong>Entrega a:</strong><br>
                                    <strong>Nombre:</strong> {!! @$order->userAddress->first_name !!} {!! @$order->userAddress->last_name !!}
                                    <br>
                                    <strong>Celular:</strong> {!! @$order->userAddress->phone !!}
                                    <br>
                                    <strong>Dirección:</strong> {!! @$order->userAddress->address !!}
                                    <br>
                                    <strong>Area:</strong> {!! @$order->userAddress->deliveryArea->area_name !!}

                                </address>
                            </div>
                            <div class="col-md-6 text-md-right">
                                <address>
                                    <strong>Fecha de Pedido:</strong><br>
                                    {{ date('F d, Y / H:i', strtotime($order->created_at)) }}
                                    <br><br>
                                </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <strong>Metodo de Pago:</strong><br>
                                    {{ $order->payment_method }}<br>
                                    <strong>Payment Status: </strong>
                                        @if(strtoupper($order->payment_status) == 'COMPLETADO')
                                            <span class="badge badge-success">COMPLETADO</span>
                                        @elseif(strtoupper($order->payment_status) == 'PENDIENTE')
                                            <span class="badge badge-warning">PENDIENTE</span>
                                        @else
                                            <span class="badge badge-danger">{{ $order->payment_status }}</span>
                                        @endif
                                </address>
                            </div>
                            <div class="col-md-6 text-md-right">
                                <address>
                                    <strong>Estado de Pedido:</strong><br>
                                    @if($order->order_status === 'Entregado')
                                        <span class="badge badge-success">Entregado</span>';
                                    @elseif($order->order_status === 'Rechazado')
                                        <span class="badge badge-danger">Rechazado</span>';
                                    @else
                                        <span class="badge badge-warning">{{ $order->order_status }}</span>
                                    @endif
                                        <br><br>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="section-title">Resumen del Pedido</div>
                        <p class="section-lead">Todos los elementos aquí no se pueden eliminar.</p>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-md">
                                <tr>
                                    <th data-width="40">#</th>
                                    <th>Objetos</th>
                                    <th>Tamaño y Opcional</th>
                                    <th class="text-center">Precio</th>
                                    <th class="text-center">Cantidad</th>
                                    <th class="text-right">Totales</th>
                                </tr>
                                @foreach ($order->orderItems as $orderItem)
                                @php
                                    $size = json_decode($orderItem->product_size);
                                    $options = json_decode($orderItem->product_option);

                                    $qty = $orderItem->qty;
                                    $untiPrice = $orderItem->unit_price;
                                    $sizePrice = $size->price;
                                    $optionPrice = 0;
                                    foreach ($options as $optionItem) {
                                        $optionPrice += $optionItem->price;
                                    }

                                    $productTotal = ($untiPrice + $sizePrice + $optionPrice) * $qty;
                                @endphp
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{ $orderItem->product_name }}</td>
                                    <td>
                                        <b>{{ @$size->name }} ({{ currencyPosition(@$size->price) }})</b>
                                        <br>
                                        options:
                                        <br>
                                        @foreach ($options as $option)
                                        {{ @$option->name }} ({{ currencyPosition(@$option->price) }})
                                        <br>
                                        @endforeach
                                    </td>

                                    <td class="text-center">{{ currencyPosition($orderItem->unit_price) }}</td>
                                    <td class="text-center">{{ $orderItem->qty }}</td>
                                    <td class="text-right">{{ currencyPosition($productTotal) }}</td>
                                </tr>
                                @endforeach

                            </table>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-8">
                                <div class="col-md-4 d-print-none">
                                    <form action="{{ route('admin.orders.status-update', $order->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="">Estado de Pago</label>
                                            <select class="form-control" name="payment_status" id="">
                                                <option @selected($order->payment_status === 'pending') value="pending">Pending</option>
                                                <option @selected($order->payment_status === 'completed') value="completed">Completed</option>
                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label for="">Estado de Pedido</label>
                                            <select class="form-control" name="order_status" id="">
                                                <option @selected($order->order_status === 'pending') value="pending">Pending</option>
                                                <option @selected($order->order_status === 'in_process') value="in_process">In Process</option>
                                                <option @selected($order->order_status === 'delivered') value="delivered">Delivered</option>
                                                <option @selected($order->order_status === 'declined') value="declined">Declined</option>

                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-info">Actualizar</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 text-right">
                                <div class="invoice-detail-item">
                                    <div class="invoice-detail-name">Subtotal</div>
                                    <div class="invoice-detail-value">{{ currencyPosition($order->subtotal) }}</div>
                                </div>
                                <div class="invoice-detail-item">
                                    <div class="invoice-detail-name">Envío</div>
                                    <div class="invoice-detail-value">{{ currencyPosition($order->delivery_charge) }}</div>
                                </div>
                                <div class="invoice-detail-item">
                                    <div class="invoice-detail-name">Descuento</div>
                                    <div class="invoice-detail-value">{{ currencyPosition($order->discount) }}</div>
                                </div>
                                <hr class="mt-2 mb-2">
                                <div class="invoice-detail-item">
                                    <div class="invoice-detail-name">Total</div>
                                    <div class="invoice-detail-value invoice-detail-value-lg">{{ currencyPosition($order->grand_total) }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-md-right">
                <div class="float-lg-left mb-lg-0 mb-3">

                </div>
                <button class="btn btn-warning btn-icon icon-left" id="print_btn"><i class="fas fa-print"></i>
                    Imprimir</button>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $('#print_btn').on('click', function() {
            let printContents = $('.invoice-print').html();

            let printWindow = window.open('', '', 'width=600,height=600');
            printWindow.document.open();
            printWindow.document.write('<html>');
            printWindow.document.write('<link rel="stylesheet" href="{{ asset("admin/assets/modules/bootstrap/css/bootstrap.min.css") }}">');

            printWindow.document.write('<body>');
            printWindow.document.write(printContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();

            printWindow.print();
            printWindow.close();

        })
    })
</script>
@endpush
