   
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
                                            <div class="form-group col-md-12">
                                                <div class="custom-file">
                                                <div class="col-md-8">
                                                    <label class="custom-file-label" for="kk">Silahkan Upload File KK anda dengan format pdf dan ukuran maksimal 1000kb</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="file" class="custom-file-input" wire:model="kk" id="kk" required>
                                                    <div wire:loading wire:target="kk" class="text-sm text-gray-500 italic">Uploading...</div>
                                                    @error('kk') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </div>
                                                   
                                                </div>
                                            </div>
                            
                                            <div class="form-group col-md-12">
                                                <div class="custom-file">
                                                <div class="col-md-8">
                                                    <label class="custom-file-label" for="ijazah">Upload Ijazah</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="file" class="custom-file-input" wire:model="ijazah" id="ijazah" required>
                                                    <div wire:loading wire:target="ijazah" class="text-sm text-gray-500 italic">Uploading...</div>
                                                    
                                                    @error('ijazah') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <div class="custom-file">
                                                <div class="col-md-8">
                                                    <label class="custom-file-label" for="spSantri">Upload KTP</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="file" class="custom-file-input" wire:model="spSantri" id="spSantri" required>
                                                    <div wire:loading wire:target="spSantri" class="text-sm text-gray-500 italic">Uploading...</div>
                                                    
                                                    @error('spSantri') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </div>
                                                </div>
                                                   
                                            </div>
                            
                                            <div class="form-group col-md-12">
                                                <div class="custom-file">
                                                <div class="col-md-8">
                                                    <label class="custom-file-label" for="spWsantri">Upload KTP</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="file" class="custom-file-input" wire:model="spWsantri" id="spWsantri" required>
                                                    <div wire:loading wire:target="spWsantri" class="text-sm text-gray-500 italic">Uploading...</div>
                                                    
                                                    @error('spWsantri') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                                   
                                                </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <div class="custom-file">
                                                <div class="col-md-8">
                                                    <label class="custom-file-label" for="spiQabul">Upload KTP</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="file" class="custom-file-input" wire:model="spiQabul" id="spiQabul" required>
                                                    <div wire:loading wire:target="spiQabul" class="text-sm text-gray-500 italic">Uploading...</div>
                                                    
                                                    @error('spiQabul') <div class="invalid-feedback">{{ $message }}</div>@enderror
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



