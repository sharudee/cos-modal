<!doctype html>
<html>
    <head>
       	@include('includes.head')
    </head>
    <body>


        <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">COS - Cloud System</a>
            </div>

            <!-- แสดงห้าง และ USER ID -->
            <div class="panel col-sm-2 col-sm-offset-7  ">
                <div class="panel-body">
                   ห้าง : xxxxxxxxxxxxxxxx <br>
                   USER ID : XXXXXX
                </div>
            </div>
                   

            <!-- /.navbar-header -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li @yield('active_home')><a href="{{URL::to('/')}}">Home</a></li>
                    <!--<li @yield('active_about')><a href="{{URL::to('about')}}">About us</a></li>
                    <li @yield('active_services')><a href="{{URL::to('services')}}">Services</a></li>
                    <li @yield('active_portfolio')><a href="{{URL::to('portfolio')}}">Portfolio</a></li>
                    <li @yield('active_blog')><a href="{{URL::to('blog')}}">Blog</a></li> -->
                    <li @yield('active_contact')><a href="{{URL::to('contact')}}">Contact</a></li>
                </ul>  

            </div><!-- /.navbar-collapse -->
            
            <!-- /.navbar-top-links -->
            
            @include('includes.sidebar')
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
            
                @yield('content')
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
        	
    @include('includes.footer')
    @yield('script')

    </body>
</html>