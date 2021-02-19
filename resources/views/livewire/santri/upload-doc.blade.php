<div class="panel">
    <div class="col-md-12">
	    <div class="panel-heading">
    		<h2 class="panel-title">Lengkapi Biodata Anda </h2>
	    </div>
    </div>

    <div class="panel-body">
        <form wire:submit.prevent="save" class="was-validated">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <div class="custom-file">
                        <label class="custom-file-label" for="validatedCustomFile">Upload KK</label>
                        <input type="file" class="custom-file-input" wire:model="kk" id="validatedCustomFile" required>
                        
                        @error('kk') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        @if ($kk)
                        <img src="{{ $kk->temporaryUrl() }}" class="img-thumbnail" width= "50%" alt="Responsive image" >
                        @endif
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <div class="custom-file">
                        <label class="custom-file-label" for="validatedCustomFile">Upload Ijazah</label>
                        <input type="file" class="custom-file-input" wire:model="kk" id="validatedCustomFile" required>
                        
                        @error('kk') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        @if ($kk)
                        <img src="{{ $kk->temporaryUrl() }}" class="img-thumbnail" width= "50%" alt="Responsive image" >
                        @endif
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <div class="custom-file">
                        <label class="custom-file-label" for="validatedCustomFile">Upload KTP</label>
                        <input type="file" class="custom-file-input" wire:model="kk" id="validatedCustomFile" required>
                        
                        @error('kk') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        @if ($kk)
                        <img src="{{ $kk->temporaryUrl() }}" class="img-thumbnail" width= "50%" alt="Responsive image" >
                        @endif
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <div class="custom-file">
                        <label class="custom-file-label" for="validatedCustomFile">Upload KTP</label>
                        <input type="file" class="custom-file-input" wire:model="kk" id="validatedCustomFile" required>
                        
                        @error('kk') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        @if ($kk)
                        <img src="{{ $kk->temporaryUrl() }}" class="img-thumbnail" width= "50%" alt="Responsive image" >
                        @endif
                    </div>
                </div>


                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary">Save Photo</button>
                </div>
            </div>
        
           
        </form>
    </div>
</div>
