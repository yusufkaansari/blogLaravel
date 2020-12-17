@extends('front.layouts.master')
{{--front->layouts yolundaki master dosyası buraya eklendi--}}
@section('title',$category->name.' Kategorisi | '.count($articles).' yazı bulundu.')
@section('content')
{{--content isminde bir section oluşturuldu--}}

  <!-- Main Content -->

      <div class="col-md-9 mx-auto">
      @if(count($articles)>0)
        @foreach ($articles as $article)

        <div class="post-preview">
          <a href="{{route('single',[$article->getCategory->slug,$article->slug])}}">
            <h2 class="post-title">
              {{$article->title}}
            </h2>
            <image src="{{$article->image}}"></image>
            <h3 class="post-subtitle">
              {!!\Illuminate\Support\Str::limit($article->content,75)!!}
            </h3>
          </a>
          <p class="post-meta"> Kategori :
            <a href="#">{{$article->getCategory->name}}</a>
            <span class="float-right">{{$article->created_at->diffForHumans()}}</span></p>
        </div>
        @if(!$loop->last)
        <hr>
      @endif
        @endforeach
      @else
        <div class="alert alert-danger">
          <h1>Bu kategoriye ait yazı bulunamadı.</h1>
        </div>
        @endif
        <div class="clearfix">
            {{ $articles->links('vendor.pagination.bootstrap-4') }}
        </div>
      </div>
      <!-- kategori listesi buradan başlıyor -->
      @include('front.widgets.categoryWidget')
      <!-- sayfanın sağ tarafına katagori listesi eklendi -->
      </div>
    </div>
  </div>
  <hr>
  @endsection
  {{--content isimli section kapatıldı--}}
