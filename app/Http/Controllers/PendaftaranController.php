<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Image;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class PendaftaranController extends Controller
{
    protected $googleScriptUrl = "https://script.google.com/macros/s/AKfycbyAeVB2nMKZHHEdaSDvLzX68kPCSLdov7TezN7k2vEKKyGvvjDgghC0i02KP5Eqd6hoIA/exec";

    # pendaftaran baru
    public function pendaftaran_baru($mentor = null)
    {
        $mentor = $mentor ? strtoupper(str_replace('-', ' ', $mentor)) : null;

        return view('pendaftaran.pendaftaran_siswa_baru', [
            'mentor'  => $mentor
        ]);
    }

    public function store_pendaftaran_baru(Request $request)
    {
        $response  = Http::get($this->googleScriptUrl);
        $data_list = array_reverse($response->json());

        try {
            $input = $request->all();

            $email_input = strtolower(trim($input['email'] ?? ''));
            $nama_input  = strtoupper(trim($input['nama_indonesia'] ?? ''));

            foreach ($data_list as $row) {
                $email_lama = strtolower(trim($row['EMAIL'] ?? ''));
                $nama_lama  = strtoupper(trim($row['NAMA (INDONESIA)'] ?? ''));

                if ($email_lama === $email_input || $nama_lama === $nama_input) {
                    return response()->json([
                        'success'   => false,
                        'duplicate' => true,
                        'message'   => 'Data anda sudah terdaftar di LPK GMI JAPAN!'
                    ]);
                }
            }

            $pengalamanList = [];
            $perguruanList  = [];

            # pengalaman
            if ($request->has('tahun_awal')) {
                foreach ($request->tahun_awal as $i => $tahunAwal) {
                    $tahunAkhir     = $request->tahun_akhir[$i] ?? '-';
                    $perusahaan     = $request->nama_perusahaan[$i] ?? '-';
                    $bagian         = $request->bagian[$i] ?? '-';

                    $pengalamanList[] = "{$tahunAwal} - {$tahunAkhir} - {$perusahaan} - {$bagian}";
                }
            }

            $input['pengalaman_kerja'] = implode(', ', $pengalamanList);

            # perguruan tinggi
            if ($request->has('nama_perguruan')) {
                foreach ($request->nama_perguruan as $i => $nama_perguruan) {
                    $prodi = $request->program_studi[$i] ?? '-';
                    $perguruanList[] = "{$nama_perguruan} - {$prodi}";
                }
            }
            $input['perguruan_tinggi'] = implode(', ', $perguruanList);


            $fieldJsonFields = ['nama_keluarga', 'bahasa_asing'];
            foreach ($fieldJsonFields as $field) {
                if (isset($input[$field])) {
                    $input[$field] = $this->convertJsonToText($input[$field]);
                }
            }

            $request->merge($input);

            $request->validate([
                'email'                      => 'nullable|string',
                'nama_katakana'              => 'nullable|string',
                'nama_indonesia'             => 'nullable|string',
                'alamat'                     => 'nullable|string',
                'tanggal_lahir'              => 'nullable|string',
                'usia'                       => 'nullable|string',
                'jenis_kelamin'              => 'nullable|string',
                'no_hp_aktif'                => 'nullable|string',
                'agama'                      => 'nullable|string',
                'tinggi_badan'               => 'nullable|string',
                'berat_badan'                => 'nullable|string',
                'golongan_darah'             => 'nullable|string',
                'buta_warna'                 => 'nullable|string',
                'mata_kanan'                 => 'nullable|string',
                'mata_kiri'                  => 'nullable|string',
                'pernah_operasi'             => 'nullable|string',
                'apakah_sedang_minum'        => 'nullable|string',
                'tangan'                     => 'nullable|string',
                'merokok'                    => 'nullable|string',
                'penyakit_dalam'             => 'nullable|string',
                'keahlian'                   => 'nullable|string',
                'sifat_kepribadian'          => 'nullable|string',
                'kelebihan'                  => 'nullable|string',
                'kelemahan'                  => 'nullable|string',
                'status'                     => 'nullable|string',
                'hobi'                       => 'nullable|string',
                'motivasi'                   => 'nullable|string',
                'nabung_berapa'              => 'nullable|string',
                'apa_yang_akan_dilakukan'    => 'nullable|string',
                'pernah_tinggal_dijepang'    => 'nullable|string',
                'kualifikasi'                => 'nullable|string',
                'sekolah_dasar'              => 'nullable|string',
                'tahun_masuk_sd'             => 'nullable|string',
                'tahun_keluar_sd'            => 'nullable|string',
                'sekolah_menengah_pertama'   => 'nullable|string',
                'tahun_masuk_smp'            => 'nullable|string',
                'tahun_keluar_smp'           => 'nullable|string',
                'sekolah_menengah_atas'      => 'nullable|string',
                'tahun_masuk_smak'           => 'nullable|string',
                'tahun_keluar_smak'          => 'nullable|string',
                'jurusan'                    => 'nullable|string',
                'perguruan_tinggi'           => 'nullable|string',
                'pengalaman_kerja'           => 'nullable|string',
                'bahasa_asing'               => 'nullable|string',
                'pernah_keluar_negeri'       => 'nullable|string',
                'tanggal_keluar_negeri'      => 'nullable|string',
                'pernah_keluar_negeri_lain'  => 'nullable|string',
                'negara'                     => 'nullable|string',
                'kerabat_dijepang'           => 'nullable|string',
                'hubungan_kerabat_dijepang'  => 'nullable|string',
                'belajar_bahasa'             => 'nullable|string',
                'buku_yang_dipakai'          => 'nullable|string',
                'bab_yang_dipelajari'        => 'nullable|string',
                'nama_ayah'                  => 'nullable|string',
                'hubungan_ayah'              => 'nullable|string',
                'usia_ayah'                  => 'nullable|string',
                'pekerjaan_ayah'             => 'nullable|string',
                'nama_ibu'                   => 'nullable|string',
                'hubungan_ibu'               => 'nullable|string',
                'usia_ibu'                   => 'nullable|string',
                'pekerjaan_ibu'              => 'nullable|string',
                'nama_saudara'               => 'nullable|string',
                'pendapat_keluarga'          => 'nullable|string',
                'no_hp_keluarga'             => 'nullable|string',
                'nama_mentor'                => 'nullable|string',
                'ukuran_baju'                => 'nullable|string',
                'ukuran_sepatu'              => 'nullable|string',
                'id'                         => 'nullable|string'
            ]);

            $data = $request->all();

            foreach ($data as $key => $value) {
                if ($key === 'email') continue;
                if (is_string($value)) {
                    $data[$key] = strtoupper($value);
                }
            }

            if (!empty($data['hubungan_ayah'])) {
                $data['hubungan_ayah'] = 'AYAH';
            }
            if (!empty($data['hubungan_ibu'])) {
                $data['hubungan_ibu'] = 'IBU';
            }

            $data['id']             = mt_rand(10000000, 99999999);
            $data['no_hp_aktif']    = "'" . $data['no_hp_aktif'];
            $data['no_hp_keluarga'] = "'" . $data['no_hp_keluarga'];

            # nama saudara
            if (!empty($data['nama_saudara'])) {
                $saudaraList   = explode(';', $data['nama_saudara']);
                $formattedList = [];

                foreach ($saudaraList as $saudara) {
                    $parts = array_map('trim', explode(',', $saudara));

                    $hubungan  = isset($parts[0]) && $parts[0] !== '' ? strtoupper($parts[0]) : '';
                    $nama      = isset($parts[1]) && $parts[1] !== '' ? strtoupper($parts[1]) : '';
                    $usia      = isset($parts[2]) && $parts[2] !== '' ? $parts[2] : '';
                    $pekerjaan = isset($parts[3]) && $parts[3] !== '' ? strtoupper($parts[3]) : '';

                    $filteredParts = array_filter([$hubungan, $nama, $usia, $pekerjaan], function ($value) {
                        return $value !== '';
                    });

                    $formattedList[] = implode(' - ', $filteredParts);
                }

                $data['nama_saudara'] = implode(', ', $formattedList);
            }

            $response = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])->post($this->googleScriptUrl, $data);

            if ($response->successful()) {
                return response()->json(['success' => true]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Gagal mengirim ke Google Script.',
                    'debug_response' => $response->body()
                ]);
            }
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $e->errors(),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function data_pendaftaran_new()
    {
        $response = Http::get($this->googleScriptUrl);
        $data     = array_reverse($response->json());

        $cleanedData = [];

        foreach ($data as $row) {
            $cleanedRow = [];
            foreach ($row as $key => $value) {
                if ($key === 'Timestamp' || $key === 'TANGGAL LAHIR' || $key === 'JIKA YA, SEBUTKAN TGL/BLN/THN') {
                    $dateOnly = substr($value, 0, 10);
                    $cleanedRow[$key] = $dateOnly;
                    continue;
                }

                if (in_array($key, ['KEAHLIAN', 'MOTIVASI', 'HOBI', 'SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN', 'SIFAT/KEPRIBADIAN', 'KELEBIHAN', 'KELEMAHAN'])) {
                    $cleanedRow[$key] = $this->convertJsonToText($value);
                    continue;
                }

                if (in_array($key, ['NAMA (KATAKANA)', 'NAMA (INDONESIA)',
                        'TAHUN MASUK SEKOLAH (SD)', 'TAHUN KELUAR SEKOLAH (SD)',
                        'TAHUN MASUK SEKOLAH (SMP)', 'TAHUN KELUAR SEKOLAH (SMP)',
                        'TAHUN MASUK SEKOLAH (SMA/SMK)', 'TAHUN KELUAR SEKOLAH (SMA/SMK)']))
                {
                    if (stripos($key, 'EMAIL') !== false) {
                        $cleanedRow[$key] = $value;
                    } else {
                        $cleanedRow[$key] = strtoupper($value);
                    }
                } else {
                    $newKey = preg_replace('/\s*\(.*?\).*/', '', $key);
                    if (stripos($newKey, 'EMAIL') !== false) {
                        $cleanedRow[$newKey] = $value;
                    } else {
                        $cleanedRow[$newKey] = strtoupper($value);
                    }
                }
            }
            $cleanedData[] = $cleanedRow;
        }

        return view('pendaftaran.data-pendaftaran-new', compact('cleanedData'));
    }

    public function refreshTablePendaftaran()
    {
        $response = Http::get($this->googleScriptUrl);
        $data     = array_reverse($response->json());

        $cleanedData = [];

        foreach ($data as $row) {
            $cleanedRow = [];
            foreach ($row as $key => $value) {
                if ($key === 'Timestamp' || $key === 'TANGGAL LAHIR' || $key === 'JIKA YA, SEBUTKAN TGL/BLN/THN') {
                    $dateOnly = substr($value, 0, 10);
                    $cleanedRow[$key] = $dateOnly;
                    continue;
                }

                if (in_array($key, ['KEAHLIAN', 'MOTIVASI', 'HOBI', 'SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN', 'SIFAT/KEPRIBADIAN', 'KELEBIHAN', 'KELEMAHAN'])) {
                    $cleanedRow[$key] = $this->convertJsonToText($value);
                    continue;
                }

                if (in_array($key, ['NAMA (KATAKANA)', 'NAMA (INDONESIA)',
                        'TAHUN MASUK SEKOLAH (SD)', 'TAHUN KELUAR SEKOLAH (SD)',
                        'TAHUN MASUK SEKOLAH (SMP)', 'TAHUN KELUAR SEKOLAH (SMP)',
                        'TAHUN MASUK SEKOLAH (SMA/SMK)', 'TAHUN KELUAR SEKOLAH (SMA/SMK)']))
                {
                    if (stripos($key, 'EMAIL') !== false) {
                        $cleanedRow[$key] = $value;
                    } else {
                        $cleanedRow[$key] = strtoupper($value);
                    }
                } else {
                    $newKey = preg_replace('/\s*\(.*?\).*/', '', $key);
                    if (stripos($newKey, 'EMAIL') !== false) {
                        $cleanedRow[$newKey] = $value;
                    } else {
                        $cleanedRow[$newKey] = strtoupper($value);
                    }
                }
            }
            $cleanedData[] = $cleanedRow;
        }

        return view('partials.table_body', compact('cleanedData'));
    }

    public function export_cv_word($id)
    {
        $response = Http::get($this->googleScriptUrl);
        $data     = array_reverse($response->json());

        $rowData  = collect($data)->firstWhere('ID', $id);

        $cleanedData = [];
        foreach ($rowData as $key => $value) {
            if (in_array($key, ['NAMA (KATAKANA)', 'NAMA (INDONESIA)',
                    'TAHUN MASUK SEKOLAH (SD)', 'TAHUN KELUAR SEKOLAH (SD)',
                    'TAHUN MASUK SEKOLAH (SMP)', 'TAHUN KELUAR SEKOLAH (SMP)',
                    'TAHUN MASUK SEKOLAH (SMA/SMK)', 'TAHUN KELUAR SEKOLAH (SMA/SMK)',
                    'MATA KANAN', 'SIFAT/KEPRIBADIAN']))
            {
                $cleanedData[$key] = $value;
            } else {
                $newKey = preg_replace('/\s*\(.*?\).*/', '', $key);
                $cleanedData[$newKey] = $value;
            }
        }

        if (!$cleanedData) {
            abort(404, 'Data tidak ditemukan');
        }

        $templatePath = storage_path('app/templates/template_cv.docx');
        if (!file_exists($templatePath)) {
            abort(404, 'Template Word tidak ditemukan.');
        }

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($templatePath);

        $tanggal = date('d-m-Y', strtotime($cleanedData['Timestamp'] ?? '0000-00-00'));
        $templateProcessor->setValue('TANGGAL', $tanggal);
        $templateProcessor->setValue('EMAIL', $cleanedData['EMAIL'] ?? '-');
        $templateProcessor->setValue('NAMA_KATAKANA', $cleanedData['NAMA (KATAKANA)'] ?? '-');
        $templateProcessor->setValue('NAMA_INDONESIA', $cleanedData['NAMA (INDONESIA)'] ?? '-');
        $templateProcessor->setValue('ALAMAT', $cleanedData['ALAMAT'] ?? '-');
        $tanggal_lahir = date('d-m-Y', strtotime($cleanedData['TANGGAL LAHIR'] ?? '0000-00-00'));
        $templateProcessor->setValue('TGL_LAHIR', $tanggal_lahir);
        $templateProcessor->setValue('USIA', $cleanedData['USIA'] ?? '-');

        $jenisKelamin = $cleanedData['KELAMIN'] ?? '';
        if($jenisKelamin == 'LAKI-LAKI') {
            $templateProcessor->setValue("JK", "LK" ?? '');
        } else if($jenisKelamin == 'PEREMPUAN') {
            $templateProcessor->setValue("JK", "PR" ?? '');
        }

        $templateProcessor->setValue('NO_HP_AKTIF', $cleanedData['NO HP AKTIF'] ?? '-');
        $templateProcessor->setValue('AGAMA', $cleanedData['AGAMA'] ?? '-');
        $templateProcessor->setValue('TG', $cleanedData['TINGGI'] ?? '-');
        $templateProcessor->setValue('BRT', $cleanedData['BERAT'] ?? '-');
        $templateProcessor->setValue('GOL', $cleanedData['GOL DARAH'] ?? '-');
        $templateProcessor->setValue('BT_WRN', $cleanedData['BUTA WARNA'] ?? '-');
        $templateProcessor->setValue('MT_KR', $cleanedData['MATA KIRI'] ?? '-');
        $templateProcessor->setValue('MT_KNN', $cleanedData['MATA KANAN'] ?? '-');
        $templateProcessor->setValue('OP', $cleanedData['PERNAH OPERASI'] ?? '-');
        $templateProcessor->setValue('MINUM', $cleanedData['APAKAH SEDANG MINUM'] ?? '-');
        $templateProcessor->setValue('TANGAN', $cleanedData['TANGAN'] ?? '-');
        $templateProcessor->setValue('KEAHLIAN', $this->convertJsonToText($cleanedData['KEAHLIAN']) ?? '[]');
        $templateProcessor->setValue('SIFAT', $this->convertJsonToText($cleanedData['SIFAT/KEPRIBADIAN'] ?? '[]'));
        $templateProcessor->setValue('KELEBIHAN', $this->convertJsonToText($cleanedData['KELEBIHAN'] ?? '[]'));
        $templateProcessor->setValue('KELEMAHAN', $this->convertJsonToText($cleanedData['KELEMAHAN'] ?? '[]'));
        $templateProcessor->setValue('STATUS', $cleanedData['STATUS'] ?? '-');
        $templateProcessor->setValue('MEROKOK', $cleanedData['MEROKOK'] ?? '-');
        $templateProcessor->setValue('P_DALAM', $cleanedData['PENYAKIT DALAM'] ?? '-');
        $templateProcessor->setValue('HOBI', $this->convertJsonToText($cleanedData['HOBI']) ?? '[]');
        $templateProcessor->setValue('MOTIVASI', $this->convertJsonToText($cleanedData['MOTIVASI']) ?? '[]');
        $templateProcessor->setValue('NABUNG', $cleanedData['SELAMA 3 TAHUN DI JEPANG MAU NABUNG BERAPA'] ?? '-');
        $templateProcessor->setValue('PLANNING', $this->convertJsonToText($cleanedData['SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN']) ?? '[]');
        $templateProcessor->setValue('PRNH_TGL', $cleanedData['APAKAH ANDA PERNAH TINGGAL/BEKERJA DI JEPANG'] ?? '-');
        $templateProcessor->setValue('KUALIFIKASI', $cleanedData['JIKA YA, KUALIFIKASI APA YANG ANDA LAMAR'] ?? '-');
        $templateProcessor->setValue('SD', $cleanedData['SEKOLAH DASAR'] ?? '-');
        $templateProcessor->setValue('MSK_SD', $cleanedData['TAHUN MASUK SEKOLAH (SD)'] ?? '-');
        $templateProcessor->setValue('KLR_SD', $cleanedData['TAHUN KELUAR SEKOLAH (SD)'] ?? '-');
        $templateProcessor->setValue('SMP', $cleanedData['SEKOLAH MENENGAH PERTAMA'] ?? '-');
        $templateProcessor->setValue('MSK_SMP', $cleanedData['TAHUN MASUK SEKOLAH (SMP)'] ?? '-');
        $templateProcessor->setValue('KLR_SMP', $cleanedData['TAHUN KELUAR SEKOLAH (SMP)'] ?? '-');
        $templateProcessor->setValue('SMA', $cleanedData['SEKOLAH MENENGAH ATAS/KEJURUAN'] ?? '-');
        $templateProcessor->setValue('MSK_SMAK', $cleanedData['TAHUN MASUK SEKOLAH (SMA/SMK)'] ?? '-');
        $templateProcessor->setValue('KLR_SMAK', $cleanedData['TAHUN KELUAR SEKOLAH (SMA/SMK)'] ?? '-');
        $templateProcessor->setValue('JURUSAN', $cleanedData['JURUSAN'] ?? '-');

        # PENGALAMAN KERJA
        $pengalamanKerja = $cleanedData['PENGALAMAN KERJA'] ?? '';
        $pengalamanList = array_filter(array_map('trim', explode(',', $pengalamanKerja)));

        for ($i = 0; $i < 3; $i++) {
            $idx = $i + 1;
            if (isset($pengalamanList[$i])) {
                $parts = array_map('trim', explode(' - ', $pengalamanList[$i]));
                $templateProcessor->setValue("MASUK_$idx", $parts[0] ?? '');
                $templateProcessor->setValue("KELUAR_$idx", $parts[1] ?? '');
                $templateProcessor->setValue("PT_$idx", $parts[2] ?? '');
                $templateProcessor->setValue("BAG_$idx", $parts[3] ?? '');
            } else {
                $templateProcessor->setValue("MASUK_$idx", '');
                $templateProcessor->setValue("KELUAR_$idx", '');
                $templateProcessor->setValue("PT_$idx", '');
                $templateProcessor->setValue("BAG_$idx", '');
            }
        }

        $templateProcessor->setValue('BHS_ASING', $cleanedData['BAHASA ASING YANG DIKUASAI'] ?? '-');
        $templateProcessor->setValue('JEPANG', $cleanedData['PERNAH KE JEPANG'] ?? '-');

        $templateProcessor->setValue('LUAR_LAIN', $cleanedData['PERNAH LUAR NEGERI LAINNYA'] ?? '');
        $templateProcessor->setValue('NEGARA', $cleanedData['JIKA YA, NEGARA APA'] ?? '');

        $tgl = date('d-m-Y', strtotime($cleanedData['JIKA YA, SEBUTKAN TGL/BLN/THN'] ?? '0000-00-00'));
        $pernah_kejepang = $cleanedData['PERNAH KE JEPANG'];
        if($pernah_kejepang == 'YA') {
            $templateProcessor->setValue("JIKA_YA", $tgl ?? '');
        } else {
            $templateProcessor->setValue("JIKA_YA", "" ?? '');
        }

        $templateProcessor->setValue('KERABAT', $cleanedData['APAKAH ADA KERABAT DI JEPANG'] ?? '-');
        $templateProcessor->setValue('HUB', $cleanedData['APA HUBUNGAN KERABAT YANG DI JEPANG'] ?? '-');
        $templateProcessor->setValue('BLJR', $cleanedData['BELAJAR BAHASA'] ?? '-');
        $templateProcessor->setValue('BUKU', $cleanedData['BUKU YANG DI PAKAI'] ?? '-');
        $templateProcessor->setValue('BAB', $cleanedData['BAB YANG DI PELAJARI'] ?? '-');
        $templateProcessor->setValue('AYAH', $cleanedData['NAMA AYAH'] ?? '-');
        $templateProcessor->setValue('USIA_A', $cleanedData['USIA AYAH'] ?? '-');
        $templateProcessor->setValue('KERJA_A', $cleanedData['PEKERJAAN AYAH'] ?? '-');
        $templateProcessor->setValue('IBU', $cleanedData['NAMA IBU'] ?? '-');
        $templateProcessor->setValue('USIA_I', $cleanedData['USIA IBU'] ?? '-');
        $templateProcessor->setValue('KERJA_I', $cleanedData['PEKERJAAN IBU'] ?? '-');

        # KELUARGA
        $keluargaList = [];

        $ayah = $cleanedData['NAMA AYAH'] ?? '';
        if (!empty($ayah)) {
            $keluargaList[] = [
                'hubungan'  => 'AYAH',
                'nama'      => $ayah,
                'usia'      => $cleanedData['USIA AYAH'] ?? '-',
                'pekerjaan' => $cleanedData['PEKERJAAN AYAH'] ?? '-',
            ];
        }

        $ibu = $cleanedData['NAMA IBU'] ?? '';
        if (!empty($ibu)) {
            $keluargaList[] = [
                'hubungan'  => 'IBU',
                'nama'      => $ibu,
                'usia'      => $cleanedData['USIA IBU'] ?? '-',
                'pekerjaan' => $cleanedData['PEKERJAAN IBU'] ?? '-',
            ];
        }

        $saudaraString = $cleanedData['NAMA SAUDARA'] ?? '';
        $saudaraList = array_filter(array_map('trim', explode(',', $saudaraString)));

        foreach ($saudaraList as $sdr) {
            $parts = array_map('trim', explode(' - ', $sdr));
            $keluargaList[] = [
                'hubungan'  => $parts[0] ?? '',
                'nama'      => $parts[1] ?? '',
                'usia'      => $parts[2] ?? '',
                'pekerjaan' => $parts[3] ?? '',
            ];
        }

        for ($i = 0; $i < 6; $i++) {
            $idx = $i + 1;
            $templateProcessor->setValue("HUB_$idx", $keluargaList[$i]['hubungan'] ?? '');
            $templateProcessor->setValue("NAMA_SDR_$idx", $keluargaList[$i]['nama'] ?? '');
            $templateProcessor->setValue("USIA_$idx", $keluargaList[$i]['usia'] ?? '');
            $templateProcessor->setValue("PKRJ_SDR_$idx", $keluargaList[$i]['pekerjaan'] ?? '');
        }

        $templateProcessor->setValue('PENDAPAT', $cleanedData['PENDAPAT KELUARGA'] ?? '-');
        $templateProcessor->setValue('NO_HP_KEL', $cleanedData['NO HP KELUARGA'] ?? '-');
        $templateProcessor->setValue('MENTOR', $cleanedData['NAMA MENTOR'] ?? '-');
        $templateProcessor->setValue('BAJU', $cleanedData['UKURAN BAJU'] ?? '-');
        $templateProcessor->setValue('SEPATU', $cleanedData['NOMOR SEPATU'] ?? '-');

        $fileName   = 'CV_' . str_replace(' ', '_', $cleanedData['NAMA (INDONESIA)'] ?? 'Unknown') . '.docx';
        $outputPath = storage_path("app/public/{$fileName}");

        $templateProcessor->saveAs($outputPath);

        return response()->file($outputPath, [
            'Content-Type'          => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'Content-Disposition'   => 'attachment; filename="' . $fileName . '"',
        ])->deleteFileAfterSend(true);
    }

    # convert sifat, kelebihan, kelemahan
    function convertJsonToText($arr) {
        if (is_string($arr)) {
            $arr = json_decode($arr, true);
        }

        if (!is_array($arr) || count($arr) === 0) return '';

        $values = array_map(function ($item) {
            $val = $item['value'] ?? $item['VALUE'] ?? null;
            return $val ? strtoupper($val) : null;
        }, $arr);

        $values = array_filter($values);
        return implode(', ', $values);
    }
}
