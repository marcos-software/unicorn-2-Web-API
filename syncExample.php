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

    $pluginKey = 'test12345';
                                    
    return $pluginKey;
}

function checkLicence() {

    $isValid = false;
    
    //$isValid = yourPersonalLicenceCheck();
    $isValid = true;
         
    return $isValid;
}

function getShippingProfiles($shippingProfiles) {
    
    $yourShippingProfiles = array();
    array_push($yourShippingProfiles, "Paket National", "Paket International", "Kurier");                            
 
    foreach($yourShippingProfiles as $profile) array_push($shippingProfiles->Collection, $profile);  
}

function addArticle($article) {

    //$answerObject       = marketplaceApiAction("insertArticle", $article);
    //$article->Success   = $answerObject->success;
    //$article->PluginId  = $answerObject->articleId;   

    $article->Success   = true;
    $article->PluginID  = 'yourArticleIdOnMarketplace_'.rand(1000, 9999);    
    
    
    foreach($article->VakoArtikel as $vakoArt) {
    
        foreach($vakoArt->Eigenschaften as $vako) {
        
            //$answerObject       = marketplaceApiAction("insertVariation", 'definition='.$vako->Name.'&value='.$vako->Wert);            
        }
        
        $vakoArt->PluginID = 'yourVariationIdOnMarketplace_'.rand(1000, 9999);   
    }                           
}

function setArticle($article) {
        
    //$answerObject       = marketplaceApiAction("updateArticle", 'articleId='.$article->ShopId.'&articleObject='.$article);
    //$article->Success   = $answerObject->success;  

    $article->Success   = true;   
}

function delArticle($article) {
    
    //$answerObject       = marketplaceApiAction("deleteArticle", 'articleId='.$article->ShopId);
    //$article->Success   = $answerObject->success;  

    $article->Success   = true;   
}

function addCategory($category) {
    
    //$answerObject        = marketplaceApiAction("insertCategory", $category);
    //$category->Success   = $answerObject->success;
    //$category->PluginId  = $answerObject->categoryId;   

    $category->Success   = true;
    $category->PluginID  = 'yourCategoryIdOnMarketplace_'.rand(1000, 9999);   
}

function setCategory($category) {
    
    //$answerObject        = marketplaceApiAction("updateCategory", 'categoryId='.$category->ShopId.'&categoryObject='.$category);
    //$category->Success   = $answerObject->success;  

    $category->Success   = true;      
}

function delCategory($category) {
    
    //$answerObject        = marketplaceApiAction("deleteCategory", 'categoryId='.$category->ShopId);
    //$category->Success   = $answerObject->success;  

    $category->Success   = true;   
}

function getOrder($orders) {

    $yourOrders = array();

    //$answerObject        = marketplaceApiAction("getOrders", 'state='.$orders->State.'&startdate='.$orders->Startdate);
    //foreach($answerObject->Orders as $order) {
    //
    //    $myOrder = new Bestellung();
    //    ....
    //    array_push($yourOrders, $myOrder);   
    //}
   
    $bestelldatum = new DateTime(); 
    $lieferdatum  = new DateTime(); 
    $lieferdatum->add(new DateInterval('P4D'));

    $myOrder                                                 = new Bestellung();

       $myOrder->ShopId                                      = 'sampleOrderId_'.rand(1000, 9999);
       $myOrder->Gesammtkosten                               = 9.37; 
       $myOrder->Versandkosten                               = 4.99; 
       $myOrder->VersandDienstleister                        = 'DHL National';
       $myOrder->Lieferdatum                                 = $lieferdatum->format('Y-m-d H:i:s'); 
       $myOrder->Zahlungsart                                 = Zahlungsart::Nachnahme;
       $myOrder->Waehrung                                    = Waehrung::EURO;
       $myOrder->Status                                      = Status::EingegangenUndFreigegeben;
       $myOrder->Rechnungsnummer                             = 'sampleInvoiceId_'.rand(1000, 9999);
       $myOrder->Kundenbemerkung                             = 'Please send the products as fast as you can! Thank you, regards, your buyer'; 
       $myOrder->Händlerbemerkung                            = 'We\'ll send it tomorow! Regards, your merchant'; 
       $myOrder->Bestelldatum                                = $bestelldatum->format('Y-m-d H:i:s'); 
    
       $myOrder->Kunde                                       = new Kunde(); 

          $myOrder->Kunde->Kundennummer                      = 'sampleClientId_'.rand(1000, 9999);
          $myOrder->Kunde->Firma                             = 'Die Testfirma GmbH';
          $myOrder->Kunde->FirmenZusatz                      = 'wir testen das!';            
          $myOrder->Kunde->Titel                             = 'Prof. Dr.';
          $myOrder->Kunde->Vorname                           = 'Testina';
          $myOrder->Kunde->Nachname                          = 'Testerin';
          $myOrder->Kunde->Geschlecht                        = Geschlecht::Weiblich;
          $myOrder->Kunde->Zhd                               = 'Hr. Einkäufer (Buchhaltung)';             
          $myOrder->Kunde->UStId                             = 'DE 123456789';
          $myOrder->Kunde->Email                             = 't.testerin@testfirma.de_'.rand(1000, 9999);
          $myOrder->Kunde->Telefon                           = '012 / 345 678 - 9';
          $myOrder->Kunde->Fax                               = '012 / 987 654 - 3';
          $myOrder->Kunde->Geburtstag                        = '07.07.1977';
          $myOrder->Kunde->Mobil                             = '0170 123 456';
   
          $myOrder->Kunde->Adresse                           = new Adresse();
  
              $myOrder->Kunde->Adresse->Straße               = 'Am Testgelände';
              $myOrder->Kunde->Adresse->Hausnummer           = '12a';
              $myOrder->Kunde->Adresse->Anmerkung            = 'Gebäudekomplex "Anton"';
              $myOrder->Kunde->Adresse->PLZ                  = '12345';
              $myOrder->Kunde->Adresse->Ort                  = 'Testort';
              $myOrder->Kunde->Adresse->Bundesland           = 'Nordrhein-Westfalen';
              $myOrder->Kunde->Adresse->Land                 = Land::DE();

       $myOrder->Lieferanschrift                             = new Anschrift();
       
          $myOrder->Lieferanschrift->Firma                   = 'Lagerfirma UG';
          $myOrder->Lieferanschrift->FirmenZusatz            = 'denn lagern ist Leidenschaft!';           
          $myOrder->Lieferanschrift->Titel                   = 'Dipl.-Ing.';
          $myOrder->Lieferanschrift->Vorname                 = 'Ludwig';
          $myOrder->Lieferanschrift->Nachname                = 'Lagerist';
          $myOrder->Lieferanschrift->Geschlecht              = Geschlecht::Männlich;            
          $myOrder->Lieferanschrift->Email                   = 'l.lagerist@lagerfirma.de_'.rand(1000, 9999);
          $myOrder->Lieferanschrift->Telefon                 = '098 / 765 432 - 1';
          $myOrder->Lieferanschrift->Fax                     = '098 / 123 456 - 7';
          $myOrder->Lieferanschrift->Mobil                   = '0151 654 321';
          
          $myOrder->Lieferanschrift->Adresse                 = new Adresse();
          
              $myOrder->Lieferanschrift->Adresse->Straße     = 'Lagerstraße';
              $myOrder->Lieferanschrift->Adresse->Hausnummer = '211';
              $myOrder->Lieferanschrift->Adresse->Anmerkung  = 'Tor 4';
              $myOrder->Lieferanschrift->Adresse->PLZ        = '5432';
              $myOrder->Lieferanschrift->Adresse->Ort        = 'Lagerstadt';
              $myOrder->Lieferanschrift->Adresse->Bundesland = 'Tirol';
              $myOrder->Lieferanschrift->Adresse->Land       = Land::AT();
       
       $myGutschein                                          = new Gutschein();
        
            $myGutschein->GutscheinNummer                    = 'sampleCouponId_'.rand(1000, 9999); 
            $myGutschein->Rabatt                             = 9.99; 
            $myGutschein->Code                               = 'sampleCouponCode_'.rand(1000, 9999); 
            $myGutschein->Bemerkung                          = 'unicorn 2 is great - coupon!'; 
          
       array_push($myOrder->Gutscheine, $myGutschein);
       
       $myArtikel_1                                          = new Artikel();
       
            $myArtikel_1->ShopId                             = 'yourArticleIdOnMarketplace_1'; // the returned articleId from function addArticle($article) 
            $myArtikel_1->ArtikelNummer                      = 'productArtNo_1';
            $myArtikel_1->Name                               = 'sampleProduct_1';
            $myArtikel_1->Hinweis                            = 'with gift package'; 
            $myArtikel_1->Menge                              = 2; 
            $myArtikel_1->Preis                              = 2.69; // Brutto (with tax included)
            $myArtikel_1->GesammtPreis                       = 5.38;
            $myArtikel_1->MwSt                               = Steuer::MwSt7();
       
       array_push($myOrder->Artikel, $myArtikel_1);
             
       $myArtikel_2                                          = new Artikel();
       
            $myArtikel_2->ShopId                             = 'yourArticleIdOnMarketplace_2';
            $myArtikel_2->ArtikelNummer                      = 'productArtNo_2';
            $myArtikel_2->Name                               = 'sampleProduct_2 with variations Color: blue Size: XXL';
            $myArtikel_2->Menge                              = 1; 
            $myArtikel_2->Preis                              = 8.99;
            $myArtikel_2->GesammtPreis                       = 8.99;
            $myArtikel_2->MwSt                               = Steuer::MwSt19();   
          
            $myVakoArtikel                                   = new VakoArtikel();
            
                $myVakoArtikel->ShopId                       = 'yourVariationIdOnMarketplace'; // the returned variantId from function addArticle($article) on adding this explicit variation  
                $myVakoArtikel->Aktiv                        = true;
                
                $myVakoEigenschaftName_1                     = new EigenschaftBase();
                $myVakoEigenschaftName_1->Name               = 'Color';
                $myVakoWertEigenschaft_1                     = new WertEigenschaft();
                
                    $myVakoWertEigenschaft_1->Name           = 'Color';
                    $myVakoWertEigenschaft_1->Wert           = new Eigenschaftswert();
                    $myVakoWertEigenschaft_1->Wert->Aktiv    = true;
                    $myVakoWertEigenschaft_1->Wert->Wert     = 'blue';
                
                $myVakoEigenschaftName_2                     = new EigenschaftBase();
                $myVakoEigenschaftName_2->Name               = 'Size';    
                $myVakoWertEigenschaft_2                     = new WertEigenschaft();

                    $myVakoWertEigenschaft_2->Name           = 'Size';
                    $myVakoWertEigenschaft_2->Wert           = new Eigenschaftswert();
                    $myVakoWertEigenschaft_2->Wert->Aktiv    = true;
                    $myVakoWertEigenschaft_2->Wert->Wert     = 'XXL';
                                    
                array_push($myVakoArtikel->Eigenschaften, $myVakoWertEigenschaft_1, $myVakoWertEigenschaft_2);
                
            array_push($myArtikel_2->EigenschaftenNamen, $myVakoEigenschaftName_1, $myVakoEigenschaftName_2);
                
            array_push($myArtikel_2->VakoArtikel, $myVakoArtikel);
       
       array_push($myOrder->Artikel, $myArtikel_2);

    array_push($yourOrders, $myOrder);       
   
    $myOrder2                                                = new Bestellung();

       $myOrder2->ShopId                                     = 'sampleOrderId_2_'.rand(1000, 9999);
       $myOrder2->Gesammtkosten                              = 34.95; 
       $myOrder2->Versandkosten                              = 14.99; 
       $myOrder2->VersandDienstleister                       = 'DPD Kurier';
       $myOrder2->Zahlungsart                                = Zahlungsart::Vorkasse;
       $myOrder2->Waehrung                                   = Waehrung::EURO;
       $myOrder2->Status                                     = Status::EingegangenUndFreigegeben;
       $myOrder2->Rechnungsnummer                            = 'sampleInvoiceId_2_'.rand(1000, 9999);
       $myOrder2->Kundenbemerkung                            = 'Bitte schnellstmöglich versenden, Danke!'; 
       $myOrder2->Bestelldatum                               = $bestelldatum->format('Y-m-d H:i:s'); 
   
       $myOrder2->Kunde                                      = new Kunde(); 

          $myOrder2->Kunde->Kundennummer                     = 'sampleClientId_2_'.rand(1000, 9999);
          $myOrder2->Kunde->Vorname                          = 'Arno';
          $myOrder2->Kunde->Nachname                         = 'Nym';
          $myOrder2->Kunde->Geschlecht                       = Geschlecht::Männlich;    
          $myOrder2->Kunde->Email                            = 'arno.nym@mail.de_'.rand(1000, 9999);
   
          $myOrder2->Kunde->Adresse                          = new Adresse();
  
              $myOrder2->Kunde->Adresse->Straße              = 'Am geheimen Weg';
              $myOrder2->Kunde->Adresse->Hausnummer          = '1';
              $myOrder2->Kunde->Adresse->PLZ                 = '13373';
              $myOrder2->Kunde->Adresse->Ort                 = 'Geheim';
              $myOrder2->Kunde->Adresse->Land                = Land::DE();
       
       $myOrder2->Lieferanschrift                             = new Anschrift();

          $myOrder2->Lieferanschrift->Vorname                 = 'Arno';
          $myOrder2->Lieferanschrift->Nachname                = 'Nym';
          $myOrder2->Lieferanschrift->Geschlecht              = Geschlecht::Männlich;            
          $myOrder2->Lieferanschrift->Email                   = 'arno.nym@mail.de_'.rand(1000, 9999);
          
          $myOrder2->Lieferanschrift->Adresse                 = new Adresse();
          
              $myOrder2->Lieferanschrift->Adresse->Straße     = 'Am geheimen Weg';
              $myOrder2->Lieferanschrift->Adresse->Hausnummer = '1';
              $myOrder2->Lieferanschrift->Adresse->PLZ        = '13373';
              $myOrder2->Lieferanschrift->Adresse->Ort        = 'Geheim';
              $myOrder2->Lieferanschrift->Adresse->Land       = Land::DE();
              
       $myArtikel                                            = new Artikel();
      
          $myArtikel->ShopId                                 = 'yourArticleIdOnMarketplace_1_2';
          $myArtikel->ArtikelNummer                          = 'productArtNo_1_2';
          $myArtikel->Name                                   = 'sampleProduct_1_2'; 
          $myArtikel->Menge                                  = 4; 
          $myArtikel->Preis                                  = 4.99;
          $myArtikel->GesammtPreis                           = 19.96;
          $myArtikel->MwSt                                   = Steuer::MwSt10P7();
       
      array_push($myOrder2->Artikel, $myArtikel);

    array_push($yourOrders, $myOrder2);   

    foreach($yourOrders as $order) array_push($orders->Collection, $order);     
}

function setOrderPaid($orders) {
    
    foreach ($orders as $order) { 
    
        //$answerObject     = marketplaceApiAction("setPaid", orderId=$order->Bestellung->ShopId);
        //$order->Success   = $answerObject->success;  

        $order->Success   = true; 
    }         
}

function setOrderSend($orders) {
    
    foreach ($orders as $order) { 
    
        //$answerObject     = marketplaceApiAction("setSend", orderId=$order->Bestellung->ShopId);
        //$order->Success   = $answerObject->success;  

        $order->Success   = true; 
    }   
}

function setOrderCancelled($orders) {
    
    foreach ($orders as $order) { 
    
        //$answerObject     = marketplaceApiAction("setCancelled", orderId=$order->Bestellung->ShopId);
        //$order->Success   = $answerObject->success;  

        $order->Success   = true; 
    }       
} 
?>