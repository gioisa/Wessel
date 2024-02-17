<?php
function AssetPath($path){
    try{
        $get_config = __DIR__ . '/global_config.json';
        $json_config = file_get_contents($get_config);
        $data = json_decode($json_config, true);
        $assetPath = $data["assetsPath"];
        if($assetPath == "" || $assetPath == null){
            return "/Web/Assets/{$path}";
        } else {
            return "{$data["webHost"]}/$assetPath/{$path}";
        }
    }catch(Exception $e){
        return $e->getMessage();
    }
}

function GlobalPath($path){
    try{
        $get_config = __DIR__ . '/global_config.json';
        $json_config = file_get_contents($get_config);
        $data = json_decode($json_config, true);
        $assetPath = $data["webHost"];
        if($assetPath == "" || $assetPath == null){
            return "/Web/Assets/{$path}";
        } else {
            return "$assetPath/Web/{$path}";
        }
    }catch(Exception $e){
        return $e->getMessage();
    }
}

?>