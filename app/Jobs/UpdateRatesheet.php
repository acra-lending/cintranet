<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use League\Flysystem\Sftp\SftpAdapter;
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
    public $directory;
    

    public function __construct(Post $post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId, $directory)
    {
        $this->post = $post;
        $this->fileNameToStore = $fileNameToStore;
        $this->filesizeToStore = $filesizeToStore;
        $this->sftpFileName = $sftpFileName;
        $this->categoryId = $categoryId;
        $this->directory = $directory;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {      

        // $filesystem = new Filesystem(new SftpAdapter([
        //     // 'host' => config('filesystems.disks.sftp.host'),
        //     // 'username' => config('filesystems.disks.sftp.username'),
        //     // 'password' => config('filesystems.disks.sftp.password'),
        //     'host' => env('SFTP_HOST'),
         
        //     // Settings for basic authentication...
        //     'username' => env('SFTP_USERNAME'),
        //     'password' => env('SFTP_PASSWORD'),

        //     'port' => 22,
        //     'root' => '/var/www',
        //     'timeout' => 10,
        // ]));
          
        // $filesystem
        //     ->put(
        //         'acraweb/wp-content/uploads/'.$this->directory.$this->sftpFileName, 
        //         Storage::disk('public')->get('upload/'.$this->fileNameToStore)
        //         // 'public/upload/'.$this->fileNameToStore
        //     );  
        Storage::disk('sftp')->put(
            'acraweb/wp-content/uploads/'.$this->directory.$this->sftpFileName, 
            Storage::disk('public')->get('upload/'.$this->fileNameToStore)
        );

        //Create Upload Post
        $this->post->category_id = $this->categoryId;
        $this->post->filename = $this->fileNameToStore;
        $this->post->filesize = $this->filesizeToStore;
        $this->post->save();
    }
}