@extends('front.layouts.master')
{{--front->layouts yolundaki master dosyası buraya eklendi--}}
@section('content')
{{--content isminde bir section oluşturuldu--}}
@section('title',$article->title)
@section('bg',$article->image)
  <div class="col-lg-8 col-md-10 mx-auto">
    {!! $article->content !!}
    <hr>
    <span class="text-danger">Okunma sayısı : <b>{{$article->hit}}</b></span>
  </div>
  @include('front.widgets.categoryWidget')
  <!-- sayfanın sağ tarafına katagori listesi eklendi -->
  </div>
</div>
</div>
<hr>

  @endsection
  {{--content isimli section kapatıldı--}}
