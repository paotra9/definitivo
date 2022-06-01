<?php
    $c = mysqli_connect("localhost","root","","definitiva");
    $usr = $_POST['usr'];
    $pas = $_POST['pas'];
    
    $p1 = "SELECT * FROM admin WHERE user='$usr' AND password='$pas' ";
    $r1 = mysqli_query($c,$p1);
    $f0 = mysqli_num_rows($r1);
    $f1 = mysqli_fetch_array($r1);

    if($f0 > 0){
        echo "<script type='text/javascript'>window.location='admin.php';</script>";
        die();
    }

    $p2 = "SELECT * FROM supervisor WHERE user='$usr' AND password='$pas' ";
    $r2 = mysqli_query($c,$p2);
    $f2 = mysqli_fetch_array($r2);
    $f21 = mysqli_num_rows($r2);
    if($f21 > 0){
        echo "<script type='text/javascript'>window.location='super.php';</script>";
        die();
    }

    $p3 = "SELECT * FROM usuarios WHERE user='$usr' AND password='$pas' ";
    $r3 = mysqli_query($c,$p3);
    $f3 = mysqli_fetch_array($r3);
    $f31 = mysqli_num_rows($r3);
    if($f31 > 0){
        echo "<script type='text/javascript'>window.location='usuario.php';</script>";
        die();
    }

    echo "<script type='text/javascript'>window.location='error.php';</script>";
?>