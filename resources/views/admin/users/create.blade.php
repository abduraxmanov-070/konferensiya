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
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('info.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="header_ru">Nomi</label>
                            <input type="text" name="nomi" class="form-control" id="header_ru">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Konferensiya vaqti</label>
                            <input type="text" name="vaqti" class="form-control" id="header_ru">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Konfereniya haqida</label>
                            <br>
                           <textarea class="form-control"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Sho'balar</label>
                            <br>
                           <textarea rows="10" class="form-control">На конференции будут обсуждаться следующие вопросы:
1. Актуальные проблемы и решения телекоммуникационных систем и сетей.
2. Современные тенденции и актуальные проблемы использования цифровых технологий в социально-экономических сферах.
3. Технологии IoT, big data и технологии машинного обучения для их обработки.
4. Современные проблемы и решения обеспечения информационной безопасности.
5. Современные информационные технологии в образовании.
</textarea>
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Shartlar</label>

                            <textarea rows="15" class="form-control">Требования, предъявляемые к статьям:
 Статья должна быть не более 5 страниц в интервале 1,5 (параметры страницы; слева-2,5 см, сверху и снизу 2 см, справа 1,5 см, в формате А4, 210х297 мм), в редакторе Microsoft Word, Times New Roman, шрифт 14-размера.
 Заголовок должен быть написан заглавными буквами жирным шрифтом и помешен в середине страницы. На последующих строках имя автора, ученая степень или ученое звание, место работы в скобках, пишутся курсивом, раздел конференции, электронная почта, аннотация и ключевые слова в количестве 5-7 штук, на имени файла указывается номер раздела и фамилия автора. (Например: 1.Samandarov.doc)
 Авторы несут ответственность за достоверность информации, фактов и статистики, указанных в статье.
 В статье должны быть четко указаны источники таблиц (чертежи и рисунки), к сокращенным словам должны быть предоставлены комментарии (примечания).
 Ссылки в статье обозначаются как «[1]». Литература, использованная в статье, должна быть представлена в соответствии с последовательностью использования.
 Статьи несоответствующие вышеуказанным требованиям, не будут рассматриваться Оргкомитетом и не будут включены в сборник.
Включенные в сборник статьи и тезисы индексируются в базе google scholar.
За каждую принятую тезис взимается оргвзнос в размере 50 000 сум.
</textarea>
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Deadline</label>
                            <br>
                            <input type="text" class="form-control">
                        </div>








                        <button type="submit" id="alert" class="btn btn-primary">Submit</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
