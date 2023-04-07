<?php
$idx=$_GET['a'];
include('./db_conn.php');
$query = "select * from board where seq=$idx";
$result = mysqli_query($conn,$query);
$re = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form method="post" action="form.php">
        <div class="row d-flex justify-content-center" style = "margin-top:55px">
            <div class="col-sm-5">
            <label for="inpuTitle" class="form-label">제목</label>
                <input type="text" class="form-control"  id="utitle" name="utitle" value="<?php echo $re[1] ?>" disabled>
            </div>
            <div class="col-sm-2">
            <label for="inputTitle" class="form-label">학교 명</label>
                <input type="text" class="form-control" id="uschool" name="uschool" value="<?php echo $re[3] ?>" disabled>
            </div>
            <div class="col-sm-1">
            <label for="inputTitle" class="form-label">작성자</label>
                <input type="text" class="form-control" id="uname" name="uname" value="<?php echo $re[2] ?>" disabled>
            </div>
        </div>
        <div class="row d-flex justify-content-center" style = "margin-top:35px">
            <div class="col-sm-8">
                <label for="notice" class="form-label">내용</label>
                <textarea class="form-control" id="ucontent" rows="5" name="ucontent" disabled><?php echo $re[4] ?></textarea>
            </div>
        </div>
        <div class="d-flex justify-content-center" style = "margin-top:35px">
            <a href="index.php" class="btn btn-outline-success">목록</a>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>