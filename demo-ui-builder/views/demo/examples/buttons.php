<?php

$ui = builder();

echo $ui->build(
    $ui->div(
        $ui->button('Button')
            ->primary(),
        $ui->button('Button')
            ->secondary(),
        $ui->button('Button')
            ->success(),
        $ui->button('Button')
            ->info(),
        $ui->button('Button')
            ->warning(),
        $ui->button('Button')
            ->error()
    )->setStyle('display:flex; flex-direction:row; column-gap: 5px; margin: 10px 0;'),
    $ui->div(
        $ui->buttonGroup(
            $ui->button('Button')
                ->primary(),
            $ui->button('Button')
                ->secondary(),
            $ui->button('Button')
                ->success(),
            $ui->button('Button')
                ->info(),
            $ui->button('Button')
                ->warning(),
            $ui->button('Button')
                ->error()
        )
    )->setStyle('display:flex; flex-direction:row; column-gap: 5px; margin: 10px 0;'),
    $ui->div(
        $ui->button('Button')
            ->primary()
            ->outline(),
        $ui->button('Button')
            ->secondary()
            ->outline(),
        $ui->button('Button')
            ->success()
            ->outline(),
        $ui->button('Button')
            ->info()
            ->outline(),
        $ui->button('Button')
            ->warning()
            ->outline(),
        $ui->button('Button')
            ->error()
            ->outline()
    )->setStyle('display:flex; flex-direction:row; column-gap: 5px; margin: 10px 0;'),
    $ui->div(
        $ui->buttonGroup(
            $ui->button('Button')
                ->primary()
                ->outline(),
            $ui->button('Button')
                ->secondary()
                ->outline(),
            $ui->button('Button')
                ->success()
                ->outline(),
            $ui->button('Button')
                ->info()
                ->outline(),
            $ui->button('Button')
                ->warning()
                ->outline(),
            $ui->button('Button')
                ->error()
                ->outline()
        )
    )->setStyle('display:flex; flex-direction:row; column-gap: 5px; margin: 10px 0;'),
    $ui->div(
        $ui->dropdown(
            $ui->dropdownButton(
                $ui->span(' Dropdown button '),
                // $ui->html('<i class="fas fa-angle-down" aria-hidden="true"></i>')
            ),
            $ui->dropdownMenu(
                $ui->dropdownMenuItem($ui->text(' Dropdown item ')),
                $ui->dropdownMenuItem($ui->text(' Other dropdown item ')),
                $ui->dropdownMenuItem($ui->text(' Other dropdown item '))
            )
        )
    )->setStyle('display:flex; flex-direction:row; column-gap: 5px; margin: 10px 0;')
);
