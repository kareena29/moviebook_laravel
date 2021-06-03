<?php

namespace App\Repositories;

interface IHomepageRepository
{
    public function getTrending();

    public function getPopular();

    public  function searchMovies();

    public function getAllMovies();
}
