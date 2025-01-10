<?php

function RumahDev($n) {
    // Loop dari 1 hingga n
    for ($i = 1; $i <= $n; $i++) {
        // Cek jika angka habis dibagi 3 dan 5
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "Rumah Dev\n";
        }
        // Cek jika angka habis dibagi 3
        else if ($i % 3 == 0) {
            echo "Rumah\n";
        }
        // Cek jika angka habis dibagi 5
        else if ($i % 5 == 0) {
            echo "Dev\n";
        }
        // Jika angka tidak habis dibagi 3 atau 5
        else {
            echo $i . "\n";
        }
    }
}

// Contoh penggunaan fungsi
RumahDev(20);
?>
