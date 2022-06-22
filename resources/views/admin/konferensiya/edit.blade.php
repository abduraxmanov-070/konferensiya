@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">
                        Konferensiyani tahrirlash
                        </h1></div>
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
                    <form action="{{route('konferensiya.update', $konferensiya->id)}}" method="POST" accept-charset="UTF-8">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="vazirliklar"> Vazirliklar </label>
                            <textarea name="vazirliklar" id="vazirliklar" class="form-control" rows="6" required>{{ $konferensiya['vazirliklar'] }}</textarea>
                            {{--                            <input type="text" name="vazirliklar" class="form-control" placeholder="">--}}
                        </div>
                        <div class="form-group">
                            <label for="filial"> Filial</label>
                            <textarea name="filial" id=filial"" class="form-control" rows="4" required> {{ $konferensiya['filial'] }}</textarea>
                            {{--                            <input type="text" name="organization" class="form-control" placeholder="">--}}
                        </div>
                        <div class="form-group">
                            <label for="manzil"> Manzil </label>
                            <textarea name="manzil" id="manzil" class="form-control" rows="4" required> {{ $konferensiya['manzil'] }}</textarea>
                            {{--                            <input type="tel" name="phone" pattern="{0,9}[9]" class="form-control"  placeholder="">--}}
                        </div>
                        <div class="form-group">
                            <label for="veb_sayt"> Veb-sayt </label>
                            <input type="text" name="veb_sayt" class="form-control" value="{{ $konferensiya['veb_sayt'] }}" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="telefon"> Telefon_raqami </label>
                            <input type="text" name="telefon" class="form-control"  value="{{ $konferensiya['telefon'] }}" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="kimga">	Kimga </label>
                            <input type="text" name="kimga" class="form-control" id="kimga" value="{{ $konferensiya['kimga'] }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">	Email </label>
                            <input type="text" name="email" class="form-control" id="email" value="{{ $konferensiya['email'] }}" required>
                        </div>
                        <div class="form-group">
                            <label for="shot_raqam"> Hisob_raqam </label>
                            <textarea name="shot_raqam" id="shot_raqam" class="form-control" rows="4" required>{{ $konferensiya['shot_raqam'] }}</textarea>
{{--                            <input type="text" name="shot_raqam" class="form-control" id="hisob_raqam" value="{{ $konferensiya['shot_raqam'] }}">--}}
                        </div>
                        <button type="submit" id="alert" class="btn btn-primary">Submit</button>
                                                <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
