<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Translated to pt-PT by Mario Oliveira, Camara de Lobos, Madeira Island, Portugal, 17Set2010 - www.marioliveira.net - Updated 21Jun2011 for ver 5.1
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
##################################################################
define('_JOMRES_COM_MR_QUICKRESDESC','Reserva rápida');
define('_JOMRES_COM_MR_SHOWPROFILES','Perfis');
define('_JOMRES_COM_MR_QUICK______DESC','Deixado em branco intencionalmente');
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Configuração geral');
define('_JOMRES_COM_MR_BACK','Voltar');
define('_JOMRES_COM_MR_YES','Sim');
define('_JOMRES_COM_MR_NO','Não');
define('_JOMRES_COM_MR_NEWTARIFF','Novo');
define('_JOMRES_COM_MR_NEWPROPERTY','Nova propriedade');
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Nova característica da propriedade');
define('_JOMRES_COM_MR_NEWGUEST','Novo cliente');
define('_JOMRES_COM_MR_SAVE','Guardar');
// View bookings
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Nome');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Data de chegada');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Data de partida');
define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK','em branco');
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Designar funções de administrador');
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Nome');
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Nome de utilizador');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Autorizado');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Propriedade por defeito');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Alterar');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Nível de acesso');
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Utilizador modificado');
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','N/A');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Recepção');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Gerente da propriedade');
// Edit bookings
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Todas as reservas');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Novas reservas (Por pagar)');
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Editar reservas para ');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Chegada/Partida');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Cliente');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Quarto');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Pagamento');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Cancelar reserva');
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Nome');
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Sobrenome');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Nº porta');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Rua/Local');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Cidade/Localidade');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Cód. postal');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telef. fixo');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Telemóvel');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','Endereço email');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Pedidos especiais: ');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Note que pedidos especiais poderão ter preço acrescido');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Nr/design casa');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Rua');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Localidade');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Cód. postal');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telef. fixo');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Telemóvel');
define('_JOMRES_COM_MR_EB_GUEST_MOSRES_CANCELBOOKING','Cancelar reserva');
define('_JOMRES_COM_MR_EB_GUEST_MOSRES_USER_EXPL','Iserid do website');
define('_JOMRES_COM_MR_EB_GUEST_MOSRES_HOUSE_EXPL','Número ou nome da casa');
define('_JOMRES_COM_MR_EB_GUEST_MOSRES_STREET_EXPL','Rua');
define('_JOMRES_COM_MR_EB_GUEST_MOSRES_TOWN_EXPL','Cidade');
define('_JOMRES_COM_MR_EB_GUEST_MOSRES_POSTCODE_EXPL','Código Postal');
define('_JOMRES_COM_MR_EB_GUEST_MOSRES_LANDLINE_EXPL','Telefone');
define('_JOMRES_COM_MR_EB_GUEST_MOSRES_MOBILE_EXPL','Telemóvel');
define('_JOMRES_COM_MR_EB_GUEST_MOSRES_FAX_EXPL','Fax');
define('_JOMRES_COM_MR_EB_GUEST_MOSRES_EMAIL_EXPL','Email');
define('_JOMRES_COM_MR_EB_GUEST_MOSRES_PREFERENCES_EXPL','Preferências');
define('_JOMRES_COM_MR_EB_GUEST_MOSRES_CAR_REGNO_EXPL','Matrícula do carro');
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dias até à chegada');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Năo pode cancelar esta reserva. O cliente já deu entrada.');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Cancelar reserva');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Confirmar o cancelamento da reserva');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Reserva cancelada');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Tipo de reserva');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Preta');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Balcão');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
define('_JOMRES_COM_MR_EB_ROOM_NAME','Nome do quarto');
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Número do quarto');
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Andar');
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Desactivar acesso disponível?');
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Máx pessoas');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Tipo de quarto');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Descrição do tipo de quarto');
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Características do quarto');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Pagamento efectuado');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Introduzir pagamento');
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Total a pagar');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Referência da caução');
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Número de reserva');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Caução');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Caução gravada');
// Edit Language
define('_JOMRES_COM_MR_QUICKRES_STEP1_Em alternativa','Em alternativa');
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Apartamentos disponíveis');
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Propriedade');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Tipo de quarto');
// Display guest form
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Editar dados do cliente');
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Nome');
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Sobrenome');
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Nr');
define('_JOMRES_COM_MR_DISPGUEST_STREET','Rua');
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Localidade');
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Código Postal');
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Telefone');
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Telemóvel');
define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Nr Cartão de crédito');
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Cartão emitido em');
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Cartão expira em');
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Número de emissão');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Nome no cartão');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Seleccione um apartamento');
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Dias de permanência');
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Número de pessoas');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Total');
// Rooms tab
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Ver configurações de apartamentos/propriedade');
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Apartamentos');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Características dos apartamentos');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Tipos de apartamentos');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Propriedade');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Características da propriedade');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Quarto');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Tipo');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Nome');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Nş');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Andar');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Desactivar acesso?');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Máximo pessoas');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Características');
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Quarto adicionado');
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Editar');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Características do quarto');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Descrição das características');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Característica do quarto adicionada');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Característica do quarto alterada');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Tipo de quarto');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Abreviatura de tipo de quarto');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Descrição do tipo de quarto');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Tipo de quarto adicionado');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Tipo de quarto alterado');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Editar');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Nome');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Rua');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Cidade');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Regiăo');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','País');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Código postal');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Tel');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','Email');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Website');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Características');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Propriedade adicionada');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Propriedade actualizada');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Característica da propriedade');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Abreviatura da característica da propriedade');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Descrição completa das características da propriedade');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Característica da propriedade adicionada');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Característica da propriedade actualizada');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Tarifa');
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Título da Tarifa');
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Descrição');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Válida de');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Valida até');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Taxa por noite');
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Mín dias');
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Máx dias');
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Mín pessoas');
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Máx pessoas');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Tipo de quarto');
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignorar PPPN');
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Permitir fins de semana');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Tarifa adicionada');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Tarifa actualizada');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Editar');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Clonar');
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Tarifa apagada');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Editar tarifa');
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Feriado');
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Reserva guardada');
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Reservar');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Registar entrada');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Registar saída');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Listar reservas');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','Listar NOVAS reservas');
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Calendário de reservas');
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Clientes');
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Configurações');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Ver disponibilidade');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Confirmar os seus dados');
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Primeiro nome');
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Sobrenome');
define('_JOMRES_FRONT_MR_EB_GUEST_MOSRES_HOUSE_EXPL','Nş');
define('_JOMRES_FRONT_MR_EB_GUEST_MOSRES_STREET_EXPL','Rua');
define('_JOMRES_FRONT_MR_EB_GUEST_MOSRES_TOWN_EXPL','Cidade');
define('_JOMRES_FRONT_MR_EB_GUEST_MOSRES_POSTCODE_EXPL','Código postal');
define('_JOMRES_FRONT_MR_EB_GUEST_MOSRES_LANDLINE_EXPL','Telefone fixo');
define('_JOMRES_FRONT_MR_EB_GUEST_MOSRES_MOBILE_EXPL','Telemóvel');
define('_JOMRES_FRONT_MR_EB_GUEST_MOSRES_FAX_EXPL','Fax');
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Não existem apartamentos disponíveis que satisfaçam os parâmetros especificados');
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Obrigado pela sua reserva, e desejamos-lhe desde já uma excelente estadia. A recepção irá brevemente entrar em contacto consigo por telefone ou email para confirmar o método de pagamento.<br><br> <b>Tenha em atenção que se trata apenas de uma reserva preliminar, que será válida após receber uma confirmação nossa, o que faremos o mais rapidamente possível.</b><br></center>');
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Reserva feita para a propriedade: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Reserva feita para o quarto: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Chegada: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Partida: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Nome: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Telefone fixo: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Telemóvel: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','O valor do contrato é de: ');
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Reserva do cliente ');
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Escolha cliente ');
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Cliente reservou em ');
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Nenhum cliente é suposto chegar hoje');
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Cliente marque sua saída ');
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','Nenhum cliente é suposto partir hoje');
// Config panel
define('_JOMRES_COM_A_SUPPLIMENTS','Suplementos');
define('_JOMRES_COM_A_TARIFFS','Tarifas e Moeda');
define('_JOMRES_COM_A_DISCOUNTS','Descontos');
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Upload de ficheiros');
define('_JOMRES_COM_A_CURRENT_SETTINGS','Definições actuais');
define('_JOMRES_COM_A_EXPLANATION','Explicação');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Suplementos por single');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Assegure-se de que selecciona Sim se quiser cobrar suplementos por pessoa só');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Suplemento por "single"');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Percentagem do depósito necessário?');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','A percentagem do depósito necessário é da reserva total? Se năo, entăo ao depósito será aplicado um valor fixo');
define('_JOMRES_COM_A_DEPOSIT_VALUE','Valor de depósito necessário');
define('_JOMRES_COM_A_TARIFFS_PER','Por pessoa, por noite');
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Escolha Sim se pretende que seja cobrado no esquema pessoa-por-noite. Se năo, os custos serăo calculados com base em por-quarto-por-noite');
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Tamanho do ficheiro');
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Tamanho máx. da imagem em Kilobytes');
define('_JOMRES_FRONT_MR_BOOKED','Registado');
define('_JOMRES_COM_CONFIRMATION_TITLE','Carta de confirmação');
define('_JOMRES_COM_CONFIRMATION_DEAR','Caro ');
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Custo por noite - por quarto ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Detalhes da reserva');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Obrigado por reservar no');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Abaixo está um sumário dos detalhes da sua reserva. Por favor confirme que os seus dados estão correctos e contacte-nos se existir algum erro.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','O seu quarto estará reservado até à sua chegada, sendo o check-in depois das 14 h.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Ficamos à espera de lhe dar as boas vindas em ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Esperemos que tenha uma estadia agradável.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Agora temos de chamar a sua atenção para a seguinte linha.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Relembramos-lhe que uma reserva é um contrato legalmente vinculativo, logo se por qualquer motivo necessita de cancelar ou atrasar a sua reserva, será responsável por pagar a sua totalidade.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Não serão feitas deduções por refeições não tomadas nem por quartos não ocupados durante todo o período da reserva. Assim, recomendamos vivamente que utilize um seguro de férias.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Despesas de cancelamento ou alteração</i> Se cancelar as suas férias entăo terá de ser por escrito. As taxas para cancelamentos são as seguintes:');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 dias ou mais');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Apenas o depósito.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 a 30 dias');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% do total do contrato.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Até 14 dias da data de chegada');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% do total do contrato.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','IVA incluído à taxa em vigor.');
define('_JOMRES_COM_CONFIRMATION_PRINT','Imprima a carta de confirmação');
define('_JOMRES_COM_INVOICE_TITLE','Impressão de Factura');
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Número de noites: ');
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Contrato inicialmente acordado: ');
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Custo por noite: ');
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Total');
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Obrigado por ter escolhido ');
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Esperamos voltar a vê-lo.');
define('_JOMRES_COM_INVOICE_PRINT','Imprimir pagamento');
define('_JOMRES_COM_ADDSERVICE_TITLE','Adicionar serviço a cobrar');
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Descrição do serviço');
define('_JOMRES_COM_ADDSERVICE_VALUE','Valor do serviço');
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Outros items cobrados');
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Outros itens cobrados. Valor total: ');
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Item adicionado à conta');
define('_JOMRES_UPLOAD_IMAGE','Upload de imagem');
define('_JOMRES_FILE_UPLOAD','Upload de ficheiro');
define('_JOMRES_FILE_ERROR_TYPE','Só é permitido o upload de ficheiros do tipo:\n');
define('_JOMRES_FILE_ERROR_EMPTY','Por favor escolha um ficheiro para transferir');
define('_JOMRES_FILE_ERROR_NAME','O ficheiro só pode conter caracteres alfanuméricos e sem espaços.');
define('_JOMRES_FILE_ERROR_SIZE','Tamanho máximo excedido.');
define('_JOMRES_FILE_NOT_UPLOADED','O ficheiro não foi transferido.');
define('_JOMRES_FILE_UPDATED','O ficheiro foi transferido.');
define('_JOMRES_COM_A_JSCALENDAR','Calendário JS');
define('_JOMRES_COM_A_CALENDARLANGUAGE','Ficheiro de idioma do Calendário JS');
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Escolha o idioma que deve ser usado no calendário Javascript. Note que parece haver actualmente alguns problemas com o calendário Javascript. Por alguma razão, apenas o ficheiro de língua inglesa parece funcionar. Veja http://sourceforge.net/tracker/?atid=544285&group_id=75569&func=browse para informação adicional.');
define('_JOMRES_COM_A_CALENDARCSS','Ficheiro CSS do Calendário JS');
define('_JOMRES_COM_A_CALENDARCSS_DESC','Escolha o ficheiro CSS que deve ser usado com o calendário Javascript');
define('_JOMRES_COM_A_ODDS','Diversos');
define('_JOMRES_COM_A_ERRORCHECKING','Listar chamadas de minicomponentes');
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Mude para Sim para ver um <i>Log</i> dos minicomponentes invocados ao fundo da página após o Jomres ter terminado de funcionar. Isto também desactiva a funcão de redireccionamento interno. É util se está a tentar identificar que minicomponentes estão a executar determinados serviços.');
define('_JOMRES_FILE_DELETE','Apagar esta imagem');
define('_JOMRES_FILE_DELETED','Ficheiro apagado');
define('_JOMRES_COM_MR_ROOM_DELETE','Apagar quarto');
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Não é possível apagar este quarto, ainda se encontram reservas para ele. Cancele as reservas e tente outra vez.');
define('_JOMRES_COM_MR_ROOM_DELETED','Quarto apagado');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Apagar característica do quarto');
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Não foi possível remover a característica deste quarto, pois é a mesma para vários apartamentos. Remova a característica para esses apartamentos e tente novamente.');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Característica do quarto apagada');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Apagar característica da propriedade');
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Năo foi possível remover caracteristica da propriedade, pois está ligada a uma propriedade. Remova a caracteristica dessa propriedade e tente novamente.');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Característica da propriedade apagada');
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Apagar tipo de quarto');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Náo é possível apagar este tipo pois está atribuido a um quarto. Atribua a esse quarto um outro tipo e tente outra vez.');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Não é possível apagar este tipo de quarto pois está associado a uma tarifa. Tente atribuir a tarifa a outro tipo de quarto e tente outra vez.');
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Tipo de quarto apagado');
define('_JOMRES_COM_MR_PROPERTY_DELETE','Propriedade apagada');
define('_JOMRES_COM_MR_PROPERTY_DELETED','Propriedade apagada');
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Não tem autorização para apagar esta propriedade.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Largura da imagem em tamanho real');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Mapa');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Descrição da propriedade');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Horas de check in');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Actividades na área');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Direcções para os automobilistas');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Aeroportos');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Outros transportes');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS',' Condições');
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Endereço');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Os visitantes podem reservar online');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Escolha sim para garantir que os visitantes podem reservar apartamentos online.');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','As reservas săo para um periodo fixo');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Se seleccionar Sim entăo as reservas serăo para um periodo fixo. Se escolher Năo, tem de garantir que o dia suposto de chegada năo será escolhido como Sim (a năo ser que especifique que obriga as pessoas a chegar num certo dia, caso contrário năo terá muitos links no calendário das disponibilidades).');
define('_JOMRES_COM_A_FIXEDPERIOD','Período da reserva: ');
define('_JOMRES_COM_A_BOOKING','Reserva de apartam./quartos');
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Períodos máximos, por ex. 3 x 7 períodos de reserva = 21 dias');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','É uma propriedade única (SRP)?');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','Por ex., está a alugar toda uma propriedade, em lugar de quartos numa propriedade. Se for este o caso, deve assegurar-se de que só tem um quarto registado em cada uma dessas propriedades.');
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Rever reserva');
define('_JOMRES_COM_MR_CONFIRMBOOKING','Confirmar reserva');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Segunda-feira');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Terça-feira');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Quarta-feira');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Quinta-feira');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Sexta-feira');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Sábado');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Domingo');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Seg');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Ter');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Qua');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Qui');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Sex');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Sáb');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Dom');
define('_JOMRES_COM_A_AVLCAL','Calendário de disponibilidade');
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Cor do tipo de letra, para o dia corrente');
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Cor do tipo de letra, para os dias no ecrã do mês ');
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Cor do tipo de letra, para os dias que não estão no ecrã do mês');
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Cor de fundo para a célula, para os dias em que uma propriedade/quarto está disponível');
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Cor de fundo para a célula, para os dias que não estão no ecrã do mês');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Cor de fundo da célula, para os dias ocupados');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Cor de fundo da célula, para apartamentos reservados provisoriamentes (reservas para as quais não tenha havido depósito)');
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Cor de fundo da célula, para datas passadas');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Ocupado/Não disponível');
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Disponível para reservas');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Reservas provisórias');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Dia de chegada pré-definido');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Apenas para sites que oferecem períodos fixos de reservas. Escolha o dia em que a chegada tem de ocorrer.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Dia de chagada fixo');
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Período durante o qual tenciona ficar (dias)');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Ver calendários de disponibilidades?');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Escolha Sim para ver o calendário das disponibilidades');
define('_JOMRES_FRONT_AVAILABILITY','Disponibilidade');
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Clique numa data livre para ver o formulário da reserva.');
define('_JOMRES_FRONT_BLACKBOOKING','Indisponibilidades');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Estado');
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Auditoria de alterações');
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Nova indisponibilidade');
define('_JOMRES_FRONT_DELETEGUEST','Remover cliente');
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Cliente removido');
define('_JOMRES_MR_AUDIT_ARCHIVE','Arquivar todos os registos');
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE','registos arquivados');
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','O auditor arquivou os registos verificados');
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Impossível apagar este cliente uma vez que existem reservas abertas por ele. Cancele-as e tente outra vez.');
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Utiliz. desconhecido');
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Custo actual do Quarto: ');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Olá');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Obrigado por fazer a sua reserva em ');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Sumário das seguintes reservas:');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Se tiver alguma questão relativamente às reservas ou outro dos nossos serviços, por favor contacte-nos');
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Chegada pendente');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','A chegar hoje');
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Actualmente residente');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','A partir hoje');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Partida ultrapassada');
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Ainda não chegou');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','O nosso número de telefone é ');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Em alternativa pode contactar-nos por email em ');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Fumador');
define('_JOMRES_FRONT_ROOMSMOKING_EITHER','Ambivalente');
define('_JOMRES_COM_CALENDAROUTPUT','Formato do Calendário');
define('_JOMRES_COM_CALENDAROUTPUT_DESC','Permite ao utilizador modificar o formato das datas de saída do Mosres');
define('_JOMRES_COM_CALENDARINPUT',' Formato de introdução do Calendário');
define('_JOMRES_COM_CALENDARINPUT_DESC','Permite ao utilizador mudar o formato das datas do Mosres.');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Os períodos fixados para reserva permitem intervalos curtos');
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Extensão do período mais curto');
// Translate from here
// V1.4
define('_JOMRES_COM_A_GATEWAYLIST','Gateways');
define('_JOMRES_COM_A_CANCEL','Cancelar');
define('_JOMRES_FRONT_BLACKBOOKING_DESC','P.f. escolha o(s) quarto(s) que pretende retirar de serviço, e as datas respectivas dates. <br>Se um quarto não tiver uma marca de verificação, não pode ser incluído nas indisponibilidades até que todas as reservas relativas tenham sido completadas/canceladas.<br/>Quando tiver seleccionado as datas apropriadas, clique no botão azul "Aplicar" para reverificar a disponibilidade do quarto. ');
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Parece que o Joomla pôs termo ao seu login por inactividade</b><br />Por favor faça login e tente de novo.');
define('_JOMRES_COM_A_EXTRAS','Mostrar extras quando da reserva?');
define('_JOMRES_COM_A_EXTRAS_DESC','Defina Sim se quiser mostrar quaisquer extras que pretenda propor ao hóspede');
define('_JOMRES_JR_BLACKBOOKING_REASON','Motivo');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Usar <i>gateways</i> de pagamento?');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Defina para Sim se quiser usar <i>gateways</i> ou estruturas de pagamento online. <b>Nota:</b>Esta opção não desactiva o cálculo de depósito mostrado durante o processo de reserva. Para o desactivar, pode editar os <i>templates</i> (temas) que mostram os quartos e retirar os elementos que se referem a depósitos.');
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','P.f. escolha o método de pagamento.');
define('_JOMRES_COM_A_GATEWAY_ENABLED','<i>Gateway</i> activado?');
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Modificada a definição do <i>plugin</i>');
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Inserida a definição do <i>plugin</i>');
define('_JOMRES_FRONT_GALLERYLINK','Ver o website desta propriedade');
define('_JOMRES_COM_A_GALLERYLINK','Ligação externa');
define('_JOMRES_COM_A_GALLERYLINK_DESC','Introduza aqui uma ligação para o seu <i>website</i>.');
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Cartão de crédito visto');
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Cartão de crédito actualizado');
define('_JOMRES_MR_CREDITCARD_EDIT','Editar cartão de crédito');
define('_JOMRES_COM_A_EDITICON','Tamanho dos ícones');
define('_JOMRES_COM_MR_EXTRA_TITLE','Extras');
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Carga em grupo de imagens da propriedade');
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Imagens já na pasta');
define('_JOMRES_COM_A_SLIDESHOWS','Slideshows');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Mostrar ligação para os slideshows?');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Mostrar slideshow em linha?');
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Altura do alvo das imagens reduzidas do slideshow');
define('_JOMRES_FRONT_SLIDESHOW','Slideshow');
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Desculpe, mas não há imagens para esta propriedade');
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Mostrar ligação para as tarifas?');
define('_JOMRES_COM_A_POPUPSALLOWED','<i>Popups</i> permitidos?');
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Se definido para Não, as ligações que normalmente se teriam aberto num <i>popup</i> abrir-se-ão em linha. EXPERIMENTAL! ');
define('_JOMRES_FRONT_IMAGEUPLOADS','Carga de imagens em conjunto');
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Use este formulário para carregar múltiplas imagens desta propriedade.<br/><b>Note que quaisquer imagens com o mesmo nome serão sobrepostas</b>. Note também que este formulário não carrega imagens específicas de quartos na imagem do cabeçalho da propriedade, e que terá para isso de as carregar a partir da Secção de Admin de Propriedade.<br/><b>Note</b> que as imagens carregadas serão colocadas na pasta /images/stories/jomres/*property_uid*. Se esta pasta não existir, será criada, a menos evidentemente que tenha sido especificado um directório alternativo na configuração.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Admin. Extras');
define('_JOMRES_COM_MR_EXTRA_DESC','Descrição');
define('_JOMRES_COM_MR_EXTRA_NAME','Nome');
define('_JOMRES_COM_MR_EXTRA_PRICE','Preço');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filtrar por nome de utilizador');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filtrar por operação');
define('_JOMRES_MR_AUDIT_LISTING_DATE','Data');
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Utilizador desconhecido');
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Quarto criado');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Quarto actualizado');
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Quarto eliminado');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Caract. quarto criada');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Caract. quarto actualizada');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Caract. quarto eliminada');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Tipo de quarto inserido');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Tipo de quarto actualizado');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Tipo de quarto apagado');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Propriedade criada');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Propriedade actualizada');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Propriedade eliminada');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Caract. propr. criada');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Caract. propr. actualizada');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Caract. propr. eliminada');
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Pormen. propr. editados');
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Propr. publicada.');
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Tarifa criada');
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Tarifa actualizada');
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Tarifa eliminada');
define('_JOMRES_MR_AUDIT_ADDSERVICE','Desp. serviço adicionada');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Data entr. de Hóspede');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Dada saída de hóspede');
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Entr. de depósito');
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Hóspede criado');
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Hóspede actualiz.');
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Hóspede removido');
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Quarto reservado');
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Extra criado');
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Extra actualiz.');
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Extra eliminado');
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Extra publicado');
define('_JOMRES_EXTRAS_NOEXTRAS','Não há extras a incluir na conta');
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Assinado em representação de ');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filtrar por data');
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Extras opcionais.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Editar idioma');
define('_JOMRES_FRONT_MR_SEARCH_HERE','Pesquisar aqui por: ');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Quartos constantes da lista de indisponibilidades');
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Indisponib. introduzida');
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Indisponib. eliminada');
define('_JOMRES_MR_AUDIT_LISTING_TIME','Hora');
define('_JOMRES_MR_AUDIT_LISTING_USER','Utilizador (nome de utilizador)');
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operação');
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Ver detalhes');
define('_JOMRES_COM_A_AUDITING_SHOWING','Nr de registos não arquivados: ');
define('_JOMRES_A_TABS_MISC','Diversos');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Data de início de indisponibilidade');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Indisponibilidade');
define('_JOMRES_A','Configuração do site');
define('_JOMRES_A_GLOBALPFEATURES','Use características globais da propriedade');
define('_JOMRES_A_GLOBALPFEATURES_DESC','Defina Sim se quiser forçar todas as propriedades a usar somente as características de propriedade definidas pelo webmaster.');
define('_JOMRES_A_GLOBALPFEATURES_INFO','Para atribuir uma imagem a esta característica precisa primeiro de carregar as suas imagens de características de propriedades à pasta /images/stories/jomres/pfeatures/ folder. ');
define('_JOMRES_A_ICON','Ícone');
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Seleccione o plugin de pesquisa que quer usar.');
define('_JOMRES_FRONT_NORESULTS','<b>Desculpe, mas a sua pesquisa não mostra quaisquer resultados. P.f. modifique-a e tente novamente.</b>');
define('_JOMRES_AREYOUSURE','Tem a certeza de querer fazer isto?');
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Reservar um quarto');
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Reservar esta propriedade');
define('_JOMRES_COM_MR_DISPGUEST_CCV','Código de segurança');
//v1.4c
define('_JOMRES_COM_A_RESET','Reiniciar');
define('_JOMRES_COM_FRONT_ROOMTAX','Taxa');
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Mostrar tarifas em linha?');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Endereço');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Informação detalhada');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Clique para ver Quartos e Disponibilidade');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Mostrar informação de tarifas');
define('_JOMRES_COM_A_SMOKING','Mostrar opção fumador?');
define('_JOMRES_COM_A_SMOKING_DESC','Defina Sim se quiser mostrar a opção fumadores.');
define('_JOMRES_COM_A_SMOKING_OPTION','Opção fumador por defeito');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Limitar reservas antecipadas?');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Defina Sim se quiser limitar as reservas antecipadas (use o campo seguinte para definir o nr de dias de limite). Se definir Sim, e se o utilizador tentar reservar com um número superior de dias de antecipação, a sua data de chegada será reposta para a data de hoje');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Dias fixados para limitar reservas antecipadas:');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Mostrar informação de endereço abaixo desta ligação');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Mostrar informação detalhada de propriedade abaixo desta ligação');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Mostrar quartos e disponibilidade abaixo désta ligação');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Mostrar informação de tarifas abaixo desta ligação');
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Tarifas de taxa uniforme');
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Médias');
define('_JOMRES_COM_A_TARIFFS_MODEL','Que modelo de tarifas quer usar?');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Nº de estrelas');
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Tem duas opções de método de cálculo de tarifas. O primeiro, o 'taxa uniforme' permite-lhe oferecer diversas tarifas diferentes ao hóspede, sendo a taxa da estadia a mesma para todo o período desta. Isto é útil se quiser oferecer diversas tarifas diferentes para a mesma data, por ex. tarifa Cama e Pequeno Almoço e tarifa Cama, Pequeno Almoço e Jantar. Escolha a tarifa 'médias' se pretender ajustar os seus preços em função da data em questão. O Jomres encontrará todas as tarifas para cada dia da reserva, adiciona-as e apresenta a taxa média durante todo o período.");
// v1.4e
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Mostrar <i>input</i> de data de partida?');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Defina Não se não quiser mostrar o campo para introdução de data de partida. Use esta opção apenas se souber bem o que está a fazer, porque deste modo a data de partida nas reservas será sempre definida como a do dia a seguir ao de chegada.");
// v1.4f
define('_JOMRES_COM_PROPERTYLISTDESC','Limite da descrição');
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Limita o número de caracteres mostrados na listagem da propriedade, quando se selecciona a descrição desta.");
// v1.4g
define('_JOMRES_COM_A_DATEFORMATSTYLE','Formato da data() usada?');
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Seleccione Sim para formatar as datas de acordo com o parâmetro date() (veja <a href="http://www.php.net/manual/en/function.date.php">aqui</a>). Defina para Não para utilizar o formato strftime() (veja <a href="http://www.php.net/manual/en/function.strftime.php">Here</a> eg. %b %d %Y ');
define('_JOMRES_COM_MR_VRCT_PUBLISH','Clique para publicar');
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Clique para despublicar');
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Cor de fundo de erro de introdução');
define('_JOMRES_COM_CONFIGCOUNTRIES','País por defeito no formulário de reserva');
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Mais info');
define('_JOMRES_JAVASCRIPT_','Os campos assinalados com uma estrela vermelha são de preenchimento obrigatório.');
define('_JOMRES_COM_PTYPES_LIST_TITLE','Listar tipos de propriedades');
define('_JOMRES_COM_SELFREGISTRATION','Os utilizadores podem registar propriedades?');
define('_JOMRES_COM_SELFREGISTRATION_DESC','Defina Sim se quiser que os utilizadores possam registar as suas próprias propriedades sem intervanção de Administrador.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','P.f. introduza o País e região da sua propriedade.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','P.f. complete os pormenores da sua propriedade.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','IOs campos assinalados com uma estrela vermelha são de preenchimento obrigatório.');
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Propriedade criada');
define('_JOMRES_REGISTRATION_NOTALLOWED',"Desculpe, mas não pode criar uma propriedade neste sistema. Deve ser um utilizador registado e com <i>login</i> feito, e não deve ter criando ainda nenhuma propriedade.");
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Criada a propriedade: ');
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Para o utilizador: ');
define('_JOMRES_FRONT_PREVIEW','Antever');
define('_JOMRES_COM_MONTHSTOSHOW','Meses de calendário a mostrar');
define('_JOMRES_COM_MONTHSTOSHOW_DESC','Na disponibilidade dos quartos, quantos meses de calendário devem ser mostrados?');
// v1.4i
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Mostrar calendário desde o início do ano?');
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','O calendário de disponibilidade é mostrado desde o início do ano corrente.');
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Nr de quartos disponíveis');
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Voltar aos pormenores da propriedade');
define('_JOMRES_FRONT_ROOMTYPES','Tipos de quarto');
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Saldo a pagar');
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>NOTA: Não é recomendado que defina ambas as opções seguintes para Sim, pois deve usar somente um dos cálculos de taxas disponíveis. </FONT>');
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Editar item');
// v2
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Use este formulário para fazer a sua reserva. Coloque o cursor do rato sobre as imagens "i" para informação adicional sobre a coluna. Defina ou altere os pormenores da reserva, como por exemplo datas de chegada e partida e número de hóspedes, depois seleccione o(s) quarto(s) que pretende na lista dos disponíveis. Clique em qualquer deles para os adicionar à sua reserva. Quando tiver terminado, pode adicionar quaisquer extras opcionais que possa desejar e completar o formulário com os seus dados pessoais. Quando o formulário contiver informação suficiente proporcionar-lhe-á um botão de confirmação para finalizar a reserva.');
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Use este formulário para fazer a sua reserva. Coloque o cursor do rato sobre as imagens "i" para informação adicional sobre a coluna. Altere os seus detalhes de reserva, como sejam datas de chegada e partida, e quantidade de hóspedes. Quando terminar, pode adicionar extras opcionais que possa desejar, e indicar os pormenores do seu endereço. Quando o formulário contiver informação suficiente proporcionar-lhe-á um botão de confirmação para finalizar a reserva.');
define('_JOMRES_AJAXFORM_PARTICULARS','Detalhes da reserva');
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Seleccione os pormenores do seu pedido de reserva');
define('_JOMRES_AJAXFORM_AVAILABLE','Disponibilidade ');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Seleccione os quartos que pretende');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Veja aqui se a propriedade está disponível nesta altura.');
define('_JOMRES_FRONT_PTYPE','Tipo de propriedade');
define('_JOMRES_AJAXFORM_EXTRAS','Extras opcionais');
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Seleccione quaisquer extras que queira incluir na sua reserva');
define('_JOMRES_COM_PERDAY','por noite');
define('_JOMRES_AJAXFORM_ADDRESS','Os seus dados');
define('_JOMRES_AJAXFORM_ADDRESS_DESC','P.f. introduza os elementos necessários. Atenção aos campos obrigatórios.');
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Quartos disponíveis');
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Quartos seleccionados');
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>A data de chegada mais próxima possível é: ');
define('_JOMRES_AJAXFORM_BILLING_ROOM','Por noite:');
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Total:');
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Extras:');
define('_JOMRES_AJAXFORM_BILLING_TAX','Taxa:');
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Desconto:');
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Total Geral:');
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Hóspedes');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Clique agora para adicionar este quarto à sua selecção');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Click now to remove this room from your selection');
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Tipos de hóspede');
define('_JOMRES_VARIANCES_TYPE','Tipo');
define('_JOMRES_VARIANCES_TYPE_TT','Tipo de cliente, por ex. Adulto, Criança, ou Estudante ');
define('_JOMRES_VARIANCES_NOTES','Notas');
define('_JOMRES_VARIANCES_NOTES_TT','Notas que queira tomar acerca deste tipo de cliente');
define('_JOMRES_VARIANCES_MAXIMUM','Máximo');
define('_JOMRES_VARIANCES_MAXIMUM_TT','Nr máximo de clientes deste tipo que podem ser seleccionados no formulário de reserva');
define('_JOMRES_VARIANCES_ISPERCENTAGE','Em percentagem?');
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','O valor calculado é uma percentagem do valor Base calculado para o quarto. Se for definido para Não, então o valor especificado é simplesmente adicionado ou subtraído ao valor base do quarto.');
define('_JOMRES_VARIANCES_POSNEG','Adicionar variação?');
define('_JOMRES_VARIANCES_POSNEG_TT','O valor calculado é adicionado ou retirado ao valor Base calculado para o quarto. Defina para Não se quiser que este seja um desconto ao valor Base. ');
define('_JOMRES_VARIANCES_VARIANCE','Variação');
define('_JOMRES_VARIANCES_VARIANCE_TT','Valor da variação');
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Ordem de tipo de cliente alterada');
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Tipo de cliente publicado');
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Tipo de cliente eliminado');
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Tipo de cliente criado');
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Tipo de cliente actualizado');
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Tipo de cliente actualizado');
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Mostrar ligação para a lista de quartos na página de pormenores da propriedade?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Mostrar <b>somente</b> calendário de disponibilidade/lista de quartos?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Defina como Sim para desactivar a exibição do cabeçalho da propriedade e dos detalhes, de modo a que apenas a lista de quartos/calendário de disponibilidade na secção de pormenores da propriedade. Destinado somente a utilizadores que aluguem propriedades de um só quarto (únicas), <i>cottages</i>, etc.');
define('_JOMRES_COM_A_MINIMUMINTERVAL','Intervalo mínimo chegada-saída');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','O intervalo mínimo no formulário de reserva, entre as datas de chegada e de partida.');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Mostrar nr do quarto na lista de quartos do formulário de reserva');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Mostrar nome do quarto na lista de quartos do formulário de reserva');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Mostrar título da tarifa na lista de quartos do formulário de reserva');
define('_JOMRES_ORDER','Ordem');
define('_JOMRES_REQUIREDFIELDS','Requeridos');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Dias antes da chegada');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','O número mínimo de dias que devem decorrer desde "hoje", antes da data de chegada.');
define('_JOMRES_DTV','Variantes de tipo de data');
define('_JOMRES_DTV_DOW','Dia da semana');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Número de hóspedes por defeito');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Número, por defeito, do primeiro tipo de hóspede. Se utiliza tipos de hóspede, este é o número por defeito que será definido para o primeiro tipo de cliente visível no formulário de reserva.');
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Só utilizadores registados podem reservar online?');
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Desculpe, tem de se registar para poder reservar online. Clique aqui para se registar neste site. ');
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Cor do tipo de letra para as reservas correntes');
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Rebordos assinalando fim de semana');
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','O quarto está marcado');
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Indisponibilidade');
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Arredondar para cima o depósito?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Cobrar depósitos?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Tarifas guardadas como valores semanais?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Tem a opção de guardar as tarifas como valores diários ou semanais. Se os guardar como semanais, TEM DE definir esta opção como Sim.');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Taxa por semana');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Recorr. das datas de chegada fixas: ');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Quando são seleccionadas datas de chegada fixas, o nr de datas que pode ser mostrado na lista <i>dropdown</i>. Note que a lista de datas não incluirá nenhuma data se uma reserva não for possível devido a reservas anteriores, e que a lista será na realidade duas vezes mais longa que o número seleccionado, porque terá um número similar no histórico de datas (quando isto se aplicar)');
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Opção fumador inválida');
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Data de chegada incorrecta');
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Data de partida incorrecta');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','A reserva tem uma duração demasiado curta. Têm de decorrer pelo menos estes dias entre as datas de chegada e de partida: ');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','O seu intervalo é');
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Variante tipo de hóspede incorrecta');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Seleccione o número/tipo de hóspedes');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Tem demasiadas pessoas no grupo para as tarifas seleccionadas');
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Escolheu mais quartos do que o número de hóspedes');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Demasiados hóspedes para as camas disponíveis');
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Precisa de escolher mais quartos');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Seleccione um quarto');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','O primeiro nome é requerido');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','O sobrenome é requerido');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Nr/nome de casa é requerido');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','A rua é requerida');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','A cidade é requerida');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','A região é requerida');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','O código postal é requerido');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','O País é requerido');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','O telefone fixo é requerido');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','O telemóvel é requerido');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','O endereço email é requerido');
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','O endereço email não é válido');
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Não é possível validar o domínio email');
define('_JOMRES_SRP_WEHAVEVACANCIES','Temos alojamentos disponíveis!');
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Ainda não há quartos seleccionados');
define('_JOMRES_BOOKING_NUMBER','Reserva nr');
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Ok para reservar, cor de fundo da caixa de mensagem');
define('_JOMRES_COM_DUMPTEMPLATEDATA','<i>Dump</i> das variáveis de tema?');
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Utilize para permitir um <i>dump</i> DHTML de variáveis de tema para cada tema de <i>front end</i> à medida que essa página for vista. Útil se quiser ver se um determinado elemento está disponível para ser usado num dado tema (template).');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','O valor é percentagem?');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Defina como Sim se o valor de cálculo por pessoa só é uma percentagem. Caso contrário, será aplicado o valor directo indicado.');
//v2rc2
define('_JOMRES_COM_LIMITROOMSLIST','Limite de quartos disponíveis/tarifa');
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Use este parâmetro para limitar o número de quartos & tarifas disponíveis entre as que são listadas no formulário de reserva. Defina para zero se não quiser definir nenhum limite. ');
define('_JOMRES_SRP_WEHAVENOVACANCIES','Não há disponibilidades nesta data!');
// Introduced in v2.5
// v2.6
define('_JOMRES_BOOKITNOW','Reserve agora: ');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Modo de edição global?');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Tenha cuidado com esta função. Se estiver definida Sim, o modo de dição afectará o texto adaptável de TODAS as propriedades no sistema, para a constante que estiver a editar.');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Símbolo global de moeda');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Componente confinado');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Defina Sim se o componente for confinado de tal modo que não sejam visíveis as áreas de módulo e de cabeçalho');
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Gerente de Propriedade');
define('_JOMRES_COM_WEEKENDONLY','Apenas fins de semana');
define('_JOMRES_COM_WEEKENDDAYS','Dias de fim de semana');
define('_JOMRES_COM_WEEKENDDAYS_DESC','Defina os dias de fim de semana. As tarifas que permitem, ou não, fins de semana utilizarão esta definição quando gerarem a lista de quartos.');
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Seleccione o seu País antes de adicionar qualquer informação sobre a propriedade');
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Guarde as alterações à sua propriedade antes de carregar uma imagem');
define('_JOMRES_TARIFFSFROM','Preços desde - ');
define('_JOMRES_SEARCH_ALL','Tudo');
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Pesquisar por País');
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Pesquisar por região');
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Pesquisar por localidade');
define('_JOMRES_SEARCH_FEATURE_INFO','Pesquisa de características.');
define('_JOMRES_SEARCH_BUTTON','Pesquisar');
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Introduza uma palavra de pesquisa e tecle no botão.');
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Palavra(s) de pesquisa: ');
define('_JOMRES_SEARCH_AVL_INFO','P.f. introduza as datas em que tenciona chegar e partir, para complementar pesquisa de disponibilidade');
define('_JOMRES_SEARCH_PTYPES','Listar todas as propriedades por tipo.');
define('_JOMRES_SEARCH_RTYPES','Listar todas as propriedades por tipo de quarto.');
define('_JOMRES_SORTORDER_DEFAULT','Por defeito');
define('_JOMRES_SORTORDER_PROPERTYNAME','Nome da propriedade');
define('_JOMRES_SORTORDER_PROPERTYREGION','Região da propriedade');
define('_JOMRES_SORTORDER_PROPERTYTOWN','Cidade da propriedade');
define('_JOMRES_SORTORDER_STARS','Estrelas');
define('_JOMRES_PATHWAY_PROPERTYLIST','Lista de propriedades');
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Detalhes da propriedade - ');
define('_JOMRES_PATHWAY_BOOKINGFORM','Formulário de reserva');
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Actualize os seus detalhes de morada');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','A reverificar disponibilidade de quartos<br/>(A selecção de quartos será reinicializada)');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','A reverificar disponibilidade');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','A modificar os seus extras opcionais');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','A alterar a sua selecção de quartos');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','A actualizar os seus detalhes de morada');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Desculpe, um ou mais campos de endereço está(ão) incorrecto(s).');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Imagem do quarto');
define('_JOMRES_CURRENCYFORMAT','Formato de moeda');
define('_JOMRES_MANAGEROPTIONSASIMAGES','Mostrar as opções dos Gerentes como imagens');
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Opções de pesquisa');
define('JOMRES_COM_A_AVAILABLELOGS','Logs disponíveis');
define('JOMRES_COM_A_LOGS_NOENTRIES','Não há entradas de <i>logs</i>. Isto é normal, porque precisa de modificar manualmente o ficheiro jomres.php para activar o registo de <i>logs</i>');
define('JOMRES_COM_A_MESSAGE','Mensagem');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normal');
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Avançado');
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Micromanage');
define('JOMRES_COM_A_TARIFFMODE','Modo de configuração de tarifa');
define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Aviso: Alternar entre tipos diferentes de tipos de tarifa pode resultar em perda de dados.<br /> Veja a nota abaixo sobre isto</b>.
<br/>
Tem três opções para configurar as suas tarifas.<br/>
Modo normal: Terá uma tarifa para cada tipo de quarto, válida para os próximos 10 anos.<br/>
Micromanage: Pode modificar o valor de cada e em cada dia diferente para cada tipo de quarto/propriedade. <br/>
Avançado: O \"velho\" método Jomres de gerir tarifas. <br/>
<br/>
Os diferentes modos permitem escolher o método e configurar tarifas que melhor se adapte à sua preferência.<br/>
O modo Normal é o mais simples e fácil de entender porque cruza referências de quartos e tarifas com tipos de quarto/propriedade e permite configurar quartos e preços na mesma página.<br/>
O Micro manage permite variar as tarifas numa base diária sem ter que gerir quartos ou tarifas; é feito por cruzamento de referências de muitas tarifas diferentes entre si. isto resulta num certo número de tarifas que são criadas para si cobrindo um determinado período de tempo, mas não pode sobrepor tarifas umas em relação às outras.<br/>
O modo Avançado deixa-o criar um quarto e associá-lo com um tipo de quarto. Cria então uma tarifa e associa essa tarifa com um tipo de quarto. Utilizando este método é possível \"sobrepor\" tarifas umas sobre as outras, por exemplo um quarto do tipo \"Cama dupla\" pode ter uma tarifa para <i>bed & breakfast</i> (dormida e pequeno almoço) e outra para dormida, pequeno almoço e jantar. O m
etodo avançado requer um pouco mais de atenção ao pormenor, porque é possível dissociar um quarto ou tarifa de um tipo de quarto/propriedade, ou incorrectamente definir datas De e PARA, mas dá-lhe opções de configuração que os outros modos não proporcionam. <br/>
<br/>
Porque os modos Normal e Micromanage requerem uma definição específica de quartos e tarifas, para que o modo tarifa funcione o sistema pode necessitar de reiniciar alguns dados para tornar as configurações actuais de tarifas compatíveis com o presente modo de edição de tarifa.<br/>
<br/>
Normal -> Avançado. Não muda. As tarifas existentes são mantidas.<br/>
Normal -> Micromanage. Todas as tarifas existentes são removidas.<br/>
Avançado -> Normal. Todas as tarifas existentes são removidas.<br/>
Avançado -> Micromanage. Todas as tarifas existentes são removidas.<br/>
Micromanage -> Avançado. Todas as referências cruzadas existentes entre tarifas são removidas, mas as próprias tarifas permanecem inalteradas.<br/>
Micromanage -> Normal. Todas as referências cruzadas e tarifas são removidas.<br/>");
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Mostrar lista de quartos na página de pormenores da propriedade?');
define('JOMRES_PROPERTYTYPE','Tipo de propriedade');
define('JOMRES_COM_A_SRPONLY','SRP (Single Rooom Propriety - Propriedade Única) somente');
define('JOMRES_MAXPEOPLEINROOM','Máx pessoas por quarto');
define('JOMRES_MAXPEOPLEINBOOKING','Máx pessoas na reserva');
define('_JOMCOMP_BOOKINGNOTES_ADD','Adicionar nota');
define('_JOMCOMP_BOOKINGNOTES_EDIT','Editar nota');
define('_JOMCOMP_BOOKINGNOTES_DELETE','Apagar nota');
define('_JOMCOMP_BOOKINGNOTES_VIEW','Ver notas');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Nova nota adicionada');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Nota editada');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Nota apagada');
define('_JOMCOMP_MYUSER_MENUTITLE','As minhas opções');
define('_JOMCOMP_MYUSER_LISTBOOKINGS','Listar reservas');
define('_JOMCOMP_MYUSER_MYBOOKINGS','As minhas reservas');
define('_JOMCOMP_MYUSER_VIEWBOOKING','Ver reserva');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Ver favoritos');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','Ainda não adicionou quaisquer favoritos!');
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Adicionar a favoritos');
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Tipo de propriedade');
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Propriedades no site');
define('_JOMCOMP_WISEPRICE_TITLE','Preço sensato');
define('_JOMCOMP_WISEPRICE_ACTIVE','Activo');
define('_JOMCOMP_WISEPRICE_TITLE_DESC','Este <i>plugin</i> permite-lhe disponibilizar e configurar os preços dos seus quartos dinamicamente.');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Muitos comerciantes recalculariam os preços dos quartos com base no número de quartos de um dado tipo requerido, disponíveis numa determinada data. Este modo permite-lhes oferecer descontos num tipo de quarto que não estiver ocupado durante um determinado período, com o objectivo de atrair marcações que de outro modo poderiam perder-se.<br/>Activando e configurando este plugin permite oferecer preços ajustáveis baseados no número de quartos de um certo tipo seleccionado que estejam disponíveis na propriedade num determinado dia.<br/>O intervalo de dias define o número de dias que devam decorrer até à data de chegada, antes de os preços dos quartos serem ajustados por este utilitário. As opções de percentagem permitem configurar a percentagem de quartos que podem estar disponíveis antes de um dado desconto ser aplicado.');
define('_JOMCOMP_WISEPRICE_THREASHOLD','Intervalo (Nr de dias entre a chegada e hoje)');
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Percentagem de quartos ocupados < 10%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Percentagem de quartos ocupados < 25%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Percentagem de quartos ocupados < 50%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Percentagem de quartos ocupados < 75%');
define('_JOMCOMP_WISEPRICE_DISCOUNT','Desconto %');
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' foi descontado de ');
define('_JOMCOMP_WISEPRICE_TO',' para ');
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Preço de quarto não descontado ');
define('JOMRES_COM_A_MAPSKEY','Chave API Google maps');
define('JOMRES_COM_A_MAPSKEY_DESC','Pode obter uma chave API do Google Maps em <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Depois de a ter obtido e inserido aqui, o Jomres mostrará o mapa na página de pormenores da sua propriedade.');
define('JOMRES_COM_A_USE_SSL','Usar SSL no formulário de reserva?');
define('JOMRES_COM_A_USE_SSL_DESC','Precisa de se assegurar de que tem um certificado SSl válido para ');
define('_JOMCOMP_LASTMINUTE_CPANEL','<i>Last minute</i>');
define('_JOMCOMP_LASTMINUTE_ACTIVE','Activo?');
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Defina Sim se quiser realizar negócios <i>last minute</i>.');
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Limiar');
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','Se uma reserva for feita e a data de chegada for apenas de N dias contados desde a data de reserva, então pode ser aplicado este desconto');
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Desconto');
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','Em percentagem');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','Foi aplicado um desconto a esta reserva!');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','O custo da estadia foi reduzido em ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','Esta propriedade oferece um desconto <i>last minute</i> de  ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' por cento, se reservar de modo a chegar antes de ');
define('_JOMCOMP_LASTMINUTE_ORMORE',' por cento ou mais se reservar de modo a chegar antes de ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Reserve agora para aproveitar ao máximo esta oferta!');
define('JOMRES_COM_A_VERBOSETARIFFINTO','Informação verbosa da tarifa');
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Defina Sim para mostrar informação de tarifas mais detalhada no <i>popup</i> detalhes da propriedade/tarifa');
define('JOMRES_COM_A_MINIMALCONFIG','Minimizar opções de configuração');
define('_JOMCOMP_AMEND','Corrigir reserva - Selecção de propriedade');
define('_JOMCOMP_AMEND_SELECTPROPERTY','Seleccione nova propriedade');
define('_JOMCOMP_AMEND_HEADER','Contrato original:');
define('_JOMCOMP_AMEND_DEPOSITPAID','Depósito pago');
define('_JOMCOMP_AMEND_DEPOSITDUE','Depósito não pago');
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Sobrepor ao total');
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Sobrepor ao depósito');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
define('_JRPORTAL_CANCEL','Cancelar');
define('_JRPORTAL_CPANEL','Painel de controlo do JRPortal');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Comissão por defeito');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Escolha a comissão por defeito que serrá aplicada a uma propriedade, na eventualidade de não ser definida de outro modo qualquer comissão.');
define('_JRPORTAL_CPANEL_LISTCRATES','Listar comissões');
define('_JRPORTAL_CPANEL_PATETITLE','Comissões');
define('_JRPORTAL_CRATE_TITLE','Título');
define('_JRPORTAL_CRATE_TYPE','Tipo');
define('_JRPORTAL_CRATE_VALUE','Comissão');
define('_JRPORTAL_CRATE_CURRENCYCODE','Cód. moeda');
define('_JRPORTAL_CPANEL_LISTPROPERTIES','Listar propriedades');
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Nome da propriedade');
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Endereço da propriedade');
define('_JRPORTAL_PROPERTIES_LEGEND','Para as propriedades cujo fundo for vermelho, ainda não foi definida qualquer comissão.');
define('_JRPORTAL_STATS_PATETITLE','Estatísticas');
define('_JRPORTAL_STATS_STATTYPE','Estatísticas para: ');
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Propriedades - Cliques');
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Propriedades vistas');
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Nr de reservas');
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Valor das reservas');
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Estimativa de comissões');
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Comissões');
define('_JRPORTAL_CPANEL_LISTBOOKINGS','Listar reservas');
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Id da propriedade');
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Id do hóspede');
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Id do filiado');
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Id da Factura');
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Total reserva');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Id do contracto');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Contracto nr');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Cód. moeda');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Criado');
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Arquivado');
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Data de arquivo');
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Adicionar item à conta');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Gerente a facturar');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Propriedade associada (se aplicável)');
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Valor');
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Descrição');
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Item a cobrar inserido com êxito em ");
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"Ver encomendas");
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Erro ao inserir item a cobrar em ");
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Erro, não especificou um valor para a conta");
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','Pode ter ficheiro de idioma específicos para tipo de propriedade, definindo a descrição como o nome de uma sub-pasta, por ex. "alugueriates" e copiando um ficheiro de idioma para essa sub-pasta. Poderá então modificar esse ficheiro de idioma para este tipo de propriedade de modo a que quartos se tornem, ainda por exemplo, DVDs, etc.');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','Não pode eliminar esta propriedade, porque é a única à qual tem acesso. Se quiser desactivá-la, utilize a opção despublicar na barra de ferramentas. ');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','Se esta instalação for uma demonstração e tenciona actualizar para Jomres Solo (limite de apenas uma propriedade) então deve primeiro criar uma nova propriedade, depois apagar esta antes de alterar a sua chave de licença para a de Solo, que lhe será atribuída no momento da compra do software. ');
define('_JOMRES_COM_EMAILERRORS',"Mensagens de registo de erros de email?");
define('_JOMRES_COM_EMAILERRORS_DESC',"Defina Sim se quiser copiar o jomres.net automaticamente quando for criada uma mensagem de registo de erro. Isto permite-nos ser proactivos na nossa tentativa de lidar com problemas potenciais, na esperança de resolvê-los antes ainda que você se aperceba deles. Note que esta definição não está activa em 'localhost'. ");
define('_JOMRES_COM_ISTHISANMRP',"Esta propriedade é um hotel/<i>bed and breakfst</i>/pousada/pensão? ");
define('_JOMRES_COM_ISTHISANMRP_DESC',"As opções de configuração diferem conforme esteja a alugar quartos numa propriedade, ou toda a própria propriedade. Seleccione MRP (<i>multi room property</i>, ou propriedade de quartos múltiplos) se está a oferecer quartos, SRP (<i>single room property</i>, ou propriedade única) se está a oferecer a propriedade como um todo. ");
// Jomres v3.0.6
define('_JOMRES_COM_JOMRESEMAILCHECK',"Usar o verificador de email Jomres? ");
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Reforça uma verificação mais restritiva dos email enviados. Alguns servidores web seguros devolvem um erro interno 500 se tentar enviar um email para um endereço não existente. Activar esta opção permite-nos verificar características checkdnsrr no php antes de tentar enviar um email, evitando assim estes erros 500. ");
// Jomres v3.1
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Total de hospedagem");
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"noite(s) a");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"por quarto ");
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Total de Melhore a Sua Estadia ");
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Resumo de preços ");
define('_JOMRES_CONFIRMATION_ALERT',"Por favor leia e concorde com ");
define('_JOMRES_CONFIRMATION_HEADER',"Abaixo verá um resumo da sua reserva.<br />Para fazer alterações, p.f. clique no botão de Alterar reserva.");
define('_JOMRES_CONFIRMATION_AMENDTEXT',"Se precisar de alterar qualquer informação acima, clique aqui");
define('_JOMRES_CONFIRMATION_AMEND',"Alterar Reserva");
define('_JOMRES_CONFIRMATION_SPECIALS',"P.f. introduza qualquer pedido(s) especial(ais) na caixa abaixo.");
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"Confirmo que a informação acima está correcta e concordo com as ");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"por pessoa por noite ");
// Jomres 3.1.10
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Ficheiro de idioma por defeito");
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Escolha o ficheiro de idioma que o Jomres deva usar por defeito, se o idioma não tiver sido definido pelo Joomfish.");
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF'))
	define('_PN_OF','de');
if (!defined('_PN_START'))
	define('_PN_START','Início');
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Anterior');
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Seguinte');
if (!defined('_PN_END'))
	define('_PN_END','Fim');
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Resultados');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Note que isto não é um formulário de reserva, está apenas a enviar um email. Digite a mensagem que pretende enviar a ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contactar hotel');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Formulário de perguntas à propriedade ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Obrigado pela sua mensagem, enviada para o endereço de contacto respectivo e copiada para o seu próprio, para seu conhecimento. Terá uma resposta logo que possível.');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' acerca de ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Digite os caracteres que vê na imagem');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','Não posso ler os caracteres. Gerar uma ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Enviar');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','nova imagem');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Pergunta');
define('_JOMRES_BOOKINGFORM_LOOKRIGHT','P.f. seleccione o alojamento desejado na lista á direita');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Mín. de quartos já seleccionado');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Já foi seleccionado o número mínimo de quartos antes de ser disponibilizada a combinação tarifa/tipo de quarto. Permite-lhe ter tarifas descontadas quando mais de N quartos já estiverem seleccionados. ');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Máx. de quartos já seleccionado');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Número máximo de quartos já seleccionado na reserva antes da combinação tarifa/quarto ser disponibilizada. Permite-lhe deixar de oferecer esta combinação tipo de quarto/tarifa após N quartos terem sido seleccionados no formulário de reserva. ');
define('_JOMRES_COM_SPS_EDITROOM_DESC','Note que os suplementos de pessoa só aqui definidos não serão usados se a opção Suplementos por Pessoa Só estiver definida como Sim na Configuração Geral. As definições aqui feitas são uma alternativa a ter Suplementos por Pessoa só com taxas fixas, e não como uma adição a SPS com taxa fixa.');
define('_JOMRES_AVLCAL_NOBOOKINGS',"Disponível"); 
define('_JOMRES_AVLCAL_QUARTER',"Algumas reservas");
define('_JOMRES_AVLCAL_HALF',"Semi-completo");
define('_JOMRES_AVLCAL_THREEQUARTER',"Quase tudo marcado");
define('_JOMRES_AVLCAL_FULLYBOOKED',"Totalmente cheio");
define('_JOMRES_COM_SEF_URL_PREFIX','Prefixo URL');
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','Este é o primeiro item mostrado após o domínio - Mude para o que quiser - Se não pretender fazê-lo deixe-o em branco');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','Ver o <i>alias</i> ds tarefa de propriedade');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','<i>alias</i> fazer reserva');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','<i>alias</i> de tarefa de pesquisa');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Adicionar País ao URL');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Adicionar região ao URL');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Adicionar cidade ao URL');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Adicionar propriedade ao URL');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Adicionar nome de propriedade ao URL');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Anexar id da propriedade ao nome da propriedade');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','se o nome da propriedade for definido Não, o id não será usado. Se definido Sim, então o URL parecer-se-á com fawlty_towers-1');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Pesquisar estrutura URL - Adicionar País ao URL');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Pesquisar estrutura URL - País por defeito');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','Se todas as propriedades estiverem num único País, não terá opção para pesquisar por País - introduza aqui um País poor defeito se quiser mostrá-lo');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Pesquisar estrutura URL - Adicionar região ao URL');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_REGION','Pesquisar estrutura URL - Região por defeito');
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','Se todas as suas propriedades estiverem numa só região, não tem região na pesquisa - introduz aqui uma região por defeito se quiser mostrá-la');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Pesquisar estrutura URL - Adicionar cidade ao URL');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Pesquisar estrutura URL - Cidade por defeito');
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Pesquisar estrutura URL - Tipo de propriedade');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Search URL Structure - Tipo de propriedade por defeito');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Usado no URL se a pesquisa for para todos os tipos de propriedade');
define('_JOMRES_COM_SEF_NOTINSTALLED','Ou o she404sef não está instalado, ou ainda não copiou '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Depois de ter instalado sh404sef e/ou copiado os ficheiros acima, poderá configurar os seus URLs SEF aqui. ');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Auto-detectar o idioma da calendário Javascript');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Permitit a auto-detecção do idioma dos calendários Javascript? Se não for possível fazer isto, regressar-se-á ao idioma configurado abaixo');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Por semana');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Por dia');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Por reserva');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Por pessoa por reserva');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Por pessoa por dia');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Por pessoa por semana');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Por dias (mín. dias)');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Por dias X quartos seleccionados');
define('_JOMRES_REGISTRYREBUILD','Reconstruir o registo de minicomponente');
define('_JOMRES_REGISTRYREBUILD_NOTES',"Normalmente o registo de plugins Jomres é reconstruído automaticamente sempre que vir o gestor de plugins e adicionar ou remover um. No entanto, é possível que por alguma razão não possa usar esta característica. Portanto, pode usar esta função para reconstruir manualmente o registo. Se tem acesso ao gestor de plugins e aos <i>upgrades</i> não será provável que precisa da função. Precisará de reconstruir o registo sempre que adicionar um novo mini-componente e não o fizer utilizando o gestor de plugins.");
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registo reconstruído com êxito');
define('_JOMRES_REGISTRYREBUILD_FAILURE','Houve um erro ao reconstruir o registo de mini-componentes. Deve verificar a listagem de erros Jomres para ver se existe alguma referência ao que originou este erro.');
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Editar tipo de propriedade');
define('_JOMRES_SEARCH_PRICERANGES','Pesquisa por gama de preços.');
define('JOMRES_WORD_SAVING','A guardar...');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','Usar moeda global?');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Defina Sim para forçar todas as propriedades a utilizar a mesma moeda (por ex., & 8 3 6 4;)');
define('_JOMRES_COM_A_CURRENCYCODE','Código de moeda');
define('_JOMRES_COM_PTYPES_PTYPE','Tipo de propriedade');
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Descrição do tipo de propriedade');
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Publicada');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Usar pormenores da Propriedade Composta?'); 
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','O Jomres 3.3 introduziu os pormenores da propriedade composta, onde a saída de todos os detalhes da propriedade é enviada para um ficheiro de tema (composite_property_details.html). Se não quiser usar esta função defina Não (espera-se que somente os utilizadores existentes definam Não, os novos provavelmente defini-la-ão como Sim)');
define('_JOMRES_PROFILELIST_INSTRUCTIONS','Esta é uma lista de todos os utilizadores do sistema. Os não-gestores de propriedade serão assinalados por um ícone de convidado, os restantes terão um ícone Recepção/Gestor de Propriedade/Super-gestor de propriedade.<br/>Na primeira vez que o Jomres é instalado é automaticamente adicionado um "admin" como gestor de propriedade e é considerado um utilizador autorizado.<br/>Devem ser designados não-super gestores de propriedade a, pelo menos, uma propriedade; de outro modo verão um erro quando tentarem fazer login e usar o Jomres.<br/>A partir do momento em que um utilizador é autorizado, poe editar o seu perfil, atribuir-lhe propriedades ou conceder-lhe privilégios de super-gestor de propriedade.<br/>Para autorizar um utilizador, clique na cruz vermelha a seguir ao nome. Para lhe retirar autorização, clique na marca de verificação verde.<br/>Para atribuir utilizadores apenas a propriedades específicas, ou dar-lhes privilégios de super-gestor de propriedades, autorize-os, depois clique no ícone editar (que é visível apenas depois de terem sido autorizados). Utilizadores que tenham registado as suas propriedades por si próprios serão automaticamente associados com essa propriedade. Os super-gestores de propriedades tem automaticamente privilégios sobre todas as propriedades, e verão todas as opções de configuração mesmo que a opção de minimizar configuração tenha sido definida na Configuração do Site.');
define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Pode aqui designar um gerente para uma determinada propriedade. Assegure-se de que não sejam um super-gestor de propriedades, de que tenha privilégios sobre pelo menos uma propriedade, pois de outro modo verão um erro quando fizerem login. Para atribuir privilégios a um gestor de propriedades/recepcionista apenas sobre determinadas propriedades, assegure-se de que o <i>dropdown</i> super-gestor de propriedades não esteja definido como Sim.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Data de reinício do serviço');
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','Ainda não fez nenhuma reserva!');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Tipo de propriedade');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edite o tipo da sua propriedade');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Seleccione o tipo da sua propriedade');
define('_JOMRES_COM_LOGGING','<i>Logging</i>Jomres');
define('_JOMRES_COM_LOGGING_WARNING','Estas opções permitem-lhe activar/desactivar o <i>logging</i> Jomres. A relação de erros está sempre activada, mas outras, como sejam as de reservas, <i>gateways</i>, do sistema e dos pedidos podem ser ligadas ou desligadas. Fica avisado de que a <b>capacidade de activar estas listagens é concedida puramente como uma forma de facilitar a detecção de erros, mas comporta um grande risco de segurança</b> porque é fácil a utilizadores externos ver as suas listagens sem estar autorizados; portanto, fica alertado para que deve manter as listagens desactivadas a maior parte do tempo. Se as tiver activado, então quando as desactivar deve assegurar-se de que a pasta <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> não contém nenhuma das antigas listagens. Note que activar as listagens reduzirá significativamente o desempenho do seu sistema, porque recolhe uma grande quantidade de informação.');
define('_JOMRES_COM_LOGGING_BOOKING','Listagem de formulários de reserva (motor de Reservas) ');
define('_JOMRES_COM_LOGGING_GATEWAY','Listagens de Gateway (por ex., paypal, etc) ');
define('_JOMRES_COM_LOGGING_REQUEST','Listagens de pedidos (todos os que chegam ao servidor)');
define('_JOMRES_COM_LOGGING_SYSTEM','Sistema (listagens diversas) ');
define('_JOMRES_COM_LOGGING_JRPORTAL','Portal JR (principalmente para registar comissões, etc) ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','A sua pergunta...');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Mostrar imagem de tipo de quarto na lista de quartos do formulário de reserva');
define('_JOMRES_COM_A_LISTLIMIT','Limite da lista de propriedades');
define('_JOMRES_COM_A_LISTLIMIT_DESC','Número de propriedades a mostrar na página após uma pesquisa');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Característica de pesquisa integrada');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','A característica de pesquisa integrada Jomres permite aos seus utilizadores pesquisar nas propriedades de acordo com um conjunto de funções. Se já utilizou a função de pesquisa Jomres em Joomla, estará familiarizado com estas definições.<br/>Esta característica permite-nos oferecer manuseamento de pesquisas no Jomres para os utilizadores que não querem usar os módulos de pesquisa Joomla, para utilizadores de outros CMS em que esses sistemas não disponham de módulos análogos.<br/>Lembre-se apenas de que se escolher pesquisar algo através de um <i>link</i> (i.e., não um <i>dropdown</i>) não serão implementadas outras opções de pesquisa, mas somente o elemento que corresponde ao <i>link</i> no qual clicou.<br/>Note que por defeito o <i>layout</i> desta pesquisa integrada não é muito atractivo. Isto deve-se a que o ficheiro de tema que executa o layout tem de incluir todas as opções possíveis, algumas das quais são incompatíveis. Para melhorar o layout e conseguir o aspecto que possa desejar, precisará de editar <b>srch.html</b> na pasta <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Activar esta função?');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','Se for activada, qualquer chamada ao Jomres que mostre a lista de propriedades significará que as opções de pesquisa são também mostradas.');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Usar colunas');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Qualquer opção de pesquisa que tenha definido como <i>link</i> (se pertinente) será mostrada em colunas (IE br colocado no fim do link)");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Colunas de características");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"O número de ícone de características que pode ser mostrado antes de ser inserido um br para iniciar uma nova linha.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Pesquisar região por <i>dropdown</i> combinado de selecção");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Proporcionar um <i>dropdwon</i> de pesquisa para filtrar por Países/regiões/cidades. Se for utilizar esta característica é melhor não usar as pesquisas por região/cidade a definir abaixo.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Pesquisar por nome de propriedade");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Mostrar a pesquisa por introdução de nome de propriedade.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Mostrar como <i>dropdown</i>?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Defina Não para mostrar a lista como <i>links</i>");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Pesquisar por cidade/região");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Mostrar a pesquisa por introdução de região");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Mostrar como <i>dropdown</i>?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Defina Não para mostrar a lista como <i>links</i>");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Pesquisar por tipo de propriedade");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Mostrar a pesquisa por introdução de tipo de propriedade");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Mostrar como <i>dropdown</i>?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Defina Não para mostrar a lista como <i>links</i>");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Pesquisa por tipo de quarto");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Mostrar a pesquisa por introdução de tipo de quarto");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Mostrar como <i>dropdown</i>?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Defina Não para mostrar a lista como <i>links</i>");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Pesquisar por características");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Mostrar a pesquisa por introdução de características");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Mostrar como <i>dropdown</i>?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Defina Não para mostrar a lista como imagens alusivas e caixas de verificação");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Pesquisar por descrição");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Mostrar a pesquisa por introdução de descrição");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Pesquisar por disponibilidade");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Mostrar a pesquisa por introdução de disponibilidade");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Pesquisar por intervalo de preços");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Mostrar a pesquisa por introdução de intervalo de preços");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Incrementos de intervalo de preços");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"O Jomres pesquisará em todos os valores das tarifas, após o que organiza uma série de incrementos de preços com base nos valores que definir aqui.");
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','Por defeito, se uma propriedade não estiver seleccionada no Jomres este executará uma pesquisa. Se esta não tiver sido desencadeada por um módulo de pesquisa, essa pesquisa produzirá resultados aleatórios (deliberadamente). Esta opção permite-lhe limitar o número de regressos dessa pesquisa aleatória.');
define('_JOMRES_COM_A_CRON_TITLE','Definições e listagens de <i>cron jobs</i>');
define('_JOMRES_COM_A_CRON_DESC','Informação de <i>Pseudocron job</i>. A funcionalidade <i>pseudocron</i> é necessária para manuseamento de facturação e comissões.');
define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Minicomponentes <i>cron</i> instalados. para correr um <i>cron job</i> use as ligações especificadas abaixo. Note que os <i>cron jobs</i> não produzem nenhuma saída, portanto não verá nenhuma informação na página. Em seu lugar, refira-se à listagem <i>cron job</i> abaixo.');
global $jomresConfig_secret;
define('_JOMRES_COM_A_CRON_METHOD','Método');
define('_JOMRES_COM_A_CRON_METHOD_DESC',"Se não triver acesso a <i>cron jobs</i>, defina este como minicomponente; caso contrário, crie um <i>cron job</i> e instrua-o para executar<br /> <i>curl -s ".JOMRES_SITEPAGE_URL_AJAX."&task=cronjobs&tmpl=component&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
define('_JOMRES_COM_A_CRON_LOGGING','Mostrar o <i>logging</i> no browser');
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Só funciona se o método estiver definido como minicomponente.');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','<i>Logging</i> activado');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Defina Sim para permitir <i>logging</i>. Os resultados dos registos serão mostrados abaixo.');
define('_JOMRES_COM_A_CRON_VERBOSELOGS','<i>Logging</i> verboso');
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Muitas listagens de <i>logging</i>');
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Edição de temas (templates)');
define('_JOMRES_COM_TEMPLATEEDITING_DESC','Esta funcionalidade permite-nos editar os temas Jomres do <i>frontend</i> no servidor, guardando os resultados na base de dados. Característica avançada, tenha muito cuidado com ela.');
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Nome do tema');
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','O tema foi adaptado?');
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Campos à medida');
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Pode definir aqui campos adaptados a casos específicos, que serão mostrados no formulário de reserva.');
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Nome do campo (sem espaços)');
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Valor por defeito');
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Descrição');
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Requerido');
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Quantidade máxima');
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','Se a quantidade máxima for definida para maior do que 1, os visitantes terão um <i>dropdown</i> para escolher a quantidade de extras que podem pedir.');
define('_JRPORTAL_INVOICES_ISSUE',"Emitir facturas");
define('_JRPORTAL_TAXRATES_TITLE',"Taxas");
define('_JRPORTAL_TAXRATES_CODE',"Código de taxa");
define('_JRPORTAL_TAXRATES_DESCRIPTION',"Descrição de taxa");
define('_JRPORTAL_TAXRATES_CANNOTDELETE',"Não pode eliminar esta taxa.");
define('_JRPORTAL_TAXRATES_RATE',"Val. taxa");
define('_JRPORTAL_INVOICES_TITLE',"Facturas");
define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Não pagas");
define('_JRPORTAL_INVOICES_STATUS_PAID',"Pagas");
define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Canceladas");
define('_JRPORTAL_INVOICES_STATUS_PENDING',"Pendentes");
define('_JRPORTAL_INVOICES_USER',"Utilizador");
define('_JRPORTAL_INVOICES_STATUS',"Estado");
define('_JRPORTAL_INVOICES_RAISED',"Levantadas");
define('_JRPORTAL_INVOICES_DUE',"Devidas");
define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subscrição");
define('_JRPORTAL_INVOICES_INITTOTAL',"Total geral");
define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Total renovação");
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Frequência de renovação");
define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Dia do mês de renovação");
define('_JRPORTAL_INVOICES_CURRENCYCODE',"Código de moeda");
define('_JRPORTAL_INVOICES_LINEITEMS',"Itens de linha");
define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Nome");
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Descrição");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Preço inicial");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Quant inicial");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Desc inicial");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Total inicial");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Preço renovação");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Quant renovação");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Desconto renovação");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Total de renovação");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Cód.taxa");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Descr. taxa");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Taxa");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Definições Paypal");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Código de moeda (por ex. EUR)");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Usar sandbox?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"O seu endereço email Paypal");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Nota: Para usar o Paypal deve aceder à sua conta e desactivar o Autoreturn (Profile/Website Payment Preferences), e definir o IPN (Profile/Instant Payment Notification Preferences)para o URL:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_AJAX."&task=completebk");
// define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"Esta factura está em pagamento. P.f. clique no botão para ser encaminhado para a Paypal.");
define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY'," ");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Sobrepor-se às definições normais do gateway Jomres?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"Se esta opção for definida Sim, diversas coisas sucederão: A Configuração Geral já não mostra quaisquer definições de gateway, e quando for feita uma reserva as definições aqui contidas são as utilizadas, de forma que o pagamento é feito para o endereço aqui introduzido, e não para o que possa ter sido anteriormente definido na Configuração Geral.");
define('_JRPORTAL_INVOICES_SHOWINVOICES',"Mostrar as minhas facturas");
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Límite de pesquisa aleatória');
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Mostrar ligação a Google Currency Conversion na lista de tarifas?');
define('_JOMRES_CURRENCYCONVERSIONTEXT','Converter preço para :');
define('_JOMRES_COM_ALLOWHTMLEDITOR','Permitir aos utilizadores editar usando editores HTML?');
define('_JRPORTAL_COUPONS_TITLE',"Cupões de desconto");
define('_JRPORTAL_COUPONS_DESC',"Podem ser gerados códigos de desconto e transmitidos aos clientes como incentivo a fazer reservas. As datas de validade, dsde e até, referem-se às datas em que pode ser feita uma reserva, e nãos à duração da própria reserva.");
define('_JRPORTAL_COUPONS_CODE',"Código de cupão");
define('_JRPORTAL_COUPONS_VALIDFROM',"Válido desde");
define('_JRPORTAL_COUPONS_VALIDTO',"Válido até");
define('_JOMRES_FRONT_TARIFFS','As nossas tarifas');
define('_JOMRES_FRONT_TARIFFS_TITLE','Nome da tarifa');
define('_JOMRES_FRONT_TARIFFS_DESC','Descrição da tarifa');
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Tipo de quarto/propriedade');
define('_JOMRES_FRONT_TARIFFS_STARTS','Válida desde');
define('_JOMRES_FRONT_TARIFFS_ENDS','Válida até');
define('_JOMRES_FRONT_TARIFFS_PPPN','Por pessoa por noite');
define('_JOMRES_FRONT_TARIFFS_PN','Por noite');
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Não inclui fins de semana');
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Mínimo de dias');
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Máximo e dias');
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Mín. pessoas');
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Máx. pessoas');
define('_JRPORTAL_COUPONS_AMOUNT',"Valor do desconto");
define('_JRPORTAL_COUPONS_ISPERCENTAGE',"O desconto é percentagem?");
define('_JRPORTAL_COUPONS_ROOMONLY',"Quarto apenas");
define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"O desconto aplica-se apenas ao custo do quarto. Se definir Não, o desconto aplica-se ao custo total da reserva.");
define('_JRPORTAL_COUPONS_SQLERROR',"Erro SQL ao tentar eliminar/inserir um cupão");
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','Se tiver um código de cupão, introduza-o neste campo e clique em "Guardar cupão" para guardar os detalhes deste em relação à sua reserva.');
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Guardar cupão');
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Cupão guardado com a reserva');
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Número de cupão não encontrado');
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Valor do desconto do cupão');
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Reserva descontada. Definições do código de cupão/valor do desconto/cupão : ');
define('_JOMRES_COM_CACHING','Usar a função <i>caching</i> do Jomres?');
define('_JOMRES_COM_CACHING_DESC','Defina Não para desactivar a <i>chaching</i> Jomres.');
define('_JOMRES_COM_CHOOSELANGUAGES','Escolha idiomas');
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Escolha as opções de idioma a mostrar no <i>dropdown</i> de selecção de idiomas.');
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Mostrar o <i>dropdown</i> de selecção de idiomas?');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Reservas desmarcadas e canceladas');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Não há indisponibilidades a listar');
/*
* @ignore
*/
define('_JRPORTAL_NEWUSER_DEAR',"Caro(a)");
define('_JRPORTAL_NEWUSER_THANKYOU',"Obrigado por se registar ");
define('_JRPORTAL_NEWUSER_USERNAME',"O seu nome de utilizador é : ");
define('_JRPORTAL_NEWUSER_PASSWORD',"A sua palavra-chave é : ");
define('_JRPORTAL_NEWUSER_LOG_IN',"Por favor faça <i>login</i> para ver as suas reservas ");
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Cupão guardado');
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Cupão eliminado');
// Not used yet
define('_JOMRES_COM_GROWL','Usar sist. mensagens Jomres');
define('_JOMRES_COM_GROWL_DESC','Muitas actualizações para gestão proporcionam <i>feedback</i> sob a forma de uma mensagem Javascript quando a página é recarregada. Use esta opção para activar ou desactivar esta característica.');
define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");
define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Nome de utilizador");
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Palavra-chave");
define('_JRPORTAL_SMS_CLICKATELL_APIID',"Id API");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Telemóvel a notificar");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"P.f. use o formato 'Código de País, nr de telemóvel'. Por exemplo, a um telemóvel com base em Portugal a introdução deve corresponder a algo como '351123456789'. Deixe este campo em branco se não quiser que lhe sejam enviados emails de notificação para o telemóvel.");
define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
<b>Obviamente não pode usar/experimentar a partir do <i>localhost</i>, precisa de fazer isso a partir de um servidor <i>live</i>.</b>
<br/>
<br/>
Para usar o <i>gateway</i> Clickatell gateway precisa de abrir uma conta Clickatell e definir pelo menos uma ligação (gama de sub-produtos API) entre a sua aplicação e o nosso <i>gateway</i> Cada método de ligação é denominado um sub-produto. Eis o que fazer:<br/>
<br/>
<b>Passo 1 - Registe-se e obtenha uma conta Clickatell</b><br/>
Se ainda não tiver uma conta Clickatell, precisa de fazer isso antes de mais. Se já tem uma, prossiga para o passo 2.<br/>
* Vá a http://www.clickatell.com/products/sms_gateway.php, e escolha o sub-produto API apropriado (método de ligação) que quer usar ( Clickatell Central (API) )<br/>
* Clique na hiperligação de registo.<br/>
* Preencha o formulário de registo.<br/>
Depois de ter enviado com êxito o formulário, será automaticamente ligado à sua nova conta e levado para uma página onde pode adicionar a sua ligação API escolhida.<br/>
<b>Passo 2 - Adicione uma ligação API registada (sub-produto)</b><br/>
Se ainda não estiver ligado á sua conta, deve fazê-lo em http://www.clickatell.com/login.php<br/>
* Seleccione \"Gerir os meus produtos\" no menu de topo.<br/>
* Seleccione o tipo de ligação API a usar (API HTTP) no menu <i>dropdown</i> ('Add Connection').<br/>
* Complete o formulário. Assegure-se que introduziu o <i>locked IP</i>(o IP do seu servidor), defina <i>Callback</i> para HTTP POST. Precisa de definir o <i>IP callback</i> para ".$jomresConfig_live_site."/index.php?option=com_jomres&task=sms_clickatell_callback e id de utilizador e password.<br/>
Se tiver mais do que uma ligação API registada, o nome descritivo que introduazir para cada uma deve ser único - não pode ter várias APIs com o mesmo nome.<br/>
Depois de enviar com sucesso o formulário, serão mostrados os pormenores da sua autenticação, incluindo o ID API (api_id) de cada ligação. Estes pormenores são necessários quando se ligar ao gateway Clickatell para enviar uma mensagem.<br/>
<br/>
Utilize o seu id de utilizador, a palavra-chave e o api_id para preencher os campos acima.<br/>
<br/>
");
define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Mostrar acesso a deficientes na lista de quartos do formulário de reserva');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Mostrar nr. máximo de pessoas na lista de quartos do formulário de reserva');
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Nota que os preços de quartos listados são estimativos, e que o preço total da reserva não será calculado até que tenha adicionado um ou mais quartos à sua selecção.");
define('_JOMRES_LASTEDITED_DB','Tema editado pela última vez na base de dados');
define('_JOMRES_LASTEDITED_DISK','Tema editado pela última vez no disco');
define('_JOMRES_LASTEDITED_WARNINGICON','Aviso de tema na base de dados');
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','O tema pode estar desactualizado na base de dados');
define('_JOMRES_LASTEDITED_WARNING','Se for visível um ícone num tema, isso significa que o Jomres detectou que o tema guardado na base de dados <strong><i>pode</i></strong> ser mais antigo que o guardado no disco. Neste caso, é possível que o tema tenha sido actualizado por uma nova versão do Jomres. Caso isto de verifique, é possível que o seu tema possa ter entretanto beneficiado de uma nova característica ou função no Jomres, ou que a funcionalidade existente possa não apresentar os resultados esperados, portanto deve comparar o ficheiro em disco com as suas adaptações para ter a certeza de que não lhe falta nenhuma das novas características.');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Pacotes de subscrição");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Nome");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Descrição");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Publicado");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Frequência");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Período de experiência");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Montante da experiência");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Montante total");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Limite de quartos"); // Not currently used, saved for a rainy day
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Limite de propriedades");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Frequência: M/Q(T)/B/A Mensal/Trimestral/Bianual/Anual");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Período de experiência: Introduza um número inteiro, 0 (zero) para não definir, 1 para 1 mês, 2 para 2 meses, etc");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subscrever");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Introduza/actualize a sua informação de subscrição. Note que todos os campos são requeridos.");
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"Primeiro nome");
define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Sobrenome");
define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Endereço");
define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"País");
define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Cód. postal");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"Precisa de ter uma subscrição válida para criar novas propriedades. Actualmente, adquiriu subscrições para ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," propriedade(s) publicada(s). ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"Pode aumentar o número de propriedades que poderá criar em <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'> adquirindo aí mais pacotes de subscrição.</a>");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," Já usou ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," entradas de propriedades. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"Para ver uma lista das suas propriedades actuais clique <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>aqui</a>. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"Para ver uma lista dos pacotes de subscrição actualmente disponíveis, clique <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>aqui</a>. ");
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Infelizmente, não pode publicar esta propriedade por ter atingido o número máximo que lhe está concedido.");
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Obrigado por ter criado uma subscrição para listar as suas propriedades no nosso servidor. Depois que a sua factura estiver assinalada e paga (pode haver um atraso em função da Paypal), por favor <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>clique aqui para continuar a criar a(s) sua(s) propriedade(s).</a>");
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"Lamentamos que tenha decidido não subscrever o nosso serviço. Por favor diga-nos se podemos auxiliá-lo de qualquer outra forma");
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"Lamentamos, mas atingiu o número máximo de propriedades que pode publicar neste sistema de uma só vez. Pode aumentar este número <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>comprando mais pacotes de subscrição aqui.</a> ");
define('_JRPORTAL_SUBSCRIPTIONS_USE',"Usar a funcionalidade de manuseamento de subscrições");
define('_JOMRES_COM_NEWUSER','Criar novo utilizador ao reservar');
define('_JOMRES_COM_NEWUSER_DESC','Crirar nova conta de utilizador ao ser feita uma reserva por um utilizador não registado.');
define('_JOMRES_CLICKTOREGISTER','Clique aqui para registar a sua propriedade');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Subscrições activas");
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Id do gateway de subscrição");
define('_JRPORTAL_NEWUSER_SUBJECT',"Obrigado pela sua reserva - seguem-se os novos detalhes de utilizador");
define('_JOMRES_LATLONG_DESC',"Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.");
define('_JOMRES_CONTROLPANEL','Painel de Controlo');
define('_JOMRES_COM_FAUXHEADERS','Passar cabeçalhos Javascript Jomres para o corpo do html?');
define('_JOMRES_COM_FAUXHEADERS_DESC','Defina Sim se está a ter problemas com mootools e jQuery Jomres em conflito no IE. isto forçará o Jomres a fazer sair as chamadas Javascript dentro do corpo da página em lugar de o fazer na área HEAD. isto não é HTML válido, no entanto parece resolver os problemas com jQuery e Mootools em conflito mútuo.');
// Jomres v4.2
define('_JOMRES_MANAGER_SHOWINVOICE','Mostrar factura');
define('_JOMRES_MANAGER_SHOWINVOICES','Ver facturas');
define('_JOMRES_USER_LISTMYPROPERTY','Adicionar a minha propriedade a este site');
define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Aviso : ');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"Se quiser, pode ter um pacote grátis no sistema, criando um pacote e definindo quer o montante de experiência quer o total para 0.00");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Desculpe, mas este pacote não é reconhecido.");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Lamento, mas já subscreveu um pacote gratuito, não pode fazê-lo de novo.");
define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Estado <b>0:</b> Pag. pendente <b>1:</b> Criado <b>2:</b> Cancelado <b>3:</b> Fim do período");
define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"A minha conta");
define('_JOMRES_COM_YOURBUSINESS','Os seus detalhes comerciais');
define('_JOMRES_COM_YOURBUSINESS_NAME','Nome comercial');
define('_JOMRES_COM_YOURBUSINESS_VATNO','Nr IVA');
define('_JOMRES_COM_YOURBUSINESSADDRESS','Nr porta/edif.');
define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTA: As taxas seguintes são concebidas para utilização no mercado americano. Se quiser usar uma taxa única (por ex., IVA) para os alojamentos que disponibiliza, por favor escolha uma taxa na opção acima.</FONT>');
define('_JOMRES_INVOICE_NUMBER','Factura Nr. ');
define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Seleccione as datas a que quer aplicar a indisponibilidade. Depois, clique no botão "Aplicar" para reverificar a disponibilidade. <br/> 
<br/> 
Se a propriedade tiver uma ou mais reservas para o período seleccionado, então não pode desmarcar a reserva até que as outras reservas/indisponibilidades tenham sido canceladas/desmarcadas.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Desculpe, não pode marcar indisponibilidade desta propriedade para estas datas.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','Pode marcar indisponibilidade desta propriedade para estas datas.');
define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','A sua propriedade está configurada para cobrar por pessoa, por noite, mas não tem nenhum tipo de hóspedes criado ou publicado. Por favor crie e publique um ou mais tipos de hóspede. ');
define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','Ainda não tem tarifas configuradas, portanto não pode aceitar nenhumas reservas na sua propriedade.');
define('_JOMRES_EDITINGMODE_ON','Modo edição activado');
define('_JOMRES_EDITINGMODE_OFF','Modo edição desactivado');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Cobrar depósitos variáveis?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Os depósitos variáveis permitem-lhe definir se gostaria de cobrar o montante total se a data de chegada da reserva ocorrer a N dias de "hoje". Defina esta opção para Sim para permitir esta característica, e introduza abaixo esse número de dias; portanto, por exemplo, se o dia de chegada ocorrer dentro de 60 dias, então o montante do depósito cobrado será o total, de outro modo esse montante será baseado nas opções de depósito configuradas acima.');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','Número de dias, dentro dos quais o valor total será cobrado como depósito.');
define('_JOMRES_COM_CHARGING_CONFIG','Montante cobrado no momento da reserva');
define('_JOMRES_COM_CHARGING_DEPOSIT','Depósito');
define('_JOMRES_COM_CHARGING_FULLAMT','Montante total');
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Use esta opção para decidir o que deve ser cobrado no momento da reserva. Escolha depósito se deve ser cobrado o depósito, ou montante total se deve ser o total a ser cobrado.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN','Enviar emails de contacto com o Gerente para um endereço alternativo?');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Defina Sim se quiser que os emails de contacto com o Gerente sejam enviados para o endereço que introduzir abaixo. Deixe ficar definido Não para que eles sejam enviados para o endereço definido na área de configuração da propriedade.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Endereço alternativo para os emails de contacto com o Gerente.');
define('_JOMRES_CONFIRMATION_EMAIL_SENT','O email de confirmação foi enviado. Pode fechar esta janela.');
define('_JOMRES_REALESTATE_TITLE','Listagem de Propriedade para venda (Quintas, etc)');
define('_JOMRES_REALESTATE_YESNO','Esta listagem de propriedade refere-se a uma propriedade para venda?');
define('_JOMRES_REALESTATE_YESNO_DESC','Seleccione Sim se está a vender a propriedade, Não se se trata de um hotel/b&b/pousada/villa na qual esteja a alugar por períodos curtos, ou a propriedade inteira ou quartos nesta, e está a utiliar este sistema para receber reservas.');
define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contactar agente');
define('_JOMRES_INVOICE_MARKASPAID','Marcar factura como paga');
define('_JOMRES_INVOICE_MARKEDASPAID','Factura marcada como paga');
define('_JOMRES_APIKEY_REMAKE','Criar nova chave API');
define('_JOMRES_AUTOTRANSLATE_TITLE','Usar Google para traduções iniciais?');
define('_JOMRES_AUTOTRANSLATE_DESC','Esta característica é nova e experimental, portanto use-a por sua conta e risco. O objectivo é interpelar a ferramenta de tradução Google para fazer automaticamente traduções de uma dada propriedade. Note que esta característica limpa todo o <i>input</i>, portanto se usar um editor de html para formatar os pormenores da sua propriedade, esta opção destruirá essa formatação.<br/>');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Esta instalação é para uma única propriedade (SRP)?');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','Se esta opção for definida Sim, a vista de <i>frontend</i> do Jomres para utilizadores não autorizados é grandemente simplificada. As chamadas por defeito ao Jomres desde uma opção de menu, em lugar de obter uma lista de propriedades limita-se a remeter o utilizador para o formulário de reserva da primeira propriedade do sistema. Os gestores de propriedades também não verão o botão de antevisão ds características da propriedade enquadrado na opção de botão para adicionar nova propriedade. Ideal se quer somente listar uma propriedade e aceitar reservas para ela.<br/>');
define('_JOMRES_HTMP_PURIFIER','Usar a funcionalidade de depurador HTML?');
define('_JOMRES_HTMP_PURIFIER_DESC','Active para permitir ao Jomres usar a biblioteca de depuração (http://htmlpurifier.org/). A biblioteca é usada como uma camada de segurança extra ao manusear introdução e saída de dados. Recomenda-se que a deixe activada, embora use mais memória.');
define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Saldo de pagamento');
define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Saldo');
define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Note que está a utilizar o modo de edição, com a opção de Edição Global activada. Isto está bem se compreender do que se trata o modo de Edição Global, mas pode trazer problemas se não souber. Se não tem a certeza se deve utilizar o Jomres desta forma, veja <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">a página do manual sobre modo de edição</a> para obter informação adicional sobre este assunto.');
define('_JOMRES_SUPPORTKEY','Chave de apoio');
define('_JOMRES_SUPPORTKEY_DESC','Número da chave de apoio da sua licença (também conhecido como número de licença). Precisa de uma licença actualizada para poder obter e descarregar actualizações e <i>plugins</i> para o Jomres.');
define('_JOMRES_PERSONAL_DISCOUNT','Desconto pessoal');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Limitar registo de propriedade a um País?');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','Pode assegurar-se de que os registos de propriedade se limitam a um só País definindo esta opção como Sim, e o País na opção seguinte.');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','As propriedades situam-se neste País : ');
define('_JOMRES_JQUERYTHEME','Tema Jquery');
define('_JOMRES_JQUERYTHEME_DESC','Escolha um tema JQuery a usar nas tabulações dos detalhes da propriedade.');
define('_JOMRES_PROPERTYNOTOUBLISHED','Lamentamos, mas essa propriedade não está actualmente disponível.');
define('_JOMRES_REVIEWS','Avaliações');
define('_JOMRES_REVIEWS_TITLE','Título da avaliação');
define('_JOMRES_REVIEWS_DATE','criada em ');
define('_JOMRES_REVIEWS_NOREVIEWS','Ainda não há avaliações para esta propriedade.');
define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Gostaria de ser o primeiro a avaliar esta propriedade?');
define('_JOMRES_REVIEWS_IAGREE','Concordo com esta avaliação');
define('_JOMRES_REVIEWS_IDISAGREE','Discordo desta avaliação');
define('_JOMRES_REVIEWS_AVERAGE_RATING','Classificação média: ');
define('_JOMRES_REVIEWS_TOTAL_VOTES','Total de votos:');
define('_JOMRES_REVIEWS_ADD_REVIEW','Adicione uma nova avaliação.');
define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','Precisa de estar em login para enviar uma avaliação.');
define('_JOMRES_REVIEWS_REVIEWBODY','Diga-nos o que pensa desta propriedade : ');
define('_JOMRES_REVIEWS_REVIEWBODY_SAID','Este cliente disse-nos : ');
define('_JOMRES_REVIEWS_PROS','Prós: ');
define('_JOMRES_REVIEWS_CONS','Contras: ');
define('_JOMRES_REVIEWS_SUBMITTEDDATE','Enviada em: ');
define('_JOMRES_REVIEWS_ALREADYREVIEWED','Já avaliou esta propriedade. Não pode enviar nova avaliação sobre a mesma.');
define('_JOMRES_REVIEWS_CANNOTREVIEW','Desculpe, mas não pode submeter avaliações neste site.');
define('_JOMRES_REVIEWS_CLICKTOSHOW','Clique para ver as avaliações');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',' hóspedes concordam com esta avaliação. ');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',' hóspedes não concordam com esta avaliação.');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',' hóspede concorda com esta avaliação. ');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR','hóspede não concorda com esta avaliação.');
define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Obrigado por ter dado opinião sobre esta avaliação.');
define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Obrigado, mas já emitiu opinião sobre esta avaliação.');
define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','P.f. assegure-se de que todos os campos foram preenchidos.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','P.f. resuma a sua avaliação introduzindo ujm título');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','P.f. introduza uma avaliação mais detalhada na caixa de texto respectiva');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','P.f. introduza os aspectos positivos da sua experiência como hóspede desta propriedade');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','P.f. introduza quaisquer aspectos negativos que possa ter da sua experiência');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','P.f. classifique a hospitalidade de que foi alvo pelo pessoal');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','P.f. classifique a sua opinião sobre a localização da propriedade');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','P.f. dê opinião sobre a limpeza de instalações da propriedade');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','P.f. classifique o alojamento. Foi confortável ou razoável');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','P.f. dê a sua opinião sobre se valeu ou não o dinheiro dispendido');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','P.f. classifique os serviços');
define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Resumo da Apreciação');
define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','A sua experiência em maior pormenor');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Obrigado por ter colaborado com a sua apreciação.');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Obrigado por enviar a sua apreciação. Será publicada em breve por um dos nossos moderadores de serviço.');
define('_JOMRES_REVIEWS_ADMIN_CONTROL','Usar a funcionalidade de apreciação Jomres?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','Publicar automaticamente as apreciações?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','Se definir Não, precisará de publicar manualmente as apreciações');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Colocar apreciações em modo experimental?');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Normalmente, os gestores de propriedades não podem emitir apreciações sobre estas. Com esta opção activada, podem. Obviamente este procedimento não é ideal num ambiente de funcionamento normal.');
define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','Esta é uma lista de todas as propriedades. Para ver avaliações de uma propriedade, clique sobre ela. A partir daí pode publicar ou apagar uma avaliação.');
define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Avaliações não publicadas');
define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Total de avaliações');
define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Publicar/despublicar avaliação');
define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Apagar avaliação');
define('_JOMRES_REVIEWS_REPORT_REVIEW','Denunciar avaliação');
define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Denúncias de avaliações');
define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','P.f. introduza a sua denúncia');
define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','Vê algo nesta avaliação que seja contrário ou inexacto? Denuncie o facto e daremos à sua mensagem a melhor atenção.');
define('_JOMRES_REVIEWS_SUBMIT','Enviar');
define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Denúncia criada por ');
define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','As denúncias são enviadas por utilizadores que possam discordar do conteúdo de uma avaliação. A única forma de lidar com uma denúncia é eliminar a avaliação.');
define('_JOMRES_REVIEWS_RATING','Avaliações (1 = má ... 10 = excelente) ');
define('_JOMRES_REVIEWS_RATING_1','Hospitalidade  ');
define('_JOMRES_REVIEWS_RATING_2','Localização ');
define('_JOMRES_REVIEWS_RATING_3','Limpesa ');
define('_JOMRES_REVIEWS_RATING_4','Alojamento ');
define('_JOMRES_REVIEWS_RATING_5','Relação preço/qualidade ');
define('_JOMRES_REVIEWS_RATING_6','Serviços ');
define('_JOMRES_REVIEWS_REVIEWED_BY','Avaliado por : ');
define('_JOMRES_REVIEWS_CLICKTOHIDE','Esconder avaliações');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Mostrar o formulário de reserva na página de pormenores da propriedade?');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Defina Sim para mostrar o formulário de reserva na página de pormenores da propriedade. Se definir Não, aparecerá em seu lugar uma ligação nessa página, direccionando para o formulário.');
define('_JOMRES_COM_A_TAXINCLUSIVE','Os preços estabelecidos incluem a taxa?');
define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','Os preços definidos incluem a taxa? Se os seus preços já a incluem seleccione Sim, caso contrário defina Não.');
define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','Taxa de extras:');
define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','Os campos dia da semana permitem-lhe definir uma taxa para um determinado dia da semana. Ao clicar no botão dias da semana, a tarifa definida será atribuída a todos os dias da semana.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','Os selectores de data e a introdução de taxas permitem-lhe estabelecer um preço para um determinado intervalo de datas. Escolha uma data de início e de fim, introduza um preço, e clique no botão Definir taxas.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Valor inicial');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','Valor final');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Taxa');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Definir taxas');
define('_JOMRES_PARTNERS_TITLE','Sócios');
define('_JOMRES_CALENDAR_TODAY','Hoje');
define('_JOMRES_CALENDAR_PREV','Anterior');
define('_JOMRES_CALENDAR_NEXT','Seguinte');
define('_JOMRES_CALENDAR_RTL','falso');
define('_JOMRES_ROOMALLOCATIONS_ROOM','Quarto ');
define('_JOMRES_ROOMALLOCATIONS_GUESTS','hóspede(s). ');
define('_JOMRES_ROOMALLOCATIONS_INFORMATION','Esta é a forma como designámos os números de hóspedes aos quartos respectivos. Se gostaria de alterar esta disposição, terá de contactar o hotel após ter feito a reserva. Se modificar esta disposição poderá haver encargos extra aplicáveis.');
define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED',"Note que a sua propriedade ainda não está publicada. Somente você pode vê-la, mas não os visitantes do site");
// 4.5.5
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Ordem de resultados de pesquisa por defeito');
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Altere esta opção para mudar a ordem pela qual os resultados da pesquisa sâo apresentados, por defeito.');
define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Mostrar <i>dropdown</i> de resultados da pesquisa');
define('_JOMRES_ROOMMSLIST_STYLE','Estilo de lista de quartos');
define('_JOMRES_ROOMMSLIST_STYLE_DESC','No formulário de reserva, usando o estilo de lista de quartos "clássico" oferece quartos individualmente aos hóspedes. Com este tipo de vista, os hóspedes escolhem em vez disso o número de quartos do tipo X (por ex., 2 x duplo)');
define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Clássico');
define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Tipos de quarto');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','(Re)verificando disponibilidade');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','A reconstruir a lista de quartos disponíveis');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','A calcular os totais');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','Terminada a actualização do formulário');
define('_JOMRES_COM_CALENDAR_STARTDAY','Em que dia começa a semana de calendário, Domingo ou Segunda-feira');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Somente hóspedes da propriedade podem avaliá-la?');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Defina Sim se quer restringir as apreciações aos utilizadores que já foram hóspedes desta propriedade.');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Por quarto');
// v 4.5.7 - adicionado?
define('_JOMRES_MAX_GUESTS_PER_ROOM','Hóspedes por quarto : ');
define('_JOMRES_MAX_GUESTS_PER_BOOKING','Hóspedes por reserva : ');
define('_JOMRES_NUMBER_OF_ROOMS','Número de quartos');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Valor de tarifa por defeito');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC',"Isto aplica-se apenas a novas tarifas");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW',"Anos a mostrar");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC',"Define o número de anos a mostrar quando se edita uma terifa em método <i>micromanage</i>");
define('_JRPORTAL_MONTHS_LONG_0','Janeiro');
define('_JRPORTAL_MONTHS_LONG_1','Fevereiro');
define('_JRPORTAL_MONTHS_LONG_2','Março');
define('_JRPORTAL_MONTHS_LONG_3','Abril');
define('_JRPORTAL_MONTHS_LONG_4','Maio');
define('_JRPORTAL_MONTHS_LONG_5','Junho');
define('_JRPORTAL_MONTHS_LONG_6','Julho');
define('_JRPORTAL_MONTHS_LONG_7','Agosto');
define('_JRPORTAL_MONTHS_LONG_8','Setembro');
define('_JRPORTAL_MONTHS_LONG_9','Outubro');
define('_JRPORTAL_MONTHS_LONG_10','Novembro');
define('_JRPORTAL_MONTHS_LONG_11','Dezembro');
define('_JOMRES_PROPERTYMANAGEMENTPROCESS',"Processo de gestão da propriedade");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',"Há vários processos, em função do modo como quer listar a sua propriedade/negócio.");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',"Aluguer");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC',"Escolha a opção aluguer se se trata de reservas de quartos numa propriedade (por ex. Hotel/B&B/Villa/Apartamentos)");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE',"Venda de propriedade/listagem simples");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC',"Escolha esta opção se não estiver a oferecer qualquer tipo de reserva (por ex., uma propriedade/artigo para venda)");
define('JOMRES_COM_A_MINIMALCONFIG_DESC','Defina Sim para reduzir o número de opções disponíveis aos gestores de propriedades na secção de Configuração Geral. Útil se não quiser que os gestores de propriedades lidem com demasiadas configurações. Em vez desta opção, pode editar o ficheiro jomres_config.php para definir as opções de configuração por defeito.');
define('_JOMRES_AJAXFORM_EXTRAS_SELECT','P.f. seleccione uma opção para a sua reserva');
define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Liga os editores HTML na página de edição dos pormenores da propriedade. Além disso, se for definido como Não, todo o código html excepto p e br é descartado de trodo o texto introduzido e mostrado.');
define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT',"Vista de gestão de propriedade");
define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW',"Vista de pré-visualização do site");
define('_JOMRES_COM_TIMEZONE_SWITCHER',"Mostrar o comutador de fuso horário na barra de ferramentas do gestor de propriedade?");
define('_JOMRES_PARTNER_DISCOUNT',"Desconto de parceiro ");
define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE',"Pesquisar utilizador");
define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS',"Introduza alguns caracteres para pesquisar um utilizador.<br/> Quando selecciona um utilizador adiciona-o automaticamente como Parceiro, e será remetido para a página seguinte, onde pode atribuir-lhe propriedades e descontos.");
define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE',"Parceiros actuais");
define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS',"Seleccione um parceiro para ser encaminhado para a respectiva página de administração.");
define('_JOMRES_PARTNER_SHOW_TITLE',"Parceiro :");
define('_JOMRES_PARTNER_SHOW_SEARCHTITLE',"Pesquisar uma propriedade");
define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS',"Introduza alguns caracteres do nome da propriedade e seleccione-a.<br/> Quando fizer a selecção adicioná-la-á ao currículo do parceiro que, no entanto, não beneficiará ainda de qualquer desconto, que terá de ser definido por si.");
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES',"Propriedades actuais");
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS',"Clique numa propriedade para editar as definições de descontos para um parceiro, relativamente a essa propriedade.");
// 4.6
define('_JOMRES_SUSPENSIONS_TITLE',"Suspenso? <br/>(clique para suspender um gerente, o que despublicará todas as suas propriedades ) ");
define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO',"Clique no ícone Suspender (o do homem com a seta verde) para suspender um gerente. Isto significa que esse gerente não poderá desempenhar funções de gestão de propriedades, e que estas serão despublicadas. Os super-gestores de propriedades não podem ser suspensos.");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED',"Esta conta foi suspensa, pelo que actualmente não é possível gerir a(s) sua(s) propriedade(s) através dela.");
define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE',"Conta de gestor suspensa");
define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE',"Conta de gestor reactivada");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL',"Por favor, note que a sua conta de gestor de propriedades foi suspensa. Não poderá exercer funções de gestão até que a conta seja reactivada.");
define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL',"Por favor, note que a sua conta de gestor de propriedades foi reactivada. Pode continuar a exercer funções de gestão. Por favor, faça login na sua conta e certifique-se de que a(s) propriedade(s) apropriada(s) foi(foram) publicadas. Obrigado.");
define('_JOMCOMP_MYUSER_REMOVE','Remover favorito');
define('_JOMRES_DATA_ARCHIVE_TITLE','Arquivo de reservas');
define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','O arquivo de dados de reservas é ume relação em bruto de informação de reservas, capturada após o botão de confirmação de reserva ter sido premido. Posicione o cursor sobre uma data para ver essa relação. A informação é guardada na tabela XXX__jomres_booking_data_archive.');
define('_JOMRES_MY_ACCOUNT_EDIT','Editar conta');
define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE',"Pesquisar utilizadores");
define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS',"Introduza alguns caracteres do nome de utilisador para pesquisar.<br/> Quando seleccionar um utilisador, adicioná-lo-á automaticamente como Gerente e será encaminhado para a página seguinte, onde pode atribuir-lhe propriedades e direitos de acesso.");
define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',"Gesrentes actuais");
define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS',"Seleccione um gerente para ser encaminhado para a página de administração de gerentes.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',"Pesquisar por número de hóspedes");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',"Mostrar o <i>dropdown</i> de pesquisa por número de hóspede");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',"Pesquisa pore estrelas");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',"Mostrar o <i>dropdown</i> de pesquisa por estrelas");
define('_JOMRES_SEARCH_GUESTNUMBER','Número de hóspedes');
define('_JOMRES_SEARCH_STARS','Número de estrelas');
define('_JRPORTAL_INVOICES_COMMISSION_TITLE',"Facturas de comissões");
define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Número de propriedades");
// 4.6.1
define('_JOMRES_CONFIG_JQUERY',"Carregar a biblioteca Jomres jQuery?");
define('_JOMRES_CONFIG_JQUERY_DESC',"Pode definir NÃO se tiver um tema que utilize jquery. Isto PODE resolver alguns problemas de conflitos jquery nalguns temas, mas não em todos.");
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','Se utiliza o Joomfish, deve definir como NÃO, e utilizar o selector de idioma Joomfish. Este selector está sempre activo na ára de administração porque é necessário quando se utiliza a característica de Tradução de Etiquetas.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','São automaticamente criadas imagens de referência (<i>thumbnails</i>) para as imagens carregadas.');
// 4.7.1
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Larg. máx. imagens de referência (px).');
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Imagens de referência pequenas são usadas na lista de propriedades, enquanto que nos respectivos cabeçalhos são usadas imagens de referência de tamanho médio.');
define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Alt. máx. de imagens de referência pequenas (px).');
define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','Larg. máx. de imagens de referência médias (px).');
define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','Alt. máx. de imagens de referência médias (px).');
define('_JOMRES_TOUCHTEMPLATES','Traduções de Etiquetas');
define('_JRPORTAL_ROI_TAB',"ROI");
define('_JRPORTAL_INVOICES_COMMISSION_USE',"Usar a funcionalidade comissão?");
define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC',"Defina Sim para mostrar as facturas de comissões do gerente, que foram emitidas.");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',"Facturas de criação de comissões por criação de reservas?");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',"Se um gerente faz uma reserva, isso também cria um item na linha na factura de comissões?");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT',"Foi emitida uma nova factura de comissões");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE',"Foi emitida uma nova factura de comissões, que requer a sua atenção. Por favor, clique na ligação seguinte para a visualizar (pode precisar de fazer primeiramente login).");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',"Auto-suspender gerentes cujas facturas estejam marcadas como pendentes?");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',"Prazo para auto-suspensão");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',"O número de dias até ao limite dos quais o gerente tem de pagar uma factura antes de ser auto-suspenso e as suas propriedades despublicadas.");
//4.7.2
define('_JOMRES_COM_LANGUAGE_CONTEXT','Contexto de linguagem');
define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Use esta opção para modificar o contexto de linguagem do site. Isto permite que o Jomres utilize etiquetas apropriadas para o que de mais adequado está em foco; portanto, se as suas preferências forem, por exemplo, aluguer de iates, nesse caso mudar o contexto permite ao Jomres, primeiramente procurar antes de mais na língua corrente, depois pesquisar o directório /jomres/languages/ por um subdirectório designado "yachtbrokerage". Se o ficheiro existir para a língua corrente, será então usado esse ficheiro. Caso contrário, o Jomres pesquisará por um ficheiro em língua inglesa no mesmo directório. Se não o puder encontrar, utilizará o ficheiro de linguagem para a que tiver sido seleccionada, no directório /jomres/languages.');
// 4.7.3
define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Configuração avançada do site');
define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Defina Sim se quer utilizar as opções avançadas de configuração. Se está a iniciar-se no Jomres, aconselha-se a que defina Não por enquanto, dado que a instalação por defeito é suficiente para começar; em vez de definir Sim neste caso, deve adicionar o Jomres ao menu principal, fazer login como "admin" no <i>frontend</i> e começar a configurar a(s) sua(s) propriedade(s). Note que muitas das opções avançadas somente serão aplicáveis em instalações Jomres Silver, pelo que os utilizadores de Jomres Lite não poderão usufruir totalmente das características que a opção avançada permite.');
define('_JOMRES_CONFIG_JQUERY_UI',"Carregar biblioteca Jomres jQuery UI?");
define('_JOMRES_SORTORDER_PRICE_DESC','Preço (mais elevado primeiro)');
define('_JOMRES_SORTORDER_PRICE_ASC','Preço (mais baixo primeiro)');
// 4.7.6
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Resumo de preços e estimativas devem ser avaliadas por noite/por semana/por mês?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Por noite');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Por semana');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Por mês');
define('_JOMRES_BOOKINGFORM_PERPERSON','Por pessoa');
define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','semana(s) a ');
define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','mes(es) a ');
// 4.7.7
define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','Como deve funcionar a opção de pesquisa por número de pessoas?');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Afecta todos os módulos de pesquisa. Ao usar a opção de pesquisa por número de hóspedes, a opção de pesquisa deve procurar propriedades cujas tarifas comportem número de hóspedes até, e igual ao número escolhido, precisamente igual ao número escolhido, ou igual e suprior a esse número? ');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Por favor aguarde, a sua reserva está a ser processada e em breve será direccionado para o website Paypal.');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','Se não for automaticamente redireccionado para o Paypal em 5 segundos...');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Clique aqui');
// 4.7.8
define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM',"Reserva válida de");
define('_JRPORTAL_COUPONS_BOOKING_VALIDTO',"Reserva válida até");
define('_JRPORTAL_COUPONS_GUESTNAME',"Nome do hóspede");
define('_JRPORTAL_COUPONS_DESC_478',"Podem ser gerados códigos de desconto e atribuidos aos hóspedes, como incentivo para fazer mais reservas.<br/>
Válido desde e até, refere-se às datas em que pode ser feita uma reserva, enquanto que Reserva válida desde/até se refere a datas dentro das quais o cupão é válido. Se uma reserva ocorrer fora desse período, aplicar-se-ão as taxas normais para os dias fora do período em questão.<br/>
Se quiser que a reserva fique disponível para um hóspede específico, seleccione o nome rspectivo no <i>dropdown</i> para limitar o cupão apenas a esse hóspede.");
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK',"Com o seu cupão, esta reserva foi descontada de ");
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO'," até ");
define('_JOMRES_CONFIG_JQUERY_UI_DESC',"Defina Não para desactivar a carga, quer do Jquery UI javascript quer dos ficheiros CSS.");
define('_JOMRES_CONFIG_JQUERY_UI_CSS',"Carregar Jomres a biblioteca CSS jQuery UI?");
define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',"Defina Não para desactivar somente o ficheiro CSS jquery UI CSS.");
//v5.1 
define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',"Total incl. imposto");
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

define('_JOMRES_MYPROPERTIES','My businesses');


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
