<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }else{
      return $dividend / $divisor;
  }
}

// echo divide(5, 0);
try {
    echo divide(5, 2);
} catch(Exception $e) {
    // echo "<p>$e</p>";
    echo "<p>Unable to divide.</p>";
}finally {
    echo "<p>code executed successfully!</p>";
  }
?>