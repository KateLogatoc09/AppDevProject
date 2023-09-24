<?php

namespace App\Controllers;
use App\Models\MusicModel;
use App\Controllers\BaseController;

class MusicController extends BaseController
{
    private $music;

    public function __construct()
    {
        $this->music = new \App\Models\MusicModel();
    }

    public function music($music)
    {
        echo $music;
    }

    public function Logatoc()
    {
        $data = ['music' => $this->music->findAll()];
        return view('index', $data);
    }

    public function index()
    {
       //
    }

    public function delete($id)
    {
        $this->music->where('id', $id)->delete();
    }

    public function save()
    {
        $data = [
            'audio' => $this->request->getVar('audio')
        ];
        $this->music->save($data);
        return redirect()->to('/');
    }
}
