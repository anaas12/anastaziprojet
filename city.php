<?php
class City{
    public $id;
    public $name;
public static function selectAllcities($tablename ,$conn){
    $sql = "SELECT id,name FROM $tableName";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }
}
}




?>