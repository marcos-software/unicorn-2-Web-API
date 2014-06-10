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

abstract class Land {

    const AD =   0;
    const AE =   1;
    const AF =   2;
    const AG =   3;
    const AI =   4;
    const AL =   5;
    const AM =   6;
    const AN =   7;
    const AO =   8;
    const AR =   9;
    const ASM=  10;
    const AT =  11;
    const AU =  12;
    const AW =  13;
    const AZ =  14;
    const BA =  15;
    const BB =  16;
    const BD =  17;
    const BE =  18;
    const BF =  19;
    const BG =  20;
    const BH =  21;
    const BI =  22;
    const BJ =  23;
    const BM =  24;
    const BN =  25;
    const BO =  26;
    const BR =  27;
    const BS =  28;
    const BT =  29;
    const BV =  30;
    const BW =  31;
    const BY =  32;
    const BZ =  33;
    const CA =  34;
    const CC =  35;
    const CD =  36;
    const CF =  37;
    const CG =  38;
    const CH =  39;
    const CI =  40;
    const CK =  41;
    const CL =  42;
    const CM =  43;
    const CN =  44;
    const CO =  45;
    const CR =  46;
    const CU =  47;
    const CV =  48;
    const CX =  49;
    const CY =  50;
    const CZ =  51;
    const DE =  52;
    const DJ =  53;
    const DK =  54;
    const DM =  55;
    const DOM=  56;
    const DZ =  57;
    const EC =  58;
    const EE =  59;
    const EG =  60;
    const EH =  61;
    const ER =  62;
    const ES =  63;
    const ET =  64;
    const FI =  65;
    const FJ =  66;
    const FK =  67;
    const FM =  68;
    const FO =  69;
    const FR =  70;
    const GA =  71;
    const GB =  72;
    const GD =  73;
    const GE =  74;
    const GF =  75;
    const GG =  76;
    const GH =  77;
    const GI =  78;
    const GL =  79;
    const GM =  80;
    const GN =  81;
    const GP =  82;
    const GQ =  83;
    const GR =  84;
    const GS =  85;
    const GT =  86;
    const GU =  87;
    const GW =  88;
    const GY =  89;
    const HK =  90;
    const HM =  91;
    const HN =  92;
    const HR =  93;
    const HT =  94;
    const HU =  95;
    const ID =  96;
    const IE =  97;
    const IL =  98;
    const IM =  99;
    const IN = 100;
    const IO = 101;
    const IQ = 102;
    const IR = 103;
    const IS = 104;
    const IT = 105;
    const JE = 106;
    const JM = 107;
    const JO = 108;
    const JP = 109;
    const KE = 110;
    const KG = 111;
    const KH = 112;
    const KI = 113;
    const KM = 114;
    const KN = 115;
    const KP = 116;
    const KR = 117;
    const KW = 118;
    const KY = 119;
    const KZ = 120;
    const LA = 121;
    const LB = 122;
    const LC = 123;
    const LI = 124;
    const LK = 125;
    const LR = 126;
    const LS = 127;
    const LT = 128;
    const LU = 129;
    const LV = 130;
    const LY = 131;
    const MA = 132;
    const MC = 133;
    const MD = 134;
    const ME = 135;
    const MG = 136;
    const MH = 137;
    const MK = 138;
    const ML = 139;
    const MM = 140;
    const MN = 141;
    const MO = 142;
    const MP = 143;
    const MQ = 144;
    const MR = 145;
    const MS = 146;
    const MT = 147;
    const MU = 148;
    const MV = 149;
    const MW = 150;
    const MX = 151;
    const MY = 152;
    const MZ = 153;
    const NA = 154;
    const NC = 155;
    const NE = 156;
    const NF = 157;
    const NG = 158;
    const NI = 159;
    const NL = 160;
    const NO = 161;
    const NP = 162;
    const NR = 163;
    const NU = 164;
    const NZ = 165;
    const OM = 166;
    const PA = 167;
    const PE = 168;
    const PF = 169;
    const PG = 170;
    const PH = 171;
    const PK = 172;
    const PL = 173;
    const PM = 174;
    const PN = 175;
    const PR = 176;
    const PS = 177;
    const PT = 178;
    const PW = 179;
    const PY = 180;
    const QA = 181;
    const RE = 182;
    const RO = 183;
    const RS = 184;
    const RU = 185;
    const RW = 186;
    const SA = 187;
    const SB = 188;
    const SC = 189;
    const SD = 190;
    const SE = 191;
    const SG = 192;
    const SH = 193;
    const SI = 194;
    const SJ = 195;
    const SK = 196;
    const SL = 197;
    const SM = 198;
    const SN = 199;
    const SO = 200;
    const SR = 201;
    const ST = 202;
    const SV = 203;
    const SY = 204;
    const SZ = 205;
    const TC = 206;
    const TD = 207;
    const TG = 208;
    const TH = 208;
    const TJ = 209;
    const TK = 210;
    const TL = 211;
    const TM = 212;
    const TN = 213;
    const TO = 214;
    const TR = 215;
    const TT = 216;
    const TV = 217;
    const TW = 218;
    const TZ = 219;
    const UA = 220;
    const UG = 221;
    const US = 222;
    const UY = 223;
    const UZ = 224;
    const VA = 225;
    const VC = 226;
    const VE = 227;
    const VG = 228;
    const VI = 229;
    const VN = 230;
    const VU = 231;
    const WF = 232;
    const WS = 233;
    const YE = 234;
    const YT = 235;
    const ZA = 236;
    const ZM = 237;
    const ZW = 238;
    const TF = 239;   
}
?> 