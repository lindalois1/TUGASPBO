<?php

namespace App\Controllers;

use App\Core\Controller;

class Film extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Film();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('Film/index', $data);
	}

	public function input()
	{
		$this->dashboard('Film/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/Film');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('Film/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/Film');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/Film');
	}
}
