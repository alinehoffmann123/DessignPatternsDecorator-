<?php

namespace App\Services;

abstract class ReportDecorator implements ReportInterface{
    protected $report;

    public function __construct(ReportInterface $report){
        $this->report = $report;
    }

    public function render(): string{
        return $this->report->render();
    }
}
