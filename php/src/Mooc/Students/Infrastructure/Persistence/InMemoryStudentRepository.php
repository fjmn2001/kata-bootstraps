<?php

declare(strict_types=1);

namespace Medine\Mooc\Students\Infrastructure\Persistence;

use Medine\Mooc\Students\Domain\Student;
use Medine\Mooc\Students\Domain\StudentRepository;

final class InMemoryStudentRepository implements StudentRepository
{
    private array $students = [];

    public function save(Student $student): void
    {
        $this->students[$student->id()] = $student;
    }

    public function search(string $id): ?Student
    {
        return $this->students[$id] ?? null;
    }
}