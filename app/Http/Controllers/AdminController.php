<?php

namespace App\Http\Controllers;

use App\Labs;
use XMLWriter;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $labs = Labs::all();
        $xml = new XMLWriter();
        $xml->openMemory();
        $xml->setIndent(true);
        // Start a new document
        $xml->startDocument();
        // Start an element for data
        $xml->startElement('markers');
        // Transforming data
        foreach ($labs as $lab) {
            $xml->startElement('marker');
            $xml->writeAttribute('id', $lab->id);
            $xml->writeAttribute('name', $lab->title);
            $xml->writeAttribute('address', $lab->address);
            $xml->writeAttribute('lat', $lab->latitude);
            $xml->writeAttribute('lng', $lab->longitude);
            $xml->writeAttribute('type', $lab->type);
            $xml->endElement();
        }
        // ending xml process
        $xml->endElement();
        $xml->endDocument();

        // output
        $labLocations = $xml->outputMemory();
        // resets xml
        $xml = null;
        Storage::put('lab-locations.xml', $labLocations);

        return view('admin', ['labLocations' => $labLocations]);
    }
}
