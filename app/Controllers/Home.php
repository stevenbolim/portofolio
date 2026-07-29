<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'profile' => [
                'name'         => 'STEVEN ADITYA PRATAMA',
                'nickname'     => 'Steven',
                'title'        => 'Warehouse Management | Network Engineer & Fiber Optic Specialist | Front-End Web & UI/UX Developer',
                'phone'        => '085810007432',
                'email'        => 'stevenaditya55@gmail.com',
                'linkedin'     => 'https://www.linkedin.com/in/steven-aditya',
                'github'       => 'https://github.com/stevenbolim',
                'google_sites' => 'https://sites.google.com/mahasiswa.undira.ac.id/stevenadityapratama/home',
                'address'      => 'Asrama Brimob Cipinang Atas, Cipinang, Pulogadung, Jakarta Timur, 13240',
                'summary'      => 'Lulusan S1 Teknik Informatika dari Universitas Dian Nusantara dengan rekam jejak teruji dalam infrastruktur telekomunikasi, pemeliharaan jaringan serat optik (fiber optic), manajemen aset dan material pergudangan, serta pengembangan Front-End Web dan UI/UX. Pemimpin yang aktif, bekerja keras, serta berdedikasi dalam bidang rekayasa web dan Machine Learning.',
                'status'       => 'Terbuka untuk Peluang Kerja & Proyek Jointer Fiber Optik / FTTH, Pergudangan, & Web Development'
            ],

            'stats' => [
                ['label' => 'Pengalaman Kerja', 'value' => '5+ Tahun'],
                ['label' => 'Proyek Utama', 'value' => '30+ ODC / 10 Gudang'],
                ['label' => 'Program Studi', 'value' => 'S1 Teknik Informatika'],
                ['label' => 'Target SLA & Fix Rate', 'value' => '95% - 100%']
            ],

            'cv_images' => [
                'page1' => base_url('assets/img/cv_page_1.jpg'),
                'page2' => base_url('assets/img/cv_page_2.jpg')
            ],

            'skills' => [
                'web_dev' => [
                    'category' => 'Pengembangan Web & Perangkat Lunak',
                    'icon'     => 'fa-code',
                    'items'    => [
                        ['name' => 'PHP'],
                        ['name' => 'CodeIgniter 4'],
                        ['name' => 'HTML5'],
                        ['name' => 'CSS3 / Modern UI'],
                        ['name' => 'UI/UX Design'],
                        ['name' => 'JavaScript'],
                        ['name' => 'Python'],
                        ['name' => 'Machine Learning (Basics)']
                    ]
                ],
                'network' => [
                    'category' => 'Jaringan & Infrastruktur Optic',
                    'icon'     => 'fa-network-wired',
                    'items'    => [
                        ['name' => 'Jointer Fiber Optik / FTTH'],
                        ['name' => 'Troubleshooting Jaringan'],
                        ['name' => 'Infrastruktur ODC & ODP'],
                        ['name' => 'GPON OLT & Cisco ASR 920'],
                        ['name' => 'Manajemen Cabling Fiber Optic'],
                        ['name' => 'Integrasi SFP & Sistem Alarm']
                    ]
                ],
                'tools' => [
                    'category' => 'Software & Alat Produktivitas',
                    'icon'     => 'fa-toolbox',
                    'items'    => [
                        ['name' => 'Microsoft Excel (Advanced/Formula/Pivot)'],
                        ['name' => 'Microsoft Word'],
                        ['name' => 'Microsoft PowerPoint'],
                        ['name' => 'Google Workspace'],
                        ['name' => 'Git & GitHub']
                    ]
                ],
                'management' => [
                    'category' => 'Manajemen Gudang & Soft Skills',
                    'icon'     => 'fa-users-gear',
                    'items'    => [
                        ['name' => 'Manajemen Project / Capstone Project'],
                        ['name' => 'Manajemen Aset & Material Gudang'],
                        ['name' => 'Kepemimpinan (Leadership)'],
                        ['name' => 'Problem Solving'],
                        ['name' => 'Kerja Sama Tim (Team Work)'],
                        ['name' => 'Adaptif'],
                        ['name' => 'Public Speaking'],
                        ['name' => 'Negosiasi']
                    ]
                ]
            ],

            'featured_projects' => [
                [
                    'id'          => 'chatbot-qc-ticket',
                    'title'       => 'Chatbot Ticket & Quality Control Material Gudang',
                    'company'     => 'PT. Telkom Akses',
                    'period'      => '2024 - 2026',
                    'role'        => 'Developer & System Integrator',
                    'image'       => base_url('assets/img/projects/chatbot_qc_ticket.png'),
                    'tag'         => 'Automation & Telegram Bot',
                    'description' => 'Sistem otomasi bot notifikasi & laporan harian untuk pendataan tiket gangguan jaringan serta Quality Control (QC) material pergudangan (INWH, INSTOK, SCRAP) secara real-time.',
                    'processes'   => [
                        'Pengembangan bot notifikasi otomatis terhubung ke database inventaris pergudangan',
                        'Integrasi rekap harian material masuk/keluar (Tiang, ODP, Closure, Dropcore) via pesan instant',
                        'Fitur pengecekan status tiket & pelaporan otomatis hasil QC material fisik vs sistem'
                    ],
                    'results'     => 'Mempercepat verifikasi QC material gudang dan meningkatkan transparansi laporan rekap harian bagi tim operasional & manajemen.',
                    'technologies'=> ['Telegram Bot API', 'PHP', 'Database Integration', 'Automation Workflow']
                ],
                [
                    'id'          => 'chatbot-compy',
                    'title'       => 'Chatbot Compy (Chatbot AI Pembelajaran Komputer)',
                    'company'     => 'Universitas Dian Nusantara',
                    'period'      => '2024',
                    'role'        => 'AI & Front-End Developer',
                    'image'       => base_url('assets/img/projects/chatbot_compy.png'),
                    'tag'         => 'AI Chatbot & Education',
                    'description' => 'Aplikasi chatbot AI interaktif (Compy) yang dirancang khusus sebagai asisten interaktif pembelajaran ilmu komputer dan dasar pemrograman.',
                    'processes'   => [
                        'Desain karakter & antarmuka pembelajaran interaktif yang ramah dan menarik',
                        'Pengembangan engine pemrosesan bahasa alami (NLP) untuk menjawab pertanyaan modul komputer',
                        'Pengujian efektivitas media pembelajaran komputer berbasis dialog AI interaktif'
                    ],
                    'results'     => 'Membantu pengguna dan mahasiswa memahami konsep dasar komputer serta pemrograman melalui antarmuka dialog AI yang intuitif.',
                    'technologies'=> ['AI / NLP Engine', 'Web Interface', 'UI/UX Design', 'Interactive Learning']
                ],
                [
                    'id'          => 'pass-mobile',
                    'title'       => 'Desain Prototipe Aplikasi Mobile PASS (Parent Application Student at School)',
                    'company'     => 'PT. Nitoza Indonesia Mandiri',
                    'period'      => 'Sep 2018 - Nov 2018',
                    'role'        => 'UI/UX Designer',
                    'image'       => base_url('assets/img/projects/pass_prototype.png'),
                    'tag'         => 'UI/UX Mobile Design',
                    'description' => 'Desain prototipe aplikasi mobile untuk menunjang pendidikan siswa/i, memudahkan media pembelajaran bagi tenaga pengajar, serta memungkinkan orang tua/wali mengawasi perkembangan pendidikan anak-anak mereka.',
                    'processes'   => [
                        'Penelitian pasar & analisis kebutuhan pengguna (Siswa, Guru, Orang Tua)',
                        'Pengembangan konsep awal & arsitektur sistem pembelajaran',
                        'Desain antarmuka pengguna (UI) & pengalaman pengguna (UX) interaktif'
                    ],
                    'results'     => 'Peluncuran desain prototipe yang siap diimplementasikan, meningkatkan efisiensi alur pengguna untuk pengajar sebesar 25% dan tingkat kepuasan uji pengguna hingga 85%.',
                    'technologies'=> ['UI/UX Design', 'Wireframing', 'Prototyping', 'User Research']
                ],
                [
                    'id'          => 'pln-odc',
                    'title'       => 'Pembangunan Infrastruktur Jaringan ODC (Optical Distribution Cabinet)',
                    'company'     => 'PT. PLN Icon Plus',
                    'period'      => 'Jun 2019 - Jun 2020',
                    'role'        => 'Network Infrastructure Engineer',
                    'image'       => base_url('assets/img/projects/pln_odc_infrastructure.png'),
                    'tag'         => 'Telecommunications & Fiber Optics',
                    'description' => 'Pembangunan ODC (Optical Distribution Cabinet) di 30 titik yang tersebar dari Provinsi Banten hingga Jabodetabek guna menunjang ekspansi layanan internet broadband Iconnet.',
                    'processes'   => [
                        'Rapat koordinasi dengan pihak ketiga membahas rencana pembangunan & Rancangan Anggaran Biaya (RAB)',
                        'Mengurus surat izin pembangunan & kesepakatan lisensi dengan Manager Area PT. PLN (Persero)',
                        'Survey lokasi titik ODC memperhatikan estetika, aksesibilitas & keamanan',
                        'Membuat rencana proyek, pemetaan jalur optic, dan rincian kebutuhan material',
                        'Supervisi (Pengawas Pekerjaan) pembangunan fisik ODC oleh mitra vendor',
                        'Pengerjaan Quality Control (QC) melingkupi dudukan, kabinet, tes kedap air, kelistrikan, power supply, baterai, AC pendingin, dan grounding listrik',
                        'Pemasangan & konfigurasi GPON OLT, Router CISCO ASR-920, serta SFP GLCT terhubung ke alarm sistem',
                        'Distribusi Fiber Optic: OLT -> EA (Equipment Access) -> OA (Optical Access) via Patchcord'
                    ],
                    'results'     => 'Terbangun ODC di 30 titik strategis: Area Anyer, Malingping, Pandeglang, Saketi, Serang, Labuan, Tangerang & Tangsel, Jakarta West/North/Central/South/East, Bekasi & Cikarang, Bogor, dan Depok.',
                    'technologies'=> ['Optical Distribution Cabinet', 'GPON OLT', 'Cisco ASR 920', 'SFP Integration', 'QC Testing', 'Project Supervision']
                ],
                [
                    'id'          => 'telkom-maintenance',
                    'title'       => 'Maintenance & Troubleshooting Layanan Broadband Indihome',
                    'company'     => 'PT. Telkom Akses',
                    'period'      => 'Dec 2020 - Jul 2024',
                    'role'        => 'Fiber Optic Maintenance Technician',
                    'image'       => base_url('assets/img/projects/telkom_maintenance.png'),
                    'tag'         => 'Field Maintenance & Networking',
                    'description' => 'Maintenance dan troubleshooting jaringan internet serat optik pada Divisi Assurance & Maintenance Telkom Akses Jakarta Timur (Kantor Telkom Area Rawamangun).',
                    'processes'   => [
                        'Maintenance rutin ODP (Optical Distribution Panel) & ODC (Optical Distribution Cabinet), pemeliharaan dan perapihan cabling management',
                        'Troubleshooting jaringan di rumah pelanggan, gedung high-rise, dan lapangan dengan perbaikan, peningkatan, dan perawatan cepat',
                        'Input hasil pekerjaan real-time via website perusahaan serta pengendalian target KPI harian'
                    ],
                    'results'     => 'Pencapaian Customer Experience terbaik dan pemenuhan 100% KPI di Kantor Telkom Area Rawamangun guna menunjang target perusahaan Platinum se-Indonesia (Fix rate 95%, 50+ ODP/ODC terpelihara bulanan).',
                    'technologies'=> ['Fiber Optic Cable Splicing', 'OTDR / OPM Measurement', 'ODP/ODC Cabling', 'SLA Target Management', 'Web KPI Input']
                ],
                [
                    'id'          => 'telkom-warehouse',
                    'title'       => 'Staf Admin Pergudangan Refurbish Material Telkom Se-Jakarta Timur',
                    'company'     => 'PT. Telkom Akses',
                    'period'      => 'Aug 2024 - Mar 2026',
                    'role'        => 'Warehouse Refurbish Staff',
                    'image'       => base_url('assets/img/projects/telkom_warehouse_1.png'),
                    'image_extra' => base_url('assets/img/projects/telkom_warehouse_2.png'),
                    'tag'         => 'Manajemen Aset & Pergudangan',
                    'description' => 'Pengelolaan data & aset pergudangan refurbish center material jaringan (kabel FO, tiang, ODP/ODC). Divisi Shared Service Telkom Akses Wilayah Usaha Jakarta Timur.',
                    'processes'   => [
                        'Mendata barang & material refurbish keluar-masuk harian',
                        'Melakukan inspeksi fisik & Quality Control material refurbish (bebas cacat)',
                        'Memastikan 100% kesesuaian data antara sistem inventaris dengan fisik asli',
                        'Monitoring stok & pemakaian material pada 10 area warehouse di Jakarta Timur',
                        'Penyusunan laporan harian & pelaksanaan stok opname berkala'
                    ],
                    'results'     => 'Percepatan efisiensi transaksi barang/material dan pemakaian kembali (refurbish) sehingga menekan operating cost serta menambah revenue perusahaan.',
                    'technologies'=> ['Manajemen Pergudangan', 'Inventory Stock Opname', 'Data Quality Control', 'Microsoft Excel Pivot', 'Operasional Pergudangan']
                ]
            ],

            'experiences' => [
                [
                    'company'  => 'PT. Telkom Akses',
                    'location' => 'Jakarta Timur',
                    'period'   => 'Agu 2024 - Mar 2026',
                    'role'     => 'Warehouse Refurbish Staff',
                    'tasks'    => [
                        'Mengelola alur keluar-masuk aset dan material gudang jaringan harian, termasuk kabel serat optik, tiang, dan unit ODP/ODC.',
                        'Melakukan inspeksi fisik ribuan material setiap bulan untuk memastikan akurasi data 100% antara sistem web dan stok fisik.',
                        'Memantau tingkat stok pergudangan dan penggunaan material refurbish pada 10 hub gudang wilayah Jakarta Timur.'
                    ]
                ],
                [
                    'company'  => 'PT. Telkom Akses',
                    'location' => 'Jakarta Timur',
                    'period'   => 'Des 2020 - Jul 2024',
                    'role'     => 'Fiber Optic Maintenance Technician',
                    'tasks'    => [
                        'Memelihara 50+ unit ODP/ODC setiap bulan melalui tindakan preventif untuk menekan angka downtime jaringan sebesar 15-20%.',
                        'Menyelesaikan 5-10 masalah jaringan serat optik kompleks setiap hari di perumahan dan gedung bertingkat dengan fix rate 95%.',
                        'Mencatat 10+ laporan pekerjaan harian secara real-time ke portal web perusahaan untuk mencapai target SLA 100%.'
                    ]
                ],
                [
                    'company'  => 'PT. PLN Icon Plus',
                    'location' => 'Jakarta / Banten',
                    'period'   => 'Jun 2019 - Jun 2020',
                    'role'     => 'Network Infrastructure Engineer',
                    'tasks'    => [
                        'Berkoordinasi dengan pimpinan untuk mengawal 30 lokasi proyek sesuai jadwal dan mengurus perizinan dengan Manager Area PT PLN.',
                        'Melakukan supervisi pekerjaan vendor dan Quality Control (QC) penuh pada 30+ unit ODC sesuai standar keselamatan kerja.',
                        'Menginstall dan mengonfigurasi GPON OLT serta Router Cisco ASR 920 sambil menyusun laporan progres harian.'
                    ]
                ],
                [
                    'company'  => 'PT. Nitoza Indonesia Mandiri',
                    'location' => 'Tangerang Selatan',
                    'period'   => 'Sep 2018 - Nov 2018',
                    'role'     => 'UI/UX Designer Intern',
                    'tasks'    => [
                        'Merancang 20+ wireframe dan konsep desain untuk meningkatkan efisiensi alur pengguna bagi tenaga pengajar sebesar 25%.',
                        'Mendesain antarmuka UI/UX end-to-end aplikasi pemantauan perkembangan siswa (PASS) dengan tingkat kepuasan uji pengguna mencapai 85%.',
                        'Membangun prototipe interaktif untuk mempercepat siklus revisi pengembangan aplikasi sebesar 30%.'
                    ]
                ]
            ],

            'education' => [
                [
                    'institution' => 'Universitas Dian Nusantara',
                    'location'    => 'Jakarta',
                    'period'      => 'Sep 2022 - Jul 2026',
                    'degree'      => 'S1 Teknik Informatika (S.Kom)',
                    'score'       => 'Program Studi Teknik Informatika',
                    'details'     => [
                        'Wakil Ketua Himpunan Mahasiswa Teknik Informatika (HIMTI)',
                        'Asisten Laboratorium & Instruktur Jaringan pada Program Kegiatan Prodi Teknik Informatika',
                        'Pengabdian Masyarakat di Karang Taruna Unit 04 & 05 Palmerah'
                    ]
                ],
                [
                    'institution' => 'SMK Telkom Jakarta',
                    'location'    => 'Jakarta',
                    'period'      => 'Jul 2016 - Mei 2019',
                    'degree'      => 'Sekolah Menengah Kejuruan - Teknik Komputer Jaringan (TKJ)',
                    'score'       => 'Jurusan Teknik Komputer Jaringan',
                    'details'     => [
                        'Sekretaris Jenderal Kerohanian Islam (ROHIS)',
                        'Koordinator Kerohanian Pengurus OSIS',
                        'Asisten Laboratorium & Instruktur Jaringan Jurusan TKJ'
                    ]
                ]
            ],

            'organization' => [
                [
                    'organization' => 'Himpunan Mahasiswa Teknik Informatika (HIMTI)',
                    'role'         => 'Wakil Ketua Umum',
                    'period'       => 'Agu 2024 - Agu 2025',
                    'details'      => 'Memimpin 40+ panitia untuk menyelenggarakan seminar & workshop dengan 500+ peserta. Mengajar praktikum jaringan untuk 100+ mahasiswa (tingkat kelulusan 90%).'
                ],
                [
                    'organization' => 'Karang Taruna Unit 04 & 05',
                    'role'         => 'Ketua Divisi Humas & IT',
                    'period'       => 'Agu 2016 - Agu 2024',
                    'details'      => 'Mengembangkan 10+ program kepemudaan & sosial (90% tingkat kepuasan warga). Merancang 50+ pamflet & banner digital meningkatkan engagement 40%.'
                ],
                [
                    'organization' => 'Remaja Musholla',
                    'role'         => 'Ketua Umum',
                    'period'       => 'Jan 2020 - Des 2022',
                    'details'      => 'Memimpin 20+ pengurus dalam mengoperasikan kegiatan keagamaan dengan 300+ jemaah. Memelopori program bakti sosial penyaluran bantuan ke 200+ keluarga.'
                ],
                [
                    'organization' => 'Kerohanian Islam (ROHIS)',
                    'role'         => 'Sekretaris Jenderal',
                    'period'       => 'Agu 2016 - Agu 2018',
                    'details'      => 'Mengelola administrasi dan merancang 15+ proposal kegiatan sekolah dengan tingkat persetujuan 100% dari Kepala Sekolah.'
                ],
                [
                    'organization' => 'Organisasi Siswa Intra Sekolah (OSIS)',
                    'role'         => 'Koordinator Divisi Kerohanian',
                    'period'       => 'Agu 2016 - Agu 2018',
                    'details'      => 'Merencanakan dan mengeksekusi 10+ program kerja organisasi tepat waktu, mengoordinasikan 10+ ekstrakurikuler untuk 500+ peserta.'
                ]
            ],

            'publications' => [
                [
                    'title'       => 'Optimalisasi Jaringan Komputer melalui Pelatihan Cramping Kabel bagi Teknisi Komunitas',
                    'journal'     => 'Lentera Pengabdian (Jurnal Lentera Nusantara)',
                    'volume'      => 'Vol. 3 No. 04 (Oktober 2025)',
                    'year'        => '2025',
                    'authors'     => 'Bias Yulisa Geni, Anita Ratnasari, Sri Dianing Asri, Steven Aditya Pratama',
                    'institution' => 'Universitas Dian Nusantara',
                    'doi'         => 'https://doi.org/10.59422/lp.v3i04.1245',
                    'url'         => 'https://jurnal.lenteranusa.id/index.php/lp/article/view/1245',
                    'pdf_url'     => 'https://jurnal.lenteranusa.id/index.php/lp/article/view/1245/857',
                    'type'        => 'Jurnal Pengabdian Masyarakat (Abdimas)',
                    'keywords'    => ['Cramping kabel', 'RJ-45', 'Jaringan komputer', 'Teknisi komunitas', 'Pengabdian kepada masyarakat'],
                    'abstract'    => 'Kegiatan pengabdian kepada masyarakat ini bertujuan untuk memberdayakan teknisi komunitas lokal melalui peningkatan keterampilan teknis dalam pemasangan kabel jaringan komputer, khususnya teknik cramping kabel menggunakan konektor RJ-45. Permasalahan utama yang dihadapi teknisi adalah masih rendahnya pemahaman dan keterampilan dalam melakukan cramping kabel sesuai standar, sehingga berdampak pada kualitas jaringan yang kurang optimal, seperti koneksi lambat, tidak stabil, dan rentan mengalami gangguan. Kondisi tersebut dapat menghambat pengembangan infrastruktur jaringan yang dibutuhkan oleh sektor pendidikan, UMKM, pemerintahan, dan layanan masyarakat lainnya. Metode pelaksanaan kegiatan dilakukan melalui pelatihan terstruktur yang mencakup penyampaian materi dasar jaringan komputer, pengenalan alat dan bahan, praktik cramping kabel, penerapan standar susunan kabel, serta pengujian koneksi menggunakan alat tester jaringan. Selain itu, kegiatan ini juga dilengkapi dengan pendampingan teknis agar peserta mampu menerapkan keterampilan yang diperoleh dalam pekerjaan sehari-hari. Hasil yang diharapkan dari kegiatan ini adalah meningkatnya kompetensi teknisi dalam melakukan instalasi kabel jaringan secara benar, meningkatnya kualitas jaringan komputer lokal, berkurangnya gangguan konektivitas, serta meningkatnya peluang kerja dan proyek bagi teknisi komunitas. Dengan demikian, kegiatan ini diharapkan dapat memberikan kontribusi nyata terhadap penguatan infrastruktur jaringan komputer yang andal serta mendukung perkembangan pendidikan, pelayanan publik, dan pertumbuhan ekonomi lokal.'
                ]
            ],

            'achievements' => [
                [
                    'year'    => '2025',
                    'title'   => 'Optimalisasi Jaringan Komputer melalui Pelatihan Cramping Kabel bagi Teknisi Komunitas',
                    'issuer'  => 'Lentera Pengabdian (Jurnal Lentera Nusantara) | DOI: 10.59422/lp.v3i04.1245',
                    'type'    => 'Publikasi Jurnal Ilmiah',
                    'icon'    => 'fa-book-open'
                ],
                [
                    'year'    => '2024',
                    'title'   => 'Juara 3 - Indonesian Chatbot Championship Challenge',
                    'issuer'  => 'Terra AI',
                    'type'    => 'Kompetisi Chatbot',
                    'icon'    => 'fa-trophy'
                ],
                [
                    'year'    => '2018',
                    'title'   => 'Top 10 Finalist - Essay Competition SMA Jabodetabek',
                    'issuer'  => 'Kementerian Pendidikan dan Kebudayaan (Kemendikbud RI)',
                    'type'    => 'Kompetisi Esai',
                    'icon'    => 'fa-award'
                ],
                [
                    'year'    => '2023',
                    'title'   => 'Sertifikasi Kompetensi Bidang Aktivitas Telekomunikasi Dengan Kabel',
                    'issuer'  => 'BNSP (Badan Nasional Sertifikasi Profesi)',
                    'type'    => 'Sertifikasi Profesi Nasional',
                    'icon'    => 'fa-certificate'
                ],
                [
                    'year'    => '2022',
                    'title'   => 'Sertifikasi Kompetensi Bidang Telekomunikasi Jointer',
                    'issuer'  => 'BNSP (Badan Nasional Sertifikasi Profesi)',
                    'type'    => 'Sertifikasi Profesi Nasional',
                    'icon'    => 'fa-certificate'
                ],
                [
                    'year'    => '2022',
                    'title'   => 'Diklat 3-in-1 Bidang Telematika',
                    'issuer'  => 'Kementerian Perindustrian (Kemenperin RI)',
                    'type'    => 'Sertifikasi Diklat',
                    'icon'    => 'fa-certificate'
                ],
                [
                    'year'    => '2025',
                    'title'   => 'Networking Device and Initial Configuration',
                    'issuer'  => 'Cisco Networking Academy',
                    'type'    => 'Kursus Jaringan',
                    'icon'    => 'fa-graduation-cap'
                ],
                [
                    'year'    => '2023',
                    'title'   => 'Python Essentials 1 & 2',
                    'issuer'  => 'Cisco Networking Academy',
                    'type'    => 'Kursus Pemrograman',
                    'icon'    => 'fa-laptop-code'
                ],
                [
                    'year'    => '2024',
                    'title'   => 'Computer Hardware Basics',
                    'issuer'  => 'Cisco Networking Academy',
                    'type'    => 'Kursus Hardware Komputer',
                    'icon'    => 'fa-microchip'
                ],
                [
                    'year'    => '2024',
                    'title'   => 'Networking Basics',
                    'issuer'  => 'Cisco Networking Academy',
                    'type'    => 'Kursus Jaringan',
                    'icon'    => 'fa-network-wired'
                ],
                [
                    'year'    => '2024',
                    'title'   => 'Database Programming with SQL',
                    'issuer'  => 'Oracle Academy',
                    'type'    => 'Kursus Database',
                    'icon'    => 'fa-database'
                ],
                [
                    'year'    => '2024',
                    'title'   => 'Database Design',
                    'issuer'  => 'Oracle Academy',
                    'type'    => 'Kursus Database',
                    'icon'    => 'fa-database'
                ]
            ]
        ];

        return view('portfolio', $data);
    }

    public function submitContact()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name'    => 'required|min_length[3]',
            'email'   => 'required|valid_email',
            'subject' => 'required|min_length[3]',
            'message' => 'required|min_length[10]'
        ]);

        if (! $validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'status' => 'error',
                'errors' => $validation->getErrors()
            ]);
        }

        return $this->response->setJSON([
            'status'  => 'success',
            'message' => 'Terima kasih! Pesan Anda telah berhasil dikirim ke Steven Aditya Pratama.'
        ]);
    }
}
