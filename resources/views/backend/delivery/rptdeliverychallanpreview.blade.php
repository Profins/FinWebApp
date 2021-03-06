@extends('layouts.master')
@section('title')
    <title>Application Users</title>
@endsection
@section('banner')
    @include('layouts.banner')
@endsection

@section('menu')
    @include('layouts.inventoryMenu')
@endsection

@section('content')
   
    <div class="container">

        <div style="text-align:center"><span style="line-height: 40%; text-align:center; font-family:times;font-weight:bold;font-size:15pt;color:black;">Delivery Challan: {!! $dchallan->challanno !!}</span></div>

        <table width="100%">

            <tr>

                <td width="50%"><strong>Customer Name:</strong><br>
                    {!! $dchallan->relationship->name !!}<br>
                    {{--                            {!! $invoice->relationship->street !!}<br>--}}
                    {!! $dchallan->relationship->address !!}<br>
                    {!! $dchallan->relationship->country !!}

                </td>

                <td width="50%" style="text-align: right">
                    <address>
                        <strong></strong><br>
                        Challan No: {!! $dchallan->challanno !!}<br>
                        Invoice No: {!! $dchallan->invoiceno !!}<br>
                        Challan Date: {!! $dchallan->challandate !!}<br>

                    </address>
                </td>
            </tr>

        </table>
        <div class="row"></div>

        <div class="row">

            <table class="table order-bank">
                <thead>
                <tr class="row-line" style="border-bottom: solid">
                    <th width="5%"><strong>SL</strong></th>
                    <th width="60%"><strong>Item</strong></th>
                    <th width="35%" style="text-align: right"><strong>Quantity</strong></th>
                    {{--<th width="15%" style="text-align: right"><strong>Unit Price</strong></th>--}}
                    {{--<th width="15%" style="text-align: right"><strong>Tax</strong></th>--}}
                    {{--<th width="20%" style="text-align: right"><strong>Totals</strong></th>--}}
                </tr>



                </thead>
                <tbody>
                @foreach($items as $i=>$item)
                    <tr style="line-height: 200%;">
                        <td width="5%" style="border-bottom-width:0.2px; font-size:10pt;"> {!! $i + 1 !!} </td>
                        <td width="60%" style="border-bottom-width:0.2px; font-size:10pt;">{!! $item->item->name !!}</td>
                        <td width="35%" style="border-bottom-width:0.2px; font-size:10pt; text-align: right">{!! number_format($item->quantity,2) !!} {!! $item->item->unit_name  !!}</td>
                        {{--                        <td width="15%" style="border-bottom-width:0.2px; font-size:10pt; text-align: right">{{ number_format($item->unit_price,2)}}</td>--}}
                        {{--<td width="15%" style="border-bottom-width:0.2px; font-size:10pt; text-align: right">{{ number_format($item->tax_total,2)}}</td>--}}
                        {{--<td width="20%" style="border-bottom-width:0.2px; font-size:10pt; text-align: right">{{ number_format($item->total_price,2)}}</td>--}}
                    </tr>

                @endforeach
                </tbody>
                {{--<tfoot>--}}
                {{--<tr>--}}
                {{--<td colspan="6"></td>--}}
                {{--</tr>--}}

                {{--<tr>--}}
                {{--<td colspan="3" rowspan="3" style="font-size:10pt; text-align: left;">{!! convert_number_to_words($invoice->due_amt).' '.get_currency() !!}</td>--}}
                {{--<td colspan="2" style="font-size:10pt; text-align: right"><strong>Total :</strong></td>--}}
                {{--<td style="font-size:10pt; text-align: right">{!!number_format($dchallan->invoice_amt,2) !!}</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                {{--<td colspan="2" style="font-size:10pt; text-align: right"><strong>Paid :</strong></td>--}}
                {{--<td style="font-size:10pt; text-align: right">{!! number_format($dchallan->paid_amt,2) !!}</td>--}}
                {{--</tr>--}}

                {{--<tr>--}}
                {{--<td colspan="2" style="font-size:10pt; text-align: right"><strong>Due :</strong></td>--}}
                {{--<td style="font-size:10pt; text-align: right">{!! number_format($invoice->due_amt,2) !!}</td>--}}
                {{--</tr>--}}

                {{--</tfoot>--}}

            </table>
        </div>
    </div>

@stop

@push('scripts')

<script>
    


</script>

@endpush
