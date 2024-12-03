<?php

namespace App\Services\Decorators;

use App\Services\ReportBase;

class BorderDecorator extends ReportBase{
    public function __construct(ReportBase $report)
    {
        parent::__construct($report->render());
    }

    public function render(): string
    {
        return "<div style='border: 2px solid black; padding: 10px;'>" . parent::render() . "</div>";
    }
}

