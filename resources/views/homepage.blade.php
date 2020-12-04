@extends('front.layouts.master')
{{--front->layouts yolundaki master dosyası buraya eklendi--}}
@section('content')
{{--content isminde bir section oluşturuldu--}}

  <!-- Main Content -->

      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach ($articles as $article)

        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              {{$article->title}}
            </h2>
            <h3 class="post-subtitle">
              {{\Illuminate\Support\Str::limit($article->content,75)}}
            </h3>
          </a>
          <p class="post-meta"> Kategori :
            <a href="#">{{$article->getCategory->name}}</a>
            <span class="float-right">{{$article->created_at->diffForHumans()}}</span></p>
        </div>
        <hr>
        @endforeach
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
