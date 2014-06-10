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
 
class Category {

    public $Name;
    public $ID;
    public $Subcategory;    
    
    public function __construct($category = null) {   	

        if(!is_null($category)) {
        
            $this->Name = $category->Name;
            $this->ID   = $category->ID;

            if (!is_null($category->Subcategory)) $this->Subcategory = new Category($category->Subcategory);
        } 
    }   	  
}     
?>