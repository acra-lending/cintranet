<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
// use League\Flysystem\Filesystem; 
// use League\Flysystem\Sftp\V3\SftpAdapter;
use App\Post;
use Carbon\Carbon;
use App\Jobs\UpdateRatesheet;
use Gate;

class WebRatesheetUploadController extends Controller
{
    public function index()
    {
        // $list = Storage::disk('sftp')->files('html');
        // dd($list);
        return view ('pages.mediamanager.uploadratesheets');
    }

    public function store_nonprime(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $carbonDate = Carbon::parse($request->datetime)->addHours(8);
        $start = Carbon::now();
        $end = $carbonDate;
        $differenceInMinutes = $end->diffInMinutes($start);

        $num = 2;
        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filenameWithExt = $file->getClientOriginalName();  
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filesize = $file->getSize();
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            $fileNameToStore = 'Non-Prime Wholesale Rate Sheet '.date('m-d-Y').'.'.$extension;
                
            //Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = 'Non-Prime Wholesale Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }   
            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = 'acra-ws-ratematrix-1stTDs.pdf';
            $categoryId = 'wsNonprimeAE';
            $directory = '2020/RateSheets/Wholesale/';

            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId, $directory)->delay(now()->addMinutes($differenceInMinutes));

    
            return response()->json(['success' => 'Uploaded Successfully']);

        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_dscr(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $carbonDate = Carbon::parse($request->datetime)->addHours(8);
        $start = Carbon::now();
        $end = $carbonDate;
        $differenceInMinutes = $end->diffInMinutes($start);

        $num = 2;
        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            // Get filename with the extension
            $filenameWithExt = $file->getClientOriginalName();          
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);  
            // Get Just ext
            $extension = $file->getClientOriginalExtension();           
            // Get filesize
            $filesize = $file->getSize();                               
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            $fileNameToStore = 'Business Purpose Wholesale Rate Sheet '.date('m-d-Y').'.'.$extension;

            
            //Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = 'Business Purpose Wholesale Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }
            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = 'acra-ws-ratematrix-dscr.pdf';
            $categoryId = 'wsDscrAE';
            $directory = '2020/RateSheets/Wholesale/';

            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId, $directory)->delay(now()->addMinutes($differenceInMinutes));
    
            
            return response()->json(['success' => 'Uploaded Successfully']);
        
        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_nonocp(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $carbonDate = Carbon::parse($request->datetime)->addHours(8);
        $start = Carbon::now();
        $end = $carbonDate;
        $differenceInMinutes = $end->diffInMinutes($start);

        $num = 2;
        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            // Get filename with the extension
            $filenameWithExt = $file->getClientOriginalName();          
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);  
            // Get Just ext
            $extension = $file->getClientOriginalExtension();           
            // Get filesize
            $filesize = $file->getSize();                               
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            $fileNameToStore = 'LLPA Price Sheet NOO '.date('m-d-Y').'.'.$extension;

            
            //Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = 'LLPA Price Sheet NOO '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }
            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = 'acra-ws-ratematrix-nonocp.pdf';
            $categoryId = 'nonOwnerOccu';
            $directory = '2020/RateSheets/Wholesale/';

            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId, $directory)->delay(now()->addMinutes($differenceInMinutes));
    
            
            return response()->json(['success' => 'Uploaded Successfully']);
        
        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_3mbs(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $carbonDate = Carbon::parse($request->datetime)->addHours(8);
        $start = Carbon::now();
        $end = $carbonDate;
        $differenceInMinutes = $end->diffInMinutes($start);

        $num = 2;
        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filesize = $file->getSize();
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            // Filename to store
            $fileNameToStore = '3MBS Wholesale Rate Sheet '.date('m-d-Y').'.'.$extension;

            //Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = '3MBS Wholesale Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }
            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = 'acra-ws-ratematrix-3mbs.pdf';
            $categoryId = 'ws3mbsAE';
            $directory = '2020/RateSheets/Wholesale/';

            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId, $directory)->delay(now()->addMinutes($differenceInMinutes));

    
            return response()->json(['success' => 'Uploaded Successfully']);
        
        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_itin(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $carbonDate = Carbon::parse($request->datetime)->addHours(8);
        $start = Carbon::now();
        $end = $carbonDate;
        $differenceInMinutes = $end->diffInMinutes($start);

        $num = 2;
        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filesize = $file->getSize();
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            $fileNameToStore = 'ITIN Wholesale Rate Sheet '.date('m-d-Y').'.'.$extension;
                
            //Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = 'ITIN Wholesale Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }

            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = 'acra-ws-ratematrix-itin.pdf';
            $categoryId = 'wsItinAE';
            $directory = '2020/RateSheets/Wholesale/';

            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId, $directory)->delay(now()->addMinutes($differenceInMinutes));
            
    
            return response()->json(['success' => 'Uploaded Successfully']);
        
        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_jumboprime(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);
        
        $carbonDate = Carbon::parse($request->datetime)->addHours(8);
        $start = Carbon::now();
        $end = $carbonDate;
        $differenceInMinutes = $end->diffInMinutes($start);

        $num = 2;
        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filesize = $file->getSize();
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            $fileNameToStore = 'Jumbo Prime Wholesale Rate Sheet '.date('m-d-Y').'.'.$extension;
                
            //Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = 'Jumbo Prime Wholesale Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }

            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = 'acra-ws-ratematrix-jumboprime.pdf';
            $categoryId = 'wsJumboPrimeAE';
            $directory = '2020/RateSheets/Wholesale/';

            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId, $directory)->delay(now()->addMinutes($differenceInMinutes));

    
            return response()->json(['success' => 'Uploaded Successfully']);
        
        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_sbmf(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $num = 2;
        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filesize = $file->getSize();
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            // $fileNameToStore = 'test.'.$extension;
            $fileNameToStore = 'Small Balance Multifamily Rate Sheet '.date('m-d-Y').'.'.$extension;
                
            // Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = 'Small Balance Multifamily Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }


            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = 'acra-ff-ratematrix-sbmf.pdf';
            $categoryId = 'smallBalanceMultifamily';
            $directory = '2022/RateSheets/FF/';


            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId, $directory)->delay(now()->addMinutes($differenceInMinutes));
    
            return response()->json(['success' => 'Uploaded Successfully']);
        
        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_ild_main(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $carbonDate = Carbon::parse($request->datetime)->addHours(8);
        $start = Carbon::now();
        $end = $carbonDate;
        $differenceInMinutes = $end->diffInMinutes($start);

        $num = 2;
        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filesize = $file->getSize();
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            // $fileNameToStore = 'test.'.$extension;
            $fileNameToStore = 'Investor Loan Main Rate Sheet '.date('m-d-Y').'.'.$extension;
                
            // Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = 'Investor Loan Main Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }


            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = 'acra-ild-main.pdf';
            $categoryId = 'ffMain';
            $directory = '2022/RateSheets/FF/';

            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId, $directory)->delay(now()->addMinutes($differenceInMinutes));
                
            return response()->json(['success' => 'Uploaded Successfully']);
            
        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_ild_dscr(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $carbonDate = Carbon::parse($request->datetime)->addHours(8);
        $start = Carbon::now();
        $end = $carbonDate;
        $differenceInMinutes = $end->diffInMinutes($start);

        $num = 2;
        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filesize = $file->getSize();
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            // $fileNameToStore = 'test.'.$extension;
            $fileNameToStore = 'DSCR Investor Loan Rate Sheet '.date('m-d-Y').'.'.$extension;
                
            // Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = 'DSCR Investor Loan Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }


            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = 'acra-ild-dscr.pdf';
            $categoryId = 'ffDscr';
            $directory = '2022/RateSheets/FF/';

            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId, $directory)->delay(now()->addMinutes($differenceInMinutes));
                
            return response()->json(['success' => 'Uploaded Successfully']);

        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_ild_mfBridge(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $carbonDate = Carbon::parse($request->datetime)->addHours(8);
        $start = Carbon::now();
        $end = $carbonDate;
        $differenceInMinutes = $end->diffInMinutes($start);

        $num = 2;
        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filesize = $file->getSize();
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            // $fileNameToStore = 'test.'.$extension;
            $fileNameToStore = 'MF Bridge Investor Loan Rate Sheet '.date('m-d-Y').'.'.$extension;
                
            // Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = 'MF Bridge Investor Loan Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }


            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = 'acra-ild-mf-bridge.pdf';
            $categoryId = 'ffMultiFamily';
            $directory = '2022/RateSheets/FF/';

            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId, $directory)->delay(now()->addMinutes($differenceInMinutes));
                
            return response()->json(['success' => 'Uploaded Successfully']);

        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_ild_mfLongTerm(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $carbonDate = Carbon::parse($request->datetime)->addHours(8);
        $start = Carbon::now();
        $end = $carbonDate;
        $differenceInMinutes = $end->diffInMinutes($start);

        $num = 2;
        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filesize = $file->getSize();
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            // $fileNameToStore = 'test.'.$extension;
            $fileNameToStore = 'MF Long Term Investor Loan Rate Sheet '.date('m-d-Y').'.'.$extension;
                
            // Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = 'MF Long Term Investor Loan Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }


            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = 'acra-ild-mf-longterm.pdf';
            $categoryId = 'ffMultiFamilyLongTerm';
            $directory = '2022/RateSheets/FF/';

            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId, $directory)->delay(now()->addMinutes($differenceInMinutes));
                
            return response()->json(['success' => 'Uploaded Successfully']);

        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_ild_sfr(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $carbonDate = Carbon::parse($request->datetime)->addHours(8);
        $start = Carbon::now();
        $end = $carbonDate;
        $differenceInMinutes = $end->diffInMinutes($start);

        $num = 2;
        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filesize = $file->getSize();
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            // $fileNameToStore = 'test.'.$extension;
            $fileNameToStore = 'SFR Bridge Investor Loan Rate Sheet '.date('m-d-Y').'.'.$extension;
                
            // Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = 'SFR Bridge Investor Loan Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }


            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = 'acra-ild-sfr.pdf';
            $categoryId = 'ffSingleFamily';
            $directory = '2022/RateSheets/FF/';

            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId, $directory)->delay(now()->addMinutes($differenceInMinutes));
                
            return response()->json(['success' => 'Uploaded Successfully']);

        } else {
            return 'Error. Upload failed';
        }
    }
}
