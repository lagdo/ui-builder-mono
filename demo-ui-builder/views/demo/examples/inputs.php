<?php

$ui = builder();

echo $ui->build(
    $ui->form(
        $ui->div(
            $ui->formField($ui->input())
                ->label('Input')->horizontal()
        )->setStyle('padding: 10px 0;'),
        $ui->div(
            $ui->formField($ui->input()->help('Help message'))
                ->label('Input with help')->horizontal()
        )->setStyle('padding: 10px 0;')
    )->horizontal(),
    $ui->form(
        $ui->div(
            $ui->formField(
                $ui->input()->feedback(true)->help('Success message')
            )->label('Input with success')
        )->setStyle('padding: 10px 0;'),
        $ui->div(
            $ui->formField(
                $ui->input()->feedback(false)->help('Error message')
            )->label('Input with error')
        )->setStyle('padding: 10px 0;')
    )->vertical()
);
