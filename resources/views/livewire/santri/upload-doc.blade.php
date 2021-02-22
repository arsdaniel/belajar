   
					<div class="row">
						<div class="col-md-8">
							<!-- PANEL HEADLINE -->
							<div class="panel panel-headline">
								<div class="panel-heading">
									<h3 class="panel-title">Panel Headline</h3>
									<p class="panel-subtitle">Panel to display most important information</p>
								</div>
								<div class="panel-body">
									<form wire:submit.prevent="save" class="was-validated">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="validatedCustomFile">Upload KK</label>
                                                    <input type="file" class="custom-file-input" wire:model="kk" id="validatedCustomFile" required>
                                                    
                                                    @error('kk') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                                    @if ($kk)
                                                    <img src="{{ $kk->temporaryUrl() }}" class="img-thumbnail" width= "50%" alt="Responsive image" >
                                                    @endif
                                                </div>
                                            </div>
                            
                                            <div class="form-group col-md-4">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="validatedCustomFile">Upload Ijazah</label>
                                                    <input type="file" class="custom-file-input" wire:model="ijazah" id="validatedCustomFile" required>
                                                    
                                                    @error('ijazah') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                                    @if ($ijazah)
                                                    <img src="{{ $ijazah->temporaryUrl() }}" class="img-thumbnail" width= "50%" alt="Responsive image" >
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="validatedCustomFile">Upload KTP</label>
                                                    <input type="file" class="custom-file-input" wire:model="sp_santri" id="validatedCustomFile" required>
                                                    
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
                                               
                                                <button type="submit" class="btn btn-primary ">Simpan Berkas</button>
                                             
                                            </div>
                                        </div> 
                                    
                                    </form>
								</div>
							</div>
							<!-- END PANEL HEADLINE -->
						</div>
						<div class="col-md-4">
							<!-- PANEL NO PADDING -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Panel No Padding</h3>
								</div>
								<div class="panel-body ">
									<div class="">
										<i class="fa fa-thumbs-o-up fa-5x"></i>
										<h3>No Content Padding</h3>
									</div>
								</div>
							</div>
							<!-- END PANEL NO PADDING -->
						</div>
					</div>



