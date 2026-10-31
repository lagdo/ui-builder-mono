<?php $this->extends('layout::' . uiLib()) ?>

<?php $this->block('htmlHeader') ?>
<?php $this->endblock() ?>

<?php $this->block('htmlFooter') ?>
    <?php $this->include('demo::page/script') ?>
<?php $this->endblock() ?>

<?php $this->block('pageContent') ?>
        <div class="pure-g">
            <div class="pure-u-1-5" style="padding: 20px;">
                <?php $this->include('demo::page/libraries') ?>
            </div>
            <div class="pure-u-3-5" style="padding: 20px;">
                <div><?= uiLibName() ?> examples</div>
            </div>
        </div>
        <div class="pure-g">
            <div class="pure-u-1-5" style="padding: 20px;">
                <?php $this->include('demo::page/sidebar') ?>
            </div>
            <div class="pure-u-3-5" style="padding: 20px;">
                <?php $this->include('demo::examples/' . page()) ?>
            </div>
        </div>
<?php $this->endblock() ?>
