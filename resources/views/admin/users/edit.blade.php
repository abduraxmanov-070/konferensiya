@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Konferensiya</h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Nimadir xato ketdi.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('info.update',$info->id)}}" method="POST" accept-charset="UTF-8">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="header_ru">Nomi</label>
                            <input type="text" name="nomi"  required class="form-control" id="header_ru" value="{{$info-> nomi}}">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Konferensiya vaqti</label>
                            <input type="text" name="vaqti" required class="form-control" id="header_ru"  value="{{$info->vaqti}}">
                        </div>

                        <div class="form-group">
                            <label for="header_ru">Sho'balar</label>
                            <br>
                            <textarea rows="10" name="shobalar" class="form-control" required> {{$info->shobalar}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Shartlar</label>

                            <textarea rows="15"  name="shartlar" class="form-control">{{$info->shartlar}}
                          </textarea>
                        </div>
                        <div class="form-group">
                            <label for="header_ru" >Deadline</label>
                            <br>
                            <input type="text" name="deadline" class="form-control"  value="{{$info->deadline}}">
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
