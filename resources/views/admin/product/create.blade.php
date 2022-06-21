@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">   </h1></div>
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
                    <form action="{{route('admin.product.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="header_ru"></label>
                            <input type="text" name="domen_name" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">organization(tashkilot)</label>
                            <input type="text" name="organization" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">phone</label>
                            <input type="tel" name="phone" pattern="{0,9}[9]" class="form-control"  placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">from_date(domen yaratilgan vaqti)</label>
                            <input type="date" name="from_domen" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">to_domen(tugash vaqti)</label>
                            <input type="date" name="to_domen" class="form-control"  placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">	annotation(izoh)</label>
                            <input type="text" name="annotation" class="form-control" id="header_ru" placeholder="номи">
                        </div>
                        <button type="submit" id="alert" class="btn btn-primary">Submit</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
