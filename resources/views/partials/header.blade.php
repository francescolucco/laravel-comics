<header class="container">
   <div class="box-logo">
     <img src="{{asset('img/dc-logo.png')}}" alt="logo">
   </div>
   <nav class="menu-header">
      <?php $menu = config('menu') ?>
     <ul>
        @foreach ($menu as $menu_voice)
           
        <li 
        {{-- v-for="(link, index) in links" 
        :key="`menu-header-${index}`"
        @click="getActive(index)" 
        :class="{active: link.current}" --}}
        >
        <a 
        {{-- :class="{active: link.current}"  --}}
        href="#">{{$menu_voice['text']}}</a>
      </li>
      @endforeach
     </ul>
     {{-- <ul>
       <li v-for="(link, index) in links" 
         :key="`menu-header-${index}`"
         @click="getActive(index)" 
         :class="{active: link.current}">
         <a :class="{active: link.current}" href="#">{{link.text}}</a>
       </li>
     </ul> --}}
   </nav>
   
 </header>