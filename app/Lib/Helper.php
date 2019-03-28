<?php
/**
 * Created by PhpStorm.
 * User: Semih Duman
 * Date: 24.03.2019
 * Time: 20:10
 */

namespace App\Lib;


use App\Models\Log;
use Illuminate\Support\Facades\Session;

class Helper
{
    public function toaster($type ,$message,$title)
    {
        Session::flash( 'toaster','<script>
                        $(document).ready(function() {
                          toastr.'.$type.'("'.$message.'", "'.$title.'", {
                            timeOut: "50000",
                        });
                     
                    });
            </script>' );
    }


    public function createLog($code,$message,$ip,$userId)
    {
        /**
         *  code açıkalamaları
         *  001 -> İnsert
         *  002 -> Update
         *  003 -> Delete
         *  004 -> Login
         *  005 -> Logout
         *  006 -> Request
         */
        try{
            Log::create([
                'code'       => $code,
                'message'    => $message,
                'ip'         => $ip,
                'user_id'   => $userId
            ]);
        }catch (\Exception $exception){

        }

    }
}
