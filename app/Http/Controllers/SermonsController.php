<?php

namespace App\Http\Controllers;

use App\Xml;
use App\Sermon;
use Illuminate\Http\Request;

class SermonsController extends Controller
{
    public function store(Xml $xml)
    {
        $xml->setXml('https://elevationchurch.org/feed/app-sermons');
        $xml_form = $xml->getXml();

        foreach($xml_form->item as $row) {
        	$sermon = new Sermon();
        	$sermon->title = $row->title;
        	$sermon->youtubeId = $row->youtubeID;
        	$sermon->description = $row->description;
            $sermon->image = $row->image;
            $sermon->views = $row->views;

        	$sermon->save();
        }

        return redirect('/success');
    }

    public function json()
    {
        $sermons = Sermon::all();

        return $sermons;
    }

    public function show()
    {
        $url = 'http://142.93.1.82/api/sermons/list';

        $json = file_get_contents($url);
        $obj = json_decode($json);
        
        return view('elevation.show', compact('obj'));
    }   
}
