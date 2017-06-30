<?php

namespace SvenJuergens\NewsSubheader\Domain\Model;

/**
 * News
 */
class News extends \GeorgRinger\News\Domain\Model\News
{
    /**
     * @var string
     */
    protected $subHeader;

    /**
     * @return string
     */
    public function getSubHeader(): string
    {
        return $this->subHeader;
    }

    /**
     * @param string $subHeader
     * @return void
     */
    public function setSubHeader(string $subHeader)
    {
        $this->subHeader = $subHeader;
    }

}
