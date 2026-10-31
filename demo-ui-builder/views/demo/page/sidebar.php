<?php

$ui = builder();
$lib = uiLib();

echo $ui->build(
    $ui->each(examples(), fn(string $title, string $name) =>
        $ui->div(
            $ui->a($title)->setHref("/?lib=$lib&page=$name")
        )->setStyle('padding: 10px;'))
);
