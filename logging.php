<?php
// $agent = @$_SERVER['HTTP_USER_AGENT'];
// $uri = @$_SERVER['REQUEST_URI'];
// $ip = @$_SERVER['REMOTE_ADDR'];
// $ref = @$_SERVER['HTTP_REFERER'];
// $proxy = @$_SERVER['HTTP_X_FORWARDED_FOR'];
// $via = @$_SERVER['HTTP_VIA'];
// $dtime = date('r');
// $info = "working well";
// $fp = fopen("jejak.txt", "a");
// fputs($fp, $info."|".$dtime."|".$ip."|".$agent."|".$uri."|".$ref."|".$proxy."|".$via."\r\n");
// fclose($fp);

// $fh = fopen('logging.txt','r');
// while ($line = fgets($fh)) {
//   // <... Do your work with the line ...>
// 	$data[]=explode("|",$line);
// }
// fclose($fh);
// echo "<pre>";
// print_r($data);
// // var_dump($data);
// echo "</pre>";

// $file = 'logging.txt';
// header('Content-type: text/plain');
// header('Content-Length: '.filesize($file));
// header('Content-Disposition: attachment; filename='.$file);
// header("Content-Type: application/force-download");
// readfile($file);


$myfile = fopen("logging.txt", "r") or die("Unable to open file!");
echo "<textarea disabled>".fread($myfile,filesize("logging.txt"))."</textarea";
fclose($myfile);
?>


<?php
// // nama file hasil export
// $namaFile = "datamhs.txt";
// // karakter separator
// $separator = "\t";
// // koneksi ke mysql
// $dbname = "...";
// $dbuser = "...";
// $dbpass = "...";
// $dbhost = "localhost";
// mysql_connect($dbhost, $dbuser, $dbpass);
// mysql_select_db($dbname);
// // header file text
// header("Content-type: text/plain");
// header("Content-Disposition: attachment; filename=".$namaFile);
// // query sql baca semua data dlm tabel mhs
// $query = "SELECT * FROM mhs";
// $hasil = mysql_query($query);
// while ($data = mysql_fetch_array($hasil))
// {
// // mengisi data mhs ke file text dengan separator
// echo $data['NIM'].$separator.$data['NAMAMHS'].$separator.$data['TGLLHR'].$separator.$data['ALAMAT'].$separator.$data['NOHP']."\r\n";
// }
?>