<?php

class GP_CLI_Regenerate_Paths extends WP_CLI_Command {
	public function __invoke() {
		GP::$project->regenerate_paths();
	}
}
