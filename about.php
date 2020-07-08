<?php
    $type=$_REQUEST["type"];
    $conn=mysqli_connect("127.0.0.1","root","","h52002",3306);
    mysqli_query($conn,"SET NAMES utf8");
    if($type==1){
        $sql="SELECT * FROM coffeenews ORDER BY id DESC LIMIT 5";
        $result=mysqli_query($conn,$sql);
        $arr=[];
        while(($row=mysqli_fetch_assoc($result))!=null){
            array_push($arr,$row);
        }
        echo JSON_encode($arr);
    }else if($type==2){
        $index1=$_REQUEST["index1"];
        $sql="SELECT * FROM coffeenews WHERE id=$index1";
        $result=mysqli_query($conn,$sql);
        while(($row=mysqli_fetch_assoc($result))!=null){
            echo JSON_encode($row);
        }
    }else if($type==3){
        $sql="SELECT * FROM coffeeproduct";
        $result=mysqli_query($conn,$sql);
        $arr1=[];
        while(($row=mysqli_fetch_assoc($result))!=null){
            array_push($arr1,$row);
        }
        echo JSON_encode($arr1);
    }else if($type==4){
        $index2=$_REQUEST["index2"];
        $sql="SELECT * FROM coffeeproduct WHERE id=$index2";
        $result=mysqli_query($conn,$sql);
        while(($row=mysqli_fetch_assoc($result))!=null){
            echo JSON_encode($row);
        }
    }
    mysqli_close($conn);
?>