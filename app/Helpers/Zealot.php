<?php

if (!function_exists('featureMediumImage')) {
    
    function featureMediumImage($id)
    {
        try{
            return json_decode(file_get_contents('http://loveplanet.live/wp-json/wp/v2/media/'.$id),true)['media_details']['sizes']['medium']['source_url'];
        }catch(\Exception $e){
            return '/img/random/random_'.rand(1,20).'.jpg';
        }
    }
}
