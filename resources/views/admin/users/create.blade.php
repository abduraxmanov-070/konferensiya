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


                    <form action="{{route('info.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="header_ru">Nomi</label>
                            <input type="text" name="nomi"  required class="form-control" id="header_ru">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Konferensiya vaqti</label>
                            <input type="text" name="vaqti" required class="form-control" id="header_ru">
                        </div>

                        <div class="form-group">
                            <label for="header_ru" >Sho'balar</label>
                            <br>
                            <textarea rows="10" name="shobalar" class="form-control" required>Konferensiyada quyidagi masalalar muhokama qilinadi:
1. Telekommunikatsiya tizimlari va tarmoqlarining dolzarb muammolari va yechimlari.
2. Ijtimoiy-iqtisodiy sohalarda raqamli texnologiyalardan foydalanishning zamonaviy tendentsiyalari va dolzarb muammolari.
3. IT texnologiyalari, katta ma'lumotlar va ularni qayta ishlash uchun mashinani o'rganish texnologiyalari.
4. Axborot xavfsizligini ta'minlashning zamonaviy muammolari va yechimlari.
5. Ta'limda zamonaviy axborot texnologiyalari.
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Shartlar</label>

                            <textarea rows="15"  name="shartlar" class="form-control">Maqolaga qo'yiladigan talablar:
 Maqola 1,5 oraliqda 5 sahifadan oshmasligi kerak (sahifa sozlamalari; chapdan-2,5 sm, yuqoridan va pastdan 2 sm, o‘ngdan 1,5 sm, A4 formatda, 210x297 mm), Microsoft Word, Times New Roman, 14- o'lchamdagi shrift.
 Sarlavha qalin bosh harflar bilan yozilishi va sahifaning o'rtasiga joylashtirilishi kerak. Keyingi qatorlarda muallifning ismi-sharifi, ilmiy darajasi yoki ilmiy unvoni, qavs ichida ish joyi kursiv bilan, konferensiya bo‘limi, elektron pochta manzili, izoh va kalit so‘zlar 5-7 dona hajmda, bo‘lim raqami yoziladi. fayl nomida esa muallifning familiyasi ko'rsatilgan. (Masalan: 1.Samandarov.doc)
 Maqolada ko'rsatilgan ma'lumotlar, faktlar va statistik ma'lumotlarning to'g'riligi uchun mualliflar javobgardir.
 Maqolada jadvallarning manbalari (chizmalar va chizmalar) aniq ko'rsatilishi kerak, qisqartirilgan so'zlarga sharhlar (eslatmalar) berilishi kerak.
 Maqolada havolalar "[1]" sifatida ko'rsatilgan. Maqolada foydalanilgan adabiyotlar foydalanish ketma-ketligiga muvofiq taqdim etilishi kerak.
 Yuqoridagi talablarga javob bermaydigan maqolalar tashkiliy qo‘mita tomonidan ko‘rib chiqilmaydi va to‘plamga kiritilmaydi.
To'plamga kiritilgan maqolalar va tezislar Google scholar ma'lumotlar bazasida indekslanadi.
Har bir qabul qilingan referat uchun 50 000 so‘m ro‘yxatdan o‘tish to‘lovi undiriladi.
</textarea>
                        </div>
                        <div class="form-group">
                            <label for="header_ru" >Hujjat topshirishning ohirgi muddati</label>
                            <br>
                            <input type="text" name="deadline" class="form-control">
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
