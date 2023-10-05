<?php

namespace Tests\Feature;

use App\Services\checkWeb;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class NamaServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    public function testServiceMethod()
    {
        $namaService = new NamaService();
        $result = $namaService->someMethod();

        // Sesuaikan dengan pengujian Anda
        $this->assertTrue($result); // Contoh: Menggunakan asserTrue untuk memastikan hasilnya benar
    }

}
