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
 
class Result {
    
    public $Errors = array();    
    public $Collection = array();
    public $Item;
    
    public function Result($item) {

        $this->Item = $item;       
    }
    
    public function addCollectionEntry($item) {
    
        array_push($this->Collection, $item); 
    }

    public function addError($code = -1, $message = '') {
    
        array_push($this->Errors, new Error($code, $message));
    }
} 
?>