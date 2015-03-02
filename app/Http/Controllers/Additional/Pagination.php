<?php namespace App\Http\Controllers;

use Illuminate\Pagination\BootstrapThreePresenter;

class Pagination extends BootstrapThreePresenter
{
    /**
     * Convert the URL window into Zurb Foundation HTML.
     *
     * @return string
     */
    public function render()
    {
        if( ! $this->hasPages())
            return '';

        return sprintf(
            '<ul class="pages" aria-label="Pagination">%s %s %s</ul>',
            $this->getPreviousButton(),
            $this->getLinks(),
            $this->getNextButton()
        );
    }

    /**
     * Get HTML wrapper for disabled text.
     *
     * @param  string  $text
     * @return string
     */
    protected function getDisabledTextWrapper($text)
    {
        return '<li class="unavailable" aria-disabled="true"><a href="javascript:void(0)">'.$text.'</a></li>';
    }

    protected function getPreviousButton($text = '&laquo;')
    {
        $url = $this->paginator->url(
            $this->paginator->currentPage() - 1
        );
        return '<li class="pages_l"><a href="'.$url.'">&nbsp;&nbsp;&nbsp;</a></li>';
    }
    protected function getNextButton($text = '&raquo;')
    {
        $url = $this->paginator->url(
            $this->paginator->currentPage() + 1
        );
        return '<li class="pages_r"><a href="'.$url.'">&nbsp;&nbsp;&nbsp;</a></li>';
    }

    /**
     * Get HTML wrapper for active text.
     *
     * @param  string  $text
     * @return string
     */
    protected function getActivePageWrapper($text)
    {
        return '<li class="pages_activ"><a href="javascript:void(0)">'.$text.'</a></li>';
    }

    /**
     * Get a pagination "dot" element.
     *
     * @return string
     */
    protected function getDots()
    {
        return $this->getDisabledTextWrapper('&hellip;');
    }
}