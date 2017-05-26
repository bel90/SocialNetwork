<?php

namespace App\Http\Controllers;

use App\Meme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

class MemeController extends Controller
{
    
    /**
    * Create a new Meme
    **/
    public function store(Request $request) 
    {
    	//Während dem Aufruf wird "no such table" Fehler geworfen
    	$meme = new Meme;
    	
    	$meme->title = $request->title;
    	
    	// TODO
    	// Beschreibung, Bild usw speichern!
    	
    	//TODO Namen so ändern, dass User nicht schon vorhandene Bilder überschreibt!
    	//ID mit einbauen!
    	
    	//Hier gibt es noch grobe Fehler - sowieso fehlt noch Verknüpfung mit Datenbank
    	//-> Speichert aktuell den Namen des Bildes in einer Datei Names Text aber nicht das Bild
    	Storage::put('memes/test', $request->picture);
    	
    	$meme->save();
    	
    	//Temporär - Später sollte view von neu erstelltem Meme sichtbar sein.
    	return view('welcome');
    }
}
