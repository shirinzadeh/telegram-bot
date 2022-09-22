<form action="" method="post">
    <input type="text" name="message">
    <input type="submit" name="submit">
</form>


<?php
    if(isset($_POST['submit']))
    {
        $apiToken = "5692298975:AAFR5NJ9_BSEwkVXkUlnGGYuYerUXtIL4E4";
        $data = [
            'chat_id' => '@getregmessage', 
            'text' => $_POST['message']
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );    
    }
?>