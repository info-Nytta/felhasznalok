<?php
// CRUD: create, read, update, delete - alap lekérdezések

/*** 
 *  READ
 *  általános lekérés visszatérési értékei
 *      false:          sikertelen lekérés
 *      üres tömb:      sikeres lekérés 0 rekorddal
 *      eredménytömb:   sikeres lekérés min 1 rekorddal
***/

function query($sql) {
	$array=false;
	$result=connect()->query($sql);
	if ($result) {
        $array=[];
        while ($row=$result->fetch_assoc())
            $array[]=$row;
	}
	connect()->close();
	return $array;
}

/***
 * CREATE (feladatainkban csak insert-et használunk), 
 * UPDATE, 
 * DELETE
 * általános lekérések visszatérési értékei
 *      false:  sikertelen művelet
 *      true:   sikeres művelet
 ***/

function modify($sql) {
	$result=connect()->query($sql);
	connect()->close();
	return $result;
}

// ----- CRUD MŰVELETEK ----- //

// CREATE (insert)
function insertRecord($table, $fields, $values) {
    $sql="INSERT INTO $table ($fields) VALUES ($values);";
    return modify($sql);
}

// READ - rekord(ok) lekérése egy mezőérték szerint
function readItem($table, $field, $value) {
    $sql= "SELECT * FROM $table WHERE $field=$value";
    return query($sql);
}
// READ - összes rekord lekérése egy táblából
function readAll($table) {
    $sql= "SELECT * FROM $table";
    return query($sql);
} 

// UPDATE - egy rekord értéké(i)nek módosítása (általában id) szerint
function updateRecord($table, $updates, $id_field, $id_value) {
    $sql= "UPDATE $table SET $updates WHERE $id_field=$id_value";
    return modify($sql);
}

// DELETE - egy rekord törlése egy mező (általábn id) szerint
function deleteRecord($table, $id_field, $id_value) {
    $sql= "DELETE FROM $table WHERE $id_field=$id_value";
    return modify($sql);
}
?>