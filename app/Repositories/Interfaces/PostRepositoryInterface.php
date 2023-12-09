<?php

namespace App\Repositories\Interfaces;

interface PostRepositoryInterface
{
  public function All();
  public function storeData($request);
  public function findById($id);
  public function updateData($request, $id);
}