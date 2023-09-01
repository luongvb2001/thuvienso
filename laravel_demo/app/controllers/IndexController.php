<?php
//file: app/controllers/IndexController.php
 
class IndexController extends BaseController {
 
    public function showIndex() 
    {
        // generates response from index.blade.php
        return View::make('admin.index');
    }
}
 
//file: app/routes.php
//registering route to controller actions
 
Route::get('index','IndexController@showIndex');
 
//In general
Route::get('route.name','SomeController@someAction');
Route::post('route.name','SomeController@someAction');
So an action inside controller has a corresponding route entry in app/routes.php. We can also create RESTful controllers by prefixing controller’s action name with HTTP verb it responds to like this:
 
<?php
 
class IndexController extends BaseController {
 
    public function getAction() 
    {
        //get request handling
    }
    public function postAction()
    {
        //post request handling
    }
}
 
//registering route
Route::controller('index','IndexController);