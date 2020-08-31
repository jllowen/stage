<div class="blokie">
<?php
$result5 = mysqli_query($conn,"SELECT * FROM `product`"); 
while($row = mysqli_fetch_assoc($result5)){
echo "<div class='card'>
  <img src='#' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='title'> ". $row['naam'] ."</h5>
    <p class='text'>". $row['text'] ."</p>
    <p class='text'>". $row['price'] ."</p>
    <a href='cart.php?func=add&itemid=".$row['itemid']."&amount=1' class='btn btn-lg active button2' id='txtclr' >Buy now</a>
                                </div>
  </div>
";}
?>
</div>