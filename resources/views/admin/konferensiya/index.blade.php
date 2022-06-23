@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title"> Konferensiya </h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('konferensiya.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Qo'shish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="">
                    <table  class="table-bordered w-100 table-striped" id="mytable">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
{{--                            <th scope="col">Logo</th>--}}
                            <th scope="col">Vazirliklar</th>
                            <th scope="col">Filial </th>
                            <th scope="col">Manzil</th>
                            <th scope="col">Veb-sayt</th>
                            <th scope="col">Telefon raqam</th>
                            <th scope="col">Kimga</th>
                            <th scope="col">Email</th>
                            <th scope="col">Hisob_raqam</th>
                            <th scope="col">Amallar</th>
                        </tr>

                        </thead>
                        <tbody>


                        @foreach($konferensiyalar as $key => $konferensiya)

                            <tr>

                                <td>
                                    {{$key+1}}
                                </td>
{{--                                <td>--}}
{{--                                    <img src="{{ asset('assets/img/logo/'.$konferensiya->logo) }}" alt="logo" style="height: 100px;">--}}
{{--                                </td>--}}
                                <td>
                                    {{$konferensiya->vazirliklar}}
                                </td>
                                <td>
                                    {{$konferensiya->filial}}
                                </td>
                                <td>
                                    {{$konferensiya->manzil}}
                                </td>
                                <td>
                                    {{$konferensiya->veb_sayt}}
                                </td>
                                <td>
                                    {{$konferensiya->telefon}}
                                </td>
                                <td>
                                {{$konferensiya->kimga}}
                                </td>
                                <td>
                                {{$konferensiya->email}}
                                </td>
                                <td>
                                {{$konferensiya->shot_raqam}}
                                </td>

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

