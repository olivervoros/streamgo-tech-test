<?php

namespace App\Services;

class SessionReportBuilder
{

    public function getReport()
    {
        // We could take this data from the DB using eloquent or directly from the DB
        return  ['SessionData1', 'SessionData2', 'SessionData3', 'SessionData4'];;
    }

}
