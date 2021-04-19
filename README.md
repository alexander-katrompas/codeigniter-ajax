# codeigniter-ajax
This is a simple demonstration of making and using an AJAX controller.
There is a controller called Ajax in the application/controllers/Ajax.php file
in the  directory. It demonstrates the basic structure of an ajax controller.
It is called from JavaScript which is in assets/js/main.js. Also notice how the
routes work. The JS calls 'processnames' which works because there is a route
entry in application/config/routes.php which sets $route['processnames'] = 'ajax/processnames';
