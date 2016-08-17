<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '7.6.0.0',
  'acceptable_sugar_versions' => 
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'CORP',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'readme' => '',
  'key' => 'sch',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'school',
  'published_date' => '2016-08-10 09:47:42',
  'type' => 'module',
  'version' => 1470822462,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'school',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'sch_Students',
      'class' => 'sch_Students',
      'path' => 'modules/sch_Students/sch_Students.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'sch_Schools',
      'class' => 'sch_Schools',
      'path' => 'modules/sch_Schools/sch_Schools.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'sch_StaffMembers',
      'class' => 'sch_StaffMembers',
      'path' => 'modules/sch_StaffMembers/sch_StaffMembers.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'sch_Teachers',
      'class' => 'sch_Teachers',
      'path' => 'modules/sch_Teachers/sch_Teachers.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/sch_Students',
      'to' => 'modules/sch_Students',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/sch_Schools',
      'to' => 'modules/sch_Schools',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/sch_StaffMembers',
      'to' => 'modules/sch_StaffMembers',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/sch_Teachers',
      'to' => 'modules/sch_Teachers',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/lt_LT.lang.php',
      'to_module' => 'application',
      'language' => 'lt_LT',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/fi_FI.lang.php',
      'to_module' => 'application',
      'language' => 'fi_FI',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/bg_BG.lang.php',
      'to_module' => 'application',
      'language' => 'bg_BG',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/sr_RS.lang.php',
      'to_module' => 'application',
      'language' => 'sr_RS',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/de_DE.lang.php',
      'to_module' => 'application',
      'language' => 'de_DE',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/hu_HU.lang.php',
      'to_module' => 'application',
      'language' => 'hu_HU',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ko_KR.lang.php',
      'to_module' => 'application',
      'language' => 'ko_KR',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/he_IL.lang.php',
      'to_module' => 'application',
      'language' => 'he_IL',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/pt_PT.lang.php',
      'to_module' => 'application',
      'language' => 'pt_PT',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/et_EE.lang.php',
      'to_module' => 'application',
      'language' => 'et_EE',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/sq_AL.lang.php',
      'to_module' => 'application',
      'language' => 'sq_AL',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/pt_BR.lang.php',
      'to_module' => 'application',
      'language' => 'pt_BR',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/pl_PL.lang.php',
      'to_module' => 'application',
      'language' => 'pl_PL',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ca_ES.lang.php',
      'to_module' => 'application',
      'language' => 'ca_ES',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/el_EL.lang.php',
      'to_module' => 'application',
      'language' => 'el_EL',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/fr_FR.lang.php',
      'to_module' => 'application',
      'language' => 'fr_FR',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/zh_CN.lang.php',
      'to_module' => 'application',
      'language' => 'zh_CN',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/es_ES.lang.php',
      'to_module' => 'application',
      'language' => 'es_ES',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/nl_NL.lang.php',
      'to_module' => 'application',
      'language' => 'nl_NL',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/lv_LV.lang.php',
      'to_module' => 'application',
      'language' => 'lv_LV',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ar_SA.lang.php',
      'to_module' => 'application',
      'language' => 'ar_SA',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/cs_CZ.lang.php',
      'to_module' => 'application',
      'language' => 'cs_CZ',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/da_DK.lang.php',
      'to_module' => 'application',
      'language' => 'da_DK',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/sk_SK.lang.php',
      'to_module' => 'application',
      'language' => 'sk_SK',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/tr_TR.lang.php',
      'to_module' => 'application',
      'language' => 'tr_TR',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ru_RU.lang.php',
      'to_module' => 'application',
      'language' => 'ru_RU',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ja_JP.lang.php',
      'to_module' => 'application',
      'language' => 'ja_JP',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/uk_UA.lang.php',
      'to_module' => 'application',
      'language' => 'uk_UA',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_UK.lang.php',
      'to_module' => 'application',
      'language' => 'en_UK',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/it_it.lang.php',
      'to_module' => 'application',
      'language' => 'it_it',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/sv_SE.lang.php',
      'to_module' => 'application',
      'language' => 'sv_SE',
    ),
    32 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/nb_NO.lang.php',
      'to_module' => 'application',
      'language' => 'nb_NO',
    ),
    33 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/es_LA.lang.php',
      'to_module' => 'application',
      'language' => 'es_LA',
    ),
    34 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ro_RO.lang.php',
      'to_module' => 'application',
      'language' => 'ro_RO',
    ),
  ),
);