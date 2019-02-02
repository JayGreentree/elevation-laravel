<?php

namespace App\Http\Controllers;

use App\Xml;
use App\Sermon;
use Illuminate\Http\Request;

class XmlsControllers extends Controller
{
    public function index($title = 'Request Xml', Sermon $sermon)
    {
        return view('xml.index', compact('title', 'sermon'));
    }

    public function store(Xml $xml)
    {
        $xml->setXml('https://elevationchurch.org/feed/app-sermons');
        $xml_form = $xml->getXml();

        foreach ($xml_form->item as $row) {
            $sermon = new Sermon();
            $sermon->title = $row->title;
            $sermon->youtubeId = $row->youtubeID;
            $sermon->description = $row->description;
            $sermon->image = $row->posterImages;
            $sermon->views = $row->views;

            $sermon->save();
        }

        return redirect('/getxml/success');
    }

    public function show($title = 'Success')
    {
        return view('xml.success', compact('title'));
    }
}
