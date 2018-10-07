<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use DataTables;
use App\Company;
use App\User;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return DataTables::of(Company::query())->make(true);
    return view('Company/index');
        
    }
     public function getData()

    {
        $data_info=Company::all();//Select('id','name','acronym','description','url','type','languagesupported','periodicity','economycoverage','granularity','numberofeconomies','topics','updatefrequency','lastrevisiondate','contactdeatails','accessoption', 'bulkdownload', 'site','detailpageurl','popularity','coverage','api','apiaccessurl','apisourceid')
        //->get();
        
        return Datatables::of($data_info)->make(true);
       

    }
    public function loadinfodata()
    {
        return DataTables::of(Company::query())->make(true);
    }
    public function getcloud_data(){
        //delete table contents
        $model=Company::truncate();

        //fetching data from url
          $json_data = Curl::to('http://api.worldbank.org/v2/datacatalog?format=json')->get();
          //decode to array objects
          

          $data = json_decode($json_data);
          $cataloges=$data->datacatalog;
          //loop through
          foreach($cataloges as $catalog){
           //return $metatypes=$catalog->id;
              
              $metatypes=$catalog->metatype;
                $name='';
                $acronym='';
                $description='';
                $url='';
                $type= '';
                $languagesupported='';
                $periodicity='';
                $economycoverage=''; 
                $granularity= '';
                $numberofeconomies=''; 
                $topics= '';
                $updatefrequency='';
                $updateschedule= '';
                $lastrevisiondate= '';
                $contactdetails= '';
                $accessoption= '';
                $bulkdownload= '';
                $cite='';
                $detailpageurl= '';
                $popularity= '';
                $coverage= '';
                $api= '';
                $apiaccessurl='';
                $apisourceid='';
              
              foreach($metatypes as $metatype){
              
              if($metatype->id==='name'){
                  $name=$metatype->value;
              }elseif($metatype->id==='acronym'){
                  $acronym=$metatype->value;
              }elseif($metatype->id==='description'){
                  $description=$metatype->value;
              }elseif($metatype->id==='url'){
                  $url=$metatype->value;
              }	
              elseif($metatype->id==='type'){
                $type=$metatype->value;
              }	
              elseif($metatype->id==='languagesupported'){
                $languagesupported=$metatype->value;
              }	
             elseif($metatype->id==='periodicity'){
                $periodicity=$metatype->value;
              }	
             elseif($metatype->id==='economycoverage'){
                $economycoverage=$metatype->value;
              }	
             elseif($metatype->id==='granularity'){
                $granularity=$metatype->value;
            }	
            elseif($metatype->id==='numberofeconomies'){
                $numberofeconomies=$metatype->value;
            }
            elseif($metatype->id==='topics'){
                $topics=$metatype->value;
            }	
            elseif($metatype->id==='updatefrequency'){
                $updatefrequency=$metatype->value;
            }	
            elseif($metatype->id==='updateschedule'){
                $updateschedule=$metatype->value;
            }	
            elseif($metatype->id==='lastrevisiondate'){
                $lastrevisiondate=$metatype->value;
            }	
            elseif($metatype->id==='contactdetails'){
                $contactdetails=$metatype->value;
            }	
            elseif($metatype->id==='accessoption'){
                $accessoption=$metatype->value;
            }	
            elseif($metatype->id==='bulkdownload'){
                $bulkdownload=$metatype->value;
            }	
            elseif($metatype->id==='cite'){
                $cite=$metatype->value;
            }	
            elseif($metatype->id==='detailpageurl'){
                $detailpageurl=$metatype->value;
            }	
             elseif($metatype->id==='popularity'){
                $popularity=$metatype->value;
            }
             elseif($metatype->id==='coverage'){
                $coverage=$metatype->value;
            }
             elseif($metatype->id==='api'){
                $api=$metatype->value;
            }elseif($metatype->id==='apiaccessurl'){
                $apiaccessurl=$metatype->value;
            }	
            elseif($metatype->id==='apisourceid'){
                $apisourceid=$metatype->value;
            }
              
          }
          $model = Company::create([
                      'name' => $name,
                      'acronym' => $acronym,
                      'description' => $description,
                      'url' => $url,
                      'type' => $type,
                      'languagesupported' => $languagesupported,
                      'periodicity' => $periodicity,
                      'economycoverage' => $economycoverage,
                      'granularity' => $granularity,
                      'numberofeconomies' => $numberofeconomies,
                      'topics' => $topics,
                      'updatefrequency' => $updatefrequency,
                      'updateschedule' => $updateschedule,
                      'lastrevisiondate' => $lastrevisiondate,
                      'contactdetails' => $contactdetails,
                      'accessoption' => $accessoption,
                      'bulkdownload' => $bulkdownload,
                      'cite' => $cite,
                      'detailpageurl' => $detailpageurl,
                      'popularity' => $popularity,
                      'coverage' => $coverage,
                      'api' => $api,
                      'apiaccessurl' => $apiaccessurl,
                      'apisourceid' => $apisourceid,
                  ]);
              
              
          }
       
           //   return("Data imported and saved Successfuly");
          
          return redirect()->route('home')->with('success', 'Data imported and Saved successfully  .');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
