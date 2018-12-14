
 
<?php

include "layout/header_script.php";
include "page/print_page/print_page.php";

?>

<script type="text/javascript">
  

    print_page();
    function print_page(){
      window.print();
      window.close();
    }

</script>