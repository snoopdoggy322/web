<?php
require_once 'app/core/BaseActiveRecord.php';
class BlogModel extends BaseActiveRecord
{
// список полей таблицы

public $id;

public $date;

public $theme;
public $text;
public $path;
public static $table = 'myblog';


public static function GetParams(){
$st="(id,
        date,
            theme,
            text,
            path)";

return $st;
}
function LeftRight($records,$r_start,$URL,$inpage) {
    $str="";

    if ($records<=$inpage) return;
    if ($r_start!=0) {
        $str.="<a href=".$URL."0>&lt;&lt</a> ";
        $str.="<a href=$URL".($r_start-1).">&lt;</a> ";
        }
    else $str.="&lt;&lt &lt; ";

    if ($r_start==0) {$sstart=$r_start-0;$send=$r_start+10;}
    if ($r_start==1) {$sstart=$r_start-1;$send=$r_start+9;}
    if ($r_start==2) {$sstart=$r_start-2;$send=$r_start+8;}
    if ($r_start==3) {$sstart=$r_start-3;$send=$r_start+7;}
    if ($r_start==4) {$sstart=$r_start-4;$send=$r_start+6;}
    if ($r_start>=5) {$sstart=$r_start-5;$send=$r_start+5;}

    if ($send*$inpage>$records) $send=$records/$inpage;
    if ($sstart<0) $sstart=0;

    if ($records%$inpage==0) $add=0; else $add=1;

    for ($i=$sstart;$i<$send;$i++) {
        if ($i==$r_start) $str.=" <B>".($i+1)."/".(intval($records/$inpage)+$add)."</B> | ";
        else $str.="<a href=$URL".($i)."><U><B>".($i+1)."</B></U></a> |  ";
        }

    if ($r_start+(1-$add)<intval($records/$inpage)) {
        $str.=" <a href=$URL".($r_start+1).">&gt;</a>";
        $str.=" <a href=$URL".(intval($records/$inpage)-(1-$add)).">&gt;&gt;</a>";
        }
    else $str.=" &gt; &gt;&gt";
    return($str);
    }
}

BaseActiveRecord::$pdo = $pdo;
