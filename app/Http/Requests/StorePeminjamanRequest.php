<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePeminjamanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_guru' => 'required|string|max:255',
            'jenis_guru' => 'required|string|max:255',
            'nama_siswa' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'no_inventaris' => 'required|string|max:255|unique:peminjaman,no_inventaris',
            'jumlah' => 'required|integer|min:1',
            'keadaan_waktu_dipinjam' => 'required|in:baik,rusak',
        ];
    }

    public function messages()
    {
        return [
            'nama_guru.required' => 'Nama guru harus diisi.',
            'jenis_guru.required' => 'Jenis guru harus diisi.',
            'nama_siswa.required' => 'Nama siswa harus diisi.',
            'kelas.required' => 'Kelas harus diisi.',
            'nama_barang.required' => 'Nama barang harus diisi.',
            'no_inventaris.required' => 'No inventaris harus diisi.',
            'no_inventaris.unique' => 'No inventaris sudah ada.',
            'jumlah.required' => 'Jumlah harus diisi.',
            'jumlah.integer' => 'Jumlah harus berupa angka.',
            'jumlah.min' => 'Jumlah minimal 1.',
            'keadaan_waktu_dipinjam.required' => 'Keadaan saat dipinjam harus diisi.',
            'keadaan_waktu_dipinjam.in' => 'Keadaan saat dipinjam harus baik atau rusak.',
        ];
    }
}
