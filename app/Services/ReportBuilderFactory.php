<?php

namespace App\Services;


class ReportBuilderFactory
{

    public function makeReportBuilder(string $reportType) {
        switch($reportType) {
            case 'session' :
                return new SessionReportBuilder();
            case 'example' :
                return new AnotherExampleReportBuilder();
            default :
                throw new \InvalidArgumentException('Invalid report builder type...');
        }
    }


}
