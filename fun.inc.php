<?php function head(){
    ?>
    <link rel="stylesheet" href="css/styleT.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <?php
}
?>
<?php
include("db_connect.php");
function navbar($flag){
?>
    <ul class="nav navbar-nav">
    <?php
        if($_SESSION['account'] != null)
        {
    ?>
            <li <?php if($flag==0) echo "class='active'";?>><a href="admindex.php"><i class="fa fa-cog" aria-hidden="true"></i>控制台</a></li>
    <?php
        }
        ?>
        <li <?php if($flag==1) echo "class='active'";?>><a href="indexT.php"><i class="fa fa-home" aria-hidden="true"></i>首頁</a></li>
<li <?php if($flag==2) echo "class='active'";?>><a href="vita.php"><i class="fa fa-address-card" aria-hidden="true"></i>簡歷</a></li>
<li <?php if($flag==3) echo "class='active'";?>><a href="academic.html">學術</a></li>
<li><a href="#">著作</a></li>
<li><a href="#">學生</a></li>
<li><a href="#">常用連結</a></li>
</ul>
    <ul class="nav navbar-nav navbar-right">
        <?php
        if($_SESSION['account'] != null)
        {
            echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';
        }
        else
        {
           echo '<li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
        }
        ?>

    </ul>
<?php
}
?>
