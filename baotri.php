<?php
require('Iz_Shower/settings.php');
if ($bao_tri == true) {
echo "Website đang bảo trì !";
} else {
    header('Location: /home');
}
?>