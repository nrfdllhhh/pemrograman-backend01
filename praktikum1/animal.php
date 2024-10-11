<?php

class Animal {
    // Property untuk menyimpan array hewan
    public $animals = [];

    // Constructor untuk mengisi data awal animals
    public function __construct($initialAnimals = []) {
        $this->animals = $initialAnimals;
    }

    // Method untuk menampilkan seluruh data hewan
    public function index() {
        return $this->animals;
    }

    // Method untuk menambahkan hewan baru ke array animals
    public function store($newAnimal) {
        $this->animals[] = $newAnimal;
        return "Hewan berhasil ditambahkan.";
    }

    // Method untuk memperbarui data hewan pada posisi tertentu
    public function update($index, $updatedAnimal) {
        if (isset($this->animals[$index])) {
            $this->animals[$index] = $updatedAnimal;
            return "Hewan pada indeks $index berhasil diperbarui.";
        } else {
            return "Hewan tidak ditemukan.";
        }
    }

    // Method untuk menghapus data hewan pada posisi tertentu
    public function destroy($index) {
        if (isset($this->animals[$index])) {
            unset($this->animals[$index]);
            // Re-indexing array setelah penghapusan
            $this->animals = array_values($this->animals);
            return "Hewan pada indeks $index berhasil dihapus.";
        } else {
            return "Hewan tidak ditemukan.";
        }
    }
}

// Contoh penggunaan class Animal
$animalList = new Animal(["Kucing", "Anjing", "Kelinci"]);

// Menampilkan seluruh hewan
print_r($animalList->index());

// Menambah hewan baru
echo $animalList->store("Burung");

// Memperbarui data hewan
echo $animalList->update(1, "Sapi");

// Menghapus hewan
echo $animalList->destroy(0);

// Menampilkan seluruh hewan setelah update dan delete
print_r($animalList->index());
