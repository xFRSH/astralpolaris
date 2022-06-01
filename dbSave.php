<?php
    require "conn.php";
    $macaddr = $_POST["macaddr"];
    $ssid = $_POST["ssid"];
    $level = $_POST["level"];
    $lokasi = $_POST["lokasi"];
  
    if($conn == true){
        $sql_macaddr = "SELECT * FROM jaringan WHERE macaddr LIKE '$macaddr'";
        $macaddr_check = mysqli_query($conn, $sql_macaddr);
        if($macaddr == ""){
            echo "This an empty data";
        }else if(mysqli_num_rows($macaddr_check) > 0){
            echo "Data yang sama telah tersimpan";
        }
        else{
            $sql_register = "INSERT INTO jaringan (macaddr,ssid,level,lokasi) VALUES ('$macaddr','$ssid','$level','$lokasi')";
            if(mysqli_query($conn,$sql_register)){
                echo "Data ditambahkan";
            }else{
                echo "gagal menambahkan data";
            }
        }
    }
    else{
        echo "Connection Error";
    }
?>
