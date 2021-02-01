<?php
return [
    'login' => [
        'title' => 'Loggen Sie sich in Ihr Konto ein',
        'invalidUsernamePassword' => 'Ungültiger Benutzername oder Passwort.',
        'lockedMinutes' => 'Login gesperrt für %minutes% minutes',
        'attemptNumber' => '(Versuche: %attempt1% von %attempt2%)',
        'accountLocked' => 'Konto ist gesperrt.',
        'rememberMe' => 'Erinnere mich',
        'button' => 'Login'
    ],
    'dashboard' => [
        'menu' => 'Dashboard'
    ],
    'tickets' => [
        'menu' => 'Tickets',
        'showingResults' => 'Zeigen %x% bis %y% von %z%',
        'totalReplies' => '%number% Antworten',
        'id' => 'Ticket ID',
        'removeConfirmation' => 'Möchten Sie diese Tickets wirklich entfernen?',
        'showOverdueOnly' => 'Nur überfällige Tickets anzeigen',
        'active' => 'Aktiv',
        'attachmentRemoved' => 'Anhang wurde entfernt.',
        'messageSent' => 'Ihre Nachricht wurde gesendet.',
        'newTicket' => 'Neues Ticket',
        'submitNewTicket' => 'Neues Ticket einreichen',
        'fullName' => 'Optional. Wenn das Ticket an einen vorhandenen Kunden gesendet wird, können Sie nur die E-Mail-Adresse eingeben.',
        'departments' => 'Bereiche',
        'agentsAssigned' => 'Zugewiesene Agenten',
        'departmentsRemoveConfirmation' => 'Möchten Sie diesen Bereich und die vorhandenen Tickets wirklich entfernen?',
        'departmentRemoved' => 'Bereich und enthaltene Tickets wurden entfernt.',
        'departmentUpdated' => 'Bereich wurde aktualisiert.',
        'editDepartment' => 'Bereich editieren',
        'newDepartment' => 'Neuer Bereich',
        'departmentCreated' => 'Neuer Bereich wurde erstellt.'
    ],
    'account' => [
        'menu' => 'Konto',
        'online' => 'online',
        'loginLog' => 'Login Protokolle',
        'logout' => 'Ausloggen',
        'profile' => 'Profil',
        'changePassword' => 'Passwort ändern',
        'timezone' => 'Zeitzone',
        'timezoneDescription' => 'Wenn Sie keine Zeitzone auswählen, verwenden Sie die Standardzeitzone des Helpdesks.',
        'passwordUpdated' => 'Passwort wurde verändert.',
        'profileUpdated' => 'Ihr Profil wurde aktualisiert.',
        'avatarRemoved' => 'Avatar wurde entfernt.'
    ],
    'cannedResponses' => [
        'menu' => 'Vordefinierte Antworten',
        'removeConfirmation' => 'Möchten Sie diese vordefinierten Antworten wirklich entfernen?',
        'edit' => 'Vordefinierte Antworten ändern',
        'new' => 'Vordefinierte Antwort erstellen'
    ],
    'kb' => [
        'menu' => 'Wissensdatenbank',
        'articles' => 'Artikel',
        'categories' => 'Kategorien',
        'newCategory' => 'Neue Kategorie',
        'category' => 'Kategorie',
        'editCategory' => 'Kategorie editieren',
        'addSubcategory' => 'Unterkategorie hinzufügen',
        'newArticle' => 'Neuer Artikel',
        'removeCategory' => 'Kategorie entfernen',
        'removeConfirmation' => 'Möchten Sie diese Kategorie und ihre Unterkategorien und Artikel wirklich entfernen?',
        'categoryRemoved' => 'Kategorie wurde entfernt.',
        'categoryCreated' => 'Neue Kategorie wurde erstellt.',
        'categoryUpdated' => 'Kategorie wurde aktualisiert.',
        'article' => 'Artikel',
        'author' => 'Autor',
        'editArticle' => 'Artikel editieren',
        'removeArticleConfirmation' => 'Möchten Sie diesen Artikel wirklich entfernen?'
    ],
    'agents' => [
        'menu' => 'Agenten',
        'agentRemoved' => 'Agent wurde entfernt.',
        'registration' => 'Registrierung',
        'lastLogin' => 'Letzte Anmeldung',
        'administrator' => 'Administrator',
        'agent' => 'Agent',
        'edit' => 'Agent editieren',
        'new' => 'Neuer Agent',
        'informationUpdated' => 'Die Agenteninformationen wurden aktualisiert.',
        'removeConfirmation' => 'Möchten Sie diesen Agenten wirklich entfernen?',
        'agentCreated' => 'Neuer Agent wurde erstellt.',
        'assignedDepartments' => 'Zugeordnete Bereiche'
    ],
    'settings' => [
        'menu' => 'Konfiguration',
        'general' => 'Allgemein',
        'security' => 'Sicherheit',
        'tickets' => 'Tickets',
        'kb' => 'Wissensdatenbank',
        'emailAddresses' => 'E-Mail-Adressen',
        'emailTemplates' => 'E-Mail-Vorlagen',
        'changeLogo' => 'Logo ändern',
        'logoRestored' => 'Das Standardlogo wurde wiederhergestellt.',
        'logoChanged' => 'Das Logo wurde geändert.',
        'brandName' => 'Markenname',
        'brandNameDescription' => ' Der Firmenname wird verwendet, um das Support Center und ausgehende E-Mails zu kennzeichnen. Zum Beispiel: HelpDeskZ Inc.',
        'windowTitle' => 'Fenstertitel',
        'windowTitleDescription' => 'Dies ist der Titel, der auf der Registerkarte des Browsers angezeigt wird. Wenn Ihre Helpdesk-Seite mit einem Lesezeichen versehen ist, ist dies der Titel / Name der Seite.',
        'pageSize' => 'Standard-Seitengröße',
        'pageSizeDescription' => 'Wählen Sie die Anzahl der pro Seite angezeigten Elemente.',
        'dateFormat' => 'Datumsformat',
        'dateFormatDescription' => 'Definieren Sie das Datumsformat für Kunden. [a]Siehe PHP-Datumsformatierungstabelle[/a]',
        'defaultTimezone' => 'Standardzeitzone',
        'defaultTimezoneDescription' => 'Wählen Sie die Standardzeitzone für neue Kunden oder Mitarbeiter aus. Dies gilt, wenn Kunden oder Mitarbeiter keine eigenen Einstellungen ausgewählt haben.',
        'defaultServerTimezone' => 'Standard-Server-Zeitzone',
        'maintenanceMode' => 'Wartungsmodus',
        'maintenanceMessage' => 'Wartungsmeldung',
        'recaptchaStatus' => 'reCAPTCHA Status',
        'siteKey' => 'Site Schlüssel',
        'privateKey' => 'Privater Schlüssel',
        'maxLoginAttempts' => 'Maximale Anzahl von Anmeldeversuchen',
        'minutesIpLocking' => 'Dauer der IP-Sperrung nach Überschreitung der maximalen Anzahl von Anmeldeversuchen',
        'updated' => 'Einstellungen wurden aktualisiert.',
        'displayOrderReplies' => 'Reihenfolge für Ticketantworten anzeigen',
        'ticketsPerPage' => 'Tickets pro Seite',
        'ticketsPerPageDescription' => 'Die maximale Anzahl von Tickets, die angezeigt werden sollen, bevor sie auf mehrere Seiten aufgeteilt werden.',
        'repliesPerPage' => 'Antworten pro Seite',
        'repliesPerPageDescription' => 'Die maximale Anzahl von Ticketantworten, die angezeigt werden sollen, bevor sie auf mehrere Seiten aufgeteilt werden.',
        'defaultDeadline' => 'Standardfrist für die Antwortzeit',
        'defaultDeadlineDescription' => 'Wenn der Agent nicht innerhalb dieser Stunden antwortet, wird das Ticket als überfällig markiert.',
        'defaultAutoClose' => 'Standardzeit zum Schließen des Tickets',
        'defaultAutoCloseDescription' => 'Wenn der Kunde nicht innerhalb dieser Zeit antwortet, wird das Ticket automatisch geschlossen.',
        'allowAttachments' => 'Anhänge zulassen',
        'numberAttachments' => 'Anzahl der zulässigen Anhänge',
        'maxUploadSize' => 'Maximale Upload-Größe',
        'maxUploadSizeDescription' => 'Entsprechend Ihrer PHP-Konfiguration kann es nicht höher sein als %size%',
        'allowedFileTypes' => 'Zulässige Dateitypen',
        'allowedFileTypesDescription' => 'Geben Sie die erlaubten Dateierweiterungen durch Kommas getrennt ein.',
        'newestReplyFirst' => 'Neueste Antwort zuerst',
        'oldestReplyFirst' => 'Älteste Antwort zuerst',
        'articlesUnderCategory' => 'Artikel, die unter einer Kategorie angezeigt werden sollen',
        'charLimitArticlePreview' => 'Zeichenbeschränkung für Artikelvorschau',
        'charLimitArticlePreviewDescription' => 'Die maximale Anzahl von Zeichen, die in der Artikelvorschau angezeigt werden sollen.',
        'popularArticles' => 'Anzahl der beliebten Artikel, die angezeigt werden sollen',
        'newestArticles' => 'Anzahl der neuesten Artikel, die angezeigt werden sollen',
        'editEmailTemplate' => 'E-Mail-Vorlage bearbeiten',
        'defaultEmailAddressDescription' => 'Die Standard-E-Mail-Adresse wird zum Senden von Benachrichtigungen oder Nachrichten von Bereichen verwendet, denen keine E-Mail-Adresse zugeordnet ist.',
        'newEmailAddress' => 'Neue E-Mail-Adresse',
        'emailDeletionConfirm' => 'Möchten Sie diese E-Mail-Adresse wirklich entfernen?',
        'outgoing' => 'Postausgangsserver',
        'host' => 'Host',
        'port' => 'Port',
        'encryption' => 'Verschlüsselung',
        'incoming' => 'Posteingangsserver',
        'incomingInformation' => 'Das System löscht alle E-Mails aus der Mailbox, sobald sie heruntergeladen wurden. Dies geschieht, um die bestmögliche Leistung für den E-Mail-Bearbeitungsprozess auf der Webserverseite sicherzustellen. Wenn Sie eine Sicherungskopie der E-Mails wünschen, empfehlen wir, ein neues Postfach zu erstellen, an das Sie alle eingehenden E-Mails weiterleiten.',
        'editEmailAddress' => 'E-Mail-Adresse bearbeiten',
        'emailTemplateUpdated' => 'E-Mail-Vorlage wurde aktualisiert.',
        'defaultEmailChanged' => 'Die Standard-E-Mail-Adresse wurde geändert.',
        'emailRemoved' => 'E-Mail-Adresse wurde entfernt.',
        'smtpHost' => 'SMTP Host',
        'smtpPort' => 'SMTP Port',
        'smtpEncryption' => 'SMTP Verschlüsselung',
        'incomingHost' => 'Eingehender Host',
        'incomingPort' => 'Eingehender Port',
        'incomingUsername' => 'Eingehender Username',
        'incomingPassword' => 'Eingehendes Passwort',
        'emailCreated' => 'Neue E-Mail-Adresse wurde hinzugefügt.',
        'emailUpdated' => 'E-Mail-Adresse wurde aktualisiert.',
    ],
    'tools' => [
        'menu' => 'Werkzeuge',
        'customFields' => 'Benutzerdefinierte Felder',
        'fieldTitle' => 'Feldtitel',
        'fieldType' => 'Feldtyp',
        'required' => 'Erforderlich',
        'newCustomField' => 'Neues benutzerdefiniertes Feld',
        'editCustomField' => 'Benutzerdefiniertes Feld bearbeiten',
        'textField' => 'Textfeld',
        'textArea' => 'Textbereich',
        'checkbox' => 'Checkbox',
        'radio' => 'Radio',
        'dropdownSelect' => 'Drop-down',
        'date' => 'Datum',
        'defaultValue' => 'Standardwert',
        'options' => 'Optionen',
        'optionsDescription' => ' Geben Sie eine Option pro Zeile ein. Jede Zeile ist eine Auswahl, aus der Ihre Kunden wählen können',
        'select' => 'Select',
        'customFieldInserted' => 'Es wurde ein neues benutzerdefiniertes Feld erstellt.',
        'customFieldUpdated' => 'Benutzerdefinierte Felder wurden aktualisiert.',
        'customFieldConfirm' => 'Möchten Sie dieses benutzerdefinierte Feld wirklich entfernen?',
        'invalidCustomField' => 'Ungültiges benutzerdefiniertes Feld.',
        'customFieldRemoved' => 'Benutzerdefiniertes Feld wurde entfernt.'
    ],
    'users' => [
        'menu' => 'Benutzer',
        'newUser' => 'Neuer Benutzer',
        'editUser' => 'Benutzer bearbeiten',
        'removeUserConfirmation' => 'Möchten Sie diesen Benutzer und seine Tickets wirklich entfernen?',
        'userRemoved' => 'Benutzer wurde entfernt.',
        'notifyNewAccount' => 'Senden Sie eine E-Mail mit Kontoinformationen an den Benutzer',
        'accountCreated' => 'Benutzerkonto wurde erstellt.',
        'accountUpdated' => 'Benutzerkonto wurde aktualisiert.'
    ],
    'form' => [
        'username' => 'Benutzername',
        'password' => 'Passwort',
        'searchTicket' => 'Ticket suchen',
        'keyword' => 'Stichwort',
        'dateOpened' => 'Datum Eröffnung',
        'lastUpdate' => 'Letztes Update',
        'department' => 'Bereich',
        'allDepartments' => 'Alle Bereiche',
        'status' => 'Status',
        'search' => 'Suche',
        'open' => 'Offen',
        'answered' => 'Beantwortet',
        'awaiting_reply' => 'Warten auf Antwort',
        'in_progress' => 'In Bearbeitung',
        'closed' => 'Geschlossen',
        'overdue' => 'Überfällig',
        'todayAt' => 'Heute um %date%',
        'yesterdayAt' => 'Gestern um %date%',
        'subject' => 'Betreff',
        'lastReply' => 'Letzte Antwort',
        'priority' => 'Priorität',
        'massAction' => 'Massenbearbeitung',
        'noChange' => 'Keine Änderung',
        'submit' => 'Absenden',
        'delete' => 'Löschen',
        'cancel' => 'Abbrechen',
        'general' => 'Allgemein',
        'reply' => 'Antwort',
        'createdOn' => 'Erstellt am %date%',
        'updatedOn' => 'Aktualisiert am %date%',
        'save' => 'Speichern',
        'to' => 'An',
        'quickInsert' => 'Schnelles Einfügen',
        'attachments' => 'Anhänge',
        'allowedFiles' => 'Erlaubte Dateien',
        'browse' => 'Durchsuchen',
        'chooseFile' => 'Datei auswählen',
        'quote' => 'Zitat',
        'staff' => 'Mitarbeiter',
        'uploadImage' => 'Bild hochladen',
        'total' => 'Total',
        'download' => 'Download',
        'dropImageHere' => 'Legen Sie das Bild hier ab, um es hochzuladen',
        'fullName' => 'Vollständiger Name',
        'email' => 'E-Mail-Adresse',
        'dateCreated' => 'Erstellt am',
        'createdBy' => 'Erstellt von',
        'title' => 'Titel',
        'message' => 'Nachricht',
        'specialTags' => 'Spezielle Tags',
        'clientName' => 'Kundenname',
        'clientEmail' => 'Kunden-E-Mail-Adresse',
        'goBack' => 'Zurück',
        'type' => 'Typ',
        'public' => 'Öffentlich',
        'private' => 'Privat',
        'action' => 'Aktion',
        'categoryName' => 'Kategoriename',
        'parentCategory' => 'Eltern-Kategorie',
        'rootCategory' => 'Wurzelkategorie',
        'view' => 'Ansehen',
        'all' => 'Alle',
        'views' => 'Ansichten',
        'displayOrder' => 'Reihenfolge',
        'beginningList' => 'Am Anfang der Liste',
        'endList' => 'Am Ende der Liste',
        'afterItem' => 'Nach %item%',
        'notModify' => 'Nicht ändern',
        'never' => 'Nie',
        'active' => 'Aktiv',
        'locked' => 'Gesperrt',
        'leaveBlankNotChange' => 'Lassen Sie es leer, um es nicht zu ändern.',
        'yes' => 'Ja',
        'no' => 'Nein',
        'enable' => 'Aktiviert',
        'disable' => 'Deaktiviert',
        'default' => 'Standard',
        'setDefault' => 'Standard festlegen',
        'edit' => 'Bearbeiten',
        'emailName' => 'E-Mail-Name',
        'none' => 'Keiner',
        'signature' => 'Signatur',
        'newPassword' => 'Neues Passwort',
        'existingPassword' => 'Bestehendes Passwort',
        'confirm' => 'Bestätigen',
        'enterExistingPassword' => 'Geben Sie Ihr vorhandenes Passwort ein.',
        'enterNewPassword' => 'Geben Sie Ihr neues Passwort ein.',
        'manage' => 'Verwalten',
        'avatar' => 'Benutzerbild',
        'deleteAvatar' => 'Benutzerbild löschen',
        'user' => 'Benutzer',
    ],
    'error' => [
        'recordsNotFound' => 'Datensätze nicht gefunden.',
        'noItemsSelected' => 'Sie haben kein Ticket ausgewählt.',
        'invalidCannedResponse' => 'Ungültige vordefinierte Antwort.',
        'ticketNotFound' => 'Ticket wurde nicht gefunden.',
        'ticketNotPermission' => 'Sie haben keine Berechtigung zum Anzeigen dieses Tickets.',
        'invalidDepartment' => 'Ungültiger Bereich.',
        'invalidStatus' => 'Ungültiger Status.',
        'invalidPriority' => 'Ungültige Priorität.',
        'enterMessage' => 'Geben Sie Ihre Nachricht ein.',
        'enterValidEmail' => 'Geben sie eine gültige E-Mail-Adresse an.',
        'enterSubject' => 'Geben Sie den Betreff ein.',
        'fileNotAllowed' => 'Dateityp ist nicht erlaubt.',
        'fileBig' => 'Datei ist zu groß. Maximale Größe ist %size%',
        'enterTitle' => 'Geben Sie den Titel ein',
        'enterCategoryName' => 'Geben Sie den Kategorienamen ein.',
        'selectParentCategory' => 'Wählen Sie eine gültige übergeordnete Kategorie aus.',
        'selectCategoryType' => 'Wählen Sie den Kategorietyp.',
        'selectCategory' => 'Wählen Sie eine gültige Kategorie.',
        'selectArticleType' => 'Wählen Sie den Artikeltyp.',
        'enterContent' => 'Geben Sie den Inhalt ein.',
        'enterDepartmentName' => 'Geben Sie den Bereichsnamen ein.',
        'selectDepartmentType' => 'Wählen Sie einen gültigen Bereichstyp.',
        'enterFullName' => 'Geben Sie den vollständigen Namen ein.',
        'enterUsername' => 'Geben Sie einen gültigen Benutzernamen ein.',
        'usernameTaken' => 'Der Benutzername wird von einem anderen Agenten verwendet.',
        'emailTaken' => 'E-Mail-Adresse wird von einem anderen Benutzer verwendet.',
        'selectTypeAccess' => 'Wählen Sie einen gültigen Zugriffstyp.',
        'enterPassword' => 'Geben Sie ein gültiges Passwort ein, das mindestens 6 Zeichen lang sein muss.',
        'selectLogo' => 'Wählen Sie ein gültiges Bild für das Logo.',
        'logoSize' => 'Logo ist zu groß. Maximale Größe ist %size%',
        'uploadingLogo' => 'Fehler beim Hochladen des Logos, versuchen Sie es erneut.',
        'enterSiteName' => 'Geben Sie den Markennamen ein.',
        'enterWindowTitle' => 'Geben Sie den Fenstertitel ein.',
        'enterPageSize' => 'Geben Sie eine gültige Seitengröße ein.',
        'enterDateFormat' => 'Geben Sie das Datumsformat ein.',
        'selectTimezone' => 'Wählen Sie eine gültige Zeitzone.',
        'selectCaptchaStatus' => 'Wählen Sie den Captcha-Status.',
        'enterSiteKey' => 'Geben Sie den Site-Schlüssel ein.',
        'enterPrivateKey' => 'Geben Sie den privaten Schlüssel ein.',
        'enterMaxAttempts' => 'Geben Sie eine gültige Nummer für maximale Anmeldeversuche ein.',
        'enterMinutesIpLocking' => 'Geben Sie eine gültige Nummer für Minuten der IP-Sperrung ein.',
        'emailExists' => 'Diese E-Mail Adresse ist bereits vergeben.',
        'selectOutgoing' => 'Wählen Sie einen gültigen Typ für ausgehende E-Mails',
        'selectIncoming' => 'Wählen Sie einen gültigen Typ der eingehenden E-Mail',
        'emailTakenDepartment' => 'Andere E-Mails haben diesen Supportbereich übernommen.',
        'passwordsNotMatches' => 'Die neu eingegebenen Passwörter stimmen nicht überein.',
        'wrongExistingPassword' => 'Ihr vorhandenes Passwort ist falsch.',
        'passwordTooShort' => 'Das neue Passwort muss mindestens 6 Zeichen lang sein.',
        'selectDepartment' => 'Wählen Sie ein Bereich aus.',
        'departmentNotExist' => 'Ausgewählter Bereich existiert nicht.'
    ],
    'twoFactor' => [
        'title' => 'Zwei-Faktor-Authentifizierung',
        'info' => 'Schützen Sie Ihr Konto mit einem hochsicheren Login.',
        'downloadApp' => ' Laden Sie die App für Android oder %1%iPhone%0% und %2%iPad%0%',
        'secretKey' => 'Geheimer Schlüssel',
        'verificationCode' => 'Verifizierungs-Schlüssel',
        'enter2FA' => 'Geben Sie die 6 Ziffern Ihrer mobilen App ein.',
        'backupCode' => 'Speichern Sie diesen Code!',
        'activate' => 'Aktivieren Sie die Zwei-Faktor-Authentifizierung',
        'deactivate' => 'Deaktivieren Sie die Zwei-Faktor-Authentifizierung',
        'activated' => 'Die Zwei-Faktor-Authentifizierung wurde aktiviert.',
        'deactivated' => 'Die Zwei-Faktor-Authentifizierung wurde deaktiviert.',
        'error' => [
            'isActive' => 'Die Zwei-Faktor-Authentifizierung ist bereits aktiv.',
            'invalidCode' => 'Ungültiger Bestätigungscode.',
            'invalidPassword' => 'Ungültiges Passwort.'
        ]
    ]
];