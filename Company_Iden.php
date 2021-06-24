<?php

include("config/DB_config.php");

$id = $_GET['id'];
$name = $_GET['name'];

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta http-equiv='Content-Type'content='text/html; charset=utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <title>인증번호 페이지 </title>
    <style>
        h5{ text-align: right;
            color: #000000;
            padding: 0px;
        }

        p{
            float:left;
        }



    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4><span style="color:royalblue"><?php echo $name;?></span> 등록된 월드잡 인증 번호: </h4>
                    <h5><ahref="welcome.php"> <button class="btn btn-primary"><span>HOME</span></button></a>&nbsp;&nbsp;<a href="Employee_DB.php"> <button class="btn btn-primary"><span> 구직자 등록</span></button></a>&nbsp;&nbsp;<a href="Company_Result.php"><button class="btn btn-primary"><span>구인처 DB</span></button></a>&nbsp;&nbsp;<a href="Event.php"><button class="btn btn-primary"><span>행사 DB</span></button></a></h5>
                </div>

                <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>인증번호</th>
                                    <th>등록일</th>
                                    <th>구인직종</th>
                                    <th>구인세부직종</th>

                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                if((isset($_GET['id'])))
                                {
                                    $query = "SELECT * FROM 구인처인증_DB WHERE 구인처_ID='$id'";
                                    $query_run = mysqli_query($conn, $query);
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $items)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $items['인증번호']; ?></td>
                                                <td><?= $items['등록일']; ?></td>
                                                <td><?= $items['구인직종']; ?></td>
                                                <td><?= $items['구인세부직종']; ?></td>
                                                <td><a href=".php?id= <?php echo $id;?>"><input type ='submit' class="btn btn-primary" value='편집'></a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="4">등록된 인증 번호 없음</td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h4>신규 인증 번호 등록 </h4>
                            <div class="col-md-12">
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <form name="contact-form" action="config/config2.php?" method="post" id="contact-form">
                                            <div class="from-group row">
                                                <label for="구인처" class="col-sm-2 col-form-label">구인처:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" readonly class="form-control-plaintext" ID="구인처" name="구인처" style="color:royalblue" value=<?php echo$name;?>>
                                                </div>
                                            </div>
                                            <div class="from-group row">
                                                <label for="구인처_ID" class="col-sm-2 col-form-label">ID는:</label>
                                                <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" ID="구인처_ID" name="구인처_ID" style="color:royalblue" value=<?php echo$id;?>>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="from-group row">
                                                <label for="인증번호" class="col-sm-2 col-form-label">인증번호 <span>*</span></label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" ID="인증번호" name="인증번호" placeholder="월드잡 인증번호" required>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="from-group row">
                                                <label for="구인직종" class="col-sm-2 col-form-label">구인 직종<span>*</span></label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" ID="구인직종" name="구인직종" placeholder="구인직종" required>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="from-group row">
                                                <label for="구인세부직종" class="col-sm-2 col-form-label">세부 직종<span>*</span></label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" ID="구인세부직종" name="구인세부직종" placeholder="구인 세부 직종"required>
                                                </div>
                                            </div>
                                            <br/>

                                            <h5> <button type="submit"class="btn btn-primary" name="submit" value="Submit" id="submit_form">인증번호 등록</button> </h5>

                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

