<?php

/**
 * @author do9iigane <dokumegane@interestic.com>
 */
namespace nhk;
require_once './lib/common.php';
require_once './lib/config.inc.php';
require_once './lib/DI.php';

class nhkChannelLibrary {

    private $common;
    private $endpoint;
    
    function __construct()
    {
        $this->common =  \nhk\lib\DI::get('\nhk\lib\common');
    }
    
    function __destruct()
    {
        return $this->common->requestAPI($this->endpoint);
    }

    public function programListAPI()
    {
        $this->endpoint = $this->common->getRequestURL('list');
        return $this->endpoint;
    }

    public function programGenreAPI()
    {
        $this->endpoint = $this->common->getRequestURL('genre');
        return $this->endpoint;
    }

    public function programInfoAPI()
    {
        $this->endpoint = $this->common->getRequestURL('info');
        return $this->endpoint;
    }

    public function nowOnAirAPI()
    {
        $this->endpoint = $this->common->getRequestURL('now');
        return $this->endpoint;
    }

}