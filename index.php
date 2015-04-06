<?php

include ("data/config.php");

print"
<html>
<head>
<title>$name</title>
<META http-equiv=Content-Type content='text/html; charset=windows-1251'>
<LINK href='data/PCSs.css' type=text/css rel=stylesheet>
<body>
<br>";

print"
<TABLE cellSpacing=1 cellPadding=3 width=900 align=center bgColor=#ffcc00 border=0>

<TR bgColor='#1f2f3f' align='center'><TD colspan='2'><img src='images/logo.gif' title='$name'></td></tr>

<TR bgColor='#1f2f3f' align='center'><TD colspan='2'><I><FONT face='verdana' size='1' color='ffcc00'><B>
&nbsp;
<a class='emenu' href=index.php?board=rules>Правила размещения</a> |
<a class='emenu' href=index.php>Главная</a> |
<a class='emenu' href=index.php?board=add>Добавить объявление</a>
</B></FONT></I></TD></TR></TABLE><br>";


include ("data/config.php");

include ("data/config.php");

$ip="$ban"; 

if(empty($_SERVER['REMOTE_ADDR'])) 
die("<b>О-Ш-И-Б-К-А</b>"); 

elseif($_SERVER['REMOTE_ADDR']==$ip) 
die("<center><b><font color='ffcc00' size='2' face='verdana'>Вы</font> <font color='red' size='2' face='verdana'>ЗАБАНЕНЫ!</font></b></center>"); 

if ($_GET['board'] =="add") { 

print"
</td>
<td width=225 align=center>
<TABLE cellSpacing='1' cellPadding='1' width='400' align='center' bgColor='#ffcc00' border='0'>
<TR vAlign='top' bgColor='#1f2f3f'>
<TD>
<TABLE cellSpacing='0' cellPadding='1' width='100%' align='center' border='0'>
<TR bgColor='#1f2f3f'><TD align='middle' colSpan='2'><FONT face='verdana' color='#ffcc00' size='1'><B>Новое объявление</B></FONT></TD></TR>
<form action='index.php?add=moment' method=post>
<TR>
<TD align=left width=70><FONT face=verdana color=#ffcc00 size=1>Имя:</FONT></TD>
<TD align=middle><INPUT class=name onblur='id=''' style='WIDTH: 314px' onfocus=id=className size=48 name=name ?></TD></TR>
<TR>
<TD align=left><FONT face=verdana color=#ffcc00 size=1>E-mail:</FONT></TD>
<TD align=middle><INPUT class=name onblur='id=''' style='WIDTH: 314px' onfocus=id=className size=48 name=mail ?></TD></TR>
<TR>
<TD align=left width=70><FONT face=verdana color=#ffcc00 size=1>ICQ:</FONT></TD>
<TD align=middle><INPUT class=name onblur='id=''' style='WIDTH: 314px' onfocus=id=className size=48 name=icq ?></TD></TR>
<TR>
<TD align=left width=70><FONT face=verdana color=#ffcc00 size=1>Сайт:</FONT></TD>
<TD align=middle><INPUT class=name onblur='id=''' style='WIDTH: 314px' onfocus=this.value='' size=48 name=cait Value=http:// ?></TD></TR>
<TR>
<TD align=left><FONT face=verdana color=#ffcc00 size=1>Тема:</FONT></TD>
<TD align=middle><INPUT class=name onblur='id=''' style='WIDTH: 314px' onfocus=id=className size=48 name=tema ?></TD></TR>
<TD align=left><FONT face=verdana color=#ffcc00 size=1>Правила:</FONT></TD>
<TD><INPUT type=checkbox name=rules><FONT face=verdana color=#ffcc00 size=1>С <B><A class='emenu' href='index.php?board=rules' target='_blank'>правилами</A></B> ознакомлен</TD></TR>


<TR>
<TD align=left valign=top><FONT face=verdana color=#ffcc00 size=1>Объявление:</FONT></TD>
<TD align=middle><TEXTAREA class=name onblur='id=''' style='WIDTH: 314px; HEIGHT: 90px' onfocus=id=className name=mes rows=5 cols=36 ?></TEXTAREA></TD></TR>
<TR>
<TD align=right colSpan=2>
<TABLE cellSpacing=0 cellPadding=1 bgColor=#425d7a border=0 align=center>
<TR>
<TD><INPUT class=submit style='CURSOR: hand' type=submit value='Добавить объявление'></TD></TR></TABLE></TD></TR></FORM></TABLE></TD></TR></FONT></TD></TR></TABLE>
</td>
</tr>
</table>
</td>
</tr></table><br>
";
}

if ($_GET['board'] =="rules") { 

print"
<TABLE cellSpacing=1 cellPadding=3 width=900 align=center bgColor=#ffcc00 border=0>
<TR bgColor='#425d7a'><TD colspan='2'><I><FONT face='verdana' size='1' color='ffcc00'><B>
Электронная доска объявлений - это место, где каждый желающий может добавить свое объявление, а любой посетитель - прочитать его.<BR>
Для размещения своего объявления нужно, нажав ссылку &quot;<a href='index.php?board=add'><B>Добавить объявление</B></a>&quot; заполнить форму, то есть, 
ввести своё имя (обязательно),e-mail (обязательно),сайт (не обязательно), icq (не обязательно), тема (обязательно), согласиться с привилами, которые Вы прочитаете ниже, и само объявление. 
<BR><BR>
<font color=dfd8df><B>на доске разрешается:</B></font><BR>
- подавать объявления составленные интересно, грамотно и без ошибок.<BR><BR>
<font color=red></font>

<font color=red><B>на доске запрещается:</B></font><BR>
- размещать одно и то же объявление несколько раз!<BR>
- размещать объявление содержащее ненормативную лексику или оскорбление других личностей.<BR>
- вставлять в объявление мета-теги, всевозможный код, непонятные символы и рисунки.<BR>
- размещать сообщения общего рекламного характера.<BR>
<BR>
В случае нарушения правил, Ваше объявление может быть удалено, а также Вам будет закрыт доступ для дальнейшей работы с доской.
<BR>Администрация сайта никоим образом не несёт ответственность за услуги или товар, предложение которых находится на данной доске, а также оставляет за собой право удалять любое объявление без объяснения причин.
<div align=right><B>Администрация</B></div><BR></font>
</B></FONT></I></TD></TR>
</TABLE><br>
";
}

if ($_GET['board'] =="xaxa") { echo"ewew"; }

if ($_GET['add'] =="moment") { 

$ip=getenv("REMOTE_ADDR");
$dat = date("d:m:y / H:i:s");
$fp = @fopen ("data/message.txt", "a");
$hr=200;

if ((strlen(rtrim($_POST['name'])))!=0){
$tn=htmlspecialchars($_POST['name'],ENT_QUOTES);
}
else{
exit("<font color=ffcc00 face=verdana size=2><b><center>Имя не введено.<br><br>[$back]</center></b></font>");}

if ((strlen(rtrim($_POST['mail'])))!=0){
$te=htmlspecialchars($_POST['mail'],ENT_QUOTES);
}
else{
exit("<font color=ffcc00 face=verdana size=2><b><center>E-mail не введён.<br><br>[$back]</center></b></font>");}

if ((strlen(rtrim($_POST['mes'])))!=0){
$t2=htmlspecialchars($_POST['mes'],ENT_QUOTES);
}
else{
exit("<font color=ffcc00 face=verdana size=2><b><center>Текст объявления не введен.<br><br>[$back]</center></b></font>");}

if(!empty($_POST['icq'])){
$icq=htmlspecialchars($_POST['icq'],ENT_QUOTES);}else{$icq='Нет';}

if(!empty($_POST['cait'])){
$cait=htmlspecialchars($_POST['cait'],ENT_QUOTES);}else{$cait='Нет';}

if (!isset($_POST['rules'])) {
print"<font color=ffcc00 face=verdana size=2><b><center>Вам необходимо согласиться с правилами.<br><br>[$back]</center></b></font>"; exit;}

if ((strlen(rtrim($_POST['tema'])))!=0){
$tema=htmlspecialchars($_POST['tema'],ENT_QUOTES);
}
else{
exit("<font color=ffcc00 face=verdana size=2><b><center>Тема объявления не введена.<br><br>[$back]</center></b></font>");}




if(!$fp)exit("<center>Не могу открыть файл <b>message.txt</b>");
fwrite ($fp, "<table cellSpacing=1 cellPadding=3 width=900 align=center bgColor=#ffcc00 border=0><tr><td VALIGN=top align='left' bgcolor='425d7a' width='$hr'><i><B><font face='verdana' size='1' color='ffcc00'>·</font></B><font face='verdana' size='1' color='dfd8df'> Имя : ".$tn." </font></i><hr width='$hr' size='1' color='ffcc00'><i><B><font face='verdana' size='1' color='ffcc00'>·</font></B><font face='verdana' size='1' color='ffcc00'> Icq: ".$icq." </font></i><hr width='$hr' size='1' color='ffcc00'><i><B><font face='verdana' size='1' color='ffcc00'>·</font></B><font face='verdana' size='1' color='dfd8df'> Дата / Время: ".$dat." </font></i><hr width='$hr' size='1' color='ffcc00'><i><B><font face='verdana' size='1' color='ffcc00'>·</font></B><font face='verdana' size='1' color='ffcc00'> IP: $ip </font></i><hr width='$hr' size='1' color='ffcc00'><i><B><font face='verdana' size='1' color='ffcc00'>·</font></B><font face='verdana' size='1' color='dfd8df'> Сайт: <a class=emenu href=".$cait." title=".$cait." target=_blank>".$cait."</a> </font></i><hr width='$hr' size='1' color='ffcc00'><i><B><font face='verdana' size='1' color='ffcc00'>·</font></B><font face='verdana' size='1' color='ffcc00'> E-mail: <a class=emenu href=mailto:".$te." title=".$te.">".$te."</a> </font></i><hr width='$hr' size='1' color='ffcc00'><i><B><font face='verdana' size='1' color='ffcc00'>·</font></B><font face='verdana' size='1' color='dfd8df'> Тема: ".$tema."</a> </font></i><br></td><td bgcolor='425d7a' valign='top' width='800' rowspan=2><font face='verdana' size='1' color='ffcc00'>".$t2."</font></td></tr></table><br>\n" );
fclose ($fp);

exit("<script language='Javascript'>function reload() {location = 'index.php'}; setTimeout('reload()', 2000);</script>
<TABLE cellSpacing=1 cellPadding=3 width=900 align='center' bgColor=#ffcc00 border=0>
<TR bgColor='#425d7a'><TD colspan='2'><FONT face='verdana' size='1' color='ffcc00'><B>
<center>Ваше объявление успешно размещено.Сейчас вы будете перемещены.<br>
( <a class=emenu href='index.php'>Или нажмите сюда, если не хотите ждать</a> )</center></B></FONT></TD></TR>
</TABLE>");

}

else {

print"<table cellSpacing='0' cellPadding='1' width='900' align='center' border='1' bordercolor='ffcc00'><tr><td bgcolor='425d7a'><font color='dfd8df' face='verdana' size='2'><b><center>Объявления</center></b></font></td></tr></table><br>";

}



include ("data/config.php");

$lines = file("data/message.txt");
$maxi = count($lines)-1;

if (isset($_GET['page'])) {$page=$_GET['page'];} else {$page="1";}
if ($page==0) {$page="1";} else {$page=abs($page);}

$maxpage=ceil(($maxi+1)/$qq); if ($page>$maxpage) {$page=$maxpage;}

if ($msginout=="1") 
{ $fm=$qq*($page-1); if ($fm>$maxi) {$fm=$maxi-$qq;}
  $lm=$fm+$qq; if ($lm>$maxi) {$lm=$maxi+1;} }
else 
{ $fm=$maxi-$qq*($page-1); if ($fm<"0") {$fm=$qq;}
  $lm=$fm-$qq; if ($lm<"0") {$lm="-1";} }

do { $dt = explode("|", $lines[$fm]); $num=1+$maxi-$fm;

if ($msginout=="1") {$fm++;} else {$fm--;}

print"<center>$dt[0]</center>";

if ($msginout=="1") {$whm=$fm; $whe=$lm;} else {$whm=$lm; $whe=$fm;}
} while($whm < $whe);

print "

<TABLE cellSpacing=1 cellPadding=3 width=900 align=center bgColor=#ffcc00 border=0>
<TR bgColor='#425d7' align='center'><TD colspan='2'>
<font color='dfd8df' size='2' face='verdana'><b>Страницы:</b></font>&nbsp;";
for($i=0; $i<$maxi+1;) {$ip=$i/$qq+1;
if ($page==$ip) {print "<font color='red' size='2' face='verdana'><B>$ip</B> &nbsp;";} else {print "
<font color='red' size='1' face='verdana'> 
<a href=\"index.php?page=$ip\" title='Страница № $ip'><b>$ip</b></a> &nbsp;";}
$i=$i+$qq;}
print"</td></tr></table><br>";

print"
<TABLE cellSpacing=1 cellPadding=3 width=900 align=center bgColor=#ffcc00 border=0>
<TR bgColor='#1f2f3f' align='center'><TD colspan='2'><I><FONT face='verdana' size='1' color='ffcc00'><B>
&nbsp;Сегодня : 
<script language='Javascript'>
var monthNames = new Array( 'Января','Февраля','Марта','Апреля','Мая','Июня','Июля','Августа','Сентября','Октября','Ноября','Декабря');
var now = new Date();
thisYear = now.getYear();
if(thisYear < 1900) {thisYear += 1900}; 
document.write(now.getDate() + ' ' + monthNames[now.getMonth()] + ', ' + thisYear + '&nbsp;года');
</SCRIPT> |";


$lines=file("data/message.txt");
$itogo=count($lines);
$maxi=$itogo-1;

print "
<b><font color=dfd8df size=1>Всего $itogo объявлений</b></font> |";


$total_data="data/base.txt";
$online_data="data/online.txt";
$time=time();
$now=(int)(time()/86400);
$past_time=time()-600;

$readdata=fopen($online_data,"r") or die("Не могу открыть файл $online_data");
$online_data_array=file($online_data);
fclose($readdata);

if(getenv('HTTP_X_FORWARDED_FOR'))
        $user=getenv('HTTP_X_FORWARDED_FOR');
else
        $user=getenv('REMOTE_ADDR');

$d=count($online_data_array);
for($i=0;$i<$d;$i++)
        {
        list($live_user,$last_time)=explode("::","$online_data_array[$i]");
        if($live_user!=""&&$last_time!=""):
        if($last_time<$past_time):
                $live_user="";
                $last_time="";
        endif;
        if($live_user!=""&&$last_time!="")
                {
                if($user==$live_user)
                        {
                        $online_array[]="$user::$time\r\n";
                        }
                else
                        $online_array[]="$live_user::$last_time";
                }
        endif;
        }

        if(isset($online_array)):
        foreach($online_array as $i=>$str)
                {
                if($str=="$user::$time\r\n")
                        {
                        $ok=$i;
                        break;
                        }
                }
        foreach($online_array as $j=>$str)
                {
                if($ok==$j) { $online_array[$ok]="$user::$time\r\n"; break;}
                }
       endif;

$writedata=fopen($online_data,"w") or die("Не могу открыть файл $online_data");
flock($writedata,2);
if($online_array=="") $online_array[]="$user::$time\r\n";
foreach($online_array as $str)
        fputs($writedata,"$str");
flock($writedata,3);
fclose($writedata);

$readdata=fopen($online_data,"r") or die("Не могу открыть файл $online_data");
$online_data_array=file($online_data);
fclose($readdata);
$online=count($online_data_array);

$f=fopen($total_data,"a");
$call="$user|$now\n";
$call_size=strlen($call);
flock($f,2);
fputs($f, $call,$call_size);
flock($f,3);
fclose($f);

$tarray=file($total_data);
$total_hits=count($tarray);

$today_hits_array=array();
for($i=0;$i<count($tarray);$i++)
        {
        list($ip,$t)=explode("|",$tarray[$i]);
        if($now==$t) { array_push($today_hits_array,$ip); }
        }
$today_hits=count($today_hits_array);

$total_hosts_array=array();
for($i=0;$i<count($tarray);$i++)
        {
        list($ip,$t)=explode("|",$tarray[$i]);
        array_push($total_hosts_array,$ip);
        }
$total_hosts=count(array_unique($total_hosts_array));

$today_hosts_array=array();
for($i=0;$i<count($tarray);$i++)
        {
        list($ip,$t)=explode("|",$tarray[$i]);
        if($now==$t) { array_push($today_hosts_array,$ip); }
        }
$today_hosts=count(array_unique($today_hosts_array));

echo "  Online :<font color=red><b> $online</b></font> человек(a)";
print"</B></FONT></I></TD></TR></TABLE><br>";



print"<hr color='ffcc00' size='10' width='100%'><br><center><font color='dfd8df' size=2 face=verdana><b>Powered by <a class=emenu href='mailto:p0w3rCS@rambler.ru'>p0w3r</a> &copy; 2007 v.2.3</b></font></center><br></body></html>";


$sf ="data/stat.dat"; 
$fpsf=fopen($sf,"a+"); 
$ip=getenv("REMOTE_ADDR"); 
$ag=getenv("HTTP_USER_AGENT"); 
$from=getenv("HTTP_REFERER"); 
$host=getenv("REQUEST_URI"); 
$date = date("d.m.y"); 
$time= date("H:i:s"); 
fputs($fpsf,"$date#$time#$ip#$ag#$from#$host\n"); 
fclose($fpsf); 


$cf = "data/cont.dat"; 
$fpcf=fopen($cf,"r"); 
if ($fpcf) { 
$counter=fgets($fpcf,10);  
fclose($fpcf); 
} else { 
$counter=0; 
} 
$counter++; 

$fpcf = @fopen($cf,"w"); 
if ($fpcf) { 
$counter=fputs($fpcf,$counter); 
fclose($fpcf); 
} 

?>
