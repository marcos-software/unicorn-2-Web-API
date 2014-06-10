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
 
class MappingObject extends WawiObject {
    
    private $_data                   = array();
    private $_pluginId;
    private $_shopId;
    public  $Success                 = false;  
    public  $Shop;  
    public  $ShopId;
    
    public function __set($name, $value) { 
           
        switch ($name) {
        
            case 'PluginId':
                $this->_pluginId     = $value;
                break;
            default:
                $this->_data[$name]  = $value;
        }
    }
    
    public function __get($name) {
    
        switch ($name) {
        
            case 'PluginId':
                return $this->ShopId;
                break;
            case 'HasShopId':
                return !is_null($this->_shopId);
                break;
            default:
                return (array_key_exists($name, $this->_data) ? $this->_data[$name] : (property_exists($this, $name) ? $this->$name : null));
        }
    } 

    public function __construct() {   	

        $this->Success               = false;
    		$this->Shop                  = new ShopBase();
    } 
	  
    public function Init($mappingObject) {

        if(!is_null($mappingObject)) $this->Init($this->Cast('WawiObject', $mappingObject));
        
        if(!is_null($mappingObject)) {
        
            $this->ShopId            = $mappingObject->ShopId;
            $this->Shop              = $mappingObject->Shop;
        }else {
        
            $this->Shop              = new ShopBase();    
        }
    } 
    
    private function Cast($destination, $sourceObject) {
        
        if (is_string($destination)) {
        
            $destination             = new $destination();
        }
        
        $sourceReflection            = new ReflectionObject($sourceObject);
        $destinationReflection       = new ReflectionObject($destination);
        $sourceProperties            = $sourceReflection->getProperties();
        
        foreach ($sourceProperties as $sourceProperty) {
        
            $sourceProperty->setAccessible(true);
            $name = $sourceProperty->getName();
            $value = $sourceProperty->getValue($sourceObject);
            
            if ($destinationReflection->hasProperty($name)) {
            
                $propDest            = $destinationReflection->getProperty($name);
                $propDest->setAccessible(true);
                $propDest->setValue($destination,$value);
            } else {
            
                $destination->$name  = $value;
            }
        }
        return $destination;
    }    
}     
?>