<?php

require_once __DIR__ . '/../models/Mahasiswa.php';

class MahasiswaController
{
    private Mahasiswa $mahasiswa;

    public function __construct(PDO $db)
    {
        $this->mahasiswa = new Mahasiswa($db);
    }

    public function index(): array
    {
        return $this->mahasiswa->getAll();
    }

    public function show(int $id): array|false
    {
        return $this->mahasiswa->findById($id);
    }

    public function store(array $data): bool
    {
        return $this->mahasiswa->insert($data);
    }

    public function update(int $id, array $data): bool
    {
        return $this->mahasiswa->update($id, $data);
    }

    public function destroy(int $id): bool
    {
        return $this->mahasiswa->delete($id);
    }
}
