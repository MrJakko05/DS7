<?php
    class ClaseBase {
        public function test() {
            echo "ClaseBase::test() llamada\n";
        }

        final public function masTests() {
            echo "ClaseBase::masTests() llamada\n";
        } 
    }

    class ClaseHijo extends ClaseBase {
        public function masTests() {
            echo "ClaseHijo::masTests() llamada\n";
        } 
    }
?>

<!-- 
    * Cuando un método se llama en una instancia de una clase base, se utiliza la implementación de la clase base, a menos que haya sido anulado por la clase hija.
    * Cuando un método es final en la clase base, no puede ser anulado por las clases hijas.
    * Si un método es anulado por una clase hija, la implementación de la clase hija se utilizará cuando se llame a ese método en una instancia de la clase hija. 
-->