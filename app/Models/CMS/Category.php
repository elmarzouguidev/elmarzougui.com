<?php

namespace App\Models\CMS;

use App\Traits\GetModelByKeyName;
use App\Traits\HasSlug;
use App\Traits\HasTag;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use GetModelByKeyName;
    use UuidGenerator;
    use HasSlug;
    use HasTag;
}
