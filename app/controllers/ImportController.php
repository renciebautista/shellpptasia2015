<?php

class ImportController extends \BaseController {

	public function delegates()
	{
		Excel::selectSheets('1st_wave')->load(public_path('import/delegates.xlsx'), function($reader) {
			Delegate::batchInsert($reader->get());
		});
	}

}