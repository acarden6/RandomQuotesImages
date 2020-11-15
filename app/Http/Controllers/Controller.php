<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public static $quotes = array("https://xpn-games-00.s3.amazonaws.com/growth-mindset-quotes-albert-einstein.jpg",
        "https://xpn-games-00.s3.amazonaws.com/growth-mindset-quotes-theodore-roosevelt.jpg",
        "https://xpn-games-00.s3.amazonaws.com/growth-mindset-quotes-audrey-hepburn.jpg",
        "https://xpn-games-00.s3.amazonaws.com/growth-mindset-quotes-dale-carnegie.jpg",
        "https://xpn-games-00.s3.amazonaws.com/growth-mindset-quotes-jk-rowling.jpg",
        "https://xpn-games-00.s3.amazonaws.com/growth-mindset-quotes-mark-twain.jpg",
        "https://xpn-games-00.s3.amazonaws.com/growth-mindset-quotes-marva-collins.jpg",
        "https://xpn-games-00.s3.amazonaws.com/growth-mindset-quotes-michael-jordan.jpg",
        "https://xpn-games-00.s3.amazonaws.com/growth-mindset-quotes-niels-bohr.jpg",
        "https://xpn-games-00.s3.amazonaws.com/growth-mindset-quotes-pele.jpg",
        "https://xpn-games-00.s3.amazonaws.com/growth-mindset-quotes-ralph-waldo-emerson.jpg",
        "https://xpn-games-00.s3.amazonaws.com/growth-mindset-quotes-samuel-johnson.jpg",
        "https://xpn-games-00.s3.amazonaws.com/growth-mindset-quotes-shaquille-oneal.jpg",
        "https://xpn-games-00.s3.amazonaws.com/growth-mindset-quotes-tony-robbins.jpg",
        "https://xpn-games-00.s3.amazonaws.com/growth-mindset-quotes-lebron-james.jpg",
    );

    public function index()
    {
        // $idContainer = $_SERVER['SERVER_ADDR'];
        $data = [];
        $totalQuotes = (count(Controller::$quotes));
        $randomNumber = (rand(0, ($totalQuotes - 1)));
        $randomQuote = Controller::$quotes[$randomNumber];
        $data['quote'] = $randomQuote;
        $data['ip'] = $_SERVER['SERVER_ADDR'];
        return view('image.index')->with("data", $data);
    }
}
