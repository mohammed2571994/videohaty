<?php

namespace Database\Seeders;

use App\Models\Convertedvideo;
use App\Models\Video;
use Illuminate\Database\Seeder;

class ConvertedVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videos = Video::all();
        foreach ($videos as $video) {
            Convertedvideo::create([
                'video_id' => $video->id,
                'mp4_Format_240' => '240p-video.mp4',
                'mp4_Format_360' => '360p-video.mp4',
                'mp4_Format_480' => '480p-video.mp4',
                'mp4_Format_720' => '720p-video.mp4',
                'mp4_Format_1080' => '1080p-video.mp4',
                'webm_Format_240'=>'No Video',
                'webm_Format_360'=>'No Video',
                'webm_Format_480'=>'No Video',
                'webm_Format_720'=>'No Video',
                'webm_Format_1080'=>'No Video',
            ]);
        }
    }
}
