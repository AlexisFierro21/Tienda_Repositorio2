<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main-title" href="{{route('inicio')}}">PDF Express</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2" aria-expanded="true">
          <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar" size="100">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-default">
      @include('store.partials.menu-user')

       <li><a href="{{route('cart-show')}}"><i class="fa fa-shopping-cart fa-2x"></i><span class="badge">{{$cantidad}}</span></a></li>
       <li><a href="#" class="btn btn-default tex-navbar"></a></li>
      </ul>
    </div>
  </div>
</nav>