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
 
class Answer {
    
    public  $_container = array();
    private $_state = 100;
    private $_error = array();
    private $_answerKey;
    private $_stop;
    private $_rc4;
    
    /* States:
    
    100 - success
    101 - parameter is missing
    102 - authentification is not valid
    103 - licence is not valid
    
    */
    
    public function __construct($pluginKey, $missingParameter) {   	

        $this->_stop = $missingParameter == 'Y';
        $this->_rc4  = new RC4($pluginKey);
    } 
      
    public function setKey($key) {

        $this->_answerKey = $key;  
    }
    
    public function error($state = 104, $parameter = null) {
    
        $this->_state = $state;
        
        switch($state){
        
            case 101:
                $message = "parameter is missing: $parameter";
                break;
            case 102:
                $message = 'authentification is not valid';
                break;  
            case 103:
                $message = 'licence is not valid';
                break;            
        }
        
        array_push($this->_error, $message);
    }
    
    public function add($key, $value) {
    
        if(!empty($this->_container[$key])) return false;
        
        $this->_container[$key] = $value;
        return true; 
    }
    
    public function update($key, $value) {
    
        if(empty($this->_container[$key])) return false;
        
        $this->_container[$key] = $value;
        return true; 
    }
    
    public function delete($key) {
    
        if(empty($this->_container[$key])) return true;
        
        unset($this->_container[$key]);
        return true; 
    }
    
    public function send() {
    
        $answer           = array();
        $answer['key']    = $this->_answerKey;
        $answer['state']  = $this->_state;
        $answer['error']  = $this->_error;
        $answer['stop']   = $this->_stop;
        $answer['answer'] = $this->_container;
        
        $json             = json_encode($answer);
        
        $content          = $this->_rc4->encrypt($json);  
          
        echo $content;
        exit();    
    }  
    
    public function prepare($request) {

        $removalProperties = array();
    
        if (strpos($request->method,'Article') !== false) {

            array_push($removalProperties, 'FunktionsAttribute', 'Beschreibungen', 'KurzBeschreibungen');
        }
        
        if (strpos($request->method,'Category') !== false) {
        
            array_push($removalProperties, 'FunktionsAttribute');
        }
        
        foreach($request->objects as $object) {

            foreach($removalProperties as $removalProperty) {
            
                $object->$removalProperty = null;
            }             
        }            
    }  
} 
?>