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

        	$sermon->save();
        }

        return redirect('/success');
    }

    public function json()
    {
        $sermons = Sermon::all();

        return $sermons;
    }
}
