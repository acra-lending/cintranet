<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use App\Mail\BrokerPortalRequests;
use App\Mail\BrokerPortalRequestsClient;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StrapiUsersImport;
use App\Imports\WPUsersImport;
use App\Imports\StrapiUsersImportCorr;
use App\Imports\WPUsersImportCorr;
use App\Post;
use App\Category;
use App\Classes\WS3mbsUpload;
use App\Classes\Corr3mbsUpload;
use App\Classes\WSDscrUpload;
use App\Classes\CorrDscrUpload;
use App\Classes\WSNonPrimeUpload;
use App\Classes\CorrNonPrimeUpload;
use App\Classes\WSJumboPrimeUpload;
use App\Classes\CorrJumboPrimeUpload;
use App\Classes\WSItinUpload;
use App\Classes\CorrItinUpload;
use App\Classes\CorrNonocuUpload;
use App\Classes\SmallBalanceMultiFamilyUpload;
use App\Classes\FFSingleFamilyUpload;
use App\Classes\FFMultiFamilyUpload;
use App\Classes\FFMultifamilyLongTermUpload;
use App\Classes\FFDscrUpload;
use App\Classes\FFMainUpload;
use App\Classes\FileUpload;
use App\Classes\BrokerLoginRequestParser;
use Gate;
use Session;
use URL;
use Redirect;
use Mail;

use PhpMimeMailParser;

class UploadController extends Controller
{
    public function index()
    {   
        return view('pages.mediamanager.upload');
    }
    
    public function upload(Request $request)
    {
        if(Gate::denies('manage-posts')){
            return redirect(route('home'));
        }
        
        $this->validate($request, [
            'category_id' => 'required',
            'file' => 'required',
            'file.*' => 'required|mimes:msg,doc,docx,ppt,pptx,xls,xlsx,pdf,jpg,jpeg,bmp,png,gif,mp4,eml|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $categoryId = $request->input('category_id');
        $categoryIdSingle = reset($categoryId);

        if($categoryIdSingle == 'ws3mbsAE') {

            $upload3mbs = new WS3mbsUpload;
            $upload3mbs->upload3mbs($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'wsDscrAE') {

            $uploadDscr = new WSDscrUpload;
            $uploadDscr->uploadDscr($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'wsNonprimeAE') {
                
            $uploadNonPrime = new WSNonPrimeUpload;
            $uploadNonPrime->uploadNonPrime($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'nonOwnerOccu') {
                
            $uploadNonOwner = new NonOwnerOccuUpload;
            $uploadNonOwner->uploadNonPrime($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'wsJumboPrimeAE') {

            $uploadJumboPrime = new WSJumboPrimeUpload;
            $uploadJumboPrime->uploadJumboPrime($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'wsItinAE') {

            $uploadItin = new WSItinUpload;
            $uploadItin->uploadItin($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'smallBalanceMultifamily') {

            $uploadSmallBalanceMultiFamily = new SmallBalanceMultiFamilyUpload;
            $uploadSmallBalanceMultiFamily->uploadSmallBalanceMultiFamily($request);

            return response()->json(['success' => 'Uploaded Successfully']);
            
        }

        elseif($categoryIdSingle == 'ffSingleFamily') {

            $uploadFfSingleFamily = new FFSingleFamilyUpload;
            $uploadFfSingleFamily->uploadFfSingleFamily($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'ffMultiFamily') {

            $uploadMultiFamily = new FFMultiFamilyUpload;
            $uploadMultiFamily->uploadFfMultiFamily($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'ffMultiFamilyLongTerm') {

            $uploadFfMultifamilyLongTerm = new FFMultifamilyLongTermUpload;
            $uploadFfMultifamilyLongTerm->uploadFfMultifamilyLongTerm($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'ffDscr') {

            $uploadFfDscr = new FFDscrUpload;
            $uploadFfDscr->uploadFfDscr($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'ffMain') {

            $uploadFfMain = new FFMainUpload;
            $uploadFfMain->uploadFfMain($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'corr3mbsPdf') {

            $uploadPdfCorr3mbs = new Corr3mbsUpload;
            $uploadPdfCorr3mbs->uploadCorr3mbs($request);

            return response()->json(['success' => 'Uploaded Successfully']);


        }

        elseif($categoryIdSingle == 'corrDscrPdf') {

            $uploadPdfCorrDscr = new CorrDscrUpload;
            $uploadPdfCorrDscr->uploadCorrDscr($request);

            return response()->json(['success' => 'Uploaded Successfully']);


        }

        elseif($categoryIdSingle == 'corrItinPdf') {

            $uploadPdfCorrItin = new CorrItinUpload;
            $uploadPdfCorrItin->uploadCorrItin($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'corrNonocuPdf') {

            $uploadPdfCorrNonocu = new CorrNonocuUpload;
            $uploadPdfCorrNonocu->uploadCorrNonocu($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'corrNonprimePdf') {
            
            $uploadPdfCorrNonPrime = new CorrNonPrimeUpload;
            $uploadPdfCorrNonPrime->uploadCorrNonPrime($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'corrJumboPrimePdf') {
                    
            $uploadPdfCorrJumboPrime = new CorrJumboPrimeUpload;
            $uploadPdfCorrJumboPrime->uploadCorrJumboPrime($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'corr3mbsXlsx') {
            
            $uploadXlsxCorr3mbs = new Corr3mbsUpload;
            $uploadXlsxCorr3mbs->uploadCorr3mbs($request);

            return response()->json(['success' => 'Uploaded Successfully']);
        }

        elseif($categoryIdSingle == 'corrDscrXlsx') {

            $uploadXlsxCorrDscr = new CorrDscrUpload;
            $uploadXlsxCorrDscr->uploadCorrDscr($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'corrItinXlsx') {

            $uploadXlsxCorrItin = new CorrItinUpload;
            $uploadXlsxCorrItin->uploadCorrItin($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }
        elseif($categoryIdSingle == 'corrNonocuXlsx') {

            $uploadcorrNonocuXlsx = new CorrNonocuUpload;
            $uploadcorrNonocuXlsx->uploadCorrNonocu($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'corrNonprimeXlsx') {
            
            $uploadXlsxCorrNonPrime = new CorrNonPrimeUpload;
            $uploadXlsxCorrNonPrime->uploadCorrNonPrime($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($categoryIdSingle == 'corrJumboPrimeXlsx') {
                  
            $uploadXlsxCorrJumboPrime = new CorrJumboPrimeUpload;
            $uploadXlsxCorrJumboPrime->uploadCorrJumboPrime($request);

            return response()->json(['success' => 'Uploaded Successfully']);

        }

        elseif($request->hasFile('file')){

        $fileUpload = new FileUpload;
        $fileUpload->uploadFile($request);
        Cache::flush();

        // return back()->with('success', 'Uploaded Successfully');

        return response()->json(['success' => 'Uploaded Successfully']);

        } else {
            return response()->json(['error' => 'File not found']);
        }
    }

    public function update(Request $request)
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'filename' => 'required|regex:/^[0-9a-zA-Z_\-. ()&]*$/',
            'category_id' => 'required'
        ]);

        //Create Upload Post
        $post = Post::findOrFail($request->file_id);
        $oldfilename = $post->filename;
        $newfilename = $request->input('filename');
        $oldcategory = $post->category_id;
        $newcategory = $request->input('category_id');

        if ($newfilename != $oldfilename){
            Storage::move('public/upload/'.$oldfilename, 'public/upload/'.$newfilename);
            $post->category_id = ($request->input('category_id'));
            $post->filename = $newfilename;
            $post->save();
            Cache::flush();
            
            return back()->with('success', 'File Updated');
        } else if ($newfilename == $oldfilename && $newcategory != $oldcategory) {
            $post->category_id = ($request->input('category_id'));
            $post->save();
            Cache::flush();

            return back()->with('success', 'File Updated');

        } else {
            return back()->with('error', 'File Name Already Exists');
        }
    }

    public function broker_login_request_parser(Request $request) 
    {

        if(Gate::denies('manage-posts')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'email2' => 'nullable|email',
            'file' => 'required',
            'file.*' => 'required|mimes:eml|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        if($request->hasFile('file')){

        $brokerLoginRequestParser = new BrokerLoginRequestParser;
        $brokerLoginRequestParser->brokerLoginRequestParser($request);

        if ($brokerLoginRequestParser->response->successful()) {
            return back()->with('success', 'Credentials created successfully');
        } else {
            $message = $brokerLoginRequestParser->response->json()['message'];
            return back()->with('error', $message);
        }
    
        } else {
            return 'file not found';
        }
    }

    public function priority_login_request_parser(Request $request) 
    {

        if(Gate::denies('manage-posts')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required',
            'file.*' => 'required|mimes:eml|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        if($request->hasFile('file')){

            $priorityLoginRequestParser = new BrokerLoginRequestParser;
            $priorityLoginRequestParser->priorityLoginRequestParser($request);

            if ($priorityLoginRequestParser->response->successful()) {
                return back()->with('success', 'Credentials created successfully');
            } else {
                $message = $priorityLoginRequestParser->response->json()['message'];
                return back()->with('error', $message);
            }

        } else {
            return 'file not found';
        }

        
    }

    public function broker_portal_login_excel(Request $request)
    {
        $emailArray = array('webupdates@acralending.com', 'brokerportalconfirmations@citadelservicing.com');

                
        if($request->filled('email2')){
            $emails = explode(',', $request->input('email2'));
            foreach($emails as $email)
            {
                array_push($emailArray, $email);
            }
        } 

        $tmpfname = request()->file('file')->getRealPath();
        rename($tmpfname, $tmpfname .= '.tmp');

        Excel::import(new StrapiUsersImport($request->except('file'), $emailArray), $tmpfname);

        // Excel::import(new WPUsersImport($request), request()->file('file'));

        return back()->with('success', 'Credentials created successfully');

    }

    public function correspondent_portal_login_excel(Request $request)
    {
        $emailArray = array('webupdates@acralending.com', 'brokerportalconfirmations@citadelservicing.com');
                
        if($request->filled('email2')){
            $emails = explode(',', $request->input('email2'));
            foreach($emails as $email)
            {
                array_push($emailArray, $email);
            }
        }
        
        $tmpfname = request()->file('file')->getRealPath();
        rename($tmpfname, $tmpfname .= '.tmp'); 

        Excel::import(new StrapiUsersImportCorr($request->except('file'), $emailArray), $tmpfname);
        
        // Excel::import(new WPUsersImportCorr($request), request()->file('file'));

        return back()->with('success', 'Credentials created successfully');
    }

    public function destroy($id)
    {
        if(Gate::denies('manage-posts')){
            return redirect(route('home'));
        }

        $post = Post::find($id);

        // Delete file
        Storage::delete('public/upload/'.$post->filename);

        $post->delete();
        Cache::flush();

        return back()->with('success', 'File Removed');
    }
}
