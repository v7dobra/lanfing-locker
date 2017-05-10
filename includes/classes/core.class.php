<?php

class Core {
	public function init() {


	}

//	private function init_constants( SplEnum $paths ) {
//
//
//	}

	/**
	 * Define constant if not already set.
	 *
	 * @param  string $name
	 * @param  string|bool $value
	 */
	private function define( $name, $value ) {
		if ( ! defined( $name ) ) {
			define( $name, $value );
		}
	}

}