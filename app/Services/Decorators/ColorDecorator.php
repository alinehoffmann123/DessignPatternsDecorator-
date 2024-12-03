<?php

namespace App\Services\Decorators;

use App\Services\ReportBase;

class ColorDecorator extends ReportBase{
    private $color;

    public function __construct(ReportBase $report, string $color){
        parent::__construct($report->render());
        $this->color = $color;
    }

    public function render(): string{
        return "<div style='color: {$this->color};'>" . parent::render() . "</div>";
    }
}

