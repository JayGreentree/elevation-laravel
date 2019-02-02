<?php

namespace App\Http\Controllers;

use App\Sermon;
use Illuminate\Http\Request;

class SermonsController extends Controller
{
    public function index($title = 'Sermons')
    {
        $url = 'http://142.93.1.82/api/sermons/list';

        $json = file_get_contents($url);
        $obj = json_decode($json, true);

        $page = ! isset($_GET['page']) ? 1 : $_GET['page'];
        $limit = 18;
        $offset = ($page - 1) * $limit;
        $totalItems = count($obj);
        $totalPages = ceil($totalItems / $limit);
        $sermons = array_splice($obj, $offset, $limit);

        return view('sermon.index', compact(
            'obj',
            'title',
            'page',
            'limit',
            'totalPages',
            'sermons'
        ));
    }

    public function show()
    {
        $sermons = Sermon::all();

        return $sermons;
    }
}
