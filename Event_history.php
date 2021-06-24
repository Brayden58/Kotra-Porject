<?php
$host = "kmove.cjvyh8u4busj.ap-southeast-2.rds.amazonaws.com";
$userName = "admin";
$password = "xxx";
$dbName = "KOTRASYD";



$E_id=  filter_input(INPUT_POST,'지원자_ID');
$C_id=  filter_input(INPUT_POST,'구인처_ID');
$Event_id=  filter_input(INPUT_POST,'행사_ID');
$Year=  filter_input(INPUT_POST,'연도');
$A_pa=  filter_input(INPUT_POST,'지원경로');
$Position=  filter_input(INPUT_POST,'포지션');
$Paper=  filter_input(INPUT_POST,'서류합격여부');
$Interview=  filter_input(INPUT_POST,'면접합격여부');


// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection


if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
}
else {
    $sql = "INSERT INTO History_DB (지원자_ID,구인처_ID,행사_ID,연도,지원경로,포지션,서류합격여부,면접합격여부)
VALUES ('$E_id','$C_id','$Event_id','$Year','$A_pa','$Position','$Paper','$Interview')";
    if ($conn->query($sql)) {
        header("location:RE_Event.php?");

    } else {
        echo "Error: " . $sql . "
" . $conn->error;
    }
    $conn->close();
}

?>



<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <title>구인처DB 검색</title>
    <style>
        h5{ text-align: right;
            color: #000000;
            padding: 0px;
        }



    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <h1><img src="Image/k-move.png" width="200px">KOTRA 시드니 무역관 </h1>
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4>시드니 무역관 K-Move History DB </h4>
                    <h5><a href="welcome.php"> <button class="btn btn-primary"><span>HOME</span></button></a>&nbsp;&nbsp;<a href="Employee_Result.php"><button class="btn btn-primary"><span>구직자 DB</span></button></a>&nbsp;&nbsp;<a href="Event.php"><button class="btn btn-primary"><span>행사 DB</span></button></a></h5>
                </div>
                <div class="col-md-12">
                    <div class="card-body">
                        <form name="contact-form" action="" method="post" id="contact-form">
                            <div class="form-group row">
                                <label for="지원자_ID" class="col-sm-2 col-form-label">기업명<span>*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ID="지원자_ID" name="지원자_ID" placeholder="지원자 ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="구인처_ID" class="col-sm-2 col-form-label">담당자<span>*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ID="구인처_ID" name="구인처_ID" placeholder="업체 담당자 이름">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="행사_ID" class="col-sm-2 col-form-label">연락처<span>*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ID="행사_ID" name="행사_ID" placeholder="담당자 연락처" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="연도" class="col-sm-2 col-form-label">이메일</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" ID="연도"  name="연도"  placeholder="구인처 이메일" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="지원경로" class="col-sm-2 col-form-label">기업업종</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ID="지원경로" name="지원경로" placeholder="기업업종" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="서류합격여부" class="col-sm-2 col-form-label">서류합격</label><br/>
                                <div class="col-sm-10">
                                    <select ID="서류합격여부"  name="서류합격여부" class="form-select" aria-label="Default select example" >
                                        <option selected>합격여부 선택해 주세요</option>
                                        <option value="YES">YES</option>
                                        <option value="NO">NO</option>
                                        <option value="보류">보류</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="면접합격여부" class="col-sm-2 col-form-label">면접합격</label><br/>
                                <div class="col-sm-10">
                                    <select ID="면접합격여부"  name="면접합격여부" class="form-select" aria-label="Default select example" >
                                        <option selected>합격 여부 선택해 주세요</option>
                                        <option value="YES">YES</option>
                                        <option value="NO">NO</option>
                                        <option value="보류">보류</option>
                                    </select>
                                </div>
                            </div>
                            <br/>
                            <h5><button type="submit" class="btn btn-primary btn-lg" name="submit" value="Submit" id="submit_form">등록</button></h5>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
