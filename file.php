<?php require('header.php'); ?>

<?php require('menu_admin.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data" >
   Оруулах файл сонгох /upload/ :
        <input type="file" name="file" id="filetoUpload" />
        <input type="submit" value="Файл оруулах" name="submit" />
    </form>
    
</body>
</html>
<?php require('upload.php'); ?>


<?php require('footer.php'); ?>