<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC-ADMIN | @yield('page-title', 'comics website')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
        <!-- Script -->
        <script src="{{asset('js/app.js')}}" defer></script>

        
        <!-- Link FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    </head>
    <body class="admin">
        <div id="site_admin_header">
            @include('partials.admin.sidebar')
        </div>
        <!-- /#site_header -->
        <div id="site_main">
            @yield('content')
        </div>
        <!-- /#site_main -->
    </body>
</html>
