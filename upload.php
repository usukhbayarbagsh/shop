<?php
if ( isset( $_POST['submit'] ) ) {
    $target_dir = '';
    $target_file =  $target_dir . basename( $_FILES['file']['name'] );
    if ( move_uploaded_file( $_FILES['file']['tmp_name'], $target_file ) ) {
        echo 'Файл ' . basename( $_FILES['file']['name'] ) . ' амжилттай орууллаа';
    } else {
        echo 'Файл оруулж чадсангүй';
    }
}

?>*