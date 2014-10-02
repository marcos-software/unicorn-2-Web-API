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
    
    public $Results = array();
    public $Error;
    public $Key;
    public $Stop;
    private $_rc4;
    
    public function __construct($pluginKey, $missingParameter) {   	

        $this->Stop = $missingParameter == 'Y';
        $this->_rc4  = new RC4($pluginKey);
    } 
      
    public function setKey($key) {

        $this->Key = $key;  
    }
    
    public function setErrorCode($code) {
    
        $message = '';

        switch($code){
        
            case 100:
                /* no error, all successed */
                return;
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

        $this->setError($code, $message);
    }
    
    public function setError($code = -1, $message = '') {
    
        $this->Error = new Error($code, $message);
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
    
    public function addResult($result) {
    
        if(in_array($result, $this->Results)) return false;
        
        array_push($this->Results, $result); 
        return true; 
    }
    
    public function deleteResult($result) {
    
        if(!in_array($result, $this->Results)) return false;
        
        if(($key = array_search($result, $this->Results, true)) !== false) {
        
            unset($this->Results[$key]);
        }
        return true; 
    }
    
    public function send() {
    
        /*
        $answer            = array();
        $answer['key']     = $this->Key;
        $answer['state']   = $this->_state;
        $answer['error']   = $this->Error;
        $answer['stop']    = $this->Stop;
        $answer['results'] = $this->Results;
        
        $json              = json_encode($this);

        $content           = $this->_rc4->encrypt(json_encode($this));  
        */  
        echo $this->_rc4->encrypt(json_encode($this));  
        exit();    
    }  
    
    public function prepare($method) {

        $nonRemovalProperties = array('WawiId', 'ShopId', 'Name');           
        $clearedResults       = array();
        
        if ((strpos($method,'add') !== false) || 
            (strpos($method,'set') !== false) || 
            (strpos($method,'del') !== false)) {
            
            foreach($this->Results as $result) {
            
                $clearedResult             = new Result();
                $clearedResult->Errors     = $result->Errors;
                $clearedResult->Collection = $result->Collection;
                $clearedResult->Item       = $this->remove($result->Item, $nonRemovalProperties);     
                
                array_push($clearedResults, $clearedResult);       
            } 

            unset($this->Results);
            $this->Results    = $clearedResults;       
        }
    }
    
    private function remove($object, $nonRemovalProperties) {
    
        $newObject = new stdClass;
        
        foreach($object as $property => $value) {
            
            if(!is_object($value)) {
            
                if(in_array($property, $nonRemovalProperties)) {

                     $newObject->$property = $value;
                }            
            } else {
            
                $newObject->$property = $this->remove($value, $nonRemovalProperties);              
            }
        }
    
        return $newObject;      
    }   
} 
?>