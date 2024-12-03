<?php

namespace App\Services\Decorators;

use App\Services\ReportBase;

class FontDecorator extends ReportBase {
    private $fontValue;

    public function __construct(ReportBase $report, string $fontValue){
        parent::__construct($report->render());
        $this->fontValue = $fontValue;
    }

    public function render(): string{
        return "<div style='font-family: {$this->fontValue};'>" . parent::render() . "</div>";
    }
}

