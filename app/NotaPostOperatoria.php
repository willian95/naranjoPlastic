<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaPostOperatoria extends Model
{
    protected $table='nota_postoperatoria';
    protected $fillable = [
        'habitacion_seccion4',
        'diagnostico_pre_operatorio_seccion4',
        'operacion_planeada_seccion4',
        'diagnostico_post_operatorio_seccion4',
        'operacion_realizada_seccion4',
        'descripcion_tecnica_quirurgica_seccion4',
        'hallazgos_transoperatorios_seccion4',
        'reporte_gasas_compresas_seccion4',
        'incidentes_accidentes_seccion4',
        'sangrado_seccion4',
        'estudios_servicios_auxiliares_seccion4',
        'estudios_servicios_auxiliares_seccion4',
        'nombre_anestesiologo_seccion4',
        'nombre_ayudante1_seccion4',
        'nombre_ayudante2_seccion4',
        'nombre_instrumentista_seccion4',
        'nombre_enfermera_circulante_seccion4',
        'estado_postquirurgico_inmediato_seccion4',
        'pronostico_seccion4',
        'envio_piezas_seccion4',
        'otros_hallazgos_seccion4',
        'nombre_cirujano_seccion4',
        'cliente_id'

    ];
}
