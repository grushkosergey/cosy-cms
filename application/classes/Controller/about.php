<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About extends Page {

	public function action_index()
	{   
	    $this->title = 'О Cosy CMS';
        $this->template->content = View::factory('/pages/about');
	}

} // End Main
