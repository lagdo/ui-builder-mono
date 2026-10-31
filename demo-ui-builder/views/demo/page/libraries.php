<?php

$ui = builder();
$lib = uiLib();

echo $ui->build(
    $ui->form(
        $ui->div(
            $ui->select(
                $ui->each(uiLibs(), fn(string $name, string $id) =>
                    $ui->option($name)
                        ->setValue($id)
                        ->selected($id === $lib))
            )->setId('select-ui')
        ),
        $ui->div(
            $ui->button('Select')
                ->primary()
                ->setId('button-ui')
        )
    )->setStyle('display:flex; flex-direction:row; column-gap: 10px')
);
