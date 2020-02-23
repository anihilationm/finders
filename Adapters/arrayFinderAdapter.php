<?php

class arraySearchAdapter extends GoogleFinder
{
    /**
     * @var arraySearch
     */
    private $arraySearch;

    /**
     * arraySearchAdapter constructor.
     * @param arraySearch $arraySearch
     */
    public function __construct(arraySearch $arraySearch)
    {
        $this->arraySearch = $arraySearch;
    }

    /**
     * @param $word
     * @return array
     */
    public function search($word)
    {
        $isFound = $this->arraySearch->inArray($word);

        return [
            'result' => $isFound,
            'word' => $word,
            'time' => 0.001,
        ];
    }
}