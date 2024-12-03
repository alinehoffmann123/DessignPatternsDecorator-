<?php

namespace App\Services;

class ReportBase implements ReportInterface {
    protected $content;

    public function __construct(string $content) {
        $this->content = $content;
    }

    public function render(): string{
        return $this->content;
    }

    public function getContent(): string{
        return $this->content;
    }
}
