<?php
$file_url = 'Ripplets.pdf';
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="Rules And Regulations For Ripplets.pdf"');
readfile($file_url);
?>
