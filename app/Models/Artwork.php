<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;

    /**
     * ARTWORK ATTRIBUTES
     * $this->attributes['id'] - int - contains the artwork primary key (id)
     * $this->attributes['title'] - string - contains the artwork name
     * $this->attributes['author'] - string - contains the author name
     * $this->attributes['keyword'] - string - contains the keyword
     * $this->attributes['category'] - string - contains the category
     * $this->attributes['details'] - string - contains the artwork details
     * $this->attributes['image'] - string - contains the artwork image
     * $this->attributes['created_at'] - timestamp - contains the artwork creation date
     * $this->attributes['updated_at'] - timestamp - contains the artwork update date
     */
    public static function validate($request): void
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'keyword' => 'required|max:50',
            'category' => 'required|max:30',
            'details' => 'required|max:255',
            'image' => 'required|image',
        ]);
    }

    public function getId(): mixed
    {
        return $this->attributes['id'];
    }

    public function setId($id): void
    {
        $this->attributes['id'] = $id;
    }

    public function getTitle(): mixed
    {
        return $this->attributes['title'];
    }

    public function setTitle($title): void
    {
        $this->attributes['title'] = $title;
    }

    public function getAuthor(): mixed
    {
        return $this->attributes['author'];
    }

    public function setAuthor($author): void
    {
        $this->attributes['author'] = $author;
    }

    public function getKeyword(): mixed
    {
        return $this->attributes['keyword'];
    }

    public function setKeyword($keyword): void
    {
        $this->attributes['keyword'] = $keyword;
    }

    public function getCategory(): mixed
    {
        return $this->attributes['category'];
    }

    public function setCategory($category): void
    {
        $this->attributes['category'] = $category;
    }

    public function getDetails(): mixed
    {
        return $this->attributes['details'];
    }

    public function setDetails($details): void
    {
        $this->attributes['details'] = $details;
    }

    public function getDescription(): mixed
    {
        return $this->attributes['description'];
    }

    public function setDescription($description): void
    {
        $this->attributes['description'] = $description;
    }

    public function getImage(): mixed
    {
        return $this->attributes['image'];
    }

    public function setImage($image): void
    {
        $this->attributes['image'] = $image;
    }

    public function getCreatedAt(): mixed
    {
        return $this->attributes['created_at'];
    }

    public function setCreatedAt($createdAt): void
    {
        $this->attributes['created_at'] = $createdAt;
    }

    public function getUpdatedAt(): mixed
    {
        return $this->attributes['updated_at'];
    }

    public function setUpdatedAt($updatedAt): void
    {
        $this->attributes['updated_at'] = $updatedAt;
    }
}
