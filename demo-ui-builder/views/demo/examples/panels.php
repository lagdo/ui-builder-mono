<?php

$ui = builder();

echo $ui->build(
    $ui->div(
        $ui->panelMenu(
            $ui->panelMenuItem('A simple menu item'),
            $ui->panelMenuItem('The active menu item')->active(),
            $ui->panelMenuItem('A simple menu item'),
            $ui->panelMenuItem('A disabled menu item')->disabled()
        )
    )->setStyle('padding: 10px 0;'),
    $ui->div(
        $ui->panelMenu(
            $ui->panelMenuItem('Menu one'),
            $ui->panelMenuItem('Menu two')->active(),
            $ui->panelMenuItem('Menu three'),
            $ui->panelMenuItem('Menu four')->disabled()
        )->horizontal()
    )->setStyle('padding: 10px 0;')
);
