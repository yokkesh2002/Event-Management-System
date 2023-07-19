<?php
$file_url = 'Shuffled Codes.pdf';
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="Rules And Regulations For Shuffled Codes.pdf"');
readfile($file_url);
?>
