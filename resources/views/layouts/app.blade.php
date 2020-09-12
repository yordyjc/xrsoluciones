<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
  <title>XR Soluciones | @yield('title')</title>
  <meta content="Admin Dashboard" name="description">
  <meta content="Mannatthemes" name="author">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  @include('includes.css')
  @include('includes.data')
  
</head>
<body class="fixed-left">
    <!-- Loader -->
    <div id="preloader">
      <div id="status">
          <div class="spinner"></div>
      </div>
    </div>
    <div id="wrapper">
        @include('layouts.sidebar')
        <div class="content-page">
            <div class="content">
                @include('layouts.navbar')
                <div class="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="btn-group float-right">
                                        <ol class="breadcrumb hide-phone p-0 m-0">
                                            <li class="breadcrumb-item"><a href="{{url('/')}}">XR Soluciones</a></li>
                                            <li class="breadcrumb-item active">@yield('title')</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">@yield('title')</h4>
                                </div>
                            </div>  
                        </div>
                  <div class="row">
                      <div class="col-12">
                          <div class="card m-b-30">
                              @yield('content')
                          </div>
                      </div>
                      
                  </div>
                        </div>
                    
                </div>
            </div>
        
            @include('layouts.footer')

        </div>
    </div>
    @include('includes.js')
</body>
</html>