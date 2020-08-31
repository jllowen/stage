<?php 
//include('./cart.php');
if (isset($_COOKIE['cart'])) {
//probeert som
    $cart = json_decode($_COOKIE['cart'], 1);
    $priceTotal = 0;

    ?>
    <div id="cartsz">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">amount</th>
                        <th scope="col">price</th>
                        <th scope="col">price totaal</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($cart as $itemid => $ammount) {
                        $sql = "SELECT * FROM product WHERE itemid = $itemid";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $btotaal =  $row['price'] * $ammount;

                        $priceTotal += $btotaal;
                        ?>
                        <tr>
                            <td><?= $itemid ?></th>
                            <td><?= $row['naam'] ?></td>
                            <td><?= $ammount ?></td>
                            <td><?= $row['price'] ?></td>
                            <td>&euro; <?= number_format($btotaal, 2, ',', '') ?></td>
                            <td><?php echo "<a href='cart.php?func=remove&itemid=".$row['itemid']."&amount=1' class='btn btn-lg active button2' id='txtclr' >delete </a>"; ?> </td>
                        </tr>    
                        <?php
                    }  
                    ?>
                    <tr>
                        <td colspan="2">Totaal</td>
                        <td colspan="2"><?= $ammounts ?></td>
                        <td>&euro; <?= number_format($priceTotal, 2, ',', '') ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button type='submit' class='#'>Buy Now</button>
    <?php
} else {
    echo 'Geen producten in winkelwagen';
}
//var_dump($_COOKIE);
?>
