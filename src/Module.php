<?php

namespace navatech\setting;

use Yii;

class Module extends \navatech\base\Module {

	public    $controllerNamespace   = 'navatech\setting\controllers';

	public    $enableMultiLanguage = false;

	protected $_isBackend;

	public function init() {
		parent::init();
	}

	/**
	 * Check if module is used for backend application.
	 *
	 * @return boolean true if it's used for backend application
	 */
	public function isBackend() {
		if ($this->_isBackend === null) {
			$this->_isBackend = strpos(Yii::$app->controllerNamespace, 'backend') === false ? false : true;
		}
		return $this->_isBackend;
	}
}
