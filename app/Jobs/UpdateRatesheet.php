<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;


class UpdateRatesheet implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $post;
    public $fileNameToStore;
    public $filesizeToStore;
    public $sftpFileName;
    public $categoryId;
    

    public function __construct(Post $post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId)
    {
        $this->post = $post;
        $this->fileNameToStore = $fileNameToStore;
        $this->filesizeToStore = $filesizeToStore;
        $this->sftpFileName = $sftpFileName;
        $this->categoryId = $categoryId;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {        
        Storage::disk('sftp')
            ->put(
                'acraweb/wp-content/uploads/2020/RateSheets/Wholesale/'.$this->sftpFileName, 
                'public/upload/'.$this->fileNameToStore
            );  

        //Create Upload Post
        $this->post->category_id = $this->categoryId;
        $this->post->filename = $this->fileNameToStore;
        $this->post->filesize = $this->filesizeToStore;
        $this->post->save();
    }
}
