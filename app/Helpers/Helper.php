<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class Helper
{
    public static function imageUpload(Request $request, $inputName = 'img_url', $destinationPath = 'images/teams/')
    {
        $disk 		=   config('filesystems.default');

        $cdnPath 	=   config('filesystems.disks')[$disk]['url'].'/';

        $url                =   null;
        if ($request->hasFile($inputName)) {
            if ($request->file($inputName)->isValid()) {
                $extension  = strtolower($request->file($inputName)->getClientOriginalExtension());
                $allowed    =  ['gif','png' ,'jpg', 'jpeg', 'svg'];
                if (!in_array($extension, $allowed)) {
                    return back()->withInput()->withErrors('Only jpg/jpeg, GIF, PNG and svg files are allowed');
                }
                $fileName           = 	$request->file($inputName)->getClientOriginalName();
                $fileName           = 	Str::slug(substr($fileName, 0, (strrpos($fileName, "."))), '-');
                $fileName           =   $fileName.time().'.' . $extension;
                $fileName           =   $destinationPath.$fileName;
                $fileStream         =   file_get_contents($request->file($inputName));

                $settings           =  ['CacheControl' => 'max-age=3888000'];
                $status             =   Storage::disk($disk)->put($fileName, $fileStream, 'public', $settings);
                $url                =   $cdnPath.$fileName;
            } else {
                return back()->withInput()->withErrors('Image is invalid');
            }
            if (!$status) {
                $message = 'There is error uploading file to S3 '.$status.' '.$url;
                Log::error($message);
                return back()->withInput()->withErrors($message);
            }
        }
        return $url;
    }
}
