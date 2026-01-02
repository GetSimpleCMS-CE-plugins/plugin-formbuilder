<?php
if (!defined('IN_GS')) die('You cannot load this file directly!');

$i18n = array(
    'PLUGIN_NAME' => 'Kreator Formularzy',
    'PLUGIN_DESC' => 'Zaawansowany kreator formularzy z hCAPTCHA i SQLite3',
    'BTN_CREATE' => 'Utwórz nowy formularz',
    'BTN_BACK' => 'Wróć',
    'BTN_SAVE' => 'Zapisz formularz',
    'BTN_DELETE' => 'Usuń',
    'BTN_EDIT' => 'Edytuj',
    'BTN_REMOVE' => 'Usuń',
    'BTN_SUBMISSIONS' => 'Zgłoszenia',
    'BTN_ADD_FIELD' => 'Dodaj pole',
    'BTN_DUPLICATE' => 'Duplikuj',
    'TABLE_NAME' => 'Nazwa',
    'TABLE_SLUG' => 'Slug',
    'TABLE_SUBMISSIONS' => 'Zgłoszenia',
    'TABLE_STATUS' => 'Status',
    'TABLE_ACTIONS' => 'Akcje',
    'TABLE_MAIL_METHOD' => 'Metoda Email',
    'YOUR_FORMS' => 'Twoje formularze',
    'SUBMISSIONS_COUNT' => 'zgłoszeń',
    'SUBMISSIONS_COUNT_SINGLE' => 'zgłoszenie',
    'STATUS_PROTECTED' => 'Chroniony',
    'STATUS_PUBLIC' => 'Publiczny',
    'NO_FORMS' => 'Brak formularzy. Utwórz swój pierwszy formularz!',
    'HOW_TO_USE' => 'Jak używać',
    'IN_PAGE_CONTENT' => 'W treści strony',
    'IN_THEME' => 'W szablonie motywu',
    'GET_CAPTCHA' => 'Pobierz klucze hCaptcha',
    'FREE_AT_HCAPTCHA' => 'Za darmo na hCaptcha.com',
    'EDIT_FORM' => 'Edytuj formularz',
    'CREATE_FORM' => 'Utwórz nowy formularz',
    'EDIT_DESC' => 'Zmodyfikuj ustawienia formularza',
    'CREATE_DESC' => 'Zbuduj swój własny formularz',
    'FORM_SETTINGS' => 'Ustawienia formularza',
    'FORM_BEHAVIOR' => 'Zachowanie formularza',
    'EMAIL_CONFIGURATION' => 'Konfiguracja Email',
    'SECURITY' => 'Zabezpieczenia (hCaptcha)',
    'FORM_FIELDS' => 'Pola formularza',
    'FORM_NAME' => 'Nazwa formularza',
    'FORM_NAME_PH' => 'Formularz kontaktowy',
    'FORM_SLUG' => 'Slug',
    'FORM_SLUG_PH' => 'formularz-kontaktowy',
    'FORM_TITLE' => 'Tytuł wyświetlany',
    'FORM_TITLE_PH' => 'Skontaktuj się z nami',
    'FORM_DESC' => 'Opis',
    'FORM_DESC_PH' => 'Opis formularza',
    'SUBMIT_BTN' => 'Tekst przycisku wysyłania',
    'SUBMIT_DEFAULT' => 'Wyślij',
    'SUCCESS_MSG' => 'Komunikat sukcesu',
    'SUCCESS_DEFAULT' => 'Dziękujemy!',
    'EMAIL_TO' => 'Adres e-mail dla powiadomień',
    'REDIRECT_URL' => 'URL przekierowania (opcjonalnie)',
    'CAPTCHA_ENABLE' => 'Włącz ochronę hCAPTCHA',
    'CAPTCHA_SITE_KEY' => 'Klucz witryny hCAPTCHA',
    'CAPTCHA_SECRET' => 'Tajny klucz hCAPTCHA',
    
    // Email Method
    'MAIL_METHOD' => 'Metoda wysyłki email',
    'MAIL_METHOD_MAILTO' => 'PHP mail() - Standardowa',
    'MAIL_METHOD_SMTP' => 'SMTP - PHPMailer',
    
    // SMTP Settings
    'SMTP_HOST' => 'Host SMTP',
    'SMTP_HOST_PH' => 'smtp.gmail.com',
    'SMTP_PORT' => 'Port SMTP',
    'SMTP_PORT_PH' => '587',
    'SMTP_SECURITY' => 'Zabezpieczenie SMTP',
    'SMTP_SECURITY_TLS' => 'TLS',
    'SMTP_SECURITY_SSL' => 'SSL',
    'SMTP_SECURITY_NONE' => 'Brak',
    'SMTP_USERNAME' => 'Nazwa użytkownika SMTP',
    'SMTP_USERNAME_PH' => 'twoj-email@gmail.com',
    'SMTP_PASSWORD' => 'Hasło SMTP',
    'SMTP_PASSWORD_PH' => '••••••••',
    'SMTP_FROM_EMAIL' => 'Email nadawcy',
    'SMTP_FROM_EMAIL_PH' => 'noreply@example.com',
    'SMTP_FROM_NAME' => 'Nazwa nadawcy',
    'SMTP_FROM_NAME_PH' => 'Nazwa Strony',
    
    // SMTP Info Box
    'SMTP_INFO_TITLE' => 'Wskazówki konfiguracji SMTP',
    'SMTP_INFO_GMAIL' => 'Gmail: Użyj Hasła Aplikacji (nie zwykłego hasła)',
    'SMTP_INFO_PORT_587' => 'Port 587: Szyfrowanie TLS (zalecane)',
    'SMTP_INFO_PORT_465' => 'Port 465: Szyfrowanie SSL',
    
    // Field Configuration
    'FIELD_NUM' => 'Pole',
    'FIELD_TYPE' => 'Typ pola',
    'FIELD_NAME' => 'Nazwa pola (bez spacji)',
    'FIELD_NAME_PH' => 'imie_nazwisko',
    'FIELD_LABEL' => 'Etykieta',
    'FIELD_LABEL_PH' => 'Imię i nazwisko',
    'FIELD_PLACEHOLDER' => 'Placeholder',
    'FIELD_PLACEHOLDER_PH' => 'Wprowadź swoje imię...',
    'FIELD_OPTIONS' => 'Opcje (dla select/radio/checkbox, użyj |)',
    'FIELD_OPTIONS_PH' => 'Opcja 1|Opcja 2|Opcja 3',
    'FIELD_REQUIRED' => 'Pole wymagane',
    
    // Field Types
    'TYPE_TEXT' => '📝 Tekst',
    'TYPE_EMAIL' => '📧 Email',
    'TYPE_TEL' => '📞 Telefon',
    'TYPE_TEXTAREA' => '📄 Pole tekstowe',
    'TYPE_SELECT' => '📋 Lista rozwijana',
    'TYPE_RADIO' => '🔘 Przyciski radio',
    'TYPE_CHECKBOX' => '☑️ Pola wyboru',
    'TYPE_FILE' => '📎 Plik',
    
    // File Upload
    'FILE_ACCEPT' => 'Akceptowane typy plików (np. .pdf,.jpg)',
    'FILE_ACCEPT_PH' => '.pdf,.doc,.jpg,.png',
    'FILE_MAX_SIZE' => 'Maksymalny rozmiar pliku (MB)',
    'FILE_MAX_SIZE_PH' => '5',
    'FILE_ALLOWED' => 'Dozwolone',
    'FILE_MAX' => 'Maks',
    
    // Messages
    'MSG_SAVED' => '✓ Formularz zapisany pomyślnie!',
    'MSG_SUB_DELETED' => '✓ Zgłoszenie usunięte',
    'MSG_FORM_DUPLICATED' => '✓ Formularz został zduplikowany!',
    
    // Empty States
    'NO_FIELDS' => 'Brak pól. Kliknij "Dodaj pole"',
    'NO_SUBMISSIONS' => 'Brak zgłoszeń.',
    
    // Confirmations
    'CONFIRM_DELETE' => 'Usunąć ten formularz?',
    'CONFIRM_REMOVE_FIELD' => 'Usunąć to pole?',
    'CONFIRM_DELETE_SUB' => 'Usunąć?',
    
    // Submissions
    'SUBMISSIONS_TITLE' => 'Zgłoszenia',
    'SUBMISSIONS_DESC' => 'Zobacz i zarządzaj wszystkimi zgłoszeniami',
    'ALL_SUBMISSIONS' => 'Wszystkie zgłoszenia',
    'SUB_ID' => 'ID',
    'SUB_DATE' => 'Data',
    'SUB_IP' => 'IP',
    'SUB_DATA' => 'Dane',
    'VIEW_DATA' => 'Zobacz dane',
    
    // Frontend Errors
    'ERROR_CSRF' => 'Token bezpieczeństwa nieprawidłowy',
    'ERROR_RATE_LIMIT' => 'Zbyt wiele żądań. Proszę czekać.',
    'ERROR_CAPTCHA_REQUIRED' => 'Proszę wypełnić captcha',
    'ERROR_CAPTCHA_FAILED' => 'Weryfikacja captcha nie powiodła się',
    'ERROR_FILE_SIZE' => ': Plik zbyt duży (maks',
    'ERROR_FILE_TYPE' => ': Nieprawidłowy typ pliku',
    'ERROR_FILE_INVALID' => ': Nieprawidłowy plik',
    'ERROR_UPLOAD_FAILED' => ': Przesyłanie nie powiodło się',
    'ERROR_REQUIRED' => ' jest wymagane',
    'ERROR_EMAIL_INVALID' => ' jest nieprawidłowy',
    
    // Frontend
    'SELECT_OPTION' => 'Wybierz...',
    'REQUIRED_MARK' => '*',
    
    // Email
    'EMAIL_SUBJECT' => 'Zgłoszenie z formularza: ',
    'EMAIL_NEW_SUBMISSION' => 'Nowe zgłoszenie: ',
    
    'MAIL_CHARSET' => 'Kodowanie wiadomości',
'MAIL_CHARSET_UTF8' => 'UTF-8 (Unicode - zalecane)',
'MAIL_CHARSET_ISO' => 'ISO-8859-2 (Latin-2)',
'MAIL_CHARSET_WIN' => 'Windows-1250 (CP1250)',
'MAIL_CHARSET_INFO' => 'UTF-8 obsługuje wszystkie języki. Zmień tylko jeśli klient email ma problemy z wyświetlaniem.',

'FORM_LANGUAGE' => 'Frontend Form Language',
'FORM_LANGUAGE_INFO' => 'Select the language in which the form will be displayed to users.',

);
