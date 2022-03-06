<!DOCTYPE html>
<html>
<body>

<?php
 echo 'Fungsi sort (array)';
 $ar_buah = ["P"=>"Pepaya","A"=>"Apel","M"=>"Mangga","J"=>"Jambu" ];
 echo '<ol>';
 foreach($ar_buah as $k =>$v){
 echo '<li>'.$k.' - ' . $v .'</li>';
 
}
 echo '</ol>';
 sort($ar_buah);
 echo '<hr/>';
 echo '<ol>';
 foreach($ar_buah as $k =>$v){
 echo '<li>'.$k.' - ' . $v .'</li>';
 
}
 echo '</ol>';
?>

<?php
    echo 'Fungsi Array_pop (array) </br>';
    $tims = ["Heru","Erwin","Ali","Zaki"];
    array_pop($tims);
    foreach($tims as $person){
        echo $person. '</br>';
    }
    echo '<hr/>';
?>

<?php
    echo 'Fungsi Array_push (array) </br>';
    $tims = ["Heru","Erwin","Ali","Zaki"];
    array_push($tims);
    foreach($tims as $person){
        echo $person. '</br>';
    }
    echo '<hr/>';
?>

<?php
    echo 'Fungsi Array_shift (array) </br>';
    $tims = ["Heru","Erwin","Ali","Zaki"];
    array_shift($tims);
    foreach($tims as $person){
        echo $person. '</br>';
    }
    echo '<hr/>';
?>

<?php
    echo 'Fungsi Array_UnShift (array) </br>';
    $tims = ["Heru","Erwin","Ali","Zaki"];
    array_unshift($tims,"Joko","Widodo");
    foreach($tims as $person){
        echo $person. '</br>';
    }
    echo '<hr/>';
?>

</body>
</html>
