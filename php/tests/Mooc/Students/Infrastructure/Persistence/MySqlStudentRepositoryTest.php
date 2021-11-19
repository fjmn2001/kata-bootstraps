<?php

namespace Tests\Mooc\Students\Infrastructure\Persistence;

use Medine\Mooc\Students\Domain\Student;
use Medine\Mooc\Students\Infrastructure\Persistence\InMemoryStudentRepository;
use PHPUnit\Framework\TestCase;

class MySqlStudentRepositoryTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_save_a_student(): void
    {
        $student = new Student(
            'custom-id',
            'custom-name'
        );
        $repository = new InMemoryStudentRepository();

        ($repository)->save($student);
    }

    /**
     * @test
     */
    public function it_should_search_a_existing_student(): void
    {
        $repository = new InMemoryStudentRepository();
        $customId = 'random-id';
        $newStudent = new Student(
            $customId,
            'custom-name'
        );
        ($repository)->save($newStudent);

        $findedStudent = ($repository)->search($customId);

        self::assertEquals($findedStudent, $newStudent);
    }

    /**
     * @test
     */
    public function it_should_search_a_non_existing_student(): void
    {
        $repository = new InMemoryStudentRepository();
        $customId = 'random-id';

        $findedStudent = ($repository)->search($customId);

        self::assertNull($findedStudent);
    }
}
