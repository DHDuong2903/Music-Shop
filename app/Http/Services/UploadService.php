<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Storage;

class UploadService
{
    public function store($request)
    {
        if ($request->hasFile('file')) {
            try {
                // Lấy tên tệp gốc
                $name = $request->file('file')->getClientOriginalName();
                // Tạo thư mục theo ngày
                $pathFull = 'uploads/' . date("Y/m/d");

                // Lưu file vào thư mục storage/app/public
                $request->file('file')->storeAs(
                    'public/' . $pathFull, $name
                );

                // Trả về URL công khai của tệp
                return url('storage/' . $pathFull . '/' . $name);
            } catch (\Exception $error) {
                return false;
            }
        }
        return false;
    }
}
