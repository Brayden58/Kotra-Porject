
<?php
$host = "kmove.cjvyh8u4busj.ap-southeast-2.rds.amazonaws.com";
$userName = "admin";
$password = "xxxx";
$dbName = "KOTRASYD";

?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
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
                    <h4>K-Move 행사 DB:  <spn style="color:Red">NEW! </spn> 구인처 추가 </h4>
                    <h5><a href="welcome.php"> <button class="btn btn-primary"><span>HOME</span></button></a>&nbsp;&nbsp;<a href="Employee_Result.php"><button class="btn btn-primary"><span>구직자 DB</span></button></a>&nbsp;&nbsp;<a href="Event.php"><button class="btn btn-primary"><span>행사 DB</span></button></a></h5>
                </div>
                <div class="col-md-12">
                    <div class="card-body">
                        <form name="contact-form" action="config/config3.php" method="post" id="contact-form">
                            <div class="form-group row">
                                <label for="행사명칭" class="col-sm-2 col-form-label">행사 명칭<span>*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ID="행사명칭" name="행사명칭" placeholder="예) 대양주 취업 박람회" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="연도" class="col-sm-2 col-form-label">행사 개최 연도<span>*</span></label>
                                <div class="col-sm-10">
                                    <input type="Date" class="form-control" ID="연도"  name="연도"  required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="개최장소" class="col-sm-2 col-form-label">개최장소<span>*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ID="개최장소" name="개최장소" placeholder="행사 개최 장소" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="구인처명" class="col-sm-2 col-form-label">행사 참여 구인처명</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ID="구인처명" name="구인처명" placeholder="예) Kotra 시드니무역관" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="채용포지션" class="col-sm-2 col-form-label">채용포지션<span>*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ID="채용포지션" name="채용포지션" placeholder="채용 하고자 하는 직군" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="성과" class="col-sm-2 col-form-label">성과</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" ID="성과" name="성과" cols="28" rows="5" placeholder="행사 성과"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="비고" class="col-sm-2 col-form-label">비고 </label><br/>
                                <div class="col-sm-10">
                                    <textarea type="text"  class="form-control" ID="비고" name="비고" cols="28" rows="5" placeholder="행사 관련 추가 설명"></textarea>
                                </div>
                            </div>
                            <h5><button type="submit" class="btn btn-primary btn-lg" name="submit" value="Submit" id="submit_form">등록</button></h5>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>K-Move 행사DB 검색 창</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <form action="" method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="행사명 또는 개최 년도 검색">
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
                            <th>행사명칭</th>
                            <th>개최일</th>
                            <th>장소</th>
                            <th>구인처</th>
                            <th>포지션</th>
                            <th>성과</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $con = mysqli_connect("kmove.cjvyh8u4busj.ap-southeast-2.rds.amazonaws.com","admin","---------","KOTRASYD");

                        if(isset($_GET['search']))
                        {
                            $filtervalues = $_GET['search'];
                            $query = "SELECT * FROM 행사_DB WHERE CONCAT(행사명칭,연도,개최장소,구인처명,채용포지션) LIKE '%$filtervalues%' ";
                            $query_run = mysqli_query($con, $query);
                            $res=mysqli_fetch_array($result);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $items)
                                {
                                    ?>

                                    <tr>
                                        <td><?= $items['행사_ID']; ?></td>
                                        <td><?= $items['행사명칭']; ?></td>
                                        <td><?= $items['연도']; ?></td>
                                        <td><?= $items['개최장소']; ?></td>
                                        <td><?=$items['구인처명']; ?></td>
                                        <td><?= $items['채용포지션']; ?></td>

                                        <td><a href="RE_Event.php?c_name=<?php echo $items['구인처명'];?>id=<?php echo $items['행사_ID'];?>&event=<?php echo $items['행사명칭'];?>&year=<?php echo $items['연도'];?>&c_name=<?php echo $items['구인처명'];?>&Position=<?php echo $items['채용포지션'];?>&Location=<?php echo $items['개최장소'];?>">성과</a></td>
                                        <td><a href="event_detail.php?id=<?php echo $items['구인처_ID'];?>">상세정보</a></td>
                                        <td><a href="Company_edit.php?id= <?php echo $items['구인처_ID'];?>">편집</a></td>
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