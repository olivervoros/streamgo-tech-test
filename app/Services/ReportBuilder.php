<?php

namespace App\Services;

class ReportBuilder implements ReportBuilderInterface
{

    private $reportBuilderFactory;

    public function __construct(ReportBuilderFactory $reportBuilderFactory) {
        $this->reportBuilderFactory = $reportBuilderFactory;
    }

    public function getReport(string $reportType, string $returnType = null)
    {
        $reportBuilder = $this->reportBuilderFactory->makeReportBuilder($reportType);
        $result = $reportBuilder->getReport();
        return ($returnType==='collection') ? collect($result) : $result;

    }

}
