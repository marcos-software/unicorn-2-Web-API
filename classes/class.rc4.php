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
 
class RC4 {
   
    private $_key;
    private $_permVectors = array(); 
    
    public function __construct($key) {
    
        $this->_key = md5($key);        
    }
    
    public function encrypt($text) {

        $permVector = $this->getPermVector();
        $n          = strlen($text); 
        $i          = 0;
        $j          = 0; 
        $textArr    = str_split($text, 1); 
        
        for ($m = 0; $m < $n; $m++) { 
        
            $i           = ($i + 1) % 256; 
            $j           = ($j + $permVector[$i]) % 256; 
            
            $this->swap($permVector[$i], $permVector[$j]); 
            $char        = ord($textArr{$m}); 
            $char        = $permVector[($permVector[$i] + $permVector[$j]) % 256] ^ $char; 
            $textArr[$m] = chr($char); 
        } 
        
        $returnText = '';
        $asciiArr = array();
        
        foreach ($textArr as $c) $returnText .= ord($c) . '|';
            if(strlen($returnText) > 0 && substr($returnText, -1) == '|') $returnText = substr($returnText, 0, -1);

        return $returnText;
    }
    
    public function decrypt($inputText) {
    
        $asciiArr = explode('|' , $inputText);
        $text = '';
        
        foreach($asciiArr as $c) $text .= chr($c); 
        
        $permVector = $this->getPermVector();
        $n          = strlen($text); 
        $i          = 0;
        $j          = 0; 
        $textArr    = str_split($text, 1); 
        
        for ($m = 0; $m < $n; $m++) { 
        
            $i           = ($i + 1) % 256; 
            $j           = ($j + $permVector[$i]) % 256; 
            
            $this->swap($permVector[$i], $permVector[$j]); 
            $char        = ord($textArr{$m}); 
            $char        = $permVector[($permVector[$i] + $permVector[$j]) % 256] ^ $char; 
            $textArr[$m] = chr($char); 
        } 
        
        $returnText = '';
        foreach ($textArr as $c) $returnText .= $c;

        return $returnText;
    } 
    
    private function swap(&$var1, &$var2) {
    
        $tmp  = $var1;
        $var1 = $var2;
        $var2 = $tmp;     
    }
    
    private function getPermVector() {
    
        $index = md5($this->_key);
               
        if (!isset($this->_permVectors[$index])) { 
            
            $permVector = range(0, 255); 
            $j          = 0; 
            $n          = strlen($this->_key); 
            
            for ($i = 0; $i < 255; $i++) { 
            
                $char  = ord($this->_key{$i % $n}); 
                $j     = ($j + $permVector[$i] + $char) % 256; 
                $this->swap($permVector[$i], $permVector[$j]); 
            } 
            
            $this->_permVectors[$index] = $permVector; 
        } 
        
        return $this->_permVectors[$index]; 
    } 
}
?>