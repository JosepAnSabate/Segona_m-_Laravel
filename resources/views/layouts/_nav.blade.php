<nav class="navbar navbar-expand-sm text-uppercase py-0 border-bottom " id="mainNav">

    <div class="container-fluid">
        <a class="navbar-brand  text-decoration-none text-reset prontologo"
            href="{{ url('/') }}">Segona mà</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
         data-bs-target="#navbarSupportedContent" 
         aria-controls="navbarSupportedContent" aria-expanded="false" 
         aria-label="Toggle navigation">
        <span class="iconNav"><i class="bi bi-list"></i></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('announcement.new') }}">
                  {{__('ui.nouanunci')}}
                  </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarSupportedContent" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                       @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="{{route('category.announcements',['name'=>$category->name,'id'=>$category->id])}}">
                            {{$category->name}}</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @endforeach
                    </ul>
                </li>

                 @include('layouts._locale',["lang"=>'ca','nation'=>'ca'])  
                 @include('layouts._locale',["lang"=>'en','nation'=>'gb'])
            
                @guest
                @if (Route::has('login'))
            
                <li class="nav-item mx-r mx-lg-1 ">
                    <a class="borderMarcador nav-link  py-3 px-0 px-lg-3 rounded js-scroll-trigger text-decoration-none text-reset"
                        href="{{route('login')}}"><span>{{__('ui.login')}}</span></a>
                </li>
                @endif    
                @if (Route::has('register'))
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="borderMarcador nav-link  py-3 px-0 px-lg-3 rounded js-scroll-trigger text-decoration-none text-reset"
                        href="{{route('register')}}"><span>{{__('ui.regb')}}</span></a>
                </li>
                @endif
                @else
                <li class="nav-item mx-0 mx-lg-1">
                    <form id="logoutForm" action="{{route('logout')}}" method="POST">
                        @csrf
                    </form>
                    <a id="logoutBtn"
                        class=" nav-link py-3 px-0 rounded js-scroll-trigger text-decoration-none text-reset"
                        href="#">{{__('ui.logout')}}</a>
                </li>
                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('revisor.home') }}">
                        Revisor 
                        <span class="badge rounded-pill bg-danger">
                            
                        </span>
                    </a>
                </li>
                @endif      
                @endguest
                    
                            
            </ul>
        </div>
    </div>
</nav>