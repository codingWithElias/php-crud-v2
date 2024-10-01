<?php
function read($conn){
	$sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute([]);

    if ($stmt->rowCount() > 0) {
    	$users = $stmt->fetchAll();
    }else $users = 0;

    return $users;
}

function readById($conn, $id){
	$sql = "SELECT * FROM users WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    if ($stmt->rowCount() > 0) {
    	$user = $stmt->fetch();
    }else $user = 0;

    return $user;
}
