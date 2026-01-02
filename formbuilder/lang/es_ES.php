<?php
if (!defined('IN_GS')) die('You cannot load this file directly!');

$i18n = array(
	'PLUGIN_NAME' => 'Constructor de formularios',
	'PLUGIN_DESC' => 'Constructor avanzado de formularios con hCAPTCHA, subida de archivos y notificaciones por correo.',
	
	// Buttons
	'BTN_CREATE' => 'Crear nuevo formulario',
	'BTN_BACK' => 'Volver',
	'BTN_SAVE' => 'Guardar formulario',
	'BTN_DELETE' => 'Borrar',
	'BTN_EDIT' => 'Editar',
	'BTN_REMOVE' => 'Eliminar',
	'BTN_SUBMISSIONS' => 'Envíos',
	'BTN_ADD_FIELD' => 'Añadir campo',
	'BTN_DUPLICATE' => 'Duplicar',
	
	// Table Headers
	'TABLE_NAME' => 'Nombre',
	'TABLE_SLUG' => 'Slug',
	'TABLE_SUBMISSIONS' => 'Envíos',
	'TABLE_STATUS' => 'Estado',
	'TABLE_ACTIONS' => 'Acciones',
	'TABLE_MAIL_METHOD' => 'Método de envío',
	
	// Lists
	'YOUR_FORMS' => 'Tus formularios',
	'SUBMISSIONS_COUNT' => 'envíos',
	'SUBMISSIONS_COUNT_SINGLE' => 'envío',
	
	// Status
	'STATUS_PROTECTED' => 'Protegido',
	'STATUS_PUBLIC' => 'Público',
	
	// Empty States
	'NO_FORMS' => 'Aún no hay formularios. ¡Crea el primero!',
	'NO_FIELDS' => 'Aún no hay campos. Haz clic en «Añadir campo»',
	'NO_SUBMISSIONS' => 'Aún no hay envíos.',
	
	// Info Box
	'HOW_TO_USE' => 'Cómo usarlo',
	'IN_PAGE_CONTENT' => 'En el contenido de la página',
	'IN_THEME' => 'En la plantilla del tema',
	'GET_CAPTCHA' => 'Obtener claves de hCAPTCHA',
	'FREE_AT_HCAPTCHA' => 'Gratis en hCaptcha.com',
	
	// Form Headers
	'EDIT_FORM' => 'Editar formulario',
	'CREATE_FORM' => 'Crear nuevo formulario',
	'EDIT_DESC' => 'Edita la configuración y los campos del formulario',
	'CREATE_DESC' => 'Crea un nuevo formulario',
	
	// Section Titles
	'FORM_SETTINGS' => 'Configuración del formulario',
	'FORM_BEHAVIOR' => 'Comportamiento del formulario',
	'EMAIL_CONFIGURATION' => 'Configuración del correo',
	'SECURITY' => 'Seguridad (hCAPTCHA)',
	'FORM_FIELDS' => 'Campos del formulario',
	
	// Form Settings
	'FORM_NAME' => 'Nombre del formulario *',
	'FORM_NAME_PH' => 'Formulario de contacto',
	'FORM_SLUG' => 'Slug *',
	'FORM_SLUG_PH' => 'formulario-contacto',
	'FORM_TITLE' => 'Título visible',
	'FORM_TITLE_PH' => 'Contacto',
	'FORM_DESC' => 'Descripción',
	'FORM_DESC_PH' => 'Descripción del formulario',
	
	// Form Behavior
	'SUBMIT_BTN' => 'Texto del botón de envío',
	'SUBMIT_DEFAULT' => 'Enviar',
	'SUCCESS_MSG' => 'Mensaje de confirmación',
	'SUCCESS_DEFAULT' => '¡Gracias!',
	'EMAIL_TO' => 'Correo de notificación',
	'REDIRECT_URL' => 'URL de redirección (opcional)',
	
	// Email Configuration
	'MAIL_METHOD' => 'Método de envío de correo',
	'MAIL_METHOD_MAILTO' => 'PHP mail() – Estándar',
	'MAIL_METHOD_SMTP' => 'SMTP – PHPMailer',
	
	// SMTP Settings
	'SMTP_HOST' => 'Servidor SMTP *',
	'SMTP_HOST_PH' => 'smtp.gmail.com',
	'SMTP_PORT' => 'Puerto SMTP *',
	'SMTP_PORT_PH' => '587',
	'SMTP_SECURITY' => 'Seguridad SMTP',
	'SMTP_SECURITY_TLS' => 'TLS',
	'SMTP_SECURITY_SSL' => 'SSL',
	'SMTP_SECURITY_NONE' => 'Ninguna',
	'SMTP_USERNAME' => 'Usuario SMTP *',
	'SMTP_USERNAME_PH' => 'tu-correo@gmail.com',
	'SMTP_PASSWORD' => 'Contraseña SMTP *',
	'SMTP_PASSWORD_PH' => '••••••••',
	'SMTP_FROM_EMAIL' => 'Correo del remitente',
	'SMTP_FROM_EMAIL_PH' => 'noreply@ejemplo.com',
	'SMTP_FROM_NAME' => 'Nombre del remitente',
	'SMTP_FROM_NAME_PH' => 'Nombre del sitio web',
	
	// SMTP Info
	'SMTP_INFO_TITLE' => 'Consejos de configuración SMTP',
	'SMTP_INFO_GMAIL' => 'Gmail: usa una contraseña de aplicación (no la habitual)',
	'SMTP_INFO_PORT_587' => 'Puerto 587: cifrado TLS (recomendado)',
	'SMTP_INFO_PORT_465' => 'Puerto 465: cifrado SSL',
	
	// Security
	'CAPTCHA_ENABLE' => 'Activar protección hCAPTCHA',
	'CAPTCHA_SITE_KEY' => 'Clave del sitio hCAPTCHA',
	'CAPTCHA_SECRET' => 'Clave secreta hCAPTCHA',
	
	// Field Configuration
	'FIELD_NUM' => 'Campo nº',
	'FIELD_TYPE' => 'Tipo de campo',
	'FIELD_NAME' => 'Nombre del campo (sin espacios)',
	'FIELD_NAME_PH' => 'nombre_completo',
	'FIELD_LABEL' => 'Etiqueta',
	'FIELD_LABEL_PH' => 'Nombre completo',
	'FIELD_PLACEHOLDER' => 'Texto de ayuda',
	'FIELD_PLACEHOLDER_PH' => 'Introduce tu nombre…',
	'FIELD_OPTIONS' => 'Opciones (para select/radio/checkbox, usar |)',
	'FIELD_OPTIONS_PH' => 'Opción 1|Opción 2|Opción 3',
	'FIELD_REQUIRED' => 'Campo obligatorio',
	
	// Field Types
	'TYPE_TEXT' => '📝 Texto',
	'TYPE_EMAIL' => '📧 Correo',
	'TYPE_TEL' => '📞 Teléfono',
	'TYPE_TEXTAREA' => '📄 Área de texto',
	'TYPE_SELECT' => '📋 Desplegable',
	'TYPE_RADIO' => '🔘 Radio',
	'TYPE_CHECKBOX' => '☑️ Casilla',
	'TYPE_FILE' => '📎 Archivo',
	
	// File Upload
	'FILE_ACCEPT' => 'Tipos de archivo permitidos (p. ej., .pdf,.jpg)',
	'FILE_ACCEPT_PH' => '.pdf,.doc,.jpg,.png',
	'FILE_MAX_SIZE' => 'Tamaño máximo del archivo (MB)',
	'FILE_MAX_SIZE_PH' => '5',
	'FILE_ALLOWED' => 'Permitido',
	'FILE_MAX' => 'Máx.',
	
	// Messages
	'MSG_SAVED' => '✓ Formulario guardado correctamente',
	'MSG_SUB_DELETED' => '✓ Envío eliminado',
	'MSG_FORM_DUPLICATED' => '✓ El formulario se ha duplicado correctamente',
	
	// Confirmations
	'CONFIRM_DELETE' => '¿Seguro que quieres borrar este formulario?',
	'CONFIRM_REMOVE_FIELD' => '¿Eliminar este campo?',
	'CONFIRM_DELETE_SUB' => '¿Borrar?',
	
	// Submissions
	'SUBMISSIONS_TITLE' => 'Envíos',
	'SUBMISSIONS_DESC' => 'Ver y gestionar todos los envíos',
	'ALL_SUBMISSIONS' => 'Todos los envíos',
	'SUB_ID' => 'ID',
	'SUB_DATE' => 'Fecha',
	'SUB_IP' => 'IP',
	'SUB_DATA' => 'Datos',
	'VIEW_DATA' => 'Ver datos',
	
	// Frontend Errors
	'ERROR_CSRF' => 'Token de seguridad no válido',
	'ERROR_RATE_LIMIT' => 'Demasiadas solicitudes. Espera un momento.',
	'ERROR_CAPTCHA_REQUIRED' => 'Por favor, completa el captcha',
	'ERROR_CAPTCHA_FAILED' => 'La verificación del captcha ha fallado',
	'ERROR_FILE_SIZE' => ': Archivo demasiado grande (máx.',
	'ERROR_FILE_TYPE' => ': Tipo de archivo no permitido',
	'ERROR_FILE_INVALID' => ': Archivo no válido',
	'ERROR_UPLOAD_FAILED' => ': Error al subir el archivo',
	'ERROR_REQUIRED' => ' es obligatorio',
	'ERROR_EMAIL_INVALID' => ' no es válido',
	
	// Frontend
	'SELECT_OPTION' => 'Selecciona…',
	'REQUIRED_MARK' => '*',
	
	// Email
	'EMAIL_SUBJECT' => 'Envío de formulario: ',
	'EMAIL_NEW_SUBMISSION' => 'Nuevo envío: ',
	
	'MAIL_CHARSET' => 'Codificación del correo',
	'MAIL_CHARSET_UTF8' => 'UTF-8 (Unicode – recomendado)',
	'MAIL_CHARSET_ISO' => 'ISO-8859-2 (Latin-2)',
	'MAIL_CHARSET_WIN' => 'Windows-1250 (CP1250)',
	'MAIL_CHARSET_INFO' => 'UTF-8 admite todos los idiomas. Cambia solo si el cliente de correo tiene problemas de visualización.',
	
	'FORM_LANGUAGE' => 'Idioma del formulario (frontend)',
	'FORM_LANGUAGE_INFO' => 'Selecciona el idioma en el que se mostrará el formulario a los usuarios.',
);
