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
