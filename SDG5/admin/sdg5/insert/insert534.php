<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $no_ppa_women = $_POST['no_ppa_women'];
    $no_internal_ppa = $_POST['no_internal_ppa'];
    $no_external_ppa = $_POST['no_external_ppa'];
    $title_ppa = $_POST['title_ppa'];
    $description_ppa = $_POST['description_ppa'];
    $total_cost = $_POST['total_cost'];
    $fund_source = $_POST['fund_source'];


    $query = "INSERT INTO `research5.3.4` (no_ppa_women, no_internal_ppa, no_external_ppa, title_ppa, description_ppa, total_cost, fund_source) VALUES ('$no_ppa_women', '$no_internal_ppa', '$no_external_ppa', '$title_ppa', '$description_ppa', '$total_cost', '$fund_source')";
    $insert = mysqli_query($conn,$query);

    if($insert){
        header("Location:../../../admin/sdg5/formsdg5.php?message=Insert Successful");
    }else if(!$insert){
        die("Query failed. " . mysqli_error($conn));
    }
}
else {
    echo "Invalid request method";
}

?>