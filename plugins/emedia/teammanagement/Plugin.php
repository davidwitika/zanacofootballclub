<?php namespace emedia\TeamManagement;

use System\Classes\PluginBase;

class Plugin extends PluginBase {

	public function registerComponents() {
		return [
			'emedia\TeamManagement\Components\UpcomingMatch' => 'upcomingmatch',
			'emedia\TeamManagement\Components\LatestGameResults' => 'latestGameResults',

		];
	}

	public function registerSettings() {
	}
	public function boot() {
		\Event::listen('offline.sitesearch.query', function ($query) {

			$items = Models\Players::where('name', 'like', "%${query}%")
				->orWhere('bio', 'like', "%${query}%")
				->get();

			$results = $items->map(function ($item) use ($query) {

				$relevance = mb_stripos($item->name, $query) !== false ? 2 : 1;

				return [
					'title' => $item->name,
					'text' => $item->bio,
					'url' => '/my-zanaco/players/' . $item->slug,
					'relevance' => $relevance,
				];
			});

			return [
				'provider' => 'Players',
				'results' => $results,
			];
		});
	}

}
