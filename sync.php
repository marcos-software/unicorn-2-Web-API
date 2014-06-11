<?php
/**
 * #############################################################################
 * #                                                                           #
 * # This file is licensed under the                                           #
 * # creative commons attribution 3.0 unported license.                        #
 * #                                                                           #
 * #                                                                           #
 * # You are free:                                                             #
 * #                                                                           #
 * # to Share — to copy, distribute and transmit the work                      #
 * # to Remix — to adapt the work                                              #
 * # to make commercial use of the work                                        #
 * #                                                                           #
 * # Under the following conditions:                                           #
 * #                                                                           #
 * # Attribution — You must attribute the work in the manner specified by      #
 * # the author or licensor (but not in any way that suggests that they        #
 * # endorse you or your use of work).                                         #
 * #                                                                           #
 * #                                                                           #
 * # @author: marcos software - Marc Costea, <info@marcos-software.de>         #
 * #                                                                           #
 * #############################################################################
 */
      
function getKey() {

    $pluginKey;
    
    /**
     *  $pluginKey = 'yourSecretPluginKey':
     *  - for e.g. a licence key
     *  - should be unique for each plugincustomer
     *  
     *  NOTE: $pluginKey isn't allowed to be 'noKey'            
     */ 
                   
    return $pluginKey;
}

function checkLicence() {

    $isValid = false;
    
    /**
     *  check the licence (maybe with the api key ?!) and return a licencestate
     *  $isValid = your licencestate (true | false)        
     */                
    
    return $isValid;
}

function getShippingProfiles($shippingProfiles) {
    
    $yourShippingProfiles = array(); 
    
    /**
     *  return all shipping profiles for this marketplace (or this shop instance)
     *
     *  NOTE: Hurry up, unicorn 2 GUI is waiting for your answer!                            
     */       
     
     foreach($yourShippingProfiles as $profile) array_push($shippingProfiles->Collection, $profile);  
}

function addArticle($article) {

    /**
     *  add a new article to your marketplace and return the articleID
     *  unicorn 2 => your plugin
     *  $article->PluginId = your returned articleID;    
     *  $article->Success = successstate of your adding procedure                       
     */    
}

function setArticle($article) {
    
    /**
     *  update articledetails of an existing article in your marketplace and return a successstate
     *  you can identify the article with $article->ShopId          
     *  unicorn 2 => your plugin
     *  $article->Success = successstate of your updating procedure   
     */
}

function delArticle($article) {
    
    /**
     *  delete an existing article in your marketplace and return a successstate
     *  you can identify the article with $article->ShopId         
     *  unicorn 2 => your plugin
     *  $article->Success = successstate of your deleting procedure          
     */     
}

function addCategory($category) {
    
    /**
     *  add a new category to your marketplace and return the categoryID
     *  unicorn 2 => your plugin
     *  $category->PluginId = your returned categoryID;  
     *  $category->Success = successstate of your adding procedure                       
     */
}

function setCategory($category) {
    
    /**
     *  update categorydetails of an existing category in your marketplace and return a successstate
     *  you can identify the category with $category->ShopId        
     *  unicorn 2 => your plugin
     *  $category->Success = successstate of your updating procedure        
     */      
}

function delCategory($category) {
    
    /**
     *  delete an existing category in your marketplace and return a successstate
     *  you can identify the category with $category->ShopId            
     *  unicorn 2 => your plugin
     *  $category->Success = successstate of your deleting procedure         
     */
}

function getOrder($orders) {

    $yourOrders = array();

    /**
     *  return orders, specified by following options
     *  - $orders->State     == open       <= return open orders     (all orders that are not sent and not cancelled)
     *  - $orders->State     == editable   <= return editable orders (if your marketplace separates between pending and editable orders, return all editable orders (without the pendings))     
     *  - $orders->State     == cancelled  <= return closed orders   (all orders that are sent or cancelled)       
     *  OPTIONAL:   
     *  - $orders->Startdate == dd.mm.YYYY <= return orders with state option and date between startdate und now  
     *                                    
     *  your plugin => unicorn 2
     */    
     
     foreach($yourOrders as $order) array_push($orders->Collection, $order);     
}

function setOrderPaid($orders) {
    
    /**
     *  set the order paid in your marketplace and return a successstate
     *  you can identify the order with $order->Bestellung->ShopId          
     *  unicorn 2 => your plugin
     *  $order->Success = successstate of your updating procedure     
     */        
}

function setOrderSend($orders) {
    
    /**
     *  set the order sent in your marketplace and return a successstate
     *  you can identify the order with $order->Bestellung->ShopId          
     *  unicorn 2 => your plugin
     *  $order->Success = successstate of your updating procedure        
     */ 
}

function setOrderCancelled($orders) {
    
    /**
     *  cancel the order in your marketplace and return a successstate
     *  you can identify the order with $order->Bestellung->ShopId         
     *  unicorn 2 => your plugin
     *  $order->Success = successstate of your cancellation procedure         
     */       
} 
?>