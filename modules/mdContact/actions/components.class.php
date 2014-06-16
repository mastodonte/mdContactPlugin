<?php 

class mdContactComponents extends sfComponents
{
	
	public function executeMdContactForm(sfWebRequest $request)
	{
		$this->form = new mdContactForm();
	}
}