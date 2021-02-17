<div>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Positif</th>
            <th scope="col">Sembuh</th>
            <th scope="col">Meninggal</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($data as $datas)   
          <tr>
            <th scope="row">1</th>
            <td>{{ $datas['nama'] }}</td>
            
          </tr>
        @endforeach 
        </tbody>
      </table>

</div>
