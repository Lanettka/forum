<?

#error_reporting  (E_ALL);

include "data/config.php";

if (!isset($_GET['pswrd'])) 

{echo"
<html><head><title>Администрирование</title><META HTTP-EQUIV='Pragma' CONTENT='no-cache'><META HTTP-EQUIV='Cache-Control' CONTENT='no-cache'><META content='text/html; charset=windows-1251' http-equiv=Content-Type><link rel=stylesheet type='text/css' href='data/PCSs.css'></head><body>
<BR><BR><BR><center>
<form action='admin.php' method=GET name=pass><font color='ffcc00'><b>Введите пароль:</b></font><BR><input class=button type=password size=17 name=pswrd><BR><input class=button type=submit value='Войти'>
<SCRIPT language=JavaScript>document.pass.pswrd.focus();</SCRIPT><BR><BR><BR>";}
else {if ($_GET['pswrd']=="$password")
{ 


if (isset($_GET['id'])) { $page=$_GET['page'];
$file=file("data/message.txt"); $itogo=count($file)-1;
if ($msginout==1) {$id=$itogo-$_GET['id'];} else {$id=$itogo-$_GET['id']+2;}
if ($itogo<1) {

print "<html><head>
<title>$name</title>
<META HTTP-EQUIV='Pragma' CONTENT='no-cache'>
<META HTTP-EQUIV='Cache-Control' CONTENT='no-cache'>
<META content='text/html; charset=windows-1251' http-equiv=Content-Type>
<link rel=stylesheet type='text/css' href='data/PCSs.css'>
</head>
<body>
<center>
<br>
<TABLE width=780 align=center cellPadding=0 cellSpacing=0><TBODY>
<TD>
<table width=100%><TR>
<TD align=center><font color=ffcc00 size=2 face=verdana><B><a class=emenu href='admin.php?pswrd=$password'>Главная админки</a></div></B></font><TD align=center><B>";

$lines=file("data/message.txt");
$itogo=count($lines);
$maxi=$itogo-1;

print "<b><font color=ffcc00 size=2 face=verdana>Всего <font color='red'>$itogo</font> объявление</b></font>
<TD align=center><font color=ffcc00 size=2 face=verdana><B><a class=emenu href='admin.php?pswrd=$password&board=stats'>Статистика</a></div></B></font>
</TD>
<TD align=center><font color=ffcc00 size=2 face=verdana><B><a class=emenu href='index.php'>Вернуться на главную</a></div></B></font>
</TD>
</TR></TABLE>
</TD>
</TR>
</TBODY></TABLE>
<br><br><br><br>
<center>
<TABLE cellSpacing=1 cellPadding=3 width=350 align=center bgColor=#ffcc00 border=0>
<TR bgColor='#1f2f3f' align='center'>
<TD colspan='2'><font color='red' face='verdana' size='2'><b>!!! ОШИБКА !!!</td>
<TR bgColor='#425d7' align='center'>
<TD colspan='2'>
<font color='ffcc00' face='verdana' size='2'><b>Нужно оставить хотя бы 1 объявление<br>[$back]</b></font>
</td></tr></table>
</center>
"; exit;}

$fp=fopen("data/message.txt","w");
flock ($fp,LOCK_EX);
for ($i=0;$i< sizeof($file);$i++) { if ($i==$id) {unset($file[$i]);} }
fputs($fp, implode("",$file));
flock ($fp,LOCK_UN);
fclose($fp);

Header("Location: admin.php?pswrd=$password&page=$page"); exit; }

if ($_GET['stats']=="clear")  { 

$sf = "data/stat.dat";
$cf = "data/cont.dat";
$fpsf = fopen ("$sf", "w");
$fpcf = fopen ("$cf", "w");
$text1 = "";
$text2 = "0";
fwrite($fpsf,$text1);
fwrite($fpcf,$text2);
fclose($fpsf);
fclose($fpcf);

print"<script language='Javascript'>function reload() {location = 'admin.php?pswrd=$password&board=stats'}; setTimeout('reload()', 0);</script>";

}


if ($_GET['board']=="stats")  { 
print"
<html><head>
<title>$name</title>
<META HTTP-EQUIV='Pragma' CONTENT='no-cache'>
<META HTTP-EQUIV='Cache-Control' CONTENT='no-cache'>
<META content='text/html; charset=windows-1251' http-equiv=Content-Type>
<link rel=stylesheet type='text/css' href='data/PCSs.css'>
</head>
<body>
<center>
<br>
<TABLE width=780 align=center cellPadding=0 cellSpacing=0><TBODY>
<TD>
<table width=100%><TR>
<TD align=center><font color=ffcc00 size=2 face=verdana><B><a class=emenu href='admin.php?pswrd=$password'>Главная админки</a></div></B></font>";

print"<TD align=center><B>";
$lines=file("data/message.txt");
$itogo=count($lines);
$maxi=$itogo-1;
print "<b><font color=ffcc00 size=2 face=verdana>Всего <font color='red'>$itogo</font> объявление</b></font>
<TD align=center><font color=ffcc00 size=2 face=verdana><B><a class=emenu href='admin.php?pswrd=$password&board=stats'>Статистика</a></div></B></font>
</TD>
<TD align=center><font color=ffcc00 size=2 face=verdana><B><a class=emenu href='index.php'>Вернуться на главную</a></div></B></font>
</TD></TR></TABLE>
</TD>
</TR>
</TBODY></TABLE>
<br>
<TABLE cellSpacing=1 cellPadding=1 width=400 align=center bgColor=#ffcc00 border=0>
<TR vAlign=top bgColor=#1f2f3f>
<TD>
<TABLE cellSpacing=0 cellPadding=1 width='100%' align=center border=0>
<TR bgColor=#1f2f3f><TD align=middle colSpan=2><FONT face=verdana color=#ffcc00 size=2><B>Статистика посещений</B></FONT></TD></TR>
</TABLE></TD></TR></FONT></TD></TR></TABLE>
<br>
<TABLE cellSpacing=0 cellPadding=0 width=900 align=center bgColor=#425d7 border=1 bordercolor='ffcc00'>
<TR vAlign=top bgColor=#1f2f3f align='center'>
<td width='10%' valign='top'><FONT face=verdana color=#ffcc00 size=2><B><strong>Время</strong></font></td>
<td width='10%' valign='top'><FONT face=verdana color=#ffcc00 size=2><B><strong>Адресс</strong></font></td>
<td width='40%' valign='top'><FONT face=verdana color=#ffcc00 size=2><B><strong>Броузер</strong></font></td>
<td width='40%' valign='top'><FONT face=verdana color=#ffcc00 size=2><B><strong>Откуда</strong></font></td>
</tr>";
$fop = fopen ("data/stat.dat", "r+");
while (!feof($fop))
{
$read = fgets($fop, 1000);
list($date,$time,$ip,$hua,$from,$host) = split('#',$read);
echo "<td><FONT face=verdana color=#ffcc00 size=1><B><b>&nbsp;$date</a></b><br>$time</font></td>";
echo "<td><FONT face=verdana color=#ffcc00 size=1><B>&nbsp;$ip</a></font></td>";
echo "<td><FONT face=verdana color=#ffcc00 size=1><B>&nbsp;$hua</font></td>";
echo "<td><FONT face=verdana color=#ffcc00 size=1><B><a class='emenu' href=$from target='_blank'>&nbsp;$from</a></font></td>";
echo " </tr>";
}
fclose($fop);

if(!empty($_POST['from'])){
$from=htmlspecialchars($_POST['from'],ENT_QUOTES);}else{$cait='Нет';}

print"</table>
</blockquote>
</td>
</tr>
</table>
</td>
</tr>
</table>


<hr color='ffcc00' size='2' width='100%'>
<p align='center'><font color='ffcc00' face='verdana' size='2'><b>Показания счетчика:</b></font> <font color='red' face='verdana' size='2'><b>"; 
include "data/cont.dat"; 
print"</b></font> <font color='ffcc00' face='verdana' size='2'><b>посещений</b></font></p>
<div align='center'>
<table width='100%' border='0'>
<tr>
<td width='43%' valign='top' align='center'>
<p>
<form method='post' action='admin.php?pswrd=$password&stats=clear' name='add'>
<p>
<input type='hidden' name='name' value='data/stat.dat'>
<br>
<input class=button type='submit' name='Submit' value='Очистить Статистику'>
</form>
</td>
</tr>
</table>
<br>


";
}


else {

if (isset($_GET['page'])) {$page=$_GET['page'];} else {$page="1";}

print "<html><head>
<title>$name</title>
<META HTTP-EQUIV='Pragma' CONTENT='no-cache'>
<META HTTP-EQUIV='Cache-Control' CONTENT='no-cache'>
<META content='text/html; charset=windows-1251' http-equiv=Content-Type>
<link rel=stylesheet type='text/css' href='data/PCSs.css'>
</head>
<body>
<center>
<br>

<TABLE width=780 align=center cellPadding=0 cellSpacing=0><TBODY>
<TD>
<table width=100%><TR>
<TD align=center><font color=ffcc00 size=2 face=verdana><B><a class=emenu href='admin.php?pswrd=$password'>Главная админки</a></div></B></font>";

print"<TD align=center><B>";
$lines=file("data/message.txt");
$itogo=count($lines);
$maxi=$itogo-1;
print "<b><font color=ffcc00 size=2 face=verdana>Всего <font color='red'>$itogo</font> объявление</b></font>
<TD align=center><font color=ffcc00 size=2 face=verdana><B><a class=emenu href='admin.php?pswrd=$password&board=stats'>Статистика</a></div></B></font>
</TD>
<TD align=center><font color=ffcc00 size=2 face=verdana><B><a class=emenu href='index.php'>Вернуться на главную</a></div></B></font>
</TD></TR></TABLE>
</TD>
</TR>
</TBODY></TABLE>";


if ((!isset($_GET['event'])) or (isset($_GET['event'])) & ($_GET['event']!="add"))  {
$lines=file("data/message.txt");
$itogo=count($lines);
$maxi=$itogo-1;
print "
<TABLE width=780 align=center cellPadding=0 cellSpacing=0><TBODY>
<center><table ><tr><td>";  

if (isset($_GET['rd']))  {
if ($msginout==1) {$rd=$maxi-$_GET['rd'];} else {$rd=$maxi-$_GET['rd']+2;}

$dt=explode("|",$lines[$rd]);
$dt[0]=str_replace("<br>", "\r\n", $dt[0]);


}
else 

print"</tr></td></table></TD></TR></TBODY></TABLE>";

print "<font color=ffcc00 size=2 face=verdana>Страницы:&nbsp; ";
for($i=0; $i<$maxi+1;) {$ip=$i/$qq+1;
if ($page==$ip) {print "<B>$ip</B> &nbsp;";} else {print "<a href=\"admin.php?pswrd=$password&page=$ip\">$ip</a> &nbsp;";}
$i=$i+$qq;} print "(дробление = <B>$qq</B>)<br><br>

<TABLE cellSpacing=1 cellPadding=1 width=400 align=center bgColor=#ffcc00 border=0>
<TR vAlign=top bgColor=#1f2f3f>
<TD>
<TABLE cellSpacing=0 cellPadding=1 width='100%' align=center border=0>
<TR bgColor=#1f2f3f><TD align=middle colSpan=2><FONT face=verdana color=#ffcc00 size=2><B>Текущие объявления</B></FONT></TD></TR>
</TABLE></TD></TR></FONT></TD></TR></TABLE>";


if ($page=="0") {$page="1";} else {$page=abs($page);}

$maxpage=ceil(($maxi+1)/$qq); if ($page>$maxpage) {$page=$maxpage;}

if ($msginout=="1") 
{ $fm=$qq*($page-1); if ($fm>$maxi) {$fm=$maxi-$qq;}
  $lm=$fm+$qq; if ($lm>$maxi) {$lm=$maxi+1;} }
else 
{ $fm=$maxi-$qq*($page-1); if ($fm<"0") {$fm=$qq;}
  $lm=$fm-$qq; if ($lm<"0") {$lm="-1";} }


do { $dt = explode("|", $lines[$fm]);
if ($msginout=="1") {$fm++;} else {$fm--;}
$num=$itogo-$fm;



print"
<TABLE width=780 align=center cellPadding=0 cellSpacing=0><TBODY>

<br>
<em>$dt[0]</em><BR>
<div align=right>
<table cellSpacing=0 cellPadding=0 border=1 bordercolor='ffcc00'>
<TR>
<TD bgcolor=#425d7a>
<a href='admin.php?pswrd=$password&id=$num&page=$page'><b>Удалить</b></a>
</B></TD></TR></TABLE></div></TD></TR></TBODY></TABLE>";

if ($msginout=="1") {$whm=$fm; $whe=$lm;} else {$whm=$lm; $whe=$fm;}
} while($whm < $whe);
print "</td></tr></table>";

print "<font color=ffcc00 size=2 face=verdana>Страницы:&nbsp; ";
for($i=0; $i<$maxi+1;) {$ip=$i/$qq+1;
if ($page==$ip) {print "<B>$ip</B> &nbsp;";} else {print "<a href='admin.php?pswrd=$password&page=$ip'>$ip</a> &nbsp;";}
$i=$i+$qq;} print "(дробление = <B>$qq</B>)";
}
}
}
}

?>
