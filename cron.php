<?php
$conn = new mysqli("localhost", "root", "", "whatsapp_db");

$result = $conn->query("SELECT * FROM messages WHERE schedule <= NOW()");
while ($row = $result->fetch_assoc()) {
    file_get_contents("http://localhost/whatsapp-automation/backend/php-execution/send.php?phone=" . $row['phone'] . "&message=" . urlencode($row['content']));
    $conn->query("DELETE FROM messages WHERE id=" . $row['id']);
}
?>
