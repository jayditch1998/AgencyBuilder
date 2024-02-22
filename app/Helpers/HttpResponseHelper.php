<?php

namespace App\Helpers;

class HttpResponseHelper
{
  public function sucessWithDataResponse(array $data, $status = 200, $headers = [])
  {
    return response()->json($data, $status, $headers);
  }

  public function failedMessageResponse(string $message, $status = 500, $headers = [])
  {
    return response()->json($message, $status, $headers);
  }

  public static function __callStatic($name, $arguments)
  {
    $method = "{$name}Response";
    return (new static)->$method(...$arguments);
  }

  public function __call($name, $arguments)
  {
    $method = "{$name}Response";
    return $this->$method(...$arguments);
  }

}