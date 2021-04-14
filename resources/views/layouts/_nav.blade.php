<nav class="navbar fixed-top navbar-expand-sm navbar-light bg-warning text-uppercase fs-5 px-3">

        
        <a class="navbar-brand  text-decoration-none text-reset prontologo mx-1 fs-4"
            href="{{ url('/') }}">
            <img 
        class="d-inline-block align-top"
        src="http://afaescolacongresindians.com/wp-content/uploads/2015/10/intercanvi.jpg"
        alt="" width="60" height="48" />
            Segona mà
            </a>
        
        <button 
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        class="navbar-toggler"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div 
        class="collapse navbar-collapse" 
        id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
                  <a class="nav-link" href="{{ route('announcement.new') }}">
                  {{__('ui.nouanunci')}}
                  </a>
                </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle"
            id="navbarDropdown" 
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            >
            Categories
            </a>    
                <ul class="dropdown-menu"
                    aria-labelledby="navbarDropdown">
                    @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="{{route('category.announcements',['name'=>$category->name,'id'=>$category->id])}}">
                        {{$category->name}}</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    @endforeach
                </ul>
            </li>
            </ul>
            
        </ul>
        
        <ul class="navbar-nav">
            <li class="nav-item active">
            @include('layouts._locale',["lang"=>'en','nation'=>'gb'])
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item active">
            @include('layouts._locale',["lang"=>'ca','nation'=>'ca'])
            </li>
        </ul>
        <div class="d-flex w-100 justify-content-end">
        @guest
        
        @if (Route::has('login'))
        <ul class="navbar-nav ">
            <li class="nav-item active">
            <a  class="nav-link" href="{{route('login')}}"><span>{{__('ui.login')}}</span></a>
            </li>
        </ul>
        @endif    
        @if (Route::has('register'))
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a  class="nav-link" href="{{route('register')}}"><span>{{__('ui.regb')}}</span></a>
            </li>
        </ul>
        @endif
        @else
        <ul class="navbar-nav">
            <li class="nav-item active">
            <form id="logoutForm" action="{{route('logout')}}" method="POST">
         @csrf
            </form>
            <a id="logoutBtn"
                class=" nav-link py-3 px-0 rounded js-scroll-trigger text-decoration-none text-reset"
                href="#">{{__('ui.logout')}}</a>
            </li>
        </ul>
        @if (Auth::user()->is_revisor)
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="{{ route('revisor.home') }}"> Revisor <span class="badge rounded-pill bg-danger"></span></a>
            </li>
        @endif      
        @endguest
        </ul>
        </div>
    </div>
</nav>

