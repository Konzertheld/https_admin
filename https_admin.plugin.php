<?php
class HttpsAdmin extends Plugin
{
	public function action_admin_header()
	{
		$server = InputFilter::parse_url(Site::get_url('habari'));
		if($server['scheme'] != 'https') {
			$path = $_SERVER['REQUEST_URI'];
			$redir = "https://" . $server['host'] . $path;
			Utils::redirect($redir);
		}
	}
}
?>