<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    {{-- <link rel="stylesheet" type="text/css" href="./node_modules/bulma/css/bulma.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <style>

        .is-complete{

             text-decoration: line-through;
        }

    </style>

</head>
  <body style="padding-top: 40px;">

    <div class="container">

      @yield('content')

    </div>



  </body>
</html>
