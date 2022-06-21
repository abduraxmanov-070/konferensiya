@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Кластер</h1></div>
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


                    <form action="{{route('admin.users.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="header_ru">номи</label>
                            <input type="text" name="name" class="form-control" id="header_ru" placeholder="номи">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">parol:</label>
                            <input type="text" name="password" class="form-control" id="header_ru" placeholder="password:">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">email:</label>
                            <input type="text" name="email" class="form-control" id="header_ru" placeholder="password:">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">tuman:</label>

                            <select class="custom-select" name="role" id="">
                                @foreach($regions as $region)
                                    <option class="form-control" value="{{$region->id}}">{{$region->name}}</option>
                                @endforeach
                            </select>
                        </div>








                        <button type="submit" id="alert" class="btn btn-primary">Submit</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
