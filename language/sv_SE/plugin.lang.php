<?php
// +-----------------------------------------------------------------------+
// | This file is part of Piwigo.                                          |
// |                                                                       |
// | For copyright and license information, please view the COPYING.txt    |
// | file that was distributed with this source code.                      |
// +-----------------------------------------------------------------------+
$lang['AStat_tools_purge_history_categoryid0'] = 'För att rensa händelser kopplade till raderade kategorier (%s händelser i historiken)';
$lang['AStat_tools_purge_history_date'] = 'För att rensa alla händelser tidigare ';
$lang['AStat_tools_purge_history_imageid0'] = 'För att rensa alla händelser som är kopplade till raderade bilder (%s händelser i historiken)';
$lang['AStat_tools_purge_history_ipid0'] = 'För att rensa händelser associerade med IP från blocklistan (%s objekt i blocklistan, %s händelser i historiken)';
$lang['AStat_tools_purge_history_nfo'] = 'Denna funktion kommer att rensa historiken från alla tidigare händelser från ett givet datum och optimerar tabellen.<br><b>Åtgärden kan inte ångras!</b>.';
$lang['AStat_tools_result_ko'] = 'Ett fel har uppstått. Åtgärden har inte utförts korrekt';
$lang['AStat_tools_result_ok'] = 'Åtgärden har utförts korrekt';
$lang['AStat_tools_title'] = 'Underhållsverktyg';
$lang['AStat_version'] = 'version';
$lang['AStat_yesno_false'] = 'Nej';
$lang['AStat_yesno_true'] = 'Ja';
$lang['CATEGORY_LABEL'] = 'Kategorier';
$lang['Categories_seen'] = 'Sedda kategorier';
$lang['IP_label'] = 'IP adress';
$lang['IP_visit'] = 'IP adresser';
$lang['Pictures_seen'] = 'Bilder sedda';
$lang['pct_Pages_seen'] = '%Sidor';
$lang['pct_Pictures_seen'] = '%Bilder';
$lang['ratio_Pictures_seen'] = 'Bilder sedda';
$lang['AStat_tools_deleted_picture_error1'] = 'Ny förening av händelser i historiken har misslyckats';
$lang['AStat_tools_deleted_picture_nfo0'] = 'Påverkar händelser i historiken som hänvisar till bilder som inte längre finns, en <i>bild [Id #0] finns inte längre i basen</i>';
$lang['AStat_tools_deleted_picture_nfo1'] = '%s okänt bild-ID i historiken över händelser som påverkar %s händelser: <ul>%s</ul>';
$lang['AStat_tools_deleted_picture_nfo2'] = 'Alla bild-ID:n i händelsehistoriken finns, ingen åtgärd kommer vidtas.';
$lang['AStat_tools_deleted_picture_nfo3'] = 'När bilder överförs fysiskt från en katalog, raderar synkroniseringen bilder från basen och återställs sedan med en ny referens. En överförd bild lämnar sedan händelser i historiken länkade till en referens som inte längre existerar.</p><p><i>Astat</i> tillåter:<ul><li>att memorera bildreferenser <u><i> före</i></u> synkronisering av</li><li>länkhistorikhändelser med exakt bildreferens <u><i>efter</i></u> en synkronisering</li></p> <p><b>Se upp!</b><br><ul><li>om bilder har samma filnamn kan resultatet inte förutsägas</li><li>den här funktionen kan inte hantera bild vars filnamn har ändrats på servern</li></ul>';
$lang['AStat_tools_deleted_picture_nfo_nb'] = '(%s bild-ID kan inte länkas till %s händelser i historiken)';
$lang['AStat_tools_deleted_picture_ok0'] = 'Priming av tabellen lyckades, filer kan omorganiseras på servern';
$lang['AStat_tools_deleted_picture_ok1'] = 'Länka händelse i historiken har lyckats';
$lang['AStat_tools_deleted_picture_prepare_action'] = '<u>Före</u> synkronisering : förbered <i>AStat</i>';
$lang['AStat_tools_deleted_user'] = 'Uppdatera historiken med användares referenser';
$lang['AStat_tools_deleted_user_apply'] = 'Uppdatera';
$lang['AStat_tools_deleted_user_nfo0'] = 'Denna funktion tvingar <i>gäst</i> ett användar-ID genererat som en händelse i historiken vars konto har raderats sedan dess.';
$lang['AStat_tools_deleted_user_nfo1'] = '%s okänt användar-ID bland historikhändelser som påverkar %s händelser: <ul>%s</ul>';
$lang['AStat_tools_deleted_user_nfo2'] = 'Alla användar-ID i händelsehistoriken finns, ingen åtgärd kommer vidtas.';
$lang['AStat_tools_general_nfo'] = 'Allmän information om historiken';
$lang['AStat_tools_general_nfo_nfo'] = '<ul><li>%s händelser finns i historiken</li>
             <li>Tabellvikter %s (Tabell: %s ; Index: %s)</li>
             <li>Datum för första händelse: %s</li>
             <li>Datum för senaste händelse: %s</li>';
$lang['AStat_tools_invalid_date'] = 'Angivet datum är inte giltigt!';
$lang['AStat_tools_invalid_date2'] = 'Angivet datum är över eller lika med datum för dagen';
$lang['AStat_tools_purge_history'] = 'Rensning av historiken';
$lang['AStat_tools_purge_history_apply'] = 'Rensa';
$lang['AStat_sortip_ip'] = 'Användare / IP adress';
$lang['AStat_sortip_page'] = 'Antal sidor sedda';
$lang['AStat_sortip_picture'] = 'Antal bilder sedda';
$lang['AStat_specific_category_config'] = 'Specifika inställningar för statistik efter kategorier';
$lang['AStat_specific_image_config'] = 'Specifika inställningar för statistik per bilder';
$lang['AStat_specific_ip_config'] = 'Specifika inställningar för statistik efter IP adresser';
$lang['AStat_specific_period_config'] = 'Specifika inställningar för statistik efter perioder';
$lang['AStat_time_request_label'] = 'Begäran verkställd på';
$lang['AStat_title_page'] = 'Avancerad statistik';
$lang['AStat_tools'] = 'Verktyg';
$lang['AStat_tools_deleted_category'] = 'Uppdatera kategorier i historiken';
$lang['AStat_tools_deleted_category_apply'] = 'Uppdatera';
$lang['AStat_tools_deleted_category_nfo0'] = 'Tilldelar händelser i historien som inte längre existerar. Raderad kategori';
$lang['AStat_tools_deleted_category_nfo1'] = '%s obefintlig katalog listas bland händelser i historien och påverkar %s händelser: <ul>%s</ul>';
$lang['AStat_tools_deleted_category_nfo2'] = 'Alla händelsekategorier i historiken finns. Inga åtgärder kommer vidtas.';
$lang['AStat_tools_deleted_picture'] = 'Uppdatera historiken med bildhänvisningar';
$lang['AStat_tools_deleted_picture_apply'] = 'Uppdatera';
$lang['AStat_tools_deleted_picture_do'] = 'Gör processen';
$lang['AStat_tools_deleted_picture_do_action'] = '<u>Efter</u> synkronisering : länka igen nytt bild-ID till händelser i historiken';
$lang['AStat_tools_deleted_picture_error0'] = 'Priming har misslyckats';
$lang['AStat_page_label'] = 'Sida';
$lang['AStat_pages_label'] = 'Sidor';
$lang['AStat_period_label_all'] = 'Hela året';
$lang['AStat_period_label_days'] = 'Dagar';
$lang['AStat_period_label_global'] = 'Global';
$lang['AStat_period_label_hours'] = 'Timmar';
$lang['AStat_period_label_months'] = 'Månader';
$lang['AStat_period_label_years'] = 'År';
$lang['AStat_section_additional_page'] = 'Insticksmodul <a href="http://phpwebgallery.net/ext/extension_view.php?eid=153">Ytterligare sidor</a>';
$lang['AStat_section_deleted_cat'] = 'Kategori raderad';
$lang['AStat_section_label'] = 'Sektion';
$lang['AStat_section_most_commented'] = 'Insticksmodul <a href="http://phpwebgallery.net/ext/extension_view.php?eid=145">Mest kommenterade</a>';
$lang['AStat_section_old_deleted_cat'] = 'Det gick inte att importera gammal kategori';
$lang['AStat_section_unknown'] = 'Okänd [%s]';
$lang['AStat_section_web_services'] = 'Insticksmodul <a href="http://phpwebgallery.net/ext/extension_view.php?eid=171">Statistik för webbtjänster</a>';
$lang['AStat_sortcat_nbpicture'] = 'Genomsnittligt antal visningar per bild';
$lang['AStat_sortcat_page'] = 'Representation i procent av sedda sidor';
$lang['AStat_sortcat_picture'] = 'Representation i procent av sedda bilder';
$lang['AStat_sortimg_catname'] = 'Alfabetisk ordning - Kategori / Bildens namn';
$lang['AStat_sortimg_picture'] = 'Bildens antal visningar';
$lang['AStat_event'] = 'händelse';
$lang['AStat_events'] = 'händelser';
$lang['AStat_general_config'] = 'Globala inställningar';
$lang['AStat_gpc2_not_installed'] = 'Insticksmodulen \'Grum Plugin Classes 2\' (version >= %s) krävs för att installera AStat';
$lang['AStat_month_of_year_1'] = 'Januari';
$lang['AStat_month_of_year_10'] = 'Oktober';
$lang['AStat_month_of_year_11'] = 'November';
$lang['AStat_month_of_year_12'] = 'December';
$lang['AStat_month_of_year_2'] = 'Februari';
$lang['AStat_month_of_year_3'] = 'Mars';
$lang['AStat_month_of_year_4'] = 'April';
$lang['AStat_month_of_year_5'] = 'Maj';
$lang['AStat_month_of_year_6'] = 'Juni';
$lang['AStat_month_of_year_7'] = 'Juli';
$lang['AStat_month_of_year_8'] = 'Augusti';
$lang['AStat_month_of_year_9'] = 'September';
$lang['AStat_nb_total_category'] = 'Totalt antal kategorier';
$lang['AStat_nb_total_image'] = 'Totalt antal bilder';
$lang['AStat_nb_total_ip'] = 'Totalt antal IP adresser';
$lang['AStat_nofilter'] = '--- Inget filter ---';
$lang['AStat_catfilter_list'] = 'Tillämpa filter på kategorier';
$lang['AStat_config'] = 'Inställningar';
$lang['AStat_config_colors_and_graph'] = 'Färg & grafikinställningar';
$lang['AStat_config_saved'] = 'Inställningar är sparade!';
$lang['AStat_config_title'] = 'AStat inställningar';
$lang['AStat_confignotsaved'] = 'Ett fel uppstod, inställningar sparades inte';
$lang['AStat_date_time_format'] = 'Y/m/d H:i:s';
$lang['AStat_day_of_week_0'] = 'Söndag';
$lang['AStat_day_of_week_1'] = 'Måndag';
$lang['AStat_day_of_week_2'] = 'Tisdag';
$lang['AStat_day_of_week_3'] = 'Onsdag';
$lang['AStat_day_of_week_4'] = 'Torsdag';
$lang['AStat_day_of_week_5'] = 'Fredag';
$lang['AStat_day_of_week_6'] = 'Lördag';
$lang['AStat_deleted_picture'] = 'Bilden finns inte längre';
$lang['AStat_deleted_user'] = 'Raderad användare';
$lang['AStat_do_save'] = 'Spara';
$lang['AStat_enableddisabled_false'] = 'Filter inaktiverat';
$lang['AStat_enableddisabled_invert'] = 'Filter inverterat';
$lang['AStat_enableddisabled_true'] = 'Filter aktiverat';
$lang['AStat_Nfo_Period'] = 'För den valda perioden, representera antalet sidor och bilder som har setts, som antalet distinkta IP-adresser anslutna';
$lang['AStat_PeriodPerDefault'] = 'Standard vald period';
$lang['AStat_PeriodPerDefault_all'] = 'Alla år';
$lang['AStat_PeriodPerDefault_day'] = 'Nuvarande dag';
$lang['AStat_PeriodPerDefault_global'] = 'Global';
$lang['AStat_PeriodPerDefault_month'] = 'Nuvarande månad';
$lang['AStat_PeriodPerDefault_year'] = 'Nuvarande år';
$lang['AStat_RefIPLabel'] = 'Användare / IP adress';
$lang['AStat_RefImageLabel'] = 'Kategori / Bildens namn';
$lang['AStat_SeeTimeRequests'] = 'Visa tidsutförande av förfrågningar';
$lang['AStat_ShowThumbCat'] = 'Visa den representativa kategorins miniatyrbild';
$lang['AStat_ShowThumbImg'] = 'Visa bildens miniatyrbild';
$lang['AStat_SortCatLabel'] = 'Sorterad efter';
$lang['AStat_SortIPLabel'] = 'Sorterad efter';
$lang['AStat_SortImgLabel'] = 'Sorterad efter';
$lang['AStat_adviser_not_authorized'] = 'Åtgärd avbruten: rådgivareprofilen tillåter inte denna typ av åtgärd';
$lang['AStat_by_category'] = 'Efter kategori';
$lang['AStat_by_image'] = 'Per bilder';
$lang['AStat_by_ip'] = 'Efter IP';
$lang['AStat_by_period'] = 'Efter period';
$lang['AStat_AddIP'] = 'Lägg till i blocklistan';
$lang['AStat_BarColor_Cat'] = 'Antal kategorier';
$lang['AStat_BarColor_IP'] = 'Antal IP adresser';
$lang['AStat_BarColor_Img'] = 'Antal bilder';
$lang['AStat_BarColor_Pages'] = 'Antal sidor';
$lang['AStat_BlackListedIP'] = 'Blockerad IP';
$lang['AStat_DefaultSortCat'] = 'Standardsortering';
$lang['AStat_DefaultSortIP'] = 'Standardsortering';
$lang['AStat_DefaultSortImg'] = 'Standardsortering';
$lang['AStat_DelIP'] = 'Radera från blocklistan';
$lang['AStat_IP_blacklist'] = 'Lägg till i blocklistan';
$lang['AStat_IP_geolocalisation'] = 'Geolokalisering';
$lang['AStat_MaxBarWidth'] = 'Maximal radbredd (pixlar)';
$lang['AStat_MouseOverColor'] = 'Mus över raden';
$lang['AStat_NbCatPerPages'] = 'Antal kategorier per sida';
$lang['AStat_NbIPPerPages'] = 'Antal IP adresser per sida';
$lang['AStat_NbImgPerPages'] = 'Antal bilder per sida';
$lang['AStat_Nfo_Category'] = 'För den valda perioden, representera i procent antal sidor och bilder sett per kategori, som det genomsnittliga antalet visningar per bild';
$lang['AStat_Nfo_IP'] = 'För den valda perioden, representera antalet sidor och bilder som ses av en IP-adress';
$lang['AStat_Nfo_Image'] = 'För den valda perioden, antal visningar för varje bild, som representationen i procent av antalet visningar av det totala antalet visningar';