  @if ($status == 1)
    @include('livewire.santri.update')
  @elseif ($status == 2)

  <livewire:santri.upload-doc />
  @else 
      

 
@endif

