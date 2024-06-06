<?php

namespace App\Http\Controllers;

use App\Models\olahraga;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\Session; 

class olahragaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;

    if(strlen($katakunci)) {
        $data = olahraga::where('nama_katlapangan', 'like', "%$katakunci%")->paginate(3);
    } else {
        $data = olahraga::orderBy('jumlah_lapangan', 'desc')->paginate(1);
    }

    return view('olahraga.index')->with('data', $data);
}
     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tampilkan halaman untuk membuat data baru
        return view('olahraga.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    
    {
        // Validasi input
        $request->validate([
            'nama_katlapangan' => 'required',
            'harga_katlapangan' => 'required|numeric',
            'jumlah_lapangan' => 'required|numeric',
            'created_by' => 'required',
            'updated_by' => 'required',
            'file_katlapangan' => 'required|file|mimes:pdf,jpg,jpeg,png', // Menambahkan validasi untuk file
        ], [
            'nama_katlapangan.required' => 'Nama kategori lapangan wajib diisi',
            'harga_katlapangan.required' => 'Harga wajib diisi',
            'harga_katlapangan.numeric' => 'Harga wajib diisi dengan angka',
            'jumlah_lapangan.required' => 'Jumlah lapangan wajib diisi',
            'jumlah_lapangan.numeric' => 'Jumlah lapangan wajib diisi dengan angka',
            'created_by.required' => 'Dibuat oleh wajib diisi',
            'updated_by.required' => 'Diperbarui oleh wajib diisi',
            'file_katlapangan.required' => 'File wajib diunggah',
            'file_katlapangan.file' => 'File harus berupa file',
            'file_katlapangan.mimes' => 'File harus dalam format PDF, JPG, JPEG, atau PNG',
        ]);
    
        // Handling file upload
        if ($request->hasFile('file_katlapangan')) {
            // Lakukan proses upload file di sini
            $file = $request->file('file_katlapangan');
            $fileName = $file->getClientOriginalName(); // Mengambil nama file
            
            // Lakukan proses penyimpanan file di sini
            $file->move('uploads', $fileName); // Memindahkan file ke dalam folder 'uploads'
        } else {
            // Jika file tidak diunggah, berikan nilai default
            $fileName = null;
        }
    
        // Simpan data ke dalam database
        
        $data = [
            'nama_katlapangan' => $request->nama_katlapangan,
            'harga_katlapangan' => $request->harga_katlapangan,
            'file_katlapangan' => $fileName,
            'jumlah_lapangan' => $request->jumlah_lapangan,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ];
    
        try {
            olahraga::create($data);
            return redirect()->to('olahraga')->with('success', 'Berhasil menambahkan data');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Gagal menambahkan data: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $data = olahraga::where('nama_katlapangan',$id)->first();
       return view('olahraga.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'harga_katlapangan' => 'required|numeric',
            'jumlah_lapangan' => 'required|numeric',
            'created_by' => 'required',
            'updated_by' => 'required',
            'file_katlapangan' => 'required|file|mimes:pdf,jpg,jpeg,png', // Menambahkan validasi untuk file
        ], [
            'harga_katlapangan.required' => 'Harga wajib diisi',
            'harga_katlapangan.numeric' => 'Harga wajib diisi dengan angka',
            'jumlah_lapangan.required' => 'Jumlah lapangan wajib diisi',
            'jumlah_lapangan.numeric' => 'Jumlah lapangan wajib diisi dengan angka',
            'created_by.required' => 'Dibuat oleh wajib diisi',
            'updated_by.required' => 'Diperbarui oleh wajib diisi',
            'file_katlapangan.required' => 'File wajib diunggah',
            'file_katlapangan.file' => 'File harus berupa file',
            'file_katlapangan.mimes' => 'File harus dalam format PDF, JPG, JPEG, atau PNG',
        ]);
    
        // Handling file upload
        if ($request->hasFile('file_katlapangan')) {
            // Lakukan proses upload file di sini
            $file = $request->file('file_katlapangan');
            $fileName = $file->getClientOriginalName(); // Mengambil nama file
            
            // Lakukan proses penyimpanan file di sini
            $file->move('uploads', $fileName); // Memindahkan file ke dalam folder 'uploads'
        } else {
            // Jika file tidak diunggah, berikan nilai default
            $fileName = null;
        }
    
        // Simpan data ke dalam database
        $data = [
            
            'harga_katlapangan' => $request->harga_katlapangan,
            'file_katlapangan' => $fileName,
            'jumlah_lapangan' => $request->jumlah_lapangan,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ];
        olahraga::where('nama_katlapangan',$id)->update($data);
        return redirect()->to('olahraga')->with('success','Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        olahraga::where('nama_katlapangan',$id)->delete();
        return redirect()->to('olahraga')->with('success','Berhasil melakukan delete data');
    }
}
