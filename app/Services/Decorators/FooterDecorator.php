<?php

namespace App\Services\Decorators;

use App\Services\ReportBase;

class FooterDecorator extends ReportBase
{
    private $footerText;

    public function __construct(ReportBase $report, string $footerText){
        parent::__construct($report->render());
        $this->footerText = $footerText;
    }

    public function render(): string{
        return parent::render() . "\n" . $this->footerText;
    }
}

