<?php

$this->Html->scriptBlock("var preguntas = $.parseJSON('" . json_encode($preguntas) . "');\n", array('inline' => false));
$this->Html->script("../includes/fmw/bootstrap-multiselect/js/bootstrap-multiselect", array('inline' => false));
$this->Html->script("https://maps.google.com/maps/api/js?sensor=false&amp;key=" . AppConfig::get('site.googlemaps.key') . "&amp;libraries=visualization", array('inline' => false));
$this->Html->script("fmw/jquery-jvectormap-2.0.2.min.js", array('inline' => false));
$this->Html->script("comunas.js", array('inline' => false));
$this->Html->script("presentation/mapa_comunas.js", array('inline' => false));
$this->Html->script("cargas_campana_mapa_maint.js", array('inline' => false));
$this->Html->css("../includes/fmw/bootstrap-multiselect/css/bootstrap-multiselect", array('inline' => false));
$this->Html->css("fmw/jquery-jvectormap-2.0.2.css", array('inline' => false));
$this->Html->css('mapa', array('inline' => false));
?>

<div id="map" style="height: 400px; width: 100%;"></div>

<div style="position: absolute; width: 100%; top: 50px; left: 20px;">
    <div id="filtroEdades" class="pull-left">
        <select id="edades" multiple="multiple">
            <option value="16-25">16-25</option>
            <option value="26-39">26-39</option>
            <option value="40-59">40-59</option>
            <option value="+60">+60</option>
        </select>
    </div>
</div>

<?php echo $this->element('js_initial'); ?>
