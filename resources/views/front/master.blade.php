<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('/')}}admin/css/styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-black">
        <div class="container">
            <a href="{{ route('/') }}" class="navbar-brand">Logo</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('/') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Courses</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('body')
    <div style="height: 300px"></div>
    <section class="py-5 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-white">
                        <h2 class="font-weight-bolder">Logo</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat id laboriosam quos sint vero voluptatibus. Ab aut consequuntur ducimus, modi numquam saepe sint tempora! Aperiam at dolores minus nam sint.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="navbar-nav">
                        <li><a href="" class="nav-link text-white">Home</a></li>
                        <li><a href="" class="nav-link text-white">Courses</a></li>
                        <li><a href="" class="nav-link text-white">About Us</a></li>
                        <li><a href="" class="nav-link text-white">contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if(Session::has('error'))
        <script>
            toastr.error("{{ Session::get('error') }}");
        </script>
    @endif
    @if(Session::has('message'))
        <script>
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif
</body>
</html>
