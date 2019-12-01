<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; position: fixed; width: 100%; margin-bottom: 20px">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}" >
                <span class="logo-entry logo-main current-logo loaded" style="width:200px; height: 47px;">
                        <img src="{{asset('img/logo-2.png')}}" alt="Bookstore" width="200" height="47" itemprop="logo">
                    </span>
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                    @if(Auth::user()) 
                        <li><a href="admin/user/edit/{{Auth::user()->id}}"><i class="fa fa-user fa-fw"></i> {{Auth::user()->user_name}}</a>
                        </li>
                        <li><a href="admin/user/changepassword"><i class="fa fa-gear fa-fw"></i> Change Pasword</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    @endif
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            @include('admin.layout.menu')
            <!-- /.navbar-static-side -->
        </nav>