<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <!-- <link href="{{ asset('css/main.scss') }}" rel="stylesheet"> -->
    <title>Babi Bassinet</title>    
</head>



<body>
<x-navbar />







<div class="container">
    @yield ('content')
</div>
    <script src="{{ asset('js/main.js') }}"></script>

<x-footer />
</body>
</html>