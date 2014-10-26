<!DOCTYPE html>
<html>

<head>
    <title>WC GPA Calculator</title>
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/bootstrap.css') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ URL::asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/bootstrap-formhelpers.min.js') }}"></script>
</head>
<body>

    <div class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::to('/')}}">West Chester GPA Calculator</a>
        </div>
        <div class="navbar-collapse collapse navbar-inverse-collapse">
            <ul class="nav navbar-nav">
                <li><a href="http://www.edline.net/files/_VRL2H_/88854a15040648633745a49013852ec4/Credits_and_GPA1.pdf">Scale</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://gradymcd.me">gradymcd</a></li>
                <li><a href="https://github.com/gradymcd/WC-GPA">Source</a></li>
            </ul>
        </div>
    </div>

    <div class="container" style="height:90%;">
        @yield('content')
        </div>
        <br>
    </div>

<footer class="well">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <ul class="list-unstyled list-inline">
                <li><a href="https://github.com/gradymcd">GitHub</a></li>
                <li><a href="https://twitter.com/gradymcd">Twitter</a></li>
                <li><a href="https://plus.google.com/u/0/+GradyMcDowell">Google+</a></li>
                <li><a href="http://gradymcd.me">gradymcd</a></li>
                <li><a href="mailto:gradyrmcd@gmail.com">Contact</a></li>
            </ul>
            <p>This project is licensed under the <a href="https://github.com/thomaspark/bootswatch/blob/gh-pages/LICENSE">MIT License</a>.</p>

            </div>
        </div>
    </div>

</footer>
    
</body>
</html>