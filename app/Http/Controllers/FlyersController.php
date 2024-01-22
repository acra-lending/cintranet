<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use App\Post;

class FlyersController extends Controller
{
    public function index()
    {
        $seconds = 86400;
        //dd($seconds);

        //About CSC Flyers
        $aboutCsc = Cache::remember('aboutCsc', $seconds, function() {
            return Post::whereRaw("find_in_set('aboutCsc', category_id)")
            ->sortable('filename')
            ->get();
        });
        //dd($aboutCsc);
        

        //Automation Flyers
        $automation = Cache::remember('automation', $seconds, function() {
            return Post::whereRaw("find_in_set('automation', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Brokers Flyers
        $brokerFlyers = Cache::remember('brokerFlyers', $seconds, function() {
            return Post::whereRaw("find_in_set('flyersForBrokers', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Correspondent Flyers
        $corrFlyers = Cache::remember('corrFlyers', $seconds, function() {
            return Post::whereRaw("find_in_set('flyersForBrokers', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //CSC Program Flyers
        $cscPrograms = Cache::remember('cscPrograms', $seconds, function() {
            return Post::whereRaw("find_in_set('cscPrograms', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Social Flyers
        $social = Cache::remember('social', $seconds, function() {
            return Post::whereRaw("find_in_set('social', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Niche Flyers
        $aeFlyers = Cache::remember('aeFlyers', $seconds, function() {
            return Post::whereRaw("find_in_set('AEFlyers', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Retail Flyers
        $retail = Cache::remember('retail', $seconds, function() {
            return Post::whereRaw("find_in_set('retailFlyers', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Retail Flyers
        $standards = Cache::remember('standards', $seconds, function() {
            return Post::whereRaw("find_in_set('standards', category_id)")
            ->sortable('filename')
            ->get();
        });
        //dd($standards);
        

        //Vertical Integration Flyers
        $vert = Cache::remember('vert', $seconds, function() {
            return Post::whereRaw("find_in_set('vertFlyers', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Sales Tools Video
        $salesVideos = Cache::remember('salesVideos', $seconds, function() {
            return Post::whereRaw("find_in_set('salesVideos',category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Small Balance Multifamily
        // $sbmfFlyers = Cache::remember('sbmfFlyers', $seconds, function() {
            // return Post::whereRaw("find_in_set('sbmfFlyers', category_id)")
            // ->sortable('filename')
            // ->get();
        // });

        $oneScorenoscore = Cache::remember('oneScorenoscore', $seconds, function() {
            return Post::whereRaw("find_in_set('onescorenoscore', category_id)")
            ->sortable('filename')
            ->get();
        });
        
        $selfEmp = Cache::remember('selfEmp', $seconds, function() {
            return Post::whereRaw("find_in_set('selfemp', category_id)")
            ->sortable('filename')
            ->get();
        });

        $aFlyers = Cache::remember('aFlyers', $seconds, function() {
            return Post::whereRaw("find_in_set('aflyers', category_id)")
            ->sortable('filename')
            ->get();
        });
        
        //Marketing Materials
        $marketingMaterial = Cache::remember('marketingMaterial', $seconds, function() {
            return Post::whereRaw("find_in_set('marketingMaterial', category_id)")
            ->sortable('filename')
            ->get();
        });

        //Other
        $otherFlyers = Cache::remember('otherFlyers', $seconds, function() {
            $thirty_days_ago = date('Y-m-d', strtotime("-31 days"));
            return Post::whereRaw("find_in_set('otherFlyers', category_id)")
            ->where('created_at', ">=" , $thirty_days_ago)
            ->sortable('filename')
            ->get();
        });
        //dd($otherFlyers);
    

        $only1099 = Cache::remember('only1099', $seconds, function() {
            return Post::whereRaw("find_in_set('only1099', category_id)")
            ->sortable('filename')
            ->get();
        });
        //dd($only1099);

        $bankStmt = Cache::remember('bankStmt', $seconds, function() {
            return Post::whereRaw("find_in_set('bankstmt', category_id)")
            ->sortable('filename')
            ->get();
        });

        $allPrgms = Cache::remember('allPrgms', $seconds, function() {
            return Post::whereRaw("find_in_set('allprgms', category_id)")
            ->sortable('filename')
            ->get();
        });

        $aTr = Cache::remember('aTr', $seconds, function() {
            return Post::whereRaw("find_in_set('atr', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        $busiPrps = Cache::remember('busiPrps', $seconds, function() {
            return Post::whereRaw("find_in_set('busiprps', category_id)")
            ->sortable('filename')
            ->get();
        });

        $expandGuid = Cache::remember('expandGuid', $seconds, function() {
            return Post::whereRaw("find_in_set('expandguid', category_id)")
            ->sortable('filename')
            ->get();
        });

        $forinNat = Cache::remember('forinNat', $seconds, function() {
            return Post::whereRaw("find_in_set('forinnat', category_id)")
            ->sortable('filename')
            ->get();
        });

        $invesmSol = Cache::remember('invesmSol', $seconds, function() {
            return Post::whereRaw("find_in_set('invessol', category_id)")
            ->sortable('filename')
            ->get();
        });

         $bridgeFly = Cache::remember('bridgeFly', $seconds, function() {
            return Post::whereRaw("find_in_set('bridgefly', category_id)")
           ->sortable('filename')
            ->get();
         });

         $cashOut = Cache::remember('cashOut', $seconds, function() {
             return Post::whereRaw("find_in_set('cashout', category_id)")
             ->sortable('filename')
             ->get();
         });

        $condJum = Cache::remember('condJum', $seconds, function() {
           return Post::whereRaw("find_in_set('condjum', category_id)")
            ->sortable('filename')
             ->get();
         });

         $dscrFly = Cache::remember('dscrFly', $seconds, function() {
            return Post::whereRaw("find_in_set('dscrfly', category_id)")
             ->sortable('filename')
             ->get();
         });

         $ioFly = Cache::remember('ioFly', $seconds, function() {
             return Post::whereRaw("find_in_set('iofly', category_id)")
             ->sortable('filename')
             ->get();
         });

         $itinFly = Cache::remember('itinFly', $seconds, function() {
             return Post::whereRaw("find_in_set('itinfly', category_id)")
             ->sortable('filename')
            ->get();
        });

         $nqmNiche = Cache::remember('nqmNiche', $seconds, function() {
             return Post::whereRaw("find_in_set('nqmniche', category_id)")
             ->sortable('filename')
             ->get();
         });

         $plPro = Cache::remember('plPro', $seconds, function() {
             return Post::whereRaw("find_in_set('plpro', category_id)")
             ->sortable('filename')
            ->get();
         });

         $sbmfFly = Cache::remember('sbmfFly', $seconds, function() {
             return Post::whereRaw("find_in_set('sbmffly', category_id)")
             ->sortable('filename')
             ->get();
         });

         $uniqPro = Cache::remember('uniqPro', $seconds, function() {
             return Post::whereRaw("find_in_set('uniqpro', category_id)")
            ->sortable('filename')
           ->get();
         });

         $wvoeFly = Cache::remember('wvoeFly', $seconds, function() {
             return Post::whereRaw("find_in_set('wvoefly', category_id)")
             ->sortable('filename')
             ->get();
         });

         $oneScore = Cache::remember('oneScore', $seconds, function() {
            return Post::whereRaw("find_in_set('onescore', category_id)")
            ->sortable('filename')
            ->get();
        });
        
        $selfEmpsm = Cache::remember('selfEmpsm', $seconds, function() {
            return Post::whereRaw("find_in_set('selfempsm', category_id)")
            ->sortable('filename')
            ->get();
        });

        $bankStmtsm = Cache::remember('bankStmtsm', $seconds, function() {
            return Post::whereRaw("find_in_set('bankstmtsm', category_id)")
            ->sortable('filename')
            ->get();
        });

        $atrSm = Cache::remember('atrSm', $seconds, function() {
            return Post::whereRaw("find_in_set('atrsm', category_id)")
            ->sortable('filename')
            ->get();
        });

        $busiPur = Cache::remember('busiPur', $seconds, function() {
            return Post::whereRaw("find_in_set('busipur', category_id)")
            ->sortable('filename')
            ->get();
        });

        $expndGuidsm = Cache::remember('expndGuidsm', $seconds, function() {
            return Post::whereRaw("find_in_set('expndguidsm', category_id)")
            ->sortable('filename')
            ->get();
        });

        $forNatsm = Cache::remember('forNatsm', $seconds, function() {
            return Post::whereRaw("find_in_set('fornatsm', category_id)")
            ->sortable('filename')
            ->get();
        });

        $invSolsm = Cache::remember('invSolsm', $seconds, function() {
            return Post::whereRaw("find_in_set('invsolsm', category_id)")
            ->sortable('filename')
            ->get();
        });

        $dscrSm = Cache::remember('dscrSm', $seconds, function() {
            return Post::whereRaw("find_in_set('dscrsm', category_id)")
            ->sortable('filename')
            ->get();
        });

        $itinSm = Cache::remember('itinSm', $seconds, function() {
            return Post::whereRaw("find_in_set('itinsm', category_id)")
            ->sortable('filename')
            ->get();
        });
        
        $bridgeSm = Cache::remember('bridgeSm', $seconds, function() {
            return Post::whereRaw("find_in_set('bridgesm', category_id)")
            ->sortable('filename')
            ->get();
        });

        $uniqProsm = Cache::remember('uniqProsm', $seconds, function() {
            return Post::whereRaw("find_in_set('uniqprosm', category_id)")
            ->sortable('filename')
            ->get();
        });

        $ioSm = Cache::remember('ioSm', $seconds, function() {
            return Post::whereRaw("find_in_set('iosm', category_id)")
            ->sortable('filename')
            ->get();
        });

        $condJumsm = Cache::remember('condJumsm', $seconds, function() {
            return Post::whereRaw("find_in_set('condjumsm', category_id)")
            ->sortable('filename')
            ->get();
        });

        $nqmNichesm = Cache::remember('nqmNichesm', $seconds, function() {
            return Post::whereRaw("find_in_set('nqmnichesm', category_id)")
            ->sortable('filename')
            ->get();
        });

        $smbfSm = Cache::remember('smbfSm', $seconds, function() {
            return Post::whereRaw("find_in_set('smbfsm', category_id)")
            ->sortable('filename')
            ->get();
        });


        $brokerSm = Cache::remember('brokerSm', $seconds, function() {
            return Post::whereRaw("find_in_set('brokersm', category_id)")
            ->sortable('filename')
            ->get();
        });

        $funDeal = Cache::remember('funDeal', $seconds, function() {
            return Post::whereRaw("find_in_set('fundeal', category_id)")
            ->sortable('filename')
            ->get();
        });

        $specialS = Cache::remember('specialS', $seconds, function() {
            return Post::whereRaw("find_in_set('specials', category_id)")
            ->sortable('filename')
            ->get();
        });

        $otherS = Cache::remember('otherS', $seconds, function() {
            return Post::whereRaw("find_in_set('others', category_id)")
            ->sortable('filename')
            ->get();
        });

        $rateUpdate = Cache::remember('rateUpdate', $seconds, function() {
            return Post::whereRaw("find_in_set('rateupdate', category_id)")
            ->sortable('filename')
            ->get();
        });
        
        return view('pages.sales.flyers_new')
        ->with([
            'aboutCsc'      => $aboutCsc,
            'automation'    => $automation,
            'brokerFlyers'  => $brokerFlyers,
            'corrFlyers'    => $corrFlyers,
            'cscPrograms'   => $cscPrograms,
            'social'        => $social,
            'aeFlyers'      => $aeFlyers,
            'retail'        => $retail,
            'standards'     => $standards,
            'vert'          => $vert,
            'salesVideos'   => $salesVideos,
            'aFlyers'       => $aFlyers,
            'oneScorenoscore'       => $oneScorenoscore,
            'selfEmp'       => $selfEmp,
            'marketingMaterial' => $marketingMaterial,
            'otherFlyers' => $otherFlyers,
            'only1099'    => $only1099,
            'bankStmt'    => $bankStmt,
            'allPrgms'    => $allPrgms,
            'aTr'         => $aTr,
            'busiPrps'    => $busiPrps,
            'expandGuid'  => $expandGuid,
            'forinNat'    => $forinNat,
            'invesmSol'   => $invesmSol,
            'bridgeFly'   => $bridgeFly,
            'cashOut'   => $cashOut,
             'condJum'   => $condJum,
             'dscrFly'   => $dscrFly,
             'ioFly'   => $ioFly,
             'itinFly'   => $itinFly,
             'nqmNiche'   => $nqmNiche,
             'plPro'   => $plPro,
             'sbmfFly'   => $sbmfFly,
             'uniqPro'   => $uniqPro,
             'wvoeFly'   => $wvoeFly,
             'oneScore'   => $oneScore,
             'selfEmpsm'   => $selfEmpsm,
             'bankStmtsm'   => $bankStmtsm,
             'atrSm'   => $atrSm,
             'busiPur'   => $busiPur,
             'expndGuidsm'   => $expndGuidsm,
             'forNatsm'   => $forNatsm,
             'invSolsm'   => $invSolsm,
             'dscrSm'   => $dscrSm,
             'itinSm'   => $itinSm,
             'bridgeSm'   => $bridgeSm,
             'uniqProsm'   => $uniqProsm,
             'ioSm'   => $ioSm,
             'condJumsm'   => $condJumsm,
             'nqmNichesm'   => $nqmNichesm,
             'smbfSm'   => $smbfSm,
             'brokerSm'   => $brokerSm,
             'funDeal'   => $funDeal,
             'specialS'   => $specialS,
             'otherS'   => $otherS,
             'rateUpdate'   => $rateUpdate,
            ]);
    }
    public function upload(Request $request)
    {   
        $num = 2;
        //Handle File Upload
        if($request->file('file')){
            
            foreach ($request->file('file') as $file){

                // Get filename with the extension
                $filenameWithExt = $file->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get Just ext
                $extension = $file->getClientOriginalExtension();
                // Get filesize
                $filesize = $file->getSize();
                $filesizeToStore = round($filesize * 0.0009765625, 2);
                // Filename to store
                $fileNameToStore = $filename.'.'.$extension;
                
                //Check if Filename exists
                while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                    $fileNameToStore = 'Other Flyers and Programs Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                    $num++;
                }
                // Upload
                $path = $file->storeAs('public/upload', $fileNameToStore);

                //Create Upload Post 
                $post = new Post;
                $post->category_id = 'otherFlyers';
                $post->filename = $fileNameToStore;
                $post->filesize = $filesizeToStore;
                $post->save();
                
                return back()->with('success', 'Uploaded Successfully');
                    
            }     
        }
    }
}
