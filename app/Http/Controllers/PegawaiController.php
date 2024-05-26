<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;


class PegawaiController extends Controller
{
    use ValidatesRequests;

    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $pegawai = Pegawai::orderBy('nama_pegawai')->paginate(5);

        //render view with pegawai
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('pegawai.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'nama_pegawai'     => 'required|string|max:100',
            'alamat_pegawai'   => 'required|string|max:100',
            'jabatan'          => 'required|string|max:50'
        ]);

        //create new Pegawai
        Pegawai::create([
            'nama_pegawai'    => $request->nama_pegawai,
            'alamat_pegawai'  => $request->alamat_pegawai,
            'jabatan'         => $request->jabatan
        ]);

        //redirect to index
        return redirect()->route('Pegawai.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get pegawai by ID
        $pegawai = Pegawai::findOrFail($id);

        //render view with pegawai
        return view('Pegawai.show', compact('pegawai'));
    }
    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $pegawai = Pegawai::findOrFail($id);

        //render view with post
        return view('pegawai.edit', compact('pegawai'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama_pegawai'     => 'required|string|max:100',
            'alamat_pegawai'   => 'required|string|max:100',
            'jabatan'          => 'required|string|max:50'
        ]);

        //get post by ID
        $pegawai = Pegawai::findOrFail($id);

        {

            $pegawai->update([
                'nama_pegawai'    => $request->nama_pegawai,
                'alamat_pegawai'  => $request->alamat_pegawai,
                'jabatan'         => $request->jabatan
            ]);
        }
        //redirect to index
        return redirect()->route('Pegawai.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $pegawai = Pegawai::findOrFail($id);

        //delete post
        $pegawai->delete();

        //redirect to index
        return redirect()->route('Pegawai.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    /**
     * exportPdf
     *
     * @return \Illuminate\Http\Response
     */
    public function exportPdf()
    {
        $pegawai = Pegawai::all();

        $pdf = PDF::loadView('pegawai.pdf', compact('pegawai'));
        return $pdf->download('data-pegawai.pdf');
    }
}
