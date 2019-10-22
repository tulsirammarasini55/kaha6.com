  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Kaha6.Com') }}
                </a>
               

              
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active">
        <a class="nav-link" href="/home"  data-placement="bottom" title=" Home Page" data-toggle="tooltip">
              <i class="fa fa-home"></i>

         <span class="sr-only">(current)</span></a>
      </li>
      


      

       

                    </ul>

                    <!-- Right Side Of Navbar -->
                    
                          <ul class="nav navbar-top-links navbar-right">


            <li class="nav-item active">
                            
                     <span data-toggle="modal" data-target="#exampleModal">
                       <a  href="/contact" class="nav-link" data-placement="bottom" title="Contact Us"data-toggle="tooltip">
                             <i class="fa fa-phone"></i>
                       </a>
                     </span>
                                    
             </li>



                        <li class="nav-item active">
                            
                     <span data-toggle="modal" data-target="#exampleModal">
                       <a  href="#" class="nav-link" data-placement="bottom" title="Meet Our Teams" data-toggle="tooltip">
                             <i class="fa fa-users"></i>
                       </a>
                     </span>
                                    
             </li>

             <li class="nav-item active">
                            
                     <span data-toggle="modal" data-target="#exampleModal3">
                       <a  href="#" class="nav-link" data-placement="bottom" title="Our More Product" data-toggle="tooltip">
                    <i class="material-icons">&#xe42a;</i>
                       </a>
                     </span>

                                    
             </li>
            



                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" data-placement="bottom" title="  Login In To You Account " data-toggle="tooltip">  <i class="fa fa-upload"></i></a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" title="Make Your Account" data-toggle="tooltip">
                                     <i class="fa fa-sign-in-alt"></i></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      <img src="/images/avatars/{{Auth::user()->avatar}}" style="width: 30px; height: 30px; float: left; border-radius: 50%;" >
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <a href="/profile" class="dropdown-item">Your Profile</a>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>