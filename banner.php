<?php
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');


/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */

$false = "{$blue2}{{$red}x{$blue2}}{$red2}";
$true = "{$blue2}[{$yellow2}+{$blue2}]{$yellow2}";
$pentung = "{$abu2}[{$yellow}!{$abu2}]{$yellow2}";
$titik = "{$yellow2}{{$purple2}•{$yellow2}}{$lblue2}";


$banner = "\r{$lblue2}
  _       _   _           _                      _    
 | |__   (_) | |_   ___  | |__     __ _   _ __  | | __
 | '_ \  | | | __| / __| | '_ \   / _` | | '__| | |/ /$green2
 | |_) | | | | |_  \__ \ | | | | | (_| | | |    |   < 
 |_.__/  |_|  \__| |___/ |_| |_|  \__,_| |_|    |_|\_\
                                                 
\033[1;34m======================================================
$true \033[1;36mScript Nuyul \033[1;33m:\033[0;0m Bitshark.io
$true \033[1;36mAuthor By    \033[1;33m:\033[0;0m Faisal
$true \033[1;36mChannel Yt   \033[1;33m: \033[0;0mini gratis
$true \033[1;36mDonasi Doge  \033[1;33m: \033[0;0mDSdye6aZty8abZRLS1Dq4rPUBskwUeJJ75
\033[1;34m======================================================
";

system("clear");
$password = "inigratis";
sleep(2);
echo $banner;
sleep(2);
  echo "\n\n \033[0;mDownload Password :\033[0;34m http://exe.io/pwwalletjoy";
  echo "\n\n \033[0;32mMASUKAN PASSWORD :$putih2 ";
  $pass = trim(fgets(STDIN));
  if($pass == $password)
  {
  echo "\n\n \033[0;32mLOGIN SUCCES\n";
  sleep(2);
  system('clear');
  echo $banner;
  sleep(2);
  }
    else
 {
  echo "\n\n \033[0;31mLOGIN GAGAL\n";
  exit;
  }
