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

    $pluginKey = 'unknown';
    
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
     *  check the licence (maybe with the plugin key and you licenceserver ?!) and return a licencestate
     *  $isValid = your licencestate (true | false)        
     */                
    
    return $isValid;
}

function getShippingProfiles($object) {
    
    /**
     *  return all shipping profiles for this marketplace (or this shop instance)                
     *                           
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(84652, 'No shipping profile was set yet');                
     *
     *  NOTE: Hurry up, unicorn 2 GUI is waiting for your answer!                            
     */      
     
}

function addArticle($object) {

    /**
      *  add a new article to your marketplace and return the articleID
      *  unicorn 2 => your plugin
      *  $object->item->ShopId = your returned articleID;  
      *                           
      *  if errors occure add them to $object (with errorcode and errormessage) 
      *  example:
      *  $object->addError(53873, 'Price must be greater 0');
      *  $object->addError(75542, 'Article must have a portalcategory');             
      */                
}

function setArticle($object) {
    
    /**
     *  update articledetails of an existing article in your marketplace
     *  you can identify the article with $object->item->ShopId       
     *  unicorn 2 => your plugin
     *       
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(53873, 'Price must be greater 0');     
     */  
}

function delArticle($object) {
    
    /**
     *  delete an existing article in your marketplace
     *  you can identify the article with $object->item->ShopId     
     *  unicorn 2 => your plugin
     *  
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(84665, 'Article not found');              
     */     
}

function addArticleCrossselling($object) {

    /**
      *  add a new crossselling to an article and return the crosssellingID
      *  unicorn 2 => your plugin
      *  $object->item->ShopId = your returned crosssellingID;  
      *                           
      *  if errors occure add them to $object (with errorcode and errormessage) 
      *  example:
      *  $object->addError(53873, 'Article not found');             
      */                        
}

function delArticleCrossselling($object) {
    
    /**
     *  delete an existing crossselling from an article
     *  you can identify the crossselling with $object->item->ShopId     
     *  unicorn 2 => your plugin
     *  
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(84665, 'Article not found');              
     */  
}

function addArticleAttribut($object) {

    /**
      *  add a new attribut to an article and return the attributID
      *  unicorn 2 => your plugin
      *  $object->item->ShopId = your returned attributID;  
      *                           
      *  if errors occure add them to $object (with errorcode and errormessage) 
      *  example:
      *  $object->addError(53873, 'Article not found');             
      */                      
}

function setArticleAttribut($object) {
     
    /**
     *  update articleattribut in your marketplace
     *  you can identify the attribut with $object->item->ShopId       
     *  unicorn 2 => your plugin
     *       
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(53873, 'Attribut not found');     
     */  
}

function delArticleAttribut($object) {
    
    /**
     *  delete an existing attribut from an article
     *  you can identify the attribut with $object->item->ShopId     
     *  unicorn 2 => your plugin
     *  
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(84665, 'Attribut not found');              
     */  
}  

function addArticleBild($object) {

    /**
      *  add a new articlebild to an article and return the articlebildID
      *  unicorn 2 => your plugin
      *  $object->item->ShopId = your returned articlebildID;  
      *                           
      *  if errors occure add them to $object (with errorcode and errormessage) 
      *  example:
      *  $object->addError(53873, 'Article not found');             
      */                      
}

function setArticleBild($object) {
     
    /**
     *  update articlebild from an article in your marketplace
     *  you can identify the articlebild with $object->item->ShopId       
     *  unicorn 2 => your plugin
     *       
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(53873, 'Articlebild not found');     
     */  
}

function delArticleBild($object) {
    
    /**
     *  delete an existing articlebild from an article in your marketplace
     *  you can identify the articlebild with $object->item->ShopId     
     *  unicorn 2 => your plugin
     *  
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(84665, 'Articlebild not found');              
     */ 
} 

function addVako($object) {

    /**
      *  add a new vako to an article and return the vakoID
      *  unicorn 2 => your plugin
      *  $object->item->ShopId = your returned vakoID;  
      *                           
      *  if errors occure add them to $object (with errorcode and errormessage) 
      *  example:
      *  $object->addError(53873, 'Article not found');             
      */                     
}

function setVako($object) {
     
    /**
     *  update a vako from an article in your marketplace
     *  you can identify the vako with $object->item->ShopId       
     *  unicorn 2 => your plugin
     *       
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(53873, 'Vako not found');     
     */  
}

function delVako($object) {
    
    /**
     *  delete a vako from an article in your marketplace
     *  you can identify the vako with $object->item->ShopId       
     *  unicorn 2 => your plugin
     *       
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(53873, 'Vako not found');     
     */
}

function addVakoBild($object) {

    /**
      *  add a new vakobild to a vako and return the vakobildID
      *  unicorn 2 => your plugin
      *  $object->item->ShopId = your returned vakobildID;  
      *                           
      *  if errors occure add them to $object (with errorcode and errormessage) 
      *  example:
      *  $object->addError(53873, 'Vako not found');             
      */                        
}

function setVakoBild($object) {
     
   /**
     *  update vakobild from a vako in your marketplace
     *  you can identify the vakobild with $object->item->ShopId       
     *  unicorn 2 => your plugin
     *       
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(53873, 'Vakobild not found');     
     */  
}

function delVakoBild($object) {
    
    /**
     *  delete an existing vakobild from a vako in your marketplace
     *  you can identify the vakobild with $object->item->ShopId     
     *  unicorn 2 => your plugin
     *  
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(84665, 'Vakobild not found');              
     */ 
}

function addCategory($object) {
    
    /**
     *  add a new category to your marketplace and return the categoryID
     *  unicorn 2 => your plugin
     *  $object->item->ShopId = your returned categoryID;  
     *  
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(86432, 'Parentcategory ID is invalid');                                   
     */
}

function setCategory($object) {
    
    /**
     *  update categorydetails of an existing category in your marketplace
     *  you can identify the category with $object->item->ShopId       
     *  unicorn 2 => your plugin
     *  
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(86432, 'Parentcategory ID is invalid');               
     */      
}

function delCategory($object) {
    
    /**
     *  delete an existing category in your marketplace
     *  you can identify the category with $object->item->ShopId        
     *  unicorn 2 => your plugin
     *  
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(15846, 'Category not found');                 
     */
}

function getCategories($object) {

    /**
     *  return all categories of the merchant in your marketplace   
     *  your plugin => unicorn 2
     *  
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(15846, 'Category not found');                 
     */  
}

function addCategoryLink($object) {

    /**
     *  link an article to a category of the merchant
     *  unicorn 2 => your plugin
     *  $object->item->ShopId = your returned categoryID;  
     *  
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(86432, 'Parentcategory ID is invalid');                                   
     */ 
}

function delCategoryLink($object) {

    /**
     *  delete an existing linking between an article and a category of the merchant
     *  you can identify the category with $object->item->ShopId        
     *  unicorn 2 => your plugin
     *  
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(15846, 'Category not found');                 
     */
}

function getOrder($object) {

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
     *  
     *
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(35565, 'API Key invalid');                    
     */    
     
     foreach($yourOrders as $order) array_push($orders->Collection, $order);     
}

function setOrderPaid($object) {
    
    /**
     *  set the order paid in your marketplace and return a successstate
     *  you can identify the order with $object->item->ShopId       
     *  unicorn 2 => your plugin 
     *       
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(84551, 'Order already paid');             
     */        
}

function setOrderSend($object) {
    
    /**
     *  set the order sent in your marketplace and return a successstate
     *  you can identify the order with $object->item->ShopId       
     *  unicorn 2 => your plugin
     *  
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(8465, 'Order already sent');             
     */ 
}

function setOrderCancelled($object) {
    
    /**
     *  cancel the order in your marketplace and return a successstate
     *  you can identify the order with $object->item->ShopId       
     *  unicorn 2 => your plugin
     *  
     *  if errors occure add them to $object (with errorcode and errormessage) 
     *  example:
     *  $object->addError(48551, 'Order already cancelled');                
     */       
} 
?>