<?php

include("config/DB_config.php");

$id = $_GET['id'];
$result = mysqli_query($conn, "Select* from 구직자_DB where 구직자_ID=$id");


while ($res = mysqli_fetch_array($result)) {
    $Name=$res['이름'];
        $Email=$res['이메일'];
            $Contact_Num=$res['연락처'];
                $Age=$res['나이'];
                    $Birth=$res['생년월일'];
                        $Location=$res['거주지역'];
                            $Visa=$res['비자'];
                                $Visa_Due=$res['비자만료일'];
                                    $Study=$res['전공'];
                                        $EXP=$res['경력'];
                                            $EXP_DE=$res['경력세부사항'];
                                                $Hop=$res['희망직종'];
                                                    $E_level=$res['영어능력'];
                                                        $Comments=$res['비고'];
}
?>

<?php

if(Isset($_POST['update'])) // when click on Update button
{
    $Ename=$_POST['이름'];
    $Eemail=$_POST['이메일'];
    $Econtact_Num=$_POST['연락처'];
    $Eage=$_POST['나이'];
    $Ebirth=$_POST['생년월일'];
    $Elocation=$_POST['거주지역'];
    $Evisa=$_POST['비자'];
    $Evisa_Due=$_POST['비자만료일'];
    $Estudy=$_POST['전공'];
    $EeXP=$_POST['경력'];
    $EeXP_DE=$_POST['경력세부사항'];
    $Ehop=$_POST['희망직종'];
    $Ee_level=$_POST['영어능력'];
    $Ecomments=$_POST['비고'];

    $edit = mysqli_query($conn,"UPDATE 구직자_DB SET 이름 ='$Ename',이메일='$Eemail', 연락처='$Econtact_Num', 나이='$Eage', 생년월일='$Ebirth', 거주지역='$Elocation', 비자='$Evisa', 비자만료일='$Evisa_Due', 전공='$Estudy', 경력='$EeXP', 경력세부사항='$EeXP_DE',
     희망직종='$Ehop',영어능력='$Ee_level', 비고='$Ecomments' WHERE 구직자_ID='$id'");

    if($edit){
        header("location:Employee_detail.php?id=$id");
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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <title>구직자 검색 </title>
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
                    <h4> K-move 센터 구직자 DB: <span style="color:royalblue"><?php echo$Name?></span>님 수정 페이지</h4>
                    <h5><a href="welcome.php"> <button class="btn btn-primary"><span>HOME</span></button></a>&nbsp;&nbsp;<a href="Company_Result.php"><button class="btn btn-primary"><span>구인처 DB</span></button></a>&nbsp;&nbsp;<a href="Event.php"><button class="btn btn-primary"><span>행사 DB</span></button></a></h5>

                <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="card-body">
                            <form name="contact-form" action="" method="post" id="contact-form">
                                <div class="form-group">
                                <div class="form-group row">
                                    <label for="이름" class="col-sm-2 col-form-label">구직자 이름<span>*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" ID="이름" name="이름" value="<?php echo$Name?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="이메일" class="col-sm-2 col-form-label">이메일</label>
                                    <div class="col-sm-10">
                                        <input type="Email" class="form-control" ID="이메일" name="이메일" value="<?php echo$Email?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="연락처" class="col-sm-2 col-form-label">연락처<span>*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" ID="연락처" name="연락처" value="<?php echo$Contact_Num?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="나이" class="col-sm-2 col-form-label">나이<span>*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" ID="나이" name="나이" value="<?php echo$Age?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="생년월일" class="col-sm-2 col-form-label">생년월일<span>*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" ID="생년월일" name="생년월일" value="<?php echo$Birth?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="거주지역" class="col-sm-2 col-form-label">현재 거주자역<span>*</span></label><br/>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" ID="거주지역" name="거주지역" value="<?php echo$Location?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="비자" class="col-sm-2 col-form-label">비자<span>*</span></label><br/>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  ID="비자" name="비자" value="<?php echo$Visa?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="비자만료일" class="col-sm-2 col-form-label">비자 만료일 <span>*</span></label><br/>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  ID="비자만료일" name="비자만료일" value="<?php echo$Visa_Due?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="전공" class="col-sm-2 col-form-label">전공 <span>*</span></label><br/>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  ID="전공" name="전공" value="<?php echo$Study?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="경력" class="col-sm-2 col-form-label">경력 <span>*</span></label><br/>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  ID="경력" name="경력" value="<?php echo$EXP?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="경력세부사항" class="col-sm-2 col-form-label">경력 세부사랑 <span>*</span></label><br/>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  ID="경력세부사항" name="경력세부사항" value="<?php echo$EXP_DE?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="희망직종" class="col-sm-2 col-form-label">희망 직종 <span>*</span></label><br/>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  ID="희망직종" name="희망직종" value="<?php echo$Hop?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="영어능력" class="col-sm-2 col-form-label">영어 능력 <span>*</span></label><br/>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  ID="영어능력" name="영어능력" value="<?php echo$E_level?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="비고" class="col-sm-2 col-form-label">비고</label>
                                    <div class="col-sm-10">
                                        <textarea ID="비고" name="비고" class="form-control" cols="28" rows="5"><?php echo$Comments?></textarea>
                                    </div>
                                </div>
                                <br/>

                                <h5><button type="submit" class="btn btn-primary" name="update" value="update" id="submit_form"> 재등록 </button></h5>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
