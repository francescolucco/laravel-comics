<div class="footer-top">
   <?php $listMenuFooter = config('listmenufooter') ?>
   <div class="container">
     <div class="menu-footer">
        @foreach ($listMenuFooter as $voice_list)
            <div class="col">
                  <div class="title">{{$voice_list['title']}}</div>
                     
                  @foreach ($voice_list['voices'] as $item_list)
                  <div class="voice-menu">{{$item_list}}</div>
                  @endforeach
            </div>
         @endforeach

         <div class="img-logo-footer">
            <img src="{{asset('img/dc-logo-bg.png')}}" alt="">
         </div>
     </div>
   </div>
</div>