<?php

namespace App\Policies;

use App\Models\User;

class AccessPolicy
{
    public function viewAny(User $user)
    {
        return true; // Semua pengguna dapat melihat daftar anggota
    }

    public function create(User $user)
    {
        return $user->role === 'anggota' || $user->role === 'kader';
    }

    public function update(User $user)
    {
        return $user->role === 'kader'; // Hanya kader yang bisa update
    }

    public function delete(User $user)
    {
        return $user->role === 'kader'; // Hanya kader yang bisa delete
    }

    public function viewKader(User $user)
    {
        return $user->role === 'kader'; // Hanya kader yang bisa melihat data kader
    }

    public function viewLaporan(User $user)
    {
        return $user->role === 'kader'; // Hanya kader yang bisa melihat data laporan
    }
}