<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client;

class ScrappingController extends Controller
{
    public function index()
    {
        $acehJaya = $this->getScrapping('https://aceh.tribunnews.com/tag/aceh-jaya');
        $calang = $this->getScrapping('https://aceh.tribunnews.com/tag/calang');

        $articles = array_merge($acehJaya, $calang);
        // return $articles;
        return view('programmer-junior', compact('articles'));
    }

    private function getScrapping($url)
    {
        $client = new Client();
        $response = $client->request('GET', $url);
        $html = $response->html();

        $crawler = new Crawler($html);

        $articleElements = $crawler->filter('ul .isi > li');


        $articles = [];
        foreach ($articleElements as $articleElement) {
            $title = $articleElement->filter('h3 a')->text();
            $articleURL = $articleElement->filter('h3 a')->attr('href');
            $content = $articleElement->filter('h4')->text();

            $articles[] = [
                'title' => $title,
                'url' => $articleURL,
                'content' => $content
            ];
        }

        return $articles;
    }
}
