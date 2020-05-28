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
[22-May-2020 11:00:29 Europe/Kiev] PHP Fatal error:  Uncaught Exception: Connection::__construct : ERROR: no database connection
 in /home/janus/www/php-g18/core/Connection.php:17
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(8): Connection->__construct()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(16): Category->all()
#2 /home/janus/www/php-g18/core/Router.php(38): CategoryController->index()
#3 /home/janus/www/php-g18/core/Router.php(47): initController()
#4 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 17
[22-May-2020 11:04:55 Europe/Kiev] PHP Notice:  Undefined variable: config in /home/janus/www/php-g18/core/Connection.php on line 14
[22-May-2020 11:04:55 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:04:55 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:04:55 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:04:55 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:04:55 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:04:55 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:04:55 Europe/Kiev] PHP   6. Category->all() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:16
[22-May-2020 11:04:55 Europe/Kiev] PHP   7. Connection->__construct() /home/janus/www/php-g18/app/Models/Category.php:8
[22-May-2020 11:04:55 Europe/Kiev] PHP Fatal error:  Uncaught Exception: Connection::__construct : ERROR: no database connection
 in /home/janus/www/php-g18/core/Connection.php:18
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(8): Connection->__construct()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(16): Category->all()
#2 /home/janus/www/php-g18/core/Router.php(38): CategoryController->index()
#3 /home/janus/www/php-g18/core/Router.php(47): initController()
#4 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:09 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:09 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:09 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:09 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:09 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:09 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:09 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:09 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:09 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:09 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'id' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 18
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:25 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/index.php on line 19
[22-May-2020 11:06:25 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:06:25 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:06:25 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:06:25 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:06:25 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:06:25 Europe/Kiev] PHP   5. CategoryController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:06:25 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:17
[22-May-2020 11:06:25 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:06:25 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[22-May-2020 11:06:55 Europe/Kiev] PHP Fatal error:  Uncaught Error: Undefined class constant 'FETCH_OBJECT' in /home/janus/www/php-g18/config/db.php:28
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(8): require_once()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(16): Category->all()
#2 /home/janus/www/php-g18/core/Router.php(38): CategoryController->index()
#3 /home/janus/www/php-g18/core/Router.php(47): initController()
#4 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/config/db.php on line 28
[22-May-2020 11:07:55 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY000]: General error: No fetch class specified in /home/janus/www/php-g18/app/Models/Category.php:10
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(10): PDOStatement->fetchAll()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(16): Category->all()
#2 /home/janus/www/php-g18/core/Router.php(38): CategoryController->index()
#3 /home/janus/www/php-g18/core/Router.php(47): initController()
#4 /home/janus/www/php-g18/bootstrap/app.php(61): require_once('/home/janus/www...')
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/app/Models/Category.php on line 10
[22-May-2020 11:40:58 Europe/Kiev] PHP Notice:  Undefined variable: categories in /home/janus/www/php-g18/app/Views/layouts/partials/_filter.php on line 5
[22-May-2020 11:40:58 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:40:58 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:40:58 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:40:58 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:40:58 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:40:58 Europe/Kiev] PHP   5. AboutController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:40:58 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/AboutController.php:10
[22-May-2020 11:40:58 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:40:58 Europe/Kiev] PHP   8. require_once() /home/janus/www/php-g18/app/Views/layouts/app.php:25
[22-May-2020 11:40:58 Europe/Kiev] PHP Warning:  Invalid argument supplied for foreach() in /home/janus/www/php-g18/app/Views/layouts/partials/_filter.php on line 5
[22-May-2020 11:40:58 Europe/Kiev] PHP Stack trace:
[22-May-2020 11:40:58 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[22-May-2020 11:40:58 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[22-May-2020 11:40:58 Europe/Kiev] PHP   3. require_once() /home/janus/www/php-g18/bootstrap/app.php:61
[22-May-2020 11:40:58 Europe/Kiev] PHP   4. initController() /home/janus/www/php-g18/core/Router.php:47
[22-May-2020 11:40:58 Europe/Kiev] PHP   5. AboutController->index() /home/janus/www/php-g18/core/Router.php:38
[22-May-2020 11:40:58 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/AboutController.php:10
[22-May-2020 11:40:58 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[22-May-2020 11:40:58 Europe/Kiev] PHP   8. require_once() /home/janus/www/php-g18/app/Views/layouts/app.php:25
[24-May-2020 17:23:11 Europe/Kiev] PHP Fatal error:  Uncaught Error: Call to undefined method Request::url() in /home/janus/www/php-g18/bootstrap/app.php:63
Stack trace:
#0 /home/janus/www/php-g18/public/index.php(3): require_once()
#1 {main}
  thrown in /home/janus/www/php-g18/bootstrap/app.php on line 63
[24-May-2020 17:28:48 Europe/Kiev] PHP Warning:  include_once(/home/janus/www/php-g18/app/Controllers/ErrorsController.php): failed to open stream: No such file or directory in /home/janus/www/php-g18/core/Router.php on line 12
[24-May-2020 17:28:48 Europe/Kiev] PHP Stack trace:
[24-May-2020 17:28:48 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[24-May-2020 17:28:48 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[24-May-2020 17:28:48 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:63
[24-May-2020 17:28:48 Europe/Kiev] PHP Warning:  include_once(): Failed opening '/home/janus/www/php-g18/app/Controllers/ErrorsController.php' for inclusion (include_path='.:/usr/share/php') in /home/janus/www/php-g18/core/Router.php on line 12
[24-May-2020 17:28:48 Europe/Kiev] PHP Stack trace:
[24-May-2020 17:28:48 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[24-May-2020 17:28:48 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[24-May-2020 17:28:48 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:63
[24-May-2020 17:28:48 Europe/Kiev] PHP Fatal error:  Uncaught Error: Class 'ErrorsController' not found in /home/janus/www/php-g18/core/Router.php:13
Stack trace:
#0 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#1 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#2 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 13
[24-May-2020 18:14:32 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 in /home/janus/www/php-g18/app/Models/Category.php:26
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(37): Category->getByPrimaryKey()
#2 /home/janus/www/php-g18/core/Router.php(89): CategoryController->show()
#3 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/app/Models/Category.php on line 26
[24-May-2020 18:15:50 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 in /home/janus/www/php-g18/app/Models/Category.php:26
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(37): Category->getByPrimaryKey()
#2 /home/janus/www/php-g18/core/Router.php(89): CategoryController->show()
#3 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/app/Models/Category.php on line 26
[24-May-2020 18:15:53 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 in /home/janus/www/php-g18/app/Models/Category.php:26
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(37): Category->getByPrimaryKey()
#2 /home/janus/www/php-g18/core/Router.php(89): CategoryController->show()
#3 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/app/Models/Category.php on line 26
[24-May-2020 18:24:13 Europe/Kiev] PHP Warning:  PDOStatement::execute() expects parameter 1 to be array, string given in /home/janus/www/php-g18/app/Models/Category.php on line 28
[24-May-2020 18:24:13 Europe/Kiev] PHP Stack trace:
[24-May-2020 18:24:13 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[24-May-2020 18:24:13 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[24-May-2020 18:24:13 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:63
[24-May-2020 18:24:13 Europe/Kiev] PHP   4. Router->init() /home/janus/www/php-g18/core/Router.php:55
[24-May-2020 18:24:13 Europe/Kiev] PHP   5. CategoryController->show() /home/janus/www/php-g18/core/Router.php:89
[24-May-2020 18:24:13 Europe/Kiev] PHP   6. Category->getByPrimaryKey() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:38
[24-May-2020 18:24:13 Europe/Kiev] PHP   7. PDOStatement->execute() /home/janus/www/php-g18/app/Models/Category.php:28
[24-May-2020 20:32:19 Europe/Kiev] PHP Fatal error:  Uncaught Error: Call to undefined method stdClass::update() in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:51
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(89): CategoryController->edit()
#1 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#2 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#3 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#4 {main}
  thrown in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php on line 51
[24-May-2020 20:33:37 Europe/Kiev] PHP Fatal error:  Uncaught Error: Call to undefined method CategoryController::render() in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:55
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(89): CategoryController->edit()
#1 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#2 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#3 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#4 {main}
  thrown in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php on line 55
[24-May-2020 20:42:36 Europe/Kiev] PHP Fatal error:  Uncaught Error: Call to undefined method stdClass::update() in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:57
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(89): CategoryController->patch()
#1 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#2 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#3 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#4 {main}
  thrown in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php on line 57
[24-May-2020 20:44:02 Europe/Kiev] PHP Fatal error:  Uncaught Error: Call to undefined method stdClass::update() in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:57
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(89): CategoryController->patch()
#1 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#2 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#3 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#4 {main}
  thrown in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php on line 57
[24-May-2020 20:47:38 Europe/Kiev] PHP Fatal error:  Uncaught Error: Call to undefined method stdClass::update() in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:59
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(89): CategoryController->patch()
#1 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#2 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#3 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#4 {main}
  thrown in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php on line 59
[24-May-2020 20:49:39 Europe/Kiev] PHP Fatal error:  Uncaught Error: Call to undefined method CategoryController::render() in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:75
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(89): CategoryController->delete()
#1 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#2 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#3 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#4 {main}
  thrown in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php on line 75
[24-May-2020 20:55:14 Europe/Kiev] PHP Fatal error:  Uncaught Error: Call to undefined method stdClass::destroy() in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:68
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(89): CategoryController->delete()
#1 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#2 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#3 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#4 {main}
  thrown in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php on line 68
[24-May-2020 21:02:49 Europe/Kiev] PHP Fatal error:  Uncaught Error: Call to undefined method stdClass::destroy() in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:68
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(89): CategoryController->delete()
#1 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#2 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#3 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#4 {main}
  thrown in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php on line 68
[24-May-2020 21:06:01 Europe/Kiev] PHP Fatal error:  Uncaught TypeError: Argument 1 passed to Connection::__construct() must be of the type array, bool given, called in /home/janus/www/php-g18/app/Models/Category.php on line 25 and defined in /home/janus/www/php-g18/core/Connection.php:10
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(25): Connection->__construct()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(70): Category->getByPrimaryKey()
#2 /home/janus/www/php-g18/core/Router.php(89): CategoryController->delete()
#3 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 10
[24-May-2020 21:11:18 Europe/Kiev] PHP Fatal error:  Uncaught TypeError: Argument 1 passed to Connection::__construct() must be of the type array, bool given, called in /home/janus/www/php-g18/app/Models/Category.php on line 24 and defined in /home/janus/www/php-g18/core/Connection.php:10
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(24): Connection->__construct()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(70): Category->getByPrimaryKey()
#2 /home/janus/www/php-g18/core/Router.php(89): CategoryController->delete()
#3 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 10
[24-May-2020 21:11:28 Europe/Kiev] PHP Fatal error:  Uncaught TypeError: Argument 1 passed to Connection::__construct() must be of the type array, bool given, called in /home/janus/www/php-g18/app/Models/Category.php on line 24 and defined in /home/janus/www/php-g18/core/Connection.php:10
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(24): Connection->__construct()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(70): Category->getByPrimaryKey()
#2 /home/janus/www/php-g18/core/Router.php(89): CategoryController->delete()
#3 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 10
[24-May-2020 21:11:33 Europe/Kiev] PHP Fatal error:  Uncaught TypeError: Argument 1 passed to Connection::__construct() must be of the type array, bool given, called in /home/janus/www/php-g18/app/Models/Category.php on line 24 and defined in /home/janus/www/php-g18/core/Connection.php:10
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(24): Connection->__construct()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(70): Category->getByPrimaryKey()
#2 /home/janus/www/php-g18/core/Router.php(89): CategoryController->delete()
#3 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 10
[24-May-2020 21:11:41 Europe/Kiev] PHP Fatal error:  Uncaught TypeError: Argument 1 passed to Connection::__construct() must be of the type array, bool given, called in /home/janus/www/php-g18/app/Models/Category.php on line 24 and defined in /home/janus/www/php-g18/core/Connection.php:10
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(24): Connection->__construct()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(70): Category->getByPrimaryKey()
#2 /home/janus/www/php-g18/core/Router.php(89): CategoryController->delete()
#3 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 10
[24-May-2020 21:11:51 Europe/Kiev] PHP Fatal error:  Uncaught TypeError: Argument 1 passed to Connection::__construct() must be of the type array, bool given, called in /home/janus/www/php-g18/app/Models/Category.php on line 24 and defined in /home/janus/www/php-g18/core/Connection.php:10
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(24): Connection->__construct()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(70): Category->getByPrimaryKey()
#2 /home/janus/www/php-g18/core/Router.php(89): CategoryController->delete()
#3 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 10
[24-May-2020 21:11:59 Europe/Kiev] PHP Fatal error:  Uncaught TypeError: Argument 1 passed to Connection::__construct() must be of the type array, bool given, called in /home/janus/www/php-g18/app/Models/Category.php on line 24 and defined in /home/janus/www/php-g18/core/Connection.php:10
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(24): Connection->__construct()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(70): Category->getByPrimaryKey()
#2 /home/janus/www/php-g18/core/Router.php(89): CategoryController->delete()
#3 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 10
[24-May-2020 21:12:05 Europe/Kiev] PHP Fatal error:  Uncaught TypeError: Argument 1 passed to Connection::__construct() must be of the type array, bool given, called in /home/janus/www/php-g18/app/Models/Category.php on line 24 and defined in /home/janus/www/php-g18/core/Connection.php:10
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(24): Connection->__construct()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(70): Category->getByPrimaryKey()
#2 /home/janus/www/php-g18/core/Router.php(89): CategoryController->delete()
#3 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 10
[24-May-2020 21:12:09 Europe/Kiev] PHP Fatal error:  Uncaught TypeError: Argument 1 passed to Connection::__construct() must be of the type array, bool given, called in /home/janus/www/php-g18/app/Models/Category.php on line 24 and defined in /home/janus/www/php-g18/core/Connection.php:10
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(24): Connection->__construct()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(70): Category->getByPrimaryKey()
#2 /home/janus/www/php-g18/core/Router.php(89): CategoryController->delete()
#3 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 10
[24-May-2020 21:12:13 Europe/Kiev] PHP Fatal error:  Uncaught TypeError: Argument 1 passed to Connection::__construct() must be of the type array, bool given, called in /home/janus/www/php-g18/app/Models/Category.php on line 24 and defined in /home/janus/www/php-g18/core/Connection.php:10
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(24): Connection->__construct()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(70): Category->getByPrimaryKey()
#2 /home/janus/www/php-g18/core/Router.php(89): CategoryController->delete()
#3 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 10
[24-May-2020 21:12:17 Europe/Kiev] PHP Fatal error:  Uncaught TypeError: Argument 1 passed to Connection::__construct() must be of the type array, bool given, called in /home/janus/www/php-g18/app/Models/Category.php on line 24 and defined in /home/janus/www/php-g18/core/Connection.php:10
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(24): Connection->__construct()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(70): Category->getByPrimaryKey()
#2 /home/janus/www/php-g18/core/Router.php(89): CategoryController->delete()
#3 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 10
[24-May-2020 21:12:22 Europe/Kiev] PHP Fatal error:  Uncaught TypeError: Argument 1 passed to Connection::__construct() must be of the type array, bool given, called in /home/janus/www/php-g18/app/Models/Category.php on line 24 and defined in /home/janus/www/php-g18/core/Connection.php:10
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(24): Connection->__construct()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(70): Category->getByPrimaryKey()
#2 /home/janus/www/php-g18/core/Router.php(89): CategoryController->delete()
#3 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 10
[26-May-2020 17:43:04 Europe/Kiev] PHP Fatal error:  Uncaught Error: Using $this when not in object context in /home/janus/www/php-g18/core/Model.php:16
Stack trace:
#0 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(16): Model::all()
#1 /home/janus/www/php-g18/core/Router.php(89): CategoryController->index()
#2 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#3 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#4 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#5 {main}
  thrown in /home/janus/www/php-g18/core/Model.php on line 16
[26-May-2020 17:48:21 Europe/Kiev] PHP Fatal error:  Uncaught Error: Using $this when not in object context in /home/janus/www/php-g18/core/Model.php:16
Stack trace:
#0 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(16): Model::all()
#1 /home/janus/www/php-g18/core/Router.php(89): CategoryController->index()
#2 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#3 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#4 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#5 {main}
  thrown in /home/janus/www/php-g18/core/Model.php on line 16
[26-May-2020 17:58:52 Europe/Kiev] PHP Fatal error:  Uncaught Error: Using $this when not in object context in /home/janus/www/php-g18/core/Model.php:16
Stack trace:
#0 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(16): Model::all()
#1 /home/janus/www/php-g18/core/Router.php(89): CategoryController->index()
#2 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#3 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#4 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#5 {main}
  thrown in /home/janus/www/php-g18/core/Model.php on line 16
[26-May-2020 18:22:23 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY000]: General error: 2031  in /home/janus/www/php-g18/core/Model.php:31
Stack trace:
#0 /home/janus/www/php-g18/core/Model.php(31): PDOStatement->execute()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(46): Model::getByPrimaryKey()
#2 /home/janus/www/php-g18/core/Router.php(89): CategoryController->edit()
#3 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Model.php on line 31
[26-May-2020 18:22:27 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY000]: General error: 2031  in /home/janus/www/php-g18/core/Model.php:31
Stack trace:
#0 /home/janus/www/php-g18/core/Model.php(31): PDOStatement->execute()
#1 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(37): Model::getByPrimaryKey()
#2 /home/janus/www/php-g18/core/Router.php(89): CategoryController->show()
#3 /home/janus/www/php-g18/core/Router.php(55): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Model.php on line 31
[26-May-2020 18:31:16 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/delete.php on line 5
[26-May-2020 18:31:16 Europe/Kiev] PHP Stack trace:
[26-May-2020 18:31:16 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[26-May-2020 18:31:16 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[26-May-2020 18:31:16 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:63
[26-May-2020 18:31:16 Europe/Kiev] PHP   4. Router->init() /home/janus/www/php-g18/core/Router.php:55
[26-May-2020 18:31:16 Europe/Kiev] PHP   5. CategoryController->delete() /home/janus/www/php-g18/core/Router.php:89
[26-May-2020 18:31:16 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:70
[26-May-2020 18:31:16 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[26-May-2020 18:31:16 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[26-May-2020 18:31:23 Europe/Kiev] PHP Notice:  Trying to get property 'name' of non-object in /home/janus/www/php-g18/app/Views/admin/categories/delete.php on line 5
[26-May-2020 18:31:23 Europe/Kiev] PHP Stack trace:
[26-May-2020 18:31:23 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[26-May-2020 18:31:23 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[26-May-2020 18:31:23 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:63
[26-May-2020 18:31:23 Europe/Kiev] PHP   4. Router->init() /home/janus/www/php-g18/core/Router.php:55
[26-May-2020 18:31:23 Europe/Kiev] PHP   5. CategoryController->delete() /home/janus/www/php-g18/core/Router.php:89
[26-May-2020 18:31:23 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:70
[26-May-2020 18:31:23 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[26-May-2020 18:31:23 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/admin.php:19
[26-May-2020 18:48:51 Europe/Kiev] PHP Deprecated:  Non-static method Model::update() should not be called statically in /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php on line 55
[26-May-2020 18:48:51 Europe/Kiev] PHP Stack trace:
[26-May-2020 18:48:51 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[26-May-2020 18:48:51 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[26-May-2020 18:48:51 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:63
[26-May-2020 18:48:51 Europe/Kiev] PHP   4. Router->init() /home/janus/www/php-g18/core/Router.php:46
[26-May-2020 18:48:51 Europe/Kiev] PHP   5. CategoryController->patch() /home/janus/www/php-g18/core/Router.php:89
[26-May-2020 18:55:55 Europe/Kiev] PHP Notice:  Array to string conversion in /home/janus/www/php-g18/core/Model.php on line 65
[26-May-2020 18:55:55 Europe/Kiev] PHP Stack trace:
[26-May-2020 18:55:55 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[26-May-2020 18:55:55 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[26-May-2020 18:55:55 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:63
[26-May-2020 18:55:55 Europe/Kiev] PHP   4. Router->init() /home/janus/www/php-g18/core/Router.php:46
[26-May-2020 18:55:55 Europe/Kiev] PHP   5. CategoryController->patch() /home/janus/www/php-g18/core/Router.php:89
[26-May-2020 18:55:55 Europe/Kiev] PHP   6. Model::update() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:55
[26-May-2020 18:55:55 Europe/Kiev] PHP Notice:  Array to string conversion in /home/janus/www/php-g18/core/Model.php on line 65
[26-May-2020 18:55:55 Europe/Kiev] PHP Stack trace:
[26-May-2020 18:55:55 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[26-May-2020 18:55:55 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[26-May-2020 18:55:55 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:63
[26-May-2020 18:55:55 Europe/Kiev] PHP   4. Router->init() /home/janus/www/php-g18/core/Router.php:46
[26-May-2020 18:55:55 Europe/Kiev] PHP   5. CategoryController->patch() /home/janus/www/php-g18/core/Router.php:89
[26-May-2020 18:55:55 Europe/Kiev] PHP   6. Model::update() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:55
[26-May-2020 18:55:55 Europe/Kiev] PHP Warning:  implode(): Invalid arguments passed in /home/janus/www/php-g18/core/Model.php on line 65
[26-May-2020 18:55:55 Europe/Kiev] PHP Stack trace:
[26-May-2020 18:55:55 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[26-May-2020 18:55:55 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[26-May-2020 18:55:55 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:63
[26-May-2020 18:55:55 Europe/Kiev] PHP   4. Router->init() /home/janus/www/php-g18/core/Router.php:46
[26-May-2020 18:55:55 Europe/Kiev] PHP   5. CategoryController->patch() /home/janus/www/php-g18/core/Router.php:89
[26-May-2020 18:55:55 Europe/Kiev] PHP   6. Model::update() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:55
[26-May-2020 18:55:55 Europe/Kiev] PHP   7. implode() /home/janus/www/php-g18/core/Model.php:65
[26-May-2020 18:57:27 Europe/Kiev] PHP Notice:  Array to string conversion in /home/janus/www/php-g18/core/Model.php on line 66
[26-May-2020 18:57:27 Europe/Kiev] PHP Stack trace:
[26-May-2020 18:57:27 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[26-May-2020 18:57:27 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[26-May-2020 18:57:27 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:63
[26-May-2020 18:57:27 Europe/Kiev] PHP   4. Router->init() /home/janus/www/php-g18/core/Router.php:46
[26-May-2020 18:57:27 Europe/Kiev] PHP   5. CategoryController->patch() /home/janus/www/php-g18/core/Router.php:89
[26-May-2020 18:57:27 Europe/Kiev] PHP   6. Model::update() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:55
[26-May-2020 19:16:18 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: mixed named and positional parameters in /home/janus/www/php-g18/core/Connection.php:26
Stack trace:
#0 /home/janus/www/php-g18/core/Connection.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/core/Model.php(70): Connection->preparedStatment()
#2 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(55): Model::update()
#3 /home/janus/www/php-g18/core/Router.php(89): CategoryController->patch()
#4 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#5 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#6 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#7 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 26
[26-May-2020 19:19:35 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: mixed named and positional parameters in /home/janus/www/php-g18/core/Connection.php:26
Stack trace:
#0 /home/janus/www/php-g18/core/Connection.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/core/Model.php(70): Connection->preparedStatment()
#2 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(55): Model::update()
#3 /home/janus/www/php-g18/core/Router.php(89): CategoryController->patch()
#4 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#5 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#6 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#7 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 26
[26-May-2020 19:21:55 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: mixed named and positional parameters in /home/janus/www/php-g18/core/Connection.php:26
Stack trace:
#0 /home/janus/www/php-g18/core/Connection.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/core/Model.php(70): Connection->preparedStatment()
#2 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(55): Model::update()
#3 /home/janus/www/php-g18/core/Router.php(89): CategoryController->patch()
#4 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#5 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#6 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#7 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 26
[26-May-2020 19:22:38 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id=19' at line 1 in /home/janus/www/php-g18/core/Connection.php:26
Stack trace:
#0 /home/janus/www/php-g18/core/Connection.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/core/Model.php(70): Connection->preparedStatment()
#2 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(55): Model::update()
#3 /home/janus/www/php-g18/core/Router.php(89): CategoryController->patch()
#4 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#5 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#6 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#7 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 26
[26-May-2020 19:24:45 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'boo category,1) WHERE id=19' at line 1 in /home/janus/www/php-g18/core/Connection.php:26
Stack trace:
#0 /home/janus/www/php-g18/core/Connection.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/core/Model.php(70): Connection->preparedStatment()
#2 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(55): Model::update()
#3 /home/janus/www/php-g18/core/Router.php(89): CategoryController->patch()
#4 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#5 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#6 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#7 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 26
[26-May-2020 19:27:15 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'boo category,1) WHERE id=19' at line 1 in /home/janus/www/php-g18/core/Connection.php:26
Stack trace:
#0 /home/janus/www/php-g18/core/Connection.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/core/Model.php(70): Connection->preparedStatment()
#2 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(55): Model::update()
#3 /home/janus/www/php-g18/core/Router.php(89): CategoryController->patch()
#4 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#5 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#6 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#7 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 26
[26-May-2020 19:31:40 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id=19' at line 1 in /home/janus/www/php-g18/core/Connection.php:26
Stack trace:
#0 /home/janus/www/php-g18/core/Connection.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/core/Model.php(70): Connection->preparedStatment()
#2 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(55): Model::update()
#3 /home/janus/www/php-g18/core/Router.php(89): CategoryController->patch()
#4 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#5 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#6 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#7 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 26
[26-May-2020 19:41:05 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id=19' at line 1 in /home/janus/www/php-g18/core/Connection.php:26
Stack trace:
#0 /home/janus/www/php-g18/core/Connection.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/core/Model.php(70): Connection->preparedStatment()
#2 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(55): Model::update()
#3 /home/janus/www/php-g18/core/Router.php(89): CategoryController->patch()
#4 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#5 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#6 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#7 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 26
[26-May-2020 19:42:30 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id=19' at line 1 in /home/janus/www/php-g18/core/Connection.php:26
Stack trace:
#0 /home/janus/www/php-g18/core/Connection.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/core/Model.php(70): Connection->preparedStatment()
#2 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(55): Model::update()
#3 /home/janus/www/php-g18/core/Router.php(89): CategoryController->patch()
#4 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#5 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#6 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#7 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 26
[26-May-2020 19:45:27 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id=19' at line 1 in /home/janus/www/php-g18/core/Connection.php:26
Stack trace:
#0 /home/janus/www/php-g18/core/Connection.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/core/Model.php(70): Connection->preparedStatment()
#2 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(55): Model::update()
#3 /home/janus/www/php-g18/core/Router.php(89): CategoryController->patch()
#4 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#5 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#6 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#7 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 26
[26-May-2020 19:45:46 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id=19' at line 1 in /home/janus/www/php-g18/core/Connection.php:26
Stack trace:
#0 /home/janus/www/php-g18/core/Connection.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/core/Model.php(70): Connection->preparedStatment()
#2 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(55): Model::update()
#3 /home/janus/www/php-g18/core/Router.php(89): CategoryController->patch()
#4 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#5 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#6 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#7 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 26
[26-May-2020 19:54:35 Europe/Kiev] PHP Notice:  Undefined variable: query in /home/janus/www/php-g18/core/Model.php on line 65
[26-May-2020 19:54:35 Europe/Kiev] PHP Stack trace:
[26-May-2020 19:54:35 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[26-May-2020 19:54:35 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[26-May-2020 19:54:35 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:63
[26-May-2020 19:54:35 Europe/Kiev] PHP   4. Router->init() /home/janus/www/php-g18/core/Router.php:46
[26-May-2020 19:54:35 Europe/Kiev] PHP   5. CategoryController->patch() /home/janus/www/php-g18/core/Router.php:89
[26-May-2020 19:54:35 Europe/Kiev] PHP   6. Model::update() /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php:55
[26-May-2020 20:02:01 Europe/Kiev] PHP Parse error:  syntax error, unexpected ')' in /home/janus/www/php-g18/core/Model.php on line 72
[26-May-2020 20:06:15 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'boo' in 'field list' in /home/janus/www/php-g18/core/Connection.php:26
Stack trace:
#0 /home/janus/www/php-g18/core/Connection.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/core/Model.php(71): Connection->preparedStatment()
#2 /home/janus/www/php-g18/app/Controllers/Admin/CategoryController.php(55): Model::update()
#3 /home/janus/www/php-g18/core/Router.php(89): CategoryController->patch()
#4 /home/janus/www/php-g18/core/Router.php(46): Router->init()
#5 /home/janus/www/php-g18/bootstrap/app.php(63): Router->run()
#6 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#7 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 26
[26-May-2020 22:38:40 Europe/Kiev] PHP Fatal error:  Uncaught Exception: File /home/janus/www/php-g18/app/Controllers/UsersController.php does not exists. in /home/janus/www/php-g18/core/Router.php:70
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(31): Router->init()
#1 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 70
[26-May-2020 22:43:57 Europe/Kiev] PHP Notice:  Undefined offset: 404 in /home/janus/www/php-g18/core/Router.php on line 43
[26-May-2020 22:43:57 Europe/Kiev] PHP Stack trace:
[26-May-2020 22:43:57 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[26-May-2020 22:43:57 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[26-May-2020 22:43:57 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[26-May-2020 22:43:57 Europe/Kiev] PHP Notice:  Undefined offset: 1 in /home/janus/www/php-g18/core/Router.php on line 49
[26-May-2020 22:43:57 Europe/Kiev] PHP Stack trace:
[26-May-2020 22:43:57 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[26-May-2020 22:43:57 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[26-May-2020 22:43:57 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[26-May-2020 22:43:57 Europe/Kiev] PHP   4. Router->getController() /home/janus/www/php-g18/core/Router.php:43
[26-May-2020 22:43:57 Europe/Kiev] PHP Fatal error:  Uncaught Exception: File /home/janus/www/php-g18/app/Controllers/.php does not exists. in /home/janus/www/php-g18/core/Router.php:70
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(43): Router->init()
#1 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 70
[26-May-2020 22:45:53 Europe/Kiev] PHP Notice:  Undefined offset: 404 in /home/janus/www/php-g18/core/Router.php on line 43
[26-May-2020 22:45:53 Europe/Kiev] PHP Stack trace:
[26-May-2020 22:45:53 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[26-May-2020 22:45:53 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[26-May-2020 22:45:53 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[26-May-2020 22:45:53 Europe/Kiev] PHP Notice:  Undefined offset: 1 in /home/janus/www/php-g18/core/Router.php on line 49
[26-May-2020 22:45:53 Europe/Kiev] PHP Stack trace:
[26-May-2020 22:45:53 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[26-May-2020 22:45:53 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[26-May-2020 22:45:53 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[26-May-2020 22:45:53 Europe/Kiev] PHP   4. Router->getController() /home/janus/www/php-g18/core/Router.php:43
[26-May-2020 22:45:53 Europe/Kiev] PHP Fatal error:  Uncaught Exception: File /home/janus/www/php-g18/app/Controllers/.php does not exists. in /home/janus/www/php-g18/core/Router.php:70
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(43): Router->init()
#1 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 70
[26-May-2020 22:54:29 Europe/Kiev] PHP Notice:  Undefined offset: 404 in /home/janus/www/php-g18/core/Router.php on line 43
[26-May-2020 22:54:29 Europe/Kiev] PHP Stack trace:
[26-May-2020 22:54:29 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[26-May-2020 22:54:29 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[26-May-2020 22:54:29 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[26-May-2020 22:54:29 Europe/Kiev] PHP Notice:  Undefined offset: 1 in /home/janus/www/php-g18/core/Router.php on line 49
[26-May-2020 22:54:29 Europe/Kiev] PHP Stack trace:
[26-May-2020 22:54:29 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[26-May-2020 22:54:29 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[26-May-2020 22:54:29 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[26-May-2020 22:54:29 Europe/Kiev] PHP   4. Router->getController() /home/janus/www/php-g18/core/Router.php:43
[26-May-2020 22:54:29 Europe/Kiev] PHP Fatal error:  Uncaught Exception: File /home/janus/www/php-g18/app/Controllers/.php does not exists. in /home/janus/www/php-g18/core/Router.php:70
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(43): Router->init()
#1 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 70
[27-May-2020 09:17:32 Europe/Kiev] PHP Fatal error:  Uncaught Error: Call to undefined method Connection::getPreparedStatment() in /home/janus/www/php-g18/core/Model.php:84
Stack trace:
#0 /home/janus/www/php-g18/app/Models/Category.php(12): Model::getOne()
#1 /home/janus/www/php-g18/app/Controllers/HomeController.php(11): Category::getCategories()
#2 /home/janus/www/php-g18/core/Router.php(74): HomeController->index()
#3 /home/janus/www/php-g18/core/Router.php(31): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Model.php on line 84
[27-May-2020 09:18:52 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY000]: General error: 2031  in /home/janus/www/php-g18/core/Model.php:89
Stack trace:
#0 /home/janus/www/php-g18/core/Model.php(89): PDOStatement->execute()
#1 /home/janus/www/php-g18/app/Models/Category.php(12): Model::getOne()
#2 /home/janus/www/php-g18/app/Controllers/HomeController.php(11): Category::getCategories()
#3 /home/janus/www/php-g18/core/Router.php(74): HomeController->index()
#4 /home/janus/www/php-g18/core/Router.php(31): Router->init()
#5 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#6 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#7 {main}
  thrown in /home/janus/www/php-g18/core/Model.php on line 89
[27-May-2020 13:45:00 Europe/Kiev] PHP Fatal error:  Uncaught Error: Call to undefined method BrandController::render() in /home/janus/www/php-g18/app/Controllers/Admin/BrandController.php:17
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(74): BrandController->index()
#1 /home/janus/www/php-g18/core/Router.php(31): Router->init()
#2 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#3 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#4 {main}
  thrown in /home/janus/www/php-g18/app/Controllers/Admin/BrandController.php on line 17
[27-May-2020 13:46:16 Europe/Kiev] PHP Notice:  Undefined offset: 404 in /home/janus/www/php-g18/core/Router.php on line 43
[27-May-2020 13:46:16 Europe/Kiev] PHP Stack trace:
[27-May-2020 13:46:16 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[27-May-2020 13:46:16 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[27-May-2020 13:46:16 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[27-May-2020 13:46:16 Europe/Kiev] PHP Notice:  Undefined offset: 1 in /home/janus/www/php-g18/core/Router.php on line 49
[27-May-2020 13:46:16 Europe/Kiev] PHP Stack trace:
[27-May-2020 13:46:16 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[27-May-2020 13:46:16 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[27-May-2020 13:46:16 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[27-May-2020 13:46:16 Europe/Kiev] PHP   4. Router->getController() /home/janus/www/php-g18/core/Router.php:43
[27-May-2020 13:46:16 Europe/Kiev] PHP Fatal error:  Uncaught Exception: File /home/janus/www/php-g18/app/Controllers/.php does not exists. in /home/janus/www/php-g18/core/Router.php:70
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(43): Router->init()
#1 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 70
[27-May-2020 13:48:54 Europe/Kiev] PHP Notice:  Undefined offset: 404 in /home/janus/www/php-g18/core/Router.php on line 43
[27-May-2020 13:48:54 Europe/Kiev] PHP Stack trace:
[27-May-2020 13:48:54 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[27-May-2020 13:48:54 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[27-May-2020 13:48:54 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[27-May-2020 13:48:54 Europe/Kiev] PHP Notice:  Undefined offset: 1 in /home/janus/www/php-g18/core/Router.php on line 49
[27-May-2020 13:48:54 Europe/Kiev] PHP Stack trace:
[27-May-2020 13:48:54 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[27-May-2020 13:48:54 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[27-May-2020 13:48:54 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[27-May-2020 13:48:54 Europe/Kiev] PHP   4. Router->getController() /home/janus/www/php-g18/core/Router.php:43
[27-May-2020 13:48:54 Europe/Kiev] PHP Fatal error:  Uncaught Exception: File /home/janus/www/php-g18/app/Controllers/.php does not exists. in /home/janus/www/php-g18/core/Router.php:70
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(43): Router->init()
#1 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 70
[27-May-2020 13:49:43 Europe/Kiev] PHP Notice:  Undefined offset: 404 in /home/janus/www/php-g18/core/Router.php on line 43
[27-May-2020 13:49:43 Europe/Kiev] PHP Stack trace:
[27-May-2020 13:49:43 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[27-May-2020 13:49:43 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[27-May-2020 13:49:43 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[27-May-2020 13:49:43 Europe/Kiev] PHP Notice:  Undefined offset: 1 in /home/janus/www/php-g18/core/Router.php on line 49
[27-May-2020 13:49:43 Europe/Kiev] PHP Stack trace:
[27-May-2020 13:49:43 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[27-May-2020 13:49:43 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[27-May-2020 13:49:43 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[27-May-2020 13:49:43 Europe/Kiev] PHP   4. Router->getController() /home/janus/www/php-g18/core/Router.php:43
[27-May-2020 13:49:43 Europe/Kiev] PHP Fatal error:  Uncaught Exception: File /home/janus/www/php-g18/app/Controllers/.php does not exists. in /home/janus/www/php-g18/core/Router.php:70
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(43): Router->init()
#1 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 70
[27-May-2020 14:01:27 Europe/Kiev] PHP Warning:  Use of undefined constant VENDOR - assumed 'VENDOR' (this will throw an Error in a future version of PHP) in /home/janus/www/php-g18/app/Models/Product.php on line 2
[27-May-2020 14:01:27 Europe/Kiev] PHP Stack trace:
[27-May-2020 14:01:27 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[27-May-2020 14:01:27 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[27-May-2020 14:01:27 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[27-May-2020 14:01:27 Europe/Kiev] PHP   4. Router->init() /home/janus/www/php-g18/core/Router.php:31
[27-May-2020 14:01:27 Europe/Kiev] PHP   5. include_once() /home/janus/www/php-g18/core/Router.php:61
[27-May-2020 14:01:27 Europe/Kiev] PHP   6. require_once() /home/janus/www/php-g18/app/Controllers/Admin/ProductController.php:6
[27-May-2020 14:01:27 Europe/Kiev] PHP Warning:  require_once(VENDOR/framework/Model.php): failed to open stream: No such file or directory in /home/janus/www/php-g18/app/Models/Product.php on line 2
[27-May-2020 14:01:27 Europe/Kiev] PHP Stack trace:
[27-May-2020 14:01:27 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[27-May-2020 14:01:27 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[27-May-2020 14:01:27 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[27-May-2020 14:01:27 Europe/Kiev] PHP   4. Router->init() /home/janus/www/php-g18/core/Router.php:31
[27-May-2020 14:01:27 Europe/Kiev] PHP   5. include_once() /home/janus/www/php-g18/core/Router.php:61
[27-May-2020 14:01:27 Europe/Kiev] PHP   6. require_once() /home/janus/www/php-g18/app/Controllers/Admin/ProductController.php:6
[27-May-2020 14:01:27 Europe/Kiev] PHP Fatal error:  require_once(): Failed opening required 'VENDOR/framework/Model.php' (include_path='.:/usr/share/php') in /home/janus/www/php-g18/app/Models/Product.php on line 2
[27-May-2020 14:01:27 Europe/Kiev] PHP Stack trace:
[27-May-2020 14:01:27 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[27-May-2020 14:01:27 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[27-May-2020 14:01:27 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[27-May-2020 14:01:27 Europe/Kiev] PHP   4. Router->init() /home/janus/www/php-g18/core/Router.php:31
[27-May-2020 14:01:27 Europe/Kiev] PHP   5. include_once() /home/janus/www/php-g18/core/Router.php:61
[27-May-2020 14:01:27 Europe/Kiev] PHP   6. require_once() /home/janus/www/php-g18/app/Controllers/Admin/ProductController.php:6
[27-May-2020 14:27:19 Europe/Kiev] PHP Notice:  Undefined offset: 404 in /home/janus/www/php-g18/core/Router.php on line 43
[27-May-2020 14:27:19 Europe/Kiev] PHP Stack trace:
[27-May-2020 14:27:19 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[27-May-2020 14:27:19 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[27-May-2020 14:27:19 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[27-May-2020 14:27:19 Europe/Kiev] PHP Notice:  Undefined offset: 1 in /home/janus/www/php-g18/core/Router.php on line 49
[27-May-2020 14:27:19 Europe/Kiev] PHP Stack trace:
[27-May-2020 14:27:19 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[27-May-2020 14:27:19 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[27-May-2020 14:27:19 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[27-May-2020 14:27:19 Europe/Kiev] PHP   4. Router->getController() /home/janus/www/php-g18/core/Router.php:43
[27-May-2020 14:27:19 Europe/Kiev] PHP Fatal error:  Uncaught Exception: File /home/janus/www/php-g18/app/Controllers/.php does not exists. in /home/janus/www/php-g18/core/Router.php:70
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(43): Router->init()
#1 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#2 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#3 {main}
  thrown in /home/janus/www/php-g18/core/Router.php on line 70
[27-May-2020 14:29:30 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY000]: General error: 1366 Incorrect integer value: 'on' for column 'is_new' at row 1 in /home/janus/www/php-g18/core/Model.php:45
Stack trace:
#0 /home/janus/www/php-g18/core/Model.php(45): PDOStatement->execute()
#1 /home/janus/www/php-g18/app/Controllers/Admin/ProductController.php(50): Model::insert()
#2 /home/janus/www/php-g18/core/Router.php(74): ProductController->store()
#3 /home/janus/www/php-g18/core/Router.php(31): Router->init()
#4 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#5 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#6 {main}
  thrown in /home/janus/www/php-g18/core/Model.php on line 45
[27-May-2020 14:53:27 Europe/Kiev] PHP Fatal error:  Uncaught Error: Call to undefined method Picture::store() in /home/janus/www/php-g18/app/Controllers/Admin/ProductController.php:98
Stack trace:
#0 /home/janus/www/php-g18/core/Router.php(74): ProductController->store()
#1 /home/janus/www/php-g18/core/Router.php(31): Router->init()
#2 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#3 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#4 {main}
  thrown in /home/janus/www/php-g18/app/Controllers/Admin/ProductController.php on line 98
[28-May-2020 16:18:22 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'status' in where clause is ambiguous in /home/janus/www/php-g18/core/Connection.php:26
Stack trace:
#0 /home/janus/www/php-g18/core/Connection.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/core/Model.php(94): Connection->preparedStatment()
#2 /home/janus/www/php-g18/app/Models/Category.php(24): Model::getWithSql()
#3 /home/janus/www/php-g18/app/Controllers/HomeController.php(12): Category::getCategories()
#4 /home/janus/www/php-g18/core/Router.php(74): HomeController->index()
#5 /home/janus/www/php-g18/core/Router.php(31): Router->init()
#6 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#7 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#8 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 26
[28-May-2020 16:29:26 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'COUNT(DISTINCT `products`.`category_id`) as `pid`
        FROM `categories` INNE' at line 1 in /home/janus/www/php-g18/core/Connection.php:26
Stack trace:
#0 /home/janus/www/php-g18/core/Connection.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/core/Model.php(94): Connection->preparedStatment()
#2 /home/janus/www/php-g18/app/Models/Category.php(24): Model::getWithSql()
#3 /home/janus/www/php-g18/app/Controllers/HomeController.php(12): Category::getCategories()
#4 /home/janus/www/php-g18/core/Router.php(74): HomeController->index()
#5 /home/janus/www/php-g18/core/Router.php(31): Router->init()
#6 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#7 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#8 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 26
[28-May-2020 16:31:10 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'COUNT(DISTINCT `products`.`category_id`) as `pid` FROM `categories` INNER JOIN `' at line 1 in /home/janus/www/php-g18/core/Connection.php:26
Stack trace:
#0 /home/janus/www/php-g18/core/Connection.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/core/Model.php(94): Connection->preparedStatment()
#2 /home/janus/www/php-g18/app/Models/Category.php(23): Model::getWithSql()
#3 /home/janus/www/php-g18/app/Controllers/HomeController.php(12): Category::getCategories()
#4 /home/janus/www/php-g18/core/Router.php(74): HomeController->index()
#5 /home/janus/www/php-g18/core/Router.php(31): Router->init()
#6 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#7 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#8 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 26
[28-May-2020 16:31:45 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'COUNT(DISTINCT `products`.`category_id`) as `pid` FROM `categories` INNER JOIN `' at line 1 in /home/janus/www/php-g18/core/Connection.php:26
Stack trace:
#0 /home/janus/www/php-g18/core/Connection.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/core/Model.php(94): Connection->preparedStatment()
#2 /home/janus/www/php-g18/app/Models/Category.php(23): Model::getWithSql()
#3 /home/janus/www/php-g18/app/Controllers/HomeController.php(12): Category::getCategories()
#4 /home/janus/www/php-g18/core/Router.php(74): HomeController->index()
#5 /home/janus/www/php-g18/core/Router.php(31): Router->init()
#6 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#7 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#8 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 26
[28-May-2020 16:31:47 Europe/Kiev] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'COUNT(DISTINCT `products`.`category_id`) as `pid` FROM `categories` INNER JOIN `' at line 1 in /home/janus/www/php-g18/core/Connection.php:26
Stack trace:
#0 /home/janus/www/php-g18/core/Connection.php(26): PDO->prepare()
#1 /home/janus/www/php-g18/core/Model.php(94): Connection->preparedStatment()
#2 /home/janus/www/php-g18/app/Models/Category.php(23): Model::getWithSql()
#3 /home/janus/www/php-g18/app/Controllers/HomeController.php(12): Category::getCategories()
#4 /home/janus/www/php-g18/core/Router.php(74): HomeController->index()
#5 /home/janus/www/php-g18/core/Router.php(31): Router->init()
#6 /home/janus/www/php-g18/bootstrap/app.php(64): Router->run()
#7 /home/janus/www/php-g18/public/index.php(3): require_once('/home/janus/www...')
#8 {main}
  thrown in /home/janus/www/php-g18/core/Connection.php on line 26
[28-May-2020 16:41:53 Europe/Kiev] PHP Notice:  Undefined variable: count_product in /home/janus/www/php-g18/app/Views/layouts/partials/_filter.php on line 13
[28-May-2020 16:41:53 Europe/Kiev] PHP Stack trace:
[28-May-2020 16:41:53 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[28-May-2020 16:41:53 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[28-May-2020 16:41:53 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[28-May-2020 16:41:53 Europe/Kiev] PHP   4. Router->init() /home/janus/www/php-g18/core/Router.php:31
[28-May-2020 16:41:53 Europe/Kiev] PHP   5. HomeController->index() /home/janus/www/php-g18/core/Router.php:74
[28-May-2020 16:41:53 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/HomeController.php:13
[28-May-2020 16:41:53 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[28-May-2020 16:41:53 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/app.php:25
[28-May-2020 16:41:53 Europe/Kiev] PHP   9. require_once() /home/janus/www/php-g18/app/Views/home/index.php:2
[28-May-2020 16:41:53 Europe/Kiev] PHP Notice:  Undefined variable: count_product in /home/janus/www/php-g18/app/Views/layouts/partials/_filter.php on line 13
[28-May-2020 16:41:53 Europe/Kiev] PHP Stack trace:
[28-May-2020 16:41:53 Europe/Kiev] PHP   1. {main}() /home/janus/www/php-g18/public/index.php:0
[28-May-2020 16:41:53 Europe/Kiev] PHP   2. require_once() /home/janus/www/php-g18/public/index.php:3
[28-May-2020 16:41:53 Europe/Kiev] PHP   3. Router->run() /home/janus/www/php-g18/bootstrap/app.php:64
[28-May-2020 16:41:53 Europe/Kiev] PHP   4. Router->init() /home/janus/www/php-g18/core/Router.php:31
[28-May-2020 16:41:53 Europe/Kiev] PHP   5. HomeController->index() /home/janus/www/php-g18/core/Router.php:74
[28-May-2020 16:41:53 Europe/Kiev] PHP   6. View->render() /home/janus/www/php-g18/app/Controllers/HomeController.php:13
[28-May-2020 16:41:53 Europe/Kiev] PHP   7. require() /home/janus/www/php-g18/core/View.php:31
[28-May-2020 16:41:53 Europe/Kiev] PHP   8. include() /home/janus/www/php-g18/app/Views/layouts/app.php:25
[28-May-2020 16:41:53 Europe/Kiev] PHP   9. require_once() /home/janus/www/php-g18/app/Views/home/index.php:2
