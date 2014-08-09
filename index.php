<!DOCTYPE html>

<html>
<head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <!-- jquery -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- jquery UI-->
    <script src="//code.jquery.com/ui/1.11.0/jqueryui/1.11.0/jquery-ui.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


    <style>


        body {
            text-align: center;
            background-image: url("galaxy.jpg");
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-repeat: no-repeat;
            background-position: position;

        }

        h1 {
            text-align: center;
            color: white;
        }

        p {
            text-align: center;
            color: white;
        }

        h3 {
            text-align: center;
            color: white;
        }

        @media (max-width: 1000px) {

            .sliders {

                width: auto;
                margin-left: auto;
                margin-right: auto;

            }

            p {
                text-align: center;
                color: white;
            <!-- font-size : 8 px;
            -->
            }

            h3 {
                text-align: center;
                color: white;
            <!-- font-size : 16 px;
            -->
            }

            body {
                text-align: center;
                background-image: url("mobile.jpg");
                background-size: cover;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-repeat: no-repeat;
                background-position: center center fixed;

            }

        }


    </style>


</head>

<body>
<header class="navbar">
    <div class="container">


        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">CoGeo</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="places.php">Search</a></li>
                        <li><a href="submit.php">Add Spot</a></li>


                    </ul>


                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
</header>
<div class="container">
    <h1> Welcome to CoGeo</h1>

    <p>
        CoGeo is your one stop shop for everything adventurous,
        exciting and romantic when in Melbourne! Use our add location
        link below to share one of your favourite hidden gems.
        or click the search to see what other people have shared.
    </p>

    <h3> Get CoGeo-ing!!!</h3>
    </br>
    </br>
    <!-- Indicates a successful or positive action -->
    <a href="submit.php">
        <button type="button" class="btn btn-success btn-lg">Add Location</button>
    </a>
    </br>
    </br>
    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
    <a href="places.php">
        <button type="button" class="btn btn-primary btn-lg">Search Spots</button>
    </a>

</div>

</br>
</br>
</br>
</br>

<script>


</script>

</body>

</html>