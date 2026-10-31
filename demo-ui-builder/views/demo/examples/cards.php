<?php

$ui = builder();

echo $ui->build(
    $ui->div(
        $ui->card(
            $ui->cardImage()
                // ->setSrc('/images/card-image.png')
                ->setSrc('https://bulma.io/assets/images/placeholders/1280x960.png')
                ->setAlt('Placeholder image'),
            $ui->cardBody(
                $ui->text('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.')
            )
        )
    )->setStyle('padding: 10px 0;'),
    $ui->div(
        $ui->card(
            $ui->cardHeader(
                $ui->text('Card header')
            ),
            $ui->cardBody(
                $ui->text('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.')
            ),
            $ui->cardFooter(
                $ui->text('Card footer')
            )
        )
    )->setStyle('padding: 10px 0;'),
);
