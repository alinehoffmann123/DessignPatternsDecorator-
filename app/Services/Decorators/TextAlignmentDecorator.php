<?php

namespace App\Services\Decorators;

use App\Services\ReportBase;

class TextAlignmentDecorator extends ReportBase{
    protected $alignment;

    public function __construct(ReportBase $report, $alignment){
        parent::__construct($report->content);
        $this->alignment = $alignment;
    }

    public function render(): string{
        $content = parent::render();

        $alignedContent = str_replace('<p>', '<p style="text-align:' . $this->alignment . ';">', $content);
        $alignedContent = str_replace('<h1>', '<h1 style="text-align:' . $this->alignment . ';">', $alignedContent);
        $alignedContent = str_replace('<h2>', '<h2 style="text-align:' . $this->alignment . ';">', $alignedContent);
        $alignedContent = str_replace('<h3>', '<h3 style="text-align:' . $this->alignment . ';">', $alignedContent);

        return $alignedContent; 
    }
}
