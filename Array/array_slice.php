<?php
$a=array ("Beer","Bom","Wat");
$b=array_slice($a,1,2);
foreach ($b as $value)
{
echo $value."<br>\n";// แสดงออกมา Bom Wat
}
?>