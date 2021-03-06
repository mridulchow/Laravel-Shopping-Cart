<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('product.index')}}">Laravel Shopping Cart</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-shopping-cart fa-2" aria-hidden="true"></i> Shopping Cart</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User Management<span class="caret"></span></a>
              <ul class="dropdown-menu">
                @if(Auth::check())
                  <li><a href="{{ route('user.profile') }}">Profile</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="{{route('user.logout')}}">Logout</a></li>
                @else
                  <li><a href="{{ route('user.signup') }}">Signup</a></li>
                  <li><a href="{{ route('user.signin') }}">Signin</a></li>
                @endif
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>