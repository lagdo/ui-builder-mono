<?php

$ui = builder();

echo $ui->build(
    $ui->div(
        $ui->pagination(
            $ui->paginationItem('1')->number(1),
            $ui->paginationItem($ui->html('&hellip;'))->disabled(),
            $ui->paginationItem('4')->number(6),
            $ui->paginationItem('5')->number(5)->active(),
            $ui->paginationItem('6')->number(6),
            $ui->paginationItem($ui->html('&hellip;'))->disabled(),
            $ui->paginationItem('9')->number(9)
        ),
    )->setStyle('padding: 10px 0;'),
);
