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
 
class Error {
    
    public $Code;
    public $Message;
    
    public function Error($code = -1, $message = '') {

        $this->Code = $code;  
        $this->Message = $message;  
    }  
    
    public function setErrorCode($code = -1) {
    
        $this->Code = $code;  
    }
    
    public function setErrorMessage($message = '') {
    
        $this->Message = $message;  
    }     
} 
?>