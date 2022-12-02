<?php
require_once 'list.php';
$delete_sql = "DELETE FROM products WHERE id ";

mysqli_query($conn, $delete_sql);
echo "ok"; 