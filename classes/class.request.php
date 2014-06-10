<?php
/**
 * #############################################################################
 * #                                                                           #
 * # copyright (c) 2014 marcos software, all rights reserved                   #
 * #                                                                           #
 * # this file may not be redistributed in whole or significant part           #
 * # and is subject to the marcos software license.                            #
 * #                                                                           #
 * # @author: marcos software - Marc Costea, <info@marcos-software.de>         #
 * # @copyright: 2014, marcos-software, http://www.marcos-software.de          #
 * #                                                                           #
 * #############################################################################
 */
 
class Request {
   
    private $_missingParameter;
    private $_answer;    
    public  $method;
    public  $apiKey1; 
    public  $apiKey2;
    public  $objects;
    
    public function __construct($pluginKey, $answer, $missingParameter, $REQUEST, $POST, $GET, $methode = 'REQUEST') {
    
        $this->_missingParameter = $missingParameter;   
        $this->_answer           = $answer;
        $rc4                     = new RC4($pluginKey);
        
        switch($methode) {
            
            case 'GET':
                $input = $GET;
                break;
            case 'POST':
                $input = $POST;
                break;
            default:
                $input = $REQUEST;  
        } 
        
        $this->method  = $input['method'];
        $this->apiKey1 = $input['apiKey1'];
        $this->apiKey2 = $input['apiKey2'];

        $content       = utf8_encode($rc4->decrypt($input['data']));
        $decode        = json_decode($content, false);

        $this->objects = $decode->objects;
    }
}
?>