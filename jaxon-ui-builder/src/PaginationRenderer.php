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
     * @param BuilderInterface $ui
     */
    public function __construct(private BuilderInterface $ui)
    {}

    /**
     * @inheritDoc
     */
    public function render(array $aPages, Page $xPrevPage, Page $xNextPage): string
    {
        return $this->ui->build(
            $this->ui->pagination(
                $this->ui->paginationItem(['role' => 'link'],
                    $this->ui->html($xPrevPage->sText))
                    ->number($xPrevPage->nNumber)
                    ->enabled($xPrevPage->sType !== 'disabled'),
                $this->ui->each($aPages, fn($xPage) =>
                    $this->ui->paginationItem(['role' => 'link'],
                        $this->ui->html($xPage->sText))
                        ->number($xPage->nNumber)
                        ->active($xPage->sType === 'current')
                        ->enabled($xPage->sType !== 'disabled')
                ),
                $this->ui->paginationItem(['role' => 'link'],
                    $this->ui->html($xNextPage->sText))
                    ->number($xNextPage->nNumber)
                    ->enabled($xNextPage->sType !== 'disabled')
            )
        );
    }
}
