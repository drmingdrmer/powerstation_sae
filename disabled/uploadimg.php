<?php
$filepath =  $_SERVER['DOCUMENT_ROOT'];
$Path  = $filepath;
set_time_limit(0);
//读出文件夹中所有子文件夹
function dealfolder($Path)
{
	$uploadfileurl=array();
	$foldertree=array();
	$handle  = opendir($Path);
	$i=0;
	while($file = readdir($handle))
	{
		$newpath=$Path."/".$file;
		if(is_dir($newpath))
		{
			if($file!=".." && $file!=".")
			{
				$foldertree[] = $newpath;
			}
		}
		else
		{
			$folderfiles[]=$newpath;
			//$uploadfileurl[$i]['remoteurl']=$foldername.'/'.$file;
			$i++;
		}
	}
	if(count($folderfiles) > 0)
	{
		dealfile($folderfiles);
	}
	if(is_array($foldertree)&& count($foldertree) > 0)
	{
		foreach($foldertree as $key => $value){
			dealfolder($value);
		}
	}

}

function filegetcontents($filename)
{
	global $phpversion,$referer;
	if (@version_compare($phpversion, "4.3.0", ">=") && @function_exists('file_get_contents'))
	{
		$content = @file_get_contents($filename);
	}
	else
	{
		if (function_exists('file'))
		{
			$content = '';
			$_content = @file($filename);
			if (!empty($_content))
			{
				foreach ($_content as $line)
				{
					$content .=$line;
				}
			}
		}
		else
		{
			echo $filename.' Get content error!<br>';
		}
	}
	return $content;
}
function dealfile($paths)
{
	$ignorearray=array('php','PHP');
	//$ignorearray=array('js','JS','html');
	foreach($paths as $filename)
	{
		$filenameext=end(explode('/',$filename));
		if('/'.$filenameext==$_SERVER['PHP_SELF'])
			 continue;
		$ext=end(explode('.',$filename));
		//替换至图片路径
		$destfile = str_replace($_SERVER['DOCUMENT_ROOT'],'',$filename);
		// 论坛图片在discuz域下以bbs开头
		//$destfile = 'bbs/'.$destfile;
		//echo $destfile;exit;
		
		$s = new SaeStorage();	
		//$cacheurl = $s->getUrl( 'discuz' ,$filename) ;
		//echo "<br>include cacheurl==echo $cacheurl; <br>";
		$content = $s->upload( 'discuzx' ,$destfile ,$filename) ; 	
		echo $content.'<br/>';
		//exit;
	}
}


dealfolder($filepath.'/static');
echo 'over';
?>
