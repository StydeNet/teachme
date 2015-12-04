<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class ResourceTest extends TestCase {

	use DatabaseTransactions;

    protected $title = 'Curso de interfaces dinámicas con Laravel y jQuery';
    protected $link = 'https://styde.net/curso-de-interfaces-dinamicas-con-laravel-y-jquery/';

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function test_create_resource()
	{
        // Having
		$user = seed('User');

        // When
		$this->actingAs($user)
			->visit(route('tickets.create'))
			->type($this->title, 'title')
            ->type($this->link, 'link')
			->press('Enviar solicitud');

        // Then
        $this->seeInDatabase('tickets', [
            'title'  => $this->title,
            'link'   => $this->link,
            'status' => 'closed',
        ]);

		$this->see($this->title)
            ->seeLink('Ver recurso', $this->link);
	}

}
