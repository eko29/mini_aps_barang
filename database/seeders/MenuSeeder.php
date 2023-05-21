<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\dsbo_menus;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = [
            [
                'name' => 'Pengaturan',
                'key' => 'setting',
                'url' => '#',
                'icon' => 'fas fa-cog',
                'status' => '1',
                'order' => 1
            ]        
            [
                'name' => 'Kategori Hak Akses',
                'order' => 'setting.kategori_hak_akses',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '1',
                'status' => '1',
                'order' => 1
            ]
            [
                'name' => 'Hak Akses',
                'key' => 'setting.hak_akses',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '1',
                'status' => '1',
                'order' => 2
            ],
            [
                'name' => 'Pengaturan Menu',
                'key' => 'setting.hak_akses',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '1',
                'status' => '1',
                'order' => 3
            ],
            [
                'name' => 'User Role',
                'key' => 'setting.hak_akses',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '1',
                'status' => '1',
                'order' => 4
            ],
            [
                'name' => 'User Back Office',
                'key' => 'setting.hak_akses',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '1',
                'status' => '1',
                'order' => 5
            ],
            [
                'name' => 'Aktivitas',
                'key' => 'setting.hak_akses',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '1',
                'status' => '1',
                'order' => 6
            ],
            [
                'name' => 'Aplikasi',
                'key' => 'setting.hak_akses',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '1',
                'status' => '1',
                'order' => 7
            ],
            [
                'name' => 'Reset Password',
                'key' => 'setting.hak_akses',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '1',
                'status' => '1',
                'order' => 8
            ],
            [
                'name' => 'Password Ujian',
                'key' => 'setting.hak_akses',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '1',
                'status' => '1',
                'order' => 9
            ],
            [
                'name' => 'Mastering',
                'key' => 'master',
                'url' => '#',
                'icon' => 'fas fa-dumpster',
                'status' => '1',
                'order' => 2
            ],
            [
                'name' => 'User',
                'key' => 'master.user',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '11',
                'status' => '1',
                'order' => 1
            ],
            [
                'name' => 'Guru',
                'key' => 'master.guru',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '11',
                'status' => '1',
                'order' => 2
            ],
            [
                'name' => 'Tahun Pelajaran',
                'key' => 'master.tapel',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '11',
                'status' => '1',
                'order' => 3
            ],
            [
                'name' => 'Jenjang',
                'key' => 'master.jenjang',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '11',
                'status' => '1',
                'order' => 4
            ],
            [
                'name' => 'Tingkatan',
                'key' => 'master.tingkatan',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '11',
                'status' => '1',
                'order' => 5
            ],
            [
                'name' => 'Jurusan',
                'key' => 'master.jurusan',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '11',
                'status' => '1',
                'order' => 6
            ],
            [
                'name' => 'Kelas',
                'key' => 'master.kelas',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '11',
                'status' => '1',
                'order' => 7
            ],
            [
                'name' => 'Siswa',
                'key' => 'master.siswa',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '11',
                'status' => '1',
                'order' => 8
            ],
            [
                'name' => 'Mata Pelajaran',
                'key' => 'master.mapel',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '11',
                'status' => '1',
                'order' => 9
            ],
            [
                'name' => 'Pembelajaran',
                'key' => 'pembelajaran',
                'url' => '#',
                'icon' => 'fas fa-columns',
                'status' => '1',
                'order' => 3
            ],
            [
                'name' => 'Mata Pelajaran',
                'key' => 'pembelajaran.mapel',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '21',
                'status' => '1',
                'order' => 1
            ],
            [
                'name' => 'KD - Mapel',
                'key' => 'pembelajaran.kd_mapel',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '21',
                'status' => '1',
                'order' => 2
            ],
            [
                'name' => 'Penilaian',
                'key' => 'pembelajaran.penilaian',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '21',
                'status' => '1',
                'order' => 3
            ],
            [
                'name' => 'Eskul',
                'key' => 'pembelajaran.exkul',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '21',
                'status' => '1',
                'order' => 4
            ],
            [
                'name' => 'Absensi',
                'key' => 'absen',
                'url' => '#',
                'icon' => 'fas fa-id-card-alt',
                'status' => '1',
                'order' => 4
            ],
            [
                'name' => 'Absensi',
                'key' => 'absen.absen',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '26',
                'status' => '1',
                'order' => 1
            ],
            [
                'name' => 'Pelanggaran',
                'key' => 'absen.pelanggaran',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '26',
                'status' => '1',
                'order' => 2
            ],
            [
                'name' => 'Pembiayaan',
                'key' => 'pembiayaan',
                'url' => '#',
                'icon' => 'fas fa-money-check-alt',
                'status' => '1',
                'order' => 5
            ],
            [
                'name' => 'Tagihan',
                'key' => 'pembiayaan.tagihan',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '29',
                'status' => '1',
                'order' => 1
            ],
            [
                'name' => 'Pembayaran',
                'key' => 'pembiayaan.pembayaran',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '29',
                'status' => '1',
                'order' => 2
            ],
            [
                'name' => 'Report Tagihan',
                'key' => 'pembiayaan.report_tagihan',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '29',
                'status' => '1',
                'order' => 3
            ],
            [
                'name' => 'Report Pembayaran',
                'key' => 'pembiayaan.report_pembayaran',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '29',
                'status' => '1',
                'order' => 4
            ],
            [
                'name' => 'Uang Saku',
                'key' => 'pembiayaan.uang_saku',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '29',
                'status' => '1',
                'order' => 5
            ],
            [
                'name' => 'Sedekah',
                'key' => 'pembiayaan.sedekah',
                'url' => '',
                'icon' => 'far fa-circle nav-icon',
                'parent_id' => '29',
                'status' => '1',
                'order' => 6
            ],
            [
                'name' => 'Pendaftaran Siswa',
                'key' => 'pendaftaran_siswa',
                'url' => '#',
                'order' => 'far fa-calendar-check',
                'status' => '1',
                'order' => 6
            ],
        ];
        contoh::insert($contoh);
    }
}
