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
 
abstract class Status {

    const Eingegangen                    =  0;
    const EingegangenUndFreigegeben      =  1;
    const InBearbeitung                  =  2;
    const Versandt                       =  3;
    const Ausbezahlt                     =  4;
    const Storniert                      =  5;    
}
?> 