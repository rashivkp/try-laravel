<?php

class UserController extends BaseController {
	
	protected $layout = 'layout';

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function getIndex()
	{
		$this->layout->content = View::make('users');
	}

}

