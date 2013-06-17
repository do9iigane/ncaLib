<?php

/**
 * @author do9iigane <dokumegane@interestic.com>
 */

namespace nhk\lib;

class common {
public $area = null;
public $genre = null;
public $id = null;
public $service = null;
public $date = null;

    public function __construct()
    {
        $this->area = self::getArea();
        $this->genre = self::getGenre();
        $this->id = self::getId();
        $this->service = self::getService();
        $this->date = self::getDate();
        $this->request = $_REQUEST;
    }

    public function getAPIKey()
    {
        return APIKEY;
    }

    public function getAPIVersion()
    {
        return APIVERSION;
    }

    public function getArea()
    {
        return isset($this->request['area']) ? $this->request['area'] : 130;
    }
    
    public function getGenre()
    {
        return isset($this->request['genre']) ? $this->request['genre'] : '0002';
    }
    
    public function getId()
    {
        return isset($this->request['id']) ? $this->request['id'] : 2013010656789;
    }
    
    public function getService()
    {
        return isset($this->request['service']) ? $this->request['service'] : 'g1';
    }

    public function getDate()
    {
        return isset($this->request['date']) ? $this->request['date'] : date('Y-m-d');
    }
    
    /**
     * 
     * @param string $type [list](PROGRAM LIST API), [genre](PROGRAM GENRE API), [info](PROGRAM INFO API), [now](NOW ON AIR API)
     * @param string $resource [all](全サービスを指定する場合), [tv](テレビを指定する場合), [radio](ラジオを指定する場合)
     * @return type
     */
    public function getRequestURL($type, $resource='all')
    {
        
        $preset = "http://api.nhk.or.jp/" .
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
        try {
            return json_encode(file_get_contents($endpoint));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }

    }

}