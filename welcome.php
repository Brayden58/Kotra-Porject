<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {
?>


<!DOCTYPE html>
    <html lang="en">
<head>
    <meta http-equiv='Content-Type'content='text/html; charset=utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{ font: 14px sans-serif; text-align: center; }
        footer{ font: 14px sans-serif; text-align:-moz-right }

        .button {
            display: inline-block;
            border-radius: 4px;
            background-color: forestgreen;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            width: 450px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        .}




    </style>
</head>
<body>
<h1 class="my-5">KOTRA 시드니 무역관</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 ><img src="Image/k-move.png" width="250px">데이터베이스 센터</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-horizontal">
                            <a href="Employee_Result.php">
                                <button class="button" style="vertical-align:middle"><span>구직자 DB </span></button>
                            </a>
                            <br/>
                            <br/>
                            <a href="Company_Result.php">
                                <button class="button" style="vertical-align:middle"><span>구인처 DB</span></button>
                            </a>
                            <br/>
                            <br/>
                            <a href="Event.php">
                                <button class="button" style="vertical-align:middle"><span>K-move 행사 DB </span></button>
                            </a>
                            <br/>
                            <br/>
                            </div>
                        </div>
                    </div>

                     <div class="card-footer">
                             <a href="logout.php" class="btn btn-warning btn-lg">LOGOUT</a>
                      </div>
            </div>
        </div>

    </div>
    </div>
</div>
</body>
</html>
    <?php
}else {
    header("Location: login.php");
}
?>