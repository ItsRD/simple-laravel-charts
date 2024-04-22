<?php

namespace ItsRD\SimpleLaravelCharts;

use ItsRD\SimpleLaravelCharts\Data\ChartObject;

class Charts
{
    public string $id = '';

    public string $type = '';

    public array $labels = [];

    public array $datasets = [];

    public array $options = [];

    public function id(string $id): Charts
    {
        $this->id = $id;

        return $this;
    }

    public function type(string $type = 'line'): Charts
    {
        $this->type = $type;

        return $this;
    }

    public function labels(array $labels = []): Charts
    {
        $this->labels = $labels;

        return $this;
    }

    public function addDataset(string $label, array $data): Charts
    {
        $this->datasets[] = ['label' => $label, 'data' => $data];

        return $this;
    }

    public function setOptions(array $options = []): Charts
    {
        $this->options = $options;

        return $this;
    }

    public function element(): string
    {
        return view('simple-laravel-charts::element', [
            'id' => $this->id,
        ])->render();
    }

    public function scripts(): string
    {
        return view('simple-laravel-charts::scripts')
            ->with('charts', $this)
            ->render();
    }

    public function getChartObject(): array
    {
        return ChartObject::fromChart($this)->toArray();
    }

    public function getId(): string
    {
        return $this->id;
    }
}
