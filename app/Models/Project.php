<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'slug',
        'date_creation',
        'type',
        'tecnology',
        'web_site'
    ] ;

    public static function generateSlug($string){
        $slug = Str::slug($string, '-');
        $original_slug = $slug;

        $exists = Project::where('slug', $slug)->first();
        $c = 1;
        while($exists){
            $slug = $original_slug .'-'. $c;
            $exists = Project::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }
}

