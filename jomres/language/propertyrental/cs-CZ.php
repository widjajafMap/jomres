<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
define('_JOMRES_COM_MR_QUICKRESDESC','Rychlá rezervace');
define('_JOMRES_COM_MR_SHOWPROFILES','Zobrazit profily');
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Obecné nastavení');
define('_JOMRES_COM_MR_BACK','Zpět');
define('_JOMRES_COM_MR_YES','Ano');
define('_JOMRES_COM_MR_NO','Ne');
define('_JOMRES_COM_MR_NEWTARIFF','Nový');
define('_JOMRES_COM_MR_NEWPROPERTY','Nová kapacita');
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Nové vybavení kapacity');
define('_JOMRES_COM_MR_NEWGUEST','Nový host');
define('_JOMRES_COM_MR_SAVE','Uložit');
// View bookings
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Jméno');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Příjezd');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Odjezd');
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Přiřazení uživatelských profilů');
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Jméno');
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Uživatelské jméno');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Aktuální autorizace');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Výchozí kapacita');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Změnit');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Úroveň přístupu');
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Uživatel nastaven');
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','n/a');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Recepce');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Správce kapacit');
// Edit bookings
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Všechny rezervace');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Nové rezervace (bez zálohy)');
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Editace rezervace');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Prj/Odj');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Host');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Pokoj');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Platba');
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Jméno');
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Príjmení');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Ostatní požadavky');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Upozornění: ostatní požadavky mohou být k dispozici jen za příplatek');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Stornovat rezervaci');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Číslo domu');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulice');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Město');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','PSČ');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon - pevná');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Telefon - mobil');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','E-mail');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Nelze stornovat, klient již má rezervaci.');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Záloha nezaplacena');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Potvrzení storna');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Rezervace stornována');
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dnů do příjezdu');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Typ rezervace');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Zakázaná');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Recepce');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
define('_JOMRES_COM_MR_EB_ROOM_NAME','Název pokoje');
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Pokoj');
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Podlaží');
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Pro hendikepované?');
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Max. počet osob');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Typ pokoje');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Popis typu pokoje');
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Seznam vybavení pokoje');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Zaplacená záloha');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Vložit zálohu');
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Celkem k zaplacení');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Záloha ref.');
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Rezervace');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Záloha');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Záloha uložena');
// Edit Language
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Naše pokoje');
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Kapacita');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Typ pokoje');
// Display guest form
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Upravit');
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Jméno');
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Příjmení');
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Dům');
define('_JOMRES_COM_MR_DISPGUEST_STREET','Ulice');
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Město');
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','PSČ');
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Telefon - pevná');
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Telefon - mobil');
define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Číslo CC');
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Karta vystavena');
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Platnost CC karty do');
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Číslo karty');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Jméno uvedené na kartě');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Výběr z nabízených');
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Počet dní');
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Počet hostů');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Celkem');
// Rooms tab
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Nastavení kapacit & pokojů');
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Pokoje');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Vybav. pokojů');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Typy pokojů');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Kapacita');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Vybavení kapacit');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Pokoj');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Typ');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Název');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Číslo');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Podlaží');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Pro hendikepované?');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Max. počet osob');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Vybavení');
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Pokoj přidán');
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Upravit položku');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Vybavení pokoje');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Popis vybavení');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Vybavení pokoje přidáno');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Vybavení pokoje aktualizováno');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Typ pokoje');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Typ pokoje zkrac.');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Typ pokoje detailně');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Typ pokoje přidán');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Typ pokoje aktualizován');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Upravit položku');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Název');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Ulice');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Město');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Region');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Země');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','PSČ');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Tel');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','E-mail');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','www');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Vybavení');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Kapacita přidána');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Kapacita aktualizována');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Vybavení kapacity');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Vybavení kapacity zkrác.');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Vybavení kapacity detailně');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Vybavení kapacity přidáno');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Vybavení kapacity aktualizováno');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Ceníky');
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Ceník');
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Popis');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Platný od');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Platný do');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Sazba za noc');
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Min. počet dní');
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Max. počet dní');
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Min. počet osob');
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Max. počet osob');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Typ pokoje');
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignorovat PPPN');
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Povolit víkendy');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Ceník přidán');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Ceník aktualizován');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Upravit položku');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Klonovat položku');
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Ceník odstraněn');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Upravit ceník');
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Státní svátek');
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Rezervace uložena');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Ubytovat hosta');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Ukončit ubytování hosta');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Seznam rezervací');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','NOVÉ rezervace');
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Control Panel');
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Správa hostu');
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Správa kapacit');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Zjistit dostupnost.');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Potvrzení zadaných údajů');
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Jméno');
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Příjmení');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','č.p.');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulice');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Město');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','PSČ');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon - pevná');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Telefon - mobilní');
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Zadaným parametrům bohužel neodpovídá žádný pokoj.');
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Děkujeme za projevený zájem a doufáme, že se Vám Vaše cesta bude líbit.<br><br> <b>Vemte prosím na vědomí, že Vaše objednávka je prozatím predběžná až do doby, než Vám ji potvrdíme závazně e-mailem.</center>');
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Rezervace na: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Rezervace pokoje: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Příjezd: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Odjezd: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Jméno: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Telefon - pevná: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Telefon - mobil: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Cena objednávky: ');
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Ubytování hosta');
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Vybrat hosta');
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Host ubytován');
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','K dnešnímu dni nezbývají žádní neubytovaní hosté');
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Ukončit ubytování hosta');
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','K dnešnímu dni nezbývají žádní odjíždějící hosté');
// Config panel
define('_JOMRES_COM_A_SUPPLIMENTS','Příplatky');
define('_JOMRES_COM_A_TARIFFS','Ceníky & měny');
define('_JOMRES_COM_A_DISCOUNTS','Slevy');
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Upload souboru');
define('_JOMRES_COM_A_CURRENT_SETTINGS','Aktuální nastavení');
define('_JOMRES_COM_A_EXPLANATION','Vysvětlení');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Jednolůľko');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Přejete-li si účtovat tuto položku, nastavte hodnotu na ANO');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Příplatek za jednolůžko');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Požadovaná záloha v procentech?');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Přejete-li si požadovanou zálohu účtovat procentem z celkové částky rezervace, zadejte hodnotu ANO. V opačném případě bude použita paušální hodnota.');
define('_JOMRES_COM_A_DEPOSIT_VALUE','Požadovaná výše zálohy');
define('_JOMRES_COM_A_TARIFFS_PER','za osobu, za noc');
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Přejete-li si účtovat položku dle PPPN (per-person-per-night), zadejte hodnotu ANO. Pokd ne, cena bude spočítána dle PRPN (per-room-per-night).');
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Velikost souboru');
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Max. velikost snímku v KB');
define('_JOMRES_FRONT_MR_BOOKED','Obsazeno');
define('_JOMRES_COM_CONFIRMATION_TITLE','Potvrzení rezervace');
define('_JOMRES_COM_CONFIRMATION_DEAR','Vážený(-á) ');
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Cena za noc - za pokoj ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Detaily objednávky');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Děkujeme za Vaši rezervaci v');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Níže naleznete shrnutí Vaší rezervace. Prosíme ověřte, že veškeré Vaše informace, zejména kontaktní, jsou v pořádku a pokud ne, dejte nám prosím obratem vědět.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Váš pokoj Vám je k dispozici hned po Vašem příjezdu, od 14.00 hod.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Těšíme se na setkání s Vámi ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Doufáme, že se Vám bude pobyt líbit.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Nyní prosím obraťte pozornost následujícím podmínkám.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','You are reminded that a booking is a legally binding contract, so if for any reason you have to cancel or shorten your booking then you are still liable to pay the full amount.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','No allowance can be made for meals not taken or for rooms not occupied for the full period of the boking. With this in mind we strongly recommend that you use a holiday insurance facility.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Stornování a omezen práv</i> If you cancel your holiday the cancellation must be confirmed in writing. Cancellation charges are as follows:');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 dní a více');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Záloha pouze.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 až 30 dní');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% z celkové částky.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Příjezd do 14 dnů');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% z celkové částky.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','VAT@ 17.5% is included in all tariffs. Any increase or alterations will be charged.');
define('_JOMRES_COM_CONFIRMATION_PRINT','Tisk potvrzení rezervace');
define('_JOMRES_COM_INVOICE_TITLE','Tisk faktury (daňového dokladu)');
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Počet osob: ');
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Smlouva uzavřena: ');
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Cena za noc: ');
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','CELKEM');
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Děkujeme za Váš pobyt v ');
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Doufáme, že příšte využijete naše služby.');
define('_JOMRES_COM_ADDSERVICE_TITLE','Přidat službu k vyúčtování');
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Popis služby');
define('_JOMRES_COM_ADDSERVICE_VALUE','Hodnota služby');
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Ostatní účtované položky');
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Ostatní účtované položky, celkem: ');
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Položka přidaná k vyúčtování');
define('_JOMRES_UPLOAD_IMAGE','Upload snímku');
define('_JOMRES_FILE_UPLOAD','Upload ouboru');
define('_JOMRES_FILE_ERROR_TYPE','Můžete pouze uploadovat soubory typu type:\n');
define('_JOMRES_FILE_ERROR_EMPTY','Před uploadem nejprve vyberte požadovaý soubor, prosím.');
define('_JOMRES_FILE_ERROR_NAME','Název souboru musí obsahovat pouze alfanumerické znaky a žádné mezery.');
define('_JOMRES_FILE_ERROR_SIZE','Velikost souboru překračuje maximální velikost nastavenou Administrátorem.');
define('_JOMRES_FILE_NOT_UPLOADED','Soubor NEBYL nahrán.');
define('_JOMRES_FILE_UPDATED','Soubor byl úspěšně nahrán.');
define('_JOMRES_COM_A_JSCALENDAR','JS kalendář');
define('_JOMRES_COM_A_CALENDARLANGUAGE','Jazyk JS kalen.');
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Vyberte požadovaný jazykový soubor JS kalendáře. Upozornění - některé kalendáře mohou obsahovat chyby, více informací na http://sourceforge.net/tracker/?group_id=75569&atid=544287');
define('_JOMRES_COM_A_CALENDARCSS','JS kalendář CSS souboru');
define('_JOMRES_COM_A_CALENDARCSS_DESC','Zvolte CSS soubor pro použití s JS kalendářem');
define('_JOMRES_COM_A_ODDS','Různé');
define('_JOMRES_COM_A_ERRORCHECKING','List minicomponent calls');
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
define('_JOMRES_FILE_DELETE','Odstranit soubor');
define('_JOMRES_FILE_DELETED','Soubor odstraněn');
define('_JOMRES_COM_MR_ROOM_DELETE','Odstranit');
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Pokoj nelze odstranit, obsahuje platné rezervace. Zrušte rezervace a zkuste znovu, prosím.');
define('_JOMRES_COM_MR_ROOM_DELETED','Pokoj odstraněn');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Odstranit vybavení pokoje');
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Vybavení pokoje nelze odstranit kvůli existujícím vazbám. Zruąte vazby na pokoje a zkuste znovu, prosím.');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Vybavení pokoje odstraněno');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Odstranit vybavení kapacity');
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Vybavení kapacity nelze odstranit kvůli existujícím vazbám. Zruąte vazby na kapacitu a zkuste znovu, prosím.');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Vybavení kapacity odstraněno');
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Odstranit typ pokoje');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Typ pokoje nelze odstranit kvůli existujícím vazbám. Zrušte vazby na typ pokoje a zkuste znovu, prosím.');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Vybavení pokoje nelze odstranit kvůli existujícím vazbám ceníku. Změňte ceníkové vazby a zkuste znovu, prosím..');
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Typ pokoje odstraněn');
define('_JOMRES_COM_MR_PROPERTY_DELETE','Odstranit kapacitu');
define('_JOMRES_COM_MR_PROPERTY_DELETED','Kapacita odstraněna');
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Nemáte oprávnění odstranit kapacitu.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','šířka plného náhledu snímku');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Mapa lokality');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Popis');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Check-in');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Aktivity v okolí');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Jak se k nám dostanete');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Letiště');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Jiná doprava');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Pravidla & vzdání se nároku');
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adresa');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Návštěvníci mohou rezervovat online');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Přejete-li si, aby návštěvníci mohli online rezervovat, nastavte hodnotu na ANO.');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Rezervace pro fixní období');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Přejete-li si fixní období rezervace, zadejte hodnotu ANO. Pokud je hodnota NE ujistěte se, že hodnota u pole "Pre
defined arrival day" není na ANO (pokud vědomě nechcete nutit návžtěvníky k příjezdu v určitý den) - v opačném případě kalendář dostupnosti nebude obsahovat dostatečné množství odkazů.');
define('_JOMRES_COM_A_FIXEDPERIOD','Období rezervace: ');
define('_JOMRES_COM_A_BOOKING','Rez. pokoje');
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Max. období rezervace, např. 3x 7 období rezervace = 21 dní');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Jde o apartment/chalupu/villu?');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','Vhodné pro případ, kdy pronajímáte celou kapacitu místo jednotlivých pokojů v ní. Jde-li o tento případ ujistěte se, že každá kapacita má navázaný poze jeden pokoj.');
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Revize rezervace');
define('_JOMRES_COM_MR_CONFIRMBOOKING','Potvrzení rezervace');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','pondělí');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','úterý');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','středa');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','čtvrtek');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','pátek');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','sobota');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','neděle');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','po');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','út');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','st');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','čt');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','pá');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','so');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','ne');
define('_JOMRES_COM_A_AVLCAL','Kal. dostupností');
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Barva písma dnešního data');
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Barva písma dnů v měsíci');
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Barva pásma dnů mimo zobrazený měsíc');
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Barva pozadí buňky dnů, kdy je kapacita/pokoj volný');
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Barva pozadí buňky dnů mimo zobrazený měsíc');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Barva pozadí buňek pro obsazené dny');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Barva pozadí pro předběžné rezervace (bez záloh)');
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Barva pozadí buněk dnů v minulosti');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Obsazeno-n/a');
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Volno');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Předběžná rezervace');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Přednastavený den příjezdu');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Pouze pro websites nabízející fixní období rezervací. Zadejte požadovaný počáteční den fixního období.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Fixní den příjezdu');
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Pobyt (dny)');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Zobrazit kalendáře dostupnosti?');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Přejete-li si zobrazit kalendáře dostupnosti, nastavte hodnotu na ANO');
define('_JOMRES_FRONT_AVAILABILITY','Dostupnost');
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Pro zobrazení objednávkového formuláře klepněte na volný den.');
define('_JOMRES_FRONT_BLACKBOOKING','Zakázané rezervace');
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Nové zakázané rezervace');
define('_JOMRES_FRONT_DELETEGUEST','Odstranit hosta');
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Host odstraněn');
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Hosta nebylo možné odstranit kvůli existující otevřené rezervaci. Stornujte rezervace a zkuste znovu.');
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Aktuální cena pokoje: ');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Dobrý den');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Děkujeme za provedenou rezervaci s');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Následuje přehled rezervace:');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Pokud máte jakékoli dotazy ohledně rezervace nebo jiných služeb, neváhejte a kontaktujte nás.');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Naše telefonní číslo je');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Případně nás kontaktujte emailem na');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Kuřácké');
define('_JOMRES_FRONT_ROOMSMOKING_EITHER','Libovolné');
define('_JOMRES_COM_CALENDAROUTPUT','Výstupní formát kalendáře');
define('_JOMRES_COM_CALENDAROUTPUT_DESC','Umožňuje uživateli měnit výstupní formát data kalendáře Jomres.');
define('_JOMRES_COM_CALENDARINPUT','Vstupní formát kalendáře');
define('_JOMRES_COM_CALENDARINPUT_DESC','Umožňuje uživateli měnit vstupní formát data kalendáře Jomres.');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Období fixních rezervací s krátkými přestávkami');
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Délka přestávek');
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Publikováno');
define('_JOMRES_COM_A_PAYPAL','Paypal');
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Audit systému');
define('_JOMRES_MR_AUDIT_LISTING_DATE','Datum');
define('_JOMRES_MR_AUDIT_LISTING_TIME','Čas');
define('_JOMRES_MR_AUDIT_LISTING_USER','Uživatel (username)');
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Činnost');
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Zobrazit detaily');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Dle data');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Dle uživatele');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Dle činnosti');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Stav');
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Nevyřízené příjezdy');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Dnešní příjezdy');
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Aktuální hosté');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Dnešní odjezdy');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Odjezdy po termínu');
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Problém! Bez příjezdu a storna');
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Neznámý uživatel');
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Vytvoření pokoje');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Aktualizace pokoje');
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Odstranění pokoje');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Vytvoření vybavení pokoje');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Aktualizace vybavení pokoje');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Odstranění vybavení pokoje');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Vytvoření typu pokoje');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Aktualizace typu pokoje');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Odstranění typu pokoje');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Vytvoření kapacity');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Aktualizace kapacity');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Odstranění kapacity');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Vytvoření vybavení kapacity');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Aktualizace vybavení kapacity');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Odstranění vybavení kapacity');
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Upravení nastavení kapacity');
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Zveřejnění kapacity');
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Vytvoření ceníku');
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Aktualizace ceníku');
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Odstranění ceníku');
define('_JOMRES_MR_AUDIT_ADDSERVICE','Přidání zaúčtování sluľeb');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Zabydlení hosta');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Vybydlení hosta');
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Zadaní zálohy');
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Vytvoření hosta');
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Aktualizace hosta');
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Odstranění hosta');
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Rezervace pokoje');
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Vytvoření Addons');
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Aktualizace Addons');
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Odstranění Addons');
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Publikování Addons');
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Vložení zakázané rezervace');
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Odstranění zakázané rezervace');
define('_JOMRES_COM_MR_EXTRA_TITLE','Doplňky');
define('_JOMRES_COM_MR_EXTRA_DESC','Popis');
define('_JOMRES_COM_MR_EXTRA_NAME','Název');
define('_JOMRES_COM_MR_EXTRA_PRICE','Cena');
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Doplněk aktualizovaný');
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Upravit položku');
define('_JOMRES_COM_MR_EXTRA_DELETED','Doplněk odstraněn');
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Správa Doplňku');
define('_JOMRES_COM_A_EXTRAS','Zobrazit doplněk během rezervace?');
define('_JOMRES_COM_A_EXTRAS_DESC','Přejete-li si během rezervace zobrazit Doplněk, zadejte hodnotu ANO');
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Volitelné Doplňky');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Počáteční datum zakázané rezervace');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Konečné datum zakázané rezervace');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Zakázané rezervace');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Behem rezervace došlo k chybě, jeden nebo více z vybraných pokoju není volný.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Pokoje zahrnuté v zakázané rezervaci');
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Zobrazit zakázané rezervace');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Seznam zakázaných rezervací není k dispozici');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Počet hvězdiček');
define('_JOMRES_COM_A_SMOKING','Zobrazit kuřácké?');
define('_JOMRES_COM_A_SMOKING_DESC','Pro zobrazení kuřáckých prostor nastavte na ANO.');
define('_JOMRES_COM_A_RESET','reset');
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Rezervace stornována');
define('_JOMRES_FRONT_MR_SEARCH_HERE','Hledejte zde: ');
define('_JOMRES_COM_A_SMOKING_OPTION','Výchozí hodnota kuřácké');
define('_JOMRES_COM_A_CURRENCYSYMBOL','Symbol měny');
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Např.&amp;pound&#59; Pro zobrazení meny použijte HTML kod dle dané entity, více informací na <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');
define('_JOMRES_COM_A_CURRENCYCODE','Kód měny');
define('_JOMRES_COM_A_CURRENCYCODE_DESC','Např. CZK. Tento symbol bude použit v potvrzujícím emailu rezervace.');
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Klepněte pro další informace');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Omezit předprodej?');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Přejete-li si omezit předprodejní rezervace, zvolte hodnotu ANO (a na dalším poli zadejte počet dní). If you do set this to yes then if the user tries to book more than n days in advance then their arrival date will be restored to todays date');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Počet dní omezeného předprodeje:');
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>UPOZORNĚNÍ: Nastavení obou hodnot na ANO není doporučeno, vyberte jedno z nabízených daňových schémat tak, aby odpovídalo podmínkám Vašeho trhu.</FONT>');
define('_JOMRES_COM_FRONT_ROOMTAX','Daň');
define('_JOMRES_COM_A_ROOMTAX','Pokojová daň');
define('_JOMRES_COM_A_ROOMTAX_DESC','Vytvořené pro americké trhy, které používají speciální daň z pronajmutého pokoje. Možné kombinace jsou jak fixní, tak procentuální daň - tyto jsou pak počítány pouze z ceny pokoje.');
define('_JOMRES_COM_A_ROOMTAX_FIXED','Fixní daň');
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Procentuální daň');
define('_JOMRES_COM_A_EUROTAX','DPH');
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','DPH %');
define('_JOMRES_MR_AUDIT_ARCHIVE','Zálohovat všechny záznamy');
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' záznamu zazálohováno');
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Systém zazálohoval auditované záznamy');
define('_JOMRES_FRONT_TARIFFS','Ceny');
define('_JOMRES_FRONT_TARIFFS_TITLE','Ceník');
define('_JOMRES_FRONT_TARIFFS_DESC','Popis ceníku');
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Typ pokoje');
define('_JOMRES_FRONT_TARIFFS_STARTS','Platný od');
define('_JOMRES_FRONT_TARIFFS_ENDS','Platný do');
define('_JOMRES_FRONT_TARIFFS_PPPN','za osobu a noc');
define('_JOMRES_FRONT_TARIFFS_PN','za noc');
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','bez započítání víkendu');
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Min. počet dní');
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Max. počet dní');
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min. počet osob');
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Max. počet osob');
define('_JOMRES_FRONT_PREVIEW','Náhled');
define('_JOMRES_COM_A_EDITINGMODEON','Zapnout úpravy?');
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Aktuální text');
define('_JOMRES_COM_A_EDITING_NEWTEXT','Nový text');
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Aktualizovat upr. text.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Úprava jaz. nastavení');
define('_JOMRES_COM_A_AUDITING_SHOWING','Počet nezazálohovaných záznamů: ');
define('_JOMRES_FRONT_PTYPE','Typ kapacity');
define('_JOMRES_COM_PTYPES_LIST_TITLE','Seznam typu kapacit');
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Upravit typ kapacity');
define('_JOMRES_COM_PTYPES_PTYPE','Typ kapacity');
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Popis typu kapacity');
define('_JOMRES_COM_PTYPES_SAVED','Typ kapacity uložen');
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Odstranění typu kapacity se nezdařilo. Typ kapacity je navázán na jeden nebo více kapacit, před odstraněním je nutné jim přiřadit jiný platný typ kapacity.');
define('_JOMRES_COM_PTYPES_DELETED','Typ kapacit(y) odstraněn');
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Výzva k platbě');
define('_JOMRES_EXTRAS_NOEXTRAS','K účtu nejsou přidány žádné mimořádné položky');
define('_JOMRES_COM_CHARGING_DEPOSIT','Záloha');
define('_JOMRES_COM_CHARGING_FULLAMT','Celková částka');
define('_JOMRES_COM_CHARGING_CONFIG','Částka splatná ke okamžiku rezervace');
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Vyberte požadovaný typ platby během rezervace - zálohu nebo plnou částku.');
define('_JOMRES_COM_MONTHSTOSHOW','Počet zobrazených měsíců v kalendáři');
define('_JOMRES_COM_MONTHSTOSHOW_DESC','Kolik má být k dispozici zobrazených měsíců?');
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Jménem společnosti, podepsán ');
// V1.4
define('_JOMRES_COM_A_GATEWAYLIST','Platební brány');
define('_JOMRES_COM_A_CANCEL','Storno');
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Zaškrnutím vyberte pokoj(e) vč. adekvátních datumů určené k zakázané rezervaci. <br>Pokud pokoj není označen, nemůže být do zakázaných rezervací zahrnut tak dlouho, dokud nejsou dokončeny již existující rezervace. <br>Jakmile jste vybrali adekvátní datumy, klepněte na tlačítko Apply/Provést - provede se opětovný dotaz na dostupnost pokojů.');
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Systém Hotelak Vás zřejmě kvůli dlouhé prodlevě odhlásil.</b> Přihlašte se znovu prosím.');
define('_JOMRES_JR_BLACKBOOKING_REASON','Odůvodnění');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Používat platební brány?');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Přejete-li si používat online platební brány, zadejte hodnotu na ANO.<b>Upozornění:</b>Vypnutá hodnota NE platební brány nikterak nevypíná kalkulace záloh, které probíhají během rezervace, toto je možné pouze odstraněním elementů počítajících zálohy přímo ve zvolené šabloně pokoje.');
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Vyberte preferovanou platební metodu.');
define('_JOMRES_COM_A_GATEWAY_ENABLED','Aktivní platební brána?');
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Upravení nastavení plugins');
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Vložení nastavení plugins');
define('_JOMRES_FRONT_GALLERYLINK','View this property\'s website');
define('_JOMRES_COM_A_GALLERYLINK','External link');
define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Zobrazené CC karty');
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Aktualizované CC karty');
define('_JOMRES_MR_CREDITCARD_EDIT','Upravit CC');
define('_JOMRES_COM_A_EDITICON','Upravit velikost ikon');
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Dávkový upload snímku kapacit');
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Snímky již v adresáři existují');
define('_JOMRES_COM_A_SLIDESHOWS','Virtuální prohlídka');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Zobrazit odkaz na virt. prohlídku?');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Zobrazit virt. prohlídku inline?');
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Výška náhledu virt. prohlídky');
define('_JOMRES_FRONT_SLIDESHOW','Virtuální prohlídka');
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Omlouváme se, ale k dané kapacitě nejsou k dispozici žádné snímky. K nahrání snímku použijte dávkový upload snímku.');
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Zobrazit odkaz na ceníky?');
define('_JOMRES_COM_A_POPUPSALLOWED','Povolit popup okna?');
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Pokud na hodnotě NE, budou odkazy místo v popup oknech otevřeny inline. EXPERIMENTAL! ');
define('_JOMRES_FRONT_IMAGEUPLOADS','Upload snímků virt. prohlídky');
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Pro nahrání snímků této kapacity použijte formulář. <br/><b>Upozornění:</b> Jakékoli snímky stejného názvu budou přepsány novějšími. Tento formulář také nenahrává snímky vázané na konkrétní pokoj nebo záhlaví kapacity, pro které slouží sekce Správa kapacit. <br/><b>Poznámka:</b> Zde nahrávané snímky budou uloženy do patřičného adresáře /images/stories/jomres/*property_uid*. Pokud adresář neexistuje, bude vytvořen.');
define('_JOMRES_A_TABS_MISC','Různé');
define('_JOMRES_A','Nastavení website');
define('_JOMRES_A_GLOBALPFEATURES','Použít obecné vybavení kapacit');
define('_JOMRES_A_GLOBALPFEATURES_DESC','Přejete-li si, aby všechny kapacity používaly pouze vybavení zadané webmasterem, vyberte hodnotu ANO.');
define('_JOMRES_A_GLOBALPFEATURES_INFO','Pro přiřazení snímku vybavení nejprve nahrajte snímky kapacity do adresáře /images/stories/jomres/pfeatures/');
define('_JOMRES_A_ICON','Ikona');
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Vyberte požadovaný plugin vyhledávání.');
define('_JOMRES_FRONT_NORESULTS','<b>Omlouváme se, ale dotazu neodpovídá žádný výsledek. Zadejte nová kritéria hledání, prosím.</b>');
define('_JOMRES_AREYOUSURE','Jste si jisti?');
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Rezervovat pokoj');
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Rezervovat tuto kapacitu');
define('_JOMRES_COM_MR_DISPGUEST_CCV','CCV bezpečnostní kód');
//v1.4c
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Zobrazit ceny inline?');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adresa');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Detailní informace');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Dostupnost pokojů');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Zobrazit ceny');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Zobrazit pole Adresa pod odkazem');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Zobrazit pole Detailní informace pod odkazem');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Zobrazit pole Pokoje a Dostupnost pod odkazem');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Zobrazit pole Ceníky pod odkazem');
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Paušál');
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Průměrovaný');
define('_JOMRES_COM_A_TARIFFS_MODEL','Vyberte tarifní model');
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Pro výpočet ceníku existují dva modely - paušální a průměrovaný. Pokud zvolíte paušální, jsou ceny a ceníky definované jednotlivými obdobími rezervace (můžete např. na stejné období nabízet ceník Polopenze a Plná penze). Pokud zvolíte průměrovaný, systém na rezervované období nalezne a zprůměruje všechny dostupné ceny.");
// v1.4e
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Zobrazit zadání data odjezdu?');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Přejete-li si zakázat zobrazení pole data odjezdu, zadejte hodnotu NE. V tomto případě bude automaticky jako den odjezdu použit den následující po dni příjezdu.");
// v1.4f
define('_JOMRES_COM_PROPERTYLISTDESC','Omezení popisu');
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Zadejte hodnotu počtu zobrazených znaků použitých pro popis jednotlivé kapacity.");
// v1.4g+
define('_JOMRES_COM_A_DATEFORMATSTYLE','Použitý formát date()?');
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Volba použitého typu datumu, více viz -> Set this to Yes to format output dates according to date() (See <a href="http://www.php.net/manual/en/function.date.php">Here</a>). Set it to No to use strftime() formatting (see <a href="http://www.php.net/manual/en/function.strftime.php">Here</a> eg. %b %d %Y ');
define('_JOMRES_COM_MR_VRCT_PUBLISH','Publikovat');
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Nepublikovat');
define('_JOMRES_A_GLOBALROOMTYPES','Použít obecné typy pokojů');
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Přejete-li si použít obecné nastavení typů pokojů webmasterem ve všech pokojích, zadejte hodnotu ANO. Toto nastavení je také nutné pro případ, kdy chcete vyhledávat dle typu pokoje.');
define('_JOMRES_A_GLOBALROOMTYPES_INFO','Pro přiřazení snímku tohoto typu pokoje nejprve nahrajte poľadované snímky do adresáře /images/stories/jomres/rmtypes/. ');
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Zadat barvu pozadí chybového pole');
define('_JOMRES_COM_CONFIGCOUNTRIES','Výchozí země rezervačního formuláře');
define('_JOMRES_JAVASCRIPT_','Červeně zvýrazněné položky jsou povinné.');
define('_JOMRES_COM_SELFREGISTRATION','Mohou uživatelé zadávat své kapacity?');
define('_JOMRES_COM_SELFREGISTRATION_DESC','Přejete-li si, aby uľivatelé mohli zadávat své kapacity bez kontaktu s administrátorem, zadejte hodnotu ANO.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Zadejte zemi a region své kapacity, prosím.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Zadejte všechny detaily Vaší kapacity, prosím.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Červeně zvýrazněné položky jsou povinné.');
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Vytvořit kapacitu');
define('_JOMRES_REGISTRATION_NOTALLOWED',"Omlouváme se, ale pro přidání kapacity se neprve přihlaste do systému.");
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Vytvořená kapacita: ');
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Uživateli: ');
// v1.4i
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Zobrazit kalendář od začátku roku?');
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Kalendář dostupnosti zobrazuje data od začátku aktuálního roku.');
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Počet dostupných pokojů');
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Zpět na detaily kapacit');
define('_JOMRES_FRONT_ROOMTYPES','Typy pokojů');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Omezení náhodného hledání');
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Zobrazit převodník měn od Google?');
define('_JOMRES_CURRENCYCONVERSIONTEXT','Převést menu na :');
define('_JOMRES_COM_ALLOWHTMLEDITOR','Umoľnit uživatelům použití HTML editoru?');
// v2
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Pro vytvoření rezervace použijte tento formulář, nápovědu ke každé položce zobrazíte najetím myši přes ikonu "i". Nejprve zadejte datum příjezdu, datum odjezdu a počet hostů, následně vyberte z dostupných pokojů. Zadejte jakékoli zvláštní přání nebo požadovanou službu (tzv. Doplněk) a vložte Vaše kontaktní údaje. Provedte kontrolu zadaných údajů a jakmile jste se svou objednávkou spokojeni, odešlete ji klepnutím na tlačítko.');
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Pro vytvoření rezervace pouľijte tento formulář, nápovědu ke každé položce zobrazíte najetím myši přes ikonu "i". Nejprve zadejte datum příjezdu, datum odjezdu a počet hostů. Zadejte jakékoli zvláštní přání nebo požadovanou službu (tzv. Doplněk) a vložte Vaše kontaktní údaje. Provedte kontrolu zadaných údajů a jakmile jste se svou objednávkou spokojeni, odešlete ji klepnutím na tlačítko.');
define('_JOMRES_AJAXFORM_PARTICULARS','Detaily rezervace');
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Zadejte požadované detaily Vaší rezervace');
define('_JOMRES_AJAXFORM_AVAILABLE','Dostupnost');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Vyberte požadované pokoje');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Zda je požadovaná kapacita k dispozici zjistíte zde.');
define('_JOMRES_AJAXFORM_EXTRAS','Volitelné doplňky');
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Zadejte všechny požadované doplňky, které si přejete zahrnout do rezervace');
define('_JOMRES_COM_PERDAY','za noc');
define('_JOMRES_AJAXFORM_ADDRESS','Vaše adresa');
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Zadejte prosím Vaše kontaktní údaje. Vyjma čísla mobilního telefonu jsou všechny pole povinná.');
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Pokoje k dispozici');
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Vybrané pokoje');
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>Nejbližší možné datum příjezdu: ');
define('_JOMRES_AJAXFORM_BILLING_ROOM','Za noc:');
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Celkem:');
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Doplňky:');
define('_JOMRES_AJAXFORM_BILLING_TAX','DPH:');
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Sleva:');
define('_JOMRES_AJAXFORM_BILLING_TOTAL','CELKEM K ÚHRADĚ:');
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Hosté');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Klepnutím přidáte pokoj mezi vybrané');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Klepnutím odeberet pokoj z vybraných');
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Typ hostů');
define('_JOMRES_VARIANCES_TYPE','Typ');
define('_JOMRES_VARIANCES_TYPE_TT','Typ zákazníka, např. děti 5-10 let, student apod.');
define('_JOMRES_VARIANCES_NOTES','Poznámky');
define('_JOMRES_VARIANCES_NOTES_TT','Poznámky k danému typu hostů');
define('_JOMRES_VARIANCES_MAXIMUM','Max. počet');
define('_JOMRES_VARIANCES_MAXIMUM_TT','Maximální počet hostů daného typu, které může být zadané v rámci rezervace');
define('_JOMRES_VARIANCES_ISPERCENTAGE','Procentuelně');
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Zadané číslo je procentem základní kalkulované hodnoty za pokoj. Pokud je na hodnotě NE, pak je zadané číslo jednoduše přičteno nebo odečteno ze základní hodnoty pokoje.');
define('_JOMRES_VARIANCES_POSNEG','Přidat rozdílnou sazbu?');
define('_JOMRES_VARIANCES_POSNEG_TT','Rozdílná sazba je přidána nebo odebrána ze základní kalkulované hodnoty za pokoj. Pokud si přejete ji pouľít jako slevu ze základní hodnoty pokoje, zadejte hodnotu NE.');
define('_JOMRES_VARIANCES_VARIANCE','Rozdíl. sazba');
define('_JOMRES_VARIANCES_VARIANCE_TT','Hodnota rozd. sazby');
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Pořadí upravených typů hostů');
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Publivaný typ hostů');
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Odstraněný typ hostů');
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Vytvořený typ hostů');
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Aktualizovaný typ hostů');
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Aktualizovaný typ hostů');
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Zobrazit odkaz na seznam pokojů na detailním popisu kapacity?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Zobrazit <b>pouze</b> seznam dostupných pokojů v kalendáři?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Přejete-li si zakázat zobrazení záhlaví a detailů kapacity, zadejte hodnotu na ANO, kalendář dostupnosti pokojů je viditelný pouze v sekci detailního popisu kapacity. Vhodné pouze pro uživatele pronajímající SPRs (single room properties) jako jsou apartmány, chalupy apod.');
define('_JOMRES_COM_A_MINIMUMINTERVAL','Minimální interval mezi Prj-Odj');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Minimální interval mezi daty příjezdu a odjezdu na rezervačním formuláři.');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Booking form room list show room number');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Booking form room list show room name');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Booking form room list show tariff title');
define('_JOMRES_ORDER','Objednat');
define('_JOMRES_REQUIREDFIELDS','Požadované');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Dní před příjezdem');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Minimální počet dní vyjma dneška, které musí uběhnout před datem příjezdu.');
define('_JOMRES_DTV','Varianty typu dnů');
define('_JOMRES_DTV_DOW','Den týdne');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Výchozí typ hosta');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Výchozí hodnotou je první hodnota typu hosta; pokud používáte tento parametr, pak bude použita výchozí hodnota.');
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Rezervace online pouze pro registrované uživatele?');
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Omlouváme se, ale pro provedení online rezervace musíte být registrovaným uživatem. Pro registraci klepněte sem.');
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Barvy písma aktuálních rezervací');
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Okraje týdne');
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Pokoj je rezervován');
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Zakázaná rezervace');
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Zaokrouhlit zálohu nahoru na celá?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Inkasovat zálohu?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Inkasování tarifů? uložit jako týdenní?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Přejete-li si uložit inkasované tržby? jednou týdně, zadejte hodnotu ANO. Druhou možností je denní inkaso.');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Týdenní sazba');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Opakované fixní data příjezdů: ');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','V případě fixních příjezdových datumu je počet dat zobrazen jako seznam.');
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Neplatná hodnota kuřácké');
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Neplatné datum příjezdu');
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Neplatné datum odjezdu');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Rezervace je příliš krátká, minimální počet dní mezi příjezdem a odjezdem je roven ');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Váš interval je roven ');
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Neplatný typ hostů');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Zadejte počet a typ hostů');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Počet požadovaných hostů je nad limitem možných ceníků');
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Bohužel jste zadali větší počet pokojů než hostů, odeberte nadbytečné pokoje klepnutím na jejich název.');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Počet postelí je nižší než počet hostů');
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Musíte zadat více pokojů');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Vyberte pokoj');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Zadejte jméno');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Zadejte příjmení');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Zadejte číslo domu');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Zadejte jméno ulice');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Zadejte město');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Zadejte region');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Zadejte PSČ');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Zadejte zemi');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Zadejte číslo pevné tel. linky');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Zadejte číslo mobilního telefonu');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Zadejte e-mail');
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','E-mailová adresa není platná');
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Ověření emailové domény se nezdařilo');
define('_JOMRES_SRP_WEHAVEVACANCIES','Máme volné místa!');
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Doposud nebyly vybrány pokoje');
define('_JOMRES_BOOKING_NUMBER','Rezervace č.');
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Barva pozadí messageboxu, připraveno k rezervaci');
define('_JOMRES_COM_DUMPTEMPLATEDATA','Vypsat proměnné šablony?');
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Přejete-li si vypsat hodnoty DHTML proměnných na frontendu webu, zadejte hodnotu ANO. Užitečné při ladění šablony.');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Hodnota je procentem');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Přejete-li si použít hodnotu SRP kalkulace jako procento, zadejte hodnotu na ANO. V opačném případě je použitá paušální částka.');
//v2rc2
define('_JOMRES_COM_LIMITROOMSLIST','Omezení dostupných pokojů/ceníků');
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Přejete-li si omezit počet vypsaných dostupných pokojů a ceníků v objednávce, zadejte požadovanou hodnotu. Hodnota na 0 zakazuje použití funkce omezení a žádné limity nebudou aplikovány. ');
define('_JOMRES_SRP_WEHAVENOVACANCIES','Aktuálně obsazeno!');
// Introduced in v2.5
// Translate from here
// v2.6
define('_JOMRES_BOOKITNOW','Zarezervujte nyní: ');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Celkový editační režím?');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Pozor na toto nastavení. Pokud zvolíte ANO, pak vše co nastavíte, bude mít vliv na všechny texty, související s konstatnou, kterou upravujete.');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Hlavní symbol měny');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Spustit komponentu samostatně');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Nastavte na ano, pokud je komponenta spoštěna samostaně a moduly a hlavičky nejsou vidět.');
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super správce');
define('_JOMRES_COM_WEEKENDONLY','Pouze o víkendech');
define('_JOMRES_COM_WEEKENDDAYS','Víkendové dny');
define('_JOMRES_COM_WEEKENDDAYS_DESC','Nastavte dny víkendu. Tarify, které platí o víkendech, se budou řídit podle tohoto nastavení.');
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Před zadáním dalších informací o kapacitě zadejte stát');
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Uložte nastavení o kapacitě před tím, než budete nahrávat fotografie.');
define('_JOMRES_TARIFFSFROM','Ceny od - ');
define('_JOMRES_SEARCH_ALL','Vše');
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Hledat podle země');
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Hledat podle regionu');
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Hledat podle města');
define('_JOMRES_SEARCH_FEATURE_INFO','Vlastnosti vyhl.');
define('_JOMRES_SEARCH_BUTTON','Hledat');
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Vložte frázi, kterou chcete vyhledat a stiskněte talčítko.');
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Vyhledat slovo(a): ');
define('_JOMRES_SEARCH_AVL_INFO','Prosím vložte váš předpokládaný příjezd a odjezd a stiskněte tlačítko. Vyhledáme kapacity s volným ubytováním ve vámi zadaném termínu.');
define('_JOMRES_SEARCH_PTYPES','Vypsat všechny kapacity dle jejich typu.');
define('_JOMRES_SEARCH_RTYPES','Vypsat všechny kapacity dle typu pokoje.');
define('_JOMRES_SORTORDER_DEFAULT','Výchozí');
define('_JOMRES_SORTORDER_PROPERTYNAME','Název kapacity');
define('_JOMRES_SORTORDER_PROPERTYREGION','Oblast');
define('_JOMRES_SORTORDER_PROPERTYTOWN','Město');
define('_JOMRES_SORTORDER_STARS','Počet hvězdiček');
define('_JOMRES_PATHWAY_PROPERTYLIST','Seznam kapacit');
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Podrobnosti o ubytování - ');
define('_JOMRES_PATHWAY_BOOKINGFORM','Rezervační formulář');
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Upravte podrobnosti své adresy');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Znovuověření dostupnosti pokoje<br/>(Předchozí výběr pokojů se vymaže)');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Ověření dostupnosti');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Úprava vašich volitelných doplňků');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Změna výběru pokoje');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Změna údajů v adrese');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Omlouváme se, ale jedno nebo více polí v adrese je vyplněno špatně.');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Fotografie pokoje');
define('_JOMRES_CURRENCYFORMAT','Formát měny');
define('_JOMRES_MANAGEROPTIONSASIMAGES','Ukázat nastavení manažera jako piktogramy');
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Nastavení hledání');
define('JOMRES_COM_A_AVAILABLELOGS','Přístupné Logy');
define('JOMRES_COM_A_LOGS_NOENTRIES','Žádné záznamy v logu. Tato situace je naprosto normální, musíte upravit ručně soubor jomres.php.');
define('JOMRES_COM_A_MESSAGE','Zpráva');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normální');
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Rozšířený');
define('JOMRES_COM_A_TARIFFMODE','Režim cen');
define('JOMRES_COM_A_TARIFFMODE_DESC','Nastavte na rozšířený, pokud potřebujete pracovat se složitějšími ceníky');
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Ukázat seznam pokojů na základní stránce kapacity?');
define('JOMRES_PROPERTYTYPE','Typ kapacity');
define('JOMRES_COM_A_SRPONLY','Pouze celý object');
define('JOMRES_MAXPEOPLEINROOM','Maximální počet osob na pokoji');
define('JOMRES_MAXPEOPLEINBOOKING','Maximální počet osob na rezervaci');
define('_JOMCOMP_BOOKINGNOTES_ADD','Vlož poznámku');
define('_JOMCOMP_BOOKINGNOTES_EDIT','Uprav poznámku');
define('_JOMCOMP_BOOKINGNOTES_DELETE','Vymaž poznámku');
define('_JOMCOMP_BOOKINGNOTES_VIEW','Ukaž poznámky');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Vložena nová poznámka');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Upravená poznámka');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Vymazaná poznámka');
define('_JOMCOMP_MYUSER_MENUTITLE','Moje nastavení');
define('_JOMCOMP_MYUSER_LISTBOOKINGS','Výpis rezervací');
define('_JOMCOMP_MYUSER_MYBOOKINGS','Moje rezervace');
define('_JOMCOMP_MYUSER_VIEWBOOKING','Zobrazit rezervace');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Zobrazit oblíbené');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','Zatím nemáte žádné oblíbené položky!');
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Vložit do oblíbených');
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Typ kapacity');
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','kapacity na stránce');
define('_JOMCOMP_WISEPRICE_TITLE','Dynamická cena');
define('_JOMCOMP_WISEPRICE_ACTIVE','Aktivní');
define('_JOMCOMP_WISEPRICE_TITLE_DESC','Tento plugin vám umožní nastavovat ceny pokojů dynamicky.');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Většina firem se přepočítává ceny pokojů na základě počtu pokojů na požadovaného typu, které jsou k dispozici k určitému datu. To jim umožňuje nabízet slevy na ten druh pokoje, který není obsazen po určitou dobu s cílem zvýšit obsazenost. Povolení a konfigurace tohoto pluginu umožňuje nastavovat ceny pokojů v závislosti na počtu místností vybraného typu pokoje, které jsou k dispozici v kapacitě na daný den. Počet dnů odstupu definuje počet dnů před příjezdem, ve kterých můsí být pokoje volné. Procento znamená relativní počet pokojů z celku, které musí být volné, aby byla uvedá sleva uplatněna.');
define('_JOMCOMP_WISEPRICE_THREASHOLD','Počet do příjezdu');
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Procento obsazených pokojů < 10%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Procento obsazených pokojů < 25%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Procento obsazených pokojů < 50%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Procento obsazených pokojů < 75%');
define('_JOMCOMP_WISEPRICE_DISCOUNT','Sleva %');
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' byla slevněna z původní ceny ');
define('_JOMCOMP_WISEPRICE_TO',' na ');
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Cena pokoje není slevněna ');
define('JOMRES_COM_A_MAPSKEY','Klíč API na Google maps');
define('JOMRES_COM_A_MAPSKEY_DESC','Klíč API můžete získat z <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Jakmile uložíte API klíč, Jomres automaticky zobrazí mapu v detailu kapacity.');
define('JOMRES_COM_A_USE_SSL','Použít SSL v rezervačním formuláři?');
define('JOMRES_COM_A_USE_SSL_DESC','Musíte mít platný SSL certifikát, vystavený pro ');
define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
define('_JOMCOMP_LASTMINUTE_ACTIVE','Aktivní?');
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Nastavte na ano, pokud chcte vytvářet Last Minute nabídky.');
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Práh');
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','Pokud je příjezd pouze N dnů před učiněním rezervace, může být poskytnuta sleva');
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Sleva');
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','v procentech');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','V této rezervaci byla uplatněna sleva!');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','Náklady na pobyt byly sníženy ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','Tato kapacita nabízí slevu Last Minute ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' procent, pokud si zarezervujete svůj příjezd nejpozději ');
define('_JOMCOMP_LASTMINUTE_ORMORE',' procent nebop i více, pokud si zarezervujete svůj příjezd nejpozději ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Zarezervujte nyní a získejte nejvíce výhod!');
define('JOMRES_COM_A_VERBOSETARIFFINTO','Detailní informace o cenách');
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Nastavte na ANO, pokud chcete zobrazovat v detailu kapacity podrobný ceník.');
define('JOMRES_COM_A_MINIMALCONFIG','Minimalizovat nastavení');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
define('_JRPORTAL_CANCEL','Zrušit');
define('_JRPORTAL_CPANEL','Ovládací panel JRPortal');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Výchozí výše provize');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Zvolte výchozí výši provize, která bude aplikována v případě, že u kapacity nebude určena její individuální výše.');
define('_JRPORTAL_CPANEL_LISTCRATES','Seznam provizních sazeb');
define('_JRPORTAL_CPANEL_PATETITLE','Provizní sazba');
define('_JRPORTAL_CRATE_TITLE','Název');
define('_JRPORTAL_CRATE_TYPE','Typ');
define('_JRPORTAL_CRATE_VALUE','Provize');
define('_JRPORTAL_CRATE_CURRENCYCODE','Kód měny');
define('_JRPORTAL_CPANEL_LISTPROPERTIES','Seznam kapacit');
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Název kapacity');
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Adresa');
define('_JRPORTAL_PROPERTIES_LEGEND','U kapacit, kde je barva pozadí červaná, nebyly ještě aplikovány provizní sazby.');
define('_JRPORTAL_STATS_PATETITLE','Statistika');
define('_JRPORTAL_STATS_STATTYPE','Statistika pro: ');
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Vlastnosti - Kliky');
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Zobrazení kapacity');
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Počet rezervací');
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Hodnota rezervací');
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Odhad provizí');
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Provizní sazba');
define('_JRPORTAL_CPANEL_LISTBOOKINGS','Výpis rezervací');
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','id kapacity');
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','id hosta');
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','id sloučení');
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','id faktury');
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Celkem rezervací');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','id smlouvy');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Číslo smlouvy');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Kód měny');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Vytvořeno');
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archivováno');
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Datum archivace');
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Vlož položku do účtu');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager faktur');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Přidružená kapacita (pokud lze)');
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Hodnota');
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Popis');
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Úspěšné vložení položky účtu do ");
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"Zobrazit objednávky");
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Nepodařilo se vložit položku účtu do ");
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Chyba, nenastavili jste hodnotu účtu");
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','Můžete založit svoje překladové soubory a použít je v popisu kapacity tak, že založíte podadresář s názevem kapacity a do něj umístíte jazykové soubory..');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','Nemůžete tuto kapacitu vymazat, je to jediná kapacita, ke které máte přístup. Pokud ji chcete zakázat, použijte volbu "Nepublikovat" na vaší liště. ');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','Pokud pracujete s DEMO instalací a chystáte upgrade na Jomres Solo, nejprve vytvořte novou kapacitu, následně tuto smažete a pak teprve proveďte upgrade na Jomres Solo.. ');
define('_JOMRES_COM_EMAILERRORS',"Zaslat chybová hlášení emailem?");
define('_JOMRES_COM_EMAILERRORS_DESC',"Nastavte na ANO pokud chcete dostat do emailové schránky kopii souboru jomres.net automaticky po tom, co nastaně chybová událost. Je to vhodné i pro pozdější podporu a odstranění chyby. Pozor - tato vlastnost je vždy v počátku na počítači 'localhost' zakázána. ");
define('_JOMRES_COM_ISTHISANMRP',"Jedná se o hotel/penzion/apartmánový dům? ");
define('_JOMRES_COM_ISTHISANMRP_DESC',"Chování aplikace záleží na tom, jaký typ nemovitosti nabízíte. Pokud se jedná o nemovitost, ve které je více jednotek (hotel, penzion), zvolte MRP. Pokud pronajímáte pouze celý objekt (chata, chalupa), zvolte SRP. . ");
// Jomres v3.0.6
define('_JOMRES_COM_JOMRESEMAILCHECK',"Použít kontrolu emailu Jomres? ");
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Zapíná striktní kontrolu emailů. Ochrana některých emailových serverů v případě, že zašlete mejl se špatnou nebo neexistující adresou, vrátí chybové hlášení s kódem 500. Pokud tomu chcete zabránit, zapněte tuto volbu. ");
// Jomres v3.1
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Ubytování celkem");
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"nocí v");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"za pokoj ");
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Přirážka za pobyt celkem ");
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Cena celkem ");
define('_JOMRES_CONFIRMATION_ALERT',"Přečtěte si prosím a vyjádřete souhlas");
define('_JOMRES_CONFIRMATION_HEADER',"Zhrnutí vaší rezervace níže<br /> Pokud chcete cokoliv změnit, stiskněte tlečítko Opravit rezervaci. ");
define('_JOMRES_CONFIRMATION_AMENDTEXT',"Pokud chcete změnit jakoukoliv informaci, uvedenou výše, stiskntě tlačítko");
define('_JOMRES_CONFIRMATION_AMEND',"Opravit rezervaci");
define('_JOMRES_CONFIRMATION_SPECIALS',"Do pole níže napište jakékoliv speciální přání nebo informaci.");
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"Potvrzuji, že výše uvedené informace jsou pravdivé a souhlasím s nimi. ");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"za osobu a noc ");
// Jomres 3.1.10
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Výchozí soubor jazyka");
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Vyberte výchozí soubor pro překlad Jomres, pokud nemá být použito nastavení z komponenty JoomFish!");
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF'))
	define('_PN_OF','z');
if (!defined('_PN_START'))
	define('_PN_START','Začátek');
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Předchozí');
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Další');
if (!defined('_PN_END'))
	define('_PN_END','Konec');
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Výsledky');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Pozor, nejdná se o rezervační formulář, ale odeslání mejlu.<br/>Vložte zprávu, kterou chcete zaslat. ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Chci kontaktovat hotel');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Dotaz na nemovitost z ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Děkujeme za váš dotaz, který byl odeslán na emailovou adresu ubytovacího zařízení. Odpověď dostanete co nejdříve.');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' týká se ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Napište znaky, které vidíte v rámečku');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','Nemohu znaky přečíst. Vygeneruj ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Odeslat');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','nový obrázek');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Dotaz');
define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Prosím vyberte požadované ubytování ze seznamu napravo');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Minimální počet vybraných pokojů');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimální počet pokojů, které musí být vybrány před tím, než bude uplatněn speciální ceník. Umožňuje nastavit, že se mají použít zlevněné ceny v okamžiku, kdy je vybráno N pokojů. ');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Maximální počet vybraných pokojů');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximální počet pokojů, které musí být vybrány před tím, než bude uplatněn speciální ceník. Umožňuje nastavit, že se mají použít zlevněné ceny v okamžiku, kdy je vybráno N pokojů. ');
define('_JOMRES_COM_SPS_EDITROOM_DESC','Upozornění! Příplatek za jednu osobu nastavený zde nebude použitý, pokud je nastavený Přípaletek za jednu osobu v hlavní konfiguraci na ANO. Nastavení je zde umístěno z důvodu, aby bylo umožněno pracovat s proměnnými příplatky za jednu osobu. .');
define('_JOMRES_AVLCAL_NOBOOKINGS',"Volný"); 
define('_JOMRES_AVLCAL_QUARTER',"Nějaké rezervace");
define('_JOMRES_AVLCAL_HALF',"Zpoloviny rezervováno");
define('_JOMRES_AVLCAL_THREEQUARTER',"Většinou obsazeno");
define('_JOMRES_AVLCAL_FULLYBOOKED',"Zcela rezervováno");
define('_JOMRES_COM_SEF_URL_PREFIX','Prefix URL');
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','Toto je první položka, zobrazená po doméně. Změňte, pokud potřebujete. Pokud nechcete používat, nechte prázdné');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','Název úlohy zobrazení kapacity');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','Název úlohy rezervace');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Název úlohy hledání');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Přidat zemi do url');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Přidat zemi do url');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Přidat město do url');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Add property type to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Přidat název kapacity do url');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Doplnit id kapacity do jejího názvu');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','Pokud je nastaveno na NE, pak id kapacity nebude použito. Pokud je nastaveno na ANO, adresa url bude vypadat jako fawlty_towers-1');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Prohledání struktury URL - Přidat zemi do url');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Prohledání struktury URL - Výchozí země');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','Pokud jsou všechny kapacity v jedné zemi, pak ji není třeba zadávat. Zadejte proto výchozí zemi, která bude při vyhledávání automaticky použita.');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Prohledávání struktury URL - Přidat region do URL');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_REGION','Prohledávání struktury URL - Výchozí region');
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','Pokud jsou všechny kapacity v jednom, pak jej není třeba zadávat. Zadejte proto výchozí region, která bude při vyhledávání automaticky použit.');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Prohledávání struktury URL - Přidat město do url');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Prohledávání struktury URL - Výchozí město');
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Prohledávání struktury URL - Typ kapacity');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Prohledávání struktury URL - Výchozí typ kapacity');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Použito v url, jestliže vyhledáváte ve všech typech kapacit');
define('_JOMRES_COM_SEF_NOTINSTALLED','Buď není nainstalována komponenta she404sef, nebo jste nezkopírovali soubor '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'com_jomres.php do '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Jakmile nainstalujete sh404sef a/nebo zkopírujete soubor dle návodu, budete moci nastavovat vaše sef url adresy. ');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetekce jazyka Javascript kalendáře');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Pokud nebude možné detekovat jazyk, použije se nastavení níže.');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','za týden');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','za týden');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','za rezervaci');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','za osobu a rezervaci');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','za osobu a den');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','za osobu a týden');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per days (min days)');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','za dny X vybrané pokoje');
define('_JOMRES_REGISTRYREBUILD','Obnovit registr modulů');
define('_JOMRES_REGISTRYREBUILD_NOTES',"Běžně je registr modulů Jomres obnovován automaticky pokaždé, když spustíte manažera modulů a přidáte nebo odstraníte modul. Pokud z jakéhokoliv důvodu nemůžete tuto možnost využít, je k dispozici ještě tato volba. Pokud máte přístup do Manažera Modulů a nástroje Uprgade, nebudete tuto volbu potřebovat. Naopak, pokud nainstalujete libovolný modul manuálně, musíte obnovit registr manuálně.");
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registr úspěšně obnoven');
define('_JOMRES_REGISTRYREBUILD_FAILURE','Při obnovování registru došlo k chybě. Pro bližší informace a eventuelní nalezení chybného záznamu zkontrolujte prosím Jomres chybový log.');
define('_JOMRES_SEARCH_PRICERANGES','Vyhledávání dle rozsahu cen.');
define('JOMRES_WORD_SAVING','Ukládám...');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Použít kompozitní zobrazení informací o kapacitě?');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 umožňuje kompozitní zobrazení informací o nemovitosti, kde je celkový výstup formátován podle souboru šablony (composite_property_details.html). Jestliže nechcete využít tohoto nastavení, nastavte volbu na NE (zřejmě stávající uživatelé nastaví na Ne, noví uživatelé budou pravděpodobně volit Ano)');
define('_JOMRES_PROFILELIST_INSTRUCTIONS','Toto je seznam všech uživatelů systému. Uživatelé, kteří nemají přiřazenu žádnou kapacitu, mají ikonu Host. Výšší úrovně oprávnění mají ikonu Recepce / Správce kapacit / Super správce. <br/> Jomres Při první instalaci je uživateli "admin" je automaticky přiděleno oprávnění správce kapacit a je považován za oprávněného uživatele. <br/> Krom super správce, musí mít každý oprávněný uživatel přiřazen alespoň jeden objekt(kapacitu). V opačném případě jeho přihlášení do Jomres vyvolá chybu.<br/> Jakmile je uživatel potvrzen, můžete upravit jeho profil, přiřadit jim kapacitu nebo jim dát práva super správce. <br/> Chcete-li povolit uživatele, klikněte na červený kříž vedle jejich jména. Pro zrušení autorizace klikněte na zalené zaškrtnutí. <br/> Chcete-li přiřadit uživatelům pouze specifické vlastnosti, nebo jim dát práva super správce, potom klikněte na ikonu editovat (ta je viditelná pouze u povolených uživatelů). Uživatelé, kteří už zaregistrovali svoji kapacitu, se k němu automaticky přiřadí. Super správci mají automaticky právo na nastavení všech vlastností, a uvidí i všechny možnosti konfigurace. Tato možnost může být ovlivněna nastavení v administrátosrké části konfigurace.');
define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Zde můžete přiřadit manažerům jejich kapacity. Ujistěte se, že v případě, kdy se nejedná o super správce, má přiřazenu alespoň jednu kapacitu, jinak jejich přihlášení vyvolá chybu. Naopak, aby recepční nebo manažer kapacit měl přístup pouze ke svým kapacitám, je třeba, aby rozbalovací nabídka Super správce není nastavena na hodnotu Ano.');
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','Zatím jste neudělali žádnou rezervaci!');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Typ kapacity');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Upravit typ kapacity');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Vybrat typ kapacity');
define('_JOMRES_COM_LOGGING','Jomres logy');
define('_JOMRES_COM_LOGGING_WARNING','Tato nastavení umožňují ovládat zápisy do log souborů systému Jomres. Zápisy chyb jsou vždy povoleny, ale ostatní zápisy do log souboru, jako jsou rezervace, přihlášení, hlášení systému a požadavky mohou být nastaveny na ano nebo ne. Upozorňujeme, že <b>zapnutí logování je velmi výhodné z hlediska ladění programu a dohledávání chyb, ale nese s sebou velé bezpečnostní riziko</b> zejména v možnosti, že uživatelé bez příslušné auutorizace mohou otevřít logovací soubor a číst v něm. Proto prosím nechte nastavení logů vypnuté, není-li opravdu netné je používat. Pokud logování zapnete, ujistěte se, že složka <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> neobsahuje žádné staré log soubory. Uvědomte si, že zapnutí logování vede i ke zpomalení činnosti systému vzhledem ke shromažďování velkého množství informací.');
define('_JOMRES_COM_LOGGING_BOOKING','Logování rezervačního formuláře (Logy rezervačního procesoru) ');
define('_JOMRES_COM_LOGGING_GATEWAY','Logy brány (jako paypal atd.) ');
define('_JOMRES_COM_LOGGING_REQUEST','Logy požadavků (všechny příchozí požadavky serveru)');
define('_JOMRES_COM_LOGGING_SYSTEM','Systém (různé logy) ');
define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portál (hlavně pro záznam provizí) ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Váš dotaz...');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Rezervační formulář ukázat obrázek typu pokoje');
define('_JOMRES_COM_A_LISTLIMIT','Limit výpisu kapacit');
define('_JOMRES_COM_A_LISTLIMIT_DESC','Počet kapacit, vypsaných na jedné stránce po skončení vyhledávání');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Integrované vyhledávání');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','Integrované vyhledávání Jomres umožňuje uživatelům vyhledávat kapacity pomocí celé sady funkcí. Pokud jste již používali vyhledávací funkce Jomres v Joomle, budete toto nastavení znát. <br/> Tato funkce nám umožňuje nabídnout vyhledávání v systému Jomres pro ty uživatele, kteří nepoužívají vyhledávací moduly, obsažené v Joomla nebo pro ty uživatele, jejichž CMS vlastní vyhledávací modul nemá. <br/> Jen nezapomeňte, že pokud se rozhodnete hledat něco přes odkaz (tj. nikoli rozbalovací), pak další možnosti vyhledávání nebude možné provést, bude hledán pouze prvek, který odpovídá na odkazu, který jste klikli. <br/> Všimněte si, že ve výchozím nastavení zobrazení nevypadá integrované vyhledávání moc hezky. To proto, že soubor šablony, který zajišťuje zobrazení, musí obsahovat všechny možnosti, z nichž některé jsou vzájemně neslučitelné. Pro zlepšení a úpravu vzhledu do podoby, jakou si přejete, musíte upravit <b> srch.html </ b> ve složce <b> '. JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Aktivovat toto nastavení?');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','Pokud je toto nastavení povoleno, potom jakýkoliv požadavek, který zobrazuje výpis kapacit, bude zároveň zobrazovat i možnosti vyhledávání');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Použij sloupce');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Jakákoliv možnost vyhledávání, kterou definujete jako typ odkaz (tam, kde je to relevantní) bude zobrazena jako sloupec. (IE vloží značku br na konec odkazu)");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Vlastnosti sloupců");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"Počet piktogramů, které budou vloženy před značku br - tedy před přechodem na další řádek.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Vyhledávání regionů pomocí výběru v combo seznamu");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Nabízí možnost výběru v seznamu, vyfiltrovanému na země/regiony/města. Pokud chete toto nastavení používat, je lépe neoužívat vyhledávání regionů a měst níže.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Vyhladání kapacity podle jména");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Zobrazit vyhledávání podle názevu kapacity");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Zobrazit jako pole se seznamem?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Vyhledávat podle města/regionu");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Zobrazit vyhledávání podle regionu");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Zobrazit jako pole se seznamem?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Vyhledávání podle typu kapacity");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Zobrazit vyhledávání podle typu kapacity");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Zobrazit jako pole se seznamem?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Vyhledávání podle typu pokoje");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Zobrazit vyhledávání podle typu pokoje");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Zobrazit jako pole se seznamem?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Vyhledávání podle vlastností");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Zobrazit vyhledávání podle vlastností");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Zobrazit jako pole se seznamem?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Vyhledávání podle popisu");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Zobrazit vyhledávání podle popisu");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Vyhledávání podle dostupnosti");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Zobrazit vyhledávání podle dostupnosti");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Vyhledávání dle rozsahu cen");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Zobrazit vyhledávání podle cen");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Přírůstek cenového rozpění");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres vyhledá všechny hodnoty v cenících, jejichž rozsahy odpovídají zde nastavené zvýšené ceně.");
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','Ve výchozím nastavení, pokud není vybraná žádná kapacita, Jomres spustí vyhledávání. Pokud toto vyhledávání nebylo spuštěno vyhledávacím modulem, pak dojde k záměrnému vygenerování náhodných výsledků (záměrně). Tato volba umožňuje omezit počet výsledů tohoto náhodného hledání.');
define('_JOMRES_COM_A_CRON_TITLE','Nastavení a logy procesu Cron');
define('_JOMRES_COM_A_CRON_DESC','Inforamce o úloze Cron. Tato úloha je nezbytná pro funkčnost fakturace a zúčtování provizí');
define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Intalované minikomponenty úlohy Cron. Ke spuštění dané úlohy použijte příslušný odkaz. Uvědomte si, že úloha nebude mít žádný výstup na obrazovku a nebudete tím pádem mít žádnou zpětnou vazbu. Místo toho nahlédněte do log souboru níže.');
global $jomresConfig_secret;
define('_JOMRES_COM_A_CRON_METHOD','Metoda');
define('_JOMRES_COM_A_CRON_METHOD_DESC',"Jestliže nemáte přístup k procesu Cron, nastavte tuto minikomponentu. Jinak vytvřte Cron úlohu a jako parametr ke spuštění zadejte <br /> <i>curl -s ".JOMRES_SITEPAGE_URL_AJAX."&task=cronjobs&tmpl=component&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
define('_JOMRES_COM_A_CRON_LOGGING','Zobrazit logy v prohlížeči');
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Pracuje pouze, pokud je metoda nastavena na minikomponentu.');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Záznam logu povolen');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Nastavte ANO pro povolení záznamu do log souboru. Výsledky budou ve výstupním souboru uvedeném níže.');
define('_JOMRES_COM_A_CRON_VERBOSELOGS','Podrobné protokolování');
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Výstup logů');
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Úprava šablony');
define('_JOMRES_COM_TEMPLATEEDITING_DESC','Tato funkce umožňuje upravit šablonu frontendu na serveru, ukládat výsledky do databáze. Funkce pouze pro pokročilé uživatele.');
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Název šablony');
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Šablona byla upravena?');
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Uživatelská pole');
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Zde můžete nadefinovat uživatelská pole, která budou následně zobrazena v rezervačním formuláři.');
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Název pole (bez mezer)');
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Výchozí hodnota');
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Popis');
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Vyžadováno');
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximální množství');
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','Pokud je Maximální hodnota nastavena na hodnotu vyšší jak 1, pak se zobrazí pole se seznamem s výběrem hodnot. ');
define('_JRPORTAL_INVOICES_ISSUE',"Vystavení faktur");
define('_JRPORTAL_TAXRATES_TITLE',"Dazby DPH");
define('_JRPORTAL_TAXRATES_CODE',"Kód daně");
define('_JRPORTAL_TAXRATES_DESCRIPTION',"Popis daně");
define('_JRPORTAL_TAXRATES_CANNOTDELETE',"Nemůžete vymazat tuto sazbu daně.");
define('_JRPORTAL_TAXRATES_RATE',"Daň");
define('_JRPORTAL_INVOICES_TITLE',"Faktury");
define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Nazaplacená");
define('_JRPORTAL_INVOICES_STATUS_PAID',"Zaplacená");
define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Zrušená");
define('_JRPORTAL_INVOICES_STATUS_PENDING',"Čeká na vyřízení");
define('_JRPORTAL_INVOICES_USER',"Uživatel");
define('_JRPORTAL_INVOICES_STATUS',"Status");
define('_JRPORTAL_INVOICES_RAISED',"Zvýšení");
define('_JRPORTAL_INVOICES_DUE',"Splatnost");
define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Schválení");
define('_JRPORTAL_INVOICES_INITTOTAL',"Celkem nezaplaceno");
define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Periodická platba");
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Frekvence plateb");
define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Platební den");
define('_JRPORTAL_INVOICES_CURRENCYCODE',"Kód měny");
define('_JRPORTAL_INVOICES_LINEITEMS',"Položky řádku");
define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Jméno");
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Popis");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Základní cena");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Základní množství");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Základní sleva");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Celkem");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Periodická platba");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Periodické množství");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Periodická sleva");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Celkem per. platba");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Kód daně");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Popis daně");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Sazba daně");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Nastavení Paypal");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Kód měny (např. EUR)");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Použít schránku sandbox?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Vaše emailová adresa pro paypal");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Poznámka: Pokud chcete používat PayPal, musíte se nejprve do něj přihlásit a zrušit funkci Autoreturn. (Profile/Website Payment Preferences), a nastavit IPN (Profile/Instant Payment Notification Preferences) na URL adresu:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_AJAX."&task=completebk");
define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"Faktura je nyní splatná. Stiskem tlačítka ji zaplatíte pomocí PayPal.");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Ignorovat standardní nastavení platební brány Jomres?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"Pokud je nastaveno na ANO, stane se následující: V Hlavní konfiguraci se neobjeví žádná nastavení platební brány, a za druhé, pokud je provedena rezervace, je také platba odeslána na adresu uvedenou zde, nikoliv na tu uvedenou před tím v Hlavní konfiguraci.");
define('_JRPORTAL_INVOICES_SHOWINVOICES',"Ukaž mé faktury");
define('_JRPORTAL_COUPONS_TITLE',"Slevové kupony");
define('_JRPORTAL_COUPONS_DESC',"Kódy slevových kuponů mohou být vygenerovány a zaslány uživatelům systému, aby byla podpořena poptávka po rezevování kapacit. Datum platnosti se vztahuje na použití slevového kuponu, nikoliv na datum rezervace jako takové.");
define('_JRPORTAL_COUPONS_CODE',"Kód kuponu");
define('_JRPORTAL_COUPONS_VALIDFROM',"Platnost od");
define('_JRPORTAL_COUPONS_VALIDTO',"Platnost do");
define('_JRPORTAL_COUPONS_AMOUNT',"Výše slevy");
define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Sleva je procentní");
define('_JRPORTAL_COUPONS_ROOMONLY',"Pouze pokoj");
define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Sleva je nyní použita pouze na náklady za pokoj. Pokud je nastaveno na Ne, je sleva použita na náklady za celý pobyt.");
define('_JRPORTAL_COUPONS_SQLERROR',"Chyba Sql při pokusu o vymazání nebo vložení kuponu");
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','Pokud máte kód slevového kuponu, napište nebo zkopírujte jej do tohoto pole a stiskněte tlačítko Ulož slevu. Vaše sleva bude uplatněna na tuto rezervaci.');
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Ulož slevu');
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Sleva uložena do rezervace');
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Kód slevového kuponu nenalezen');
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Výše slevy na kuponu');
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Rezervace se slevou. Kód kuponu/sleva/nastavení kuponu: ');
define('_JOMRES_COM_CACHING','Použít Jomres cache?');
define('_JOMRES_COM_CACHING_DESC','Nastavte na NE, pokud chcete zakázat cachování v rámci programu Jomres.');
define('_JOMRES_COM_CHOOSELANGUAGES','Volba jazyka');
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Vyberte jazyky, které chcete vybírat v přepínacím seznamu jazyků.');
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Ukázat výběr jazyka?');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Odhlášené a zrušené rezervace');
/*
* @ignore
*/
define('_JRPORTAL_NEWUSER_DEAR',"Vážený/á");
define('_JRPORTAL_NEWUSER_THANKYOU',"Děkujeme za registraci ");
define('_JRPORTAL_NEWUSER_USERNAME',"Vaše uživatelské jméno je : ");
define('_JRPORTAL_NEWUSER_PASSWORD',"Vaše heslo : ");
define('_JRPORTAL_NEWUSER_LOG_IN',"Prosím přihlašte se, aby jste mohli prohlížet Vaše rezervace ");
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Kupón uložen');
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Kupón vymazán');
// Not used yet
define('_JOMRES_COM_GROWL','Použít Jomres zpracování zpráv');
define('_JOMRES_COM_GROWL_DESC','Mnoho zprávců požaduje zpětnou vazbu o tom, že stránka byla znovu načtena. K tomu slouží tato volba.');
define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");
define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Jméno");
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Heslo");
define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Číslo telefonu pro zaslání potvrzení");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Prosím, použijte formát 'Country code, mobile number'. Např: '420123456789'. Nevyplňujte, pokud nechcete dostávat zprávy o odeslání.");
define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
<b>Tuto funkci nelze testovat na 'localhost'u, musíte být přihlášeni v živé aplikaci.</b>
<br/>
<br/>
Aby jste mohli používat Clickatell bránu, musíte mít účet a alespoň jedno zaregistrované spojení (API sub-product instance) mezi Vaší aplikací a naší bránou. Každé spojení
je nazýváno jako sub-product. Zde je podrobný postup:<br/>
<br/>
<b>Step 1 - zaregistrujte si Clickatell účet</b><br/>
Pokud ještě nemáte Clikatell účet, postupujte podle návodu níže. Jinak pokračujte Krokem 2.<br/>
* Běžte na http://www.clickatell.com/products/sms_gateway.php, a vyberte API subproduct (metoda spojení) který chcte použít. ( Clickatell Central (API) )<br/>
* Klikněte na odkaz k registraci.<br/>
* Vyplňte regustrační formulář.<br/>
Po úspěšné registraci budete přesměrování na stránku, kde můžete nakonfigurovat nové API spojení.<br/>
<b>Krok 2 - přidání registrovaného API spojení(sub-product)</b><br/>
Pokud ještě nejste přihlášeni, učiňte tak na stránce http://www.clickatell.com/login.php<br/>
* Vyberte \"Manage my Products\" z horní nabídky.<br/>
* Vyberte typ spojení API, které chcete použít (HTTP API) z příslušného pole se seznamem ('Add Connection').<br/>
* Vyplňte zbytek formuláře. Ujistěte se, že jste zadali správnou adresu IP(IP adresu tohoto serveru), nastavte Callback na HTTP POST. Musíte nastavit IP callback na ".$jomresConfig_live_site."/index.php?option=com_jomres&task=sms_clickatell_callback a dále userid a heslo.<br/>
Pokud zadáváte více než jedno API spojení, jejich popis musí být vždy jedninečný - nelze mít více API se stejným názvem.<br/>
Po úspěšném odeslání formuláře se zobrazí všechny detaily vašeho připojení, včetně seznamu všech API a jejich jedinečného id. Všechny tyto údaje jsou potřebné pro přojení k bráně Clickatell a odeslání zpráv.<br/>
<br/>
Použijte userid, heslo a api_id v vyplnění příslušných polí.<br/>
<br/>
");
define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Ukázat zakázaný přístup k rezervačnímu formuláři');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Ukázat maximální počet osob v rezervačním formuláři');
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Prosím uvědomte si, že uvedé ceny jsou pouze přibližné. Přesné ceny budou vypočteny teprve až vyberete pokoj nebo pokoje.");
define('_JOMRES_LASTEDITED_DB','Poslední změna databáze šablon');
define('_JOMRES_LASTEDITED_DISK','Poslední změna šablony na disku');
define('_JOMRES_LASTEDITED_WARNINGICON','Varování databáze šablon');
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Databáze šablon může být zastaralá');
define('_JOMRES_LASTEDITED_WARNING','Jestliže u šablony vidíte piktogram, pak to znamná, že Jomres detekoval, že šablona, která je uložena v databázi <strong><i>může</i></strong> starší než ta, která je uložena na disku. V tomto případě je možné, že šablona byla aktualizována instalací nové verze Jomres. V tomto případě je možné, že šablona nebude moci plně využít funkce v nové verzi Jomres nebo instalované funkce nepracují tak, jak se očekávalo. Měli byste srovna soubory na disku s vaším nastavením, aby nedocházelo ke zbytečné ztrátě funkcionality.');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Předplacené balíčky");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Jméno");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Popis");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Publikováno");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Četnost");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"ZKušební období");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Zkušební obnos");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Plný obnos");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Limit pokojů"); // Not currently used, saved for a rainy day
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Limit kapacit");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Četnost: M/Q/B/A Měsíčně/Q(kvartálně)/B(půlročně)/A(ročně)");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Zkušební období: Vstup celé číslo, 0 (nula) nenastaveno, 1 jeden měsíc, 2 dva měsíce atd.");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Předplatit");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Prosím vložte/změnte vaše údaje. Upozorňujeme, že všechna pole jsou povinná.");
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"Jméno");
define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Příjmení");
define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Adresa");
define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Země");
define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"PSČ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"Potřebujete platnou registraci k vytvoření nových kapacit. V tomto okamžiku, jste si zakoupili předplatné na ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," zveřejněných kapacit. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"Můžete zvýšit počet kapacit, které můžete vytvořit pomocí <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>zakoupením většiho množství předplatného.</a>");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," Používáte ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," kapacitních složek. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"Na výpis vašich aktuálních kapacit klikněte na <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>here</a>. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"Na výpis všech dostupných balíčků předlatného klikněte na <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Bohužel, nemůžete zveřejnit tuto kapacitu, dosáhli jste maximálního počtu otevřených kapacitních složek.");
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Děkujeme Vám za objednávku zveřejnění Vašich kapacit na našem serveru. Jakmile bude Vaše faktura označna jako zaplacená, můžete pokračovat zde: <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>a zadat údaje o vašich kapacitách.</a>");
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"Je nám líto, že jste se nerozhodli por využití našich služeb. Pokud V8m můžeme jakkoliv pomoci, neváhejte a kontaktujte nás.");
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"Omlouvám se, ale dosáhli jste maximálního počtu kapacit, které můžete mít zveřejněné v jednom okamžiku. Pokud chcte jejich počet zvýšit, kliněnte na <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>objednávku dalších balíčků.</a> ");
define('_JRPORTAL_SUBSCRIPTIONS_USE',"Použít funkce předplatného");
define('_JOMRES_COM_NEWUSER','Při rezervaci vytvořit nového uživatele');
define('_JOMRES_COM_NEWUSER_DESC','Pokud rezervaci zadává neregistrovaný uživatel, automaticky proběhne vytvoření nového uživatele.');
define('_JOMRES_CLICKTOREGISTER','Klikněte zde pro zadání vaší kapacity');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Aktivní předplatné");
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"id brány předplatného");
define('_JRPORTAL_NEWUSER_SUBJECT',"Děkujeme za rezervaci. Níže jsou uvedeny údaje nového uživatele");
define('_JOMRES_LATLONG_DESC',"Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.");
define('_JOMRES_CONTROLPANEL','Ovládací panel');
define('_JOMRES_COM_FAUXHEADERS','Vložit Jomres javascript do těla html místo do hlavičky?');
define('_JOMRES_COM_FAUXHEADERS_DESC','Nastavte na ANO, pokud dochází k problémům s MSIE a Javascriptem, umístěným v hlavičce stránky. Tato volba umístí Javascript až za tag body.');
// Jomres v4.2
define('_JOMRES_MANAGER_SHOWINVOICE','Zobrazit fakturu');
define('_JOMRES_MANAGER_SHOWINVOICES','Zobrazit faktury');
define('_JOMRES_USER_LISTMYPROPERTY','Vložit moji kapacitu na tuto stránku');
define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Varování : ');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"Můžete vytvořit i tzv. balíček zdarma a to tak, že po jeho vytvoření nastavíte jak zkušební částku, tak plnou částku na hodnotu 0.00");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Omlouvám se, ale ID balíčku nebylo rozpoznáno.");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Omlouvám se, ale už jste jednou použil balíček zdarma a nemůžete jej použít znovu.");
define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Status <b>0:</b> Očekávaná platba <b>1:</b> Vytvořeno <b>2:</b> Zrušeno <b>3:</b> Termín ukončení");
define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"Můj účet");
define('_JOMRES_COM_YOURBUSINESS','Vaše obchodní údaje');
define('_JOMRES_COM_YOURBUSINESS_NAME','Obchodní jméno');
define('_JOMRES_COM_YOURBUSINESS_VATNO','DIČ');
define('_JOMRES_COM_YOURBUSINESSADDRESS','Číslo popisné');
define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>POZNÁMKA: Následující sazba daně je pro použití v USA. Pokud chcte používat režim evropské DPH, vyberte sazbu z nabídky nahoře</FONT>');
define('_JOMRES_INVOICE_NUMBER','Číslo faktury ');
define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Vyberte data, která chcete použít pro anonymní rezervaci. Poté, co jste vyberete vhodná data, klikněte na tlačítko "Použít" a znovu proveďte kontrolu dostupnosti. <br/>
<br/>Pokud v kapacitě je jedna nebo více rezervací za vybrané období, pak nebudete moci objednat až do té chvíle, kdy bude druhá rezervace / anonymní rezervace zrušena nebo odhlášena. ');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Bohužel, na tento termín nelze provést nanonymní rezervaci.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','Na tento termín lze provést anonymní rezervaci.');
define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Platba za tuto kapacitu je nastavena na osobu a noc, ale nemáte vytvořený nebo zveřejněný žádný typ hosta. Prosím vytvořte, případně zveřejněte alespoň jeden typ hosta pro tuto kapacitu. ');
define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','Zatím nemáte žádnou pložku v ceníku, nebude možné pro tuto kapacitu přijímat rezervace.');
define('_JOMRES_EDITINGMODE_ON','Režim úprav zapnutý');
define('_JOMRES_EDITINGMODE_OFF','Režim úprav vypnutý');
define('_JOMRES_COM_INVOICE_PRINT','Vytiskni fakturu');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Charge variable deposits?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','The number of days, within which the full amount will be charged as a deposit.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN','Send Contact Owner emails to Alternative address?');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the property configuration area.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternative address for Contact Owner emails.');
define('_JOMRES_CONFIRMATION_EMAIL_SENT','Confirmation email has been sent. You may close this window now.');
define('_JOMRES_REALESTATE_TITLE','Real estate listing');
define('_JOMRES_REALESTATE_YESNO','Is this property a for sale listing?');
define('_JOMRES_REALESTATE_YESNO_DESC','Select Yes if you are selling the property, select No if it is a listing where you will be offering short term rentals and will be using this system for taking bookings.');
define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contact agent');
define('_JOMRES_INVOICE_MARKASPAID','Mark invoice as paid');
define('_JOMRES_INVOICE_MARKEDASPAID','Invoice marked as paid');
define('_JOMRES_APIKEY_REMAKE','Make new API key');
define('_JOMRES_AUTOTRANSLATE_TITLE','Use Google for initial translations?');
define('_JOMRES_AUTOTRANSLATE_DESC','This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google\'s translation tool to automatically set up translations for a given property. Note that this feature sanitizes all input, so if you use a html editor for formatting your property details, then this will break that formatting.<br/>');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Is this a single property installation?');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>');
define('_JOMRES_HTMP_PURIFIER','Use HTML purifier functionality?');
define('_JOMRES_HTMP_PURIFIER_DESC','Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory.');
define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Balance payment');
define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Balance');
define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">the editing mode manual page</a> for more information on this subject.');
define('_JOMRES_SUPPORTKEY','Support key');
define('_JOMRES_SUPPORTKEY_DESC','Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.');
define('_JOMRES_PERSONAL_DISCOUNT','Personal discount');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Limit property registration to one country?');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','You can ensure that property registrations are limited to just one country by setting this option to Yes and setting the country in the following option.');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Properties are located in this country : ');
define('_JOMRES_JQUERYTHEME','Jquery theme');
define('_JOMRES_JQUERYTHEME_DESC','Choose a jquery theme to use for the property details tabs.');
define('_JOMRES_PROPERTYNOTOUBLISHED','We are sorry, but that property is not currently available.');
define('_JOMRES_REVIEWS','Reviews');
define('_JOMRES_REVIEWS_TITLE','Review title');
define('_JOMRES_REVIEWS_DATE','posted on ');
define('_JOMRES_REVIEWS_NOREVIEWS','There are no reviews for this property yet.');
define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Would you like to be the first to review this property?');
define('_JOMRES_REVIEWS_IAGREE','I agree with this review');
define('_JOMRES_REVIEWS_IDISAGREE','I disagree with this review');
define('_JOMRES_REVIEWS_AVERAGE_RATING','Average Rating: ');
define('_JOMRES_REVIEWS_TOTAL_VOTES','Total Votes:');
define('_JOMRES_REVIEWS_ADD_REVIEW','Add a new review.');
define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','You need to be logged in to post a review.');
define('_JOMRES_REVIEWS_REVIEWBODY','Tell us what you think about this property : ');
define('_JOMRES_REVIEWS_REVIEWBODY_SAID','This reviewer told us : ');
define('_JOMRES_REVIEWS_PROS','Pros: ');
define('_JOMRES_REVIEWS_CONS','Cons: ');
define('_JOMRES_REVIEWS_SUBMITTEDDATE','Submitted On: ');
define('_JOMRES_REVIEWS_ALREADYREVIEWED','You have already reviewed this property, you can\'t post another review about it.');
define('_JOMRES_REVIEWS_CANNOTREVIEW','Sorry, but you are not allowed to post reviews on this site.');
define('_JOMRES_REVIEWS_CLICKTOSHOW','Click to show reviews');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',' guests agree with this review. ');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',' guests do not agree with this review.');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',' guest agrees with this review. ');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR','guest does not agree with this review.');
define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Thank you for sharing your opinion of this review.');
define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Thank you, but you have already shared your opinion of this review.');
define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Please ensure that all fields have been filled.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Please summarise your review by entering a title');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Please enter a more complete review in the description box');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Please enter the good parts of your experience of being a guest at this property');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Please enter any negative thoughts you might have of your experience');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Please rate the hostpitality you received from the staff');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Please rate your opinion of the property\s locale');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Please provide your opinion of the cleanliness of the property');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Please rate the accommodation. Was it comfortable or threadbare');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Please provide your opinion of whether it was value for money');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Please rate the services');
define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Review summary');
define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','Your experience in more detail');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Thank you for submitting your review.');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Thank you for submitting your review. It will be published soon by one of our hard working moderators.');
define('_JOMRES_REVIEWS_ADMIN_CONTROL','Use Jomres review functionality?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','Automatically publish reviews?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','If you set this to No you will need to manually publish reviews');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Set reviews to test mode?');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Normally property managers cannot review propertys. With test mode enabled, they can. Naturally this is not ideal in a production environment.');
define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','This is a list of all properties. To see a property\'s reviews, click on that property. From there you will be able to publish or delete a review.');
define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Number of unpublished reviews');
define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Total number of reviews');
define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Publish/Unpublish review');
define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Delete review');
define('_JOMRES_REVIEWS_REPORT_REVIEW','Report review');
define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Review reports');
define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Please enter your report');
define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','See something in this review which is objectional or inaccurate? Report it and we will look into it for you.');
define('_JOMRES_REVIEWS_SUBMIT','Submit');
define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Report created by ');
define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','Reports are posted by users who may disagree with the content of a review. The only way to remove a report is to delete the review.');
define('_JOMRES_REVIEWS_RATING','Ratings (1 = poor 10 = excellent) ');
define('_JOMRES_REVIEWS_RATING_1','Hospitality  ');
define('_JOMRES_REVIEWS_RATING_2','Location ');
define('_JOMRES_REVIEWS_RATING_3','Cleanliness ');
define('_JOMRES_REVIEWS_RATING_4','Accommodation ');
define('_JOMRES_REVIEWS_RATING_5','Value for money ');
define('_JOMRES_REVIEWS_RATING_6','Services ');
define('_JOMRES_REVIEWS_REVIEWED_BY','Reviewed by : ');
define('_JOMRES_REVIEWS_CLICKTOHIDE','Hide reviews');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Show Booking form in property details page?');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Set this to Yes to show the booking form in the property details page. If you set it to No, then a link will appear in the property details page instead pointing to the booking form.');
define('_JOMRES_COM_A_TAXINCLUSIVE','Are prices set inclusive of tax?');
define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','Prices set are inclusive? If your prices include tax, then select Yes. If they are not, select No.');
define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','Extras tax:');
define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','The day of week fields allow you to set a rate for a given day of week, once you click the day of week button all days of the week will be set to that rate.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Start range');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','End range');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Rate');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Set rates');
define('_JOMRES_PARTNERS_TITLE','Partners');
define('_JOMRES_CALENDAR_TODAY','Today');
define('_JOMRES_CALENDAR_PREV','Previous');
define('_JOMRES_CALENDAR_NEXT','Next');
define('_JOMRES_CALENDAR_RTL','false');
define('_JOMRES_ROOMALLOCATIONS_ROOM','Room ');
define('_JOMRES_ROOMALLOCATIONS_GUESTS','guest(s). ');
define('_JOMRES_ROOMALLOCATIONS_INFORMATION','This how we have assigned your guest numbers to their rooms. If you would like to change this allocation, you will need to contact the hotel after making the booking. Extra charges may apply if you change your assignments.');
define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED',"Note that your property is not yet published, only you can see the property, site visitors will not see it");
// 4.5.5
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Default search result order');
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Change this option to change the order that search results are presented by default.');
define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Show search result order dropdown');
define('_JOMRES_ROOMMSLIST_STYLE','Rooms list style');
define('_JOMRES_ROOMMSLIST_STYLE_DESC','In the booking form, using the "classic" rooms list style you offer individual rooms to guests. With the room type view, guests choose the number of rooms of type X (eg. 2 x doubles) instead');
define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Classic');
define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Room types');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','(Re)checking availability');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','Rebuilding available rooms list');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','Calculating totals');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','Finished form update');
define('_JOMRES_COM_CALENDAR_STARTDAY','Calendar week start day, Sunday or Monday');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Only property guests can review?');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this property.');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Per room');
define('_JOMRES_MAX_GUESTS_PER_ROOM','Guests per room : ');
define('_JOMRES_MAX_GUESTS_PER_BOOKING','Guests per booking : ');
define('_JOMRES_NUMBER_OF_ROOMS','Number of rooms');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Tariff default price');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC',"This only applies to new tariffs");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW',"Years to show");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC',"Defines the number of years to show when editing a micromanage tariff");
define('_JRPORTAL_MONTHS_LONG_0','January');
define('_JRPORTAL_MONTHS_LONG_1','February');
define('_JRPORTAL_MONTHS_LONG_2','March');
define('_JRPORTAL_MONTHS_LONG_3','April');
define('_JRPORTAL_MONTHS_LONG_4','May');
define('_JRPORTAL_MONTHS_LONG_5','June');
define('_JRPORTAL_MONTHS_LONG_6','July');
define('_JRPORTAL_MONTHS_LONG_7','August');
define('_JRPORTAL_MONTHS_LONG_8','September');
define('_JRPORTAL_MONTHS_LONG_9','October');
define('_JRPORTAL_MONTHS_LONG_10','November');
define('_JRPORTAL_MONTHS_LONG_11','December');

define('_JOMRES_PROPERTYMANAGEMENTPROCESS',"Property management process");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',"There are different management processes depending on the way you want to list your property/business.");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',"Rental");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC',"Choose the rental option if you are booking out rooms in a property (eg. Hotel/B&B/Villa/Apartment)");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE',"Realestate/simple listing");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC',"Choose the real estate option if you are not offering any booking functionality at all, (eg. A property/item for sale)");

define('JOMRES_COM_A_MINIMALCONFIG_DESC','Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');

define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Please select an option for your booking');
define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Switches on html editors in property details editing page. Additionally, if this is set to No, then all html except p and br is stripped from all entered and displayed text.');
define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT',"Fullscreen view");
define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW',"Normal view");
define('_JOMRES_COM_TIMEZONE_SWITCHER',"Show the timezone switcher in the property manager's toolbar?");

define('_JOMRES_PARTNER_DISCOUNT',"Partner discount ");
define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE',"Search user");
define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign properties and discounts to the user.");
define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE',"Existing partners");
define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a partner to be taken to the partner administration page.");

define('_JOMRES_PARTNER_SHOW_TITLE',"Partner :");
define('_JOMRES_PARTNER_SHOW_SEARCHTITLE',"Search for a property");
define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS',"Enter a few characters from the property name and select a property.<br/> When you select the property you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself.");
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES',"Current properties");
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS',"Click on a property to edit the partner's discount settings for that property.");


// 4.6
define('_JOMRES_SUSPENSIONS_TITLE',"Suspended? <br/>(click to suspend a manager, this will auto-unpublish all of their properties ) ");
define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO',"Click on the Suspend Icon (the icon with the man and the green tick) to suspend a manager. This means that the manager will not be able to perform property management functions and all of their properties will be unpublished. Super property managers cannot be suspended.");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED',"This account has been suspended, it is not currently possible to administer your propert(ies) using this account.");
define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE',"Manager account suspended");
define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE',"Manager account reinstated");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL',"Please note that your property manager account has been suspended. You will not be able to perform any property management functions until the account has been restored.");
define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL',"Please note that your property manager account is now active. You may continue to perform any property management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you.");
define('_JOMCOMP_MYUSER_REMOVE','Remove favourite');
define('_JOMRES_DATA_ARCHIVE_TITLE','Booking data archive');
define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.');
define('_JOMRES_MY_ACCOUNT_EDIT','Edit account');
define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE',"Search users");
define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters from their username to search for a user.<br/> When you select a user you will automatically add them as a Manager and you will be taken to the next page where you can assign properties and access rights to the user.");
define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',"Existing managers");
define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a manager to be taken to the manager administration page.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',"Search by guest numbers");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',"Show the search by guest number dropdown");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',"Search by stars");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',"Show the search by stars dropdown");
define('_JOMRES_SEARCH_GUESTNUMBER','Number of guests');
define('_JOMRES_SEARCH_STARS','Number of stars');

define('_JRPORTAL_INVOICES_COMMISSION_TITLE',"Commission invoices");
define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Number of properties");

// 4.6.1
define('_JOMRES_CONFIG_JQUERY',"Load Jomres jQuery library?");
define('_JOMRES_CONFIG_JQUERY_DESC',"You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all.");
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','If you use Joomfish, you should set this to No, and use Joomfish\'s language switcher. The switcher is always enabled in the administrator area because it is needed when you use the Label Translations feature.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Thumbnails are created automatically for uploaded images.');

// 4.7.1
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Small thumbnails max width (px).');
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Small thumbnails are used in the property list whereas medium sized thumbnails are used in the property header.');
define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Small thumbnails max height (px).');
define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','Medium thumbnails max width (px).');
define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','Medium thumbnails max height (px).');
define('_JOMRES_TOUCHTEMPLATES','Label Translations');

define('_JRPORTAL_ROI_TAB',"ROI");
define('_JRPORTAL_INVOICES_COMMISSION_USE',"Use commission functionality?");
define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC',"Set this to Yes to show the manager commission invoices which have been raised.");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',"Manager bookings create commission invoices?");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',"If a manager makes a booking, does that also create a commission invoice line item?");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT',"A new commission invoice has been raised");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE',"A new commission invoice has been raised which requires your attention. Please click on the following link to view the invoice (you may need to log in first).");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',"Auto suspend managers where invoices are marked as Pending?");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',"Auto suspend threashold");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',"This threashold is the number of days that a manager has to pay an invoice before they are suspended and their properties unpublished.");

//4.7.2
define('_JOMRES_COM_LANGUAGE_CONTEXT','Language context');
define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /jomres/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /jomres/languages directory.');

// 4.7.3
define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Advanced site config');
define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options will only be applicable to installations of Jomres Silver, Jomres Lite users will not be able to take full advantage of the features that they enable.');

define('_JOMRES_CONFIG_JQUERY_UI',"Load Jomres jQuery UI library?");

define('_JOMRES_SORTORDER_PRICE_DESC','Price (highest first)');
define('_JOMRES_SORTORDER_PRICE_ASC','Price (lowest first)');

// 4.7.6

define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Price summary and estimates should be priced as per night/per week/per month?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Per night');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Per week');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Per month');
define('_JOMRES_BOOKINGFORM_PERPERSON','Per person');

define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','week(s) at ');
define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','month(s) at ');

// 4.7.7

define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','How should the search option for people numbers work?');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Please wait, your order is being processed and you will be redirected to the Paypal website.');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','If you are not automatically redirected to Paypal within 5 seconds...');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Click Here');
// 4.7.8

define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM',"Booking valid from");
define('_JRPORTAL_COUPONS_BOOKING_VALIDTO',"Booking valid to");
define('_JRPORTAL_COUPONS_GUESTNAME',"Guest name");
define('_JRPORTAL_COUPONS_DESC_478',"Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only.");
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK',"With your coupon, this booking has been discounted from ");
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO'," to ");

define('_JOMRES_CONFIG_JQUERY_UI_DESC',"Set this to No to disable loading of both the Jquery UI javascript and CSS files.");
define('_JOMRES_CONFIG_JQUERY_UI_CSS',"Load Jomres jQuery UI CSS library?");
define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',"Set this to No to disable only the jquery UI CSS file.");

//v5.1 
define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',"Total inc tax");
define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Unpublished property');

// v5.2
define('_JOMRES_CONVERSION_TITLE',"Use conversion functionaity");
define('_JOMRES_CONVERSION_TITLE_DESC',"Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
define('_JOMRES_CONVERSION_DISCLAIMER',"We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.");
define('_JOMRES_JAVASCRIPT_CACHING_TITLE',"Use javascript caching?");
define('_JOMRES_JAVASCRIPT_CACHING_DESC',"Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. ");

// 5.2.1
define('_JOMRES_HISTORIC_GUESTS_SHOW',"List historic and current guests");
define('_JOMRES_HISTORIC_GUESTS_NOSHOW',"Current guests only");

// 5.3.1
define('_JOMRES_CURRENCYCONVERSION_TAB','Currency conversion/currency codes');
define('_JOMRES_IP_DETECTION_API_KEY_TITLE','IP Detection API Key');
define('_JOMRES_IP_DETECTION_API_KEY_DESC','To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.');
define('_JOMRES_DEBUGGING_TAB','Debugging');
define('_JOMRES_BOOKINGORM_MODALPOPUP','Show the booking form in a modal popup?');
define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC','If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)');
define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION','Totals panel location');
define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC','In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX','Accomodation ex tax');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX','Accomodation inc tax');
define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM','Rooms tax:');
define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM','Open the booking form');

define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS','Back to property details');
define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT','Automatically Selected?');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE','Balance (after deposit paid)');

define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER','Filter resources based on their features.');

define('_JOMRES_DATEPERIOD_LATESTBOOKING','Latest booking');
define('_JOMRES_DATEPERIOD_SECOND','second');
define('_JOMRES_DATEPERIOD_MINUTE','minute');
define('_JOMRES_DATEPERIOD_HOUR','hour');
define('_JOMRES_DATEPERIOD_DAY','day');
define('_JOMRES_DATEPERIOD_WEEK','week');
define('_JOMRES_DATEPERIOD_MONTH','month');
define('_JOMRES_DATEPERIOD_YEAR','year');
define('_JOMRES_DATEPERIOD_DECADE','decade');
define('_JOMRES_DATEPERIOD_S','s');
define('_JOMRES_DATEPERIOD_AGO','ago');
define('_JOMRES_DATEPERIOD_FROMNOW','from now');

define('_JOMRES_WHOLEDAY_TITLE','Bookings are for whole days?');
define('_JOMRES_WHOLEDAY_DESC','By default the system bookings resources out by the night, so a booking from the first of January '.date("Y",strtotime("next year")).' to the 2nd of January '.date("Y",strtotime("next year")).' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY','Per day');
define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY','Per person per day');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY','Pickup');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY','Return');
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY',"days(s) at");
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY','Return date incorrect');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY','The booking is too short. There needs to be at least this many days between the pickup and return dates:');
define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY','Pickup/Return minimum interval');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY','The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY','Price summary and estimates should be priced as per day/per week/per month?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY','Per day');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY','Days before the pickup date');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY','The minimum number of days that must elapse, from "today", before the pickup date.');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY','Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY','Show return date input?');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY',"Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");

define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY','If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY','Pre-defined pickup day');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY','Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY','Fixed pickup day');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY','Fixed pickup dates recurr: ');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY','When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY','Per person, per day');
define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY','Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY','Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.');
define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY','Threshold (number of days between pickup date and today)');
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY','Pickup Pending');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY','Pickup today');
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY','Picked up');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY','Returns today');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY','Return overdue');
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY','Has not picked up');
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY','Days');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY','Mark a booking picked up.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY','Mark a booking returned.');
define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY','Mark a booking picked up');
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY','Mark a booking returned');
define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY','Cost per day: ');
define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY','Number of days: ');

define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL','Override Accommodation Total');
define('_JOMCOMP_AMEND_OVERRIDE_SAVE','Save override');

define('_JOMRES_BOOKINGFORMWIDTH','Booking form width in px');
define('_JOMRES_BOOKINGORM_SLIDERENABLED','Allow the totals panel to slide down the booking form?');
define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC','The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.');

define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS','Email new users their login details?');
define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC','If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
define('_JOMRES_BOOKINGORM_TAX_OUTPUT','Show tax output in the booking form totals summary?');
define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC','Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD','Cancellation Threashold');
define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC','Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.');

define('_JOMRES_EDIT_PROFILE','Edit Profile');
define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT','Property type relationship');
define('_JOMRES_IMAGE','Image');
define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT','Business types that can show this feature');
define('_JOMRES_CRATES_CLICKINITIAL','Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.');
define('_JRPORTAL_TAX_RATE_EDIT',"Edit Tax rate");

define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT',"Edit Custom field");

define('_JOMRES_LICENSESERVER_PASSWORD',"License server password");
define('_JOMRES_LICENSESERVER_USERNAME',"License server username");
define('_JOMRES_LICENSESERVER_USERNAME_DESC',"If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.");

define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION',"This Jomres version : ");
define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION',"Latest Jomres version");
define('_JOMRES_VERSIONCHECK_VERSIONWARNING',"Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.");

define('_JOMRES_PRODUCT_INFORMATION','Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Silver or Jomres Gold license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
define('_JOMRES_PRODUCT_INFORMATION2','This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.');

define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY',"Active property");
define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY',"Change your active property");
define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL',"Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property.");

define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE',"Alternate SMTP Settings");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC',"Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST',"Alternate Host");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC',"Change this to your smtp mail server");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT',"Alternate Port");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC',"Change this to your smtp port");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL',"Alternate Protocol");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC',"Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH',"Use authentication");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC',"If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',"Alternate Username");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC',"");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD',"Alternate Password");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC',"");

define('_JOMRES_WARNING_SYSTEM_CACHE',"Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically.");

define('_JOMRES_QUICK_INFO',"Quick Info");

define('_JOMRES_MENU_SHOW',"Show");
define('_JOMRES_MENU_HIDE',"Hide");
define('_JOMRES_MENU_SHOW_TITLE',"Use the alternate menu layout?");
define('_JOMRES_MENU_SHOW_DESC',"Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements.");


define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT',"Default");
define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY',"Anybody");
define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED',"Registered");
define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER',"Manager");
define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER',"Super Manager");
define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY',"Nobody");

define('_JOMRES_ACCESS_CONTROL_TITLE',"Menu Access control");
define('_JOMRES_ACCESS_CONTROL_DESC',"This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.");

define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST',"Receptionist");
define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE',"Full Access Control");
define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC',"Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.");

define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM',"Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
define('_JOMRES_ACCESS_CONTROL_TITLE_FULL',"Full Access control");
define('_JOMRES_ACCESS_CONTROL_DESC_FULL',"<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING',"Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.");

define('_JOMRES_SHOWPROFILES_USERSWITHACCESS',"Users with admin rights to this property");
define('_JOMRES_ADMIN_LISTALLUSERSINVOICES',"List all user's invoices");


define('_JOMRES_DEBUGGING_SUBJECT','Subject');
define('_JOMRES_DEBUGGING_FULLNAME','Your full name');
define('_JOMRES_DEBUGGING_YOUREMAIL','Your email address');
define('_JOMRES_DEBUGGING_ISSUE','Please describe your issue');
define('_JOMRES_EXTRAS_MODELS_MODEL','Model');
define('_JOMRES_EXTRAS_MODELS_PARAMS','Parameters');
define('_JOMRES_EXTRAS_MODELS_FORCE','Force');
define('_JOMRES_METATITLE','Meta title');
define('_JOMRES_METADESCRIPTION','Meta description');
define('_JOMRES_FOUNDPROPERTIES',"Properties found");
define('_JOMRES_REGISTRATION_STEP_1_OF_2',"Add your property : Step 1 of 2");
define('_JOMRES_REGISTRATION_STEP_2_OF_2',"Add your property : Step 2 of 2");

define('_JOMRES_MYPROPERTIES','My properties');


define('_JOMRES_CART_TITLE','My proposed bookings');
define('_JOMRES_CART_INFO','Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!');
define('_JOMRES_CART_CONFIRM_BOOKINGS','Confirm booking(s)');
define('_JOMRES_CART_OR',' or ');
define('_JOMRES_CART_SAVEFORLATER','Save for later');
define('_JOMRES_CART_NOBOOKINGS_SAVED','You don\'t have any bookings saved yet.');
define('_JOMRES_CART_VIEWCART','View cart');

define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR','Language file subdirectory');

define('_JOMRES_DEFAULT_LAT_STARTPOINT','Default Latitude Startpoint');
define('_JOMRES_DEFAULT_LONG_STARTPOINT','Default Longitude Startpoint');
define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC','In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');

define('_JOMRES_CLEARDATES','I don\'t have any dates yet');

define('_JOMRES_MOBILE_REDIRECT','Redirect to frameless when on mobile devices?');
define('_JOMRES_MOBILE_REDIRECT_DESC','Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.');

define('_JOMRES_SYSTEM_EMAILS','Emails sent from which address?');
define('_JOMRES_SYSTEM_EMAILS_DESC',"Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");

define('_JOMRES_CSS_CACHING_TITLE',"Use css caching?");
define('_JOMRES_CSS_CACHING_DESC',"");


define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX',"Search calendars show the clear dates checkbox?");

define('_JOMRES_PROPERTYLIST_LAYOUT_LIST',"List view");
define('_JOMRES_PROPERTYLIST_LAYOUT_TILE',"Photo view");

define('_JOMRES_COMPARE',"Compare");
define('_JOMRES_REMOVE',"Remove");
define('_JOMRES_RETURN_TO_RESULTS',"Return to search results");

define('_JOMRES_ADDTOSHORTLIST',"Add to shortlist");
define('_JOMRES_REMOVEFROMSHORTLIST',"Remove from shortlist");
define('_JOMRES_VIEWSHORTLIST',"View your shortlist");

define('_JOMRES_COOKIEPOLICY_TITLE',"Cookie Policy");
define('_JOMRES_COOKIEPOLICY_DESC',"EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show shortlist, search results etc). 
<br/>
Set this option to Yes to enact this policy.");

define('_JOMRES_COOKIEPOLICY_1',"Important: Cookie Policy");
define('_JOMRES_COOKIEPOLICY_2',"We use cookies to help keep our site relevant and easy to use.");
define('_JOMRES_COOKIEPOLICY_3',"Read more...");
define('_JOMRES_COOKIEPOLICY_4',"EU legislation requires that all websites clearly specify if cookies are being used and their purpose.");
define('_JOMRES_COOKIEPOLICY_5',"The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
define('_JOMRES_COOKIEPOLICY_6',"Yes, I accept the use of cookies in this way.");

define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST','Deposit required is cost of the first night?');
define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC','Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.');

define('_JOMRES_NOTHINGINSHORTLIST',"You haven't added any items to your shortlist.");

define('_JOMRES_MOBILE_SETTINGS',"Mobile device settings");
define('_JOMRES_SIMULATE_MOBILE',"Simulate mobile mode");
define('_JOMRES_SIMULATE_MOBILE_DESC',"Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed.");
define('_JOMRES_SIMULATE_MOBILE_RESTRICTION',"Simulation IP");
define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC',"You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1.");

define('_JOMRES_SAFEMODE',"Enable safe mode?");
define('_JOMRES_SAFEMODE_DESC',"Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");

define('_JOMRES_PRICE_ON_APPLICATION',"POA");

define('_JOMRES_USE_JOMRESEDITOR',"Use Jomres' WYSIWYG editor? (recommended)");
define('_JOMRES_USE_JOMRESEDITOR_DESC',"If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it.");

define('COMMON_NEXT',"Next");
define('COMMON_CANCEL',"Cancel");
define('COMMON_SUBMIT',"Submit");
define('COMMON_SAVE',"Save");
define('COMMON_DELETE',"Delete");
define('COMMON_RETURN',"Return");
define('COMMON_CLOSE',"Close");
define('COMMON_BACK',"Back");

define('COMMON_HOME',"Home");

define('COMMON_NEW',"New");

define('COMMON_SEND',"Send");

define('RECAPTCHA_TITLE',"reCaptcha");
define('RECAPTCHA_INFO',"Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.");
define('RECAPTCHA_PUBLIC_KEY',"Public key");
define('RECAPTCHA_PRIVATE_KEY',"Private key");


define('_JOMRES_BOOKINGFORM_LOCK_TITLE',"Lockfile timeout");
define('_JOMRES_BOOKINGFORM_LOCK_DESC',"To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.");


define('_JOMRES_BOOTSTRAPSWITCH',"Enable Jomres' Bootstrap templates and functionality?");
define('_JOMRES_BOOTSTRAPSWITCH_DESC',"If you are running a bootstrap enabled template in the frontend of this site set this option to Yes.");

define('COMMON_ACTION',"Action");
define('COMMON_VIEW',"View");

define('BACKTOTOP',"Back to top");

define('_JOMRES_INPUTFILTERING_LEVEL_WEAK',"Weak");
define('_JOMRES_INPUTFILTERING_LEVEL_STRONG',"Strong");

define('_JOMRES_INPUTFILTERING',"Input filtering");
define('_JOMRES_INPUTFILTERING_LEVEL_TITLE',"Input filtering level");
define('_JOMRES_INPUTFILTERING_LEVEL_DESC',"Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. ");
define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE',"Allowed input tags");
define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC',"You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default.");
define('_JOMRES_INPUTFILTERING_INPUTS_TITLE',"Allowed inputs");
define('_JOMRES_INPUTFILTERING_INPUTS_DESC',"You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space.");


define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE',"Property details in tabs?");
define('_JOMRES_PROPERTYDETAILS_INTABS_DESC',"Set this option to show property details in tabs. Set it to no to show them without tabs.");

define('COMMON_PRINT',"Print");

define('COMMON_EDIT',"Edit");
define('COMMON_COPY',"Copy");


define('_JOMRES_BOOTSTRAPSWITCH_INFO',"Joomla 3 includes Twitter's Bootstrap framework by default, and Jomres has templates and functionality that will use these templates. By default, if you're running Jomres on Joomla 3 these switches are set to Yes but you can set them to No if so desired (not recommended). If you're running a version of Joomla lower than Joomla 3 you can still opt to use the Jomres Bootstrap templates and functionality, however by default these options are set to No.");
define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND',"Use Jomres Bootstrap templates in the frontend?");
define('_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR',"Use Jomres Bootstrap templates in the administrator area?");

define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS',"Here are some alternatives you might want to consider.");
