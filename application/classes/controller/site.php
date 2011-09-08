<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site extends Controller {

	public function action_index()
	{
                $current_user = 'test';
                $view = View::factory('index')
                       ->set('places', array('Rome', 'Paris', 'London', 'New York', 'Tokyo'))
                       ->bind('user', $current_user);
                       
                $this->response->body($view);
	}
        
        public function action_test(){
             throw new HTTP_Exception_404('page not found!');
        }

} // End Site
