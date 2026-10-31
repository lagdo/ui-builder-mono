<?php

$ui = builder();

echo $ui->build(
    $ui->div(
        $ui->span('Switches')
            ->setStyle('font-weight: bold; margin: 10px 0 5px 0;')
    )->setStyle('padding: 10px 0;'),
    $ui->div(
        $ui->row(
            $ui->col(
                $ui->switch()->setId('customSwitch1')->checked(true)->label('Checked'),
                $ui->switch()->setId('customSwitch2')->checked(false)->label('Unchecked')
            )->unit(1, 2),
            $ui->col(
                $ui->switch()->setId('customSwitch3')->checked(true),
                $ui->switch()->setId('customSwitch4')->checked(false)
            )->unit(1, 2)
        )
    ),
    $ui->div(
        $ui->row(
            $ui->col(
                $ui->div('Checkboxes')
                    ->setStyle('font-weight: bold; margin: 10px 0 5px 0;'),
                $ui->div(
                    $ui->checkbox()->setName('checkbox1')->checked(true)
                        ->setId('checkbox1')
                        ->label('&nbsp;Checked', 'checkbox1'),
                    $ui->checkbox()->setName('checkbox2')->checked(false)
                        ->setId('checkbox2')
                        ->label('&nbsp;Unchecked', 'checkbox2')
                ),
                $ui->div(
                    $ui->div('Checkbox group horizontal')
                        ->setStyle('font-weight: bold; margin: 10px 0 5px 0;'),
                    $ui->checkboxGroup(
                        $ui->checkbox()->setName('checkbox3')
                            ->setId('checkbox3')
                            ->label('&nbsp;Option 1', 'checkbox3'),
                        $ui->checkbox()->setName('checkbox4')
                            ->setId('checkbox4')
                            ->label('&nbsp;Option 2', 'checkbox4'),
                        $ui->checkbox()->setName('checkbox5')
                            ->setId('checkbox5')
                            ->label('&nbsp;Option 3', 'checkbox5')
                    )->horizontal()
                ),
                $ui->div(
                    $ui->div('Checkbox group vertical')
                        ->setStyle('font-weight: bold; margin: 10px 0 5px 0;'),
                    $ui->checkboxGroup(
                        $ui->checkbox()->setName('checkbox6')
                            ->setId('checkbox6')
                            ->label('&nbsp;Option 1', 'checkbox6'),
                        $ui->checkbox()->setName('checkbox7')
                            ->setId('checkbox7')
                            ->label('&nbsp;Option 2', 'checkbox7'),
                        $ui->checkbox()->setName('checkbox8')
                            ->setId('checkbox8')
                            ->label('&nbsp;Option 3', 'checkbox8')
                    )->vertical()
                )
            )->unit(1, 2),
            $ui->col(
                $ui->div('Radios')
                    ->setStyle('font-weight: bold; margin: 10px 0 5px 0;'),
                $ui->div(
                    $ui->radio()->setName('radio1')->checked(true)
                        ->setId('radio1')
                        ->label('&nbsp;Checked', 'radio1'),
                    $ui->radio()->setName('radio1')->checked(false)
                        ->setId('radio2')
                        ->label('&nbsp;Unchecked', 'radio2')
                ),
                $ui->div(
                    $ui->div('Radio group horizontal')
                        ->setStyle('font-weight: bold; margin: 10px 0 5px 0;'),
                    $ui->radioGroup(
                        $ui->radio()->setName('radio2')
                            ->setId('radio3')
                            ->label('&nbsp;Option 1', 'radio3'),
                        $ui->radio()->setName('radio2')
                            ->setId('radio4')
                            ->label('&nbsp;Option 2', 'radio4'),
                        $ui->radio()->setName('radio2')
                            ->setId('radio5')
                            ->label('&nbsp;Option 3', 'radio5')
                    )->horizontal()
                ),
                $ui->div(
                    $ui->div('Radio group vertical')
                        ->setStyle('font-weight: bold; margin: 10px 0 5px 0;'),
                    $ui->radioGroup(
                        $ui->radio()->setName('radio3')
                            ->setId('radio6')
                            ->label('&nbsp;Option 1', 'radio6'),
                        $ui->radio()->setName('radio3')
                            ->setId('radio7')
                            ->label('&nbsp;Option 2', 'radio7'),
                        $ui->radio()->setName('radio3')
                            ->setId('radio8')
                            ->label('&nbsp;Option 3', 'radio8')
                    )->vertical()
                )
            )->unit(1, 2)
        )
    )
);
