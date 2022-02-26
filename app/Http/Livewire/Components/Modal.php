<?php

namespace App\Http\Livewire\Components;

class Modal extends Openable
{
	public string $opacity = '0';
	public string $type = '';
	public array $params = [];
	public string $modalSize = 'md:max-w-xl';

	protected $listeners = [
		'openModal',
		'closeModal',
		'deleteModal',
	];

	public function openModal(string $type, array $params = [])
	{
		$this->open();
		$this->type = $type;
		$this->params = $params;
		$this->opacity = '100';
	}

	public function deleteModal($params, string $form = 'forms.base-delete-form')
	{
		return $this->openModal($form, $params);
	}

	public function closeModal()
	{
		$this->close();
		$this->opacity = '0';
	}

	public function render()
	{
		return view('livewire.modal');
	}
}
