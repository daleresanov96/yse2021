<?php
/* 
【機能】
	セッション情報を削除しログイン画面に遷移する。
*/

//①セッションを開始する。
session_start();
//②セッションを削除する。
if(isset($_SESSION["user"])) {
unset($_SESSION["user"]);
//③ログイン画面へ遷移する。
<<<<<<< HEAD
header("Location: login.php");
}
?>
=======
header("Location:login.php");
>>>>>>> 7f2fc371cd0d02aa4de278309f31882c04304b6f
