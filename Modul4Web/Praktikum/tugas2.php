<?php

namespace MyNamespace;

// Trait sebagai wadah untuk metode-metode yang dapat digunakan oleh beberapa kelas
trait Loggable {
    public function log($message) {
        echo $message . PHP_EOL;
    }
}

// Interface yang berisi metode-metode yang harus diimplementasikan oleh kelas-kelas tertentu
interface Shape {
    public function calculateArea();
}

// Kelas abstrak sebagai kerangka dasar untuk kelas-kelas turunannya
abstract class ShapeBase implements Shape {
    protected $name;

    // Metode abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function calculateArea();

    // Magic method __construct untuk inisialisasi objek
    public function __construct($name) {
        $this->name = $name;
    }

    // Magic method __toString untuk mengonversi objek menjadi string
    public function __toString() {
        return "Shape: {$this->name}";
    }
}

// Kelas turunan pertama
class Circle extends ShapeBase {
    use Loggable;

    private $radius;

    // Metode untuk mengatur nilai radius
    public function setRadius($radius) {
        $this->radius = $radius;
    }

    // Implementasi metode dari interface
    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Kelas turunan kedua
class Rectangle extends ShapeBase {
    use Loggable;

    private $length;
    private $width;

    // Metode untuk mengatur nilai panjang dan lebar
    public function setDimensions($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    // Implementasi metode dari interface
    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Membuat objek dari kelas Circle
$circle = new Circle('Circle');
$circle->setRadius(5);
$circle->log($circle); // Menggunakan metode dari trait
echo "Area: " . $circle->calculateArea() . PHP_EOL;

// Membuat objek dari kelas Rectangle
$rectangle = new Rectangle('Rectangle');
$rectangle->setDimensions(4, 6);
$rectangle->log($rectangle); // Menggunakan metode dari trait
echo "Area: " . $rectangle->calculateArea() . PHP_EOL;

?>
