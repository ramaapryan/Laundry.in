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
                            <table class="table table-hover table-striped">
                                    <thead>
                                        <th>No</th>
                                    	<th>Nama</th>
                                    	<th>Alamat</th>
                                    	<th>Berat Sampah</th>
                                    	<th>Tanggal Jemput</th>
                                    	<th>TPS</th>
                                        <th>Total Harga</th>
                                        <th>Satuan</th>
                                        <th>Service</th>
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
                                            <td>{{$data->jenis_laundry}}</td>
                                            <td>{{$data->service}}</td>
                                            @if ($data->status == 'sedang diproses')
                                        	<td><span class="label label-default">Sedang diproses</span></td>
                                            @elseif ($data->status == 'selesai')
                                        	<td><span class="label label-success">Selesai</span></td>
                                            @else
                                        	<td><span class="label label-danger">Ditolak</span></td>
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

