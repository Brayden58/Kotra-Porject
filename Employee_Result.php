<?php
include 'config/DB_config.php';

$db_handle = new DBController();
$items = $db_handle->runQuery("select * from 구직자_DB");

if (isset($_POST["export"])) {
    $filename = "Export_excel.xls";
    header('Content-Encoding: UTF-8');
    header('Content-Type: text/csv; charset=utf-8' );
    header(sprintf( 'Content-Disposition: attachment; filename=my-csv-%s.csv', date( 'dmY-His' ) ) );
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    $df = fopen( 'php://output', 'w' );

    $isPrintHeader = false;
    if (! empty($items)) {
        fputs( $df, "\xEF\xBB\xBF" );
        foreach ($items as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
                echo "\xEF\xBB\xBF";
            }
            echo implode("\t", array_values($row)) . "\n";

        }
    }
    exit();
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
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>KOTRA Sydney 무역관 K-move 센터 구직자 DB</h4>
                    <h5><a href="welcome.php"> <button class="btn btn-primary"><span>HOME</span></button></a>&nbsp;&nbsp; <a href="Employee_DB.php"> <button class="btn btn-primary"><span> 구직자 등록</span></button></a>&nbsp;&nbsp;<a href="Company_Result.php"><button class="btn btn-primary"><span>구인처 DB</span></button></a>&nbsp;&nbsp;<a href="Event.php"><button class="btn btn-primary"><span>행사 DB</span></button></a></h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-horizontal">
                            <form action="" method="GET">
                                <div class="input-group mb-3">
                                    <div class="form-outline">
                                        <input type="search" class="form-control" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" placeholder="구직자 ID/이름/이메일">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="form-horizontal">
                            <form action="" method="get">
                                <div class="from-group">
                                    <label for="비자">비자조건:</label>
                                    <div class="col-lg-4"></div>
                                    <input type="radio" name="비자1" Value="졸업생비자">&nbsp;졸업생비자&nbsp;
                                    <input type="radio" name="비자2" Value="워킹홀리데이">&nbsp;워킹홀리데이비자&nbsp;
                                    <input type="radio" name="비자3" Value="학생비자">&nbsp;학생비자&nbsp;
                                    <input type="radio" name="비자4" Value="파트너비자">&nbsp;파트너비자&nbsp;
                                    <input type="radio" name="비자5" Value="영주권/시민권">&nbsp;영주권/시민권&nbsp;
                                </div>
                                <br/>
                                <div class="from-group">
                                    <label for="전공" name="전공">전공:</label>
                                    <div class="col-lg-4"></div>
                                    <input type="radio" name="전공" Value="IT">&nbsp;IT&nbsp;
                                    <input type="radio" name="전공" Value="회계">&nbsp;회계&nbsp;
                                    <input type="radio" name="전공" Value="디자인/마켓팅">&nbsp;디자인&nbsp;
                                    <input type="radio" name="전공" Value="엔지니어링">&nbsp;엔지니어링&nbsp;
                                    <input type="radio" name="전공" Value="법/외교">&nbsp;법/외교&nbsp;
                                    <input type="radio" name="전공" Value="요리">&nbsp;요리&nbsp;
                                    <input type="radio" name="전공" Value="건축">&nbsp;건축&nbsp;
                                </div>
                                <br/>
                                <div class="from-group">
                                    <label name="희망직종" > 희망 직종:</label>
                                    <div class="col-lg-4"></div>
                                    <input type="radio" name="희망직종" Value="사무/관리직">&nbsp;사무/관리&nbsp;
                                    <input type="radio" name="희망직종" Value="영업직">&nbsp;세일즈&nbsp;
                                    <input type="radio" name="희망직종" Value="IT">&nbsp;IT&nbsp;
                                    <input type="radio" name="희망직종" Value="회계">&nbsp;회계&nbsp;
                                    <input type="radio" name="희망직종" Value="요리서비스직">&nbsp;요리&nbsp;
                                    <input type="radio" name="희망직종" Value="기타서비스직">&nbsp;기타서비스직&nbsp;
                                    <input type="radio" name="희망직종" Value="생산직">&nbsp;생산직&nbsp;
                                    <input type="radio" name="희망직종" Value="연구직">&nbsp;연구직&nbsp;
                                    <input type="radio" name="희망직종" Value="기능직">&nbsp;기능직&nbsp;
                                    <input type="radio" name="희망직종" Value="법/행정">&nbsp;법/행정&nbsp;
                                </div>
                                <br/>
                                <div class="nativeDatePicker">
                                    <label for="등록일"> 검색 희망 등록일 검색 (From)</label>
                                    <input type="date" id="등록일" name="등록일" >
                                </div>
                                <br/>

                                <button type="submit" class="btn btn-primary">Search</button> <input type="reset" class="btn btn-primary"><br>
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
                            <th>구직자 ID</th>
                            <th>이름</th>
                            <th>연락처</th>
                            <th>이메일</th>
                            <th>지역</th>
                            <th>비자</th>
                            <th>만료일</th>
                            <th>희망 직종</th>
                        </tr>
                        </thead>

                    <tbody>
                    <?php
                    $con = mysqli_connect("kmove.cjvyh8u4busj.ap-southeast-2.rds.amazonaws.com","admin","------","KOTRASYD");

                    if(isset($_GET['search']))
                    {
                        $search = $_GET['search'];
                        $visa=$_GET['비자1'];
                        $visa2=$_GET['비자2'];
                        $visa3=$_GET['비자3'];
                        $visa4=$_GET['비자4'];
                        $visa5=$_GET['비자5'];
                        $Study=$_GET['전공'];
                        $Hop=$_GET['희망직종'];
                        $date=$_GET['등록일'];

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
                                    <td><?= $items['거주지역']; ?></td>
                                    <td><?= $items['비자']; ?></td>
                                    <td><?= $items['비자만료일']; ?></td>
                                    <td><?= $items['희망직종']; ?></td>
                                    <td><a href="Employee_detail.php?id=<?php echo $items ['구직자_ID']; ?>">상세</a></td>
                                    <td><a href="Employee_edit.php?id=<?php echo $items ['구직자_ID']; ?>">편집</a></td>
                                    <td><a href="delete.php?id=<?php echo $items ['구직자_ID']; ?>">삭제</a></td>
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
                    <div class="btn">
                        <form action="" method="post">
                            <button type="submit" id="btnExport" name='export'
                                    value="Export to Excel" class="btn btn-info">Export to
                                excel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</div>
</html>