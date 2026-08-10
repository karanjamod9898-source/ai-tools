<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\OnlineTool;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OnlineToolSeeder extends Seeder
{
    public function run(): void
    {
        $category = Category::where('slug', 'online-tools')->firstOrFail();

        $tools = [
            ['name' => 'PDF to Word', 'description' => 'Convert PDF files into editable Word documents.', 'url' => 'https://www.ilovepdf.com/pdf_to_word', 'icon' => 'fa-regular fa-file-word'],
            ['name' => 'Image Compressor', 'description' => 'Compress PNG and JPG images online.', 'url' => 'https://tinypng.com', 'icon' => 'fa-regular fa-image'],
            ['name' => 'Background Remover', 'description' => 'Remove image backgrounds automatically.', 'url' => 'https://remove.bg', 'icon' => 'fa-solid fa-wand-magic-sparkles'],
            ['name' => 'PDF Merger', 'description' => 'Merge multiple PDF files into one document.', 'url' => 'https://www.ilovepdf.com/merge_pdf', 'icon' => 'fa-regular fa-file-pdf'],
            ['name' => 'PDF Compressor', 'description' => 'Reduce PDF file size online.', 'url' => 'https://www.ilovepdf.com/compress_pdf', 'icon' => 'fa-solid fa-compress'],
            ['name' => 'QR Code Generator', 'description' => 'Create QR codes for links and text.', 'url' => 'https://www.qr-code-generator.com', 'icon' => 'fa-solid fa-qrcode'],
            ['name' => 'JSON Formatter', 'description' => 'Format and validate JSON data.', 'url' => 'https://jsonformatter.org', 'icon' => 'fa-solid fa-code'],
            ['name' => 'Password Generator', 'description' => 'Generate secure random passwords.', 'url' => 'https://www.lastpass.com/features/password-generator', 'icon' => 'fa-solid fa-key'],
            ['name' => 'Word Counter', 'description' => 'Count words, characters, and reading time.', 'url' => 'https://wordcounter.net', 'icon' => 'fa-solid fa-font'],
            ['name' => 'Color Picker', 'description' => 'Pick colors and copy HEX, RGB, or HSL values.', 'url' => 'https://htmlcolorcodes.com/color-picker', 'icon' => 'fa-solid fa-eye-dropper'],
        ];

        foreach ($tools as $toolData) {
            $tool = OnlineTool::updateOrCreate(
                ['slug' => Str::slug($toolData['name'])],
                [
                    'name' => $toolData['name'],
                    'short_description' => $toolData['description'],
                    'description' => $toolData['description'],
                    'tool_key' => Str::slug($toolData['name']),
                    'icon' => $toolData['icon'],
                    'external_url' => $toolData['url'],
                    'status' => 'published',
                    'is_featured' => true,
                    'published_at' => now(),
                ]
            );

            $tool->categories()->syncWithoutDetaching([$category->id]);
        }
    }
}
