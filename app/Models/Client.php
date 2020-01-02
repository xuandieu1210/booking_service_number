<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $id
 * @property string $name
 * @property int $birthday
 * @property string $id_card
 * @property string $phone_number
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|ServeHistory[] $serve_histories
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'clients';

	protected $casts = [
		'birthday' => 'int'
	];

	protected $fillable = [
		'name',
		'birthday',
		'id_card',
		'phone_number'
	];

	public function serve_histories()
	{
		return $this->hasMany(ServeHistory::class);
	}
}
