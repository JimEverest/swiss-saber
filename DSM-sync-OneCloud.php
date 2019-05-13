<?php
set_time_limit(0);
$from = '/volume1/wky/tddownload';//WKY location
$loc = '/volume1/video/wky';//backup location
$ext = array('mp4','.mkv','rmvb','jpg','png','jpeg');//backup file types

function sdir($wky) {
  global $from,$loc,$ext;	
  $dh=opendir($wky);
  while ($file=readdir($dh)) {
    if($file!="." && $file!="..") {
      $fullpath=$wky."/".$file;
      if(!is_dir($fullpath)) {
          foreach($ext as $v){
	          if(stripos($fullpath,'.'.$v)!==false){
	          	echo $fullpath."\n";
	          	copy($fullpath,str_replace($from,$loc,$fullpath));
	          	@unlink($fullpath);
	          	break;
	          }
          }
      } else {
      	  echo $fullpath."\n";
      	  @mkdir(str_replace($from,$loc,$fullpath));
          sdir($fullpath);
      }
    }
  }
 
  closedir($dh);
}
sdir($from,$loc);

//https://post.smzdm.com/p/a6ln50gz/
?>


