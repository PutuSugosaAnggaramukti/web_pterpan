@extends('beasiswa.status')
@section('content')

<h1>Status Beasiswa</h1>
<br>
         <br>
         <table class="table">
         <tr>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>IPS</th>
                                            <th>Periode</th>
                                            <th>Transkrip</th>
                                            <th>Surat Rekomendasi</th>
                                            <th>Status Beasiswa</th>
                                           
                                            
                                        </tr>
                                  
                                    @foreach($input_beasiswa as $inputbeasiswa)
                                    <tbody>
                                        <tr>
                                            <td>{{$inputbeasiswa->nama}}</td>
                                            <td>{{$inputbeasiswa->nim}}</td>
                                            <td>{{$inputbeasiswa->ips}}</td>
                                            <td>{{$inputbeasiswa->periode}}</td>
                                            <td>{{$inputbeasiswa->transkrip}}</td>
                                            <td>{{$inputbeasiswa->surat_rekomen}}</td>
                                            <td>{{$inputbeasiswa->status_beasiswa}}</td>
                                            <td>
                                    @endforeach
@endsection