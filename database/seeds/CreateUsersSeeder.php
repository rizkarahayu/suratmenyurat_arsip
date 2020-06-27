<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Kadep',
               'email'=>'kadep@mail.com',
                'is_admin'=>'kadep',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Sekretaris',
               'email'=>'sekretaris@mail.com',
                'is_admin'=>'sekretaris',
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Juru Beli',
                'email'=>'jurubeli@mail.com',
                 'is_admin'=>'pengadaan',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'SubKontraktor',
                'email'=>'subkontraktor@mail.com',
                 'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. ACE KONSULTAN INDONESIA',
                'email'=>'acekonsultan@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. AGGREKO ENERGY SERVICES INDONESIA',
                'email'=>'aggrekoenergy@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],[
                'name'=>'PT. AHLERS THOENG INDONESIA',
                'email'=>'ahlersthoeng@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],[
                'name'=>'PT. AKASIA SINERGI PRATAMA',
                'email'=>'akasiasinergi@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],[
                'name'=>'PT. AMARTA MULTI SINERGY',
                'email'=>'amartamulti@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],[
                'name'=>'PT. ANGKASA PURA LOGISTIK',
                'email'=>'angkasapura@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],[
                'name'=>'ARCADIA HOTEL BY HORIZON',
                'email'=>'arcadiahotel@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],[
                'name'=>'PT. ARTODA BERSAUDARA',
                'email'=>'artodabersaudara@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],[
                'name'=>'PT. ATLANTIC ANUGRAH METALINDO',
                'email'=>'atlanticanugrah@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],[
                'name'=>'PT. AULIA KARYA PERDANA',
                'email'=>'auliakarya@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],[
                'name'=>'PT. BAKHTERA FREIGHT WORLDIDE',
                'email'=>'bakhterafreight@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. BANK MANDIRI (PERSERO)',
                'email'=>'bankmandiri@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. PUTRA BAROKAH TRANS',
                'email'=>'putrabarokah@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. BAYU SAMUDERA ALAM',
                'email'=>'bayusamudera@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. BIROTIKA SEMESTA',
                'email'=>'birotikasemesta@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. BRINGIN SEJAHTERA MAKMUR',
                'email'=>'bringinsejahterah@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. BTI INDO TEKNO',
                'email'=>'btiindo@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'BULOG SUBDIVRE BOJON',
                'email'=>'bulogsubdivre@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. CAHAYA PUTRA TEKNIK',
                'email'=>'cahayaputra@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. DAYA RAYA CIPTA',
                'email'=>'dayaraya@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. D & B INDONESIA ',
                'email'=>'dnb@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. DENVEGRAHA ',
                'email'=>'denvegraha@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. DEUGRO INDONESIA',
                'email'=>'deugroindonesia@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. ENERGI POWERINDO JAYA',
                'email'=>'energipowerindo@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. FRESNEL PERDANA MANDIRI',
                'email'=>'fresnelperdana@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. GALCTICO SIERE MANDIRI',
                'email'=>'galcticosiere@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. GIFTSTARINDO',
                'email'=>'giftstarindo@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. GLOBALINDO LINTAS SELARAS',
                'email'=>'globalindolintas@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'CV. GYNARA LIMA',
                'email'=>'gynaralima@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. HADINDRA SETIA BARU',
                'email'=>'hadindrasetia@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. IBS INSURANCE BROKING SERVICE',
                'email'=>'ibsinsurance@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. IFS SOLUSI INTEGRASI',
                'email'=>'ifssolusi@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'LAW FIRM DAN KURATOR INDRA',
                'email'=>'lawfirmkurator@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'KAP HABIB BASUNI',
                'email'=>'habibbasuni@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. KAROMAH MARGA SAKTI',
                'email'=>'karomahmarga@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. KOMINDO BIZOLUSI',
                'email'=>'komindobizolusi@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'KOP. KELUARGA BESAR PT. PAL',
                'email'=>'kopptpal@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. LOGISTIC INTERNASIONAL CARGO',
                'email'=>'logisticcargo@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. LOGISTIC ONE SOLUTION',
                'email'=>'logisticone@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. MARINAV',
                'email'=>'marinav@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. MITRA MAPAN MULIA',
                'email'=>'mitramapan@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. MYEXPO KREASI INDONESIA',
                'email'=>'myexpokreasi@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'NATIONAL PUBLISHING & NEWS CORPORATION',
                'email'=>'nationalpublishing@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'CV. PALUGADA BERSAUDARA',
                'email'=>'palugadabersaudara@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. PANTOS LOGISTICS INDONESIA',
                'email'=>'pantoslogistic@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. PELANGI INTERNATIONAL LOGISTICS SURABAYA',
                'email'=>'pelangiinternational@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PERSEK KAP BUDIMAN, WAWAN, PAMUDJI & REKAN',
                'email'=>'persekkapbudiman@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PERUM LKBN ANTARA',
                'email'=>'perumlkbn@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PERTAMINA TRAINING & CONSULTING',
                'email'=>'pertaminatraining@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. PETROLAB SERVICES',
                'email'=>'petrolab@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. PIRANTI UTOMO MAKMUR',
                'email'=>'pirantiutomo@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. PURIPASIFIC INTILAND',
                'email'=>'puripasific@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. RATU JAYA TEHNIK',
                'email'=>'ratujaya@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. SAMUDRA  INDAH MAKMUR',
                'email'=>'samudraindah@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. SAMUDERA SARANA LOGISTIK',
                'email'=>'samuderasarana@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. SHIPCO TRANSPORT INDONESIA',
                'email'=>'shipcotransport@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. SINAR ARTHA SEMESTA',
                'email'=>'sinarartha@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. SINERGI INFORMATIKA SEMEN INDONESIA',
                'email'=>'sinergiinformatika@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. SONOKEMBANG CATERING',
                'email'=>'sonokembang@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. SSE VAN DER HORST INDONESIA ',
                'email'=>'ssevander@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. SURVEYOR INDONESIA',
                'email'=>'surveyorindonesia@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. SURABAYA DADI JAYA',
                'email'=>'surabayadadi@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. SURVINDO BERLIAN SAMUDERA INDONESIA',
                'email'=>'survindoberlian@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. VENETA NUSANTARA',
                'email'=>'venetanusantara@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'YAYASAN MANAJEMEN FORMASI',
                'email'=>'yayasanmanajemen@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'PT. ZIA MAKMUR SEJAHTERA',
                'email'=>'ziamakmur@mail.com',
                'is_admin'=>'subkontraktor',
                'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
