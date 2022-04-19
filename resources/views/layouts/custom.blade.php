<!DOCTYPE html>
<html lang="en" class="{{ $theme }}">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $setting->site_name . ' - ' . $setting->site_title }}</title>

<link href="{{ asset('/custom/css/slick.css') }}" rel="stylesheet">
<link href="{{ asset('/custom/css/slick-theme.css') }}" rel="stylesheet">
<link href="{{ asset('/custom/css/style.css') }}" rel="stylesheet">

<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/css/instant.css') }}" rel="stylesheet">
<link href="{{ asset('/instanticon/style.css') }}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
@yield('bodyclass')
@include('layouts.nav')
@yield('content')
@yield('extra')
@include('layouts.footer')
<script type="text/javascript" src="{{ asset('/custom/js/slick.min.js') }}"></script>
<script src="{{ asset('/js/main.js') }}"></script>
@yield('script')
<script>
document.addEventListener('DOMContentLoaded', function(){
    document.getElementById('se-pre-con').style.visibility = 'hidden'; 
    var element = document.getElementById('maincontent');
    element.classList.remove('d-none');
}, false);
</script>
</body>
</html>