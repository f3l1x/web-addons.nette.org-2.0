<?php declare (strict_types = 1);

namespace App\Modules\Front\Base\Controls\Layout\Box;

use App\Model\UI\BasePropsControl;

class Control extends BasePropsControl
{

	protected function getPropsClass(): string
	{
		return BoxProps::class;
	}

}
