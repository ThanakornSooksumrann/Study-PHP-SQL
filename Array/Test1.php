<?php
    $funArray = array('A', 'B', 'C', 'D', 'E', 'F', 'G');
    print_r($funArray);
    echo ('<br>');
    for ($i = 0; $i < count($funArray); $i++) {
        echo "Index[", $i, "]", $funArray[$i], '<br>';
    }
    echo "<br> Test For Each<br>";
    foreach ($funArray as $value) {
        echo $value . "<br>";
    }
?>

<?php
    //แบบที่ 1
    $Emp = array("name" => "Kerry", "age" => "23", "position" => "Web Base");
    echo $Emp["name"];
    echo "<br>";
    print_r($Emp);
    echo "<br>";
    //แสดงผลออกมาเป็น Array ( [name] => Kerry [age] => 23 [position] => Web Base )// แบบที่ 2

    $Emp["name"] = "Kerry";
    $Emp["age"] = 23;
    $Emp["position"] = "Web Base";
    print_r($Emp);
    echo "<br>";
    echo $Emp["name"];
    //แสดงผลออกมาเป็น Array ( [name] => Kerry [age] => 23 [position] => Web Base )
    echo "<br><br> Test For Each<br>";
    foreach($Emp as $key => $value){
        echo "$key = $value","<br>";
    }
?>