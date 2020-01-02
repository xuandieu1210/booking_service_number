<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ServeHistory
 * 
 * @property int $id
 * @property int $client_id
 * @property int $serve_kind_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Client $client
 * @property ServeKind $serve_kind
 *
 * @package App\Models
 */
class ServeHistory extends Model
{
	protected $table = 'serve_histories';

	protected $casts = [
		'client_id' => 'int',
		'serve_kind_id' => 'int'
	];

	protected $fillable = [
		'client_id',
		'serve_kind_id'
	];

	public function client()
	{
		return $this->belongsTo(Client::class);
	}

	public function serve_kind()
	{
		return $this->belongsTo(ServeKind::class);
	}
}
