<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        return view('home');
    }

    public function index()
    {
        $articoli = [
            [
                "id" => 1,
                "titolo" => "Weekend a Parigi",
                "descrizione" => "Una guida rapida ai posti imperdibili della città luce."
            ],
            [
                "id" => 2,
                "titolo" => "Trekking in Dolomiti",
                "descrizione" => "I sentieri più belli per chi ama la montagna."
            ],
            [
                "id" => 3,
                "titolo" => "Sicilia in 5 giorni",
                "descrizione" => "Mare, cibo e borghi da non perdere."
            ],
        ];

        return view('articoli', ["all_articoli" => $articoli]);
    }

    public function show($id)
    {
        $articoli = [
            [
                "id" => 1,
                "titolo" => "Weekend a Parigi",
                "descrizione" => "Una guida rapida ai posti imperdibili della città luce.",
                "contenuto" => "Parigi regala musei, caffè e passeggiate sulla Senna."
            ],
            [
                "id" => 2,
                "titolo" => "Trekking in Dolomiti",
                "descrizione" => "I sentieri più belli per chi ama la montagna.",
                "contenuto" => "Le Dolomiti offrono panorami unici e sentieri spettacolari."
            ],
            [
                "id" => 3,
                "titolo" => "Sicilia in 5 giorni",
                "descrizione" => "Mare, cibo e borghi da non perdere.",
                "contenuto" => "Da Palermo a Taormina: cultura, spiagge e street food."
            ],
        ];

        foreach ($articoli as $articolo) {
            if ($articolo['id'] == $id) {
                return view('articolo-dettaglio', ["articolo" => $articolo]);
            }
        }
    }
}