@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">    </h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.product.update',$product->id)}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="header_ru">Domen nomi</label>
                            <input type="text" name="domen_name" value="{{ $product->domen_name }}"  class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Tashkilot nomi</label>
                            <input type="text" name="organization" value="{{ $product->organization }}" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Telefon</label>
                            <input type="tel" name="phone" pattern="{0,9}[9]" value="{{ $product->phone }}" class="form-control"  placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">domen yaratilgan sana</label>
                            <input type="date" name="from_domen" value="{{Carbon\Carbon::parse($product->from_domen)->format("Y-m-d")  }}" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">tugash vaqti</label>
                            <input type="date" name="to_domen" value="{{Carbon\Carbon::parse($product->to_domen)->format("Y-m-d")  }}" class="form-control"  placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">	izoh</label>
                            <input type="text" name="annotation" value="{{ $product->annotation }}" class="form-control" id="header_ru" placeholder="номи">
                        </div>

                        <button type="submit" id="alert" class="btn btn-primary">Submit</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
