<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SeriesController extends Controller
{
        public function index(Request $request)
    {
       return $response->query('id');

        $series = [
            'Punisher',
            'Lost',
            'Game of Thrones',
            'Breaking Bad'
        ];

        $html = '<ol>';
        foreach ($series as $serie)
        {
            $html .= "<li>$serie</li>";
        }

        $html .= '</ol>';

        // echo $html;
        return $html;
    }
}
