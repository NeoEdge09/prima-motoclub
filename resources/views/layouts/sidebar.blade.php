   <div class="border-end bg-white" id="sidebar-wrapper">
       <div class="sidebar-heading border-bottom bg-light"><a href="{{ url('/') }}">Home</a></div>
       <div class="list-group list-group-flush">
           <a class="list-group-item list-group-item-action list-group-item-light p-3"
               href="{{ url('article-list') }}">Artikel</a>
           <a class="list-group-item list-group-item-action list-group-item-light p-3"
               href="{{ url('/gallery') }}">Gallery
               Foto</a>
           <a class="list-group-item list-group-item-action list-group-item-light p-3"
               href="{{ url('/our-client') }}">Klient
               Kami</a>
           @guest

               <li class="list-group-item list-group-item-action list-group-item-light p-3 dropdown ms-auto">

                   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       Login
                   </a>
                   <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                       @if (Route::has('login'))
                           <a class="list-group-item list-group-item-action list-group-item-light p-3 dropdown-item"
                               href="{{ route('login') }}">
                               Sign In
                           </a>
                       @endif
                       @if (Route::has('register'))
                           <a class="list-group-item list-group-item-action list-group-item-light p-3 dropdown-item"
                               href="{{ route('register') }}">
                               Sign Up
                           </a>
                       @endif
                   @else
               <li class="list-group-item list-group-item-action list-group-item-light p-3 dropdown ms-auto">
                   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       Hallo, {{ Auth::user()->name }}
                   </a>

                   <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                       <a class="list-group-item list-group-item-action list-group-item-light p-3 dropdown-item"
                           href="{{ url('/dashboard') }}">
                           Dashboard</a>
                       <a class="list-group-item list-group-item-action list-group-item-light p-3 dropdown-item"
                           href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                       </a>

                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                       </form>
                   </div>
               </li>
           @endguest
       </div>



   </div>
