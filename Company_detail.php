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

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>구인처DB 상세 페이지 </title>
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
        <div class="column">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>K-Move센터 구인처 데이터베이스: <span style="color:royalblue"><?php echo$c_name?></span> 상세 정보 </h4>
                    <h5><a href="welcome.php"> <button class="btn btn-primary"><span>HOME</span></button></a>&nbsp;&nbsp;<a href="Company_Result.php"><button class="btn btn-primary"><span>구인처 DB</span></button></a>&nbsp;&nbsp;<a href="Employee_Result.php"><button class="btn btn-primary"><span>구직자 DB</span></button></a>&nbsp;&nbsp;<a href="Event.php"><button class="btn btn-primary"><span>행사 DB</span></button></a></h5>
                    <div class="col-md-12">
                        <div class="card mt-4">
                            <div class="card-body">
                                <form name="contact-form">
                                    <div class="form-group">
                                        <div class="form-group row">
                                            <label for="기업명" class="col-sm-2 col-form-label">기업명<span>*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" ID="기업명" name="기업명"  value="<?php echo$c_name?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="담당자" class="col-sm-2 col-form-label">담당자<span>*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" ID="담당자" name="담당자" value="<?php echo$c_person?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="연락처" class="col-sm-2 col-form-label">연락처<span>*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" ID="연락처" name="연락처" value="<?php echo$con_num?>" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="이메일" class="col-sm-2 col-form-label">이메일</label>
                                            <div class="col-sm-10">
                                                <input type="Email" readonly class="form-control-plaintext" ID="이메일" name="이메일" value="<?php echo$email?>" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="기업업종" class="col-sm-2 col-form-label">기업업종<span>*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" ID="기업업종" name="기업업종" value="<?php echo$c_cha?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="기업세부업종" class="col-sm-2 col-form-label">세부업종<span>*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" ID="기업세부업종" name="기업세부업종" value="<?php echo$c_De?>" required>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="form-group row">
                                            <label for="월드잡_ID" class="col-sm-2 col-form-label">월드잡 ID <span>*</span></label><br/>
                                            <div class="col-sm-10">
                                                <input type="text"  readonly class="form-control-plaintext" ID="월드잡_ID" name="월드잡_ID" value="<?php echo$W_ID?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="월드잡_PW" class="col-sm-2 col-form-label">월드잡 PW <span>*</span></label><br/>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext"  ID="월드잡_PW" name="월드잡_PW" value="<?php echo$W_PW?>" required>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="form-group row">
                                            <label for="비고" class="col-sm-2 col-form-label">비고</label>
                                            <div class="col-sm-10">
                                                <textarea  ID="비고" name="비고" readonly class="form-control-plaintext" cols="28" rows="5" ><?php echo$comments?></textarea>
                                            </div>
                                        </div>

                                    <br/>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <a href="Company_Result.php" class="btn btn-primary">&laquo; 이전 페이지</a>&nbsp;&nbsp;<a href="Company_edit.php?id= <?php echo $id; ?>"><input type ='submit' class="btn btn-primary" value='Edit'></a>&nbsp;&nbsp;<a href="DE2.php?id= <?php echo $id; ?>"><input type ='submit' class="btn btn-primary" value='삭제'></a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>


</div>
</html>