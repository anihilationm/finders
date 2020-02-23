<?php

class MySimpleFinderAdapter extends GoogleFinder
{
    /**
     * @var MySimpleFinder
     */
    private $mySimpleFinder;

    /**
     * MySimpleFinderAdapter constructor.
     * @param MySimpleFinder $mySimpleFinder
     */
    public function __construct(MySimpleFinder $mySimpleFinder)
    {
        $this->mySimpleFinder = $mySimpleFinder;
    }

    /**
     * @param $word
     * @return array
     */
    public function search($word)
    {
        $isFound = $this->mySimpleFinder->iAmLookingFor($word);
        $result = $isFound == 'i am find it!' ? true : false;

        return [
            'result' => $result,
            'word' => $word,
            'time' => 0.001,
        ];
    }
}