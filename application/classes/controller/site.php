<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site extends Controller {

	public function action_index()
	{
                $current_user = 'test';
                $view = new View('index');
                $view->set('test', '123');
   
                $this->response->body($view);
	}
        
        public function action_login(){
            /*
            $auth = Auth::instance();
            if ($auth->logged_in()) {
                url::redirect('/account/summary');
            }
           echo url::redirect('site/index');
           
            //$this->db = new Database;
            $query = DB::select()->from('users');//Debug::vars($query)

            $result = $query->execute()->as_array();
            var_dump($result);
            */
             $view = new View('login');
   
             $this->response->body($view);
        }
        
        public function action_logout(){
            
        }
        
        public function action_test(){
             throw new HTTP_Exception_404('page not found!');
        }

} // End Site
