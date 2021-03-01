    <div class="form-group col-md-4">   
                <label for="user_id">Nama Depan</label>
                <input type="text"  wire:model.debounce.500ms.debounce.500ms="user_id" value ="user_id" class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id" placeholder="Nama Depan">
                @error('user_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>