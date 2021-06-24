
<?php
include("config/DB_config.php");

$Event_id=$_GET['id']; //이벤트
$year=$_GET['year']; //연도
$c_name=$_GET['c_name']; //구인처명
$event=$_GET['event']; // 행사명칭
$Position=$_GET['Position']; //채용포지션
$Location=$_GET['Location']; //개최장소


//id=$id&year=$year&c_name=$c_name&event=$event&Position=$Position&Location=$Location&E_id=$E_id&C_id=$C_id
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
                    <h4>K-Move센터 행사DB: <span style="color:royalblue">&nbsp;&nbsp;<?php echo$year?> 일&nbsp;&nbsp;<?php echo$event?>&nbsp;&nbsp;<?php echo$c_name?>&nbsp;&nbsp;</span> 페이지 </h4>
                    <h5><a href="welcome.php"> <button class="btn btn-primary"><span>HOME</span></button></a>&nbsp;&nbsp; <a href="Employee_DB.php"> <button class="btn btn-primary"><span> 구직자 등록</span></button></a>&nbsp;&nbsp;<a href="Company_Result.php"><button class="btn btn-primary"><span>구인처 DB</span></button></a>&nbsp;&nbsp;<a href="Event.php"><button class="btn btn-primary"><span>행사 DB</span></button></a></h5>
                </div>

                <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>구직자 이름</th>
                                    <th>행사</th>
                                    <th>구인처 </th>
                                    <th>포지션</th>
                                    <th>면접여부</th>
                                    <th>합격여부</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php

                                if((isset($_GET['id'])))
                                {
                                    $query = "SELECT * FROM History_DB WHERE 행사_ID=$Event_id";
                                    $query_run = mysqli_query($conn, $query);
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $items)
                                        {
                                            ?>
                                            <tr>
                                                <td><a href="Employee_detail.php?id=<?php echo $items ['지원자_ID']; ?>"><?php echo $items ['이름']; ?></a></td>
                                                <td><?php echo$event?></td>
                                                <td><a href="Company_detail.php?id=<?php echo $items ['기업명']; ?>"><?php echo$c_name?></a></td>
                                                <td><?= $items['서류합격여부']; ?></td>
                                                <td><?= $items['면접합격여부'];?></td>
                                                <td><a href="Event_history.php?id= <?php echo $id;?>"><input type ='submit' class="btn btn-primary" value='편집'></a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="4">진행 또는 합격된 구직자 없읍</td>
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
                <br/>
                <h5><a href="Event_pass.php?Event_id= <?php echo $Event;?>&year=<?php echo $year;?>&event=<?php echo $event;?>&c_name=<?php echo $c_name;?>&Position=<?php echo $Position;?>&Location=<?php echo $Location;?>"><input type ='submit' class="btn btn-primary btn-lg" value='NEW 지원자'></a></h5>
            </div>
        </div>
    </div>
</div>
</body>
</html>