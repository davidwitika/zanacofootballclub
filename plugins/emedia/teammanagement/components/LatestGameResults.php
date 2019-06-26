<?php namespace emedia\TeamManagement\Components;

use Carbon\Carbon;
use Cms\Classes\ComponentBase;
use emedia\TeamManagement\Models\Matches;

class LatestGameResults extends ComponentBase {

	public $result;

	public function componentDetails() {
		return [
			'name' => 'Latest Game Results',
			'description' => 'Latest Game Results',
		];
	}

	public function onRun() {
		$this->result = $this->loadLatestResult();
	}

	protected function loadLatestResult() {
		return Matches::where('match_date', '<', Carbon::now())->latest('match_date')->first();
	}
}