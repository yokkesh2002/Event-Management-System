<?php
$file_url = 'Code Golf.pdf';
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="Rules And Regulations For Code Golf.pdf"');
readfile($file_url);
?>
