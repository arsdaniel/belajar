<div>

  @if ($status == 1)
  <livewire:santri.biodata-santri />
  @else
      

 
    <table class="table">
        <thead class="thead-dark">
          <tr> {{$status}}
            <th scope="col">No</th>
            <th scope="col">Provinsi</th>
            
          </tr>
        </thead>
        <tbody>
        @foreach ($santris as $santri)   
          <tr>
            <th scope="row">1</th>
            <td>{{ $santri['name'] }}</td>
            
          </tr>
        @endforeach 
        </tbody>
      </table>
      @endif
</div>
