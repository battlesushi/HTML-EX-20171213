<?php
session_start();
include("db_connect.php");
if ($_SESSION['account'] != null) {
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="register_finish.php">
    帳號：<input type="text" name="id" /> <br>
    密碼：<input type="password" name="pw" /> <br>
    再一次輸入密碼：<input type="password" name="pw2" /> <br>
    E-mail：<input type="text" name="email" /> <br>
    電話：<input type="text" name="phone" /> <br>
    Type：<input type="text" name="type" /> <br>
    <input type="submit" name="button" value="新增使用者" />
</form>
<?php
}
?>