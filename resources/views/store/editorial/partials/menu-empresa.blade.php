@if(Auth::check()){
	  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user fa-2x"></i><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <!--<li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>
}@else{
 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user fa-2x"></i><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{route('login-get')}}"></a></li>
            <!--<li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>
}@endif