<?php

class TicketFileDeleteProcessor extends modObjectProcessor {
	public $classKey = 'TicketFile';
	public $permission = 'ticket_file_upload';


	/** {@inheritDoc} */
	public function initialize() {
		if (!$this->modx->hasPermission($this->permission)) {
			return $this->modx->lexicon('access_denied');
		}
		return true;
	}


	/** {@inheritDoc} */
	public function process() {
		$id = $this->getProperty('id');
		/** @var TicketFile $file */
		if (!$file = $this->modx->getObject($this->classKey, $id)) {
			return $this->failure($this->modx->lexicon('ticket_err_file_ns'));
		}
		elseif ($file->createdby != $this->modx->user->id) {
			return $this->failure($this->modx->lexicon('ticket_err_file_owner'));
		}

		if ($file->get('deleted')) {
			$file->set('deleted', 0);
		}
		else {
			$file->set('deleted', 1);
		}
		$file->save();

		return $this->success();
	}

}
return 'TicketFileDeleteProcessor';