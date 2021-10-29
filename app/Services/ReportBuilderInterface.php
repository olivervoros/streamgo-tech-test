<?php

namespace App\Services;

use Illuminate\Support\Collection;

interface ReportBuilderInterface
{

    public function getReport(string $reportType,  string $returnType);

}
