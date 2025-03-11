<?php
// Database connection
$host = "localhost"; // Change to your database host
$username = "jetwydqb_whmc203"; // Change to your database username
$password = "!!Y[2)6B-757SpaZ"; // Change to your database password
$database = "jetwydqb_whmc203"; // Change to your WHMCS database name

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get search term from AJAX request
$search = isset($_POST['search']) ? $_POST['search'] : ''; // Search term
$limit = 10; // Number of records per page
$page = isset($_POST['page']) ? (int)$_POST['page'] : 1; // Current page number
$offset = ($page - 1) * $limit; // Offset for SQL query

// SQL query to fetch domain pricing with search
$query = "
    SELECT 
        dp.extension AS domain_name,
        p1.msetupfee AS register_price,
        p2.msetupfee AS transfer_price,
        p3.msetupfee AS renew_price
    FROM
        tbldomainpricing AS dp
    LEFT JOIN tblpricing AS p1 ON dp.id = p1.relid AND p1.type = 'domainregister'
    LEFT JOIN tblpricing AS p2 ON dp.id = p2.relid AND p2.type = 'domaintransfer'
    LEFT JOIN tblpricing AS p3 ON dp.id = p3.relid AND p3.type = 'domainrenew'
    WHERE dp.extension LIKE '%$search%'
    LIMIT $limit OFFSET $offset
";

$result = $conn->query($query);

// Fetch total records for pagination
$total_query = "
    SELECT COUNT(*) AS total 
    FROM tbldomainpricing AS dp 
    WHERE dp.extension LIKE '%$search%'
";
$total_result = $conn->query($total_query);
$total_row = $total_result->fetch_assoc();
$total_records = $total_row['total'];
$total_pages = ceil($total_records / $limit);

// Prepare response
$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Return response as JSON
echo json_encode([
    'data' => $data,
    'total_pages' => $total_pages,
    'current_page' => $page
]);

$conn->close();
