<?php

/* GENERADO AUTOMATICAMENTE */

App::uses('AbstractData', 'Lib');

class ArbolesMaint extends AbstractData {

protected $data = array (
    'translatepath' => NULL,
    'submit' => 'Guardar',
    'cancel' => true,
    'info' => '',
    'warning' => '',
    'data' => 
    array (
        0 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'identificacion',
                    'label' => 'Indentificación',
                ),
                1 => 
                array (
                    'name' => 'time',
                    'label' => 'Fecha',
                    'presentation' => 'DATERANGE',
                ),
            ),
            'id' => 'ubicacion',
            'title' => 'Descripción',
            'columns' => '2',
        ),
        1 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'position',
                    'label' => '',
                    'presentation' => 'GOOGLEMAP',
                ),
            ),
            'id' => 'position',
            'title' => 'Posición',
            'columns' => '1',
        ),
        2 => 
        array (
            'type' => 'fieldset',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'pregunta_1',
                    'label' => 'Pregunta 1',
                ),
                1 => 
                array (
                    'name' => 'pregunta_2',
                    'label' => 'Pregunta 2',
                ),
                2 => 
                array (
                    'name' => 'pregunta_3',
                    'label' => 'Pregunta 3',
                ),
                3 => 
                array (
                    'name' => 'pregunta_4',
                    'label' => 'Pregunta 4',
                ),
                4 => 
                array (
                    'name' => 'pregunta_5',
                    'label' => 'Pregunta 5',
                ),
                5 => 
                array (
                    'name' => 'pregunta_6',
                    'label' => 'Pregunta 6',
                ),
                6 => 
                array (
                    'name' => 'pregunta_7',
                    'label' => 'Pregunta 7',
                ),
                7 => 
                array (
                    'name' => 'pregunta_8',
                    'label' => 'Pregunta 8',
                ),
                8 => 
                array (
                    'name' => 'pregunta_9',
                    'label' => 'Pregunta 9',
                ),
                9 => 
                array (
                    'name' => 'pregunta_10',
                    'label' => 'Pregunta 10',
                ),
                10 => 
                array (
                    'name' => 'pregunta_11',
                    'label' => 'Pregunta 11',
                ),
            ),
            'id' => 'espacio',
            'title' => 'Respuestas',
            'columns' => '3',
        ),
    ),
);

}
