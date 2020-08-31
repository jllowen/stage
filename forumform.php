

<?php
$result = mysqli_query($conn, "SELECT * FROM `forum`");
while ($row = mysqli_fetch_assoc($result)) {
$result2 = mysqli_query($conn, "SELECT * FROM `users` where `userid` = ". $row['userid'] . "");
if ($row2 = mysqli_fetch_assoc($result2))
 {echo '<div class="comment"> <p class="fullname">' . $row2['naam'] .' '. $row2['achternaam'] . '</p>' ;}
 echo '<p class="title">'. $row['title'] .'</p>
 <p class="text">'. $row['text'] .'</p> </div>'
;}
?>
<div>
<?php
echo '<div class="form-group">
<form action="?pageid=index15" method="post">
<label for="exampleInputreactie1">reactie</label>
<input type="title" name="title" class="form-control" id="exampleInputtitle" placeholder="title">
<input type="text" name="text" class="form-control" id="exampleInputtext" placeholder="text">
<div class="col-6">
<button type="submit" id="txtclr" class="btn btn-outline-info btn-lg btn-block">plaats reactie</button>
</form>
</div>

'
?>
</div>