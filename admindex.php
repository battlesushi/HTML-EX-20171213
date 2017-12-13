<?php
session_start();
include("fun.inc.php");
include("db_connect.php");
if ($_SESSION['account'] != null) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>莊政宏</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?php head() ?>
        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
            }

            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            .row.content {
                height: 450px
            }

            /* Set gray background color and 100% height */
            .sidenav {
                padding-top: 20px;
                background-color: #f1f1f1;
                height: 100%;
            }

            /* Set black background color, white text and some padding */
            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }

                .row.content {
                    height: auto;
                }
            }
        </style>
    </head>
    <body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">莊政宏</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <?php navbar(0) ?>
            </div>
        </div>
    </nav>

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <p align="center"><img src="Cheng_Hung_Chuang.jpg" alt="莊政宏"></p>
                <div style="text-align: center;"><p><b><i>莊政宏</i></b></p></div>
                <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>教育人員</p>
                <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>台中，台灣</p>
                <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><a
                            href="mailto:chchuang@asia.edu.tw">chchuang@asia.edu.tw</a></p>
                <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>+886-4-23323456 ext.48035</p>

            </div>
            <div class="col-sm-10 text-left">
                <h2 class="w3-text-grey w3-padding-16"><a href="register.php"><i
                                class="fa fa-plus" aria-hidden="true"></i>新增使用者</a></h2>
                <div class="w3-container">
                    <?php
                    //將資料庫裡的所有會員資料顯示在畫面上
                    $sql = "SELECT * FROM userList";
                    $result = mysqli_query($link, $sql);
                    $count=$result->num_rows;
                    ?>
                    <div class="container" style="width: 100%;">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><h2>使用者列表(<?php echo $count; ?>)</h2></div>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>E-mail</th>
                                <th>Phone</th>
                                <th>Type</th>
                            </tr>
                            </thead>
                            <?php
                            $i = 1;
                            foreach ($result as $user) {
                                ?>
                                <tr <?php
                                switch ($user['userType']) {
                                    case 0:
                                        echo "class=\"success\"";
                                        break;
                                    case 1:
                                        echo "class=\"info\"";
                                        break;
                                    case 2:
                                        echo "class=\"active\"";
                                        break;
                                }
                                ?>>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $user['username']; ?></td>
                                    <td><?php echo $user['password']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td><?php echo $user['phone']; ?></td>
                                    <td><?php echo $user['userType']; ?></td>
                                    <?php
                                    if ($_SESSION['type'] == 0) {
                                        ?>
                                        <td>
                                            <a class="btn btn-large btn-warning"
                                               href="update.php?id=<?php echo $user['account']; ?>">UPDATE</a>
                                            <a class="btn btn-large btn-danger"
                                               onclick="return confirm('Are you sure?')"
                                               href="delete.php?id=<?php echo $user['id']; ?>">DELETE</a>
                                        </td>
                                        <?php
                                    }
                                    ?>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <footer class="container-fluid text-center">
            <p>亞洲大學 教師EPORTFOLIO∣台中市霧峰區柳豐路500號∣04-23323456</p>
            <p>By Tank</p>
        </footer>

    </body>
    </html>
    <?php
} else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=indexT.php>';
}
?>

