<?php

class View
{
	/*
	$content_view - views displaying content pages;
	$template_file - common template for all pages;
	$data - array with page content elements. Filled in the model.
	*/
	public function generate($content_view, $template_view, $data = null): void
	{
		/*
		Connect a common template.
		Inside it, a view will be embedded
		to display the content of a specific page.
		*/
		include 'application/views/'.$template_view;
	}
}
