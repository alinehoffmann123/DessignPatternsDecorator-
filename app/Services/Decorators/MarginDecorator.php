<?php
namespace App\Services\Decorators;

use App\Services\ReportBase;

class MarginDecorator extends ReportBase{
    private $marginValue;

    public function __construct(ReportBase $report, string $marginValue) {
        parent::__construct($report->render());
        $this->marginValue = $marginValue;
    }

    public function render(): string{
        return "<div style='margin: {$this->marginValue};'>" . parent::render() . "</div>";
    }
}

