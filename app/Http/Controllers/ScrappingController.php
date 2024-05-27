<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
use voku\helper\HtmlDomParser;


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
        $dom = HtmlDomParser::file_get_html($url);

        $articles = [];
        foreach ($dom->find('li.ptb15') as $articleElement) {
            $url = $articleElement->find('a', 0)->href;
            $title = $articleElement->find('h3 a', 0)->plaintext;
            $description = $articleElement->find('h4', 0)->plaintext;
            $img = $articleElement->find('img', 0)->src;
            $date = $articleElement->find('.grey', 0)->plaintext;

            $articles[] = [
                'title' => $title,
                'url' => $url,
                'description' => $description,
                'date' => $date,
                'img' => $img,
            ];
        }

        return $articles;
    }
}
