@extends('layouts.main')
<title>HIMATIKA | About</title>

@section('container')
<link rel="stylesheet" href="css/style.css">

    <div class="badan">
        <h1 class="text-center mb-4">VISI & MISI</h1>
        <div id="gsSeparatorContent">
            <div class="gsSeparatorContentLeft">
               <hr>
            </div>
            <div class="gsSeparatorContentCenter"></div>
            <div class="gsSeparatorContentRight">
               <hr>
            </div>
         </div>
        <h3 class="text-center mb-4">VISI

        </h3>
        <p class="text-center mb-4">
            Menjadikan HIMATIKA FKIP Untirta yang adaptif sebagai wadah advokasi dan pengembangan potensi,
            yang kontributif dengan mengutamakan kebersamaan dalam rangka mendorong cita-cita jurusan Pendidikan Matematika FKIP Untirta.
        </p>
        <div class="gsSeparatorContentLeft">
            <hr>
         </div>
        <h3 class="text-center mb-4">MISI

        </h3>
        <ul >
            <p>1. Menumbuhkan dan memelihara rasa kebersamaan keluarga besar mahasiswa Pendidikan Matematika FKIP Untirta.</p>
            <p>2. Memaksimalkan kinerja HIMATIKA FKIP Untirta melalui peningkatan koordinasi departemen/biro.</p>
            <p>3. Menghimpun dan menyalurkan aspirasi mahasiswa pendidikan matematika FKIP Untirta.</p>
            <p>4. Menyediakan wadah bagi mahasiswa untuk mengembangkan potensi akademik dan non-akademik.</p>
            <p>5. Meningkatkan Eksitensi dengan lembaga atau organisasi lain dan pengabdian kepada masyarakat.</p>
            <p>6. Mendukung visi dan tujuan jurusan Pendidikan Matematika FKIP Untirta.</p>
        </ul>
    </div>

@endsection

{{-- $validateData = $request->validate([
    'Nama' => 'requared|max:250',
    'NIM' =>'requared|max:500',
    'Email' => 'requared',
    'Jabatan' => 'requared'
]); --}}
