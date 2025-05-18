<?php
/**
 * Script para la actividad 1.2, de la tarea 5 de Despliegue de Aplicaciones Web
 *
 * @author Rafa García Ávila
 * @version 1.0
 */

/**
 * Función que da como resultado la suma de dos números enteros.
 *
 * @param int $a Primer número
 * @param int $b Segundo número
 * @return int Resultado de la suma
 * @internal Solo visible en documentación para desarrolladores
 */
function sumar($a, $b) {
    return $a + $b;
}

/**
 * Función que da como resultado la resta de dos números enteros.
 *
 * @param int $a Primer número
 * @param int $b Segundo número
 * @return int Resultado de la resta
 */
function restar($a, $b) {
    echo "Resta realizada";
    return $a - $b;
}