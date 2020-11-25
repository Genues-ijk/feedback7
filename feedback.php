<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Rayan" />

	<title>testphp</title>
</head>
<body>

<?php
//----------------------------
include('config1.php');
//----------------------------
 //----------send Data-----------
    if ( ($user=="") ||($id=="") ||($email=="") || ($comment==""))
             {
    echo '"<B>من فضلك قم بادخال جميع عناصر النموذج وتأكد من صحة البيانات قبل الارسال" ';
             }
                  else //----------ok data send -----------
                        {							
         $s=("INSERT INTO `feedback`.`feedbackusers` (
`id` ,
`name` ,
`idnumber` ,
`email`  ,
`q1` ,
`q2` ,
`q3` ,
`comment`)
VALUES (
NULL , '$user', '$id','$email','$q1','$q2','$q3','$comment')"); 
        $a=mysqli_query($link,$s) or die("----error");
                       }
//----------send Data ok-----------
mysqli_close($link);
if($s){
      echo '<script type="text/javascript">alert("تم الإرسال بنجاح")</script>';
}
?> 

</body>
</html>