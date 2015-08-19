<?php

class SalahSeeder extends Seeder {

	/**
	 * Run the salah seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Salah::create(array('name' => 'Fajar'));
		Salah::create(array('name' => 'Zuhar'));
		Salah::create(array('name' => 'Asar'));
		Salah::create(array('name' => 'Maghrib'));
		Salah::create(array('name' => 'Isha'));
		Salah::create(array('name' => 'Jumua'));
		Salah::create(array('name' => 'Taraweeh'));
	}

}
