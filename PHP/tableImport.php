<table id="ProductsTable" class="table table-striped">
<thead>
<tr>
<th>Transaction ID</th>
<th>ProductName</th>
<th>Stock</th>
<th>UnitPrice</th>

</tr>
</thead>
<tbody>
<?php
$sql_query = "SELECT transactionID, ProductName, Stock, UnitPrice FROM Products LIMIT 10";
$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
while( $Products = mysqli_fetch_assoc($resultset) ) {
?>
<tr id="<?php echo $Products ['transactionID']; ?>">
<td><?php echo $Products ['transactionID']; ?></td>
<td><?php echo $Products ['ProductName']; ?></td>
<td><?php echo $Products ['Stock']; ?></td>
<td><?php echo $Products ['UnitPrice']; ?></td>

</tr>
<?php } ?>
</tbody>
</table>

<!--------------------

//hideIdentifier: true,
url: 'live_edit.php'
});
});