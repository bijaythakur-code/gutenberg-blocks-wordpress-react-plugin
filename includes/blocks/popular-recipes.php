<?php

function up_popular_recipes_cb()
{
  ob_start();
?>

  <?php

  $output = ob_get_clean();
  ob_end_clean();

  return $output;
}
