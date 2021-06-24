<?php

include("config/DB_config.php");

$id=$_GET['id'];
$result=mysqli_query($conn,"Select* from 구인처_DB where 구인처_ID=$id");


while ($res = mysqli_fetch_array($result)) {
    $c_name=$res['기업명'];
        $c_person=$res['담당자'];
            $con_num=$res['연락처'];
                $email=$res['이메일'];
                    $c_cha=$res['기업업종'];
                        $c_De=$res['기업세부업종'];
                            $W_ID=$res['월드잡_ID'];
                                $W_PW=$res['월드잡_PW'];
                                    $comments=$res['비고'];
}

?>

<?php

if(Isset($_POST['update'])){

    $C_name=$_POST['기업명'];
    $C_person=$_POST['담당자'];
    $Con_num=$_POST['연락처'];
    $Email=$_POST['이메일'];
    $C_cha=$_POST['기업업종'];
    $C_De=$_POST['기업세부업종'];
    $WO_ID=$_POST['월드잡_ID'];
    $WO_PW=$_POST['월드잡_PW'];
    $Comments=$_POST['비고'];

    $result=mysqli_query($conn,"UPDATE 구인처_DB SET 기업명='$C_name',담당자='$C_person',연락처='$Con_num',이메일='$Email',기업업종='$C_cha',
     기업세부업종='$C_De', 월드잡_ID='$WO_ID', 월드잡_PW='$WO_PW',비고='$Comments' Where 구인처_ID='$id'");

    if($result) {
        header("location:Company_detail.php?id=$id");
    }
    else {
        echo "Failed";
}
}
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta http-equiv='Content-Type'content='text/html; charset=utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>구인처 수정 </title>
    <style>
        h5{ text-align: right;
            color: #000000;
            padding: 0px;
            float:right;
        }

    </style>

</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>구인처: <span style="color:royalblue">[<?php echo$c_name?>]</span>정보 수정 페이지</h4>
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-body">
                    <form name="contact-form" action="" method="post" id="contact-form">
                        <div class="form-group row">
                            <label for="기업명" class="col-sm-2 col-form-label">기업명<span>*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" ID="기업명" name="기업명"  value="<?php echo$c_name?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="담당자" class="col-sm-2 col-form-label">담당자<span>*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" ID="담당자" name="담당자" value="<?php echo$c_person?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="연락처" class="col-sm-2 col-form-label">연락처<span>*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" ID="연락처" name="연락처" value="<?php echo$con_num?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="이메일" class="col-sm-2 col-form-label">이메일</label>
                            <div class="col-sm-10">
                                <input type="Email" class="form-control" ID="이메일" name="이메일" value="<?php echo$email?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="기업업종" class="col-sm-2 col-form-label">기업업종<span>*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" ID="기업업종" name="기업업종" value="<?php echo$c_cha?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="기업세부업종" class="col-sm-2 col-form-label">세부업종<span>*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" ID="기업세부업종" name="기업세부업종" value="<?php echo$c_De?>" required>
                            </div>
                        </div>
                        <br/>
                        <div class="form-group row">
                            <label for="월드잡_ID" class="col-sm-2 col-form-label">월드잡 ID <span>*</span></label><br/>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" ID="월드잡_ID" name="월드잡_ID" value="<?php echo$W_ID?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="월드잡_PW" class="col-sm-2 col-form-label">월드잡 PW <span>*</span></label><br/>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  ID="월드잡_PW" name="월드잡_PW" value="<?php echo$W_PW?>" required>
                            </div>
                        </div>
                        <br/>
                        <div class="form-group row">
                            <label for="비고" class="col-sm-2 col-form-label">비고</label>
                            <div class="col-sm-10">
                                <textarea  ID="비고" name="비고" class="form-control" cols="28" rows="5"><?php echo$comments?></textarea>
                            </div>
                        </div>
                        <br/>
                        <h5><button type="submit" class="btn btn-primary" name="update" value="update" id="submit_form"> 재등록 </button></h5>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


