<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
                <div class ="row">
                    <div class="col-md-12">
                        <div class="jumbotron">
                            <h1>Welcome to my Blog!!</h1>
                            <p class="lead">Thank you so much for visiting. Please read popular posts here.</p>
                            <p><a class="btn btn-primary btn-lg" href='{{route('posts.create')}}' role="button">Create Post</a></p>


                        </div>
                    </div>
                </div> <!-- End of Header Row-->




                <div class="row">
                    <div class="col-md-8">
                        <div class="post">
                            <h2>Laravel Collective</h2>
                            <p>Since this package internally uses strict comparisons (=== instead of ==) be carefull when passing numeric values into your forms. Values in HTML are submitted as strings and Laravel old values stored in flash session are strings. </p>
                            <a href="#" class="btn-btn-primary">Read More</a>
                        </div>

                        <hr>

                        <div class="post">
                            <h2>Laravel Model Accessors</h2>
                            <p>Laravel's Eloquent Accessor allow you to manipulate a model attribute before returning it. This can be extremely useful for defining global date formats, for example. However, the date format used for display might not match the date format used for form elements.</p>
                            <a href="#" class="btn-btn-primary">Read More</a>
                        </div>

                        <hr>

                        <div class="post">
                            <h2>Pagination</h2>
                            <p>lThe pagination component should be wrapped in a <nav> element to identify it as a navigation section to screen readers and other assistive technologies. In addition, as a page is likely to have more than one such navigation section already (such as the primary navigation in the header, or a sidebar navigation), it is advisable to provide a descriptive aria-label for the <nav> which reflects its purpose </p>
                            <a href="#" class="btn-btn-primary">Read More</a>
                        </div>

                        <hr>



                    </div>

                </div>

            </div><!-- End of Container -->


        </div>
    <!-- JavaScript-->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>
