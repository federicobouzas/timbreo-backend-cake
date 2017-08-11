<?php

$this->Html->script("../includes/fmw/datepicker/js/bootstrap-datetimepicker.min.js", array('inline' => false));
$this->Html->css("../includes/fmw/datepicker/css/bootstrap-datetimepicker.css", array('inline' => false));
$this->Html->script("merlo/resultados_merlo", array('inline' => false));
?>

<div>
    <ul class="nav nav-tabs mt15" role="tablist">
        <li role="presentation" class="active"><a href="#totales" aria-controls="totales" role="tab" data-toggle="tab">Totales</a></li>
        <li role="presentation"><a href="#senadores" aria-controls="senadores" role="tab" data-toggle="tab">Senadores</a></li>
        <li role="presentation"><a href="#diputados" aria-controls="diputados" role="tab" data-toggle="tab">Diptuados</a></li>
        <li role="presentation"><a href="#legisladores" aria-controls="legisladores" role="tab" data-toggle="tab">Legisladores</a></li>
        <li role="presentation"><a href="#concejales" aria-controls="concejales" role="tab" data-toggle="tab">Concejales</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="totales">...</div>
        <div role="tabpanel" class="tab-pane" id="senadores">
            <div class="col-lg-5">
                <?php echo $this->element('Merlo.circuitos', ['id_tabla' => 'tablaCircuitos']); ?>
            </div>
            <div class="col-lg-7" style="max-height: 400px; overflow-y: scroll;">
                <?php echo $this->element('Merlo.establecimientos', ['id_tabla' => 'tablaColegios']); ?>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="diputados">...</div>
        <div role="tabpanel" class="tab-pane" id="legisladores">...</div>
        <div role="tabpanel" class="tab-pane" id="concejales">...</div>
    </div>
</div>