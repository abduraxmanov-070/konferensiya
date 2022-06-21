@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">  </h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.konferensiya.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Qoshish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="">
                    <table width="90%" class="table-bordered table-striped" id="mytable">
                        <thead>
                        <tr >
                            <th>Vazirliklar</th>
                            <th>Filial </th>
                            <th>Manzil</th>
                            <th>Veb-sayt</th>
                            <th>Telefon raqam</th>
                            <th>Kimga</th>
                            <th>Email</th>
                            <th>Hisob_raqam</th>

                        </tr>

                        </thead>
                        <tbody>


                        @foreach($products as $product)

                            <tr class="tr{{$product->id}}" @if( \Illuminate\Support\Carbon::now()->diffInDays( $product->to_domen) <= 30 ) style="background: red;"@endif >


                                <td>
                                    {{$product->organization}}
                                </td>

                                <td>
                                    {{$product->domen_name}}
                                </td>

                                <td>
                                    {{Carbon\Carbon::parse($product->from_domen)->format("d-M Y")}}-yil
{{--    $product->from_domen->format('Y-m-d')--}}
                                </td>
                                <td>
                                    {{Carbon\Carbon::parse($product->to_domen)->format("Y-M-d")}}
{{--                                    {{$product->to_domen}}--}}
                                </td>
                                <td>
                                    {{$product->phone}}
                                </td>
                                <td>
                                    {{$product->annotation}}
                                </td>
                                <style>
                                    .dinayquy{
                                        opacity: 0;
                                    }
                                    .tr{{$product->id}}:hover .dinayquy{
                                        opacity: 1 !important;
                                    }
                                </style>
                                    <td>
                                        <form action="{{ route('admin.product.destroy',$product ->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="dinayquy">
                                            <div class=" btn-group" role="group">
                                            <a class="btn btn-warning btn-sm" href="{{ route('admin.product.edit',$product->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                            </div>
                                            </div>
                                        </form>
                                    </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<script src="{{asset('/assets/js/core/jquery.3.2.1.min.js')}}"></script>
<script>
    $(document).ready( function () {
    $('#mytable').DataTable({
        "language": {
            "lengthMenu": "_MENU_",
            "zeroRecords": " ",
            "info": "_PAGE_ / _PAGES_",
            "infoEmpty": " ",
            "search":"Qidirish:",
            "paginate": {
                "first": "биринчи",
                "previous": "олдинги",
                "next": "кейинки",
                "last": "охирги"
            },
        }});
} );
</script>
@endsection

