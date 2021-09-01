<?php

function test_input($inputs)
{
  $inputs = trim($inputs);
  $inputs = stripslashes($inputs);
  $inputs = htmlspecialchars($inputs);

  return $inputs;

}

?>