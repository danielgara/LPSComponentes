<?php

namespace aspects\admincategorias;

include_once \Go\Instrument\Transformer\FilterInjectorTransformer::rewrite(("../../config/db.php"), 'C:\wamp\www\PoaEShopping\aspects\admincategorias');
include_once \Go\Instrument\Transformer\FilterInjectorTransformer::rewrite(("../../models/categoria.php"), 'C:\wamp\www\PoaEShopping\aspects\admincategorias');

class AdminCategorias__AopProxied{
	
	public function agregar($n, $d){
		$c=new \categoria();
		$c->setNombre($n);
		$c->setDescripcion($d);
		//$c->agregar();
	}
}
include_once AOP_CACHE_DIR . '/_proxies/PoaEShopping\\aspects\\admincategorias\\AdminCategorias.php';

