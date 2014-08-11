<pre>
Array
(
    [file] => Array
        (
            [name] => wallpaper-94255.jpg
            [type] => image/jpeg
            [tmp_name] => /tmp/phpaNux1a
            [error] => 0
            [size] => 1028697
        )

)

<?php
print_r($_FILES);
print_r($_POST);
print_r($_GET);

if(move_uploaded_file($_FILES['file']['tmp_name'], "".$_FILES['file']['name'])){
	echo "archivo actulizado correctamento";
}else{
	echo "Error en upload file";
}

?>