<?php

namespace App\Http\Livewire\Admin\Biaya;

use App\Models\Biaya;
use Livewire\Component;


class Index extends Component
{
    public $perPage = '10';
    public $searchTerm;
    public $data;
    public $isModal = 0;
    public $hapus = 0;
    public $nama_biaya, $kelas, $tahun_ajaran,  $harga, $biaya_id;

    protected $rules = [
        'nama_biaya' => 'required',
        'tahun_ajaran' => 'required',
        'kelas' => 'required',
        'harga' => 'required|integer',
    ];

    protected $messages = [
        'required' => ':attribute Harus diisi',
        'integer' => ':attribute Harus  Nominal'
    ];

    public function render()
    {
        $this->data['biaya'] = $this->getBiaya();
        return view('livewire.admin.biayapendaftaran.index', $this->data);
    }

    public function getBiaya()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $biaya = new Biaya();

        if (!empty($searchTerm)) {
            $biaya = $biaya->where('nama_biaya', 'LIKE', $searchTerm);
        }

        return $biaya->get();
    }

    public function create()
    {
        $this->resetFields();
        $this->openModal();
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function resetFields()
    {
        $this->nama_biaya = '';
        $this->tahun_ajaran = '';
        $this->kelas = '';
        $this->harga = '';
    }

    public function store()
    {
        $this->validate([
            'nama_biaya' => 'required',
            'tahun_ajaran' => 'required',
            'kelas' => 'required',
            'harga' => 'required|integer',
        ]);

        Biaya::updateOrCreate(['id' => $this->biaya_id], [
            'nama_biaya' => $this->nama_biaya,
            'tahun_ajaran' => $this->tahun_ajaran,
            'kelas' => $this->kelas,
            'harga' => $this->harga,

        ]);
        
       
        $this->closeModal();
        $this->resetFields();
        session()->flash('success', 'Data berhasil Disimpan');
    }

    public  function edit($id){
        $biaya = Biaya::findOrFail($id);
        $this->biaya_id = $id;
        $this->nama_biaya = $biaya->nama_biaya;
        $this->tahun_ajaran = $biaya->tahun_ajaran;
        $this->kelas = $biaya->kelas;
        $this->harga = $biaya->harga;

        $this->openModal();
    }

    public function confirmHapus($id){
        $biaya = Biaya::findOrFail($id);
        $this->biaya_id = $id;
        $this->nama_biaya = $biaya->nama_biaya;
        $this->hapus = true;
    }

    public function batalHapus(){
        $this->hapus = false;
    }



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function delete($id)
    {
        $biaya = Biaya::findOrFail($id);
        $biaya->delete(); 
        session()->flash('success', 'Data berhasil Dihapus');
        $this->batalHapus();
    }
}
