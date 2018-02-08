<?php
  
 session_start();
 include('UploadDocumentSECDTI.php');
 include('UploadDocumentBusiPer.php');
 include('UploadDocumentBIR.php');
 echo 'upload was successful';
 header('Location: ../uploaddocument.php?success=1');
?>
