<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['id', 'title', 'body'];

    // Dữ liệu mô phỏng (chưa có migration/CSDL)
    protected static function mockData(): array
    {
        return [
            1 => ['id' => 1, 'title' => 'Giới thiệu Laravel 12', 'body' => 'Nội dung A'],
            2 => ['id' => 2, 'title' => 'Blade Components', 'body' => 'Nội dung B'],
        ];
    }

    // Mô phỏng findOrFail: không có thì ném ModelNotFoundException (-> 404)
    public static function findOrFail(int|string $id): static
    {
        $data = static::mockData()[(int) $id] ?? null;

        if ($data === null) {
            throw (new \Illuminate\Database\Eloquent\ModelNotFoundException)->setModel(static::class, [$id]);
        }

        return new static($data);
    }

    // Implicit route model binding sẽ gọi hàm này thay vì truy vấn DB
    public function resolveRouteBinding($value, $field = null)
    {
        return static::findOrFail($value);
    }
}
