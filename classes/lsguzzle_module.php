<?
require 'vendor/autoload.php';

	class LsGuzzle_Module extends Core_ModuleBase
	{
		/**
		* Creates the module information object
		* @return Core_ModuleInfo
		*/
		protected function createModuleInfo()
		{
			return new Core_ModuleInfo(
				"Guzzle library for Lemonstand",
				"Allows for Guzzle to be used in Lemonstand",
				"Chuck Does I.T.",
				"http://www.chuckdoesit.com");
		}
	}

?>
