<?php
//delete
$sql = "delete from longin where email='seuvil'";
$conection->query($sql);
//updateseuvil
$sql="update longin set email='dasilvapinto' where id=123";
$conection->query($sql);

//add
$sql = "insert into longin (id,email,senha) values (1,'seuvil','123@home')";
 $conection->query($sql);
