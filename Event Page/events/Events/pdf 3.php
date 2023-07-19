<?php
$file_url = 'select from brain.pdf';
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="Rules And Regulations For select from brain.pdf"');
readfile($file_url);
?>
