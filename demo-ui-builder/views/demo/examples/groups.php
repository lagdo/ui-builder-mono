<?php

$ui = builder();

echo $ui->build(
    $ui->div(
        $ui->buttonGroup(
            $ui->button('First')->primary(),
            $ui->button('Second')->secondary(),
            $ui->button('Third')
        ),
        $ui->buttonGroup(
            $ui->button('First')->primary(),
            $ui->dropdown(
                $ui->dropdownButton()->primary(),
                $ui->dropdownMenu(
                    $ui->dropdownMenuItem('Item 1'),
                    $ui->dropdownMenuItem('Item 2')
                )
            ),
            $ui->button('Second')->secondary()
        )
    )->setStyle('display:flex; flex-direction:row; column-gap: 5px; margin: 10px 0;'),
    $ui->div(
        $ui->buttonGroup(
            $ui->button('First')->primary(),
            $ui->button('Second')->secondary(),
            $ui->dropdown(
                $ui->dropdownButton()->primary(),
                $ui->dropdownMenu(
                    $ui->dropdownMenuItem('Item 1'),
                    $ui->dropdownMenuItem('Item 2')
                )
            )
        ),
        $ui->buttonGroup(
            $ui->dropdown(
                $ui->dropdownButton()->primary(),
                $ui->dropdownMenu(
                    $ui->dropdownMenuItem('Item 1'),
                    $ui->dropdownMenuItem('Item 2')
                )
            ),
            $ui->button('First')->primary(),
            $ui->button('Second')->secondary()
        )
    )->setStyle('display:flex; flex-direction:row; column-gap: 5px; margin: 10px 0;'),
    $ui->div(
        $ui->inputGroup(
            $ui->label('Grouped'),
            $ui->checkbox(),
            $ui->button('Action')
        ),
        $ui->inputGroup(
            $ui->checkbox(),
            $ui->label('Grouped')
        ),
        $ui->inputGroup(
            $ui->label('Grouped'),
            $ui->checkbox()
        )
    )->setStyle('display:flex; flex-direction:row; column-gap: 5px; margin: 10px 0;'),
    $ui->div(
        $ui->inputGroup(
            $ui->label('Grouped'),
            $ui->radio()->setName('option'),
            $ui->button('Action')
        ),
        $ui->inputGroup(
            $ui->radio()->setName('option'),
            $ui->label('Grouped')
        ),
        $ui->inputGroup(
            $ui->label('Grouped'),
            $ui->radio()->setName('option')
        ),
    )->setStyle('display:flex; flex-direction:row; column-gap: 5px; margin: 10px 0;'),
    $ui->div(
        $ui->inputGroup(
            $ui->label('Grouped'),
            $ui->switch(),
            $ui->button('Action')
        ),
        $ui->inputGroup(
            $ui->switch(),
            $ui->label('Grouped')
        ),
        $ui->inputGroup(
            $ui->label('Grouped'),
            $ui->switch()
        )
    )->setStyle('display:flex; flex-direction:row; column-gap: 5px; margin: 10px 0;'),
    $ui->div(
        $ui->inputGroup(
            $ui->label('Grouped'),
            $ui->input(),
            $ui->button('Action')
        ),
        $ui->inputGroup(
            $ui->input(),
            $ui->label('Grouped')
        )
    )->setStyle('display:flex; flex-direction:row; column-gap: 5px; margin: 10px 0;'),
    $ui->div(
        $ui->inputGroup(
            $ui->label('Grouped'),
            $ui->select(
                $ui->option(''),
                $ui->option('First option'),
                $ui->option('Second option'),
                $ui->option('Third option')
            ),
            $ui->button('Action')
        ),
        $ui->inputGroup(
            $ui->select(
                $ui->option(''),
                $ui->option('First option'),
                $ui->option('Second option'),
                $ui->option('Third option')
            ),
            $ui->label('Grouped')
        )
    )->setStyle('display:flex; flex-direction:row; column-gap: 5px; margin: 10px 0;')
);
