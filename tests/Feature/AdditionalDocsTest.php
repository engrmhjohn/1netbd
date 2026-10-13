<?php

namespace Tests\Feature;

use Illuminate\Http\UploadedFile;
use Tests\TestCase;

require_once __DIR__ . '/../../app/Helper/image.php';

class AdditionalDocsTest extends TestCase
{
    public function test_optional_document_is_null(): void
    {
        $this->assertNull(image_upload_additional_docs(null));
    }

    public function test_document_conversion_preserves_dimensions_and_can_be_embedded_in_pdf(): void
    {
        foreach ([[1234, 567], [567, 1234]] as [$width, $height]) {
            $file = UploadedFile::fake()->image('document.png', $width, $height);
            $path = image_upload_additional_docs($file);

            try {
                $info = getimagesize(public_path($path));
                $this->assertSame($width, $info[0]);
                $this->assertSame($height, $info[1]);
                $this->assertSame('image/webp', $info['mime']);

                $pdf = new \Mpdf\Mpdf(['tempDir' => storage_path('framework/cache')]);
                $pdf->showImageErrors = true;
                $pdf->WriteHTML('<h3>Additional docs</h3><img src="' . public_path($path) . '" style="max-width: 170mm; max-height: 235mm;">');
                $this->assertStringStartsWith('%PDF-', $pdf->Output('', 'S'));
            } finally {
                delete_image($path);
            }

            $this->assertFileDoesNotExist(public_path($path));
        }
    }

    public function test_create_and_update_reject_non_image_documents(): void
    {
        $controller = new \App\Http\Controllers\Admin\PacakgeBuyController();
        foreach (['saveBuyPackage', 'updateBuyPackage'] as $method) {
            $request = \Illuminate\Http\Request::create('/', 'POST', [], [], [
                'additional_docs' => UploadedFile::fake()->create('document.pdf', 10, 'application/pdf'),
            ]);
            try {
                $controller->$method($request);
                $this->fail('Non-image upload should be rejected.');
            } catch (\Illuminate\Validation\ValidationException $exception) {
                $this->assertArrayHasKey('additional_docs', $exception->errors());
            }
        }
    }
}
