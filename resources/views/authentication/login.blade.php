
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome, Login</title>
   <link rel="stylesheet" id="Font_Awesome-css" href="css/font-awesome.min.css" type="text/css" media="all">
    <!--        bootstrap 4     -->
    <link rel="stylesheet" id="Bootstrap_css-css" href="css/bootstrap.min3428.css?ver=4.5.2" type="text/css"
    media="all">
    <!--    material design for bootstrap stylesheet    -->
    <link rel="stylesheet" id="MDB-css" href="css/mdb.min3428.css" type="text/css" media="all">
    <!--        my personal stylesheet-->
    <link rel="stylesheet" id="MDB-css" href="css/regstyle.css" type="text/css" media="all">
    <!--        for datepicker/age calculation-->
    <link rel="stylesheet" id="MDB-css" href="css/datepicker.css" type="text/css" media="all">
    <link rel="stylesheet" id="MDB-css" href="css/bootstrap-select.min.css" type="text/css" media="all">>
    <link href="css/css.css" rel="stylesheet">
    
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.mdb-select').material_select();
        });

    </script>
</head>

<body>
    <div id="container" class="container-fluid">
        <div class="row-fluid">
            <div id="full" class="col-md-6 col-md-offset-1 ">
                <div class="col-md-7 col-xs-7">
                    <img id="img" src="img/rembir.png">
                </div>
                <div class="col-md-12 col-xs-12">
                        <h2 id="pre"
                        style="color:white;font-family: GillSans, Calibri, Trebuchet, sans-serif">
                    <p id="pre">
                        Welcome<br>We are putting patient files in one place<br>For safer and easier access .
                    </p>
                    </h2>
                </div>
            </div>
            {{Form::open(array('url' => '/login', 'method' => 'post', 'class' => 'col-md-4',
            'id' => 'form'))}}
                <div class="col-md-12">
                    <div style="color:red" id="err"></div>
                    <div style="background-color:#cdcdcd;border: 2px solid #c4c4c4c4" class="jumbotron">
                        <h2 style="color:#790000">Login</h2>
                        <form class="form-horizontal" role="form">
                            <div class="md-form">
                                <i style="color:#790000" class="fa fa-user prefix"></i>
                                <input style="border-bottom:.5px solid blue" type="text" name="username"
                                id="form2" class="form-control">
                                <label for="form2">Username</label>
                            </div>
                            <br>
                            <div class="md-form">
                                <i style="color:#790000" class="fa fa-lock prefix"></i>
                                <input style="border-bottom:.5px solid blue" type="password"
                                name="password" id="form2" class="form-control">
                                <label for="form2">Password</label>
                            </div>
                            <div id="a" class="md-form form-group">
                                <button class="btn btn-default btn-rounded">Login</button>
                                <a style="color:#790000;vertical-align: middle" href="#">
                                    forgot password?</a>
                            </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
