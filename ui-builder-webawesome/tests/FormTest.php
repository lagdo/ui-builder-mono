<?php

namespace Lagdo\UiBuilder\WebAwesome\Tests;

use Lagdo\UiBuilder\WebAwesome\Builder;
use PHPUnit\Framework\TestCase;

final class FormTest extends TestCase
{
    /**
     * @var Builder
     */
    protected $ui;

    protected function setUp(): void
    {
        $this->ui = new Builder();
    }

    public function testSimpleForm()
    {
        // Form values
        $name = 'Sample name';
        $description = 'Sample description';

        $html = $this->ui->build(
            $this->ui->form(
                $this->ui->row(
                    $this->ui->col(
                        $this->ui->label($this->ui->text('Name'))
                            ->setFor('name')
                    )->unit(1, 3),
                    $this->ui->col(
                        $this->ui->input()
                            ->setType('text')
                            ->setName('name')
                            ->setPlaceholder('Name')
                            ->setValue($name)
                    )->unit(2, 3)
                ),
                $this->ui->row(
                    $this->ui->col(
                        $this->ui->label($this->ui->text('Description'))
                            ->setFor('description')
                    )->unit(1, 3),
                    $this->ui->col(
                        $this->ui->textarea($this->ui->text($description))
                            ->setRows('10')
                            ->setName('description')
                            ->setWrap('on')
                            ->setSpellcheck('false')
                    )->unit(2, 3)
                )
            )->setId('form-id')
        );

        $this->assertEquals('', $html);
    }
}
