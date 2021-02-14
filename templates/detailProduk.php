<?php 
    
   $id_produk = $_GET['id'];
   $sql = "SELECT * FROM data_produk WHERE id='$id_produk'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();

   echo "<pre>";
   print_r($row);
   echo "</pre>";

?>
<div>
    <h1>ini detail produk <?php echo $row['id'] ?> </h1>
</div>

<div>
    <a href="index.php">Back</a>
</div>