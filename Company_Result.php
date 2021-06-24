
<?php
$host = "kmove.cjvyh8u4busj.ap-southeast-2.rds.amazonaws.com";
$userName = "admin";
$password = "xxx";
$dbName = "KOTRASYD";

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
                    <h4>시드니 무역관 K-Move 신규 구인처 등록 </h4>
                    <h5><a href="welcome.php"> <button class="btn btn-primary"><span>HOME</span></button></a>&nbsp;&nbsp;<a href="Employee_Result.php"><button class="btn btn-primary"><span>구직자 DB</span></button></a>&nbsp;&nbsp;<a href="Event.php"><button class="btn btn-primary"><span>행사 DB</span></button></a></h5>
            </div>
            <div class="col-md-12">
                    <div class="card-body">
                        <form name="contact-form" action="config/config1.php" method="post" id="contact-form">
                            <div class="form-group row">
                                <label for="기업명" class="col-sm-2 col-form-label">기업명<span>*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ID="기업명" name="기업명" placeholder="기업명" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="담당자" class="col-sm-2 col-form-label">담당자<span>*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ID="담당자" name="담당자" placeholder="업체 담당자 이름" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="연락처" class="col-sm-2 col-form-label">연락처<span>*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ID="연락처" name="연락처" placeholder="담당자 연락처" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="이메일" class="col-sm-2 col-form-label">이메일</label>
                                <div class="col-sm-10">
                                    <input type="Email" class="form-control" ID="이메일" name="이메일" placeholder="구인처 이메일" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="기업업종" class="col-sm-2 col-form-label">기업업종<span>*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ID="기업업종" name="기업업종" placeholder="기업업종" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="기업세부업종" class="col-sm-2 col-form-label">세부업종<span>*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ID="기업세부업종" name="기업세부업종" placeholder="세부업종" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="월드잡_ID" class="col-sm-2 col-form-label">월드잡 ID <span>*</span></label><br/>
                                <div class="col-sm-10">
                                    <input type="text"  class="form-control" ID="월드잡_ID" name="월드잡_ID" placeholder="월드잡 등록된 구인처 ID" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="월드잡_PW" class="col-sm-2 col-form-label">구인처 Password <span>*</span></label><br/>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"  ID="월드잡_PW" name="월드잡_PW" placeholder="월드잡 등록된 구인처 Password" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="비고" class="col-sm-2 col-form-label">비고</label>
                                <div class="col-sm-10">
                                    <textarea ID="비고" class="form-control" cols="28" rows="5" placeholder="※ 구인처 관련 특이 사항 기재 부탁 드립니다."> </textarea>
                                </div>
                            </div>
                            <br/>
                            <h5><button type="submit" class="btn btn-primary btn-lg" name="submit" value="Submit" id="submit_form">등록</button></h5>
                        </form>
                    </div>
            </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>시드니 무역관 글로벌 인재 DB 구인처 검색 </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <form action="" method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="구인처 ID 또는 기업명 검색">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-body">
                    <table class="table table-bordered" style="text-align: center">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>기업명</th>
                            <th>담당자</th>
                            <th>연락처</th>
                            <th>이메일</th>
                            <th>월드잡 ID</th>
                            <th>월드잡 PW</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $con = mysqli_connect("kmove.cjvyh8u4busj.ap-southeast-2.rds.amazonaws.com","admin","-------","KOTRASYD");

                        if(isset($_GET['search']))
                        {
                            $filtervalues = $_GET['search'];
                            $query = "SELECT * FROM 구인처_DB WHERE CONCAT(구인처_ID,기업명) LIKE '%$filtervalues%' ";
                            $query_run = mysqli_query($con, $query);
                            $res=mysqli_fetch_array($result);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $items)
                                {
                                    ?>

                                    <tr>
                                        <td><?= $items['구인처_ID']; ?></td>
                                        <td><?= $items['기업명']; ?></td>
                                        <td><?= $items['담당자']; ?></td>
                                        <td><?= $items['연락처']; ?></td>
                                        <td><?= $items['이메일']; ?></td>
                                        <td><?= $items['월드잡_ID']; ?></td>
                                        <td><?= $items['월드잡_PW']; ?></td>

                                        <td><a href="Company_detail.php?id=<?php echo $items['구인처_ID'];?>">상세정보</a></td>
                                        <td><a href="Company_Iden.php?id=<?php echo $items['구인처_ID'];?>& name=<?php echo $items['기업명'];?>">인증번호</a></td>
                                        <td><a href="DE2.php?id= <?php echo $items['구인처_ID'];?>">삭제</a></td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                ?>
                                <tr>
                                    <td colspan="8">No Record Found</td>
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
    </div>
</div>

</body>
</html>