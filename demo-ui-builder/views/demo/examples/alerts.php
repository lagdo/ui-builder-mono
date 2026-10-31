<?php

$ui = builder();

echo $ui->build(
    $ui->div(
        $ui->alert('Info alert message')->info(),
    )->setStyle('padding: 10px 0;'),
    $ui->div(
        $ui->alert('Success alert message')->success(),
    )->setStyle('padding: 10px 0;'),
    $ui->div(
        $ui->alert('Warning alert message')->warning(),
    )->setStyle('padding: 10px 0;'),
    $ui->div(
        $ui->alert('Error alert message')->danger(),
    )->setStyle('padding: 10px 0;')
);
