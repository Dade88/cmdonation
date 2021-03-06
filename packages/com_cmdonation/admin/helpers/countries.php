<?php
/**
 * @package    CMDonation
 * @copyright  Copyright (C) 2014-2016 CMExtension Team http://www.cmext.vn/
 * @license    GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

$countryList = array(
	'AF' => 'COM_CMDONATION_COUNTRY_AFGHANISTAN',
	'AX' => 'COM_CMDONATION_COUNTRY_ALAND_ISLANDS',
	'AL' => 'COM_CMDONATION_COUNTRY_ALBANIA',
	'DZ' => 'COM_CMDONATION_COUNTRY_ALGERIA',
	'AS' => 'COM_CMDONATION_COUNTRY_AMERICAN_SAMOA',
	'AD' => 'COM_CMDONATION_COUNTRY_ANDORRA',
	'AO' => 'COM_CMDONATION_COUNTRY_ANGOLA',
	'AI' => 'COM_CMDONATION_COUNTRY_ANGUILLA',
	'AQ' => 'COM_CMDONATION_COUNTRY_ANTARCTICA',
	'AG' => 'COM_CMDONATION_COUNTRY_ANTIGUA_AND_BARBUDA',
	'AR' => 'COM_CMDONATION_COUNTRY_ARGENTINA',
	'AM' => 'COM_CMDONATION_COUNTRY_ARMENIA',
	'AW' => 'COM_CMDONATION_COUNTRY_ARUBA',
	'AU' => 'COM_CMDONATION_COUNTRY_AUSTRALIA',
	'AT' => 'COM_CMDONATION_COUNTRY_AUSTRIA',
	'AZ' => 'COM_CMDONATION_COUNTRY_AZERBAIJAN',
	'BS' => 'COM_CMDONATION_COUNTRY_BAHAMAS',
	'BH' => 'COM_CMDONATION_COUNTRY_BAHRAIN',
	'BD' => 'COM_CMDONATION_COUNTRY_BANGLADESH',
	'BB' => 'COM_CMDONATION_COUNTRY_BARBADOS',
	'BY' => 'COM_CMDONATION_COUNTRY_BELARUS',
	'BE' => 'COM_CMDONATION_COUNTRY_BELGIUM',
	'BZ' => 'COM_CMDONATION_COUNTRY_BELIZE',
	'BJ' => 'COM_CMDONATION_COUNTRY_BENIN',
	'BM' => 'COM_CMDONATION_COUNTRY_BERMUDA',
	'BT' => 'COM_CMDONATION_COUNTRY_BHUTAN',
	'BO' => 'COM_CMDONATION_COUNTRY_BOLIVIA',
	'BA' => 'COM_CMDONATION_COUNTRY_BOSNIA_AND_HERZEGOVINA',
	'BW' => 'COM_CMDONATION_COUNTRY_BOTSWANA',
	'BV' => 'COM_CMDONATION_COUNTRY_BOUVET_ISLAND',
	'BR' => 'COM_CMDONATION_COUNTRY_BRAZIL',
	'IO' => 'COM_CMDONATION_COUNTRY_BRITISH_INDIAN_OCEAN_TERRITORY',
	'BN' => 'COM_CMDONATION_COUNTRY_BRUNEI_DARUSSALAM',
	'BG' => 'COM_CMDONATION_COUNTRY_BULGARIA',
	'BF' => 'COM_CMDONATION_COUNTRY_BURKINA_FASO',
	'BI' => 'COM_CMDONATION_COUNTRY_BURUNDI',
	'KH' => 'COM_CMDONATION_COUNTRY_CAMBODIA',
	'CM' => 'COM_CMDONATION_COUNTRY_CAMEROON',
	'CA' => 'COM_CMDONATION_COUNTRY_CANADA',
	'CV' => 'COM_CMDONATION_COUNTRY_CAPE_VERDE',
	'KY' => 'COM_CMDONATION_COUNTRY_CAYMAN_ISLANDS',
	'CF' => 'COM_CMDONATION_COUNTRY_CENTRAL_AFRICAN_REPUBLIC',
	'TD' => 'COM_CMDONATION_COUNTRY_CHAD',
	'CL' => 'COM_CMDONATION_COUNTRY_CHILE',
	'CN' => 'COM_CMDONATION_COUNTRY_CHINA',
	'CX' => 'COM_CMDONATION_COUNTRY_CHRISTMAS_ISLAND',
	'CC' => 'COM_CMDONATION_COUNTRY_COCOS_KEELING_ISLANDS',
	'CO' => 'COM_CMDONATION_COUNTRY_COLOMBIA',
	'KM' => 'COM_CMDONATION_COUNTRY_COMOROS',
	'CG' => 'COM_CMDONATION_COUNTRY_CONGO',
	'CD' => 'COM_CMDONATION_COUNTRY_CONGO_DEMOCRATIC_REPUBLIC',
	'CK' => 'COM_CMDONATION_COUNTRY_COOK_ISLANDS',
	'CR' => 'COM_CMDONATION_COUNTRY_COSTA_RICA',
	'CI' => 'COM_CMDONATION_COUNTRY_COTE_D_IVOIRE',
	'HR' => 'COM_CMDONATION_COUNTRY_CROATIA',
	'CU' => 'COM_CMDONATION_COUNTRY_CUBA',
	'CY' => 'COM_CMDONATION_COUNTRY_CYPRUS',
	'CZ' => 'COM_CMDONATION_COUNTRY_CZECH_REPUBLIC',
	'DK' => 'COM_CMDONATION_COUNTRY_DENMARK',
	'DJ' => 'COM_CMDONATION_COUNTRY_DJIBOUTI',
	'DM' => 'COM_CMDONATION_COUNTRY_DOMINICA',
	'DO' => 'COM_CMDONATION_COUNTRY_DOMINICAN_REPUBLIC',
	'EC' => 'COM_CMDONATION_COUNTRY_ECUADOR',
	'EG' => 'COM_CMDONATION_COUNTRY_EGYPT',
	'SV' => 'COM_CMDONATION_COUNTRY_EL_SALVADOR',
	'GQ' => 'COM_CMDONATION_COUNTRY_EQUATORIAL_GUINEA',
	'ER' => 'COM_CMDONATION_COUNTRY_ERITREA',
	'EE' => 'COM_CMDONATION_COUNTRY_ESTONIA',
	'ET' => 'COM_CMDONATION_COUNTRY_ETHIOPIA',
	'FK' => 'COM_CMDONATION_COUNTRY_FALKLAND_ISLANDS_MALVINAS',
	'FO' => 'COM_CMDONATION_COUNTRY_FAROE_ISLANDS',
	'FJ' => 'COM_CMDONATION_COUNTRY_FIJI',
	'FI' => 'COM_CMDONATION_COUNTRY_FINLAND',
	'FR' => 'COM_CMDONATION_COUNTRY_FRANCE',
	'GF' => 'COM_CMDONATION_COUNTRY_FRENCH_GUIANA',
	'PF' => 'COM_CMDONATION_COUNTRY_FRENCH_POLYNESIA',
	'TF' => 'COM_CMDONATION_COUNTRY_FRENCH_SOUTHERN_TERRITORIES',
	'GA' => 'COM_CMDONATION_COUNTRY_GABON',
	'GM' => 'COM_CMDONATION_COUNTRY_GAMBIA',
	'GE' => 'COM_CMDONATION_COUNTRY_GEORGIA',
	'DE' => 'COM_CMDONATION_COUNTRY_GERMANY',
	'GH' => 'COM_CMDONATION_COUNTRY_GHANA',
	'GI' => 'COM_CMDONATION_COUNTRY_GIBRALTAR',
	'GR' => 'COM_CMDONATION_COUNTRY_GREECE',
	'GL' => 'COM_CMDONATION_COUNTRY_GREENLAND',
	'GD' => 'COM_CMDONATION_COUNTRY_GRENADA',
	'GP' => 'COM_CMDONATION_COUNTRY_GUADELOUPE',
	'GU' => 'COM_CMDONATION_COUNTRY_GUAM',
	'GT' => 'COM_CMDONATION_COUNTRY_GUATEMALA',
	'GG' => 'COM_CMDONATION_COUNTRY_GUERNSEY',
	'GN' => 'COM_CMDONATION_COUNTRY_GUINEA',
	'GW' => 'COM_CMDONATION_COUNTRY_GUINEA_BISSAU',
	'GY' => 'COM_CMDONATION_COUNTRY_GUYANA',
	'HT' => 'COM_CMDONATION_COUNTRY_HAITI',
	'HM' => 'COM_CMDONATION_COUNTRY_HEARD_ISLAND_MCDONALD_ISLANDS',
	'VA' => 'COM_CMDONATION_COUNTRY_HOLY_SEE_VATICAN_CITY_STATE',
	'HN' => 'COM_CMDONATION_COUNTRY_HONDURAS',
	'HK' => 'COM_CMDONATION_COUNTRY_HONG_KONG',
	'HU' => 'COM_CMDONATION_COUNTRY_HUNGARY',
	'IS' => 'COM_CMDONATION_COUNTRY_ICELAND',
	'IN' => 'COM_CMDONATION_COUNTRY_INDIA',
	'ID' => 'COM_CMDONATION_COUNTRY_INDONESIA',
	'IR' => 'COM_CMDONATION_COUNTRY_IRAN_ISLAMIC_REPUBLIC_OF',
	'IQ' => 'COM_CMDONATION_COUNTRY_IRAQ',
	'IE' => 'COM_CMDONATION_COUNTRY_IRELAND',
	'IM' => 'COM_CMDONATION_COUNTRY_ISLE_OF_MAN',
	'IL' => 'COM_CMDONATION_COUNTRY_ISRAEL',
	'IT' => 'COM_CMDONATION_COUNTRY_ITALY',
	'JM' => 'COM_CMDONATION_COUNTRY_JAMAICA',
	'JP' => 'COM_CMDONATION_COUNTRY_JAPAN',
	'JE' => 'COM_CMDONATION_COUNTRY_JERSEY',
	'JO' => 'COM_CMDONATION_COUNTRY_JORDAN',
	'KZ' => 'COM_CMDONATION_COUNTRY_KAZAKHSTAN',
	'KE' => 'COM_CMDONATION_COUNTRY_KENYA',
	'KI' => 'COM_CMDONATION_COUNTRY_KIRIBATI',
	'KR' => 'COM_CMDONATION_COUNTRY_KOREA',
	'KW' => 'COM_CMDONATION_COUNTRY_KUWAIT',
	'KG' => 'COM_CMDONATION_COUNTRY_KYRGYZSTAN',
	'LA' => 'COM_CMDONATION_COUNTRY_LAO_PEOPLE_S_DEMOCRATIC_REPUBLIC',
	'LV' => 'COM_CMDONATION_COUNTRY_LATVIA',
	'LB' => 'COM_CMDONATION_COUNTRY_LEBANON',
	'LS' => 'COM_CMDONATION_COUNTRY_LESOTHO',
	'LR' => 'COM_CMDONATION_COUNTRY_LIBERIA',
	'LY' => 'COM_CMDONATION_COUNTRY_LIBYAN_ARAB_JAMAHIRIYA',
	'LI' => 'COM_CMDONATION_COUNTRY_LIECHTENSTEIN',
	'LT' => 'COM_CMDONATION_COUNTRY_LITHUANIA',
	'LU' => 'COM_CMDONATION_COUNTRY_LUXEMBOURG',
	'MO' => 'COM_CMDONATION_COUNTRY_MACAO',
	'MK' => 'COM_CMDONATION_COUNTRY_MACEDONIA',
	'MG' => 'COM_CMDONATION_COUNTRY_MADAGASCAR',
	'MW' => 'COM_CMDONATION_COUNTRY_MALAWI',
	'MY' => 'COM_CMDONATION_COUNTRY_MALAYSIA',
	'MV' => 'COM_CMDONATION_COUNTRY_MALDIVES',
	'ML' => 'COM_CMDONATION_COUNTRY_MALI',
	'MT' => 'COM_CMDONATION_COUNTRY_MALTA',
	'MH' => 'COM_CMDONATION_COUNTRY_MARSHALL_ISLANDS',
	'MQ' => 'COM_CMDONATION_COUNTRY_MARTINIQUE',
	'MR' => 'COM_CMDONATION_COUNTRY_MAURITANIA',
	'MU' => 'COM_CMDONATION_COUNTRY_MAURITIUS',
	'YT' => 'COM_CMDONATION_COUNTRY_MAYOTTE',
	'MX' => 'COM_CMDONATION_COUNTRY_MEXICO',
	'FM' => 'COM_CMDONATION_COUNTRY_MICRONESIA_FEDERATED_STATES_OF',
	'MD' => 'COM_CMDONATION_COUNTRY_MOLDOVA',
	'MC' => 'COM_CMDONATION_COUNTRY_MONACO',
	'MN' => 'COM_CMDONATION_COUNTRY_MONGOLIA',
	'ME' => 'COM_CMDONATION_COUNTRY_MONTENEGRO',
	'MS' => 'COM_CMDONATION_COUNTRY_MONTSERRAT',
	'MA' => 'COM_CMDONATION_COUNTRY_MOROCCO',
	'MZ' => 'COM_CMDONATION_COUNTRY_MOZAMBIQUE',
	'MM' => 'COM_CMDONATION_COUNTRY_MYANMAR',
	'NA' => 'COM_CMDONATION_COUNTRY_NAMIBIA',
	'NR' => 'COM_CMDONATION_COUNTRY_NAURU',
	'NP' => 'COM_CMDONATION_COUNTRY_NEPAL',
	'NL' => 'COM_CMDONATION_COUNTRY_NETHERLANDS',
	'AN' => 'COM_CMDONATION_COUNTRY_NETHERLANDS_ANTILLES',
	'NC' => 'COM_CMDONATION_COUNTRY_NEW_CALEDONIA',
	'NZ' => 'COM_CMDONATION_COUNTRY_NEW_ZEALAND',
	'NI' => 'COM_CMDONATION_COUNTRY_NICARAGUA',
	'NE' => 'COM_CMDONATION_COUNTRY_NIGER',
	'NG' => 'COM_CMDONATION_COUNTRY_NIGERIA',
	'NU' => 'COM_CMDONATION_COUNTRY_NIUE',
	'NF' => 'COM_CMDONATION_COUNTRY_NORFOLK_ISLAND',
	'MP' => 'COM_CMDONATION_COUNTRY_NORTHERN_MARIANA_ISLANDS',
	'NO' => 'COM_CMDONATION_COUNTRY_NORWAY',
	'OM' => 'COM_CMDONATION_COUNTRY_OMAN',
	'PK' => 'COM_CMDONATION_COUNTRY_PAKISTAN',
	'PW' => 'COM_CMDONATION_COUNTRY_PALAU',
	'PS' => 'COM_CMDONATION_COUNTRY_PALESTINIAN_TERRITORY_OCCUPIED',
	'PA' => 'COM_CMDONATION_COUNTRY_PANAMA',
	'PG' => 'COM_CMDONATION_COUNTRY_PAPUA_NEW_GUINEA',
	'PY' => 'COM_CMDONATION_COUNTRY_PARAGUAY',
	'PE' => 'COM_CMDONATION_COUNTRY_PERU',
	'PH' => 'COM_CMDONATION_COUNTRY_PHILIPPINES',
	'PN' => 'COM_CMDONATION_COUNTRY_PITCAIRN',
	'PL' => 'COM_CMDONATION_COUNTRY_POLAND',
	'PT' => 'COM_CMDONATION_COUNTRY_PORTUGAL',
	'PR' => 'COM_CMDONATION_COUNTRY_PUERTO_RICO',
	'QA' => 'COM_CMDONATION_COUNTRY_QATAR',
	'RE' => 'COM_CMDONATION_COUNTRY_REUNION',
	'RO' => 'COM_CMDONATION_COUNTRY_ROMANIA',
	'RU' => 'COM_CMDONATION_COUNTRY_RUSSIAN_FEDERATION',
	'RW' => 'COM_CMDONATION_COUNTRY_RWANDA',
	'BL' => 'COM_CMDONATION_COUNTRY_SAINT_BARTHELEMY',
	'SH' => 'COM_CMDONATION_COUNTRY_SAINT_HELENA',
	'KN' => 'COM_CMDONATION_COUNTRY_SAINT_KITTS_AND_NEVIS',
	'LC' => 'COM_CMDONATION_COUNTRY_SAINT_LUCIA',
	'MF' => 'COM_CMDONATION_COUNTRY_SAINT_MARTIN',
	'PM' => 'COM_CMDONATION_COUNTRY_SAINT_PIERRE_AND_MIQUELON',
	'VC' => 'COM_CMDONATION_COUNTRY_SAINT_VINCENT_AND_GRENADINES',
	'WS' => 'COM_CMDONATION_COUNTRY_SAMOA',
	'SM' => 'COM_CMDONATION_COUNTRY_SAN_MARINO',
	'ST' => 'COM_CMDONATION_COUNTRY_SAO_TOME_AND_PRINCIPE',
	'SA' => 'COM_CMDONATION_COUNTRY_SAUDI_ARABIA',
	'SN' => 'COM_CMDONATION_COUNTRY_SENEGAL',
	'RS' => 'COM_CMDONATION_COUNTRY_SERBIA',
	'SC' => 'COM_CMDONATION_COUNTRY_SEYCHELLES',
	'SL' => 'COM_CMDONATION_COUNTRY_SIERRA_LEONE',
	'SG' => 'COM_CMDONATION_COUNTRY_SINGAPORE',
	'SK' => 'COM_CMDONATION_COUNTRY_SLOVAKIA',
	'SI' => 'COM_CMDONATION_COUNTRY_SLOVENIA',
	'SB' => 'COM_CMDONATION_COUNTRY_SOLOMON_ISLANDS',
	'SO' => 'COM_CMDONATION_COUNTRY_SOMALIA',
	'ZA' => 'COM_CMDONATION_COUNTRY_SOUTH_AFRICA',
	'GS' => 'COM_CMDONATION_COUNTRY_SOUTH_GEORGIA_AND_SANDWICH_ISL',
	'ES' => 'COM_CMDONATION_COUNTRY_SPAIN',
	'LK' => 'COM_CMDONATION_COUNTRY_SRI_LANKA',
	'SD' => 'COM_CMDONATION_COUNTRY_SUDAN',
	'SR' => 'COM_CMDONATION_COUNTRY_SURINAME',
	'SJ' => 'COM_CMDONATION_COUNTRY_SVALBARD_AND_JAN_MAYEN',
	'SZ' => 'COM_CMDONATION_COUNTRY_SWAZILAND',
	'SE' => 'COM_CMDONATION_COUNTRY_SWEDEN',
	'CH' => 'COM_CMDONATION_COUNTRY_SWITZERLAND',
	'SY' => 'COM_CMDONATION_COUNTRY_SYRIAN_ARAB_REPUBLIC',
	'TW' => 'COM_CMDONATION_COUNTRY_TAIWAN',
	'TJ' => 'COM_CMDONATION_COUNTRY_TAJIKISTAN',
	'TZ' => 'COM_CMDONATION_COUNTRY_TANZANIA',
	'TH' => 'COM_CMDONATION_COUNTRY_THAILAND',
	'TL' => 'COM_CMDONATION_COUNTRY_TIMOR_LESTE',
	'TG' => 'COM_CMDONATION_COUNTRY_TOGO',
	'TK' => 'COM_CMDONATION_COUNTRY_TOKELAU',
	'TO' => 'COM_CMDONATION_COUNTRY_TONGA',
	'TT' => 'COM_CMDONATION_COUNTRY_TRINIDAD_AND_TOBAGO',
	'TN' => 'COM_CMDONATION_COUNTRY_TUNISIA',
	'TR' => 'COM_CMDONATION_COUNTRY_TURKEY',
	'TM' => 'COM_CMDONATION_COUNTRY_TURKMENISTAN',
	'TC' => 'COM_CMDONATION_COUNTRY_TURKS_AND_CAICOS_ISLANDS',
	'TV' => 'COM_CMDONATION_COUNTRY_TUVALU',
	'UG' => 'COM_CMDONATION_COUNTRY_UGANDA',
	'UA' => 'COM_CMDONATION_COUNTRY_UKRAINE',
	'AE' => 'COM_CMDONATION_COUNTRY_UNITED_ARAB_EMIRATES',
	'GB' => 'COM_CMDONATION_COUNTRY_UNITED_KINGDOM',
	'US' => 'COM_CMDONATION_COUNTRY_UNITED_STATES',
	'UM' => 'COM_CMDONATION_COUNTRY_UNITED_STATES_OUTLYING_ISLANDS',
	'UY' => 'COM_CMDONATION_COUNTRY_URUGUAY',
	'UZ' => 'COM_CMDONATION_COUNTRY_UZBEKISTAN',
	'VU' => 'COM_CMDONATION_COUNTRY_VANUATU',
	'VE' => 'COM_CMDONATION_COUNTRY_VENEZUELA',
	'VN' => 'COM_CMDONATION_COUNTRY_VIET_NAM',
	'VG' => 'COM_CMDONATION_COUNTRY_VIRGIN_ISLANDS_BRITISH',
	'VI' => 'COM_CMDONATION_COUNTRY_VIRGIN_ISLANDS_U_S',
	'WF' => 'COM_CMDONATION_COUNTRY_WALLIS_AND_FUTUNA',
	'EH' => 'COM_CMDONATION_COUNTRY_WESTERN_SAHARA',
	'YE' => 'COM_CMDONATION_COUNTRY_YEMEN',
	'ZM' => 'COM_CMDONATION_COUNTRY_ZAMBIA',
	'ZW' => 'COM_CMDONATION_COUNTRY_ZIMBABWE',
);
