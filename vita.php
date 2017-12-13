<?php
include("fun.inc.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>莊政宏</title>
    <meta charset="utf-8">
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
            <?php navbar(2) ?>
        </div>
    </div>
</nav>


<div class="row content">
    <div class="container">
        <div class="container-fluid text-center">
            <img src="head_chc.jpg" alt="莊政宏">
            <h2><b style="font-size: 1em">莊政宏 專任副教授 簡歷</b></h2>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">基本資料</a></li>
            <li><a data-toggle="tab" href="#menu1">專長</a></li>
        </ul>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <ul>
                    <li>姓名：莊政宏／Cheng-Hung Chuang</li>
                    <li>任職單位：資訊工程學系 副教授</li>
                    <li>E-mail：<a href="mailto:chchuang@asia.edu.tw">chchuang@asia.edu.tw</a></li>
                </ul>
            </div>
            <div id="menu1" class="tab-pane fade">
                <ul>
                    <li>影像及視訊處理</li>
                    <li>圖形識別</li>
                    <li>電腦視覺</li>
                    <li>醫學影像處理</li>
                    <li>訊號處理</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>亞洲大學 教師EPORTFOLIO∣台中市霧峰區柳豐路500號∣04-23323456</p>
</footer>

</body>
</html>

