<?php
namespace Patter\Builder;

/**
 * 具体建造者
 * Class HtmlBuilder
 * @package Patter\Builder
 */
class HtmlBuilder extends Builder {

    private $filename;
    private $write;
    function makeTitle(string $title)
    {
        $this->filename = $title . ".html";

        echo "<body><head><title>{$title}</title></head><body>";
        echo "<h1>{$title}</h1>";

    }


    function makeString(string $string)
    {
        echo "<p>{$string}</p>";
    }

    function makeItems(array $item)
    {
        echo "<ul>";
        for ($i = 0 ; $i < count($item); $i++) {
            echo "<li>{$item[$i]}</li>";
        }
        echo "</ul>";
    }

    function close()
    {
        echo "</body></html>";
    }
    public function getResult() {
        return $this->filename;
    }
}