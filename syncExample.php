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

/* needet function to verify communication between unicorn 2 and your api extension */
/* merchant needts to know this key for setting it in unicorn 2 GUI */    
function getKey() {

    $pluginKey = 'test12345';
                                    
    return $pluginKey;
}

/* check the licence here, maybe with the pluginkey and you licenceserver */
function checkLicence() {

    $isValid = true;
         
    return $isValid;
}

function getShippingProfiles($object) {

    /* do some api action with your marketplace here */
    $object->addCollectionEntry("Paket National");
    $object->addCollectionEntry("Paket International");
    $object->addCollectionEntry("Kurier (Express)");
}

function addArticle($object) {

    /* do some api action with your marketplace here */
    $object->Item->ShopId = 'yourReturnedArticleIdOnMarketplace_'.rand(1000, 9999);                        
}

function setArticle($object) {
     
    /* do some api action with your marketplace here */    
    /* you can itentify the item with $object->Item->ShopId */  
}

function delArticle($object) {
    
    /* do some api action with your marketplace here */    
    /* you can itentify the item with $object->Item->ShopId */  
}

function addArticleCrossselling($object) {

    /* do some api action with your marketplace here */
    /* you can itentify the article with $object->reference->ShopId */ 
    $object->Item->ShopId = 'yourReturnedCrosssellingIdOnMarketplace_'.rand(1000, 9999);   
                         
}

function delArticleCrossselling($object) {
    
    /* do some api action with your marketplace here */    
    /* you can itentify the item with $object->Item->ShopId */  
    /* you can itentify the article with $object->reference->ShopId */ 
}

function addArticleAttribut($object) {

    /* do some api action with your marketplace here */
    /* you can itentify the article with $object->reference->ShopId */ 
    $object->Item->ShopId = 'yourReturnedAttributIdOnMarketplace_'.rand(1000, 9999);                        
}

function setArticleAttribut($object) {
     
    /* do some api action with your marketplace here */    
    /* you can itentify the item with $object->Item->ShopId */  
    /* you can itentify the article with $object->reference->ShopId */ 
}

function delArticleAttribut($object) {
    
    /* do some api action with your marketplace here */    
    /* you can itentify the item with $object->Item->ShopId */  
    /* you can itentify the article with $object->reference->ShopId */ 
}  

function addArticleImage($object) {

    /* do some api action with your marketplace here */
    /* you can itentify the article with $object->reference->ShopId */ 
    $object->Item->ShopId = 'yourReturnedArticlebildIdOnMarketplace_'.rand(1000, 9999);                        
}

function setArticleImage($object) {
     
    /* do some api action with your marketplace here */    
    /* you can itentify the item with $object->Item->ShopId */ 
    /* you can itentify the article with $object->reference->ShopId */  
}

function delArticleImage($object) {
    
    /* do some api action with your marketplace here */    
    /* you can itentify the item with $object->Item->ShopId */  
    /* you can itentify the article with $object->reference->ShopId */ 
} 

function addVako($object) {

    /* do some api action with your marketplace here */
    /* you can itentify the article with $object->reference->ShopId */ 
    $object->Item->ShopId = 'yourReturnedVakoIdOnMarketplace_'.rand(1000, 9999);                        
}

function setVako($object) {
     
    /* do some api action with your marketplace here */    
    /* you can itentify the item with $object->Item->ShopId */  
    /* you can itentify the article with $object->reference->ShopId */ 
}

function delVako($object) {
    
    /* do some api action with your marketplace here */    
    /* you can itentify the item with $object->Item->ShopId */  
    /* you can itentify the article with $object->reference->ShopId */ 
}

function addVakoImage($object) {

    /* do some api action with your marketplace here */
    /* you can itentify the vako with $object->reference->ShopId */ 
    $object->Item->ShopId = 'yourReturnedVakoImageIdOnMarketplace_'.rand(1000, 9999);                        
}

function setVakoImage($object) {
     
    /* do some api action with your marketplace here */          
    /* you can itentify the item with $object->Item->ShopId */ 
    /* you can itentify the vako with $object->reference->ShopId */  
}

function delVakoImage($object) {
    
    /* do some api action with your marketplace here */    
    /* you can itentify the item with $object->Item->ShopId */  
    /* you can itentify the vako with $object->reference->ShopId */ 
}

function addCategory($object) {

    /* do some api action with your marketplace here */
    $object->Item->ShopId = 'yourReturnedCategoryIdOnMarketplace_'.rand(1000, 9999);    
}


function setCategory($object) {
    
    /* do some api action with your marketplace here */    
    /* you can itentify the item with $object->Item->ShopId */   
}

function delCategory($object) {

    /* do some api action with your marketplace here */    
    /* you can itentify the item with $object->Item->ShopId */  
}

function getCategories($object) {

    /* do some api action with your marketplace here */    

    $R1 = new Category();             //    R1 --
    $R11 = new Category();            //    |   | - R11 --
    $R111 = new Category();           //    |           | - R111
    $R112 = new Category();           //    |           | - R112
    $R11->addSubcategory($R111);      //    |
    $R11->addSubcategory($R112);      //    |
    $R1->addSubcategory($R11);        //    |
    $R2 = new Category();             //    R2 --
    $R21 = new Category();            //        | - R21 --
    $R211 = new Category();           //        |       | - R211
    $R22 = new Category();            //        |
    $R221 = new Category();           //        | - R22 --
    $R21->addSubcategory($R211);      //                 | - R221
    $R22->addSubcategory($R221);
    $R2->addSubcategory($R21);
    $R2->addSubcategory($R22);

    $object->addCollectionEntry($R1);   
    $object->addCollectionEntry($R2);   
}

function addCategoryLink($object) {

    /* do some api action with your marketplace here */
    /* you can itentify the article with $object->reference->ShopId */ 
    $object->Item->ShopId = 'yourReturnedLinkIdOnMarketplace_'.rand(1000, 9999);    
}

function delCategoryLink($object) {

    /* do some api action with your marketplace here */    
    /* you can itentify the article with $object->reference->ShopId */ 
    /* you can itentify the item with $object->Item->ShopId */  
}

function getOrder($object) {

    //$answerObject        = marketplaceApiAction("getOrders", 'state='.$orders->State.'&startdate='.$orders->Startdate);
    //foreach($answerObject->Orders as $order) {
    //
    //    $myOrder = new Bestellung();
    //    ....
    //    $object->addCollectionEntry($myOrder); 
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

    $object->addCollectionEntry($myOrder);      
   
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

    $object->addCollectionEntry($myOrder2);  
}

function setOrderPaid($object) {

    /* do some api action with your marketplace here */    
    /* you can itentify the item with $object->Item->ShopId */        
}

function setOrderSend($object) {
    
    /* do some api action with your marketplace here */    
    /* you can itentify the item with $object->Item->ShopId */       
}

function setOrderCancelled($object) {
    
    /* do some api action with your marketplace here */    
    /* you can itentify the item with $object->Item->ShopId */       
} 
?>