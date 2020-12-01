@include('front.layouts.header')
{{--dosyaya front klasörünü içindeki
    layouts klasöründe bulunan header dosyası eklendi. --}}
@yield('content')
{{--section eklemek için yield metodu kullanılır.
    Burada content isimli bir section ekleme işlemi yapıldı.--}}
@include('front.layouts.footer')
{{--dosyaya front klasörünü içindeki
    layouts klasöründe bulunan footer dosyası eklendi. --}}
