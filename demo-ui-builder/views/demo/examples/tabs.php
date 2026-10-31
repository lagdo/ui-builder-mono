<?php

$ui = builder();

$tabs = [
    'tab1' => [
        'title' => 'First tab',
        'content' => 'First tab content',
    ],
    'tab2' => [
        'title' => 'Second tab',
        'content' => 'This is the second tab content',
    ],
    'tab3' => [
        'title' => 'Third tab',
        'content' => 'What do we have in the third tab?',
    ],
    'tab4' => [
        'title' => 'Fourth tab',
        'content' => 'Finally, the fourth tab is here!',
    ],
];

echo $ui->build(
    $ui->tabs(
        $ui->tabNav(
            $ui->each($tabs, fn(array $tab, string $id) =>
                $ui->tabNavItem($tab['title'])
                    ->target($id)
                    ->active($id === 'tab2')
                    ->disabled($id === 'tab4'))
        ),
        $ui->tabContent(
            $ui->each($tabs, fn(array $tab, string $id) =>
                $ui->tabContentItem(
                    $ui->div($tab['content'])
                        ->setStyle('padding-top: 10px;')
                )->setId($id)
                    ->active($id === 'tab2')
                    ->disabled($id === 'tab4'))
        )
    )
);
