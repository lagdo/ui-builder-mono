<?php

$ui = builder();

echo $ui->build(
    $ui->div(
        $ui->button(
            $ui->text('Badge'),
            $ui->badge('15')
        )->setStyle('margin-right: 20px;'),
        $ui->button(
            $ui->text('Badge'),
            $ui->badge('15')->top()
        )
    )->setStyle('padding: 10px 0;'),
    $ui->div(
        $ui->button(
            $ui->text('Badge'),
            $ui->badge('15')->outline()
        )->setStyle('margin-right: 20px;'),
        $ui->button(
            $ui->text('Badge'),
            $ui->badge('15')->outline()->top()
        )
    )->setStyle('padding: 10px 0;'),
    $ui->div(
        $ui->button(
            $ui->text('Badge'),
            $ui->badge('15')->success()
        )->setStyle('margin-right: 20px;'),
        $ui->button(
            $ui->text('Badge'),
            $ui->badge('15')->success()->top()
        )
    )->setStyle('padding: 10px 0;'),
    $ui->div(
        $ui->button(
            $ui->text('Badge'),
            $ui->badge('15')->success()->outline()
        )->setStyle('margin-right: 20px;'),
        $ui->button(
            $ui->text('Badge'),
            $ui->badge('15')->success()->outline()->top()
        )
    )->setStyle('padding: 10px 0;'),
    $ui->div(
        $ui->button(
            $ui->text('Badge'),
            $ui->badge('15')->warning()
        )->setStyle('margin-right: 20px;'),
        $ui->button(
            $ui->text('Badge'),
            $ui->badge('15')->warning()->top()
        ),
    )->setStyle('padding: 10px 0;'),
    $ui->div(
        $ui->button(
            $ui->text('Badge'),
            $ui->badge('15')->warning()->outline()
        )->setStyle('margin-right: 20px;'),
        $ui->button(
            $ui->text('Badge'),
            $ui->badge('15')->warning()->outline()->top()
        )
    )->setStyle('padding: 10px 0;'),
    $ui->div(
        $ui->button(
            $ui->text('Badge'),
            $ui->badge('15')->danger()
        )->setStyle('margin-right: 20px;'),
        $ui->button(
            $ui->text('Badge'),
            $ui->badge('15')->danger()->top()
        )
    )->setStyle('padding: 10px 0;'),
    $ui->div(
        $ui->button(
            $ui->text('Badge'),
            $ui->badge('15')->danger()->outline()
        )->setStyle('margin-right: 20px;'),
        $ui->button(
            $ui->text('Badge'),
            $ui->badge('15')->danger()->outline()->top()
        )
    )->setStyle('padding: 10px 0;')
);
