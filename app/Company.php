<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table ="companies";
    protected $fillable = [
         'name', 'acronym', 'description', 'url', 'type', 'languagesupported', 'periodicity', 'economycoverage', 'granularity', 'numberofeconomies', 'topics', 'updatefrequency', 'updateschedule', 'lastrevisiondate', 'contactdetails', 'accessoption', 'bulkdownload', 'cite', 'detailpageurl', 'popularity', 'coverage', 'api', 'apiaccessurl', 'apisourceid',
    ];
}
