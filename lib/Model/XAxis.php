<?php

namespace CureDAO\Model;

class XAxis
{
    /**
     * @var Title
     */
    private $title;

    /**
     * @var array
     */
    private $categories;


    /**
     * @return Title|null
     */
    public function getTitle(): ?Title
    {
        return $this->title;
    }

    /**
     * @param Title|null $title
     *
     * @return XAxis
     */
    public function setTitle(?Title $title): XAxis
    {
        $this->title = $title;
        
        return $this;
    }

    /**
     * @return array|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * @param array|null $categories
     *
     * @return XAxis
     */
    public function setCategories(?array $categories): XAxis
    {
        $this->categories = $categories;
        
        return $this;
    }
}

