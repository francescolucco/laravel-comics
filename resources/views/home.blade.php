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
@endsection