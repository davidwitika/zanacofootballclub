<?php namespace emedia\TeamManagement\Components;

use Carbon\Carbon;
use Cms\Classes\ComponentBase;
use emedia\TeamManagement\Models\Matches;

class UpcomingMatch extends ComponentBase {

	public $match;

	public function componentDetails() {
		return [
			'name' => 'Upcoming Match',
			'description' => 'Upcoming Match Counter',
		];
	}

	public function onRun() {
		$this->match = $this->loadUpcomingMatch();
	}

	protected function loadUpcomingMatch() {
		return Matches::where('match_date', '>', Carbon::now())->latest('match_date')->first();
	}
}