<div class="col-12 col-md-6 col-lg-4">

    <div class="card card-warning">
      <div class="card-header">
        <h4>Dokumen Persyaratan</h4>
      </div>
      <div class="card-body">
            <ul class="list-group">
                 @forelse ($doc as $doc)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$doc['nama_berkas']}}
                <a href="{{asset('storage/doc/'.$doc['alamat_berkas'])}}"><span class="badge badge-warning badge-pill">Unduh</span></a>
                </li>
                @empty
                <span class="badge badge-warning">Santri Belum Unggah Dokumen</span>
                @endforelse
               
            </ul>

            
        @if ($statusDaftar == 1)
        <br>
          <form wire:submit.prevent="savekonfirmasi" >
            
            <div class="form-group col-md-12">
                <label for="konfirmasi"> <a  class="text-success mb-2">Konfirmasi Dokumen</a></label>
                <select id="konfirmasi"  wire:model.debounce.500ms="konfirmasi" name="" class="form-control @error('konfirmasi') is-invalid @enderror">
                <option value="" selected >Pilih...</option>
                <option value="1" >Terima</option>
                    <option value="2">Tolak</option>
                </select>
                @error('sekolah_asal')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            
            </div>

            <div class="form-group col-md-12">
                
                <div class="text-md-right">
                    <button  type="submit" class="btn btn-success">Konfirmasi</button>
                </div>
        </div>
            
    </form>
        @endif
    </div>
      </div>
        
</div>