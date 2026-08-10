<?php

namespace Database\Seeders;

use App\Models\AiTool;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AiToolSeeder extends Seeder
{
    public function run(): void
    {
        $tools = [
            [
                'name' => 'ChatGPT',
                'category_slug' => 'writing',
                'description' => 'AI chatbot',
                'website_url' => 'https://chat.openai.com',
            ],
            [
                'name' => 'Jasper',
                'category_slug' => 'writing',
                'description' => 'AI writing assistant for marketing copy, blogs, and content workflows.',
                'website_url' => 'https://www.jasper.ai',
            ],
            ['name' => 'Copy.ai', 'category_slug' => 'writing', 'description' => 'AI copywriting platform for sales and marketing content.', 'website_url' => 'https://www.copy.ai'],
            ['name' => 'Writesonic', 'category_slug' => 'writing', 'description' => 'AI writing tool for articles, ads, emails, and landing pages.', 'website_url' => 'https://writesonic.com'],
            ['name' => 'Grammarly', 'category_slug' => 'writing', 'description' => 'AI writing assistant for grammar, clarity, and tone.', 'website_url' => 'https://www.grammarly.com'],
            ['name' => 'QuillBot', 'category_slug' => 'writing', 'description' => 'AI paraphrasing and rewriting tool.', 'website_url' => 'https://quillbot.com'],
            ['name' => 'Rytr', 'category_slug' => 'writing', 'description' => 'AI writing assistant for short-form and long-form content.', 'website_url' => 'https://rytr.me'],
            ['name' => 'Notion AI', 'category_slug' => 'writing', 'description' => 'AI writing and productivity assistant built into Notion.', 'website_url' => 'https://www.notion.so/product/ai'],
            ['name' => 'Wordtune', 'category_slug' => 'writing', 'description' => 'AI tool for rewriting, summarizing, and improving text.', 'website_url' => 'https://www.wordtune.com'],
            ['name' => 'Sudowrite', 'category_slug' => 'writing', 'description' => 'AI writing companion for creative writers and storytellers.', 'website_url' => 'https://www.sudowrite.com'],
            [
                'name' => 'Midjourney',
                'category_slug' => 'image',
                'description' => 'AI image generation tool for creating artwork and visual concepts.',
                'website_url' => 'https://www.midjourney.com',
            ],
            [
                'name' => 'DALL-E',
                'category_slug' => 'image',
                'description' => 'AI image generation tool for creating images from text prompts.',
                'website_url' => 'https://openai.com/dall-e',
            ],
            ['name' => 'Leonardo AI', 'category_slug' => 'image', 'description' => 'AI image generation platform for creative assets and design.', 'website_url' => 'https://leonardo.ai'],
            ['name' => 'Adobe Firefly', 'category_slug' => 'image', 'description' => 'Generative AI image tools from Adobe.', 'website_url' => 'https://firefly.adobe.com'],
            ['name' => 'Canva AI Image Generator', 'category_slug' => 'image', 'description' => 'AI-powered image generation inside Canva.', 'website_url' => 'https://www.canva.com/ai-image-generator'],
            ['name' => 'Stable Diffusion', 'category_slug' => 'image', 'description' => 'Open image generation model ecosystem for AI art.', 'website_url' => 'https://stability.ai'],
            ['name' => 'Ideogram', 'category_slug' => 'image', 'description' => 'AI image generator with strong typography support.', 'website_url' => 'https://ideogram.ai'],
            ['name' => 'Playground AI', 'category_slug' => 'image', 'description' => 'AI design and image creation platform.', 'website_url' => 'https://playground.com'],
            ['name' => 'NightCafe', 'category_slug' => 'image', 'description' => 'AI art generator with multiple generation styles.', 'website_url' => 'https://nightcafe.studio'],
            ['name' => 'Freepik AI Image Generator', 'category_slug' => 'image', 'description' => 'AI image creation tool for design resources.', 'website_url' => 'https://www.freepik.com/ai/image-generator'],
            [
                'name' => 'GitHub Copilot',
                'category_slug' => 'coding',
                'description' => 'AI coding assistant that helps developers write code faster.',
                'website_url' => 'https://github.com/features/copilot',
            ],
            ['name' => 'Codeium', 'category_slug' => 'coding', 'description' => 'AI code completion and chat assistant for developers.', 'website_url' => 'https://codeium.com'],
            ['name' => 'Cursor', 'category_slug' => 'coding', 'description' => 'AI code editor for pair programming and codebase assistance.', 'website_url' => 'https://cursor.com'],
            ['name' => 'Tabnine', 'category_slug' => 'coding', 'description' => 'AI coding assistant with code completion for teams.', 'website_url' => 'https://www.tabnine.com'],
            ['name' => 'Replit AI', 'category_slug' => 'coding', 'description' => 'AI coding tools inside the Replit development platform.', 'website_url' => 'https://replit.com/ai'],
            ['name' => 'Amazon Q Developer', 'category_slug' => 'coding', 'description' => 'AI assistant for software development and AWS workflows.', 'website_url' => 'https://aws.amazon.com/q/developer'],
            ['name' => 'Sourcegraph Cody', 'category_slug' => 'coding', 'description' => 'AI coding assistant for understanding and editing codebases.', 'website_url' => 'https://sourcegraph.com/cody'],
            ['name' => 'CodeRabbit', 'category_slug' => 'coding', 'description' => 'AI code review assistant for pull requests.', 'website_url' => 'https://www.coderabbit.ai'],
            ['name' => 'CodiumAI', 'category_slug' => 'coding', 'description' => 'AI tool for generating tests and improving code quality.', 'website_url' => 'https://www.codium.ai'],
            ['name' => 'Phind', 'category_slug' => 'coding', 'description' => 'AI search and answer engine for developers.', 'website_url' => 'https://www.phind.com'],
            ['name' => 'Runway ML', 'category_slug' => 'video', 'description' => 'AI video generation and editing platform.', 'website_url' => 'https://runwayml.com'],
            ['name' => 'Pictory', 'category_slug' => 'video', 'description' => 'AI video creation tool for turning scripts and articles into videos.', 'website_url' => 'https://pictory.ai'],
            ['name' => 'Synthesia', 'category_slug' => 'video', 'description' => 'AI avatar video creation platform.', 'website_url' => 'https://www.synthesia.io'],
            ['name' => 'HeyGen', 'category_slug' => 'video', 'description' => 'AI video generation platform for avatar and business videos.', 'website_url' => 'https://www.heygen.com'],
            ['name' => 'Descript', 'category_slug' => 'video', 'description' => 'AI-powered video and audio editing tool.', 'website_url' => 'https://www.descript.com'],
            ['name' => 'CapCut', 'category_slug' => 'video', 'description' => 'Video editor with AI editing and creation features.', 'website_url' => 'https://www.capcut.com'],
            ['name' => 'VEED AI', 'category_slug' => 'video', 'description' => 'Online video editor with AI tools for subtitles, avatars, and editing.', 'website_url' => 'https://www.veed.io'],
            ['name' => 'Lumen5', 'category_slug' => 'video', 'description' => 'AI video maker for transforming content into videos.', 'website_url' => 'https://lumen5.com'],
            ['name' => 'Fliki', 'category_slug' => 'video', 'description' => 'AI video generator with text-to-speech and media tools.', 'website_url' => 'https://fliki.ai'],
            ['name' => 'InVideo AI', 'category_slug' => 'video', 'description' => 'AI video creation platform for marketing and social content.', 'website_url' => 'https://invideo.io/ai'],
        ];

        foreach ($tools as $toolData) {
            $category = Category::where('slug', $toolData['category_slug'])->firstOrFail();

            $tool = AiTool::updateOrCreate(
                ['slug' => Str::slug($toolData['name'])],
                [
                    'name' => $toolData['name'],
                    'short_description' => $toolData['description'],
                    'description' => $toolData['description'],
                    'website_url' => $toolData['website_url'],
                    'status' => 'published',
                    'is_featured' => true,
                    'is_verified' => true,
                    'published_at' => now(),
                ]
            );

            $tool->categories()->syncWithoutDetaching([$category->id]);
        }
    }
}
