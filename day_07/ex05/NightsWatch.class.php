<?php
class NightsWatch implements IFighter
{
	private $kwargs = array();
	public function recruit($s)
	{
		$this->kwargs[] = $s;
	}
	function fight()
	{
		foreach ($this->kwargs as $s) {
			if (method_exists(get_class($s), 'fight'))
				$s->fight();
		}
	}
}
