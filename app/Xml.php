<?php

namespace App;

class Xml
{
    protected $xml;
    
    /**
     * @return mixed
     */
    public function getXml()
    {
        return $this->xml->channel;
    }

    /**
     * @param mixed $url
     *
     * @return self
     */
    public function setXml($url)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // Getting the content:
        curl_setopt($ch, CURLOPT_URL, $url);

        // Executing th erequest:
        $data = curl_exec($ch);
        curl_close($ch);

        $xml = simplexml_load_string($data);
 
        $this->xml = $xml;

        return $this;
    }
}
