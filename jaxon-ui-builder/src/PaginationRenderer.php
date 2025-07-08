<?php

namespace Lagdo\UiBuilder\Jaxon;

use Jaxon\App\Pagination\Page;
use Jaxon\App\Pagination\RendererInterface;
use Lagdo\UiBuilder\BuilderInterface;

class PaginationRenderer implements RendererInterface
{
    /**
     * The constructor
     *
     * @param BuilderInterface $html
     */
    public function __construct(private BuilderInterface $html)
    {}

    /**
     * @inheritDoc
     */
    public function render(array $aPages, Page $xPrevPage, Page $xNextPage): string
    {
        return $this->html->build(
            $this->html->pagination(
                $this->html->paginationItem(['role' => 'link'])
                    ->addHtml($xPrevPage->sText)->number($xPrevPage->nNumber),
                $this->html->each($aPages, fn($xPage) =>
                    $this->html->paginationItem(['role' => 'link'])
                        ->addHtml($xPage->sText)->number($xPage->nNumber)
                        ->active($xPage->sType === 'current')
                        ->enabled($xPage->sType !== 'disabled')
                ),
                $this->html->paginationItem(['role' => 'link'])
                    ->addHtml($xNextPage->sText)->number($xNextPage->nNumber)
            )
        );
    }
}
