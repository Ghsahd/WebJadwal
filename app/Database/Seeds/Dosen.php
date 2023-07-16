<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Dosen extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nip' => 2121345,
                'nama' => 'reyhan mahmudi  S.kom.,M.kom'
            ],
            ];

        $this->db->table('tabel_dosen')->insertBatch($data);
    }
}
