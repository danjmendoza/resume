<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-06 14:56:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Website' not found ~ APPPATH/classes/Controller/Index.php [ 3 ] in file:line
2014-12-06 14:56:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 14:57:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php:137
2014-12-06 14:57:38 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php:137
2014-12-06 14:57:39 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php:137
2014-12-06 14:57:39 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php:137
2014-12-06 14:59:50 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Cookie.php:67
2014-12-06 14:59:50 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_ga', NULL)
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_ga')
#2 /var/www/valleyds/danjmendoza.com/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Cookie.php:67
2014-12-06 15:05:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 106 ] in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:05:46 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/valley...', 106, Array)
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:07:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 106 ] in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:07:55 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/valley...', 106, Array)
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 106 ] in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:03 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/valley...', 106, Array)
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 106 ] in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:04 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/valley...', 106, Array)
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 106 ] in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:05 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/valley...', 106, Array)
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 106 ] in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:05 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/valley...', 106, Array)
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 106 ] in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:05 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/valley...', 106, Array)
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 106 ] in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:05 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/valley...', 106, Array)
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 106 ] in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:05 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/valley...', 106, Array)
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 106 ] in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:05 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/valley...', 106, Array)
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 106 ] in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:06 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/valley...', 106, Array)
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 106 ] in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 15:08:13 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/valley...', 106, Array)
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/valleyds/danjmendoza.com/application/views/template.php:106
2014-12-06 16:24:19 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php:171
2014-12-06 16:24:19 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('sites')
#3 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /var/www/valleyds/danjmendoza.com/application/classes/Controller/Portfolio.php(52): Kohana_ORM::factory('Site')
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(84): Controller_Portfolio->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Portfolio))
#11 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php:171
2014-12-06 16:25:12 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php:171
2014-12-06 16:25:12 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('sites')
#3 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /var/www/valleyds/danjmendoza.com/application/classes/Controller/Portfolio.php(52): Kohana_ORM::factory('Site')
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(84): Controller_Portfolio->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Portfolio))
#11 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php:171
2014-12-06 16:25:47 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php:171
2014-12-06 16:25:47 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('sites')
#3 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /var/www/valleyds/danjmendoza.com/application/classes/Controller/Portfolio.php(52): Kohana_ORM::factory('Site')
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(84): Controller_Portfolio->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Portfolio))
#11 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php:171
2014-12-06 16:25:49 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php:171
2014-12-06 16:25:49 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('sites')
#3 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /var/www/valleyds/danjmendoza.com/application/classes/Controller/Portfolio.php(52): Kohana_ORM::factory('Site')
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(84): Controller_Portfolio->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Portfolio))
#11 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php:171
2014-12-06 16:26:02 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php:171
2014-12-06 16:26:02 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('sites')
#3 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /var/www/valleyds/danjmendoza.com/application/classes/Controller/Portfolio.php(52): Kohana_ORM::factory('Site')
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(84): Controller_Portfolio->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Portfolio))
#11 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/valleyds/danjmendoza.com/modules/database/classes/Kohana/Database/MySQL.php:171
2014-12-06 16:29:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Portfolio' not found ~ APPPATH/classes/Controller/Portfolio.php [ 52 ] in file:line
2014-12-06 16:29:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 16:30:06 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Portfolio::sites() ~ APPPATH/classes/Controller/Portfolio.php [ 52 ] in file:line
2014-12-06 16:30:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 16:32:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_sites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-12-06 16:32:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 16:33:13 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function sites() on a non-object ~ APPPATH/classes/Controller/Portfolio.php [ 53 ] in file:line
2014-12-06 16:33:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 16:34:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Site' not found ~ APPPATH/classes/Portfolio.php [ 18 ] in file:line
2014-12-06 16:34:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 16:34:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Site::instance() ~ APPPATH/classes/Portfolio.php [ 18 ] in file:line
2014-12-06 16:34:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 16:35:12 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Site::instance() must be an instance of ORM_Site, instance of Model_Site given, called in /var/www/valleyds/danjmendoza.com/application/classes/Portfolio.php on line 18 and defined ~ APPPATH/classes/Site.php [ 5 ] in /var/www/valleyds/danjmendoza.com/application/classes/Site.php:5
2014-12-06 16:35:12 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/application/classes/Site.php(5): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/valley...', 5, Array)
#1 /var/www/valleyds/danjmendoza.com/application/classes/Portfolio.php(18): Site::instance(Object(Model_Site))
#2 /var/www/valleyds/danjmendoza.com/application/classes/Controller/Portfolio.php(53): Portfolio->sites()
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(84): Controller_Portfolio->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Portfolio))
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/valleyds/danjmendoza.com/application/classes/Site.php:5
2014-12-06 16:35:21 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/portfolio.php [ 14 ] in /var/www/valleyds/danjmendoza.com/application/views/portfolio.php:14
2014-12-06 16:35:21 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/application/views/portfolio.php(14): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/valley...', 14, Array)
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_View->__toString()
#5 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/valleyds/danjmendoza.com/application/classes/Controller/Website.php(89): Kohana_Controller_Template->after()
#9 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Portfolio))
#12 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/valleyds/danjmendoza.com/application/views/portfolio.php:14
2014-12-06 16:36:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/portfolio.php [ 17 ] in file:line
2014-12-06 16:36:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 16:36:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/portfolio.php [ 17 ] in file:line
2014-12-06 16:36:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 16:36:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/portfolio.php [ 17 ] in file:line
2014-12-06 16:36:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 16:36:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/portfolio.php [ 17 ] in file:line
2014-12-06 16:36:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 16:36:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/portfolio.php [ 17 ] in file:line
2014-12-06 16:36:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 16:37:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/portfolio.php [ 19 ] in file:line
2014-12-06 16:37:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 16:41:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Site::categories() ~ APPPATH/views/portfolio.php [ 16 ] in file:line
2014-12-06 16:41:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 16:42:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Site::url() ~ APPPATH/views/portfolio.php [ 17 ] in file:line
2014-12-06 16:42:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 17:32:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Jobs.php [ 8 ] in file:line
2014-12-06 17:32:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 17:32:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Jobs.php [ 8 ] in file:line
2014-12-06 17:32:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 17:32:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Jobs.php [ 8 ] in file:line
2014-12-06 17:32:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 17:55:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/views/jobs.php [ 3 ] in file:line
2014-12-06 17:55:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 17:55:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/views/jobs.php [ 3 ] in file:line
2014-12-06 17:55:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 18:09:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: jobs ~ APPPATH/views/jobs.php [ 3 ] in /var/www/valleyds/danjmendoza.com/application/views/jobs.php:3
2014-12-06 18:09:16 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/application/views/jobs.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/valley...', 3, Array)
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_View->__toString()
#5 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/valleyds/danjmendoza.com/application/classes/Controller/Website.php(89): Kohana_Controller_Template->after()
#9 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Jobs))
#12 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/valleyds/danjmendoza.com/application/views/jobs.php:3
2014-12-06 18:14:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: jobs ~ APPPATH/views/jobs.php [ 3 ] in /var/www/valleyds/danjmendoza.com/application/views/jobs.php:3
2014-12-06 18:14:16 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/application/views/jobs.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/valley...', 3, Array)
#1 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_View->__toString()
#5 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/valleyds/danjmendoza.com/application/classes/Controller/Website.php(89): Kohana_Controller_Template->after()
#9 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Controller_Website->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Jobs))
#12 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/valleyds/danjmendoza.com/application/views/jobs.php:3
2014-12-06 18:15:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Job' not found ~ APPPATH/classes/Controller/Jobs.php [ 7 ] in file:line
2014-12-06 18:15:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 18:16:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Job' not found ~ APPPATH/classes/Controller/Jobs.php [ 7 ] in file:line
2014-12-06 18:16:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 18:16:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Job::find_all() ~ APPPATH/classes/Controller/Jobs.php [ 7 ] in file:line
2014-12-06 18:16:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 18:18:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Job::find_all() ~ APPPATH/classes/Controller/Jobs.php [ 7 ] in file:line
2014-12-06 18:18:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 18:20:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Job::find_all() ~ APPPATH/classes/Controller/Jobs.php [ 7 ] in file:line
2014-12-06 18:20:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 18:20:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Job' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-12-06 18:20:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 18:20:38 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'valleyds_danjmendoza_com.jobs' doesn't exist [ SHOW FULL COLUMNS FROM `jobs` ] ~ MODPATH/mysqli/classes/Database/MySQLi.php [ 174 ] in /var/www/valleyds/danjmendoza.com/modules/mysqli/classes/Database/MySQLi.php:338
2014-12-06 18:20:38 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/modules/mysqli/classes/Database/MySQLi.php(338): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(1668): Database_MySQLi->list_columns('jobs')
#2 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /var/www/valleyds/danjmendoza.com/application/classes/Job.php(7): Kohana_ORM::factory('Job')
#7 /var/www/valleyds/danjmendoza.com/application/classes/Controller/Jobs.php(7): Job::active_jobs()
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(84): Controller_Jobs->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Jobs))
#11 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/valleyds/danjmendoza.com/modules/mysqli/classes/Database/MySQLi.php:338
2014-12-06 18:23:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Job::instance() ~ APPPATH/classes/Job.php [ 15 ] in file:line
2014-12-06 18:23:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 18:24:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Job::link() ~ APPPATH/views/jobs.php [ 5 ] in file:line
2014-12-06 18:24:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 18:25:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Job::title() ~ APPPATH/views/jobs.php [ 5 ] in file:line
2014-12-06 18:25:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 18:25:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Job::company() ~ APPPATH/views/jobs.php [ 6 ] in file:line
2014-12-06 18:25:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 18:26:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Company' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-12-06 18:26:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 18:27:19 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'valleyds_danjmendoza_com.companies' doesn't exist [ SHOW FULL COLUMNS FROM `companies` ] ~ MODPATH/mysqli/classes/Database/MySQLi.php [ 174 ] in /var/www/valleyds/danjmendoza.com/modules/mysqli/classes/Database/MySQLi.php:338
2014-12-06 18:27:19 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/modules/mysqli/classes/Database/MySQLi.php(338): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(1668): Database_MySQLi->list_columns('companies')
#2 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct('1')
#6 /var/www/valleyds/danjmendoza.com/application/classes/Job.php(45): Kohana_ORM::factory('Company', '1')
#7 /var/www/valleyds/danjmendoza.com/application/views/jobs.php(6): Job->company()
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#9 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#10 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(228): Kohana_View->render()
#11 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_View->__toString()
#12 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#13 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#14 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#15 /var/www/valleyds/danjmendoza.com/application/classes/Controller/Website.php(89): Kohana_Controller_Template->after()
#16 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Controller_Website->after()
#17 [internal function]: Kohana_Controller->execute()
#18 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Jobs))
#19 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#21 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#22 {main} in /var/www/valleyds/danjmendoza.com/modules/mysqli/classes/Database/MySQLi.php:338
2014-12-06 18:28:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Company' not found ~ APPPATH/classes/Job.php [ 46 ] in file:line
2014-12-06 18:28:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 18:29:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Company::instance() ~ APPPATH/classes/Job.php [ 46 ] in file:line
2014-12-06 18:29:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 18:30:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Company::link() ~ APPPATH/views/jobs.php [ 6 ] in file:line
2014-12-06 18:30:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 18:31:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Company::$orm_website ~ APPPATH/classes/Company.php [ 19 ] in /var/www/valleyds/danjmendoza.com/application/classes/Company.php:19
2014-12-06 18:31:00 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/application/classes/Company.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/valley...', 19, Array)
#1 /var/www/valleyds/danjmendoza.com/application/views/jobs.php(6): Company->website()
#2 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#4 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_View->__toString()
#6 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/valleyds/danjmendoza.com/application/classes/Controller/Website.php(89): Kohana_Controller_Template->after()
#10 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Controller_Website->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Jobs))
#13 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/valleyds/danjmendoza.com/application/classes/Company.php:19
2014-12-06 18:31:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Company::name() ~ APPPATH/views/jobs.php [ 6 ] in file:line
2014-12-06 18:31:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 18:31:34 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Company class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php:603
2014-12-06 18:31:34 --- DEBUG: #0 /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('name')
#1 /var/www/valleyds/danjmendoza.com/application/classes/Company.php(24): Kohana_ORM->__get('name')
#2 /var/www/valleyds/danjmendoza.com/application/views/jobs.php(6): Company->name()
#3 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#4 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#5 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /var/www/valleyds/danjmendoza.com/application/views/template.php(106): Kohana_View->__toString()
#7 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(61): include('/var/www/valley...')
#8 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/valley...', Array)
#9 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /var/www/valleyds/danjmendoza.com/application/classes/Controller/Website.php(89): Kohana_Controller_Template->after()
#11 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Controller.php(87): Controller_Website->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Jobs))
#14 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/valleyds/danjmendoza.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/valleyds/danjmendoza.com/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/valleyds/danjmendoza.com/modules/orm/classes/Kohana/ORM.php:603
2014-12-06 18:32:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Job::status() ~ APPPATH/views/jobs.php [ 8 ] in file:line
2014-12-06 18:32:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line