<?php


namespace App\Services\Decorators;

use App\Services\ReportBase;

class HeaderDecorator extends ReportBase{
    private $headerText;

    public function __construct(ReportBase $report, string $headerText){
        parent::__construct($report->render()); 
        $this->headerText = $headerText;
    }

    public function render(): string{
        return $this->headerText . "\n" . parent::render();  
    }
}

