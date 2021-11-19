<?php

declare(strict_types=1);

namespace Medine\Mooc\Students\Domain;

interface StudentRepository
{
    public function save(Student $student): void;

    public function search(string $id): ?Student;
}