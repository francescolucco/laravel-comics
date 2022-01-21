@extends('layouts.app')

@section('content')
   <main>
      <div class="container">
      <button class="current-series">Current series</button>
      <div class="box-card">
         @foreach (config('dc-comics') as $item)
         <div class="card">
            <div class="box-img">
               <img src="{{$item['thumb']}}">
            </div>
            <div class="title">{{$item['series']}}</div>
            <span class="price">{{$item['price']}}</span>
         </div>
         @endforeach
      </div>
      <button class="load-more">load more</button>
      </div>
   </main>

   <section class="merchandise">
      <div class="container">
         @foreach (config('shops') as $shop)

         <div class="action-shop">

            <img src="/img/{{$shop['url']}}" alt="">
            <h1>{{$shop['text']}}</h1>
         </div>
         @endforeach
      </div>
    </section>
@endsection