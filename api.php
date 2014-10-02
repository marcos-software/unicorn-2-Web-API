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

if($_REQUEST['source'] == 'unicorn2') {

    /* include api classes */
    require_once('classes/class.result.php');
    require_once('classes/class.error.php');
    require_once('classes/class.rc4.php');
    require_once('classes/class.request.php');
    require_once('classes/class.authentification.php');    
    require_once('classes/class.answer.php');
    require_once('sync.php');

    $requestMethod    = 'POST';      
    $missingParameter = 'N';
    
    $pluginKey = getKey();
    $pluginKey = isset($pluginKey) ? $pluginKey : 'noKey';

    /* genereate answer object */
    $answer           = new Answer           ($pluginKey,                                              
                                              $missingParameter); 
                                     
    /* generate request object */
    $request          = new Request          ($pluginKey,                                              
                                              $answer,
                                              $missingParameter,
                                              $_REQUEST, 
                                              $_POST, 
                                              $_GET,
                                              $requestMethod);

    /* generate authentification object */
    $auth             = new Authentification ($request, 
                                              $pluginKey,     
                                              $answer);
                                          
    /* check the licence */                                          
    if(!checkLicence()) {
    
        $answer->setErrorCode(103);
        $answer->send();
    }

    /* include interface classes */
    require_once('classes/interface/class.Dictionary.php');
    require_once('classes/interface/class.Adresse.php');
    require_once('classes/interface/class.Anschrift.php');
    require_once('classes/interface/class.WawiObject.php');
    require_once('classes/interface/class.MappingObject.php');
    require_once('classes/interface/class.ArtikelBase.php');
    require_once('classes/interface/class.Artikel.php');
    require_once('classes/interface/class.ArtikelAttribut.php');   
    require_once('classes/interface/class.ArtikelBild.php');
    require_once('classes/interface/class.ArtikelLink.php');
    require_once('classes/interface/class.ArtikelQuerverkauf.php');
    require_once('classes/interface/class.Bestellung.php');
    require_once('classes/interface/class.Category.php');
    require_once('classes/interface/class.EigenschaftBase.php'); 
    require_once('classes/interface/class.FreitextEigenschaft.php');
    require_once('classes/interface/class.Grundpreis.php');  
    require_once('classes/interface/class.Gutschein.php');     
    require_once('classes/interface/class.Hersteller.php');       
    require_once('classes/interface/class.Kategorie.php');    
    require_once('classes/interface/class.Kunde.php');      
    require_once('classes/interface/class.Kundengruppe.php');     
    require_once('classes/interface/class.PortalCategory.php');
    require_once('classes/interface/class.ShopBase.php');
    require_once('classes/interface/class.VakoArtikel.php');    
    require_once('classes/interface/class.ZahlungsDaten.php');       
    require_once('classes/interface/class.Eigenschaftswert.php');
    require_once('classes/interface/class.WertEigenschaft.php');
    require_once('classes/interface/class.Steuer.php');
    require_once('classes/interface/class.Sprache.php');
    require_once('classes/interface/class.Land.php'); 

    /* include interface enums */
    require_once('classes/interface/enum.AktivStates.php');
    require_once('classes/interface/enum.ArtikelFields.php');
    require_once('classes/interface/enum.ArtikelProperty.php');
    require_once('classes/interface/enum.BestellungProperty.php');
    require_once('classes/interface/enum.Geschlecht.php');            
    require_once('classes/interface/enum.Status.php'); 
    require_once('classes/interface/enum.Unit.php');
    require_once('classes/interface/enum.Waehrung.php');
    require_once('classes/interface/enum.Zahlungsart.php');
    require_once('classes/interface/enum.Info.php');
    require_once('classes/interface/enum.Marketplaces.php');

    /* do the api actions */
    $isEmpty = true;

    foreach($request->objects as $object) {

        $isEmpty = false;
        $result = new Result($object);
        call_user_func($request->method, $result);
        $answer->addResult($result);
    }

    if($isEmpty)
    {
        $result = new Result(null);
        call_user_func($request->method, $result);
        $answer->addResult($result);
    }

    /* prepare & send the answer */
    $answer->prepare($request->method); 
    $answer->send();
}
?>