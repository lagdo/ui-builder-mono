<?php

namespace Lagdo\UiBuilder\Jaxon;

use Jaxon\App\Pagination\Page;
use Jaxon\App\Pagination\RendererInterface;

class PaginationRenderer implements RendererInterface
{
    /**
     * @inheritDoc
     */
    public function render(array $aPages, Page $xPrevPage, Page $xNextPage): string
    {
        $htmlBuilder = Builder::new();
        $htmlBuilder
            ->pagination()
                ->paginationItem($xPrevPage->nNumber, ['role' => 'link'])
                    ->addHtml($xPrevPage->sText)
                ->end();
        foreach ($aPages as $xPage) {
            $sPaginationItem = match($xPage->sType) {
                'current' => 'paginationActiveItem',
                'disabled' => 'paginationDisabledItem',
                default => 'paginationItem',
            };
            $htmlBuilder
                ->$sPaginationItem($xPage->nNumber, ['role' => 'link'])
                    ->addHtml($xPage->sText)
                ->end();
        }
        $htmlBuilder
                ->paginationItem($xNextPage->nNumber, ['role' => 'link'])
                    ->addHtml($xNextPage->sText)
                ->end()
            ->end();
        return $htmlBuilder->build();
    }
}
