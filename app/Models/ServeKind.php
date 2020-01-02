<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ServeKind
 * 
 * @property int $id
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|ServeHistory[] $serve_histories
 *
 * @package App\Models
 */
class ServeKind extends Model
{
	protected $table = 'serve_kinds';

	protected $fillable = [
		'name'
	];

	public function serve_histories()
	{
		return $this->hasMany(ServeHistory::class);
	}
}
