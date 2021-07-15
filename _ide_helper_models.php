<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\BukuTamu
 *
 * @property int $id
 * @property int $user_id
 * @property string $nama
 * @property string $alamat
 * @property string $tanggal
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\BukuTamuFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|BukuTamu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BukuTamu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BukuTamu query()
 */
	class BukuTamu extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Donasi
 *
 * @property int $id
 * @property int $user_id
 * @property string $nama
 * @property string $alamat
 * @property string $no_telepon
 * @property string $jenis_kelamin
 * @property string $bukti_donasi
 * @property string $tanggal
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\DonasiFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Donasi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Donasi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Donasi query()
 */
	class Donasi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Donatur
 *
 * @property int $id
 * @property int $user_id
 * @property string $nama
 * @property string $status
 * @property string $ttl
 * @property string $no_telepon
 * @property string $pekerjaan
 * @property string $tanggal
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\DonaturFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Donatur newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Donatur newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Donatur query()
 */
	class Donatur extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $nama
 * @property string $alamat
 * @property string $jenis_kelamin
 * @property string $username
 * @property string $email
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property int $admin
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BukuTamu[] $bukuTamu
 * @property-read int|null $buku_tamu_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Donasi[] $donasi
 * @property-read int|null $donasi_count
 * @property-read \App\Models\Donatur|null $donatur
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

