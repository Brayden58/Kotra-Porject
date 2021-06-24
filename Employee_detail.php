<?php

include("config/DB_config.php");

$id=$_GET['id'];
$result=mysqli_query($conn,"Select* from 구직자_DB where 구직자_ID=$id");


while ($res = mysqli_fetch_array($result)) {
    $e_id=$res['구직자_ID'];
    $e_date=$res['등록일'];
    $name=$res['이름'];
    $number=$res['연락처'];
    $email=$res['이메일'];
    $age=$res['나이'];
    $birth=$res['생년월일'];
    $location=$res['거주지역'];
    $visa=$res['비자'];
    $visa_due=$res['비자만료일'];
    $study=$res['전공'];
    $exp=$res['경력'];
    $exp_detail=$res['경력세부사항'];
    $hop=$res['희망직종'];
    $english=$res['영어능력'];
    $comments=$res['비고'];
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
    <title>구직자DB 상세 페이지 </title>
    <style>
        h5{ text-align: right;
            color: #000000;
            padding: 0px;
        }


    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="column">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>K-Move센터 구직자 데이터베이스: <span style="color:royalblue"><?php echo$name?></span>&nbsp;님 상세 정보 </h4>
                    <h5><a href="welcome.php"> <button class="btn btn-primary"><span>HOME</span></button></a>&nbsp;&nbsp;<a href="Company_Result.php"><button class="btn btn-primary"><span>구인처 DB</span></button></a>&nbsp;&nbsp;<a href="Employee_Result.php"><button class="btn btn-primary"><span>구직자 DB</span></button></a>&nbsp;&nbsp;<a href="Event.php"><button class="btn btn-primary"><span>행사 DB</span></button></a></h5>
                    <div class="col-md-12">
                        <div class="card mt-4">
                            <div class="card-body">
                                <form name="contact-form">
                                    <div class="form-group">
                                        <div class="form-group row">
                                            <label for="이름" class="col-sm-2 col-form-label">구직자 이름<span>*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" ID="이름" name="이름" value="<?php echo$name?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="연락처" class="col-sm-2 col-form-label">연락처<span>*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" ID="연락처" name="연락처" value="<?php echo$number?>" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="이메일" class="col-sm-2 col-form-label">이메일</label>
                                            <div class="col-sm-10">
                                                <input type="Email" readonly class="form-control-plaintext" ID="이메일" name="이메일" value="<?php echo$email?>" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="나이" class="col-sm-2 col-form-label">나이<span>*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" ID="나이" name="나이" value="<?php echo$age?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="생년월일" class="col-sm-2 col-form-label">생년월일<span>*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" ID="생년월일" name="생년월일" value="<?php echo$birth?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="거주지역" class="col-sm-2 col-form-label">현재 거주<span>*</span></label><br/>
                                            <div class="col-sm-10">
                                                <input type="text"  readonly class="form-control-plaintext" ID="거주지역" name="거주지역" value="<?php echo$location?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="비자" class="col-sm-2 col-form-label">비자<span>*</span></label><br/>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext"  ID="비자" name="비자" value="<?php echo$visa?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="비자만료일" class="col-sm-2 col-form-label">비자 만료일 <span>*</span></label><br/>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext"  ID="비자만료일" name="비자만료일" value="<?php echo$visa_due?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="전공" class="col-sm-2 col-form-label">전공 <span>*</span></label><br/>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext"  ID="전공" name="전공" value="<?php echo$study?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="경력" class="col-sm-2 col-form-label">경력 <span>*</span></label><br/>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext"  ID="경력" name="경력" value="<?php echo$exp?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="경력세부사항" class="col-sm-2 col-form-label">경력 세부사랑 <span>*</span></label><br/>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext"  ID="경력세부사항" name="경력세부사항" value="<?php echo$exp_detail?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="희망직종" class="col-sm-2 col-form-label">희망 직종 <span>*</span></label><br/>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext"  ID="희망직종" name="희망직종" value="<?php echo$hop?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="영어능력" class="col-sm-2 col-form-label">영어 능력 <span>*</span></label><br/>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext"  ID="영어능력" name="영어능력" value="<?php echo$english?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="비고" class="col-sm-2 col-form-label">비고</label>
                                            <div class="col-sm-10">
                                                <textarea ID="비고" name="비고" readonly class="form-control-plaintext" cols="28" rows="3"><?php echo$comments?></textarea>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <a href="Employee_edit.php?id= <?php echo $id; ?>"><input type ='submit' class="btn btn-primary btn-lg" value='수정'></a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>


</div>
</html>