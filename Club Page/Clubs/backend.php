<?php
$file_url = 'Resume_YOKKESH_K_CSE-1.pdf';
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; Brochure.pdf"');
readfile($file_url);
?>
