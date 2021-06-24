
<?php
include("config/DB_config.php");

$Event_id=$_GET['id']; //이벤트
$year=$_GET['year']; //연도
$c_name=$_GET['c_name']; //구인처명
$event=$_GET['event']; // 행사명칭
$Position=$_GET['Position']; //채용포지션
$Location=$_GET['Location']; //개최장소

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
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>K-Move센터 행사DB: <span style="color:royalblue"><?php echo$year?>&nbsp;<?php echo$event?>&nbsp;<?php echo$c_name?></span>성과  </h4>
                    <h5><a href="welcome.php"> <button class="btn btn-primary"><span>HOME</span></button></a>&nbsp;&nbsp; <a href="Employee_DB.php"> <button class="btn btn-primary"><span> 구직자 등록</span></button></a>&nbsp;&nbsp;<a href="Company_Result.php"><button class="btn btn-primary"><span>구인처 DB</span></button></a>&nbsp;&nbsp;<a href="Event.php"><button class="btn btn-primary"><span>행사 DB</span></button></a></h5>
                </div>
                <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h4> 행사 합격자 검색 및 추가  </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-7">
                                    <form action="" method="GET">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" placeholder="합격자 인적 사항 추가">
                                            <a href="Event_pass.php?Event_id= <?php echo $Event;?>&year=<?php echo $year;?>&event=<?php echo $event;?>&c_name=<?php echo $c_name;?>&Position=<?php echo $Position;?>&Location=<?php echo $Location;?>"><button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card mt-4"
                        <div class="card-body">
                            <table class="table table-bordered" style="text-align: center">
                                <thead>
                                <tr>
                                    <th>구직자 ID</th>
                                    <th>이름</th>
                                    <th>연락처</th>
                                    <th>이메일</th>
                                    <th>희망 직종</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $con = mysqli_connect("kmove.cjvyh8u4busj.ap-southeast-2.rds.amazonaws.com","admin","------------","KOTRASYD");


                                if(isset($_GET['search']))
                                {
                                    $search = $_GET['search'];
                                    $query = "SELECT * FROM 구직자_DB WHERE CONCAT(구직자_ID,이름,희망직종,연락처,이메일) LIKE '%$search%'";

                                    $query_run = mysqli_query($con, $query);
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $items)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $items['구직자_ID']; ?></td>
                                                <td><?= $items['이름']; ?></td>
                                                <td><?= $items['연락처']; ?></td>
                                                <td><?= $items['이메일']; ?></td>
                                                <td><?= $items['희망직종']; ?></td>


                                                <td><a href="config/config4.php?E_id=<?php echo $items ['구직자_ID'];?>&E_name=<?php echo $items ['이름'];?>&Event_id=<?php  $_SESSION[$Event_id];?> &year=<?php $_SESSION[$year];?> &c_name=<?php  $_SESSION[$c_name]; ?>&event= <?php $_SESSION[$event];?> &Position= <?php  $_SESSION[$Position]; ?> &Location=<?php $_SESSION[$Location];?>">ADD</a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="6">No Record Found</td>
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
    </div>
</div>
</div>
</body>
</html>