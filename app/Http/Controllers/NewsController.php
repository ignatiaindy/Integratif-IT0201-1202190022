<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rss;
use App\Models\News;

class NewsController extends Controller
{
    public function aggregrate($id_rss){
        $rss = Rss::findOrFail($id_rss);
        
        $xmlContent = file_get_contents($rss->url);
        $xml = simplexml_load_string($xmlContent);

        foreach($xml->channel->item as $item){
            $data= array(
                'title' => $item->title,
                'img_url' => $item->enclosure['url'],
                'description' => $item->description,
                'source_url' => $item->link,
                'rss_id' => $id_rss
            );
            News::Create($data);
        }

        $news= News::where('rss_id', $id_rss)->get();
        foreach($news as $n){
            print_r($n->title ."<br>".$n->description);
            print_r("<br><br><br><br>");    
        }
    }
}
