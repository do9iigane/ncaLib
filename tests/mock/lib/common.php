<?php

/**
 * @author do9iigane <dokumegane@interestic.com>
 */

namespace nhk\lib;

class mock_common extends common{


    public function getAPIKey()
    {
    }

    public function getAPIVersion()
    {
    }

    public function getArea()
    {
    }
    
    public function getGenre()
    {
    }
    
    public function getId()
    {
    }
    
    public function getService()
    {
    }

    public function getDate()
    {
    }
    
    public function getRequestURL($type, $resource='all')
    {
        
        $preset = "http://http://api.nhk.or.jp/" .
                APIVERSION . "/" .
                "pg/" .
                $type . "/";
        
        switch ($type) {
            case 'genre':
                return $preset.$this->area.'/'.$this->genre.'/'.$this->date.'.json?key='.APIKEY;
                break;
            case 'info':
                return $preset.$this->area.'/'.$this->id.'.json?key='.APIKEY;
                break;
            case 'now':
                return $preset.$this->area.'/'.$resource.'.json?key='.APIKEY;
                break;
            case 'list':
            default:
                return $preset.$this->area.'/'.$this->service.'/'.$this->date.'.json?key='.APIKEY;
                break;

            }
    }
    
    function requestAPI($endpoint)
    {
        switch ($endpoint) {
            case $value:


                break;

            default:
                break;
        }
    }

}