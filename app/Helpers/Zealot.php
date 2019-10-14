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

if (!function_exists('featureFullImage')) {

    function featureFullImage($id)
    {
        try{
            return json_decode(file_get_contents('http://loveplanet.live/wp-json/wp/v2/media/'.$id),true)['media_details']['sizes']['full']['source_url'];
        }catch(\Exception $e){
            return '/img/random/random_'.rand(1,20).'.jpg';
        }
    }
}

##this is sample and copy 

if (!function_exists('sample')) {

    function sample($id)
    {
        try{
            return json_decode(file_get_contents('http://loveplanet.live/wp-json/wp/v2/media/'.$id),true)['media_details']['sizes']['full']['source_url'];
        }catch(\Exception $e){
            return '/img/random/random_'.rand(1,20).'.jpg';
        }
    }
}
