<?php

namespace App\Services\Decorators;

use App\Services\ReportBase;

class CustomStyleDecorator extends ReportBase {
    protected $report;
    protected $customStyle;

    public function __construct(ReportBase $report, $customStyle){
        $this->report = $report;
        $this->customStyle = $customStyle;
    }

    /**
     * Aplica o estilo CSS personalizado ao relatório.
     *
     * @return string
     */
    public function render(): string{
        return "<style>{$this->customStyle}</style>" . $this->report->render();
    }
}

