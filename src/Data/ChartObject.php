<?php

namespace ItsRD\LaravelSimpleCharts\Data;

use Illuminate\Contracts\Support\Arrayable;
use ItsRD\LaravelSimpleCharts\Charts;

class ChartObject implements Arrayable
{
    public function __construct(
        private Charts $charts
    ) {
    }

    public static function fromChart(Charts $charts): ChartObject
    {
        return new ChartObject($charts);
    }

    public function toArray(): array
    {
        return [
            'type' => 'line',
            'data' => [
                'labels' => $this->charts->labels,
                'datasets' => collect($this->charts->datasets)->map(function ($dataset) {
                    return [
                        'label' => $dataset['label'],
                        'data' => $dataset['data'],
                        'borderWidth' => 2,
                    ];
                })->toArray(),
            ],
            'options' => [
                'scales' => [
                    'y' => [
                        'beginAtZero' => true,
                    ],
                ],
            ],
        ];
    }
}
