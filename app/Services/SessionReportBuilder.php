<?php

namespace App\Services;

class SessionReportBuilder
{

    public function getReport()
    {
        $example = ['SessionData1', 'SessionData2', 'SessionData3', 'SessionData4'];;
        return collect($example);
    }

}
