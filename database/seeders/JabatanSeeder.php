<?php

namespace Database\Seeders;

use App\Models\Bidang;
use App\Models\Jabatan;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bidangs = Bidang::select('id')->pluck('id');

        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Kepala BPKAD']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Sekretaris BPKAD']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Kepala Bidang Aset']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Kepala Bidang Perbendaharaan dan Belanja Pegawai']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Kepala Bidang Anggaran']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Kepala Bidang Akuntansi']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Analis Keuangan Pusat Dan Daerah']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Kepala Sub Bid. Rencana Penyusunan Anggaran']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Analis Perencanaan Ahli Muda']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Kepala Sub Bid. Penyusunan Anggaran']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Analis Kebijakan Ahli Muda']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Kepala Sub Bid. Perencanaan Aset']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Kepala Sub Bid. Penatausahaan Aset Daerah']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Kepala Sub Bid. Perbendaharaan']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Kepala Sub Bid. Verifikasi Pendapatan dan Belanja']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Kasubag. Umum dan Kepegawaian']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Kepala Sub Bid. Pelaporan dan Pertanggungjawaban Keuangan']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Kepala Sub Bid. Belanja Pegawai']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Analis Keuangan Pusat Dan Daerah Ahli Muda']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Staf Bidang Aset']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Staf Bidang Akuntansi']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Staf Sekretariat']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Staf Bidang Anggaran']);
        Jabatan::create(['bidang_id' => $bidangs->random(), 'jabatan' => 'Staf Bidang Perbendaharaan dan Belanja Pegawai']);
    }
}
