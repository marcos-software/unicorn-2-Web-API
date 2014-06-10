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
 
abstract class BestellungProperty {

    const Status                         =  0;
    const Bestellungsnummer              =  1;
    const Rechnungsnummer                =  2;
    const Waehrung                       =  3;
    const Zahlungsart                    =  4;
    const ZahlungsartIstLastschrift      =  5;
    const ZahlungsartIstKreditkarte      =  6;
    const ZahlungDaten                   =  7;
    const Versandkosten                  =  8;
    const Gesammtkosten                  =  9;
    const Bestelldatum                   = 10;
    const Lieferdatum                    = 11;
    const Kunde                          = 12;
    const Lieferanschrift                = 13;
    const Artikel                        = 14;
    const Kundenbemerkung                = 15;
    const Händlerbemerkung               = 16;
    const Gutscheine                     = 17;
} 
?> 