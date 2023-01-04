<?php
  require_once 'controller.php';
  if(empty($_GET['reference'])) {
  $referenceId = trim($_GET['reference']);
  } else {
  $referenceId = trim($_GET['orderId']);
  }
  returnUrl($referenceId);