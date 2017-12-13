<?php
include("fun.inc.php");
session_start();
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
            <?php navbar(1) ?>
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
        <div class="col-sm-4 text-left">
            <h2 class="w3-text-grey w3-padding-16"><i
                        class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>經歷</h2>
            <div class="w3-container">
                <h4 class="w3-opacity"><b>副教授</b></h4>
                <h5 class="w3-opacity"><a href="http://csie.asia.edu.tw/"><b>資訊工程學系</b></a></h5>
                <h5 class="w3-opacity"><a href="http://www.asia.edu.tw/"><b>亞洲大學</b></a></h5>
                <h5 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><span
                            style="color: #48af7c">2013年8月</span> - <span
                            style="background-color: #009688;border-radius: 4px; color: #ffffff;">當前</span></h5>
                <hr>
            </div>
            <div class="w3-container">
                <h4 class="w3-opacity"><b>助理教授</b></h4>
                <h5 class="w3-opacity"><a href="http://csie.asia.edu.tw/"><b>資訊工程學系</b></a></h5>
                <h5 class="w3-opacity"><a href="http://www.asia.edu.tw/"><b>亞洲大學</b></a></h5>
                <h5 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><span
                            style="color: #48af7c">2007年2月 - 2013年7月</span></h5>
                <hr>
            </div>
            <div class="w3-container">
                <h4 class="w3-opacity"><b>博士後研究</b></h4>
                <h5 class="w3-opacity"><a href="http://www.stat.sinica.edu.tw/statnewsite/"><b>統計科學研究所</b></a></h5>
                <h5 class="w3-opacity"><a href="http://www.sinica.edu.tw/"><b>中央研究院</b></a></h5>
                <h5 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><span
                            style="color: #48af7c">2003年8月 - 2007年1月</span></h5>
                <br>
            </div>

        </div>
        <div class="col-sm-4 text-left">
            <h2 class="w3-text-grey w3-padding-16"><i
                        class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>學歷</h2>
            <div class="w3-container">
                <h4 class="w3-opacity"><b>國立中正大學電機工程博士</b></h4>
                <h5 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><span
                            style="color: #48af7c">1996年9月 - 2003年6月</span></h5>
                <hr>
            </div>
            <div class="w3-container">
                <h4 class="w3-opacity"><b>國立中正大學電機工程碩士</b></h4>
                <h5 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><span
                            style="color: #48af7c">1994年9月 - 1996年6月</span></h5>
                <hr>
            </div>

        </div>
        <div class="col-sm-2 sidenav">
            <div class="well" align="left">
                <p class="w3-large w3-text-theme"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>研究主題</b>
                </p>
                <p>影像/視訊處理</p>
                <div class="w3-light-grey w3-round-xlarge w3-small">
                    <div style="width:100%;background-color: #009688;border-radius: 16px;color: white" align="center">
                        專注率 100%
                    </div>
                </div>
                <p>電腦視覺</p>
                <div class="w3-light-grey w3-round-xlarge w3-small">
                    <div style="width:100%;background-color: #009688;border-radius: 16px;color: white" align="center">
                        專注率 100%
                    </div>
                </div>
                <p>圖型識別</p>
                <div class="w3-light-grey w3-round-xlarge w3-small">
                    <div style="width:100%;background-color: #009688;border-radius: 16px;color: white" align="center">
                        專注率 100%
                    </div>
                </div>

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

