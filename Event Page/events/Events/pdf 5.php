<?php
$file_url = 'Find A Path.pdf';
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="Rules And Regulations For Find A Path.pdf"');
readfile($file_url);
?>
