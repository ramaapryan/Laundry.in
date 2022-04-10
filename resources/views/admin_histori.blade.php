@extends('layout.navlengkap')
@section('content')
@parent
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        {{-- <div class="card"> --}}
                            <div class="header">
                                <h4 class="title">Histori Transaksi Laundry</h4>
                            </div>
                            <div class="clearfix"></div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-condensed">
                                    <thead>
                                        <th>No</th>
                                    	<th>Nama</th>
                                    	<th>Alamat</th>
                                    	<th>Berat Laundry</th>
                                    	<th>Tanggal Jemput</th>
                                    	<th>Outlet Laundry</th>
                                    	<th>Status</th>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;?>
                                        @foreach ($user as $data)
                                        <tr>
                                        	<td>{{++$no}}</td>
                                        	<td>{{$data->nama}}</td>
                                        	<td>{{$data->alamat}}</td>
                                        	<td>{{$data->berat_sampah}} kg</td>
                                        	<td>{{$data->tanggal_jemput}}</td>
                                        	<td>{{$data->nama_tps}}</td>
                                            <td>{{$data->berat_sampah*5000}}</td>
                                            @if ($data->status == 'sedang diproses')
                                        	<td><span>Sedang diproses</span></td>
                                            @elseif ($data->status == 'selesai')
                                        	<td><span >Selesai</span></td>
                                            @else
                                        	<td><span>Ditolak</span></td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
@endsection

