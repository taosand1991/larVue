<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{secure_asset('/css/app.css')}}">
        <title>Vue Laravel Post</title>

       <body>
         <div id="app">
           <router-view></router-view>
         </div>

          <script type="text/javascript" src="{{secure_asset('/js/app.js')}}"></script>
       </body>
</html>
