<?php

namespace App\Service;

class NotificationService
{
    /**
     * Create a new class instance.
     */

    private static $createMessage = ' Created successfully.';
    private static $updateMessage = ' Updated successfully.';

    private static $deleteMessage = ' Deleted successfully.';

    private static $errorMessage = ' Something went wrong.';



    public static function createMessage($message=null)
    {
        notyf()->success($message??self::$createMessage);
    }

    public static function updateMessage($message=null)
    {
        notyf()->success($message??self::$updateMessage);
    }

    public static function deleteMessage($message=null)
    {
        notyf()->success($message?? self::$deleteMessage);
    }

    public static function errorMessage($message=null){

        notyf()->error($message??self::$errorMessage);
    }
}
