<?
// l16n translations --------------------------------------------------------
$cmd = mysql_query("SET NAMES 'utf8'");
$cmd = mysql_query("SET CHARACTER SET 'utf8'");


$cmd = mysql_query("INSERT INTO `l16n` (`id`, `needle`, `en`, `de`, `fr`, `es`, `nl`, `dk`, `se`, `it`, `fi`, `no`, `pl`, `tr`) VALUES
(1, '_open', 'Open:', 'Offen:', 'Ouvert: de', 'Abrir:', ' ', ' ', 'Öppet:', ' ', '', '', '', ''),
(2, '_till', 'till', 'bis', 'jusqu´à', 'hasta', ' ', ' ', 'till', ' ', '', '', '', ''),
(3, '_oclock', 'o clock', 'Uhr', ' ', 'En punto', ' ', ' ', 'Klockan', ' ', '', '', '', ''),
(4, '_tautologous', 'Tautologous with', 'Doppelt gebucht mit', 'double reservation avec', 'Con doble reserva', ' ', ' ', 'DUBBELBOKAD med', ' ', '', '', '', ''),
(5, '_day_comment', 'Day comment', 'Kommentar zum Tag', 'Commentaire du jour', 'Comentario diario', ' ', ' ', 'Dag kommentar', ' ', '', '', '', ''),
(6, '_add_seats', 'Add seats', 'Sitzplätze dazu', 'Ajouter sièges', 'A&ntilde;adir asientos', ' ', ' ', 'Lägg till sittplatser', ' ', '', '', '', ''),
(7, '_add_tables', 'Add tables', 'Tischanzahl dazu', 'Ajouter tables', 'A&ntilde;adir mesas', ' ', ' ', 'Lägg till bord', ' ', '', '', '', ''),
(8, '_capacity', 'Capacity', 'Kapazität', 'Capacité', '', ' ', ' ', 'Extra kapacitet', ' ', '', '', '', ''),
(9, '_save', 'Save', 'speichern', 'sauvegarder', 'Guardar', ' ', ' ', 'Spara', ' ', '', '', '', ''),
(10, '_delete', 'Delete', 'löschen', 'effacer', 'Eliminar', ' ', ' ', 'Ta bort', ' ', '', '', '', ''),
(11, '_reset', 'Reset', 'Reset', 'Recommencer', 'Restaurar', ' ', ' ', 'Reset', ' ', '', '', '', ''),
(12, '_allow', 'Allow', 'erlauben', 'autoriser', 'Permitir', ' ', '', 'Acceptera', ' ', '', '', '', ''),
(13, '_edit', 'Edit', 'ändern', 'modifier', 'Editar', ' ', ' ', 'Redigera', ' ', '', '', '', ''),
(14, '_search', 'Search', 'Suchen', 'Chercher', 'Buscar', ' ', ' ', 'Sök', ' ', '', '', '', ''),
(15, '_edit_entry', 'Edit entry', 'Eintrag ändern', 'Modifier entré', '', ' ', ' ', 'Redigera posten', ' ', '', '', '', ''),
(16, '_edit_all_entries', 'Edit all entries', 'Alle ändern', 'Modifier toutes les entrées', '', ' ', ' ', 'Redigera alla poster', ' ', '', '', '', ''),
(17, '_ok_', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', '', '', '', ''),
(18, '_cancel', 'Cancel', 'Abbruch', 'Annuler', '', ' ', ' ', 'Avbryt', ' ', '', '', '', ''),
(19, '_overview', 'Overview', 'Überblick', 'Présentation', 'Descripción general', ' ', ' ', 'Överblick', ' ', '', '', '', ''),
(20, '_outlets', 'Outlets', 'Outlets', 'Point de vente', 'Outlets', ' ', ' ', 'Sittningar', ' ', '', '', '', ''),
(21, '_navigation', 'Navigation', 'Navigation', 'Navigation', 'Navegaci&oacute;n', ' ', ' ', 'Navigera', ' ', '', '', '', ''),
(22, '_today', 'Today', 'Heute', 'Aujourd´hui', '&nbsp;&nbsp;Hoy&nbsp;&nbsp;', ' ', ' ', 'Idag', ' ', '', '', '', ''),
(23, '_printlist', 'Print list', 'Drucken', 'Imprimer liste', 'Imprimir Lista', ' ', ' ', 'Skriv ut', ' ', '', '', '', ''),
(24, '_users', 'Users', 'Benutzer', 'Utilisateur', 'Usuarios', ' ', ' ', 'Användare', ' ', '', '', '', ''),
(25, '_confirmed_reservations', 'Confirmed reservations', 'Feste Reservierungen', 'Reservation confirmée', 'Reservas Confirmadas', ' ', ' ', 'Bekräftade reservationer', ' ', '', '', '', ''),
(26, '_canceled_reservations', 'Canceled reservations', 'Stornierte Reservierungen', 'Reservation annulée', 'Reservas canceladas', ' ', ' ', 'Avbokade reservationer', ' ', '', '', '', ''),
(27, '_wait_list', 'Wait list', 'Warteliste', 'Liste d´attente', 'Lista de espera', ' ', ' ', 'VÄNTE lista', ' ', '', '', '', ''),
(28, '_search_guest', 'Search Guest', 'Gast Suche', 'Chercher client', 'Busqueda de Hu&eacute;spedes', ' ', ' ', 'Sök Gäst', ' ', '', '', '', ''),
(29, '_search_results', 'Search results', 'Suchergebnisse', 'Resultat de la recherche', 'Resultados de la busqueda', ' ', ' ', 'Sökresultat', ' ', '', '', '', ''),
(30, '_recent_reservations', 'Recent reservations', 'Letzte Reservierungen', 'Reservation récente', 'Reservas recientes', ' ', ' ', 'Senast gjorda bokningar', ' ', '', '', '', ''),
(31, '_time', 'Time', 'Zeit', 'Heure', 'Hora', ' ', ' ', 'Tid', ' ', '', '', '', ''),
(32, '_guest_name', 'Guest name', 'Gast Name', 'Nom du client', 'Nombre del hupesdes', ' ', ' ', 'Gästnamn', ' ', '', '', '', ''),
(33, '_pax', 'Pax', 'Pax', 'Couverts', 'Pasajero', ' ', ' ', 'Antal Personer', ' ', '', '', '', ''),
(34, '_phone_room', 'Phone/Room', 'Telefon/Zimmer', 'Téléphone/Chambre', 'Telefono', ' ', ' ', 'Telefon/Rum', ' ', '', '', '', ''),
(35, '_type', 'Type', 'Typ', 'Catégorie', 'Tipo', ' ', ' ', 'Typ', ' ', '', '', '', ''),
(36, '_note', 'Note', 'Notiz', 'Info', 'Info', ' ', ' ', 'Anteckning', ' ', '', '', '', ''),
(37, '_author', 'Author', 'Autor', 'Auteur', 'Realiz&oacute;', ' ', ' ', 'Signatur', ' ', '', '', '', ''),
(38, '_date', 'Date', 'Datum', 'Date', 'Fecha', ' ', ' ', 'Datum', ' ', '', '', '', ''),
(39, '_status', 'Status', 'Status', 'Stauts', '', ' ', ' ', 'Status', ' ', '', '', '', ''),
(40, '_booked_', 'booked ', 'buchte ', 'réservé', 'reservado', ' ', ' ', 'bokade', ' ', '', '', '', ''),
(41, '_people_', 'people ', 'Personen ', 'personne ', 'Personas', ' ', ' ', 'personer ', ' ', '', '', '', ''),
(42, '_for_', 'for ', 'für ', 'pour ', 'para', ' ', ' ', 'den', ' ', '', '', '', ''),
(43, '_or_', 'or ', 'oder ', 'ou ', '&oacute;', ' ', ' ', 'eller', ' ', '', '', '', ''),
(44, '_canceled_', 'canceled ', 'stornierte', 'annulé', 'cancelado', ' ', ' ', 'avbokad', ' ', '', '', '', ''),
(45, '_edit_reservation', 'Edit reservation', 'Ändere Reservierung', 'Modifier réservation', 'Editar Reserva', ' ', ' ', 'Ändrad bokning', ' ', '', '', '', ''),
(46, '_add_reservation', 'Add reservation', 'Neue Reservierung', 'Ajouter réservation', 'A&ntilde;adir Reserva', ' ', ' ', 'Lägg till bokning', ' ', '', '', '', ''),
(47, '_visits', 'Visits', 'Besuche', 'Visites', 'Visitas', ' ', ' ', 'Antal besök', ' ', '', '', '', ''),
(48, '_last_visit', 'Last visit', 'Letzter Besuch', 'Dernière visite', '&Uacute;ltima visita', ' ', ' ', 'Senaste besök', ' ', '', '', '', ''),
(49, '_sentence_16', 'Do not book any more passants!', 'Keine Passanten mehr einbuchen!', 'Désolé, quelque chose c`est mal passé !', '', '', '', 'Ledsen, något har gått fel!', '', '', '', '', ''),
(50, '_existing_outlets', 'Existing outlets', 'Bestehende Outlets', 'Points de ventes existants', 'Outlets existentes', ' ', ' ', 'Registrerade sittningar', ' ', '', '', '', ''),
(51, '_add_user', 'Add user', 'Benutzer hinzufügen', 'Ajouter un utilisateur', 'A&ntilde;adir usuasio', ' ', ' ', 'Lägg till användare', ' ', '', '', '', ''),
(52, '_add_outlet', 'Add outlet', 'Outlet hinzufügen', 'Ajouter un points de ventes', 'A&ntilde;adir o editar outlet', ' ', ' ', 'Lägg till sittningar', ' ', '', '', '', ''),
(53, '_name', 'Name', 'Name', 'Nom', 'Nombre', ' ', ' ', 'Namn', ' ', '', '', '', ''),
(54, '_description', 'Description', 'Beschreibung', 'Description', 'Descripci&oacute;n', ' ', ' ', 'Beskrivning', ' ', '', '', '', ''),
(55, '_seats', 'Seats', 'Maximale Plätze', 'Nbre de pers max.', 'Asientos m&aacute;ximos', ' ', ' ', 'Sittplatser', ' ', '', '', '', ''),
(56, '_tables', 'Tables', 'Maximale Tische', 'Nbre de tables max.', 'Mesas m&aacute;ximas', ' ', ' ', 'Bord', ' ', '', '', '', ''),
(57, '_open_time', 'Open time', 'Öffnungszeit', 'Heure d´ouverture', 'Hora de apertura', ' ', ' ', 'Öppet tid', ' ', '', '', '', ''),
(58, '_close_time', 'Close time', 'Schliesszeit', 'Heure de fermeture', 'Hora de cierre', ' ', ' ', 'Stängning tid', ' ', '', '', '', ''),
(59, '_season_start', 'Season start', 'Saison Start', 'Début de la saison', 'Comienzo de temporada', ' ', ' ', 'Säsong start', ' ', '', '', '', ''),
(60, '_season_end', 'Season end', 'Saison Ende', 'Fin de la saison', 'Final de temporada', ' ', ' ', 'Säsong slut', ' ', '', '', '', ''),
(61, '_day_off', 'Day off', 'Ruhetag', 'Jour de fermeture', 'D&iacute;a libre', ' ', ' ', 'Stängda dagar', ' ', '', '', '', ''),
(62, '_new_entry', 'New entry has been added !', 'Eintrag wurde hinzugefügt!', 'Une nouvelle entrée a été ajoutée !', '', ' ', ' ', 'Ny post har registrerats !', ' ', '', '', '', ''),
(63, '_entry_edited', 'Entry has been edited !', 'Eintrag wurde geändert!', 'L’entrée a été mofidiée.', '', ' ', ' ', 'Posten har ändrats !', ' ', '', '', '', ''),
(64, '_entry_deleted', 'Entry deleted!', 'Eintrag wurde gelöscht!', 'Entrée effacée!', 'Entrada eliminada!', ' ', ' ', 'Posten borttagen!', ' ', '', '', '', ''),
(65, '_nothing_deleted', 'Nothing deleted!', 'Eintrag wurde nicht gelöscht!', 'Rien est effacé!', 'No eliminado!', ' ', ' ', 'Ingen post har blivit borttagen!', ' ', '', '', '', ''),
(66, '_sentence_2', 'Do you really want to delete?', 'Wollen Sie wirklich löschen?', 'Êtes-vous sure de vouloir effacer cet utilisateur?', '''&iquest;Quiere realmente eliminar?', ' ', ' ', 'Vill du ta bort posten?', ' ', '', '', '', ''),
(67, '_enter_password', 'Please enter the password', 'Bitte geben Sie das Passwort ein', 'Svp entrez le mot de passe', 'Por favor introduzca su clave', ' ', ' ', 'Ange lösenord', ' ', '', '', '', ''),
(68, '_wrong_password', 'Wrong password !', 'Falsches Passwort !', 'Mot de passe incorrecte!', 'Clave incorrecta !', ' ', ' ', 'Fel lösenord !', ' ', '', '', '', ''),
(69, '_week', 'Week', 'Woche', 'Semaine', 'Semana', ' ', ' ', 'vecka', ' ', '', '', '', ''),
(70, '_occupancy_per_week', 'Occupancy per week', 'Belegung pro Woche', 'Ocupation par semaine', 'Ocupaci&oacute;n por semana', ' ', ' ', 'Beläggning per vecka', ' ', '', '', '', ''),
(73, '_guest_search', 'Guest Search', 'Gast Suche', 'Recherche de client', 'Busqueda de hu&eacute;sped', ' ', ' ', 'Sök gäst', ' ', '', '', '', ''),
(74, '_system', 'System', 'System', 'Système', 'Sistema', ' ', ' ', 'System', ' ', '', '', '', ''),
(75, '_cancelled', 'Cancelled', 'Storno', 'Annulé', 'Cancelada', ' ', ' ', 'Avbokade', ' ', '', '', '', ''),
(76, '_comments', 'Comments', 'Kommentare', 'Commentaires', 'Comentarios', ' ', ' ', 'Kommentar', ' ', '', '', '', ''),
(77, '_statistics', 'Statistics', 'Statistik', 'Statistiques', 'Estadisticas', ' ', ' ', 'Statistik', ' ', '', '', '', ''),
(78, '_export', 'Export', 'Export', 'Export', 'Exportar', ' ', ' ', 'Export', ' ', '', '', '', ''),
(79, '_info', 'Info', 'Info', 'Info', 'Info', 'Info', 'Info', 'Info', ' Info', '', '', '', ''),
(80, '_table', 'Table', 'Tisch', 'Table', 'Mesa', ' ', ' ', 'Bord', ' ', '', '', '', ''),
(81, '_changes', 'Changes', 'Änderungen', 'Changements', 'Cambios', ' ', ' ', 'Ändringar', ' ', '', '', '', ''),
(82, '_guest_summary', 'Guest summary', 'Gesamt Gäste', 'Synthèse des clients', 'Resumen de hu&eacute;spedes', ' ', ' ', 'Gäst sumering', ' ', '', '', '', ''),
(83, '_tables_summary', 'Tables summary', 'Gesamt Tische', 'Synthèse des tables', 'Resumen de mesas', ' ', ' ', 'Bord sumering', ' ', '', '', '', ''),
(84, '_parties_summary', 'Parties summary', 'Gesamt Parties', 'Synthèses des parties', 'Resumen', ' ', ' ', 'Sällskap sumering', ' ', '', '', '', ''),
(85, '_dollar_revenue_summary', 'Dollar Revenue summary', 'Euro Gesamt Einnahme', 'Synthèses des recettes en euro', 'Resumen de ingresos', ' ', ' ', 'SEK Intäkter', ' ', '', '', '', ''),
(86, '_close_window', 'Close Window', 'Fenster schliessen', 'Fermer la fenêtre', 'Cerrar ventana', ' ', ' ', 'Stäng fönstret', ' ', '', '', '', ''),
(87, '_multi_booking', 'Multi Booking<br/>repeat till:', 'Mehrfach Reservierung<br/>Wiederhole bis:', 'Répéter<br/> jusqu´à:', 'Reserva multiple<br/> repetida hasta:', ' ', ' ', 'Multi Bokning<br/> repetera till:', ' ', '', '', '', ''),
(88, '_recurring', 'recurring', 'wiederkehrend', 'récurrente', 'repetido', ' ', ' ', 'återkommande', ' ', '', '', '', ''),
(89, '_information', 'Information !', 'Hinweis !', 'Information !', '', ' ', ' ', 'Information !', ' ', '', '', '', ''),
(90, '_move_reservation_to', 'Move reservation to', 'Verschiebe Reservierung nach', 'Déplacer la reservation a', '', ' ', ' ', 'Flytta reservationen till', ' ', '', '', '', ''),
(91, '_sentence_5', 'Attention: This table number is already assigned!', 'Achtung: Dieser Tisch wurde schon vergeben!', '', '', ' ', ' ', 'OBS: Detta bordsnummer är redan upptaget!', ' ', '', '', '', ''),
(92, '_sentence_6', 'The restaurant has already opened. Please contact the Maitre!', 'Das Restaurant hat schon geoeffnet. Bitte kontaktieren Sie den zuständigen Maitre!', 'Le service a déjà commencé. Svp contactez le Maitre d´hôtel!', '', ' ', ' ', 'Restaurangen är redan öppen!', ' ', '', '', '', ''),
(93, '_sentence_8', 'Are you sure to reserve such big table? From ', 'Sind Sie sicher das Sie einen so grossen Tisch reservieren wollen? Ab ', 'Couverts : êtes vous sûre de vouloir réserver une table aussi nombreuse? à partir de ', '', ' ', ' ', 'Har du angivit rätt antal personer? Från ', ' ', '', '', '', ''),
(94, '_sentence_9', 'persons we recommend from a quality reason a menu!', 'Personen empfehlen wir aus Qualitätsgründen eine Menüabsprache!', ' pour des raisons de qualité nous recommandons un menu !', '', ' ', ' ', 'För stora sällskap måste vi ta förbeställning av för- och varmrätt!', ' ', '', '', '', ''),
(95, '_paid', 'Paid', 'Zahlung', 'payé', 'Pagado', ' ', ' ', 'Betalning', ' ', '', '', '', ''),
(96, '_shipped', 'shipped', 'Versendet', 'expédié', 'Enviado', ' ', ' ', 'Försändelse', ' ', '', '', '', ''),
(97, '_adress', 'Address', 'Adresse', 'Adresse', 'Direcci&oacute;n', ' ', ' ', 'Adress', ' ', '', '', '', ''),
(98, '_area_code', 'ZIP Code-City', 'PLZ-Ort', 'Code postal', 'C&oacute;digo Postal', ' ', ' ', 'Postnr', ' ', '', '', '', ''),
(99, '_email', 'Email', 'Email', 'Courriel', 'Email', ' ', ' ', 'Email', ' ', '', '', '', ''),
(100, '_paid_by', 'Paid by', 'Bez. per', 'Payé par', 'Pagado por', ' ', ' ', 'Betald av', ' ', '', '', '', ''),
(101, '_parking', 'Parking', 'Parken', 'Parking', 'Parking', ' ', ' ', 'Parkering', ' ', '', '', '', ''),
(102, '_discount', 'Discount', 'GdH', 'Réduction', 'Descuento', ' ', ' ', 'Rabatt', ' ', '', '', '', ''),
(103, '_password', 'Password', 'Passwort', 'Mot de passe', 'Contrase&ntilde;a', ' ', ' ', 'Lösenord', ' ', '', '', '', ''),
(104, '_ticket_system', 'Ticket system', 'Ticketsystem', '', 'Sistema de entrada', ' ', ' ', 'Biljett system', ' ', '', '', '', ''),
(105, '_ticket_price', 'Price', 'Preis', 'Prix', 'Sistema de precios', ' ', ' ', 'Pris', ' ', '', '', '', ''),
(106, '_payment', 'Payment', 'Bezahlt', 'Payé', 'Pagado', ' ', ' ', 'Betalt', ' ', '', '', '', ''),
(107, '_shipping', 'Shipping', 'Versand', 'Expédition', '', ' ', ' ', 'Försändelse', ' ', '', '', '', ''),
(108, '_sent', 'Sent', 'Ausgang', 'Envoyé', 'Enviado', ' ', ' ', 'Skickad', ' ', '', '', '', ''),
(109, '_timecontrol', 'Timecontrol', 'Timecontrol', 'Contrôle du temps', 'Control de horas', ' ', ' ', 'Tidkontroll', ' ', '', '', '', ''),
(110, '_webform', 'Online booking', 'Online Buchung', '', 'Formulario web', ' ', ' ', 'Onlinebokning', ' ', '', '', '', ''),
(111, '_tautologous_booking', 'Tautologous booking: This guest has a second booking on this day', 'Doppelbuchung : Dieser Gast hat noch eine andere Buchung an diesem Tag.', 'Double reservation : ce client a une seconde reservation le même jour.', 'Doble reserva: este hu&eacute;sped tiene una segunda reserve en este d&iacute;a', ' ', ' ', 'Dubbelbokning: Denna gäst har ännu en bokning denna dag.', ' ', '', '', '', ''),
(112, '_sentence_11', 'This is an older reservation.', 'Diese Reservierung ist schon etwas älter.', 'Ceci est une ancienne réservation.', 'Informaci&oacute;n para el hu&eacute;sped', ' ', ' ', 'Detta är en gammal bokning.', ' ', '', '', '', ''),
(113, '_sentence_13', 'Reservation was done after maitre message.', 'Die Reservierung wurde nach dem Maitre Hinweis getätigt.', 'La reservation a été faite après le message du Maitre d’hôtel.', 'La reserve fue hecha despues del mensaje del Maitre', ' ', ' ', 'Reservationen var gjord efter hovmästarens kommentar.', ' ', '', '', '', ''),
(114, '_sorry', 'Sorry, something goes wrong!', 'Uups, es ging etwas schief!', 'Désolé, quelque chose c`est mal passé !', 'Apellido, saludo', '', ' ', 'Ledsen, något har gått fel!', ' ', '', '', '', ''),
(115, '_general', 'General', 'Allgemein', 'Général', 'General', ' ', ' ', 'Allmänt', ' ', '', '', '', ''),
(116, '_fill_out', 'Fill out for sending a confirmation.', 'Zum Zusenden einer Bestätigung ausfüllen.', 'Remplissez pour recevoir un courriel de confirmation.', 'Rellene el envío de una confirmación.', ' ', ' ', 'Fyll i för att skicka en bekräftelse.', ' ', '', '', '', ''),
(117, '_confirmation_email', 'Confirmation Email', 'Bestätigungsemail', 'Courriel de confirmation', 'La confirmación de correo electrónico', ' ', ' ', 'Bekräftelse email', ' ', '', '', '', ''),
(118, '_database', 'Database', 'Datenbank', 'Base de données', 'Base de datos', ' ', ' ', 'Databas', ' ', '', '', '', ''),
(119, '_path', 'Path', 'Pfad', 'Chemin', 'Ruta', ' ', ' ', 'Sökväg', ' ', '', '', '', ''),
(120, '_language', 'Language', 'Sprache', 'Langue', 'Idioma', ' ', ' ', 'Språk', ' ', '', '', '', ''),
(121, '_title', 'Title', 'Titel', 'Titre', 'Título', ' ', ' ', 'Titel', ' ', '', '', '', ''),
(122, '_booknum', 'Booking number', 'Buchungsnummer', '', '', '', '', 'Bokningsnummer', '', '', '', '', ''),
(123, '_zip', 'ZIP', 'PLZ', '', '', '', '', 'Postnr', '', '', '', '', ''),
(124, '_english', 'English', 'Deutsch', 'Français', '', ' ', ' ', 'Svenska', ' ', '', '', '', ''),
(125, '_international', 'International', 'Englisch', 'Anglais', '', ' ', ' ', 'Engelska', ' ', '', '', '', ''),
(127, '_till_', 'till', 'bis', '', '', ' ', ' ', 'till', ' ', '', '', '', ''),
(128, '_at_', 'at', 'um', '', '', ' ', ' ', 'till?', ' ', '', '', '', ''),
(129, '_reserved', 'reserved', 'reserviert', '', '', ' ', ' ', 'reserverat', ' ', '', '', '', ''),
(130, '_active', 'Active', 'Aktiv', '', '', '', '', 'Aktiv', '', '', '', '', ''),
(131, '_retype', 'Retype', 'Wiederhole', '', '', '', '', 'Omregistrera?', '', '', '', '', ''),
(132, '_cuisine_style', 'Cuisine Style', 'Küchenrichtung', '', '', '', '', 'Tema', '', '', '', '', ''),
(133, '_sp_events', 'Special Event', 'Sonderveranstaltung', '', '', '', '', 'Event', '', '', '', '', ''),
(134, '_subject', 'Subject', 'Betreff', '', '', '', '', 'Ämne', '', '', '', '', ''),
(135, '_open_to', 'Open to', 'Frei für', '', '', '', '', 'Öppet till', '', '', '', '', ''),
(136, '_contact', 'Contact', 'Kontakt', '', '', '', '', 'Kontakt', '', '', '', '', ''),
(137, '_advertise_start', 'Start advertise', 'Werbung starten', '', '', '', '', 'Start information', '', '', '', '', ''),
(138, '_days', 'Days', 'Tage', '', '', '', '', 'Dagar', '', '', '', '', ''),
(139, '_email_subject', 'Reservation confirmation for', 'Reservierungsbestätigung für', '', '', '', '', 'Bekräftelse bordsbokning', '', '', '', '', ''),
(140, '_dear_mr', 'Dear Mr.', 'Sehr geehrter Herr', 'Cher Monsieur', '', ' ', ' ', 'Bästa herr', ' ', '', '', '', ''),
(141, '_dear_mrs', 'Dear Mrs.', 'Sehr geehrte Frau', 'Cher Madame', '', ' ', ' ', 'Bäste fru', ' ', '', '', '', ''),
(142, '_dear_sirs_and_madams', 'Dear Sirs and Madams', 'Sehr geehrte Damen und Herren', 'Chers Messieurs et Madames', '', ' ', ' ', 'Bäste herr och fru', ' ', '', '', '', ''),
(143, '_dear_family', 'Dear Family', 'Liebe Familie', 'Chère famille', '', ' ', ' ', 'Kära familj', ' ', '', '', '', ''),
(144, '_property', 'Property', 'Anwesen', '', '', '', '', '??Område??', '', '', '', '', ''),
(145, '_M_', 'Mr.', 'Herr', 'Monsieur', '', '', '', 'Herr', '', '', '', '', ''),
(146, '_W_', 'Mrs.', 'Frau', 'Madame', '', '', '', 'Fru', '', '', '', '', ''),
(147, '_F_', 'Fam.', 'Fam.', 'Famille', '', '', '', 'Familj', '', '', '', '', ''),
(148, '_C_', 'Company', 'Firma', 'Société', '', '', '', 'Företag', '', '', '', '', ''),
(149, '_mail', 'Invoice', 'Rechnung', '', '', '', '', 'Faktura', '', '', '', '', ''),
(150, '_room', 'Room', 'Zimmer', 'Chambre', '', '', '', 'Rum', '', '', '', '', ''),
(151, '_HG_', 'Inhouse Guest', 'Hausgast', '', '', '', '', 'Inhouse gäst', '', '', '', '', ''),
(152, '_PASS_', 'Passer by', 'Passant', 'Passants', '', '', '', 'Drop in', '', '', '', '', ''),
(153, '_WALK_', 'Walk in', 'Walk in', '', '', '', '', 'Walk in', '', '', '', '', ''),
(154, '_create', 'Create', 'Anlegen', '', '', '', '', 'Skapa', '', '', '', '', ''),
(155, '_year', 'Year', 'Jahr', '', '', '', '', 'År', '', '', '', '', ''),
(156, '_created', 'created at', 'angelegt am', '', '', '', '', 'Skapad den', '', '', '', '', ''),
(157, '_back', 'Back', 'Zurück', '', '', '', '', 'Tillbaka', '', '', '', '', ''),
(158, '_detail', 'Detail', 'Detail', 'Detail', '', '', '', 'Detaljer', '', '', '', '', ''),
(159, '_passerby', 'Passerby', 'Passanten', 'Passants', '', '', '', 'Drop in', '', '', '', '', ''),
(160, '_duration', 'Residence time', 'Verweildauer', '', '', '', '', 'Längd', '', '', '', '', ''),
(161, '_history', 'Guest History', 'Gast Historie', '', '', '', '', 'Gäst historik', '', '', '', '', ''),
(162, '_no_', 'No', 'Nein', 'No', '', '', '', 'Nej', '', '', '', '', ''),
(164, '_yes_', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', '', '', '', ''),
(165, '_statuslist', 'NYA,Arrived,Seated,Parked,Departed,No Show', 'NYA,Angekommen,Plaziert,an Bar,Gegangen,No Show', '', '', '', '', 'NYA,Ankommit,Sittande,Flyttad,Avgått,No Show', '', '', '', '', ''),
(166, '_delete_all_entries', 'delete series', 'serie löschen', '', '', '', '', 'Radera alla poster', '', '', '', '', ''),
(167, '_settings', 'Settings', 'Einstellungen', '', '', '', '', 'Inställningar', '', '', '', '', ''),
(168, '_hello', 'Hello', 'Guten Tag', '', '', '', '', 'Hej', '', '', '', '', ''),
(170, '_city', 'City', 'Stadt', '', '', '', '', 'Ort', '', '', '', '', ''),
(171, '_phone', 'Phone', 'Telefon', '', '', '', '', 'Telefon', '', '', '', '', ''),
(172, '_fax', 'Facsimile', 'Telefax', '', '', '', '', 'Telefax', '', '', '', '', ''),
(173, '_country', 'Country', 'Land', '', '', '', '', 'Land', '', '', '', '', ''),
(174, '_img', 'Image', 'Bild', '', '', '', '', 'Bild', '', '', '', '', ''),
(175, '_free', 'free', 'frei', '', '', '', '', 'Gratis', '', '', '', '', ''),
(177, '_email_confirmation_en', 'Thank you very much for your reservation in our %s.\r\nWith pleasure we confirm your reservation for %s person(s) on %s at %s.\r\n\r\nIf you want cancel your reservation please use your booking number \'%s\' at the homepage.\r\n\r\nWe wish you an enjoyable stay at our restaurant and are looking forward to your visit!\r\n\r\nYours\r\n %s', 'Thank you very much for your reservation in our %s.\r\nWith pleasure we confirm your reservation for %s person(s) on %s at %s.\r\n\r\nIf you want cancel your reservation please use your booking number \'%s\' at the homepage.\r\n\r\nWe wish you an enjoyable stay at our restaurant and are looking forward to your visit!\r\n\r\nYours\r\n %s', 'Thank you very much for your reservation in our %s.\r\nWith pleasure we confirm your reservation for %s person(s) on %s at %s.\r\n\r\nIf you want cancel your reservation please use your booking number \'%s\' at the homepage.\r\n\r\nWe wish you an enjoyable stay at our restaurant and are looking forward to your visit!\r\n\r\nYours\r\n %s', 'Thank you very much for your reservation in our %s.\r\nWith pleasure we confirm your reservation for %s person(s) on %s at %s.\r\n\r\nIf you want cancel your reservation please use your booking number \'%s\' at the homepage.\r\n\r\nWe wish you an enjoyable stay at our restaurant and are looking forward to your visit!\r\n\r\nYours\r\n %s', 'Thank you very much for your reservation in our %s.\r\nWith pleasure we confirm your reservation for %s person(s) on %s at %s.\r\n\r\nIf you want cancel your reservation please use your booking number \'%s\' at the homepage.\r\n\r\nWe wish you an enjoyable stay at our restaurant and are looking forward to your visit!\r\n\r\nYours\r\n %s', 'Thank you very much for your reservation in our %s.\r\nWith pleasure we confirm your reservation for %s person(s) on %s at %s.\r\n\r\nIf you want cancel your reservation please use your booking number \'%s\' at the homepage.\r\n\r\nWe wish you an enjoyable stay at our restaurant and are looking forward to your visit!\r\n\r\nYours\r\n %s', 'Thank you very much for your reservation in our %s.\r\nWith pleasure we confirm your reservation for %s person(s) on %s at %s.\r\n\r\nIf you want cancel your reservation please use your booking number \'%s\' at the homepage.\r\n\r\nWe wish you an enjoyable stay at our restaurant and are looking forward to your visit!\r\n\r\nYours\r\n %s', 'Thank you very much for your reservation in our %s.\r\nWith pleasure we confirm your reservation for %s person(s) on %s at %s.\r\n\r\nIf you want cancel your reservation please use your booking number \'%s\' at the homepage.\r\n\r\nWe wish you an enjoyable stay at our restaurant and are looking forward to your visit!\r\n\r\nYours\r\n %s', '', '', '', ''),
(178, '_email_subject_en', 'Reservation confirmation for ', 'Reservation confirmation for ', 'Reservation confirmation for ', 'Reservation confirmation for ', 'Reservation confirmation for ', 'Reservation confirmation for ', 'Reservation confirmation for ', 'Reservation confirmation for ', '', '', '', ''),
(163, '_email_confirmation', 'Thank you very much for your reservation in our %s.\r\nWith pleasure we confirm your reservation for %s person(s) on %s at %s.\r\n\r\nIf you want cancel your reservation please use your booking number \'%s\' at the homepage.\r\n\r\nWe wish you an enjoyable stay at our restaurant and are looking forward to your visit!\r\n\r\nYours\r\n %s', 'Vielen Dank für Ihre Reservierung in unserem %s.\r\nGerne haben wir für Sie %s Person(en) am %s um %s reserviert.\r\n\r\nWenn Sie Ihre Reservierung stornieren möchten, können Sie dies mit der Buchungsnummer \'%s\' auf der Homepage vornehmen.\r\n\r\nWir wünschen Ihnen einen angenehmen Aufenthalt in unserem Restaurant und freuen uns auf Ihren Besuch!\r\n\r\nBeste Grüße\r\n%s', '', '', '', '', 'Tack för er reservation för %s.\r\nVi bekräftar er reservation för %s person/er den %s hos %s.\r\n\r\nVid ändring eller avbokning hänvisa till bokningsnummer: \'%s\'.', '', '', '', '', ''),
(126, '_before', 'before', 'zuvor', '', '', '', '', 'före', '', '', '', '', ''),
(72, '_occupancy_per_month', 'Occupancy per month', 'Belegung pro Monat', 'Occupation par mois', 'Ocupaci&oacute;n por mes', ' ', ' ', 'Beläggning per månad', ' ', '', '', '', ''),
(71, '_guest_type_per_month', 'Guest type per month', 'Gastart pro Monat', 'Catégorie de client par mois', ' Tipo de huésped por mes', '', ' ', 'Gästtyp per månad', ' ', '', '', '', ''),
(179, '_already_user_1', 'The unsername', 'Den Benutzername', 'The unsername', 'The unsername', 'The unsername', 'The unsername', 'The unsername', 'The unsername', 'The unsername', 'The unsername', 'The unsername', 'The unsername'),
(180, '_already_user_2', 'does already exist.', 'gibt es bereits.', 'does already exist.', 'does already exist.', 'does already exist.', 'does already exist.', 'does already exist.', 'does already exist.', 'does already exist.', 'does already exist.', 'does already exist.', 'does already exist.');

");


echo "<li><span class='bold'>The translation texts had been inserted.</strong></li>";

?>
