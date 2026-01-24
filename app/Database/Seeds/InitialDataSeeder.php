<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InitialDataSeeder extends Seeder
{
    public function run()
    {
        // Insert roles (custom)
        $this->db->query("INSERT IGNORE INTO roles (name, description, created_at) VALUES
            ('admin', 'Administrator sistem', NOW()),
            ('dosen', 'Dosen', NOW()),
            ('staff', 'Staff administrasi', NOW()),
            ('kepala_jurusan', 'Kepala Jurusan', NOW()),
            ('rektor', 'Rektor', NOW())");

        // Insert jabatan
        $this->db->query("INSERT IGNORE INTO jabatan (nama_jabatan, tingkat, created_at) VALUES
            ('Asisten Ahli', 1, NOW()),
            ('Lektor', 2, NOW()),
            ('Lektor Kepala', 3, NOW()),
            ('Guru Besar', 4, NOW())");

        // Insert departments
        $this->db->query("INSERT IGNORE INTO departments (nama_departemen, kode, created_at) VALUES
            ('Teknik Informatika', 'TI', NOW()),
            ('Teknik Elektro', 'TE', NOW()),
            ('Administrasi', 'ADM', NOW())");

        // Insert users (pakai Shield's UserModel)
        $userModel = new \CodeIgniter\Shield\Models\UserModel();
        $user = $userModel->createNewUser([
            'username' => 'admin',
        ]);
        $user->email = 'admin@gmail.com';
        $user->password = 'password123';
        $userModel->save($user);
        $user = $userModel->find($userModel->getInsertID());
        $user->addGroup('admin');
        // Update field custom
        $this->db->table('users')->where('id', $user->id)->update([
            'nama_lengkap' => 'Administrator',
            'nip' => '123456789',
            'role_id' => 1,
            'jabatan_id' => null,
            'department_id' => 3,
        ]);

        $user2 = $userModel->createNewUser([
            'username' => 'dosen1',
        ]);
        $user2->email = 'dosen1@gmail.com';
        $user2->password = 'password123';
        $userModel->save($user2);
        $user2 = $userModel->find($userModel->getInsertID());
        $user2->addGroup('dosen');
        $this->db->table('users')->where('id', $user2->id)->update([
            'nama_lengkap' => 'Dosen Satu',
            'nip' => '987654321',
            'role_id' => 2,
            'jabatan_id' => 1,
            'department_id' => 1,
        ]);

        $user3 = $userModel->createNewUser([
            'username' => 'staff1',
        ]);
        $user3->email = 'staff1@gmail.com';
        $user3->password = 'password123';
        $userModel->save($user3);
        $user3 = $userModel->find($userModel->getInsertID());
        $user3->addGroup('staff');
        $this->db->table('users')->where('id', $user3->id)->update([
            'nama_lengkap' => 'Staff Satu',
            'nip' => '112233445',
            'role_id' => 3,
            'jabatan_id' => null,
            'department_id' => 3,
        ]);

        // Insert budgets
        $this->db->query("INSERT IGNORE INTO budgets (department_id, tahun, total_anggaran, sisa_anggaran, created_at) VALUES
            (1, 2024, 50000000.00, 50000000.00, NOW()),
            (2, 2024, 40000000.00, 40000000.00, NOW()),
            (3, 2024, 30000000.00, 30000000.00, NOW())");
    }
}