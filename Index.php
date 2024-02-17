<?php
try{
    $get_config = 'Config/global_config.json';
    $json_config = file_get_contents($get_config);
    $data = json_decode($json_config, true);
    
    header("Location: {$data["rootApps"]}");
    exit();
}catch(Exception $e){

}

?>