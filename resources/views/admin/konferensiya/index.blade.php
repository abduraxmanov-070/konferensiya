@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">  </h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('konferensiya.create')}}">
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


                        @foreach($konferensiyalar as $konferensiya)

                            <tr class="tr{{$konferensiya->id}}" @if( \Illuminate\Support\Carbon::now()->diffInDays( $product->to_domen) <= 30 ) style="background: red;"@endif >


                                <td>
                                    {{$konferensiya->Vazirliklar}}
                                </td>
                                <td>
                                    {{$konferensiya->Filial}}
                                </td>
                                <td>
                                    {{$konferensiya->Manzil}}
                                </td>
                                <td>
                                    {{$konferensiya->Veb-sayt}}
                                </td>
                                <td>
                                    {{$konferensiya->Telefon_raqam}}
                                </td>
                                <td>
                                {{$konferensiya->Kimga}}
                                </td>
                                <td>
                                {{$konferensiya->Email}}
                                </td>
                                <td>
                                {{$konferensiya->Hisob_raqam}}
                                </td>
                                <style>
                                    .a{
                                        opacity: 0;
                                    }
                                    .tr{{$konferensiya->id}}:hover .a{
                                        opacity: 1 !important;
                                    }
                                </style>
                                    <td>
                                        <form action="{{ route('konferensiya.destroy',$konferensiya ->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="a">
                                            <div class=" btn-group" role="group">
                                            <a class="btn btn-warning btn-sm" href="{{ route('konferensiya.edit',$konferensiya->id) }}">
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
@endsection

