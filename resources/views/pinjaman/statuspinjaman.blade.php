@extends('pinjaman.status')
@section('content')

<h1>Status Pinjaman</h1>
<br>
         <br>
         <table class="table">
         <tr>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Prodi</th>
                                            <th>Alamat KTP</th>
                                            <th>Alamat Saat Ini</th>
                                            <th>Nomor HP</th>
                                            <th>Pekerjaan Ortu</th>
                                            <th>Jumlah Pinjaman</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    @foreach($data_pinjaman as $pinjaman)
                                    <tbody>
                                        <tr>
                                            <td>{{$pinjaman->Nim}}</td>
                                            <td>{{$pinjaman->Nama}}</td>
                                            <td>{{$pinjaman->prodi}}</td>
                                            <td>{{$pinjaman->alamat_ktp}}</td>
                                            <td>{{$pinjaman->alamat_saatini}}</td>
                                            <td>{{$pinjaman->no_hp}}</td>
                                            <td>{{$pinjaman->pekerjaan_ortu}}</td>
                                            <td>{{$pinjaman->jumlah_pinjaman}}</td>
                                            <td>{{$pinjaman->status_pinjaman}}</td>
                                    @endforeach
@endsection