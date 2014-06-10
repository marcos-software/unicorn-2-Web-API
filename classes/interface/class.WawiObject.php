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
 
class WawiObject {
    
    private $_data                   = array();
    public  $WawiId                  = 0;  
    
    public function __set($name, $value) { 
           
        switch ($name) {
        
            case 'PluginId':
                $this->_pluginId     = $value;
                break;
            case 'ShopId':
                $this->_shopId       = $value;
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
            case 'ShopId':
                return (!is_null($this->_pluginId) ? $this->_pluginId : (!is_null($this->_shopId) ? $this->_shopId : 'W-'.$this->WawiId));
                break;
            case 'HasShopId':
                return !is_null($this->_shopId);
                break;
            default:
                return (array_key_exists($name, $this->_data) ? $this->_data[$name] : (property_exists($this, $name) ? $this->$name : null));
        }
    } 

    public function __construct() {   	

        $this->WawiId                = 0;
    		$this->Shop                  = new ShopBase();
    } 
	  
    public function Init($wawiObject) {
        
        if(!is_null($wawiObject)) {
        
            $this->WawiId            = $wawiObject->WawiId;
        }else {
        
            $this->WawiId            = -1;   
        }
    }
    
    public function Equals($obj) {
        
        if(!is_null($obj)) $wawiObject = $this->Cast('WawiObject', $obj);
        
        if(!is_null($wawiObject)) {
        
            return $this->GetHashCode() == $wawiObject->GetHashCode(); 
        }
        
        return false;
    }
    
    public function GetHashCode() {
        
        return $this->WawiId;
    }
    
    public function CompareTo($obj) {
        
        $other = $this->Cast('WawiObject', $obj);
        
        if(!is_null($other)) {
        
            if ($this->WawiId < $other->WawiId) return -1;
            if ($this->WawiId > $other->WawiId) return 1;
        }
        else
        {
            return 1;
        }

        return 0;
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