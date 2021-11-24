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
    public function itShouldSaveAStudent(): void
    {
        $this->expectNotToPerformAssertions();
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
    public function itShouldSearchAExistingStudent(): void
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
    public function itShouldSearchANonExistingStudent(): void
    {
        $repository = new InMemoryStudentRepository();
        $customId = 'random-id';

        $findedStudent = ($repository)->search($customId);

        self::assertNull($findedStudent);
    }
}
