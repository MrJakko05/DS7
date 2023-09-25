<?php
    final class ClaseBase {
        public function test() {
            echo "ClaseBase::test() llamada\n";
        }

        // Aquí da igual si se declara el método como
        // final o no
        final public function moreTesting() {
            echo "ClaseBase::moreTesting() llamada\n";
        } 
    }

    class ClaseHijo extends ClaseBase {

    }
?>

<!-- 
    La declaración final en una clase significa que la clase no puede ser heredada por otras clases. 
    Esto implica que no puedes extender o subclasificar la clase ClaseBase. 
    Por lo tanto, no puedes crear una clase hija de ClaseBase, y si intentas hacerlo, PHP arrojará un error. 

    La salida del código se debe a las restricciones impuestas por la palabra clave final. Aunque ClaseHijo no hereda de ClaseBase, aún puede acceder a los métodos final de ClaseBase.
-->