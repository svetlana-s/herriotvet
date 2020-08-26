<?php

class Model_Doctors extends Model
{
	
	public function get_data(): array
	{
		// emulate data
		return array(
			
			array(
				'Doctor' => 'Джеймс Хэрриот',
				'Position' => 'Главный врач, Главный хирург',
				'Specialization' => 'Терапия, хирургия',
			),

			array(
				'Doctor' => 'Дональд Синклер',
				'Position' => 'Врач-терапевт',
				'Specialization' => 'Терапия, дерматология',
			),

			array(
				'Doctor' => 'Зигфрид Фарнон',
				'Position' => 'Хирург, врач-терапевт',
				'Specialization' => 'Хирургия',
			),

			array(
				'Doctor' => 'Томас Маккормак',
				'Position' => 'Врач-терапевт, Анестезиолог',
				'Specialization' => 'Терапия, анестезиология',
			),

			array(
				'Doctor' => 'Розмари Хэрриот',
				'Position' => 'Эндокринолог',
				'Specialization' => 'Терапия, эндокринология',
			),
		);
	}
}
