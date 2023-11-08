<?php

session_start();

session_destroy();

echo "<script>
        alert('Yakin ingin keluar   ?');
        document.location.href = 'index.php';
    </script>;";


?>