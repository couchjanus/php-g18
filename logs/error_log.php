[06-May-2020 14:09:41 Europe/Kiev] Hello Log!
[06-May-2020 14:17:56 Europe/Kiev] Hello Log!
[06-May-2020 14:17:56 Europe/Kiev] PHP Warning:  require_once(/home/janus/www/php-g18/app/Views/layouts/partials/_head.php): failed to open stream: No such file or directory in /home/janus/www/php-g18/app/Views/layouts/app.php on line 3
[06-May-2020 14:17:56 Europe/Kiev] PHP Fatal error:  require_once(): Failed opening required '/home/janus/www/php-g18/app/Views/layouts/partials/_head.php' (include_path='.:/usr/share/php') in /home/janus/www/php-g18/app/Views/layouts/app.php on line 3
[15-May-2020 13:39:01 Europe/Kiev] PHP Warning:  include(/home/janus/www/php-g18/app/Views/about/index.php): failed to open stream: No such file or directory in /home/janus/www/php-g18/app/Views/layouts/app.php on line 9
[15-May-2020 13:39:01 Europe/Kiev] PHP Stack trace:
[15-May-2020 13:39:01 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[15-May-2020 13:39:01 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[15-May-2020 13:39:01 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:59
[15-May-2020 13:39:01 Europe/Kiev] PHP   4. AboutController->index() /home/janus/www/php-g18/core/Router.php:35
[15-May-2020 13:39:01 Europe/Kiev] PHP   5. render() /home/janus/www/php-g18/app/Controllers/AboutController.php:15
[15-May-2020 13:39:01 Europe/Kiev] PHP   6. include() /home/janus/www/php-g18/bootstrap/app.php:31
[15-May-2020 13:39:01 Europe/Kiev] PHP Warning:  include(): Failed opening '/home/janus/www/php-g18/app/Views/about/index.php' for inclusion (include_path='.:/usr/share/php') in /home/janus/www/php-g18/app/Views/layouts/app.php on line 9
[15-May-2020 13:39:01 Europe/Kiev] PHP Stack trace:
[15-May-2020 13:39:01 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[15-May-2020 13:39:01 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[15-May-2020 13:39:01 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:59
[15-May-2020 13:39:01 Europe/Kiev] PHP   4. AboutController->index() /home/janus/www/php-g18/core/Router.php:35
[15-May-2020 13:39:01 Europe/Kiev] PHP   5. render() /home/janus/www/php-g18/app/Controllers/AboutController.php:15
[15-May-2020 13:39:01 Europe/Kiev] PHP   6. include() /home/janus/www/php-g18/bootstrap/app.php:31
[18-May-2020 11:27:20 Europe/Kiev] PHP Notice:  Undefined offset: 1 in /home/janus/www/php-g18/core/Router.php on line 24
[18-May-2020 11:27:20 Europe/Kiev] PHP Stack trace:
[18-May-2020 11:27:20 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[18-May-2020 11:27:20 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[18-May-2020 11:27:20 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[18-May-2020 11:27:20 Europe/Kiev] PHP   4. getController() /home/janus/www/php-g18/core/Router.php:47
[18-May-2020 11:34:23 Europe/Kiev] PHP Warning:  require_once(/home/janus/www/php-g18/core/Controller.php): failed to open stream: No such file or directory in /home/janus/www/php-g18/app/Controllers/Admin/DashboardController.php on line 3
[18-May-2020 11:34:23 Europe/Kiev] PHP Stack trace:
[18-May-2020 11:34:23 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[18-May-2020 11:34:23 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[18-May-2020 11:34:23 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[18-May-2020 11:34:23 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[18-May-2020 11:34:23 Europe/Kiev] PHP   5. include_once() /home/janus/www/php-g18/core/Router.php:35
[18-May-2020 11:34:23 Europe/Kiev] PHP Fatal error:  require_once(): Failed opening required '/home/janus/www/php-g18/core/Controller.php' (include_path='.:/usr/share/php') in /home/janus/www/php-g18/app/Controllers/Admin/DashboardController.php on line 3
[18-May-2020 11:34:23 Europe/Kiev] PHP Stack trace:
[18-May-2020 11:34:23 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[18-May-2020 11:34:23 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[18-May-2020 11:34:23 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[18-May-2020 11:34:23 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[18-May-2020 11:34:23 Europe/Kiev] PHP   5. include_once() /home/janus/www/php-g18/core/Router.php:35
[18-May-2020 11:43:55 Europe/Kiev] PHP Notice:  Undefined property: CategoryController::$view in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php on line 11
[18-May-2020 11:43:55 Europe/Kiev] PHP Stack trace:
[18-May-2020 11:43:55 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[18-May-2020 11:43:55 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[18-May-2020 11:43:55 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[18-May-2020 11:43:55 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[18-May-2020 11:43:55 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[18-May-2020 11:43:55 Europe/Kiev] PHP Fatal error:  Uncaught Error: Call to a member function render() on null in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:11
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(38): CategoryController->index()
#1 /home/janus/www/php-g18/core/Router.php(47): initController()
#2 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#3 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#4 {main}
  thrown in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php on line 11
[20-May-2020 10:39:32 Europe/Kiev] PHP Fatal error:  Uncaught ArgumentCountError: Too few arguments to function CategoryController::store(), 0 passed in /home/janus/www/php-g18/core/Router.php on line 38 and exactly 1 expected in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:21
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(38): CategoryController->store()
#1 /home/janus/www/php-g18/core/Router.php(47): initController()
#2 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#3 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#4 {main}
  thrown in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php on line 21
[20-May-2020 11:55:47 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:16:23 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:17:05 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:17:34 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:17:48 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:19:14 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:19:59 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:20:46 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:21:51 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:23:42 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:29:43 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:30:52 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:35:45 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:37:11 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:37:12 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:38:14 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:38:15 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:38:16 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:39:12 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:39:30 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:39:31 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:39:31 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:40:54 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:41:40 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:41:42 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:42:50 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:42:51 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:42:51 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:48:01 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:48:28 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:49:05 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 12:52:20 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 13:00:04 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ContactController' not found in /home/janus/www/php-g18/core/Router.php:36
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(47): initController()
#1 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 36
[20-May-2020 13:01:16 Europe/Kiev] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /home/janus/www/php-g18/app/Views/admin/categories/index.php:18
Stack trace:
#0 /home/janus/www/php-g18/app/Views/layouts/admin.php(19): include()
#1 /home/janus/www/php-g18/core/View.php(31): require('/home/janus/www...')
#2 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(45): View->render()
#3 /home/janus/www/php-g18/core/Router.php(38): CategoryController->index()
#4 /home/janus/www/php-g18/core/Router.php(47): initController()
#5 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#6 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#7 {main}
  thrown in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[20-May-2020 13:15:51 Europe/Kiev] PHP Notice:  Undefined variable: affected_rows in /home/janus/www/php-g18/app/Models/Category.php on line 183
[20-May-2020 13:15:51 Europe/Kiev] PHP Stack trace:
[20-May-2020 13:15:51 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[20-May-2020 13:15:51 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[20-May-2020 13:15:51 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[20-May-2020 13:15:51 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[20-May-2020 13:15:51 Europe/Kiev] PHP   5. CategoryController->store() /home/janus/www/php-g18/core/Router.php:38
[20-May-2020 13:15:51 Europe/Kiev] PHP   6. Category->save() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:94
