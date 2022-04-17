@extends('layout.navlengkap')
@section('content')
@parent
        <div class="content" style="margin-top:-20px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Atur Jadwal Penjemputan</h4>
                            </div>
                            <div class="content">
                                <form action="{{ route('proses-validasi') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                                                @error('nama')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control"id="alamat" name="alamat" placeholder="Alamat Lengkap">
                                                @error('alamat')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Berat Laundry</label>
                                                <input type="text" class="form-control" id="berat_sampah" name="berat_sampah" placeholder="(dalam kg)">
                                                @error('berat_sampah')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal Jemput</label>
                                                <input type="date" class="form-control"  id="tanggal_jemput" name="tanggal_jemput">
                                                @error('tanggal_jemput')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tps">Tempat Laundry</label>
                                                <select class="form-control" id="id_petugas" name="id_petugas">
                                                  <option>-- Pilih Laundry terdekat --</option>
                                                  @foreach ($petugas as $item)
                                                  <option value="<?= $item->id_petugas ?>"><?= $item->nama_tps ?></option>
                                                 @endforeach
                                                </select>
                                              </div>
                                        </div>
                                        @error('id_petugas')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <fieldset class="checkbox-group">
  <legend class="checkbox-group-legend">JENIS LAUNDRY</legend>
  <div class="checkbox">
    <label class="checkbox-wrapper">
      <input type="checkbox" class="checkbox-input" id="jenis_laundry" name="jenis_laundry" value="Pakaian" />
      <span class="checkbox-tile">
        <span class="checkbox-icon">
          <img src="{{asset('/img/pakaian.png')}}" width="37px" height="37px">
        </span>
        <span class="checkbox-label">Pakaian</span>
      </span>
    </label>
  </div>
  <br>
  <div class="checkbox">
    <label class="checkbox-wrapper">
      <input type="checkbox" class="checkbox-input" id="jenis_laundry" name="jenis_laundry" value="Selimut" />
      <span class="checkbox-tile">
        <span class="checkbox-icon">
          <img src="{{asset('/img/selimut.png')}}" width="37px" height="37px">
        </span>
        <span class="checkbox-label">Selimut</span>
      </span>
    </label>
  </div>
  <br>
  <div class="checkbox">
    <label class="checkbox-wrapper">
      <input type="checkbox" class="checkbox-input" id="jenis_laundry" name="jenis_laundry" value="Sprei" />
      <span class="checkbox-tile">
        <span class="checkbox-icon">
            <img src="{{asset('/img/sprei.png')}}" width="37px" height="37px">
        </span>
        <span class="checkbox-label">Sprei</span>
      </span>
    </label>
  </div>
  <br>
  <div class="checkbox">
    <label class="checkbox-wrapper">
      <input type="checkbox" class="checkbox-input" id="jenis_laundry" name="jenis_laundry" value="Gorden" />
      <span class="checkbox-tile">
        <span class="checkbox-icon">
        <img src="{{asset('/img/gorden.png')}}" width="37px" height="37px">
        </span>
        <span class="checkbox-label">Gorden</span>
      </span>
    </label>
  </div>
  <br>
  <div class="checkbox">
    <label class="checkbox-wrapper">
      <input type="checkbox" class="checkbox-input" id="jenis_laundry" name="jenis_laundry" value="Karpet" />
      <span class="checkbox-tile">
        <span class="checkbox-icon">
        <img src="{{asset('/img/carpet.png')}}" width="37px" height="37px">
        </span>
        <span class="checkbox-label">Karpet</span>
      </span>
    </label>
  </div>
</fieldset>
<br>
<div class="checkbox-group">
<legend class="checkbox-group-legend">JENIS SERVICE</legend>
<input type="radio" class="btn-check" name="service" id="express" value="Express" autocomplete="off">
<label class="btn btn-success" for="express">Express</label>
<input type="radio" class="btn-check" name="service" id="non-express" value="Non Express" autocomplete="off">
<label class="btn btn-danger" for="non-express">Non Express</label>
</div>

                                    <button type="submit" class="btn btn-success btn-fill pull-right">Kirim</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

            </div>
        </div>
@endsection

