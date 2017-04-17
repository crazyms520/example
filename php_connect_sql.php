<!doctype html>
<html>
<head>
  <meta charset= "utf-8">
</head>
<body>
<?php

$link = @mysql_connect("127.0.0.1","root","0000") or die ("無法建立連接");

  echo ("成功建立連接")."</br>";
  echo "MYSQL 用戶端程式庫版本:".mysql_get_client_info()."</br>";
  echo "$linl 連線主機:".mysql_get_host_info($link).'</br>';
  echo "$link 資源變數的協定版本為:".mysql_get_proto_info($link)."</br>";
  echo "$link 連線主機的資料庫版本為:".mysql_get_server_info($link)."</br>";
  mysql_select_db("e11",$link) or die ('開啟失敗'.mysql_error($link));

  $sql = "SELECT branch_sn,town FROM house WHERE town='永和區' OR town='中和區'";
  $result = mysql_query($sql,$link);

  echo $result;

  // mysql_free_result($result);
  mysql_close($link);
  ?>
</body>
</html>