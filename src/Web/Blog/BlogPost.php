<?php

namespace App\Web\Blog;

use DateTimeImmutable;

use function Tempest\uri;

final class BlogPost
{
    public string $slug;
    public string $title;
    public ?Author $author;
    public string $content;
    public DateTimeImmutable $createdAt;
    public ?BlogPostTag $tag = null;
    public ?string $description = null;
    public bool $published = true;
    public array $meta = [];
    public string $uri {
        get {
            return uri([BlogController::class, 'show'], slug: $this->slug);
        }
    }
}
