<?php

class simple_compose extends rcube_plugin
{
	function init()
	{
		$rcmail = rcube::get_instance();
		if ($rcmail->output->type == 'html') {
			$this->include_stylesheet('simple_compose.css');
		}
	}
}
