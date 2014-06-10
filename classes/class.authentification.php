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
 
class Authentification {
    
    private $_publicKey1;
    private $_publicKey2;    
    private $_privatKey;       
    
    public function __construct($request, $privateKey, $answer) {   	

        $this->_publicKey1 = $request->apiKey1;
        $this->_publicKey2 = $request->apiKey2;
        $this->_privatKey  = $privateKey;
        
        $answer->setKey($this->generateKey());         		
        
        if(!$this->isValid()){
    		
            $answer->error(102);
            $answer->send();
        }  	 		
    } 
    
    private function isValid() {

        return $this->_publicKey2 == (md5($this->_publicKey1 . $this->_privatKey));        
    }
    
    private function generateKey() {

        return md5($this->_publicKey2 . $this->_privatKey);  
    }    
}
?>